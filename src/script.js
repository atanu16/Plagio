document.getElementById('upload-form').addEventListener('submit', async (event) => {
    event.preventDefault();
    const fileInput = document.getElementById('file-input');
    const files = fileInput.files;
    
    if (files.length === 0) {
        alert('Please select at least one file.');
        return;
    }
    
    const formData = new FormData();
    for (let i = 0; i < files.length; i++) {
        formData.append('files', files[i]);
    }
    
    try {
        const response = await fetch('/check-plagiarism', {
            method: 'POST',
            body: formData
        });
        
        if (response.ok) {
            const result = await response.json();
            document.getElementById('result').textContent = JSON.stringify(result, null, 2);
        } else {
            document.getElementById('result').textContent = 'Error checking plagiarism.';
        }
    } catch (error) {
        console.error('Error:', error);
        document.getElementById('result').textContent = 'Error checking plagiarism.';
    }
});


