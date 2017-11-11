<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; $act = "add";?>
<?php
  include 'inc/header.php';
  include 'security_inside.php';
  include 'inc/navigation.php';

  if(isset($_GET['id']) && isset($_GET['act'])){
        $id = sanitize($_GET['id']);
          $check  = substr(sha1('update-'.$id), 4,9);
            if($check == $_GET['act']){
                $banner_info = getBannerInfoById($id);


                if($banner_info){
                  $act = "update";

                  $description = html_entity_decode(stripslashes($banner_info['description']));

                  $caption = html_entity_decode(stripslashes($banner_info['caption']));

                  $image = $banner_info['banner_title'];

                }else{
                  $_SESSION['warning'] = "Banner doesn't exist or already deleted!!";
                  exit;
                }

              }else{
              $_SESSION['error'] = "Invalid action!";
              exit;
            }
             @header('location: banner_list.php');

          }else{
          $act="add";
          }

?>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vac10evlzh1ylmepy70qr1q28wkygjzqa36g98uakma5l2jc"></script>

 <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">


                  </style>
                    <div class="col-lg-12">
                      <?php include 'inc/notification.php';?>

                        <h1 class="page-header">
                            <?php echo ucfirst($act);?> <?php if($act=="update"){echo '';}else{echo "new";}?> Banner <small><a href="banner_list.php"><i class="fa fa-fw fa-undo">
                            </i> Goback</a>
                            </small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <?php debugger($banner_info); ?>
                        <form class="form-horizontal" method="POST" action="<?php echo ($act == "update")? "inc/banner_info_update.php" : "inc/banner_process.php"; ?>" enctype="multipart/form-data">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Banner Caption</label>
                            <div class="col-sm-10">
                              <textarea name="caption" id="caption" class="form-control" placeholder="Image title." style="resize: vertical;"><?php echo ($act == "update")? "$caption" : "" ; ?></textarea>
                              <input type="hidden" id="id" name="id" value="<?php echo $banner_info['id']; ?>" >
                             </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Banner Description</label>
                            <div class="col-sm-10">
                              <textarea name="description" id="description" class="form-control" placeholder="Image description." style="resize: vertical;"><?php echo ($act == "update")? "$description" : "" ; ?></textarea>
                           </div>
                          </div>

                          <?php if($act != "update"){
                            ?>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Banner Picture</label>
                            <div class="col-sm-10">
                              <input type = "file" name="images" accept="image/*">
                            </div>
                          </div>

                            <?php
                          } ?>


                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-success"> <?php echo ucfirst($act);?></button>

                            </div>
                          </div>
                        </form>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row" style="magrin:10% !important; padding: 10% !important;">

                        <?php if($act == "update"){
                            ?>
                             <form class="form-horizontal" method="POST" action="inc/banner_image_update.php" enctype="multipart/form-data">

                            <div class="form-group">
                              <label class="col-sm-2 control-label">At present </label>
                                <div class="col-sm-10">
                                  <img src="<?php echo bannerImage.$image; ?>" alt="<?php echo $caption; ?>" title="<?php echo $caption; ?>" class="img-responsive form-control" style="width: 100%; height:50%;" />
                                </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Change with</label>
                                <div class="col-sm-10">
                                  <input type = "file" name="images" accept="image/*">
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-sm-offset-2"></div>
                            <div class="col-sm-10">
                              <input type="hidden" required class="form-control" name="id" value="<?php echo ($act == "update") ? $id : "" ; ?>">
                              <input type="hidden" required class="form-control" name="pre_image" id="pre_image" value="<?php echo ($act == "update") ? $image : "" ; ?>">
                            </div>
                          </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-success">Update</button>

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
            selector: 'textarea',
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
