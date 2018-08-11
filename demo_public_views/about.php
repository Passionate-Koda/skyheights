<?php

ob_start();
session_start();
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0");
// include("include/link_include.php");
$error= [];
if(array_key_exists('submit', $_POST)){
  $ext = ["application/vnd.openxmlformats-officedocument.wordprocessingml.document"];
  if(empty($_FILES['upload']['name'])){
    $error['upload'] = "Please choose file";
  }
  if(!in_array($_FILES['upload']['type'], $ext)){
    $error['upload'] = "Invalid file type, Please Upload a .docx(Microsoft Word Document File) ";
  }
  if(empty($_FILES['uploadb']['name'])){
    $error['upload'] = "Please choose file";
  }
  if(!in_array($_FILES['upload']['type'], $ext)){
    $error['uploadb'] = "Invalid file type, Please Upload a .docx(Microsoft Word Document File) ";
  }
  if(empty($_POST['name'])){
    $error['name']="Enter a fullname";
  }
  if(empty($_POST['email'])){
    $error['email']="Enter a email";
  }
  if(empty($_POST['phonenumber'])){
    $error['phonenumber']="Enter a phonenumber";
  }

  if(doesAppEmailExist($conn,$_POST['email'])){
    $error['email'] = "*Email already exists on our system, Please enter another email";
  }

  if(empty($error)){
    $ver = uploadFiles($_FILES, 'upload', 'application_files/');
    $verb = uploadFiles($_FILES, 'uploadb', 'cv_files/');

    if($ver[0] && $verb[0]){
      $destn['a'] = $ver[1];
      $destn['b'] = $verb[1];

      $clean = array_map('trim', $_POST);
      addApplication($conn, $clean,$destn);
    }






 //      $from = "info@mckodev.com.ng"; //enter your email address
 // $to = "banjimayowa@gmail.com"; //enter the email address of the contact your sending to
 // $subject = "SkyHeights Academy New Admin User Registration"; // subject of your email
$firstname = 'ff';
$lastname = 'ff';

 $to = "boardspeck@gmail.com";
 $subject = "SkyHeights Academy Web Office Admin Registration";
 $txt = "Hello Admin, A new Admin($firstname $lastname)  has registered to the web office. Kindly check for Verification";
 $headers = "From: info@boardspeck.com" . "\r\n" .
 "CC: banjimayowa@gmail.com";

 mail($to,$subject,$txt,$headers);

}
}








 ?>



<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from ecologytheme.com/theme/eduread/become-a-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:51:09 GMT -->
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
<body class="become_teachers">
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
						<h1>Become A Teacher</h1>
						<p><span><a href="home">Home <i class='fa fa-angle-right'></i></a></span> <span class="b-active">Become a teacher</span></p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
</header>
	<!--  End header section-->


<!-- Teachers Area section -->
<section class="become-teachers-01">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center become-title">
				<h2>Apply as Teacher</h2>
				<p>Lorem ipsum dolor sit amet, consectetur</p>
				<span class="line"></span>
			</div>
			<div class="col-sm-8 col-sm-offset-2 text-center become-title-text">
				<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream. Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-sm-12">
				<img src="images/teachars/become-teacher.jpg" alt="" class="img-responsive">
			</div>
		</div> -->
		<div class="row">
			<div class="col-sm-12 text-center become-title become-teacher-title">
				<h2>How to become a teacher</h2>

				<span class="line"></span>
			</div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5">
						<div class="contact-form text-center">
							<h3>Register to become a teacher</h3>
							<p>Fill the form Below and We would get back to you if considered</p>
 							<form method="post" action="" enctype="multipart/form-data">
	                            <div class="row">
	                                <div class="col-sm-12">
	                                    <div class="form-group">
                                        <?php $display = displayErrors($error, 'name');
                                        echo $display ?>
	                                        <input required type="text" name="name" class="form-control"  placeholder="Your Name">
	                                    </div>
	                                </div>
	                                <div class="col-sm-12">
	                                    <div class="form-group">
                                        <?php $display = displayErrors($error, 'email');
                                        echo $display ?>
	                                        <input required type="email" name="email" class="form-control"  placeholder="Your E-mail">
	                                    </div>
	                                </div>

	                                <div class="col-sm-12">
	                                    <div class="form-group">
                                        <?php $display = displayErrors($error, 'phonenumber');
                                        echo $display ?>
	                                        <input required type="text" name="phonenumber" class="form-control"   placeholder="Your Phone Number">
	                                    </div>
	                                </div>
                                  <div class="col-sm-12">
                                     <div class="form-group">
                                       <p>Your Application Letter Here</p>
                                       <?php $display = displayErrors($error, 'upload');
                                       echo $display ?>
                                         <input required type="file" name="upload" class="form-control"  placeholder="Your Application Letter">
                                     </div>
                                 </div>
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                       <p>Your Resume or CV Here</p>
                                       <?php $display = displayErrors($error, 'uploadb');
                                       echo $display ?>
                                         <input required type="file" name="uploadb" class="form-control"  placeholder="Your E-mail">
                                     </div>
                                 </div>
	                                <div class="col-sm-12">
	                                    <div class="full-width submit-btn">
	                                        <input value="Submit" name="submit"  type="submit">
	                                    </div>
	                                </div>
	                            </div>
	                        </form>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="tab-wapper">
							<ul class="nav nav-tabs">
							  	<li  class="active"><a href="#become_a_teacher"  data-toggle="tab"><i class="fa fa-user-plus"></i>Become an Teacher</a></li>
							  	<li ><a href="#roles" data-toggle="tab"><i class="fa fa-list-ol"></i>Teacher Roles</a></li>

							</ul>

							<div class="tab-content">
							  	<div class="tab-pane fade in active" id="become_a_teacher">
							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream.  Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>

							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream. Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>
							  	</div>
							  	<div class="tab-pane fade" id="roles">
							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream.  Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>

							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream. Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>
							  	</div>
							  	<div class="tab-pane fade" id="courses">
							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream.  Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>

							  		<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream. Please send email and get latest news. And hope success will come for your dream. Please send email and get latest news</p>
							  	</div>
							</div>
  						</div>
					</div>
				</div>
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

<!-- Mirrored from ecologytheme.com/theme/Skyheights Academy/become-a-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 17:51:10 GMT -->
</html>
