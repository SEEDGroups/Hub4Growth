
<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php';?>
<?php include 'inc/header.php'; ?>
<?php
         include 'inc/function.php';
        include 'security_inside.php';

        if(isset($_GET['id']) && !empty($_GET['act'])) {
            $id = sanitize($_GET['id']);

            $del = deleteData('positions', 'id', $id);

            if($del == 1){
                unlink($getPosition['image_title']);
                $_SESSION['success'] = "Member has been removed successfully";
                @header('location: list_position');
                exit;
            }else{
                $_SESSION['error'] = "Member couldn't be removed at this moment. Please try again later.";
               @header('location: list_position');
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
                          Testimonials <small class="pull-right"><a href="position.php" style="text-decoration: none;" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> <span>Add Member</span></a></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <?php $getPositions = getPositionofOrg();?>
                      <table id="listPositions" class="table table-bordered">
                        <thead>
                          <th>S.No.</th>
                          <th>Full Name </th>
                          <th>Designation</th>
                          <th style="max-width: 45px;">Thumbnail</th>
                          <th>Displayed at front on</th>
                          <th class="action">Action</th>

                        </thead>
                         <tbody>
                          <?php $i=1;

                          foreach ($getPositions as $getPosition){ ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                 <td><?php echo $getPosition['name'];?></td>
                                 <td><?php echo $getPosition['pos_title'];?></td>
                                 <td><img src="<?php echo MEMBER_IMAGE_URL.$getPosition['image_title'];?>" alt="<?php echo $getPosition['image_title']; ?>" class="img img-responsive" style="width:50%; height: 50%;"></td>
                                 <td><?php echo $getPosition['list_pos']; ?></td>
                                 <td class="action">
                                  <a href="position?id=<?php echo $getPosition['id']; ?>&act=<?php echo substr(sha1('update-'.$getPosition['id']), 4, 9);?>" class="btn btn-success actionBtn"><i class="fa fa-fw fa-pencil fa-2x" title="Update"></i></a>
                                 <a onclick="return confirm('Are you sure you want to delete this Member?')" href="list_position.php?id=<?php echo $getPosition['id']; ?>&act=<?php echo substr(sha1('delete-'.$getPosition['id']), 4, 9);?>" class="btn btn-danger actionBtn"><i class="fa fa-fw fa-trash fa-2x" title="Delete"></i></a>
                                 </td>
                              </tr>
                              <?php
                              }

                          ?> -->
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
