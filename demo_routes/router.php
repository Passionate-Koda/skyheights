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


//   case "":
// include APP_PATH."/demo_views/admin/admin_home.php";
//   break;

  case "adminHome":
  include APP_PATH."/demo_views/admin/admin_home.php";
  break;



  case "addArticle":
  include APP_PATH."/demo_views/admin/add_blog.php";
  break;

  case "addExploit":
  include APP_PATH."/demo_views/admin/add_exploit.php";
  break;

  case "addInsight":
  include APP_PATH."/demo_views/admin/add_insights.php";
  break;

  case "addProgram":
  include APP_PATH."/demo_views/admin/add_trainings.php";
  break;

  case "addNews":
  include APP_PATH."/demo_views/admin/add_news.php";
  break;


  case "addResources":
  include APP_PATH."/demo_views/admin/add_resources.php";
  break;

  case "logout":
  include APP_PATH."/demo_views/admin/logout.php";
  break;

  case "addArticle?success=$success":
  include APP_PATH."/demo_views/admin/add_blog.php";
  break;

  case "addExploit?success=$success":
  include APP_PATH."/demo_views/admin/add_exploit.php";
  break;

  case "addInsight?success=$success":
  include APP_PATH."/demo_views/admin/add_insights.php";
  break;

  case "addNews?success=$success":
  include APP_PATH."/demo_views/admin/add_news.php";
  break;

  case "manageTestimony":
  include APP_PATH."/demo_views/admin/manage_testimony.php";
  break;
  case "manageTestimony?success=$success":
  include APP_PATH."/demo_views/admin/manage_testimony.php";
  break;
  case "manageExpression":
  include APP_PATH."/demo_views/admin/manage_expression.php";
  break;
  case "manageExpression?success=$success":
  include APP_PATH."/demo_views/admin/manage_expression.php";
  break;

  case "addTraining?success=$success":
  include APP_PATH."/demo_views/admin/add_grants.php";
  break;

  case "addEvent?success=$success":
  include APP_PATH."/demo_views/admin/add_event.php";
  break;

  case "addEvent":
  include APP_PATH."/demo_views/admin/add_event.php";
  break;

  case "delete_tes?id=$id":
  include APP_PATH."/demo_views/admin/delete_tes.php";
  break;
  case "delete_app?id=$id":
  include APP_PATH."/demo_views/admin/delete_application.php";
  break;
  case "delete_exp?id=$id":
  include APP_PATH."/demo_views/admin/delete_exp.php";
  break;
  case "delete_frontage?id=$id":
  include APP_PATH."/demo_views/admin/delete_frontage.php";
  break;

  case "addProgram?success=$success":
  include APP_PATH."/demo_views/admin/add_trainings.php";
  break;

  case "addReport?success=$success":
  include APP_PATH."/demo_views/admin/add_report.php";
  break;

  case "addResult":
  include APP_PATH."/demo_views/admin/add_result.php";
  break;

  case "addResources?success=$success":
  include APP_PATH."/demo_views/admin/add_resources.php";
  break;

  case "suspend?id=$id":
  include APP_PATH."/demo_views/admin/suspend.php";
  break;
  case "suspendClient?id=$id":
  include APP_PATH."/demo_views/admin/suspend_client.php";
  break;

  case "verify?id=$id":
  include APP_PATH."/demo_views/admin/verify.php";
  break;
  case "verifyClient?id=$id":
  include APP_PATH."/demo_views/admin/verify_client.php";
  break;

  case "setLevel?id=$id":
  include APP_PATH."/demo_views/admin/setLevel.php";
  break;

  case "deleteUser?id=$id":
  include APP_PATH."/demo_views/admin/delete_user.php";
  break;
  case "deleteClient?id=$id":
  include APP_PATH."/demo_views/admin/delete_client.php";
  break;

  case "addFaq":
  include APP_PATH."/demo_views/admin/add_faq.php";
  break;

  case "addFaq?success=$success":
  include APP_PATH."/demo_views/admin/add_faq.php";
  break;

  case "viewUsers":
  include APP_PATH."/demo_views/admin/view_users.php";
  break;

  case "log":
  include APP_PATH."/demo_views/admin/log.php";
  break;

  case "viewUsers?success=$success":
  include APP_PATH."/demo_views/admin/view_users.php";
  break;

  case "viewApplication":
  include APP_PATH."/demo_views/admin/view_application.php";
  break;
  case "viewApplication?success=$success":
  include APP_PATH."/demo_views/admin/view_application.php";
  break;

  case "manageResult?success=$success":
  include APP_PATH."/demo_views/admin/manage_election.php";
  break;
  case "manageResult":
  include APP_PATH."/demo_views/admin/manage_election.php";
  break;

  case "manageNews":
  include APP_PATH."/demo_views/admin/view_news.php";
  break;

  case "manageElectionNews":
  include APP_PATH."/demo_views/admin/view_news.php";
  break;



  case "manageEvent":
  include APP_PATH."/demo_views/admin/view_event.php";
  break;

  case "manageEvent?success=$success":
  include APP_PATH."/demo_views/admin/view_event.php";
  break;

  case "manageArticles":
  include APP_PATH."/demo_views/admin/view_articles.php";
  break;

  case "manageExploits":
  include APP_PATH."/demo_views/admin/view_exploits.php";
  break;

  case "manageInsights":
  include APP_PATH."/demo_views/admin/view_insights.php";
  break;

  case "insightCategory":
  include APP_PATH."/demo_views/admin/add_package.php";
  break;

  case "show":
  include APP_PATH."/demo_views/admin/show.php";
  break;

  case "show?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/show.php";
  break;

  case "show?id=$id":
  include APP_PATH."/demo_views/admin/show.php";
  break;

  case "hide":
  include APP_PATH."/demo_views/admin/hide.php";
  break;

  case "editArticle?id=$id":
  include APP_PATH."/demo_views/admin/edit_article.php";
  break;

  case "editExploit?id=$id":
  include APP_PATH."/demo_views/admin/edit_exploit.php";
  break;

  case "editAbout?id=$id":
  include APP_PATH."/demo_views/admin/edit_about.php";
  break;

  case "editInsight?id=$id":
  include APP_PATH."/demo_views/admin/edit_insight.php";
  break;

  case "editEvent?id=$id":
  include APP_PATH."/demo_views/admin/edit_event.php";
  break;

  case "editNews?id=$id":
  include APP_PATH."/demo_views/admin/edit_news.php";
  break;

  case "manageNews?success=$success":
  include APP_PATH."/demo_views/admin/view_news.php";
  break;

  case "hide?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/hide.php";
  break;

  case "hide?id=$id":
  include APP_PATH."/demo_views/admin/hide.php";
  break;

  case "insightCategory?success=$success":
  include APP_PATH."/demo_views/admin/add_package.php";
  break;

  case "newsCategory":
  include APP_PATH."/demo_views/admin/add_news_category.php";
  break;

  case "newsCategory?success=$success":
  include APP_PATH."/demo_views/admin/add_news_category.php";
  break;

  case "addProfile":
  include APP_PATH."/demo_views/admin/add_profile.php";
  break;

  case "addProfile?success=$success":
  include APP_PATH."/demo_views/admin/add_profile.php";
  break;

  case "addAbout":
  include APP_PATH."/demo_views/admin/add_about.php";
  break;

  case "addAbout?success=$success":
  include APP_PATH."/demo_views/admin/add_about.php";
  break;

  case "addProject":
  include APP_PATH."/demo_views/admin/add_project.php";
  break;

  case "addProject?success=$success":
  include APP_PATH."/demo_views/admin/add_project.php";
  break;

  case "adminRegistration":
  include APP_PATH."/demo_views/admin/add_admin.php";
  break;

  case "adminRegistration?success=$success":
  include APP_PATH."/demo_views/admin/add_admin.php";
  break;
  case "registration":
  include APP_PATH."/demo_views/admin/add_admin.php";
  break;

  case "registration?success=$success":
  include APP_PATH."/demo_views/admin/add_admin.php";
  break;

  case "adminLogin?wn=$wn":
  include APP_PATH."/demo_views/admin/admin_login.php";
  break;

  case "adminLogin?sgn=$sgn":
  include APP_PATH."/demo_views/admin/admin_login.php";
  break;

  case "adminLogin?ssp=$ssp":
  include APP_PATH."/demo_views/admin/admin_login.php";
  break;

  case "adminLogin?err=$err":
  include APP_PATH."/demo_views/admin/admin_login.php";
  break;

  case "adminLogin":
  include APP_PATH."/demo_views/admin/admin_login.php";
  break;
  case "login":
  include APP_PATH."/demo_views/admin/admin_login.php";
  break;

  case "admin":
  include APP_PATH."/demo_views/admin/admin_home.php";
  break;

  case "admin?success=$success":
  include APP_PATH."/demo_views/admin/admin_home.php";
  break;

  case "admin?wn=$wn":
  include APP_PATH."/demo_views/admin/admin_home.php";
  break;

  case "manageViews":
  include APP_PATH."/demo_views/admin/manage_views.php";
  break;

  case "manageViews?success=$success":
  include APP_PATH."/demo_views/admin/manage_views.php";
  break;

  case "editImage?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/edit_image.php";
  break;

  case "deleteArticle?id=$id":
  include APP_PATH."/demo_views/admin/delete_article.php";
  break;

  case "deleteExploit?id=$id":
  include APP_PATH."/demo_views/admin/delete_exploit.php";
  break;
  case "deleteEvent?id=$id":
  include APP_PATH."/demo_views/admin/delete_event.php";
  break;
  case "deleteInsight?id=$id":
  include APP_PATH."/demo_views/admin/delete_insight.php";
  break;

  case "deleteNews?id=$id":
  include APP_PATH."/demo_views/admin/delete_news.php";
  break;

  case "manageInsights?success=$success":
  include APP_PATH."/demo_views/admin/view_insights.php";
  break;

  case "manageArticles?success=$success":
  include APP_PATH."/demo_views/admin/view_articles.php";
  break;

  case "manageExploits?success=$success":
  include APP_PATH."/demo_views/admin/view_exploits.php";
  break;

  case "manageAbout":
  include APP_PATH."/demo_views/admin/manage_about.php";
  break;
  case "clients":
  include APP_PATH."/demo_views/admin/users.php";
  case "clients?success=$success":
  include APP_PATH."/demo_views/admin/users.php";
  break;
  case "manageAbout?success=$success":
  include APP_PATH."/demo_views/admin/manage_about.php";
  break;

  case "manageReports?success=$success":
  include APP_PATH."/demo_views/admin/manage_reports.php";
  break;

  case "manageReports":
  include APP_PATH."/demo_views/admin/manage_reports.php";
  break;

  case "manageResources?success=$success":
  include APP_PATH."/demo_views/admin/manage_resources.php";
  break;

  case "manageResources":
  include APP_PATH."/demo_views/admin/manage_resources.php";
  break;

  case "managePrograms?success=$success":
  include APP_PATH."/demo_views/admin/manage_trainings.php";
  break;

  case "managePrograms":
  include APP_PATH."/demo_views/admin/manage_trainings.php";
  break;

  case "manageTrainings?success=$success":
  include APP_PATH."/demo_views/admin/manage_grants.php";
  break;

  case "manageTrainings":
  include APP_PATH."/demo_views/admin/manage_grants.php";
  break;

  case "editContent?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/editResources.php";
  break;

  case "viewBody?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/view_body.php";
  break;

  case "deleteContent?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/delete_resource.php";
  break;

  ///////Public Routes////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}





?>
