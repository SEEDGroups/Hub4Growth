
<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php';?>
<?php include 'inc/header.php'; ?>
<?php
         include 'inc/function.php'; 
        include 'security_inside.php';
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
                          Events List <small><a href="events" style="text-decoration: none;"><i class="fa fa-fw fa-undo"></i> Go back</a></small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <?php $getEvents = getEvents(); ?>
                      <table id="listEvents" class="table table-bordered">
                        <thead>
                          <th>S.No.</th>
                          <th>Event Title</th>
                          <th>Event Summary</th>
                         
                          <th>Event Location</th>
                          <th>Event Date</th>
                          <th>Event Time</th>
                          <th>Action</th>

                        </thead>   
                         <tbody>
                          <?php $i=1;
                          foreach ($getEvents as $getEventList){ ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                 <td><?php echo $getEventList['event_title'];?></td>
                               
                                 <td><?php echo $getEventList['event_summary'];?></td>
                                                                                          
                                 <td><?php echo $getEventList['event_location'];?></td>
                              
                                 <td><?php echo $getEventList['event_date'];?></td>
                              
                                 <td><?php echo $getEventList['event_time'];?></td>

                                <td> 
                                  <a class="btn btn-success" href="events?id=<?php echo $getEventList['id']; ?>&act=<?php echo substr(sha1("edit-".$getEventList['id']), 4, 9); ?>" title=Edit>
                                    <i class="fa fa-pencil-square fa-2" ></a></i>
                                  <a class="btn btn-danger" href="#" title=Delete>
                                   <i class="fa fa-trash-o" aria-hidden="true"></i>
                                 </a> </i></td>
                              
                              </tr>
                              <?php
                              }
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
  