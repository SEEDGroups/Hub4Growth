<?php $getTimeline=getTimeline(); ?>

<div id="templatemo_timeline" class="container_wapper">

    <h1><?php echo $getTimeline[0]['event_title']; ?></h1>
    <div class="container-fluid">
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[0]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#timelineModal1"><?php echo $getTimeline[0]['event_title']; ?></h1>

                <p><?php echo $getTimeline[0]['event_summary']; ?></p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[1]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#timelineModal2"><?php echo $getTimeline[1]['event_title']; ?></h1>

                <p><?php echo $getTimeline[1]['event_summary']; ?></p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[2]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#timelineModal3"><?php echo $getTimeline[2]['event_title']; ?></h1>

                <p><?php echo $getTimeline[2]['event_summary']; ?></p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[3]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#timelineModal4"><?php echo $getTimeline[3]['event_title']; ?></h1>

                <p><?php echo $getTimeline[3]['event_summary']; ?></p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[4]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#timelineModal5"><?php echo $getTimeline[4]['event_title']; ?></h1>

                <p><?php echo $getTimeline[4]['event_summary']; ?></p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[5]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#timelineModal6"><?php echo $getTimeline[5]['event_title']; ?></h1>
               <!--  <p>
                       <span class="glyphicon glyphicon-user"></span> <a href="#">Samyam Koirala</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-bookmark"></span> <a href="#">Research</a>, <a href="#">Development</a> &nbsp;&nbsp;

                </p> -->
                <p><?php echo $getTimeline[5]['event_summary']; ?></p>
            </div>
        </div>
    </div>
</div>


<!-- modal for Timeline -->
<div id="timelineModal1" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">

        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center"><?php echo $getTimeline[0]['event_title']; ?></h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i><?php echo $getTimeline[0]['event_location']; ?></p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i><?php echo $getTimeline[0]['event_date']?></p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $getTimeline[0]['event_summary']; ?></div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10"><?php echo html_entity_decode($getTimeline[0]['event_description']); ?></div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal for Timeline -->
<div id="timelineModal2" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center"><?php echo $getTimeline[1]['event_title']; ?></h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i><?php echo $getTimeline[1]['event_location']; ?></p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i><?php echo $getTimeline[1]['event_date']; ?></p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $getTimeline[1]['event_summary']; ?></div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10"><?php echo html_entity_decode ($getTimeline[1]['event_description']); ?></div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal for Timeline -->
<div id="timelineModal3" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">
     <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center"><?php echo $getTimeline[2]['event_title']; ?></h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i><?php echo $getTimeline[2]['event_location']; ?></p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i><?php echo $getTimeline[2]['event_date']; ?></p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $getTimeline[2]['event_summary']; ?></div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10"><?php echo html_entity_decode ($getTimeline[2]['event_description']); ?></div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal for Timeline -->
<div id="timelineModal4" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">
      <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center"><?php echo $getTimeline[3]['event_title']; ?></h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i><?php echo $getTimeline[3]['event_location']; ?></p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i><?php echo $getTimeline[3]['event_date']; ?></p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $getTimeline[3]['event_summary']; ?></div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10"><?php echo html_entity_decode ($getTimeline[3]['event_description']); ?></div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal for Timeline -->
<div id="timelineModal5" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">

        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center"><?php echo $getTimeline[4]['event_title']; ?></h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i><?php echo $getTimeline[4]['event_location']; ?></p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i><?php echo $getTimeline[4]['event_date']; ?></p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $getTimeline[4]['event_summary']; ?></div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10"><?php echo html_entity_decode ($getTimeline[4]['event_description']); ?></div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal for Timeline -->
<div id="timelineModal6" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">

        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center"><?php echo $getTimeline[5]['event_title']; ?></h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i><?php echo $getTimeline[5]['event_location']; ?></p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i><?php echo $getTimeline[5]['event_date']; ?></p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $getTimeline[5]['event_summary']; ?></div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10"><?php echo html_entity_decode ( $getTimeline[5]['event_description']); ?></div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
