<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; $act = "add";?>
<?php
	include 'inc/header.php';
	include 'security_inside.php';
	include 'inc/navigation.php';

	if(isset($_GET['id']) && isset($_GET['act'])){
        $id = sanitize($_GET['id']);
          $check  = substr(sha1('update-'.$id), 4,9);
            if($check == $_GET['act']){
                $user_info = getAllInfoOfMemberById($id);


                if($user_info){
                  $act = "update";
                  $name = $user_info['name'];
                  $pos_title = $user_info['pos_title'];
                  $list_pos = $user_info['list_pos'];
                  $message = html_entity_decode(stripslashes($user_info['message']));
                  $type = $user_info['type'];
                  $id = $user_info['id'];
                  $image = $user_info['image_title'];

                }else{
                  $_SESSION['error'] = "Member doesn't exist or already deleted!!";
                  @header('location: list_position.php');
                  exit;
                }

              }else{
              $_SESSION['error'] = "Invalid action!";
              @header('location: list_position.php');
              exit;
            }

          }else{
          $act="register";
          }

?>
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vac10evlzh1ylmepy70qr1q28wkygjzqa36g98uakma5l2jc"></script>
 <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">
                      <?php include 'inc/notification.php';?>

                        <h1 class="page-header">
                            <?php echo ucfirst($act);?> <?php if($act=="update"){echo '';}else{echo "new";}?> Member <small><a href="list_position.php"><i class="fa fa-fw fa-undo">
                            </i> Goback</a>
                            </small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-sm-8">
                        <form class="form-horizontal" method="POST" action="<?php if($act=="update"){echo "inc/position_update.php";} else{ echo "inc/position_process.php";}?>" enctype="multipart/form-data">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Full name</label>
                            <div class="col-sm-10">
                              <input type="text" required class="form-control" name="name" placeholder="Jhon Doe" value="<?php echo ($act == "update") ? "$name" : "" ; ?>">

                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-12">
                              <input type="hidden" required class="form-control" name="id" value="<?php echo ($act == "update") ? "$id" : "" ; ?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Designation</label>
                            <div class="col-sm-10">
                             <input type="text" name="pos_title" id="pos_title" class="form-control" required placeholder="Main Person of the Company" value="<?php echo ($act == "update")? "$pos_title" : "" ; ?>">

                            </div>
                          </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Position to be displayed at front</label>
                            <div class="col-sm-10">
                             <input type="number" name="list_pos" id="list_pos" class="form-control" value="<?php echo ($act == "update")? "$list_pos" : "" ; ?>">
                            </div>
                          </div>

													<div class="form-group">
                            <label class="col-sm-2 control-label">Type of member</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="type">
                                <option disabled <?php echo ($act != "update")? "selected" : "" ; ?>>---- Postion Status ---- </option>
                                <option <?php echo (($act == "update") && ($type == 1))? "selected" : "" ; ?> value="1">Board Member</option>
                                <option<?php echo (($act == "update") && ($type == 0))? "selected" : "" ; ?>  value="0">Others</option>
                              </select>
                            </div>
                          </div>

													<div class="form-group">
                            <label class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                             <textarea name="message" id="message" rows="6" class="form-control" placeholder="Write your message." style="resize: vertical;"><?php echo ($act == "update")? "$message" : "" ; ?></textarea>
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="status">
                                <option <?php echo ($act != "update")? "selected" : "" ; ?> disabled>---- Postion Status ---- </option>
                                <option <?php echo (($act == "update") && ($type == 1))? "selected" : "" ; ?> value="1">Active</option>
                                <option <?php echo (($act == "update") && ($type == 0))? "selected" : "" ; ?> value="0">Inactive</option>
                              </select>
                            </div>
                          </div>

                          <?php if($act == "register"){
                            ?>
													<div class="form-group">
														<label class="col-sm-2 control-label">Profile Picture</label>
														<div class="col-sm-10">
															<input type = "file" name="images" accept="image/*">
														</div>
													</div>
                          <?php
                          } ?>

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                              <button type="submit" class="btn btn-success"> <?php echo ucfirst($act);?></button>

                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-sm-4" style="magrin:0 10% 0 10% !important; padding: 0 10% 0 10% !important;">
                        <?php if($act == "update"){
                            ?>
                             <form class="form-horizontal" method="POST" action="inc/image_update.php" enctype="multipart/form-data">

                            <div class="form-group">
                              <label class="row control-label">At present </label>
                                <div class="row">
                                  <img src="<?php echo memberImage.$image; ?>" alt="<?php echo $name; ?>" class="img-responsive" style="width: 100%; " />
                                  <input type="hidden" >
                                </div>
                            </div>

                            <div class="form-group">
                              <label class="row control-label">Change with</label>
                                <div class="row">
                                  <input type = "file" name="images" accept="image/*">
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                              <input type="hidden" required class="form-control" name="id" value="<?php echo ($act == "update") ? "$id" : "" ; ?>">
                              <input type="hidden" required class="form-control" name="pre_image" id="pre_image" value="<?php echo ($act == "update") ? "$image" : "" ; ?>">
                            </div>
                          </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                              <div class="row">
                                <input type="submit" class="btn btn-default">
                              </div>
                            </div>
                            </form>
                            <?php
                          } ?>
                      </div>
                  </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'inc/footer.php'; ?>
      <script>
         tinymce.init({
            selector: '#message',
            height: 300,
            theme: 'modern',
             plugins: [
                 'codesample imagetools',
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect ',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
         });
      </script>
