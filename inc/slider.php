<?php $getMember = getMemberList(); //debugger($getMember); exit;?>
<div class="clearfix testimonial_top_bottom_spacer"></div>
<div class="col-xs-1 pre_next_wap" id="prev_testimonial">
    <a href="#"><span class="glyphicon glyphicon-chevron-left pre_next"></span></a>
</div>

<div id="testimonial_text_wap" class="col-xs-9 col-sm-10">
  <?php foreach($getMember as $getMemberInfo){?>
      <div class="testimonial_text">
        <div class="col-sm-3">
            <img src="<?php echo UPLOADED_IMAGE.$getMemberInfo['image_title']; ?>" class="img-responsive" alt="Director" />
        </div>
        <div class="col-sm-9">
            <h2><?php echo $getMemberInfo['name']; ?></h2>
            <h3><?php echo $getMemberInfo['pos_title']; ?></h3>
            <p><?php echo $getMemberInfo['message']; ?></p>
        </div>
    </div><!--.testimonial_text-->
  <?php } ?>

       </div><!--#testimonial_text_wap-->
<div class="col-xs-1 pre_next_wap" id="next_testimonial">
    <a href="#"><span class="glyphicon glyphicon-chevron-right pre_next"></span></a>
</div>
<div class="clearfix testimonial_top_bottom_spacer"></div>
