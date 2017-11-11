<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	 //debugger($_POST);  // debugger($_FILES); debugger($_FILES['images']['tmp_name']);
	if(isset($_POST) && !empty($_POST)){

		$caption= htmlentities($_POST['caption']);
		$description = htmlentities($_POST['description']);
		$id = sanitize($_POST['id']);
      // debugger($_POST);
        global $conn;

        $sql = "UPDATE banner_info set caption = '$caption', description = '$description' WHERE id = '$id'";
      //  debugger($sql, true);
        $query = mysqli_query($conn, $sql); 
        if($query){
        	$_SESSION['success'] = "Data has been updated successfully.";
        }else{
        	$_SESSION['info'] = "Data wasn't updated. Please try again after 5 minutes!!";
        }
        @header('location: ../banner_list.php');
        exit;
    }else{

    }
?>
