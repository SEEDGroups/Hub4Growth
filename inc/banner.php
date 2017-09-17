<?php $getAllBanner = getBanners(); ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="width: 100% !important; max-height: 800px !important; ">


    <div class="item active">
      <img src="<?php echo UPLOADED_IMAGE.$getAllBanner[0]['banner_title']; ?>" style="width: 100%; height: 800px !important;" alt="<?php $getAllBanner[0]['caption']; ?>">
      <div class="carousel-caption">
       <h2><?php echo $getAllBanner[0]['caption']; ?></h2>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo UPLOADED_IMAGE.$getAllBanner[1]['banner_title']; ?>" style="width: 100%; height: 800px !important;" alt="<?php $getAllBanner[1]['caption']; ?>">
      <div class="carousel-caption">
      <h2><?php echo $getAllBanner[1]['caption']; ?></h2>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo UPLOADED_IMAGE.$getAllBanner[2]['banner_title']; ?>" style="width: 100%; height: 800px !important;" alt="<?php $getAllBanner[2]['caption']; ?>">
      <div class="carousel-caption">
      <h2><?php echo $getAllBanner[2]['caption']; ?></h2>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo UPLOADED_IMAGE.$getAllBanner[3]['banner_title']; ?>" style="width: 100%; height: 800px !important;" alt="<?php $getAllBanner[2]['caption']; ?>">
      <div class="carousel-caption">
      <h2><?php echo $getAllBanner[2]['caption']; ?></h2>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
