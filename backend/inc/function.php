<?php

	function debugger($array, $is_die = false){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
		if($is_die){
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
	function status($data){
		if($data == 1){
			$result = "Show in the web";
		}else{
			$result = "Isn't shown in the web";
		}
		return $result;
	}
	function isFeatured($data){
		if($data == 'on'){
			$result="is featured";
		}
		else{
			$result="not featured";
		}
		return $result;
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
		$sql = "SELECT positions.*, member_image.image_title FROM positions LEFT JOIN member_image on positions.id = member_image.member_id ORDER BY positions.id desc";
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

	function getVision(){
		global $conn;
		$sql = "SELECT * FROM about_org WHERE id=7";
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
		$sql = "SELECT * FROM about_org WHERE id=8";
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
		$sql = "SELECT * FROM about_org WHERE id=9";
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
		$sql = "SELECT * FROM about_org WHERE id=10";
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
		$sql = "SELECT * from events ORDER BY id desc";
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
		$sql = "SELECT * from events WHERE id=".$id;
		//debugger($sql); exit;
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return false;
		}else{
			$data[]= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data=$rows;
			}return $data;
		}
	}


	function addMember($data){
		global $conn;
		$fields = array_keys($data);
		$values = array_values($data);
		$sql= "INSERT INTO positions (".implode(", ", $fields).")VALUES('".implode("', '", $values)."')";
    $query = mysqli_query($conn, $sql);

		if($query){
   		$last_id = $conn->insert_id;
			return $last_id;
    }else{
     return false;
    }
	}

	function updateMember($data){
		global $conn;
		$fields = array_keys($data);
		$values = array_values($data);
		$sql= "UPDATE positions (".implode(", ", $fields).")VALUES('".implode("', '", $values)."')";
        $query = mysqli_query($conn, $sql);

		if($query){
   		$last_id = $conn->insert_id;
			return $last_id;
        }else{
        return false;
        }
	}

	function getAllInfoOfMemberById($value){
		global $conn;
		$sql = "SELECT positions.*, member_image.image_title FROM positions left join member_image ON positions.id = member_image.member_id where positions.id = ".$value."";
		//debugger($sql); exit;
		$query= mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return false;
        }else{
			$data[]=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data = $rows;
			}
			return $data;
		}
	}

	function deleteData($tablename, $field, $value){
        global $conn;

        $sql= "DELETE FROM ".$tablename." WHERE ".$field." = ".$value."";

        $query = mysqli_query($conn, $sql);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

    function upDateData($tablename, $field, $value){
        global $conn;

        $sql= "UPDATE ".$tablename." WHERE ".$field." = ".$value."";
        $query = mysqli_query($conn, $sql);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

	function getFileExtension($fileName){
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		return $ext;
	}

	function addProfileImages($images, $member_id){
        global $conn;
        $sql = "INSERT INTO member_image SET image_title = '$images', member_id='$member_id'";
				//debugger($sql, true); exit;
        $query = mysqli_query($conn, $sql);
        if($query){
            return true;
        }else{
            return false;
        }
    }

		function updateImage($fileTitle, $whatWeDo_id){
	        global $conn;
	        $sql = "INSERT INTO whatwedofile SET fileTitle = '$fileTitle', whatWeDo_id='$whatWeDo_id'";
					//debugger($sql, true); exit;
	        $query = mysqli_query($conn, $sql);
	        if($query){
	            return true;
	        }else{
	            return false;
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

	function getHome(){
		global $conn;
		$sql = "SELECT whatwedohome.*, whatwedofile.fileTitle from whatwedohome left join whatwedofile on whatwedohome.id = whatwedofile.whatWeDo_id";
		$query=mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return false;
		}else{
			$data = array();
			while($row = mysqli_fetch_assoc($query)){
				$data[] = $row;
			}return $data;
		}
	}

	function addBannerInfo($data){
		global $conn;
		$fields = array_keys($data);
		$values = array_values($data);
		$sql= "INSERT INTO banner_info (".implode(", ", $fields).")VALUES('".implode("', '", $values)."')";
        $query = mysqli_query($conn, $sql);

		if($query){
   		    $last_id = $conn->insert_id;
			return $last_id;
        }else{
            return false;
        }
	}

    function addBannerImage($images, $banner_id){
     global $conn;
        $sql = "INSERT INTO banner_image SET banner_title = '$images', banner_id='$banner_id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            return true;
        }else{
            return false;
        }
	}

	function getBannerInfoById($value){
		global $conn;
		$sql = "SELECT banner_info.*, banner_image.banner_title FROM banner_info left join banner_image ON banner_info.id = banner_image.banner_id where banner_info.id = ".$value."";
		$query= mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return false;
        }else{
			$data[]=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data = $rows;
			}
			return $data;
		}
	}

	function addEventImage($images, $event_id){
		global $conn;
		$sql = "INSERT INTO event_image SET image_title = '$images', event_id = '$event_id'";
		$query = mysqli_query($conn, $sql);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	function getAllMemberImages(){
		global $conn;
		$sql = "SELECT * FROM member_image";
		//debugger($sql); exit;
		$query= mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return false;
        }else{
			$data[]=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data = $rows;
			}
			return $data;
		}
	}

	function getAllBannerImages(){
		global $conn;
		$sql = "SELECT * FROM banner_image";
		//debugger($sql); exit;
		$query= mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=0){
			return false;
        }else{
			$data[]=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data = $rows;
			}
			return $data;
		}
	}

	function getAllEventImages(){
		global $conn;
		$sql = "SELECT * FROM event_image";
		//debugger($sql); exit;
		$query= mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=0){
			return false;
        }else{
			$data[]=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data = $rows;
			}
			return $data;
		}
	}

	// For youtube videos
	function getVideos(){
		global $conn;
		$sql = "SELECT * FROM youtube order by id desc";
		//debugger($sql); exit;
		$query= mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=0){
			return false;
        }else{
			$data = array(); //for multiple array
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}
			return $data;
		}
	}

	function getVideoById($id){
		global $conn;
		$sql = 'SELECT * from youtube where id ='.$id;
		$query= mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=0){
			return false;
        }else{
			$data[] = array(); //for single array
			while($rows = mysqli_fetch_assoc($query)){
				$data = $rows;
			}
			return $data;
		}
	}

	function getIntroduction(){
		global $conn;
		$sql = "SELECT * from introduction";
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
?>
