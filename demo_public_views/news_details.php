<?php
$page = "NEWS";
$news = fetchItemById($conn, 'news', $_GET['id']);
$upcoming = upcomingEvent($conn);
extract($news);

$blog = fetchitemLimit($conn,'news','ASC LIMIT 3');

$moreblog = fetchitemLimit($conn,'news','ASC LIMIT 5');

 ?>
<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from ecologytheme.com/theme/Skyheights Academy/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:51:42 GMT -->
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
<body class="post-1">
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
						<h1>News</h1>
						<p><span><a href="home">Home <i class='fa fa-angle-right'></i></a></span> <span><a href="#"> Blog <i class='fa fa-angle-right'></i></a></span><span class="b-active">News Details</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
	<!--  End header section-->


<div class="post_1_area">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 post_left-side">
				<div class="row">
					<div class="col-sm-12">
						<div class="post-img-box">
							<img src="<?php echo $image_1 ?>" alt="" class="img-responsive">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="description-content">
							<div class="description-heading">
								<div class="time">
									<p class="date"><span><?php echo $date_created ?></span></p>
								</div>
								<h3><?php echo $headline ?></h3>
							</div>
							<div class="description-text">
								<div class="row">
									<div class="col-sm-1">
										<div class="description-side-left">
											<div class="author-img">
												<img width="50" height="50" src="images/628287.png" alt="" class="img-circle">
												<div class="author-details">
													<a href="#">Admin</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-11">
										<div class="description-text-right">
										<p> <?php echo $body ?> </p>
                                             <div class="sharethis-inline-share-buttons"></div>
										</div>
									</div>
								</div>



							</div>
						</div>
					</div>



					<div class="col-md-12 post_slider">
						<div class="row">
							<h3>Related Posts</h3>
              <?php foreach ($blog as $key => $blog) {
                extract($blog);

              ?>
							<div class="col-md-4 col-sm-6 blog-single-item">
							    <div class="blog-post">
									<figure>
										<div class="figure-img"><div style="width:100%; height:200px; background:url(<?php echo $image_1?>); background-position:center; background-size:cover; background-repeat: no-repeat;">

                    </div></div>
										<figcaption>
											<div><a href="news_board?id=<?php echo $id ?>" class="read_more-btn">read more</a></div>
										</figcaption>
									</figure>
									<div class="courses-content-box">
										<div class="courses-content">
											<h4><a href="#"><?php echo strtoupper($headline) ?></a></h4>
											<p><span>
<?php
$SDate = decodeDate($date_created); echo $SDate;
 ?>
                      </span></p>
										</div>

									</div>
								</div><!-- Ends: .single courses -->
							</div><!-- Ends: . -->
<?php } ?>
						</div>
					</div><!--End .row-->



				</div>
			</div>


			<div class="col-sm-4">
				<div class="sidebar-text-post">
					<div class="row">
						<div class="col-sm-12 recent-post">
							<h3>Recent Post</h3>
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
					</div>



				</div>
			</div>
		</div>
	</div>
</div>


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

<!-- Mirrored from ecologytheme.com/theme/Skyheights Academy/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:51:56 GMT -->
</html>
