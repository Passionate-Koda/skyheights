<?php $news = fetchItem($conn,'news');

$moreblog = fetchitemLimit($conn,'news','ASC LIMIT 5');
 ?>

<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from ecologytheme.com/theme/Skyheights Academy/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:51:10 GMT -->
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
<body class="blog_1">
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
				<div class="col-sm-6 col-xs-12 header-top-right">
					<ul class="list-unstyled">
						<li><a href="register.html"><i class="fa fa-user-plus top-icon"></i> Sing up</a></li>
						<li><a href="login.html"><i class="fa fa-lock top-icon"></i>Login</a></li>
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
						<h1>News Board</h1>
						<p><span><a href="home">Home <i class='fa fa-angle-right'></i></a></span><span class="b-active"> News Board</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
	<!--  End header section-->


<div class="blog-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 bolg_side-left">

<?php foreach ($news as $key => $value) {
extract($value);
  ?>

				<div class="col-sm-12 single-item-box">
					<div class="single-item">
						<div class="img-box">
							<a href="news_board?id=<?php echo $id ?>"><img src="<?php echo $image_1 ?>" alt="" class="img-responsive"></a>
							<span><a href="news_board?id=<?php echo $id ?>" class="overlay"></a></span>
							<div class="img-caption">
								<p class="date"><span><?php echo $date_created ?></span></p>
							</div>
						</div>
						<div class="single-text-box">
							<h3><a href="news_board?id=<?php echo $id ?>"><?php echo $headline ?></a></h3>
							<ul class="list-unstyled">
								<li><a href="news_board?id=<?php echo $id ?>">By Admin</a></li>
								<li><a href="news_board?id=<?php echo $id ?>"><?php $SDate = decodeDate($date_created) ?></a></li>
							</ul>
							<p> <?php $bd = previewBody($body,'20'); echo $bd ?> </p>
							<div class="blog-btn-box">
								<a href="news_board?id=<?php echo $id ?>">Read More</a>
							</div>
						</div>
					</div>
				</div>
<?php } ?>



			</div>

			<div class="col-sm-4 blog_side-right">
				<div class="sidebar-content">


					<div class="row">
						<div class="col-sm-12">
							<div class="social-icon">
								<h3>Social Widget</h3>
								<div class="row">
									<div class="col-sm-12">
										<ul class="list-unstyled">
											<li><a href="#" class="rss"><i class="fa fa-rss"></i>rss feed</a></li>
											<li><a href="#" class="twitter"><i class="fa fa-twitter"></i>Follow us</a></li>
											<li><a href="#" class="facebook"><i class="fa fa-facebook"></i>like us</a></li>
											<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i>follow us</a></li>
											<li><a href="#" class="instagram"><i class="fa fa-instagram"></i>follow us</a></li>
											<li><a href="#" class="google"><i class="fa fa-google-plus"></i>plus 1 us</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>



						<div class="col-sm-12 recent-post-01">
							<h3>Recent Posts</h3>
              <div class="row">

                <?php foreach ($moreblog as $key => $blog) {
                  extract($blog);

                ?>


                <div class="col-sm-12 recent-single">
                  <div class="recent-content-item">
                    <div class="img-box"><a href="news_board?id=<?php echo $id ?>"><img src="<?php echo $image_1 ?>" alt=""></a></div>
                    <div class="recent-text pull-right">
                              <a href="news_board?id=<?php echo $id ?>"><?php echo $headline ?></a>
                              <p><?php
                              $SDate = decodeDate($date_created); echo $SDate;
                               ?></p>
                          </div>
                  </div>
                </div><!-- /.recent-single-item -->
          <?php } ?>

              </div>
						</div>


						<div class="col-sm-12">
							<h3>Populer tags</h3>
							<div class="populer-tags">
								<div class="tagcloud">
									<a href="#">Course</a>
									<a href="#">Education</a>
									<a href="#">Events</a>
									<a href="#">Learning</a>
									<a href="#">Photoshop</a>
									<a href="#">Student</a>
									<a href="#">Teacher</a>
									<a href="#">Audio</a>
									<a href="#">Video</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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

<!-- Mirrored from ecologytheme.com/theme/Skyheights Academy/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:51:41 GMT -->
</html>
