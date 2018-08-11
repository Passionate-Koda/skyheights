<?php
session_start();

$gt = TesDetail($conn, $_GET);
extract($gt);
logs($conn,'Deleted', 'Testimony_by:'.$Name,'Testimony',$_SESSION['id'] );
deleteTes($conn, $_GET);
 ?>
