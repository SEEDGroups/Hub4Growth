<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; ?>
<?php 
	include 'inc/header.php';	 
	include 'security_inside.php';
	include 'inc/navigation.php';
?>

 <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   
                    <div class="col-lg-12">
                      <?php include 'inc/notification.php';?>

                        <h1 class="page-header">
                          Add new Position <a href="list_position" class="btn btn-success" style="float: right;">Positions</a>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                        <form class="form-horizontal" method="POST" action="inc/position_process">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                              <input type="text" required class="form-control" name="title" placeholder="CEO">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                             <textarea name="description" id="description" class="form-control" rows="6" style="resize:vertical;" placeholder="Main Person of the Company"></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-4">
                              <select class="form-control" name="pos_status">
                                <option disabled selected>---- Postion Status ---- </option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-success">Add</button>
                          
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

<?php include 'inc/footer.php'; ?>