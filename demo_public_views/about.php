<?php
$about = fetchitem($conn,'about');

?>
<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from ecologytheme.com/theme/Skyheights Academy/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:51:56 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Skyheights Academy">
	<meta name="keywords" content="college, education, institute, responsive, school, teacher, template, university">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
						<li><i class="fa fa-phone top-icon"></i><a style="color:white" href="tel:09098685966">09098685966</a></li> <li><i class="fa fa-envelope top-icon"></i>  <a style="color:white" href="mailto:skyheightsacademy1@gmail.com">skyheightsacademy1@gmail.com</a></li>
					</ul>
				</div>

			</div>
		</div>
	</div><!-- Ends: .header-top -->

	<div class="header-body">
<?php include 'includes/header.php' ?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>About Us</h1>
						<p><span><a href="home">Home <i class='fa fa-angle-right'></i></a></span> <span class="b-active">About Us</span></p>
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

    <?php foreach ($about as $key => $ab){; extract($ab); ?>

		<div class="row">
			<div class="col-sm-6 Welcome-area-text">
<?php echo $about; ?>
			</div><!-- Ends: . -->

			<div class="col-sm-6 welcome-img">
				<img src="images/image4.jpeg" alt="" class="img-responsive">
			</div><!-- Ends: . -->
		</div>
  <?php } ?>

	</div>
</section>
<!-- ./ End Contact Area section -->


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

<!-- Mirrored from ecologytheme.com/theme/Skyheights Academy/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:51:56 GMT -->
</html>
