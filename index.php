<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- MDB -->
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
	  <!-- MDB -->
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />

    <title>Plagio - Plagiarism Detector</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="icon" type="image/x-icon" href="/assets/images/logo.png">

    <link rel="stylesheet" href="style.css">

  </head>

<body>



  <!-- Preloader  -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

 

  <!-- Header -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
          
            <a href="#top" class="logo">
              <img src="assets/images/ata.png" width="100" height="90" alt="logo.png">
              <!-- <img src="/assets/images/Palgio.png" alt="uo"> -->
            
            </a>
            <!-- ***** Logo End ***** -->


            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About Us</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Contact Now</a></div></li> 
            </ul>   

            <a class='menu-trigger'><span>Menu</span></a>
            <!-- ***** Menu End ***** -->

          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Main  -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s" padding-bottom: "220px;" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Welcome to Plagio</h6>
                <h2>Plagiarism <span>Detector</span> </h2>
                <p> Drop file or click to upload <a rel="nofollow" href="#" target="_parent"></a></p>

                <!-- Choose File Start -->
                <form id="search" action="#popup1" method="post" enctype="multipart/form-data">
                  <fieldset>
                    <fieldset>       
                      <div class="drop-zone">                       
                        <input type="file" name="fileToUpload">
                      </div>               
                    </fieldset>
                  </fieldset>

                  <fieldset>                    
                    <button  type="submit" name="submit" class="main-button" value="Upload Project">Analyze</button>
                  </fieldset>
                </form>
                <!-- Choose File End  -->

              </div>
            </div>

            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/4.jpg" alt="team meeting">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

<!-- about  -->

  <div id="about" class="about-us section" style="padding-top: 250px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="assets/images/about-left-image.png" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="assets/images/service-icon-01.png" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4> Analysis</h4>
                    <p>This plagiarism checker software offers you a deep and thorough check. With deep search, you get extra levels of plagiarism search and additional result details.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="assets/images/service-icon-02.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Data Reporting</h4>
                    <p>Our best free plagiarism checker is totally free. It doesn’t charge you anything which means you can conduct as many searches as you like..</p>
                  </div>
                </div>
              </div> 
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="assets/images/service-icon-04.png" alt="">
                   
                  </div>
                  <div class="right-text">
                    <h4>URL Or File Uploading</h4>
                    <p>you can  upload the page URL or the file for a quick and free plagiarism check.</p>
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="assets/images/service-icon-03.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Web Analytics</h4>
                    <p>Plagiarized or duplicated content can lead to lower page rank. If you are caught up in a situation where your article, blog or web page content is not entirely unique, then there is a comparatively higher risk of getting blacklisted by search engines especially Google.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- service  -->

  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>See What Our <em>Offers</em> <br> &amp;  What We <span>Provide</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>Multiple File Formats</h4>
                <p>
                  &#9671;Supports .tex, .txt, .doc, .pdf<br>
                  &#9671;Upload through device </p>
              </div>
              <div class="showed-content">
                <img src="assets/images/3.jpg" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Results in Percentage</h4>
                <p> &#9671;Best matching detection. <br>
                  &#9671;Most accurate plagiarism checker ratio. <br>
                 </p>
              </div>
              <div class="showed-content">
                <img src="assets/images/3.jpg" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="hidden-content">
                <h4>Privacy Guaranteed</h4>
                <p>&#9671;Plagiarism checker with 100% privacy. <br>
                  &#9671;No risks of data leakage. <br>
                </p>
              </div>
              <div class="showed-content">
                <img src="assets/images/3.jpg" alt="">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="hidden-content">
                <h4>AI-Based Technology </h4>
                <p> &#9671;Tool is Developed using AI technology. <br>
                    &#9671;Best plagiarism checker to catch the duplication. <br>   
                </p>
              </div>
              <div class="showed-content">
                <img src="assets/images/3.jpg" alt="">
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- contact  -->

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Feel Free To Send Us a Message </h2>
            <p>We welcome your feedback and comments, so please feel free to share them with us.
              We work hard to keep improving Plagio.ml for your benefit, and take any suggestions that you make to heart.
              Contact us using the email form below, and a member of our team will be in touch with you shortly.</p>
            <div class="phone-info">
              <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="#">+918016976125</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="mailto:atanumax2@gmail.com" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12" style="padding-top: 30px;">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p class="scroll-to-section">© Copyright 2022 <a href="#top">Plagio</a> Co. All Rights Reserved. </p>
        </div>
      </div>
    </div>
  </footer>

  <!--------------------------------------- popup---------------------------------------- -->
 
 <div id="popup1" class="overlay" >
	<div class="popup" style="margin-top: 110px;">
    <li class="scroll-to-section"><a class="close" href="#top" class="active">&times;</a>
		<div class="content">

      <!-- -------------------------data------------------------------ -->
      <section class="text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
          <div class="align-items-center justify-content-between">
            <div class="shadow p-3 mb-5 bg-white rounded">
              <table class="table table-bordered">
                <thead style="position: sticky;top: 0" >
                  <tr>
                    <th colspan="2" class="text-center"> 
                      <h4 class="text-danger font-italic">PLAGIARISM REPORT</h4>
                    </th>
                  </tr>
                  <tr>
            <th class="p-3 mb-2 bg-light text-dark" scope="col" width="40%"><h6>File Name</h6></th>
            <th class="p-3 mb-2 bg-light text-dark" scope="col" width="60%"><h6>Percentage</h6></th>
          </tr>
          <thead>
          <tbody
          
          <?php
            if(isset($_POST["submit"])) {
              $file_name = $_FILES['fileToUpload']['name'];
              $file_size =$_FILES['fileToUpload']['size'];
              $file_type=$_FILES['fileToUpload']['type'];
              $file_tmp = $_FILES["fileToUpload"]["tmp_name"];
              if($file_tmp !== false) {
                move_uploaded_file($file_tmp,'C:/xampp/htdocs/'.$file_name);
                
                $path = "C:/xampp/htdocs/plagiarism.py";
                $api = exec($path);
          
                $json_data = json_decode($api,true);
              }
            }


            foreach($json_data as $key => $value){
              $value=$value*100;
          ?>

          <tr>
            <td>
              <?php echo $key;?>
            </td>

            <td>  
              <div class="progress">
                <div class="progress-bar 
                  <?php 
                    if($value>=70){
                      echo 'bg-danger';
                    }else if($value>=40){
                      echo 'bg-warning';
                    }else{
                      echo 'bg-success';
                    }
                  ?>"
                  role="progressbar" style="width: <?php echo $value; ?>%;" 
                  aria-valuemin="0" aria-valuemax="100"><?php echo $value; ?>%
                </div>
              </div>
            </td>
          </tr>
          <?php } ?>
          </tbody>
        </table>
            </div>
          </div>
        </div>
      </section>
      <!-- ---------------------------------data end------------------- -->
		</div>
	</div>
</div>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>

</body>
</html>

