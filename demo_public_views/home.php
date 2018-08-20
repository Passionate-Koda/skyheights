<?php

$frontage = fetchitem($conn,'frontage');
$testimony = fetchitem($conn,'Testimonies');
$expression = fetchitem($conn,'expression');
// die(var_dump($testimony));
$about = fetchitem($conn,'about');
$event = upcomingEvent($conn);
$blog = fetchitemLimit($conn,'news','ASC LIMIT 3');
 ?>

<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from ecologytheme.com/theme/eduread/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:40:52 GMT -->
<head>
    <meta charset="utf-8">
<?php include 'includes/head.php' ?>
	<title>SkyHeights</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">
	<!-- Popup -->
	<link href="css/assets/magnific-popup.css" rel="stylesheet">
	<!-- Revolution Slider -->
	<link rel="stylesheet" href="css/assets/revolution/layers.css">
	<link rel="stylesheet" href="css/assets/revolution/navigation.css">
	<link rel="stylesheet" href="css/assets/revolution/settings.css">
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">
	<!-- Slick Slider -->
	<link href="css/assets/slick.css" rel="stylesheet">
	<link href="css/assets/slick-theme.css" rel="stylesheet">
	<!-- Mean Menu-->
	<link rel="stylesheet" href="css/assets/meanmenu.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

<style media="screen">
  #slid p{
    color:#FFFFFF;
  }

</style>


</head>
<body>
<!-- Preloader -->
<div id="preloader">
	<!-- <div id="status">&nbsp;</div> -->
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
		<nav class="navbar edu-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					  <a href="home" class="navbar-brand  data-scroll"><img style="border-radius:20%;" width="80" height="80" src="images/log.jpeg" alt=""></a>
				</div>

				<div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-right">
						<li class="active" ><a data-scroll="" href="home">Home</a>
							<!-- dropdwon start -->
                            <!-- <ul class="dropdown list-unstyled">
                                <li><a href="index-2.html">Home Version One</a></li>
                                <li><a href="index-02.html">Home Version Two</a></li>
                                <li><a href="index-03.html">Home Version Three</a></li>
                                <li><a href="index-04.html">Home Version Four</a></li>
                            </ul> -->
                            <!-- dropdown end -->
						</li>
						<li><a data-scroll="" href="events">Events</a>
							<!-- dropdwon start -->
                            <!-- <ul class="dropdown list-unstyled">
                                <li><a href="courses-01.html">Course Style One</a></li>
                                <li><a href="courses-02.html">Course Style Two</a></li>
                                <li><a href="courses-03.html">Course Style Three</a></li>
                                <li class="dropdown-list-box-02"><a href="#">Dropdown<i class="fa fa-angle-right menu-icon"></i></a>
	                                <ul class="dropdown-list_2 list-unstyled">
	                                    <li><a href="#">Label One</a></li>
	                                    <li><a href="#">Label One</a></li>
	                                    <li><a href="#">Label One</a></li>
	                                    <li class="dropdown-list-box-03"><a href="#">Label One<i class="fa fa-angle-right menu-icon"></i></a>
			                                <ul class="dropdown-list_3 list-unstyled">
			                                    <li><a href="#">Label Two</a></li>
			                                    <li><a href="#">Label Two</a></li>
			                                </ul>
	                                    </li>
	                                </ul>
                                </li>
                                <li><a href="courses-carousel.html">Course Carousel Style</a></li>
                                <li><a href="course-details.html">Course Details</a></li>
                                <li><a href="course-details-left-sidebar.html">Course Details Sidebar</a></li>
                            </ul> -->
                            <!-- dropdown end -->
						</li>
						<li><a data-scroll href="#">Teachers</a>
                            <ul class="dropdown list-unstyled">
                                <li><a href="teachers">Our Teachers</a></li>
                                <li><a href="becomeAteacher">Become A Teacher</a></li>
                            </ul>
						</li>
						<li><a data-scroll href="about">About</a>

						</li>
						<!-- <li><a data-scroll href="teachers-01.html">Gallery</a>
                            <ul class="dropdown list-unstyled">
                                <li><a href="teachers-01.html">Teachers Style One</a></li>
                                <li><a href="teachers-02.html">Teachers Style Two</a></li>
                                <li><a href="teachers-profile.html">Teachers Porfile</a></li>
                                <li><a href="become-a-teacher.html">Become a Teacher</a></li>
                            </ul>
                            <!-- dropdown end -->
						</li>
						<li><a data-scroll href="news_board">News Board</a>
						</li>
						<li><a data-scroll href="contact">Contact</a></li>
					</ul>
		</nav>
	</div>
<div class="rev_slider_wrapper">
       <div id="rev_slider_1" class="rev_slider" style="display:none">
<ul>
<?php foreach ($frontage  as $key => $value) {
  extract($value)?>
                <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="images/index/slider-02.jpg">
                	<div class="slider-overlay"></div>
					<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
					<img src="<?php echo $image ?>" alt="Sky" class="rev-slidebg">
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR.1 -->
<div class="clearfix">

</div>




<div  class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-2"
  data-x="left" data-hoffset="0"
  data-y="center" data-voffset="-80"
  data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  style="z-index: 6;font-size:30px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:100;"><?php echo $header_title ?>
</div>


					<!-- LAYER NR. 3 -->



					<!-- <div id="slid" style="color:#FFFFFF; margin-top:30px" class="tp-caption font-lora col-6 sfb tp-resizeme letter-space-5 header-p"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-10"
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 6;  line-height:5px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;"><?php echo $text; ?>
					</div> -->


					<!-- LAYER NR. 4 -->
					<!-- <div class="tp-caption lfb tp-resizeme header-btn"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="90"
						data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						style="z-index: 8;"><a href="#." class="el-btn-regular slider-btn-left">Get Started Now</a> <a href="#." class="el-btn-regular">View Courses</a>
					</div> -->
				</li>
      <?php } ?>
            </ul><!-- END SLIDES LIST -->

        </div><!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->
</header>
	<!--  End header section-->
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


<section class="slider-content-bottom">
	<div class="container">
		<div class="row sider-btm-row-inner">
			<div class="col-sm-4 content_body slide_cont_box_01">
				<div class="slider-btm-box btm-item_01">
					<img src="images/index/slide-bottom-01.png" alt="" class="btm-item-icon">
					<h3>Professional Teachers</h3>
					<p>We have capable hands that bring about positive changes in the lifes of our students</p>

				</div>
			</div>

			<div class="col-sm-4 content_body slide_cont_box_02">
				<div class="slider-btm-box btm-item_02">
					<img src="images/index/slide-bottom-02.png" alt="" class="btm-item-icon">
					<h3>Learn Anywhere</h3>
					<p>Even as we play, We learn</p>

				</div>
			</div>

			<div class="col-sm-4 content_body slide_cont_box_03">
				<div class="slider-btm-box btm-item_03">
					<img src="images/index/slide-bottom-03.png" alt="" class="btm-item-icon">
					<h3>Good Training</h3>
					<p>360 Degree Learning Process, creating the future</p>

				</div>
			</div>

		</div>
	</div>
</section>


<!-- Start Welcome Area section -->
<section class="Welcome-area">
	<div class="container">
    <?php foreach ($about as $key => $ab){
      extract($ab);
      $someAbout = previewRealBody($about, 95);

     ?>

		<div class="row">
			<div class="col-sm-6 Welcome-area-text">
<?php echo $someAbout[0]; ?>
<br>
<?php if($someAbout[1] == true){

  echo '<a style="color:black;" class="event-btn" href="about">Read More<i class="fa fa-long-arrow-right events-btn-icon"></i></a>';
} ?>

			</div><!-- Ends: . -->

			<div class="col-sm-6 welcome-img">
				<img src="images/image4.jpeg" alt="" class="img-responsive">
			</div><!-- Ends: . -->
		</div>
  <?php } ?>
	</div>
</section><!-- Ends: . -->
<!-- ./ End Welcome Area section -->


<!--Start Courses Area Section-->

<!-- ./ End Courses Area section -->


<!-- Start Video Area Section -->

<!-- ./ End Video Area section -->


<!-- Start Events Area Section -->
<section class="events-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>Upcoming Events</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row">
      <?php
// var_dump($event);
if(count($event) > 0){
       foreach ($event as $key => $event){
extract($event);
$SDate = decodeDate($start_date);
$EDate = decodeDate($end_date);
        ?>


			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<!-- <div class="col-sm-5">
							<img src="images/index/events-01.jpg" alt="" class="img-responsive">
						</div> -->

						<div class="col-sm-7 event-info">
							<h3><?php echo $name ?></h3>
							<p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									<?php if($SDate == $EDate){
                    echo $SDate;
                  }else{
                    echo $SDate.' - '.$EDate;
                  } ?>
								</span>

								<span>
									<i class="fa fa-map-marker event-icon"></i>
								<?php echo $venue  ?>
								</span>
							</p>

							<p><?php $bd = previewBody($about, 20); echo $bd; ?></p>

							<a class="event-btn" href="event_details?id=<?php echo $id ?>">Read More<i class="fa fa-long-arrow-right events-btn-icon"></i></a>
						</div>
					</div>
				</div>
			</div>
    <?php }
 }else{
?>
<blockquote>No Upcoming Event at the Moment</blockquote>
<?php  }?>
		</d
    i>
	</div>
</section>
<!-- ./ End Events Area section -->


<!-- Start Counter Area section -->
<section class="counter-area">
	<div class="container">
		<div class="row">
			<!-- <div class="col-sm-5 col-sm-offset-0 counters">
				<div class="row">
					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="images/index/counter-icon-01.png" alt="">
							<div class="project-count counter">90</div>
							<span>Children</span>
						</div>
					</div>

					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="images/index/counter-icon-04.png" alt="">
							<div class="project-count counter">508</div>
							<span>Trusting Parents</span>
						</div>
					</div>

					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="images/index/counter-icon-03.png" alt="">
			<div class="project-count counter">3</div>
							<span>Year of history</span>
						</div>
					</div>

					<div class="col-sm-6 counters-item">
						<div class="section counter-box">
							<img src="images/index/counter-icon-02.png" alt="">
							<div class="project-count counter">10</div>
							<span>Teachers</span>
						</div>
					</div>

				</div>
			</div> -->

			<div class="col-sm-5 col-sm-offset-0 counter-text-bottom">
				<div class="counter-text-box">
					<div class="counter-text">
						<div class="row">
							<div class="col-sm-12 section-header-box">
								<div class="section-header">
									<h2>Get Started Today</h2>
								</div><!-- ends: .section-header -->
							</div>
						</div>
					</div>

					<div class="counter-btn">
						<a href="contact">Enrol Your Child</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- ./ End Counter Area section -->


<!-- Publication Area section -->
<section class="students-say-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>What Our Students are Saying</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="img-full-box">
				<div class="col-sm-3 col-sm-offset-4">
					<div class="carousel-images slider-nav">

            <?php foreach ($expression as $key => $value) {

             ?>
						<div>
							<!-- <img src="<?php echo $value['image']?>" alt="1" class="img-responsive img-circle"> -->
              <div style="width:80px; height:80px; background:url('<?php echo $value['image']?>'); background-position:center; background-size:cover; background-repeat: no-repeat; border-radius:100%">

              </div>
						</div>

<?php } ?>

					</div>
				</div>
			</div>

			<div class="col-sm-8 col-sm-offset-2">
				<div class="carousel-text slider-for">


          <?php foreach ($expression as $key => $value){
              extract($value);
             ?>


					<div class="single-box">
						<p><?php echo $expression ?></p>

						<h3><?php echo $Name ?></h3>

					</div>
  <?php }?>

				</div>
			</div><!-- /.block-text -->
		</div>	<!--./End row-->
	</div>
</section>
<!-- ./ End Publication Area section -->


<!-- Start News Area section -->
<section class="news-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>Latest on the News Boards</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row">
      <?php foreach ($blog as $key => $blog) {
        extract($blog);

      ?>
			<div class="col-sm-4 news-single">

				<div class="news-single-box">
					<div class="news-img-box" style="width:100%; height:300px; background:url('<?php echo $image_1?>'); background-position:center; background-size:cover; background-repeat: no-repeat;">
						<!-- <img src="<?php ?>" alt="" class="img-responsive"> -->
					</div>
					<div class="news-content">
						<h3><a href="news_board?id=<?php echo $id ?>"><?php echo $headline ?></a></h3>
						<p class="news-time">
							<span>
								<i class="fa fa-calendar event-icon"></i>
								12 July, 2018
							</span>
							<span>
								<i class="fa fa-user"></i>
								<?php echo $link ?>
							</span>

						</p>
					</div>
				</div>
			</div>
    <?php } ?>

		</div>
	</div>
</section>
<!-- ./ End News Area section -->












<!-- ./ End Students Say Area section -->
<section class="students-say-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>What Students Parent SAY</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row">
			<div class="img-full-box">
				<div class="col-sm-3 col-sm-offset-4">
					<div class="carousel-images slider-nav">

            <?php foreach ($testimony as $key => $value) {

             ?>
						<div>
							<img src="images/628287.png" alt="1" class="img-responsive img-circle">
						</div>

<?php } ?>

					</div>
				</div>
			</div>

			<div class="col-sm-8 col-sm-offset-2">
				<div class="carousel-text slider-for">


          <?php foreach ($testimony as $key => $value){
              extract($value);
             ?>


					<div class="single-box">
						<p><?php echo $Testimony ?></p>

						<h3><?php echo $Name ?></h3>

					</div>
  <?php }?>

				</div>
			</div><!-- /.block-text -->
		</div>	<!--./End row-->
	</div>
</section>
<!-- ./ End Students Say Area section -->



<!-- Instraction Area section -->
<section class="instraction-area">
	<div class="container">
		<div class="row inspiration-full-box">
			<div class="col-md-9 section-header-l">
				<h2>Like to become a Teacher?</h2>
				<p>Click to apply</p>
			</div>

			<div class="col-md-3">
				<div class="instraction-btn">
					<a href="becomeAteacher" class="">Apply</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ./ End Instraction Area section -->
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
	 <!-- owl carousel -->
    <script src="js/assets/owl.carousel.min.js"></script>
 	<!-- Revolution Slider -->
	<script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
	<script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script>
	<!-- Popup -->
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
    <!-- Sticky JS -->
	<script src="js/assets/jquery.sticky.js"></script>
	<!-- Counter Up -->
    <script src="js/assets/jquery.counterup.min.js"></script>
    <script src="js/assets/waypoints.min.js"></script>
   <!-- Slick Slider-->
    <script src="js/assets/slick.min.js"></script>
    <!-- Main Menu -->
	<script src="js/assets/jquery.meanmenu.min.js"></script>
	<!-- Revolution Extensions -->
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/revolution.js"></script>
	<!-- Custom JS -->
	<script src="js/custom.js"></script>
</body>

<!-- Mirrored from ecologytheme.com/theme/eduread/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:44:44 GMT -->
</html>
