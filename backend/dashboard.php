<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php';  include 'inc/function.php'; ?>
<?php
    include 'inc/header.php';
    include 'security_inside.php';
    include 'inc/navigation.php';
?>
    <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php include 'inc/notification.php'; ?>
                        <h1 class="page-header">
                            Dashboard <small>Design by Seeds</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include 'inc/footer.php'; ?>
