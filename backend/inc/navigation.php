<?php $current_page_active = basename($_SERVER['REQUEST_URI']);//$current_page = $_SERVER ?>
 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">HUB4GROWTH Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['fullname'];?>

                     <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="<?php echo ($current_page_active == "dashboard") ? 'active' : ''; ?>">
                        <a href="dashboard" title="Dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="<?php echo ($current_page_active == "about_vision" || $current_page_active == "about_contribution" || $current_page_active == "about_collaboration" || $current_page_active == "about_research") ? 'active' : ''; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#about"><i class="fa fa-fw fa-users"></i> About HUB4GROWTH<i class="fa fa-fw fa-caret-down"></i></a>
                         <ul class="collapse" id="about">
                            <li class="<?php echo ($current_page_active == "about_vision") ? 'active' : ''; ?>">
                                <a href="about_vision" title='Vision & Mission'><i class="fa fa-fw fa-plus"></i> Vision & Mission</a>
                            </li>

                            <li class="<?php echo ($current_page_active == "about_contribution") ? 'active' : ''; ?>">
                                <a href="about_contribution"><i class="fa fa-fw fa-list"></i>Contribution to National &nbsp &nbsp &nbsp Development</a>
                            </li>
                            <li class="<?php echo ($current_page_active == "about_collaboration") ? '' : ''; ?>">
                                <a href="about_collaboration"><i class="fa fa-fw fa-list"></i>Collaboration</a>
                            </li>
                            <li class="<?php echo ($current_page_active == "about_research") ? 'active' : ''; ?>">
                                <a href="about_research" title="Research & Technology"><i class="fa fa-fw fa-list"></i>Research & Technology</a>
                            </li>
                        </ul>
                    </li>

                    <li class="<?php echo ($current_page_active == "list_position") ? 'active' : ''; ?>">
                            <a href="list_position" title="Member's lists"><i class="fa fa-fw fa-bars"></i> List Members</a>
                    </li>

                    <li class="<?php echo ($current_page_active == "contact") ? 'active' : ''; ?>">
                            <a href="contact" title="Contact Info"><i class="fa fa-fw fa-plus"></i> Contact Info</a>
                    </li>

                    <li class="<?php echo ($current_page_active == "list_events" || $current_page_active == "events") ? 'active' : ''; ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#events"><i class="fa fa-fw fa-calendar"></i> Events<i class="fa fa-fw fa-caret-down"></i></a>
                         <ul class="collapse" id="events">
                            <li class="<?php echo ($current_page_active == "banner_list") ? 'active' : ''; ?>">
                                <a href="events" title="Event Add"><i class="fa fa-fw fa-plus"></i> &nbsp;Add Events</a>
                            </li>
                             <li class="<?php echo ($current_page_active == "banner_list") ? 'active' : ''; ?>">
                                        <a href="list_events"><i class="fa fa-fw fa-table"></i> List Events</a>
                            </li>
                         </ul>
                    </li>

                    <li class="<?php echo ($current_page_active == "banner_list") ? 'active' : ''; ?>">
                                <a href="banner_list"><i class="fa fa-fw fa-picture-o"></i> Banners</a>
                    </li>

                    <li class="<?php echo ($current_page_active == "enquiry") ? 'active' : ''; ?>">
                                <a href="enquiry"><i class="fa fa-fw fa-server"></i> List Enquries</a>
                    </li>



                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
