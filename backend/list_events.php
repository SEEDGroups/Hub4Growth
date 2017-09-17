
<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php';  include 'inc/function.php'; include 'security_inside.php';?>
<?php include 'inc/header.php'; ?>
<?php
        if(isset($_GET['id']) && !empty($_GET['act'])) {
            $id = sanitize($_GET['id']);
            $field = "id";
            $tableName = "achievement";
            $del = deleteData($tableName, $field, $id);

            if($del == 1){
                $_SESSION['success'] = "Event has been removed successfully";
                @header('location: list_events');
            exit;
            }else{
                $_SESSION['error'] = "Event couldn't be removed at this moment. Please try again later.";
                @header('location: list_events');
            exit;
            }
        }
?>
<?php include 'datatable_css.php';?>

    <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Hesading -->
                <div class="row">

                    <div class="col-lg-12">
                      <?php include 'inc/notification.php'; ?>
                        <h1 class="page-header">
                          Events List
                        </h1>

                    </div>
                </div>
                 <?php $getEventLists = getEvents(); ?>
                 <?php
                 if($getEventLists == false){
                     $_SESSION['info'] = "No data found in database";
                     exit;
                  }else{?>
                <!-- /.row -->
                <div class="row">

                      <table id="listEvents" class="table table-bordered">
                        <thead>
                          <th>S.No.</th>
                          <th>Event Title</th>
                          <th>Event Summary</th>

                          <th>Event Location</th>
                          <th>Event Date</th>
                          <th>Event Time</th>
                          <th style="width: 450px;">Thumbnail</th>
                          <th>Action</th>

                        </thead>
                         <tbody>
                          <?php $i =1;
                          foreach ($getEventLists as $getEvent){ ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                 <td><?php echo $getEvent['event_title'];?></td>

                                 <td><?php echo $getEvent['event_summary'];?></td>


                                 <td><?php echo $getEvent['event_location'];?></td>

                                 <td><?php echo $getEvent['event_date'];?></td>

                                 <td><?php echo $getEvent['event_time'];?></td>
                                 <td><img src="<?php echo MEMBER_IMAGE_URL.$getEvent['image_title'];?>" class="img img-responsive" style="max-width:100%; height: 25%;"></td>

                                <td>

                                  <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Event?')" href="list_events?id=<?php echo $getEvent['id']; ?>&act=<?php echo substr(sha1('delete-'.$getEvent['id']), 4, 9);?>" title="Delete">
                                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                                 </a> </i></td>

                              </tr>
                              <?php
                            } //foreach ko end
                            } //else ko end
                          ?>
                         </tbody>
                      </table>
                  </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'inc/footer.php';?>
<?php include 'inc/dataTables.php';?>
