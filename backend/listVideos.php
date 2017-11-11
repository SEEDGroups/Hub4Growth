
<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php';?>
<?php include 'inc/header.php'; ?>
<?php
         include 'inc/function.php';
        include 'security_inside.php';

        if(isset($_GET['id']) && !empty($_GET['act'])) {
            $id = sanitize($_GET['id']);

            $del = deleteData('youtube', 'id', $id);

            if($del){
                 $_SESSION['success'] = "Video has been removed successfully";
                @header('location: listVideos.php');
            exit;
            }else{
                $_SESSION['error'] = "Video couldn't be removed at this moment. Please try again later.";
               @header('location: listVideos.php');
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
                          List Videos <small class="pull-right"><a href="videoAdd" class="btn btn-success headerBtn"><i class="fa fa-fw fa-plus"></i> <span>Add videos</span></a></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <?php $getVideos = getVideos();?>
                      <table id="listPositions" class="table table-bordered">
                        <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th style="width: 400px;">Thumbnail</th>
                          <th class="action">Action</th>
                        </thead>
                         <tbody>
                          <?php $i=1;

                          foreach ($getVideos as $getVideo){ ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                 <td><?php echo $getVideo['title'];?></td>
                                 <td style="max-width: 100%; height: 300px; background-size: cover; background: url(http://img.youtube.com/vi/<?php echo $getVideo['videoId'];?>/hqdefault.jpg)"></td>
                                 <td class="action">
                                <a href="videoAdd.php?id=<?php echo $getVideo['id']; ?>&act=<?php echo substr(sha1('edit-video-'.$getVideo['id']), 4, 9);?>" class="btn btn-success actionBtn" style="text-decoration: none; border-radius: 50%;"><i class="fa fa-fw fa-pencil fa-2x"></i></a>
                                 <a onclick="return confirm('Are you sure you want to delete this video?')" href="listVideos.php?id=<?php echo $getVideo['id']; ?>&act=<?php echo substr(sha1('delete-'.$getVideo['id']), 4, 9);?>" class="btn btn-danger actionBtn" style="text-decoration: none; border-radius: 50%;"><i class="fa fa-fw fa-trash fa-2x"></i></a>
                                 </td>
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
