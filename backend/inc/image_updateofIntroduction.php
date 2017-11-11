<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	 // debugger($_POST); debugger($_FILES); exit;  debugger($_FILES); debugger($_FILES['images']['tmp_name']);
	if(isset($_POST) && !empty($_POST)){
		$id = sanitize($_POST['id']);
		$pre_image = $_POST['pre_image'];
			$deleteImage = deleteData("whatwedofile", "whatWeDo_id", $id);
			if($deleteImage){
					unlink("uploads/Hub4Growth/".$pre_image);
			}

					if(isset($_FILES) && !empty($_FILES['images']['tmp_name'])){
							// debugger($_FILES, true);
							$path = "uploads";
							if(!is_dir($path)){
									mkdir($path);
							}
							$upload_path = $path."/Hub4Growth";
							if(!is_dir($upload_path)){
									mkdir($upload_path);
							}
							// debugger($_FILES['profile_pic']['tmp_name']); exit;


                for($i=0; $i<count($_FILES['images']['tmp_name']); $i++){
                    // debugger($_FILES, true);
                   $temporary_name = $_FILES['images']['tmp_name'];
                    $ext = getFileExtension($_FILES['images']['name']);

                    if(in_array($ext, $allowed_image_ext)){
                        $file_name = "Hub4Growth-".rand(0,999999999).".".$ext;

                        $success = @move_uploaded_file($temporary_name, $upload_path."/".$file_name);

                        if($success){
                            $images= $file_name;
                        }
                    }
                }


					$uploads = updateImage($images, $id);

					}
                            if($uploads){
                                $_SESSION['success'] = "Image has been updated successfully";
                                @header("location: ../introduction.php");
                                exit;
							}
							else{
									$_SESSION['info'] = "Image wasn't updated. Please try again later.";
									@header("location: ../introduction.php");
									exit;
							}


					}else{
							$_SESSION['warning'] = "Invalid Entry.";
							@header('location: ../introduction.php');
							exit;
			 }
?>
