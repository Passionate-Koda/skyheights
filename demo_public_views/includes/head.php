
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Skyheights Academy">
<meta name="keywords" content="college, education, institute, responsive, school, teacher, template, university">
<meta name="viewport" content="width=device-width, initial-scale=1">




<?php if(isset($page) && $page == "NEWS"){
  $bd = previewBody($body,22);

   ?>

  <meta property="og:title" content="Skyheights Academy - <?php echo $headline ?>" />
  <meta property="og:image" content="https://skyheights-academy.com/<?php echo $image_1 ?> " />
  <meta property="og:image:width" content="450"/>
  <meta property="og:image:height" content="298"/>
  <meta property="og:description" content=" <?php echo $bd ?> " />



  <!-- Twitter -->

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@boardspeck">
  <meta name="twitter:title" content="Skyheights Academy - <?php echo $headline ?>">
  <meta name="twitter:description" content="<?php echo $bd ?>">
  <meta name="twitter:image" content="https://skyheights-academy.com/<?php echo $image_1 ?> ">
  <meta name="twitter:image:width" content="280">
  <meta name="twitter:image:height" content="150">



<?php }elseif(isset($page) && $page == "EVENT"){
  $bd = previewBody($event['about'],22);
   ?>


  <meta property="og:title" content="Skyheights Academy - <?php echo $event['name']; ?>" />
  <meta property="og:image" content="https://skyheights-academy.com/images/log.jpeg" />
  <meta property="og:image:width" content="450"/>
  <meta property="og:image:height" content="298"/>
  <meta property="og:description" content=" <?php echo $bd ?> " />



  <!-- Twitter -->

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@boardspeck">
  <meta name="twitter:title" content="Skyheights Academy - <?php echo $event['name'];  ?>">
  <meta name="twitter:description" content="<?php echo $bd ?>">
  <meta name="twitter:image" content="https://skyheights-academy.com/images/log.jpeg">
  <meta name="twitter:image:width" content="280">
  <meta name="twitter:image:height" content="150">








<?php }else{ ?>


<meta property="og:title" content="Skyheights Academy" />
<meta property="og:image" content="https://skyheights-academy.com/images/log.jpeg" />
<meta property="og:image:width" content="450"/>
<meta property="og:image:height" content="298"/>
<meta property="og:description" content="Skyheights Academy envisions a world in which every child, regardless of background, religion, ethnicity or tribe, becomes a healthy and productive adult to themselves and the society. " />



<!-- Twitter -->

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@boardspeck">
<meta name="twitter:title" content="Skyheights Academy">
<meta name="twitter:description" content="Skyheights Academy envisions a world in which every child, regardless of background, religion, ethnicity or tribe, becomes a healthy and productive adult to themselves and the society.">
<meta name="twitter:image" content="https://skyheights-academy.com/images/log.jpeg">
<meta name="twitter:image:width" content="280">
<meta name="twitter:image:height" content="150">

<?php } ?>



<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b6e4f7486b6440010e02f35&product=inline-share-buttons' async='async'></script>

<!-- Facebook -->
