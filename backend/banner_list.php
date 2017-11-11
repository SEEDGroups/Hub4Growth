
<?php session_start(); ?>
<?php include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; include 'security_inside.php';?>
<?php include 'inc/header.php'; ?>
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
                          Banner List
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                 <?php $getBanners = getBanners(); debugger($getBanners); //exit;?>
                      <table id="getBanners" class="table table-bordered">
                        <thead>
                        <tr>
                          <th>S.No.</th>
                          <th style="width: 450px;">Thumbnail</th>
                          <th>Caption</th>
                          <th>Description</th>
                          <th class="action">Action</th>
                         </tr>
                        </thead>
                         <tbody>
                          <?php $i=1;

                          foreach ($getBanners as $getBanner){

                          ?>
                              <tr>
                                <td><?php echo $i; $i++;?></td>
                                 <td><img src="<?php echo bannerImage.$getBanner['banner_title'];?>" class="img img-responsive" style="max-width:100%; height: 25%;"></td>
                                 <td><?php echo html_entity_decode($getBanner['caption']);?></td>
                                 <td><?php echo html_entity_decode($getBanner['description']);?></td>
                                 <td class="action">

                                  <a href="add_banner.php?id=<?php echo $getBanner['id']; ?>&act=<?php echo substr(sha1('update-'.$getBanner['id']), 4, 9);?>" class="btn btn-success actionBtn"><i class="fa fa-fw fa-pencil fa-lg"></i></a>

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
