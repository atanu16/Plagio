<?php
if(isset($_POST["submit"])) {
	$file_name = $_FILES['fileToUpload']['name'];
	$file_size = $_FILES['fileToUpload']['size'];
	$file_type = $_FILES['fileToUpload']['type'];
	$file_tmp = $_FILES["fileToUpload"]["tmp_name"];
	if($file_tmp !== false) {
		move_uploaded_file($file_tmp,'C:/xampp/htdocs/'.$file_name);
		
		$path = "C:/xampp/htdocs/sss.py";
		$api = exec($path);
		//$result = file_get_contents($api);
		$json_data = json_decode($api,true);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Plagiarism</title>
  </head>
  <body>
  
    <!-- Showcase -->
    <section class="text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
      <div class="container">
        <div class="align-items-center justify-content-between">
          <div>
			<table class="table table-bordered">
			  <thead style="position: sticky;top: 0" class="bg-danger text-light">
				<tr>
				<th colspan="2" class="text-center"> 
				<h1>PLAGIARISM REPORT</h1>
				</th>
				</tr>
				<tr>
				  <th scope="col" width="40%"><h2>File Name</h2></th>
				  <th scope="col" width="60%"><h2>Percantage</h2></th>
				</tr>
			  <thead>
			  <tbody
				<?php
					foreach($json_data as $key => $value){
						$value=$value*100;
				?>
				<tr>
				  <td>
					<?php echo $key;?>
				  </td>
				  <td>
					<div class="progress">
					  <div class="progress-bar <?php if($value>=70){echo 'bg-danger';} else if($value>=40){echo 'bg-warning';} else{ echo 'bg-success';} ?>" role="progressbar" style="width: <?php echo $value; ?>%;" aria-valuenow="<?php echo $value; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $value; ?>%</div>
					</div>
				  </td>
				</tr>
				<?php }}} ?>
			  </tbody>
			</table>
          </div>
        </div>
      </div>
    </section>
	
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous">
	</script>
  </body>
</html>