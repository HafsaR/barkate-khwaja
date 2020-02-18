<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Metrica -</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('/')}}/public/backend_theme/assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="{{url('/')}}/public/backend_theme/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/public/backend_theme/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/public/backend_theme/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
       
       
        <link href="{{url('/')}}/public/backend_theme/assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">
       
          <!-- Plugins css -->
          <link href="{{url('/')}}/public/backend_theme/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
          <link href="{{url('/')}}/public/backend_theme/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
          <link href="{{url('/')}}/public/backend_theme/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
          <link href="{{url('/')}}/public/backend_theme/assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
          <link href="{{url('/')}}/public/backend_theme/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
       
        <!-- App css -->
        <link href="{{url('/')}}/public/backend_theme/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/public/backend_theme/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/public/backend_theme/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/public/backend_theme/assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{url('/')}}/public/backend_theme/analytics/analytics-index.html" class="logo">
                    <span>
                        <img src="{{url('/')}}/public/backend_theme/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{url('/')}}/public/backend_theme/assets/images/logo.png" alt="logo-large" class="logo-lg">
                        <img src="{{url('/')}}/public/backend_theme/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <!-- Navbar -->
            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-right mb-0"> 
                    <li class="hidden-sm">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="{{url('/')}}/javascript: void(0);" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            English <img src="{{url('/')}}/public/backend_theme/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/> <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('/')}}/javascript: void(0);"><span> German </span><img src="{{url('/')}}/public/backend_theme/assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="{{url('/')}}/javascript: void(0);"><span> Italian </span><img src="{{url('/')}}/public/backend_theme/assets/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="{{url('/')}}/javascript: void(0);"><span> French </span><img src="{{url('/')}}/public/backend_theme/assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="{{url('/')}}/javascript: void(0);"><span> Spanish </span><img src="{{url('/')}}/public/backend_theme/assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="{{url('/')}}/javascript: void(0);"><span> Russian </span><img src="{{url('/')}}/public/backend_theme/assets/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="{{url('/')}}/#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (18)
                            </h6>
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="{{url('/')}}/javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="{{url('/')}}/javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                                <!-- item-->
                                <a href="{{url('/')}}/javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>
                                <!-- item-->
                                <a href="{{url('/')}}/javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="{{url('/')}}/javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="{{url('/')}}/javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="{{url('/')}}/#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="{{url('/')}}/public/backend_theme/assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('/')}}/#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="{{url('/')}}/#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="{{url('/')}}/#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="{{url('/')}}/#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('/')}}/#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                </ul><!--end topbar-nav-->
    
                <ul class="list-unstyled topbar-nav mb-0">                        
                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="dripicons-menu nav-icon"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="{{url('/')}}/"><i class="fas fa-search"></i></a>
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Left Sidenav -->
            <div class="left-sidenav">
                <ul class="metismenu left-sidenav-menu">

                    <li>
                        <a href="{{url('/dashboard')}}"><i class="ti-bar-chart"></i><span>Dashboard<i class="mdi mdi-chevron"></i></span></a>
                       
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>Books</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{url('/book')}}"><i class="ti-control-record"></i>Upload Book</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/book_information')}}"><i class="ti-control-record"></i>Manage Book</a></li>
                         </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>Magazines</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{url('/magazine')}}"><i class="ti-control-record"></i>Add Magazine</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/magazine_information')}}"><i class="ti-control-record"></i>Magazine Information</a></li>
                         </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>Section</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{url('/section')}}"><i class="ti-control-record"></i>Add Section</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/section_information')}}"><i class="ti-control-record"></i>Section Information</a></li>
                         </ul>
                    </li>

                 
                 
                </ul>
            </div>
            <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                  @yield('content')
                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2019 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="{{url('/')}}/public/backend_theme/assets/js/jquery.min.js"></script>
        <script src="{{url('/')}}/public/backend_theme/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('/')}}/public/backend_theme/assets/js/metisMenu.min.js"></script>
        <script src="{{url('/')}}/public/backend_theme/assets/js/waves.min.js"></script>
        <script src="{{url('/')}}/public/backend_theme/assets/js/jquery.slimscroll.min.js"></script>

        <script src="{{url('/')}}/public/backend_theme/assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="{{url('/')}}/public/backend_theme/assets/pages/jquery.analytics_dashboard.init.js"></script>

        <!-- file upload JS -->
        <script src="{{url('/')}}/public/backend_theme/assets/plugins/dropify/js/dropify.min.js"></script>
        <script src="{{url('/')}}/public/backend_theme/assets/pages/jquery.form-upload.init.js"></script>

        <!-- DATATABLE JS -->
        <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Buttons examples -->
  <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/dataTables.buttons.min.js"></script>
  <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
  <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/jszip.min.js"></script>
  <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/pdfmake.min.js"></script>
  <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/vfs_fonts.js"></script>
  <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/buttons.html5.min.js"></script>
  <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/buttons.print.min.js"></script>
  <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/buttons.colVis.min.js"></script>
  <!-- Responsive examples -->
  <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/dataTables.responsive.min.js"></script>
  <script src="{{url('/')}}/public/backend_theme/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
  <script src="{{url('/')}}/public/backend_theme/assets/pages/jquery.datatable.init.js"></script>

   <!-- Plugins js -->
   <script src="{{url('/')}}/public/backend_theme/assets/plugins/moment/moment.js"></script>
   <script src="{{url('/')}}/public/backend_theme/assets/plugins/daterangepicker/daterangepicker.js"></script>
   <script src="{{url('/')}}/public/backend_theme/assets/plugins/select2/select2.min.js"></script>
   <script src="{{url('/')}}/public/backend_theme/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
   <script src="{{url('/')}}/public/backend_theme/assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
   <script src="{{url('/')}}/public/backend_theme/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
   <script src="{{url('/')}}/public/backend_theme/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

   <script src="{{url('/')}}/public/backend_theme/assets/pages/jquery.forms-advanced.js"></script>

        <!-- App js -->
        <script src="{{url('/')}}/public/backend_theme/assets/js/app.js"></script>
        

    </body>
</html>