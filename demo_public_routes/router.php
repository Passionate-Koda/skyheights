<?php
$uri = explode("/", $_SERVER['REQUEST_URI']);
//var_dump($uri);

if(count($uri)> 2){
  header("Location:/index");
}

//Creating A Null variable to be populated for the query String Route;
$category_id = NULL;
$category_name= NULL;

//Creating a $_GET condition to populate the Null Variables;
if(isset($_GET['id'])){
  $category_id = $_GET['id'];
}

$msg = NULL;
if(isset($_GET['msg'])){
  $msg = $_GET['msg'];
}

$ssp = NULL;
if(isset($_GET['ssp'])){
  $ssp = $_GET['ssp'];
}
if(isset($_GET['name'])){
  $category_name = $_GET['name'];
}
$success = NULL;
if(isset($_GET['success'])){
  $success = $_GET['success'];
}

$err = NULL;
if(isset($_GET['err'])){
  $err = $_GET['err'];
}

$wn = NULL;
if(isset($_GET['wn'])){
  $wn = $_GET['wn'];
}

$sgn = NULL;
if(isset($_GET['sgn'])){
  $sgn = $_GET['sgn'];
}

$id = NULL;
if(isset($_GET['id'])){
  $id = $_GET['id'];
}

$t = NULL;
if(isset($_GET['t'])){
  $t = $_GET['t'];
}


switch ($uri[1]) {

  case "home":
  include APP_PATH."/demo_public_views/home.php";
  break;

  case "events":
  include APP_PATH."/demo_public_views/events.php";
  break;

  case "events?id=$id":
  include APP_PATH."/demo_public_views/event_details.php";
  break;

  case "teachers":
  include APP_PATH."/demo_public_views/teachers.php";
  break;

  case "becomeAteacher":
  include APP_PATH."/demo_public_views/becomeAteacher.php";
  break;

  case "teachers?id=$id":
  include APP_PATH."/demo_public_views/teachers_details.php";
  break;

  case "news_board":
  include APP_PATH."/demo_public_views/news.php";
  break;
  case "contact":
  include APP_PATH."/demo_public_views/contact.php";
  break;
  case "about":
  include APP_PATH."/demo_public_views/about.php";
  break;

  case "news_board?id=$id":
  include APP_PATH."/demo_public_views/news_details.php";
  break;








}
