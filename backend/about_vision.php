<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; include 'inc/navigation.php';?>
<?php include 'inc/header.php';	 ?>
<?php
	include 'security_inside.php';

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
</style>
 <div id="wrapper">

       <?php include 'inc/navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">

                   <?php $vision=getVision(); ?>

                    <div class="col-lg-12">
                      <?php include 'inc/notification.php';?>

                        <h1 class="page-header">Update info about Hub4Growthtu.edu.np</h1>
												</div>
                </div>
								<div class="row">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Vision and Mission</a></li>
										<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Collaboration</a></li>
										<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Contribution</a></li>
										<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Research</a></li>
									</ul>
								</div>
                <!-- /.row -->
                <div class="row">
									<div>



									  <!-- Tab panes -->
									  <div class="tab-content">
											<br/>
									    <div role="tabpanel" class="tab-pane active" id="home" style="color: white">

												<form class="form-horizontal" method="POST" action="inc/about_process">
												<?php foreach($vision as $getVisionList){
												 ?>
																 <div class="form-group">
																	 <label class="col-sm-2 control-label" style="color: black;">Summary</label>
																	 <div class="col-sm-6">
																		<textarea name="summary" id="summary" class="form-control" rows="3" style="resize:vertical;" ><?php echo $getVisionList['summary']; ?></textarea>
																	 </div>
																 </div>

																 <div class="form-group">
																		 <label class="col-sm-2 control-label"></label>
																		 <div class="col-sm-6">
																			<input type="hidden" name="page" id="page" value="Vision and mission" class="form-control">
																		 </div>
																	</div>

																	<div class="form-group">
																	 <label class="col-sm-2 control-label">Description</label>
																	 	<div class="col-sm-6">
																			<textarea name="description" id="description" class="form-control" rows="7" style="resize:vertical;" placeholder="Vision Description"><?php echo html_entity_decode($getVisionList['description']); ?></textarea>
																	 	</div>
																 	</div>

																	<div class="form-group">
																	 <div class="col-sm-offset-2 col-sm-6">
																		 <button type="submit" class="btn btn-success">Update</button>
																	 </div>
																 </div>
																 <?php
																		}
																		 ?>
															 </form>

											</div>

									    <div role="tabpanel" class="tab-pane" id="profile" style="color: white">
												<?php include "about_collaboration.php"; ?>
											</div>

											<div role="tabpanel" class="tab-pane" id="messages" style="color: white">
												<?php include "about_contribution.php"; ?>
											</div>
									    <div role="tabpanel" class="tab-pane" id="settings" style="color: white">
												<?php include "about_research.php"; ?>
											</div>
									  </div>

									</div>

                  </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
include_once 'inc/tinymce_init.php';
 include 'inc/footer.php'; ?>
