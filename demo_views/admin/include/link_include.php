<?php
ob_start();
header("cache-control:no-cache");
$read = adminFullInfo($conn,$_SESSION['id']);


if($read['defaulted'] >= 3){
  setLogout($conn,$_SESSION['id']);
  session_destroy();
  $success = "Your Account has Been Suspended";
  $succ = preg_replace('/\s+/', '_', $success);
  header("Location: adminLogin?ssp=$succ");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="GrayGrids Team">
  <title><?php
  if(isset($page_title)){
    echo $page_title;
  }else{
  ?>
  SkyHeights Academy
<?php } ?>
</title>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8381011534413768",
    enable_page_level_ads: true
  });
</script>
<?php
if(isset($page_name) && $page_name == 'articles'){
	?>
  <script type="text/javascript" src="/assets/ckeditor5-build-classic/ckeditor.js"></script>
<?php }else{ ?>
  <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<?php } ?>

  <link rel="shortcut icon" href="assets/img/favicon.png">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
  <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
  <link href="assets/css/fileinput.css" rel="stylesheet">
  <link rel="manifest" href="/manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "89dfd893-f2f1-401c-a666-5189937829da",
      autoRegister: false,
      notifyButton: {
        enable: true,
      },
    });
  });
</script>
</head>
<body>
  <div class="header">
    <nav class="navbar navbar-default main-navigation" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#"><img src="assets/img/logo3.jpg" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="postadd">
              <a class="btn btn-danger btn-post" href="index"><span class="fa fa-plus-circle"></span> Go to Public</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
      <div class="close" data-toggle="offcanvas" data-target=".navmenu">
        <i class="fa fa-close"></i>
      </div>
      <h3 class="title-menu">All Pages</h3>
      <ul class="nav navmenu-nav">
        <?php $level = adminLevel($conn, $_SESSION['id']);
        if($level == NULL ){
          ?>
          <li> <a href="logout">Logout</a></li>
        <?php }elseif($level == 1){
          ?>
          <li><a href="admin">Home</a></li>
          <!-- <li><a href="manageViews">Manage Views</a></li> -->
          <!-- <li><a href="adminRegistration">Add Admin</a></li> -->
          <!-- <li><a href="addProfile">Add Profile</a></li> -->
          <!-- <li><a href="manageReports">Manage Reports</a></li> -->
          <!-- <li><a href="manageGrants">Manage Programs</a></li> -->
          <li><a href="contents">Contents</a></li>
          <li><a href="managePrograms">Manage Program</a></li>
          <li><a href="manageCampusNews">Manage Campus News</a></li>
          <li><a href="manageCampusArticles">Manage Campus Articles</a></li>
          <li><a href="manageNews">Manage News</a></li>
          <li><a href="manageInsights">Manage Article</a></li>
          <li><a href="manageEvent">Manage Events</a></li>

          <li> <a href="logout">Logout</a></li>
        <?php }elseif($level == 4){ ?>

          <li><a href="addCampusNews">Add Campus News</a></li>
          <li><a href="addCampusArticle">Add Campus Article</a></li>
          <li><a href="manageCampusNews">Manage Campus News</a></li>
          <li><a href="manageCampusArticles">Manage Campus Articles</a></li>
           <li> <a href="logout">Logout</a></li>
<?php  }elseif($level == 5){ ?>
          <li><a href="addInsight">Add Insight</a></li>
  <li><a href="manageInsights">Manage Article</a></li>
       <li><a href="addArticle">Add Article</a></li>
          <li><a href="manageInsights">Manage Insights</a></li>
           <li> <a href="logout">Logout</a></li>
<?php }elseif($level == 6){ ?>
 <li><a href="admin">Home</a></li>
          <li><a href="addNews">Add News</a></li>
          <li><a href="addCampusNews">Add Campus News</a></li>
          <li><a href="addEvent">Add Event</a></li>
          <li><a href="manageNews">Manage News</a></li>
          <li><a href="manageCampusNews">Manage Campus News</a></li>
          <li><a href="manageEvent">Manage Events</a></li>
           <li> <a href="logout">Logout</a></li>
<?php }elseif($level == 7){ ?>
 <li><a href="admin">Home</a></li>
            <li><a href="addTraining">Add Training</a></li>
          <li><a href="manageTrainings">Manage Trainings</a></li>
           <li> <a href="logout">Logout</a></li>
<?php }elseif($level == 8){ ?>
 <li><a href="admin">Home</a></li>
            <li><a href="addExploit">Add Exploit</a></li>
          <li><a href="manageExploits">Manage Exploit</a></li>
           <li> <a href="logout">Logout</a></li>
<?php }elseif($level == 9){ ?>
          <li><a href="admin">Home</a></li>
          <li><a href="addArticle">Add Articles</a></li>
          <li><a href="manageArticles">Manage Articles</a></li>
           <li> <a href="logout">Logout</a></li>
        <?php }else{ ?>
          <li><a href="admin">Home</a></li>

          <li><a href="addNews">Add News</a></li>

          <li><a href="addEvent">Add Event</a></li>

          <li><a href="manageNews">Manage News</a></li>
          <li><a href="manageExpression">Manage Students Expression</a></li>

          <li><a href="manageEvent">Manage Events</a></li>
          <li><a href="viewApplication">Manage Application</a></li>
          <!-- <li><a href="manageExploits">Manage Exploits</a></li> -->
          <?php $check2 = adminFullInfo($conn,$_SESSION['id']);
          if($check2['portfolio'] == 555666777888999000){
            ?>
            <li><a href="manageViews">Manage Views</a></li>

            <!-- <li><a href="addAbout">Add About Us</a></li> -->
            <li><a href="manageTestimony">Manage Testimony</a></li>
            <li><a href="manageAbout">About Us</a></li>
            <li><a href="viewUsers">Manage Users</a></li>
            <!-- <li><a href="clients">Clients Users</a></li> -->
            <li><a href="log">Log</a></li>
          <?php } ?>
          <li> <a href="logout">Logout</a></li>
        <?php } ?>
      </ul>
    </div>
    <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
      <p><i class="fa fa-file-text-o"></i> All Pages</p>
    </div>
