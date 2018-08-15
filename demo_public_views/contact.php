







<?php if(array_key_exists("submit", $_POST)){
  $email = $_POST['email'];
  $name = $_POST['name'];
  $message = $_POST['comments'];


    $txt = '<h1>Message From '.$name.' </h1>
    <br>
    '.$message.'
    <br>The email to this message is '.$email.'';







  $to = "boardspeck@gmail.com";
  $subject = "Message From $name Skyheights Academy";

  $headers = "From: $email" . "\r\n" .
  "CC: banjimayowa@gmail.com";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  try {
      mail($to,$subject,$txt,$headers);
  } catch (PDOException $e) {
    die("Error, Try again");
  }
  $success = "Message Sent Successfully";
  $succ = preg_replace('/\s+/', '_', $success);
  header("Location:/contact?success=$succ");

} ?>



<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from ecologytheme.com/theme/eduread/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:51:56 GMT -->
<head>
    <meta charset="utf-8">
<?php include 'includes/head.php' ?>
	<title>Skyheights Academy</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">
	<!-- Popup -->
	<link href="css/assets/magnific-popup.css" rel="stylesheet">
	<!-- Slick Slider -->
	<link href="css/assets/slick.css" rel="stylesheet">
	<link href="css/assets/slick-theme.css" rel="stylesheet">
	<!-- owl carousel -->
	<link href="css/assets/owl.carousel.css" rel="stylesheet">
	<link href="css/assets/owl.theme.css" rel="stylesheet">
	<!-- Main Menu-->
	<link rel="stylesheet" href="css/assets/meanmenu.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body class="contact">
<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<header id="header">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12 header-top-left">
					<ul class="list-unstyled">
	<li><i class="fa fa-phone top-icon"></i><a style="color:white" href="tel:08118288129">08118288129</a></li> <li><i class="fa fa-envelope top-icon"></i>  <a style="color:white" href="mailto:skyheightsacademy1@gmail.com">skyheightsacademy1@gmail.com</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div><!-- Ends: .header-top -->

	<div class="header-body">
<?php include 'includes/header.php' ?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Contact Us</h1>
						<p><span><a href="home">Home <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Contact</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
	<!--  End header section-->


<!-- Contact Area section -->
<section class="contact-area-02">
	<div class="container">
		<div class="row">
      <?php if (isset($_GET['success'])){
      $msg = str_replace('_', ' ', $_GET['success']);

        echo '<div class="col-md-12">
      <div class="inner-box posting">
      <div class="alert alert-success alert-lg" role="alert">
      <h2 class="postin-title">✔ Successful! '.$msg.' </h2>
    <p>Thank you, SkyHeights Academy is happy to have you around. </p>
      </div>
      </div>
      </div>';
      } ?>




			<div class="col-sm-5 contact-info">
				<div class="col-sm-12 contact-title">
					<h2>Contact Info</h2>
					<p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
				</div>
				<div class="col-sm-12 contact-box">
					<div class="row">
						<div class="col-sm-12 col-md-6 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-phone"></i>
                                <h4>Phone</h4>
                                <p><a style="color:black" href="tel:09098685966">09098685966</a> </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6  single-address-box">
                            <div class="single-address">
                                <i class="fa fa-envelope"></i>
                                <h4>Email</h4>
                                <p><a style="color:black" href="mailto:skyheightsacademy1@gmail.com">skyheightsacademy1@gmail.com</a> </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-map-marker"></i>
                                <h4>Location:</h4>
                                <p>Palmsheights Estate, Phase I,Voice of Nigeria Way, off Airport Road,Lagbe, Abuja</p>
                            </div>
	                    </div>
	                	<div class="col-sm-12 single-address-box">
	                        <ul class="list-unstyled">
								<li><a target="_blank" href="https://web.facebook.com/skyheights.scholars"><i class="fa fa-facebook teacher-icon"></i></a></li>
								<!-- <li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li> -->
								<!-- <li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li> -->
								<!-- <li><a href="#"><i class="fa fa-linkedin teacher-icon"></i></a></li> -->
								<li><a href="target="_blank" href="https://www.instagram.com/skyheightsacademy/""><i class="fa fa-instagram teacher-icon"></i></a></li>
							</ul>
	                	</div>
                    </div>
                </div>
			</div>

			<div class="col-sm-6  col-sm-offset-1 contact-form">
				<div class="row">
					<div class="col-sm-12 contact-title-btm">
						<h2>Send A Message</h2>
						<p class="content-sub_p">You can leave a message for us</p>
					</div>
				</div>
				<div class="input-contact-form">


					<div id="contact">
					<div id="message"></div>
                    <form method="post" action="" >
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                </div>
                            </div>

                            <div class="col-sm-12">
                            	<div class="form-group">
                                    <textarea class="form-control" rows="6" placeholder="Message" name="comments" id="comments"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="full-width">
                                    <input value="Submit" type="submit" name="submit">
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>


				</div>
			</div>
		</div>
	</div>
</section>
<!-- ./ End Contact Area section -->

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
  t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
  return t;
}(document, "script", "twitter-wjs"));</script>
<!-- Footer Area section -->
<?php include 'includes/footer.php'; ?>
    <!-- ============================
    JavaScript Files
    ============================= -->
    <!-- jQuery -->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/assets/bootstrap.min.js"></script>
	<!-- Sticky JS -->
	<script src="js/assets/jquery.sticky.js"></script>
	<!-- Popup -->
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
	<!-- Counter Up -->
    <script src="js/assets/jquery.counterup.min.js"></script>
    <script src="js/assets/waypoints.min.js"></script>
 	<!-- owl carousel -->
    <script src="js/assets/owl.carousel.min.js"></script>
   <!-- Slick Slider-->
    <script src="js/assets/slick.min.js"></script>
    <!-- Main Menu -->
	<script src="js/assets/jquery.meanmenu.min.js"></script>
	<!-- Custom JS -->
	<script src="js/custom.js"></script>
</body>

<!-- Mirrored from ecologytheme.com/theme/eduread/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:51:56 GMT -->
</html>
