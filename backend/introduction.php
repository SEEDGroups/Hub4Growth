<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; include 'inc/navigation.php';?>
<?php include 'inc/header.php';	 ?>
<?php
	include 'security_inside.php';

?>
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vac10evlzh1ylmepy70qr1q28wkygjzqa36g98uakma5l2jc"></script>
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
                    <div class="col-lg-12">
                      <?php include 'inc/notification.php';?>
                        <h1 class="page-header">Update What We Do</h1>
												</div>
                </div>
								<div class="row">
									<?php $whatweDoHome = getHome();?>
									<div class="col-md-7">
										<form class="form-horizontal" method="POST" action="inc/introduction_process">
										<?php foreach ($whatweDoHome as $introduction){ ?>

														 <div class="form-group">
															 <label class="col-sm-2 control-label">Title: </label>
															 <div class="col-sm-10">
																<input type="text" name="title" value="<?php echo $introduction['title'];?>" class="form-control">
																<input type="hidden" name="id" value="<?php echo $introduction['id'];?>" class="form-control">
															 </div>
														 </div>

															 <div class="form-group">
															 <label class="col-sm-2 control-label">Banner Content: </label>
															 <div class="col-sm-10">
																<textarea name="bannerContent" id="bannerContent" class="form-control" rows="7" style="resize:vertical;"><?php echo ucfirst(html_entity_decode(stripslashes($introduction['bannerContent']))); ?></textarea>
															 </div>
														 </div>

														 <div class="form-group">
														 <label class="col-sm-2 control-label">Short Intro: </label>
														 <div class="col-sm-10">
															<textarea name="bannerDContent" id="bannerDContent" class="form-control" rows="7" style="resize:vertical;"><?php echo ucfirst(html_entity_decode(stripslashes($introduction['bannerDContent']))); ?></textarea>
														 </div>
													 </div>

														 <div class="form-group">
															 <div class="col-sm-offset-2 col-sm-6">
																 <button type="submit" class="btn btn-success">Update</button>
															 </div>
														 </div>
														 <?php } ?>
													 </form>
									</div>
									<div class="col-md-offset-1 col-md-4">
										<form class="form-horizontal" method="POST" action="inc/image_updateofIntroduction" enctype="multipart/form-data">
											<?php $image=$introduction['fileTitle']; $name=$introduction['title']; ?>
									 <div class="form-group">
										 <label class="row control-label">At present </label>
											 <div class="row">
												 <img src="<?php echo homeImage.$image; ?>" alt="<?php echo $name; ?>" class="img-responsive" style="width: auto; height: 240px; " />
												 <input type="hidden" >
											 </div>
									 </div>

									 <div class="form-group">
										 <label class="row control-label">Change with</label>
											 <div class="row">
												 <input type = "file" name="images" accept="image/*">
											 </div>
									 </div>

									 <div class="form-group">
									 <div class="row">
										 <input type="hidden" required class="form-control" name="id" value="<?php echo $introduction['id'];?>">
										 <input type="hidden" required class="form-control" name="pre_image" id="pre_image" value="<?php echo (!empty($introduction['id']))? $introduction['id'] : '';?>">
									 </div>
								 </div>
									 <div class="clearfix"></div>
									 <div class="form-group">
										 <div class="row">
											 <input type="submit" class="btn btn-default">
										 </div>
									 </div>
									 </form>
									</div>
          </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

		 <script>
				tinymce.init({
					 selector: 'textarea',
					 height: 300,
					 theme: 'modern',
						plugins: [
								 'codesample imagetools',
	 'advlist autolink lists link image charmap print preview anchor textcolor',
	 'searchreplace visualblocks code fullscreen',
	 'insertdatetime media table contextmenu paste code help'
 ],
 toolbar: 'insert | undo redo |  styleselect | bold italic forecolor backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help | fontsizeselect',
 content_css: [
	 '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
	 '//www.tinymce.com/css/codepen.min.css']
				});
		 </script>
<?php
 include 'inc/footer.php'; ?>
