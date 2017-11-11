
<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; $page="Add"; ?>
<?php include 'inc/header.php'; ?>

<?php
  //debugger($_GET['id']);
  //debugger($_GET['act']);
      include 'security_inside.php';
      if(isset($_GET['id']) && isset($_GET['act'])){
        $id=sanitize($_GET['id']);
        $confirm=substr(sha1('update-'.$id), 4, 9);
        //debugger($confirm); exit;
          if($confirm== $_GET['act']){

            $confirmId=confirmId($id);
            if($confirmId){
              $page="update";
              $title = $confirmId['title'];
              $status = $confirmId['eventStatus'];
              $summary = html_entity_decode(stripslashes($confirmId['summary']));
              $description = html_entity_decode(stripslashes($confirmId['description']));
              $date = $confirmId['eventDate'];
              $isFeatured = $confirmId['is_featured'];
              $location = $confirmId['location'];
              $id = $confirmId['id'];
              //debugger($isFeatured);
            }else{
              $_SESSION['info']="Event does not exist";
              @header('location: list_events');
              exit;
            }
          } else{
            $_SESSION['info']="Invalid Request";
            @header('location: list_events');
            exit;
          }
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
                        <h1 class="page-header"> <?php echo ucfirst($page); ?> Event
                        <small>
                          <a href="list_events.php" class="btn btn-success headerBtn">
                            <i class="fa fa-fw fa-undo"></i> <span>Go back</span>
                          </a>
                        </small>
                      </h1>
                    </div>

                </div>
                <!-- /.row -->
                 <div class="row">
                        <form class="form-horizontal" method="POST" action="<?php echo ($page == "update")? "inc/event_update" : "inc/event_process"; ?>">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" required name="title" id="title" value="<?php echo ($page == "update")? $title : ''; ?>">
                              <?php if($page == "update"){
                                ?>
                                <input type="text" class="form-control" required name="id" id="id" value="<?php echo ($page == "update")? $id : ''; ?>">
                                <?php
                              } ?>
                            </div>
                          </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Location</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="location" id="location" value="<?php echo ($page == "update")? $location : ''; ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Summary</label>
                            <div class="col-sm-6">
                             <textarea class="form-control" name="summary" id="summary" rows="3" style="resize:vertical;"><?php echo ($page == "update")? $summary : ''; ?></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-6">
                             <textarea name="description" id="description" class="form-control" rows="6" style="resize:vertical;"><?php echo ($page == "update")? $summary : ''; ?></textarea>
                            </div>
                          </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Date</label>
                              <div class="col-sm-6">
                                <input type="Date" name="eventDate" id="eventDate" value="<?php echo ($page == "update")? $date : ''; ?>">
                              </div>
                            </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">
                                  Status
                            </label>
                            <div class="col-sm-6">
                                <select class="form-control" name="status">
                                    <option selected="" disabled="">---- Select any ----</option>
                                     <option <?php echo ($page == "update" && $status == 1)? 'selected' : ''; ?> value="1">Active</option>
                                     <option <?php echo ($page == "update" && $status == 0)? 'selected' : ''; ?> value="0">Inactive</option>
                                </select>
                            </div>
                          </div>

                          <div class="form-group">
                           <label class="col-md-2 control-label form-check-label">Is featured?</label>
                           <div class="col-md-6">
                             <input type="checkbox" <?php echo ($page == "update" && $isFeatured == 'on')? 'checked' : ''; ?> name="isFeatured" id="isFeatured" class="form-check-input">
                           </div>
                         </div>

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                              <button type="submit" class="btn btn-success"><?php echo (isset($page) && $page == "update") ? ucfirst($page) : ucfirst($page); ?></button>
                              <button type="reset" class="btn btn-danger">Reset</button>
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

<?php
include 'inc/footer.php';?>
 <script>
         tinymce.init({
            selector: 'textarea',
            height: 300,
            theme: 'modern',
             plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help'
  ],
  toolbar: 'insert | undo redo |  styleselect | bold italic forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
         });
      </script>
