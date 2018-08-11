<?php
session_start();

$gt = appDetail($conn, $_GET);
extract($gt);
logs($conn,'Deleted', 'application_by:'.$name,'TeachersApplication',$_SESSION['id'] );
deleteApp($conn, $_GET);
 ?>
