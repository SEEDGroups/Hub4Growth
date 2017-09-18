<?php session_start();
	include 'config1.php';
	include 'dbconnect.php';
	include 'function.php';
	
	if(isset($_POST) && !empty($_POST)){
		$fullname= sanitize($_POST['name']);
		$email = sanitize($_POST['email']);
		$subject = sanitize($_POST['subject']);
		$message=sanitize($_POST['message']);
		
		global $conn;

		$sql = "INSERT INTO enquiry SET fullname='$fullname', email='$email', subject='$subject', message='$message'";
		$query = mysqli_query($conn, $sql);
		/*debugger($_POST);
		exit;
*/
		if($query){
			
			
			@header('location: ../');
			exit;
		}else{
			
			@header('location: ../');
			exit;
		}		
	}
?>