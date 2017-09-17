<?php

	function debugger($array, $is_die = false){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
		if($is_die){
			echo "There is some problem";
			exit;
		}
	}

	function sanitize($string){
		if(get_magic_quotes_gpc()){
			$string = trim(stripslashes($string));
		}
			$string = strip_tags($string);
			$string = trim($string);
		return $string;
	}



function getContactInfo(){
		global $conn;
		$sql = "SELECT * from contact";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=0){
			return 0;
		}else{
			$data[]=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data= $rows;
			}return $data;
		}
	}

function getAllabout(){
		global $conn;
		$sql = "SELECT * from about_org";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=0){
			return 0;
		}else{
			$data[]=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data= $rows;
			}return $data;
		}
	}

		function getVision(){
		global $conn;
		$sql = "SELECT * FROM about_org WHERE id=1";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}

function getContribution (){
		global $conn;
		$sql = "SELECT * FROM about_org WHERE id=2";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}
	function getCollaboration(){
		global $conn;
		$sql = "SELECT * FROM about_org WHERE id=3";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}

	function getResearch(){
		global $conn;
		$sql = "SELECT * FROM about_org WHERE id=4";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}

	function getEvents(){
		global $conn;
		$sql = "SELECT * FROM achievement WHERE event_type=1";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}
	function getTimeline(){
		global $conn;
		$sql = "SELECT * FROM achievement WHERE event_type=2";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}

	function getBanners(){
		global $conn;
		$sql = "SELECT banner_info.*, banner_image.banner_title FROM banner_info LEFT JOIN banner_image on banner_info.id = banner_image.banner_id ORDER BY banner_info.id desc limit 4";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}

	function getMemberList(){
		global $conn;
		$sql = "SELECT positions.*, member_image.image_title FROM positions LEFT JOIN member_image on positions.id = member_image.member_id WHERE positions.type=1 ORDER BY positions.id desc";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}



?>
