<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php';?>
<?php
	include 'inc/header.php';
	//include 'security_inside.php';
	include 'inc/navigation.php';

	// for update and delete
	if(isset($_GET['id']) && isset($_GET['act'])){
        $id = sanitize($_GET['id']);
          $check  = substr(sha1('edit-video-'.$id), 4, 9);
            if($check == $_GET['act']){
                $videoInfo = getVideoById($id);
                if($videoInfo){
                  $act = "update";
                }else{
                  $_SESSION['error'] = "Video doesn't exist or already deleted!!";
                  @header('location: listVideos');
                  exit;
                }
              }else{
              $_SESSION['error'] = "Invalid action!";
              @header('location: listVideos');
              exit;
            }

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

                    <div class="col-lg-12">
											<?php include 'inc/notification.php'; ?>

                        <h1 class="page-header">
                           <?php echo ucfirst($act); ?> video to the page
                           <small class="pull-right"><a href="listVideos" class="btn btn-success headerBtn"><i class="fa fa-fw fa-undo"></i> <span>Go back</span></a></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                        <form class="form-horizontal" method="POST" action="<?php echo (isset($act) && $act=='update')? 'inc/videoLinkUpdate' : 'inc/videoLinkProcess'; ?>">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Video Title</label>
                            <div class="col-sm-6">
                              <input type="text" name="title" id="title" class="form-control" required placeholder="Too hard to let it go - by me" value="<?php echo (isset($videoInfo['title']))? $videoInfo['title'] : ''; ?>">
                              <?php if($act == "update"){
                                ?>
                                <input type="hidden" name="id" id="id" value="<?php echo ($act == "update")? $videoInfo['id'] : ''; ?>">
                                <?php
                              } ?>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Youtube video link</label>
                            <div class="col-sm-6">
                             <input type="text" name="videoId" id="videoId" class="form-control" required placeholder="http://youtube.com...." value="<?php echo ($act == "update")? 'https://www.youtube.com/watch?v='.$videoInfo['videoId'] : ''; ?>">
                            </div>
                          </div>
													<div class="form-group">
                            <label class="col-sm-2 control-label">Video descriptioin</label>
                            <div class="col-sm-6">
                            <textarea name="description" id="description" class="form-control" rows="3" style="resize:vertical;">
                              <?php echo ($act == "update")? html_entity_decode(stripslashes($videoInfo['description'])) : ''; ?>
                                </textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                              <button type="submit" class="btn btn-success"><?php echo ucfirst($act); ?></button>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Thumbnail: </label>
                            <div class="col-sm-6">
															<?php if(isset($_SESSION) && $_SESSION['LINK'] != '') {
																?>
																<img src="http://img.youtube.com/vi/<?php echo $_SESSION['LINK']; ?>/hqdefault.jpg" class="img-responsive"/>
																<?php
															}else if($act=="update"){
                                ?>
                                  <img src="http://img.youtube.com/vi/<?php echo (isset($videoInfo['videoId']))? $videoId['videoId'] : ''; ?>/hqdefault.jpg" class="img-responsive"/>
                                  <?php
                              } ?>
                            </div>
                          </div>
                        </form>
                  </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php //nset($_SESSION['link']);?>

<?php include 'inc/footer.php'; ?>
<script>
         tinymce.init({
            selector: '#description',
            height: 300,
            theme: 'modern',
             plugins: [
                  'codesample imagetools',
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'],
				setup: function (editor) {
   					editor.on('SaveContent', function (ed) {
      			ed.content = ed.content.replace(/&#39/g, "&apos");
   				});
				}
         });
      </script>
