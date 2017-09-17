<h1>About Our Organization</h1>
<div class="col-sm-6 col-md-3 about_icon">
   <?php $vision=getVision();
   foreach($vision as $visionDetail){ 
  ?>
    <div class="imgwap mission"><i class="fa fa-fw fa-rocket"></i></div>
    <h2 class="about_org_color" data-toggle="modal" data-target="#modalVision">Vision and Mission</h2>
    <p><?php echo $visionDetail['summary']; ?></p>
  <!-- modal for vision -->
  <div id="modalVision" class="modal fade" role="dialog" style="margin-top: 44px">
      <div class="modal-dialog">
          <div class="modal-content modal-lg">
              <div class="modal-header" style="padding: 25px;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title" style="text-align-last: center">Vision and Mission</h3>
              </div>
              <div class="modal-body">
                <div class="row" style="border-bottom: 1px solid #e5e5e5">
                  <label class="col-sm-2 control-label">Summary</label>
                  <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $visionDetail['summary']; ?></div>
                </div>
                <div class="row" style="margin-top: 15px;">
                  <label class="col-sm-2 control-label">Description</label>
                  <div class = "col-sm-10"><?php echo html_entity_decode($visionDetail['description']); ?></div>
                </div>
              </div>

              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
<?php } ?>
</div>
<div class="col-sm-6 col-md-3 about_icon">
    <div class="imgwap product"><!-- <i class="fa fa-cubes"> --><i class="fa fa-bar-chart-o"></i></div>
    <?php $contribution=getContribution();
      foreach($contribution as $contributionDetail) {?>
    <h2 class="about_org_color" data-toggle="modal" data-target="#modalContribution">Contribution to National Development</h2>
    <p><?php echo $contributionDetail['summary']?></p>

    <!-- modal for Contribution -->
    <div id="modalContribution" class="modal fade" role="dialog" style="margin-top: 44px">
        <div class="modal-dialog">
          
            <div class="modal-content modal-lg">
                <div class="modal-header" style="padding: 25px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title" style="text-align-last: center">Contribution to National Developments</h3>
                </div>
                <div class="modal-body">
                  <div class="row" style="border-bottom: 1px solid #e5e5e5">
                    <label class="col-sm-2 control-label">Summary</label>
                    <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $contributionDetail['summary']?></div>
                  </div>
                  <div class="row" style="margin-top: 15px;">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class = "col-sm-10"><?php echo html_entity_decode($contributionDetail['description'])?></div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } 
          $collaboration=getCollaboration();
          foreach($collaboration as $collaborationDetail){
?>

<div class="col-sm-6 col-md-3 about_icon">
    <div class="imgwap testimonial"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
    <h2 class="about_org_color" data-toggle="modal" data-target="#modalCollaboration">Collaboration</h2>
    <p><?php echo $collaborationDetail['summary']?></p>
    <!-- modal for Collaboration -->
    <div id="modalCollaboration" class="modal fade" role="dialog" style="margin-top: 44px">
        <div class="modal-dialog">
          
            <div class="modal-content modal-lg">
                <div class="modal-header" style="padding: 25px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title" style="text-align-last: center">Collaboration</h3>
                </div>
                <div class="modal-body">
                  <div class="row" style="border-bottom: 1px solid #e5e5e5">
                    <label class="col-sm-2 control-label">Summary</label>
                    <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $collaborationDetail['summary']?></div>
                  </div>
                  <div class="row" style="margin-top: 15px;">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class = "col-sm-10"><?php echo html_entity_decode($collaborationDetail['description'])?></div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php }
  

      $research=getResearch();
      foreach($research as $researchDetail){
 ?>

</div>
<div class="col-sm-6 col-md-3 about_icon">
    <div class="imgwap statistic"><!-- <i class="fa fa-comments"> --><i class="fa fa-search" aria-hidden="true"></i></i></div>
    <h2 class="about_org_color" data-toggle="modal" data-target="#modalResearch">Research</h2>
    <p><?php echo $researchDetail['summary']?></p>
    <!-- modal for research -->
    <div id="modalResearch" class="modal fade" role="dialog" style="margin-top: 44px">
        <div class="modal-dialog">
         
            <div class="modal-content modal-lg">
                <div class="modal-header" style="padding: 25px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title" style="text-align-last: center">Research</h3>
                </div>
                <div class="modal-body">
                  <div class="row" style="border-bottom: 1px solid #e5e5e5">
                    <label class="col-sm-2 control-label">Summary</label>
                    <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $researchDetail['summary']?></div>
                  </div>
                  <div class="row" style="margin-top: 15px;">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class = "col-sm-10"><?php echo html_entity_decode($researchDetail['description'])?></div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>