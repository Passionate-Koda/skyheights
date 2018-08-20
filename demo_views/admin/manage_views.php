<?php
ob_start();
session_start();
include("include/link_include.php");
include("include/authentication.php");
include("include/levelcheck.php");
include("include/student_limit.php");
include("include/level1_limit.php");
authenticate();
if(isset($_SESSION['id'])){
  $session = $_SESSION['id'];
}
$info = adminInfo($conn,$session);
extract($info);


$error = [];
if(array_key_exists('submit', $_POST)){
  $ext = ["image/jpg", "image/JPG", "image/jpeg", "image/JPEG", "image/png", "image/PNG"];
  if(empty($_FILES['upload']['name'])){
    $error['upload'] = "Please choose file";
  }
  if(empty($_POST['header_title'])){
    $error['header_title'] = "Enter Header Title";
  }

  if(empty($error)){
    $_POST['text'] = ".";
    $ver = compressImage($_FILES,'upload',50, 'uploads/' );
    $clean =  array_map('trim',$_POST );
    addFrontage($conn, $clean, $ver,$hash_id);
  }
}


?>







<section id="content">
<div class="container">
<div class="row">
<?php

if (isset($_GET['success'])){
$msg = str_replace('_', ' ', $_GET['success']);

  echo '<div class="col-md-12">
<div class="inner-box posting">
<div class="alert alert-success alert-lg" role="alert">
<h2 class="postin-title">✔ Successful! '.$msg.' </h2>
<p>Thank you '.ucwords($firstname).', BoardSpeck is happy to have you around. </p>
</div>
</div>
</div>';
}

 ?>





 <h3>FRONTAGE SLIDER</h3>
 <hr>
 <h5>MANAGE FRONTAGE SLIDER</h5>
 <div  class="alert alert-info" role="alert">
  <strong>NOTE</strong>
  <p><strong>*</strong>This SLIDER is displayed on the Home Page of the Skyheights Academy page</p>
  <p><strong>*</strong>If you press Delete, the particular slide will be deleted</p>
 </div>
 <div class="bs-docs-example">
   <table class="table table-striped table-hover" >
     <tr>
       <th width="100">TITLE</th>
       <th width="100">IMAGE</th>
     </tr>
     <tbody>
       <?php
       $vis = "show";
       viewFrontage($conn) ?>
     </tbody>
   </table>
 </div>
 <hr>






















<div class="col-sm-12 col-md-10 col-md-offset-1">
<div class="page-ads box">
<h2 class="title-2">Welcome to the Manage views Page</h2>
<div class="row search-bar mb30 ">
<div class="advanced-search">

<div class="col-md-4 col-sm-12 search-col">
<h3>Manage Views</h3>
</div>

</div>
</div>
<form class="form-ad" method="POST" action="" enctype="multipart/form-data">
  <?php $display = displayErrors($error, 'header_title');
  echo $display ?>
<div class="form-group mb30">
<label class="control-label">Header Name</label> <input class="form-control input-md" name="header_title" placeholder="Enter name of the header"  type="text">
</div>

<h2 class="title-2">Add Images to Public</h2>
<?php $display = displayErrors($error, 'upload');
echo $display ?>
<div class="form-group">
<label class="control-label">Featured Image</label> <input class="file" name="upload"  type="file"><br>
</div>
<p class="help-block">Add image.</p>
<input type="submit" class="btn btn-common"  name="submit" value="submit">

</form>

</div>
</div>
</div>
</div>
</div>
</section>

<a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>

<!-- <script type="text/javascript">
 CKEDITOR.replace( 'editor1',
 {
		toolbarGroups :
		[
      	{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
        	{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
          { name: 'links' },
            { name: 'insert' },
              	{ name: 'others' },
            	{ name: 'forms' },
            { name: 'tools' },
            '/',
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
            { name: 'styles' },
            { name: 'colors' },
		]
	});
</script> -->


<script src="assets/js/jquery-min.js" type="text/javascript">
  </script>
<script src="assets/js/bootstrap.min.js" type="text/javascript">
  </script>
<script src="assets/js/material.min.js" type="text/javascript">
  </script>
<script src="assets/js/material-kit.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.parallax.js" type="text/javascript">
  </script>
<script src="assets/js/owl.carousel.min.js" type="text/javascript">
  </script>
<script src="assets/js/wow.js" type="text/javascript">
  </script>
<script src="assets/js/main.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.counterup.min.js" type="text/javascript">
  </script>
<script src="assets/js/waypoints.min.js" type="text/javascript">
  </script>
<script src="assets/js/jasny-bootstrap.min.js" type="text/javascript">
  </script>
<script src="assets/js/form-validator.min.js" type="text/javascript">
  </script>
<script src="assets/js/contact-form-script.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.themepunch.revolution.min.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.themepunch.tools.min.js" type="text/javascript">
  </script>
<script src="assets/js/bootstrap-select.min.js">
  </script>
<script src="assets/js/fileinput.js">
  </script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classix-template/post-ads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:40:57 GMT -->
</html>
