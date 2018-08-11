<?php
ob_start();
session_start();
$pn = "addProfile";
include("include/link_include.php");
include("include/authentication.php");
include("include/levelcheck.php");
authenticate();
if(isset($_SESSION['id'])){
  $session = $_SESSION['id'];
}
$info = adminInfo($conn,$session);
extract($info);
$fname = ucwords($firstname);
$lname = ucwords($lastname);

$error = [];
if(array_key_exists('submit', $_POST)){

  $ext = ["image/jpg", "image/JPG", "image/jpeg", "image/JPEG", "image/png", "image/PNG"];
  if(empty($_FILES['upload']['name'])){
    $error['upload'] = "Please choose file";
  }
  if(empty($_POST['lname'])){
    $error['lname'] = "Enter  LastName";
  }
  if(empty($_POST['fname'])){
    $error['fname'] = "Enter FirstName";
  }
  if(empty($_POST['bio'])){
    $error['bio'] = "Enter Bio";
  }
  if(empty($_POST['phonenumber'])){
    $error['phonenumber'] = "Enter PhoneNumber";
  }
  if(empty($_POST['fblink'])){
    $_POST['fblink'] = NULL;
  }
  if(empty($_POST['twlink'])){
    $_POST['twlink'] = NULL;
  }
  if(empty($_POST['location'])){
    $_POST['location'] = NULL;
  }
  if(empty($_POST['iglink'])){
    $_POST['iglink'] = NULL;
  }
  if(empty($_POST['lklink'])){
    $_POST['lklink'] = NULL;
  }
  if(empty($error)){
    $ver = compressImage($_FILES,'upload',50, 'uploads/' );
    $clean = array_map('trim',$_POST);
    addProfile($conn, $clean, $ver,$image_1,$hash_id);
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


<?php if($profile_status == NULL){?>
<div class="col-sm-12 col-md-10 col-md-offset-1">
<div class="page-ads box">
<h2 class="title-2">Welcome to the profile page</h2>
<div class="row search-bar mb30 red">
<div class="advanced-search">
<form class="search-form" method="get">
<h3>PLEASE FILL IN YOUR PROFILE</h3>
</form>
</div>
</div>
<form class="form-ad" action="" method="POST" enctype="multipart/form-data">

<div class="form-group mb30">

<label class="control-label">FIRSTNAME</label>
<?php $display = displayErrors($error, 'fname');
echo $display ?>
 <input required class="form-control input-md" name="fname"  type="text" value="<?php echo "$fname"  ?>" placeholder="Enter your firstname"/>

<div class="form-group mb30">

<label class="control-label">LASTNAME</label>
<?php $display = displayErrors($error, 'lname');
echo $display ?> <input required class="form-control input-md" name="lname"  type="text" value="<?php echo "$lname"  ?>" placeholder="Enter your lastname"/>
</div>

<div class="form-group mb30">
<label class="control-label" for="textarea">BIO</label>
<?php $display = displayErrors($error, 'bio');
echo $display ?>
<textarea class="form-control" id="textarea" name="bio" placeholder="Enter your Bio in not  more than 300 Characters" maxlength="300" rows="4" required><?php if($bio !== NULL){ echo "$bio";}  ?></textarea>
</div>






<div class="form-group mb30">
<label class="control-label">PHONENUMBER</label><?php $display = displayErrors($error, 'phonenumber');
echo $display ?> <input required class="form-control input-md" name="phonenumber"  type="text"placeholder="Enter phonenumber" value="<?php if($phone_number !== NULL){ echo "$phone_number";}  ?>"/>
</div>


<h2 class="title-2">Enter your Social Media Details. Leave Blank Where You Do Not have an Account with the Platforms Listed </h2>

<div class="form-group mb30">
<label class="control-label">FACEBOOK LINK</label><?php $display = displayErrors($error, 'fblink');
echo $display ?> <input class="form-control input-md" name="fblink"  type="text"placeholder="Enter your facebook link ( Sample: https://www.facebook.com/yourusername/)" value="<?php if($facebook_link !== NULL){ echo "$facebook_link";}  ?>"/>
</div>

<div class="form-group mb30">
<label class="control-label">TWITTER LINK</label><?php $display = displayErrors($error, 'twlink');
echo $display ?> <input class="form-control input-md" name="twlink"  type="text" placeholder="Enter your twitter link ( Sample: https://www.twitter.com/username/)" value="<?php if($twitter_link !== NULL){ echo "$twitter_link";}  ?>"/>
</div>

<div class="form-group mb30">

<label class="control-label">LOCATION</label>
<?php $display = displayErrors($error, 'location');
echo $display ?> <input class="form-control input-md" name="location"  type="text" placeholder="Enter your location" value="<?php if($location !== NULL){ echo "$location";}  ?>"/>
</div>

<div class="form-group mb30">
<label class="control-label">INSTAGRAM LINK</label><?php $display = displayErrors($error, 'iglink');
echo $display ?> <input class="form-control input-md" name="iglink"  type="text" placeholder="Enter Your instagram link ( Sample: https://www.instagram.com/username/)" value="<?php if($instagram_link !== NULL){ echo "$instagram_link";}  ?>"/>
</div>

<div class="form-group mb30">
<label class="control-label">LINKEDIN LINK</label> <?php $display = displayErrors($error, 'lklink');
echo $display ?><input class="form-control input-md" name="lklink"  type="text" placeholder="Enter your linkedin link ( Sample: https://www.linkedin.com/in/yourusername/)" value="<?php if($linkedin_link !== NULL){ echo "$linkedin_link";}  ?>">
</div>

<h2 class="title-2">UPLOAD IMAGE</h2>

<div class="form-group">
<label class="control-label">Add a photo of yourself(Passport Size Looks Good)</label><br>
<?php $display = displayErrors($error, 'upload');
echo $display ?>
 <input class="file" id="featured-img" type="file" name="upload" required><br>
</div>

<input class="btn btn-common" name="submit" type="submit" value="Submit">
</form>
</div>


</div>
</div>
<?php }else{?>
<div class="col-md-12">
<div class="inner-box posting">
<div class="alert alert-success alert-lg" role="alert">
<h2 class="postin-title"><?php echo '✔ Hey! '.ucwords($firstname).', you can only upload your status once. Except granted such access again by the Master admin'; ?> </h2>
<p><?php echo ' '.ucwords($firstname).', Mckodev  has not given you such access yet, Ask for it if you need to update your status. They don\'t bite.'; ?> </p>
</div>
</div>
</div>';
<?php } ?>
</div>
</div>
</div>

</section>
<a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
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
