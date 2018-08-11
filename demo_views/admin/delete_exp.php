<?php
session_start();

$gt = expDetail($conn, $_GET);
extract($gt);
logs($conn,'deleted', 'Expression_by:'.$Name,'Expression',$_SESSION['id'] );
deleteExp($conn, $_GET);
 ?>
