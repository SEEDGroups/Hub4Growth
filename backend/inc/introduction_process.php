<?php
  session_start();
  include 'config.php';
  include 'dbconnect.php';
  include 'function.php';

  	if(isset($_POST) && !empty($_POST)){

  		$title= sanitize($_POST['title']);
  		$bannerContent = addslashes(htmlentities($_POST['bannerContent']));
  		$bannerDContent = addslashes(htmlentities($_POST['bannerDContent']));
  		$id = sanitize($_POST['id']);
        // debugger($_POST);
          global $conn;
          $sql = "UPDATE whatwedohome SET title='$title', bannerContent='$bannerContent' , bannerDContent='$bannerDContent' Where id = '$id'";

          $query = mysqli_query($conn, $sql);
          if($query){

          $_SESSION['success'] = "Data has been updated successfully.";
              @header("location: ../introduction");
  			exit;
  		}else{
              $_SESSION['error'] = "Data wasn't updated. Please try again later;";
              @header("location: ../introduction");
  			exit;
  		}
      } //file check gareko

  ?>

?>
