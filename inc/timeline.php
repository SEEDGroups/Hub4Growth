<?php $getTimeline=getTimeline(); ?>

<div id="templatemo_timeline" class="container_wapper">

    <h1>Timeline</h1>
    <div class="container-fluid">
      <?php for($i=0;$i<6;$i++){ ?>
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[$i]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#timelineModal<?php echo $i;?>"><?php echo $getTimeline[$i]['event_title']; ?></h1>

                <p><?php echo $getTimeline[$i]['event_summary']; ?></p>
            </div>
        </div>
        <?php } ?>
        </div>
</div>

<!-- modal for Timeline -->
<?php 

for($i=0;$i<6;$i++){
  ?>
<div id="timelineModal<?php echo $i;?>" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">
      
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                 
                <h3 class="modal-title" style="text-align-last: center"><?php echo $getTimeline[$i]['event_title']; ?></h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i><?php echo $getTimeline[$i]['event_location']; ?></p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i><?php echo $getTimeline[$i]['event_date']?></p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $getTimeline[$i]['event_summary']; ?></div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10"><?php echo html_entity_decode($getTimeline[$i]['event_description']); ?></div>
             
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
 

</div>
</div>

<?php }?>