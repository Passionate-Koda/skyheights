<?php
session_start();
include("include/link_include.php");
include("include/authentication.php");
include("include/levelcheck.php");
include("include/student_limit.php");
include("include/level1_limit.php");
include("include/level2_limit.php");
authenticate();

$gt = appDetail($conn, $_GET);
extract($gt);
logs($conn,'Deleted', 'application_by:'.$name,'TeachersApplication',$_SESSION['id'] );
deleteApp($conn, $_GET);
 ?>
