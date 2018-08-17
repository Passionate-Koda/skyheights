<?php

function fetchItem($dbconn,$tb){
  $result = [];
$stmt= $dbconn->prepare("SELECT * FROM $tb");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
  $result[] = $row;
  }
  return $result;
}

function fetchItemById($dbconn,$tb,$id){
$stmt= $dbconn->prepare("SELECT * FROM $tb WHERE id=$id");
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_BOTH);
  return $row;
}

function fetchTeacher($dbconn){
  $result = [];
$stmt= $dbconn->prepare("SELECT * FROM admin WHERE level=11 AND profile_status=1 AND user_status=1");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
  $result[] = $row;
  }
  return $result;
}

function upcomingEvent($dbconn){
  $result = [];
  $stmt = $dbconn->prepare("SELECT * FROM event WHERE start_date > NOW() ORDER BY start_date ASC LIMIT 2 " );
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    $result[] = $row;
    // extract($row);
    // $SDate = decodeDate($start_date);
    // $EDate = decodeDate($end_date); $post = cleans($name);
    // echo '<div class="item">
    // <div style="margin-left:10px" class="item-content">
    // <h4><a href="event?post='.$post.'&id='.$hash_id.$sh.'">'.strtoupper($name).'</a> </h4><span>at '.$venue.'</span>';
    // if($SDate == $EDate){
    //   echo '<p>'.$SDate.'</p>';
    // }else{
    //   echo '<p>'.$SDate.' - '.$EDate.'</p>';
    // }
    // echo '</div></div>';
  }
  return $result;
}
function allUpcomingEvent($dbconn){
  $result = [];
  $stmt = $dbconn->prepare("SELECT * FROM event ORDER BY start_date DESC" );
  $stmt->execute();
  while($row = $stmt->fetch(PDO::FETCH_BOTH)){
    $result[] = $row;
    // extract($row);
    // $SDate = decodeDate($start_date);
    // $EDate = decodeDate($end_date); $post = cleans($name);
    // echo '<div class="item">
    // <div style="margin-left:10px" class="item-content">
    // <h4><a href="event?post='.$post.'&id='.$hash_id.$sh.'">'.strtoupper($name).'</a> </h4><span>at '.$venue.'</span>';
    // if($SDate == $EDate){
    //   echo '<p>'.$SDate.'</p>';
    // }else{
    //   echo '<p>'.$SDate.' - '.$EDate.'</p>';
    // }
    // echo '</div></div>';
  }
  return $result;
}

// function previewBody($string, $count){
//   $original_string = $string;
//   $words = explode(' ', $original_string);
//   if(count($words) > $count){
//     $words = array_slice($words, 0, $count);
//     $string = implode(' ', $words)."...";
//   }
//   return strip_tags($string);
// }

function fetchItemLimit($dbconn,$tb,$limit){
  $result = [];
$stmt= $dbconn->prepare("SELECT * FROM $tb ORDER BY id $limit");
$stmt->execute();
$count = count($stmt);
while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
  $result[] = $row;
  }
  return $result;
}
function decodeDate($date){
  $split = explode('-',$date);
  $month = $split[1];
  $day = $split[2];
  $year = $split[0];
  if($month == 1 ){
    $month = "January";
  }
  if($month == 2 ){
    $month = "February";
  }
  if($month == 3 ){
    $month = "March";
  }
  if($month == 4){
    $month = "April";
  }
  if($month == 5){
    $month = "May";
  }
  if($month == 6 ){
    $month = "June";
  }
  if($month == 7 ){
    $month = "July";
  }
  if($month == 8 ){
    $month = "August";
  }
  if($month == 9 ){
    $month = "September";
  }
  if($month == 10 ){
    $month = "October";
  }
  if($month == 11 ){
    $month = "November";
  }
  if($month == 12 ){
    $month = "December";
  }
  $newDate = $month.' '.$day.', '.$year;
  return $newDate;
}

function decodeTime($time){
  $tm = explode(":",$time);

  if($tm['0'] < 12){
    $time = $tm['0'].':'.$tm['1'].'am';
  }

  if($tm['0'] == 12){
    $time = $tm['0'].':'.$tm['1'].'pm';
  }

  if($tm['0'] == 13){
    $time = '1'.':'.$tm['1'].'pm';
  }
  if($tm['0'] == 14 ){
    $time = '2'.':'.$tm['1'].'pm';
  }
  if($tm['0'] == 15 ){
    $time = '3'.':'.$tm['1'].'pm';
  }
  if($tm['0'] == 16 ){
    $time = '4'.':'.$tm['1'].'pm';
  }
  if($tm['0'] == 17 ){
    $time = '5'.':'.$tm['1'].'pm';
  }
  if($tm['0'] == 18 ){
    $time = '6'.':'.$tm['1'].'pm';
  }
  if($tm['0'] == 19 ){
    $time = '7'.':'.$tm['1'].'pm';
  }
  if($tm['0'] == 20 ){
    $time = '8'.':'.$tm['1'].'pm';
  }
  if($tm['0'] == 21 ){
    $time = '9'.':'.$tm['1'].'pm';
  }
  if($tm['0'] == 22 ){
    $time = '10'.':'.$tm['1'].'pm';
  }
  if($tm['0'] == 23 ){
    $time = '11'.':'.$tm['1'].'pm';
  }
  if($tm['0'] == 00 ){
    $time = '12'.':'.$tm['1'].'am';
  }
  return $time;
}
