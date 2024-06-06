const express = require('express');
const path = require('path');
const fileUpload = require('express-fileupload');
const natural = require('natural');
const cosineSimilarity = require('cosine-similarity');
const pdfParse = require('pdf-parse');
const mammoth = require('mammoth');
const XLSX = require('xlsx');
const textract = require('textract');

const app = express();
const staticDir = path.join(__dirname, 'src');

app.use(express.static(staticDir));
app.use(fileUpload());

app.get('/', (req, res) => {
  res.sendFile(path.join(staticDir, 'index.html'));
});

function extractTextFromFile(file) {
  const fileType = path.extname(file.name).toLowerCase();
  switch (fileType) {
    case '.txt':
      return Promise.resolve(file.data.toString('utf8'));
    case '.pdf':
      return pdfParse(file.data).then(data => data.text);
    case '.docx':
      return mammoth.extractRawText({ buffer: file.data }).then(result => result.value);
    case '.doc':
      return new Promise((resolve, reject) => {
        textract.fromBufferWithMime(file.mimetype, file.data, (err, text) => {
          if (err) reject(err);
          resolve(text);
        });
      });
    case '.csv':
    case '.xls':
    case '.xlsx':
      return new Promise((resolve) => {
        const workbook = XLSX.read(file.data, { type: 'buffer' });
        const firstSheetName = workbook.SheetNames[0];
        const worksheet = workbook.Sheets[firstSheetName];
        const csvText = XLSX.utils.sheet_to_csv(worksheet);
        resolve(csvText);
      });
    default:
      return Promise.resolve('');
  }
}

function vectorize(texts) {
  const tfidf = new natural.TfIdf();
  texts.forEach(text => tfidf.addDocument(text));
  return texts.map((_, i) => {
    const vector = [];
    tfidf.listTerms(i).forEach(item => vector.push(item.tfidf));
    return vector;
  });
}

function similarity(vec1, vec2) {
  return cosineSimilarity(vec1, vec2);
}

app.post('/check-plagiarism', async (req, res) => {
  if (!req.files || Object.keys(req.files).length === 0) {
    return res.status(400).send('No files were uploaded.');
  }

  const studentFiles = Array.isArray(req.files.files) ? req.files.files : [req.files.files];
  const studentNotes = await Promise.all(studentFiles.map(file => extractTextFromFile(file)));

  const vectors = vectorize(studentNotes);
  const sVectors = studentFiles.map((file, i) => [file.name, vectors[i]]);

  const plagiarismResults = {};
  sVectors.forEach(([studentA, textVectorA], i) => {
    const newVectors = sVectors.slice();
    newVectors.splice(i, 1);
    newVectors.forEach(([studentB, textVectorB]) => {
      const simScore = similarity(textVectorA, textVectorB);
      if (simScore > 0) {
        const percentageSimScore = Math.round(simScore * 100);
        const studentPair = [path.basename(studentA, path.extname(studentA)), path.basename(studentB, path.extname(studentB))].sort();
        const res = `${studentPair[0]} similar to ${studentPair[1]}`;
        plagiarismResults[res] = `${percentageSimScore}%`;
      }
    });
  });

  res.send(JSON.stringify(plagiarismResults, null, 2));
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server is running on port http://localhost:${PORT}/`);
});
