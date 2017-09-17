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

	function getSuperuser($username){
		global $conn;
		$sql = "SELECT * FROM root_user WHERE username = '$username'";
		$query = mysqli_query($conn, $sql); 
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data[]= array(); //becomes a single array
			while($rows = mysqli_fetch_assoc($query)){
				$data = $rows; //takes only one array
			}return($data);
		}
	}

	function getUser($username){
		global $conn;
		$sql = "SELECT * from users where username = '$username'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data[]= array(); 
			while($rows = mysqli_fetch_assoc($query)){
				$data = $rows; 
			}return $data;
		}
	}

	function getAllUserlist(){
		global $conn;
		$sql = "SELECT * from user_signup";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[]=$rows;
			}return $data;
		}
	}

	function getAllEnquiry(){
		global $conn;
		$sql = "SELECT * from enquiry order by id desc";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[]=$rows;
			}return $data;
		}
	}

	function getUserPostion($position){
		global $conn;
		$sql = "SELECT * from position_org where id = '$position'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=0){
			return 0;
		}else{
			$data=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}

	function getPositionofOrg(){
		global $conn;
		$sql = "SELECT * FROM positions ORDER BY pos_title asc";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
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

		function getContact(){
		global $conn;
		$sql = "SELECT * from contact WHERE id=1";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[]=$rows;
			}return $data;
		}
	}

	function getEvents(){
		global $conn;
		$sql = "SELECT * from achievement";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[]=$rows;
			}return $data;
		}
	}
		function confirmId($id){
		global $conn;
		$sql = "SELECT * from achievement WHERE id='$id' ";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return false;
		}else{
			return true;
		}
	}




?>