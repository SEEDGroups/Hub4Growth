<?php $i=array(1, 2, 3,4); ?>
<div id="templatemo_events" class="container_wapper">
    <div class="container-fluid">
        <h1>Events</h1>
        <?php $getEvents=getEvents();
        

            ?>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_left">
                <div class="event_box_img">
                    <img src="<?php echo IMAGE_URL; ?>templatemo_event_01.jpg" class="img-responsive" alt="Web Design Trends" />
                </div>
                <div class="event_box_caption">
                    <h1 data-toggle="modal" data-target="#myModal1"><?php echo $getEvents[0]['event_title']; ?></h1></a>
                    <p><span class="glyphicon glyphicon-map-marker"></span> <?php echo $getEvents[0]['event_location']; ?>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-calendar">&nbsp;<?php echo $getEvents[0]['event_date']; ?></span>&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span> <?php echo $getEvents[0]['event_time']; ?> </p>
                    <p><?php echo $getEvents[0]['event_summary']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_right">
                <div class="event_box_img">
                    <img src="<?php echo IMAGE_URL; ?>templatemo_event_02.jpg" class="img-responsive" alt="Free Bootstrap Seminar" />
                </div>
                <div class="event_box_caption">
                    <h1 data-toggle="modal" data-target="#myModal2"><?php echo $getEvents[1]['event_title']; ?></h1> 
                    <p><span class="glyphicon glyphicon-map-marker"></span> <?php echo $getEvents[1]['event_location']; ?>&nbsp;&nbsp;&nbsp;<span <i class="glyphicon glyphicon-calendar">&nbsp;<?php echo $getEvents[1]['event_date']; ?></span>&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span> <?php echo $getEvents[1]['event_time']; ?> </p>                  
                    <p><?php echo $getEvents[1]['event_summary']; ?></p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_left">
                <div class="event_box_img">
                    <img src="<?php echo IMAGE_URL; ?>templatemo_event_03.jpg" class="img-responsive" alt="" />
                </div>
                <div class="event_box_caption">
                    <h1 data-target="#myModal3" data-toggle="modal"><?php echo $getEvents[2]['event_title']; ?></h1>
                    <p><span class="glyphicon glyphicon-map-marker"></span> <?php echo $getEvents[2]['event_location']; ?>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-calendar">&nbsp;<?php echo $getEvents[2]['event_date']; ?></span>&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span> <?php echo $getEvents[2]['event_time']; ?> </p> 
                    <p><?php echo $getEvents[2]['event_summary']; ?> </p>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_right">
                <div class="event_box_img">
                    <img src="<?php echo IMAGE_URL; ?>templatemo_event_04.jpg" class="img-responsive" alt="" />
                </div>
                <div class="event_box_caption">
                    <h1 data-toggle="modal" data-target="#myModal4"><?php echo $getEvents[3]['event_location']; ?></h1>
                     <p><span class="glyphicon glyphicon-map-marker"></span> <?php echo $getEvents[3]['event_location']; ?>&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-calendar">&nbsp;<?php echo $getEvents[3]['event_date']; ?></span>&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span> <?php echo $getEvents[3]['event_time']; ?> </p> 
                    <p><?php echo $getEvents[3]['event_summary']; ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal for Contribution -->
<div id="myModal1" class="modal fade" role="dialog" style="margin-top: 44px">
    <div class="modal-dialog">
     
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center"><?php echo $getEvents[0]['event_title']; ?></h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i><?php echo $getEvents[0]['event_location']; ?></p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i><?php echo $getEvents[0]['event_date']; ?></p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $getEvents[0]['event_summary']; ?></div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10"><?php echo $getEvents[0]['event_description']; ?></div>
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
      
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center"><?php echo $getEvents[1]['event_title']; ?></h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i><?php echo $getEvents[1]['event_location']; ?></p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i><?php echo $getEvents[1]['event_date']; ?></p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $getEvents[1]['event_summary']; ?></div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10"><?php echo $getEvents[1]['event_description']; ?></div>
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
      
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center"><?php echo $getEvents[2]['event_title']; ?></h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i><?php echo $getEvents[2]['event_location']; ?></p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i><?php echo $getEvents[2]['event_date']; ?></p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $getEvents[2]['event_summary']; ?></div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10"><?php echo $getEvents[2]['event_description']; ?></div>
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
     
        <div class="modal-content modal-lg">
            <div class="modal-header" style="padding: 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align-last: center"><?php echo $getEvents[3]['event_title']; ?></h3>
                <medium>
                  <p class="pull-left"><i class="fa fa-fw fa-map-marker"></i><?php echo $getEvents[3]['event_location']; ?></p>
                  <p class="pull-right"><i class="fa fa-fw fa-calendar"></i><?php echo $getEvents[3]['event_date']; ?></p>
                </medium>
            </div>
            <div class="modal-body">
              <div class="row" style="border-bottom: 1px solid #e5e5e5">
                <label class="col-sm-2 control-label">Summary</label>
                <div class = "col-sm-10" style="border-bottom: 1px solid #fff"><?php echo $getEvents[3]['event_summary']; ?></div>
              </div>
              <div class="row" style="margin-top: 15px;">
                <label class="col-sm-2 control-label">Description</label>
                <div class = "col-sm-10"><?php echo $getEvents[3]['event_description']; ?></div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
