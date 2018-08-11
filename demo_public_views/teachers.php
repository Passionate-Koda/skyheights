<?php
$teacher = fetchTeacher($conn);

 ?>

<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from ecologytheme.com/theme/Skyheights Academy/teachers-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:51:56 GMT -->
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
<body class="teachers-01">
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

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>Our Teachers</h1>
						<p><span><a href="home">Home <i class='fa fa-angle-right'></i></a></span><span class="b-active"> Teachers</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
<!--  End header section-->

<!-- Teachers Area section -->
<section class="teachers-area">
	<div class="container">
		<div class="row teachers-wapper-02">

      <?php foreach ($teacher as $key => $teacher) {
        extract($teacher);

       ?>
			<div class="col-sm-6 col-md-4 teacher-single">
				<figure class="text-center">
					<div class="teacher-img-02">
						<img src="<?php echo $image_1 ?>" alt="" class="img-responsive">
					</div>
					<div class="teachers-name">
						<h3><a href="#"><?php echo strtoupper($firstname).'<br> '. strtoupper($lastname) ?></a></h3>
						<!-- <span>PROFESSOR OF BIOLOGY</span> -->
					</div>
					<figcaption>

					</figcaption>
				</figure>
			</div>

<?php } ?>

		</div>



		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->

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

<!-- Mirrored from ecologytheme.com/theme/Skyheights Academy/teachers-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:52:47 GMT -->
</html>
