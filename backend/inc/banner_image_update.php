<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	 //debugger($_POST); debugger($_FILES); exit;  debugger($_FILES); debugger($_FILES['images']['tmp_name']);
	if(isset($_POST) && !empty($_POST)){
		$id = sanitize($_POST['id']);
		$pre_image = $_POST['pre_image'];

			$deleteImage = deleteData("banner_image", "banner_id", $id);
			if(file_exists("uploads/CIDS/".$pre_image)){
				if($deleteImage){
						unlink("uploads/CIDS/".$pre_image);
				}
			}else{
				echo "doesn't exists";
			}

					if(isset($_FILES) && !empty($_FILES['images']['tmp_name'])){
							 //debugger($_FILES, true);
							$path = "uploads";
							if(!is_dir($path)){
									mkdir($path);
							}
							$upload_path = $path."/CIDS";
							if(!is_dir($upload_path)){
									mkdir($upload_path);
							}
							 //debugger($_FILES['images']['tmp_name']); exit;


                for($i=0; $i<count($_FILES['images']['tmp_name']); $i++){
                    // debugger($_FILES, true);
                   $temporary_name = $_FILES['images']['tmp_name'];
                    $ext = getFileExtension($_FILES['images']['name']);
										//debugger($temporary_name);
										//debugger($ext, true);

										$allowedImage = strtolower($ext); //converts the extension to lower
										 //debugger($allowedImage, true);
                    if(in_array($allowedImage, $allowed_image_ext)){
                        $file_name = "CIDS-".rand(0,999999999).".".$ext;
												// debugger($file_name, true);
                        $success = @move_uploaded_file($temporary_name, $upload_path."/".$file_name);
												// debugger($success); exit;
                        if($success){
                            $images= $file_name; //debugger($images, true);
                        }
                    }
                }


					$uploads = addImage($images, $id);
					// debugger($uploads, true); exit;
					}
                            if($uploads){
                                $_SESSION['success'] = "Image has been updated successfully";
                                @header("location: ../banner_list.php");
                                exit;
							}
							else{
									$_SESSION['info'] = "Image wasn't updated. Please try again later.";
									@header("location: ../banner_list.php");
									exit;
							}}else{
							$_SESSION['warning'] = "Invalid Entry.";
							@header('location: ../banner_list.php');
							exit;
			 }
?>
