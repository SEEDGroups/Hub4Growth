<?php $getTimeline=getTimeline(); ?>
<div id="templatemo_timeline" class="container_wapper">

    <h1>Timeline</h1>
    <div class="container-fluid">
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[0]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#myModal1"><?php echo $getTimeline[0]['event_title']; ?></h1>

                <p><?php echo $getTimeline[0]['event_summary']; ?></p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[1]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#myModal2"><?php echo $getTimeline[1]['event_title']; ?></h1>

                <p><?php echo $getTimeline[1]['event_summary']; ?></p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[2]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#myModal3"><?php echo $getTimeline[2]['event_title']; ?></h1>

                <p><?php echo $getTimeline[2]['event_summary']; ?></p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[3]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#myModal4"><?php echo $getTimeline[3]['event_title']; ?></h1>

                <p><?php echo $getTimeline[3]['event_summary']; ?></p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[4]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#myModal5"><?php echo $getTimeline[4]['event_title']; ?></h1>

                <p><?php echo $getTimeline[4]['event_summary']; ?></p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption"><?php echo $getTimeline[5]['event_date']; ?></div>
            <div class="time_line_paragraph">
                <h1 data-toggle="modal" data-target="#myModal6"><?php echo $getTimeline[5]['event_title']; ?></h1>
               <!--  <p>
                       <span class="glyphicon glyphicon-user"></span> <a href="#">Samyam Koirala</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-bookmark"></span> <a href="#">Research</a>, <a href="#">Development</a> &nbsp;&nbsp;

                </p> -->
                <p><?php echo $getTimeline[5]['event_summary']; ?></p>
            </div>
        </div>
    </div>
</div>

<!-- modal for Contribution -->
<div id="myModal1" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">
      <p>Sed do eiusmod tempor incididunt ut labore et.</p>
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center">Contribution to National Developments</h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i>Location</p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i>Calendar</p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff">Summary of Contribution to National Developments</div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10">Description of Contribution to National Developments</div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal for Contribution -->
<div id="myModal2" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">
      <p>Sed do eiusmod tempor incididunt ut labore et.</p>
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center">Contribution to National Developments</h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i>Location</p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i>Calendar</p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff">Summary of Contribution to National Developments</div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10">Description of Contribution to National Developments</div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal for Contribution -->
<div id="myModal3" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">
      <p>Sed do eiusmod tempor incididunt ut labore et.</p>
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center">Contribution to National Developments</h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i>Location</p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i>Calendar</p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff">Summary of Contribution to National Developments</div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10">Description of Contribution to National Developments</div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal for Contribution -->
<div id="myModal4" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">
      <p>Sed do eiusmod tempor incididunt ut labore et.</p>
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center">Contribution to National Developments</h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i>Location</p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i>Calendar</p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff">Summary of Contribution to National Developments</div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10">Description of Contribution to National Developments</div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal for Contribution -->
<div id="myModal5" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">
      <p>Sed do eiusmod tempor incididunt ut labore et.</p>
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center">Contribution to National Developments</h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i>Location</p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i>Calendar</p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff">Summary of Contribution to National Developments</div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10">Description of Contribution to National Developments</div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal for Contribution -->
<div id="myModal6" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">
      <p>Sed do eiusmod tempor incididunt ut labore et.</p>
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center">Contribution to National Developments</h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i>Location</p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i>Calendar</p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff">Summary of Contribution to National Developments</div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10">Description of Contribution to National Developments</div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
