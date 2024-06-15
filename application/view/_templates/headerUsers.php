<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo URL; ?>gen/production/images/favicon.ico" type="image/ico" />

    <title>StockShop</title>

    <!-- Bootstrap -->
    <link href="<?php echo URL; ?>gen/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo URL; ?>gen/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- NProgress -->
    <link href="<?php echo URL; ?>gen/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo URL; ?>gen/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo URL; ?>gen/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo URL; ?>gen/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo URL; ?>gen/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo URL; ?>gen/build/css/custom.min.css" rel="stylesheet">

    <!-- sweetAlert -->
    <link rel="stylesheet" href="<?php echo URL;?>css/sweetalert2.min.css">

    <!-- esta varible nos sirve para llamar la raiz del proyecto -->
    <script>
        const url = "<?php echo URL;?>"
    </script>
    </head>

    <body class="nav-md">
        <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SoftInver</span></a>
                </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="<?php echo URL; ?>gen/production/images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>Administrador</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo URL;?>userController/closeSession">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo URL; ?>gen/production/images/img.jpg" alt="">Administrador
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                        <a class="dropdown-item"  href="<?php echo URL;?>userController/closeSession"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                    </li>

                    <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                        <li class="nav-item">
                        <a class="dropdown-item">
                            <span class="image"><img src="<?php echo URL; ?>gen/production/images/img.jpg" alt="Profile Image" /></span>
                            <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="dropdown-item">
                            <span class="image"><img src="<?php echo URL; ?>gen/production/images/img.jpg" alt="Profile Image" /></span>
                            <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="dropdown-item">
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="dropdown-item">
                            <span class="image"><img src="<?php echo URL; ?>gen/production/images/img.jpg" alt="Profile Image" /></span>
                            <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <div class="text-center">
                            <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        </li>
                    </ul>
                    </li>
                </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        