
<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; $page="Add"; ?>
<?php include 'inc/header.php'; ?>
<?php 
      include 'security_inside.php'; 
      if(isset($_GET['id']) && isset($_GET['act'])){
        $id=sanitize($_GET['id']);
        $confirm=substr(sha1("edit-".$id), 4,9);
         
          if($confirm== $_GET['act']){

            $confirmId=confirmId($id);
            if($confirmId){
              $page="Edit";

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

    <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                  <?php $Event=getEvents();
                   ?>
                   
                    <div class="col-lg-12">

                      <?php include 'inc/notification.php';?>
                        <h1 class="page-header"> <?php echo $page; ?> Event </h1>
                    </div>
                  
                </div>
                <!-- /.row -->
                 <div class="row">
                        <form class="form-horizontal" method="POST" action="inc/event_process.php" enctype="multipart/form-data">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" required name="event_title" id="event_title">
                            </div>
                          </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Location</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="event_location" id="event_location" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Summary</label>
                            <div class="col-sm-6">
                             <textarea class="form-control" name="event_summary" id="event_summary"rows="3" style="resize:none;"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-6">
                             <textarea name="event_description" id="event_description" class="form-control" rows="6" style="resize:vertical;"> </textarea>
                            </div>
                          </div>

                         <!--  <div class="form-group">
                            <label class="col-sm-2 control-label">Pictures</label>
                              <div class="col-sm-10">
                                <input type="file" accept="image/*" name="image" id="image"/>
                              </div>
                            </div> -->

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Date</label>
                              <div class="col-sm-6">
                                <input type="Date" name="event_date" id="event_date" >
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label">Time</label>
                              <div class="col-sm-6">
                                <input type="Time" name="event_time" id="event_time" >
                              </div>
                            </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">
                                  Event type
                            </label>
                  
                            <div class="col-sm-6">
                                
                                <select class="form-control" name="event_type">
                                    <option selected="" disabled="">---- Select any ----</option>
                                    
                                     <option value="1" selected="event">Event</option>
                                     <option value="2">Timeline</option>
                                </select>
                            </div>  
                          </div>         

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                              <button type="submit" class="btn btn-success"><?php echo (isset($page) && $page == "Edit") ? "Update" : "Add" ?></button>
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
 

<?php include 'inc/footer.php';?>

