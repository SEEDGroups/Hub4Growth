<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	if(isset($_POST) && !empty($_POST)){
		$title = sanitize($_POST['title']);
		$description = sanitize($_POST['description']);
		$status = sanitize($_POST['pos_status']);
		
		$sql = "INSERT INTO positions SET pos_title = '$title', pos_description = '$description', status= '$status', added_by = ".$_SESSION['user_id']." ";
		// debugger($sql, true);
		// exit;
		$query = mysqli_query($conn, $sql);
		if($query){
			$_SESSION['success'] = "Position has been added successfully.";
			echo "here";
			@header('location: ../list_position');
			exit;
		}else{
			$_SESSION['warning'] = "Position couldn't be added at this moment.";
			@header('location: ../list_position');
			exit;
		}		
	}
?>