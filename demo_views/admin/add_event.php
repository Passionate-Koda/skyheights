<?php
ob_start();
session_start();
$reda = adminFullInfo($conn,$_SESSION['id']);
if($reda["bio"] == NULL || $reda["bio"] == ""){
  header("Location:addProfile");
}
include("include/authentication.php");
// include("include/levelcheck.php");
authenticate();
include("include/link_include.php");



 ?>

    <div id="carousel-area">


    <div id="carousel-slider" class="carousel slide" data-interval="3000">
    <div class="carousel-inner">

    <div class="item active" style="background-image: url(images/4544586_ki3_jpeg0bc2afacb2a300932db856c8c85fc7ea.jpg); ">
    <div class="carousel-caption">
    <h2 style="text-shadow: 0 0 7px #FD8F2C">
    Welcome to SkyHeights Academy
    </h2>
    <h3 style="text-shadow: 0 0 7px #FD8F2C">
    THIS IS THE SKYHEIGHTS ACADEMY WEB OFFICE.
    </h3
    </div>
    </div>
    <div class="item" style="background-image: url(assets/img/slider/slide2.jpg);">
    <div class="carousel-caption">
    <h2>
    POST YOUR CONTENT
    </h2>
    <h3>
    Let the world feel your impact and share of your knowledge
    </h3>
    </div>
    </div>
    <div class="item" style="background-image: url(assets/img/slider/slide3.jpg);">
    <div class="carousel-caption">
    <h2>
    Get  Exposure
    </h2>
    <h3>
   Launch yourself to the space.
    </h3>
    </div>
    </div>
    </div>
    <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
    <i class="lnr lnr-chevron-left">
    </i>
    </a>
    <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
    <i class="lnr lnr-chevron-right">
    </i>
    </a>
    </div>
    </div>

    </div>






    <script type="text/javascript" src="assets/js/jquery-min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    </body>

    <!-- Mirrored from demo.graygrids.com/themes/classix-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:40:55 GMT -->
    </html>
