<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';
	global $conn;
	if(isset($_POST) && !empty($_POST)){
		$title = sanitize($_POST['title']);
		$summary = addslashes(htmlentities($_POST['summary']));
		$description = addslashes(htmlentities($_POST['description']));
		$eventDate = sanitize($_POST['eventDate']);
		$isFeatured = (sanitize($_POST['isFeatured']))? "on" : "off";
		$status = sanitize($_POST['status']);
		$location = sanitize($_POST['location']);
		$id = sanitize($_POST['id']);
		$sql = "UPDATE events SET title = '$title', summary = '$summary', description='$description', eventDate='$eventDate', is_featured = '$isFeatured', eventStatus= '$status', location='$location' where id ='$id'";

		$query= mysqli_query($conn, $sql);
		if($query){
			$_SESSION['success'] = "Event data has been updated!";
			@header('location: ../list_events.php');
			exit;
		}else{
							$_SESSION['error'] = "Event data hasn't been updated!";
							@header('location: ../list_events.php');
							exit;
			 }
		 }else{
				 $_SESSION['error'] = "Invalid Entry!";
				 @header('location: ../list_events.php');
				 exit;
			 }

?>