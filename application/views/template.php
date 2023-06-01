
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>{title}</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url()?>vertical/assets/images/favicon.ico">

        <link href="<?= base_url()?>vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url()?>vertical/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url()?>vertical/assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="<?= base_url()?>vertical/assets/js/jquery.min.js"></script>
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?= base_url()?>" class="logo"><i class="mdi mdi-assistant"></i> Annex</a>
                        <!-- <a href="index.html" class="logo"><img src="<?= base_url()?>vertical/assets/images/logo.png" height="24" alt="logo"></a> -->
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main Menu</li>

                            <li>
                                <a href="<?= base_url()?>" class="waves-effect">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('mahasiswa')?>" class="waves-effect">
                                    <i class="fa fa-users"></i>
                                    <span> Mahasiswa</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="<?= base_url()?>vertical/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">{judul}</h4>
                                    </div>
                                </div>
                            </div>

                                {isi}
                            
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © Latihan DataTable ServerSide
                </footer>
            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="<?= base_url()?>vertical/assets/js/popper.min.js"></script>
        <script src="<?= base_url()?>vertical/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url()?>vertical/assets/js/modernizr.min.js"></script>
        <script src="<?= base_url()?>vertical/assets/js/detect.js"></script>
        <script src="<?= base_url()?>vertical/assets/js/fastclick.js"></script>
        <script src="<?= base_url()?>vertical/assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url()?>vertical/assets/js/jquery.blockUI.js"></script>
        <script src="<?= base_url()?>vertical/assets/js/waves.js"></script>
        <script src="<?= base_url()?>vertical/assets/js/jquery.nicescroll.js"></script>
        <script src="<?= base_url()?>vertical/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url()?>vertical/assets/js/app.js"></script>

    </body>
</html>