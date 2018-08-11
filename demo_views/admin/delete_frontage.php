<?php
session_start();

$gt = frontageDetail($conn, $_GET);
extract($gt);

logs($conn,'deleted', 'frontage with the title:'.$header_title,'Frontage',$_SESSION['id'] );
deleteFrontage($conn, $_GET);


 ?>
