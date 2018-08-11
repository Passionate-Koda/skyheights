<?php
ob_start();
session_start();
$page_name = 'articles';
include("include/authentication.php");
include("include/link_include.php");
include("include/levelcheck.php");
include("include/student_limit.php");
include("include/level1_limit.php");

$level = adminLevel($conn, $_SESSION['id']);
// if($level <= 1){
//   $success = "You only Have Access to that page yet";
//   $succ = preg_replace('/\s+/', '_', $success);
//   header("Location: adminHome?wn=$succ");
// }

authenticate();
if(isset($_SESSION['id'])){
  $session = $_SESSION['id'];
}

$info = adminInfo($conn,$session);
extract($info);
$fname = ucwords($firstname);
$lname = ucwords($lastname);
if($bio == NULL or $bio==""){
  header("Location:addProfile");
}

$error= [];

if(array_key_exists('submit', $_POST)){
  $ext = ["image/jpg", "image/JPG", "image/jpeg", "image/JPEG", "image/png", "image/PNG"];
  if(empty($_FILES['upload']['name'])){
    $error['upload'] = "Please choose file";
  }

  if(empty($_POST['title'])){
    $error['title']="Enter a Title";
  }
  if(empty($_POST['about'])){
    $error['about']="Choose an Option";
  }

  if(empty($_POST['author'])){
    $error['author']="Enter a Author";
  }

  if(empty($_POST['body'])){
    $error['body']="Enter a body";
  }
  if(empty($_POST['visibility'])){
    $error['visibility']="Enter a Visibility";
  }

  if(empty($error)){
    $ver['a'] = compressImage($_FILES,'upload',90, 'uploads/' );

    $clean = array_map('trim', $_POST);

    $firstn = $fname;
    $lastn = $lname;
    $uri = explode("/", $_SERVER['REQUEST_URI']);
    $url = $uri[1];
     $to = "boardspeck@gmail.com";
     $subject = "SkyHeights Academy Web Office Content Upload";
     $txt = "Hello Admin, ($firstn $lastn)has added a content on "."$url"." page at the back office. Kindly check for and approval";
     $headers = "From: info@boardspeck.com" . "\r\n" .
     "CC: banjimayowa@gmail.com";
     mail($to,$subject,$txt,$headers);
    addArticle($conn, $clean,$ver,$hash_id);
    logs($conn, "added",$clean['title'],'article',$hash_id);
  }
}
 ?>
<section id="content">
<div class="container">
<div class="row">
  <?php if (isset($_GET['success'])){
  $msg = str_replace('_', ' ', $_GET['success']);

    echo '<div class="col-md-12">
  <div class="inner-box posting">
  <div class="alert alert-success alert-lg" role="alert">
  <h2 class="postin-title">✔ Successful! '.$msg.' </h2>
  <p>Thank you '.ucwords($firstname).', SkyHeights Academy  is happy to have you around. </p>
  </div>
  </div>
  </div>';
  } ?>
<div class="col-sm-12 col-md-10 col-md-offset-1">
<div class="page-ads box">
<h2 class="title-2">Welcome to the Article page</h2>
<div class="row search-bar mb30 red-bg">
<div class="advanced-search">
<form class="search-form" method="get">
<div class="col-md-4 col-sm-12 search-col">
<h3>Please post your article.</h3>
</div>
</form>
</div>
</div>
<form class="form-ad" action="" method="post" enctype="multipart/form-data">
<div class="form-group mb30">
<label class="control-label">Article Title</label><?php $display = displayErrors($error, 'title');
echo $display ?> <input class="form-control input-md" name="title" placeholder="Write a suitable title for your article"  type="text">
</div>
<div class="form-group mb30">
<label class="control-label">Author Name</label><?php $display = displayErrors($error, 'author');
echo $display ?> <input class="form-control input-md" name="author" placeholder="Enter Authors fullname here"  type="text">

<div class="form-group mb30">
<label class="control-label" for="textarea">Body</label>
<?php $display = displayErrors($error, 'body');
echo $display ?>
<textarea class="form-control" id="editor" name="body" placeholder="Write your article here" rows="4"></textarea>
</div>

  <br/>
  <div class="col-md-4 col-sm-4 col-xs-12 search-bar search-bar-nostyle">
<div class="input-group-addon search-category-container">

<label class="control-labell">VISIBILITY </label>  <?php $display = displayErrors($error, 'visibility');
  echo $display ?><br><select class="dropdown-product selectpicker" required name="visibility">
<option value="hide">
--Admin Decision--
</option>
</select>

</div>
</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>



<div class="form-group mb30">
<label class="control-labell">INCLUDE YOUR PROFILE CARD AS DISPLAYED BELOW </label>
<p>Yes
<input type="radio" name="about" value="1" required>
&nbsp &nbsp &nbsp
No
<input type="radio" name="about" value="2">
</p>
</div>

<!-- <?php //if($session == "e238t723ts7106"){ ?> -->
<div class="author">
<div class="inner-box">
<div class="author-img">
<img height="100" width="100" src="<?php echo $image_1 ?>" alt="">
</div>
<div class="author-text">
<div class="author-title">
<h3 class="pull-left"><?php echo $firstname." ".$lastname ?></h3>
<div class="social-link pull-right">
  <?php if($twitter_link !== NULL && $twitter_link !=="" ){ ?>
<a class="twitter" target="_blank" data-original-title="twitter" href="<?php  echo $twitter_link; ?>" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
<?php } ?>

<?php if($facebook_link !== NULL && $facebook_link !=="" ){ ?>
<a class="facebook" target="_blank" data-original-title="facebook" href="<?php  echo $facebook_link; ?>" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
<?php } ?>

<?php if($instagram_link !== NULL && $instagram_link !=="" ){ ?>
<a class="instagram" target="_blank" data-original-title="instagram" href="<?php  echo $instagram_link; ?>" data-toggle="tooltip" data-placement="top"><i class="fa fa-instagram"></i></a>
<?php } ?>

<?php if($linkedin_link !== NULL && $linkedin_link !=="" ){ ?>
<a class="linkedin" target="_blank" data-original-title="linkedin" href="<?php  echo $linkedin_link;?>" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
<?php } ?>
</div>
</div>
<br>
<p><?php echo $bio ?></p>
</div>
<div class="clearfix">
</div>

</div>

</div>



<h2 class="title-2">Add Image here</h2>
<div class="form-group is-empty">
<label class="control-label">Add images</label>
<?php $display = displayErrors($error, 'upload');
  echo $display ?> <br>
 <input class="file" id="featured-img" type="file" name="upload"><br>
<br>
<input type="submit" class="btn btn-common" name="submit" value="Add">
</form>
</div>
</div>
</div>
</div>


</section>

<a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> -->


 <script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
      console.log( editor );
    } )
    .catch( error => {
      console.error( error );
    } );
</script>

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
