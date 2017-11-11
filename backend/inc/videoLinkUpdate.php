<?php session_start();
include 'config.php';
include 'dbconnect.php';
include 'function.php';
if(isset($_POST) && !empty($_POST)){
  global $conn;
  $id = sanitize($_POST['id']);
  $str = $_POST['videoId'];
  $title = sanitize($_POST['title']);
  $description = addslashes(htmlentities($_POST['description']));
  $videoLink = substr($str, 32, 11);
  $_SESSION['LINK'] = $videoLink;
  $sql = "UPDATE youtube set title = '$title', description = '$description', videoId='$videoLink' where id = '$id'";
  $query = mysqli_query($conn, $sql);
  if($query){
    $_SESSION['success'] = 'Video has been updated successfully.';
  }else{
    $_SESSION['info'] = 'Video couuldnt be updated at this moment. Please try again in 5 minutes.';
  }
  header('location: ../listVideos.php');
}else{
  $_SESSION['error']= "invalid entry";
  @header('location: ../listVideos.php');
}

 ?>
