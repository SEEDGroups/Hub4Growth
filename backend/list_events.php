
<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php';  include 'inc/function.php'; include 'security_inside.php';?>
<?php include 'inc/header.php'; ?>
<?php
        if(isset($_GET['id']) && !empty($_GET['act'])) {
            $id = sanitize($_GET['id']);
            $field = "id";
            $tableName = "events";
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
<style>
ul>li.active>a{
	font-weight: 700 !important;
	color: white;
}
ul>li>a{
	font-weight: 700 !important;
	color: black;
}
th,td{
    color: black;
}
</style>
<?php include 'datatable_css.php';?>

    <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-lg-12">
                      <?php include 'inc/notification.php'; ?>
                        <h1 class="page-header">
                          Events List
                          <small class="pull-right">
                            <a href="events.php" class="btn btn-success">
                              <i class="fa fa-fw fa-plus"></i> <span>Add Events</span>
                            </a>
                          </small>
                        </h1>
                    </div>
			    <?php $getEventLists = getEvents(); ?>
                      <table id="listEvents" class="table table-bordered">                  <!-- table starts here for events -->
                        <thead>
                            <tr>
                          <th>S.No.</th>
                          <th>Event Title</th>
                          <th>Event Summary</th>
                          <th>Event Location</th>
                          <th>Event Date</th>
                          <th>Event Status</th>
                          <th>Is Featured</th>
                          <th class="action">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $i =1;
                          //debugger($getEventLists); //exit;
                          foreach ($getEventLists as $getEvent){ ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                 <td><?php echo $getEvent['title'];?></td>

                                 <td><?php echo html_entity_decode(stripslashes($getEvent['summary']));?></td>


                                 <td><?php echo $getEvent['location'];?></td>

                                 <td><?php echo $getEvent['eventDate'];?></td>
                                 <td><?php $status = status($getEvent['eventStatus']); echo ucfirst($status); ?></td>
                                 <td><?php $isfeatured = isFeatured($getEvent['is_featured']); echo ucfirst($isfeatured); ?></td>
                                 <td class="action">
                                  <a class="btn btn-success actionBtn" href="events.php?id=<?php echo $getEvent['id']; ?>&act=<?php echo substr(sha1('update-'.$getEvent['id']), 4, 9);?>" title="Update">
                                   <i class="fa fa-pencil" aria-hidden="true"></i>
                                 </a>
                                  <a class="btn btn-danger actionBtn" onclick="return confirm('Are you sure you want to delete this Event?')" href="list_events.php?id=<?php echo $getEvent['id']; ?>&act=<?php echo substr(sha1('delete-'.$getEvent['id']), 4, 9);?>" title="Delete">
                                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                                 </a></td>
                              </tr>
                              <?php
                            } //foreach ko end

                          ?>
                        </tbody>
                      </table>                              <!-- table ends here for events-->
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
