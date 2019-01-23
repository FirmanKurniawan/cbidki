<!doctype html>
<html class="no-js" lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard v.2.0 | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
   <link rel="stylesheet" href="{{asset('a/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('a/css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('a/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('a/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('a/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('a/css/animate.css')}}">
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('a/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('a/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('a/css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('a/css/normalize.css')}}">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('a/css/c3.min.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('a/style.css')}}">
    <link rel="stylesheet" href="{{asset('a/css/form.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('a/css/responsive.css')}}">

    <link href="{{ asset('fontawesome-free-5.5.0-web/css/all.css') }}" rel="stylesheet">
     <link href="{{ asset('fontawesome-free-5.5.0-web/css/all.min.css') }}" rel="stylesheet">

    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('a/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
 
<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro" >
        <div class="left-sidebar-pro">
            <nav id="sidebar" >
                <div class="sidebar-header">
                    <a href="#"><img src="{{url('images/201901221613065c4741121bc1f.jpg')}}" alt="" style="width: 150px;height: 150px;" />
                    </a>
                    <h3>{{ Auth::user()->name }}</h3>
                    <strong>CP</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                       
                        <li class="nav-item"><a href="{{url('/')}}"><i class="fa fa-tachometer-alt"></i>
                            <span class="mini-dn">Dashboard</span> <span class="indicator-right-menu"></span></a>
                        </li>
                        <li class="nav-item"><a href="{{url('profile')}}"><i class="fa fa-user"></i>
                            <span class="mini-dn">Profile</span> <span class="indicator-right-menu"></span></a>
                        </li>
                        <li class="nav-item"><a href="{{url('about')}}"><i class="fa fa-globe"></i>
                            <span class="mini-dn">About</span> <span class="indicator-right-menu"></span></a>
                        </li>
                        <li class="nav-item"><a href="{{url('visimisi')}}"><i class="fa fa-envelope"></i>
                            <span class="mini-dn">Visi Misi</span> <span class="indicator-right-menu"></span></a>
                        </li>
                         <li class="nav-item"><a href="{{url('gallery')}}"><i class="fa fa-image"></i>
                            <span class="mini-dn">Gallery</span> <span class="indicator-right-menu"></span></a>
                        </li>
                         <li class="nav-item"><a href="{{url('newsletter')}}"><i class="fa fa-envelope-square"></i>
                            <span class="mini-dn">News Letter</span> <span class="indicator-right-menu"></span></a>
                        </li>
                         <li class="nav-item"><a href="{{url('footer')}}"><i class="fa fa-font"></i>
                            <span class="mini-dn">Footer</span> <span class="indicator-right-menu"></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area" style="background-color: #f47142">
                <div class="fixed-header-top" style="background-color: #f47142">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn" style="background-color: #f47142">
                                    <i class="fa fa-bars"></i>
                                     <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                               
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item dropdown">
                                           
                                            <div role="menu" class="author-message-top dropdown-menu animated flipInX">
                                               
                                       
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">{{ Auth::user()->name }}</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX" style="background-color:#f47142 ">
                                                <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"style="background-color: #f47142"><span class="adminpro-icon adminpro-locked author-log-ic" style=""></span>Log Out</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                     @csrf
                                                </form>
                                                </li>
                                            </ul>
                                        </li>
                                       
                                </div>
                            </div>
 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                <li class="nav-item"><a href="{{url('/')}}"><i class="fa fa-dashboard"></i>
                            <span class="mini-dn">Dashboard</span> <span class="indicator-right-menu"></span></a>
                        </li>
                         <li class="nav-item"><a href="{{url('gallery')}}"><i class="fa fa-image"></i>
                            <span class="mini-dn">Gallery</span> <span class="indicator-right-menu"></span></a>
                        </li>
                         <li class="nav-item"><a href="{{url('visimisi')}}"><i class="fa fa-envelope"></i>
                            <span class="mini-dn">Visi Misi</span> <span class="indicator-right-menu"></span></a>
                        </li>
                         <li class="nav-item"><a href="{{url('newsletter')}}"><i class="fa fa-envelope-square"></i>
                            <span class="mini-dn">News Letter</span> <span class="indicator-right-menu"></span></a>
                        </li>
                         <li class="nav-item"><a href="{{url('footer')}}"><i class="fa fa-font"></i>
                            <span class="mini-dn">Footer</span> <span class="indicator-right-menu"></span></a>
                        </li>
                          <li class="nav-item"><a href="{{url('about')}}"><i class="fa fa-adn"></i>
                            <span class="mini-dn">About</span> <span class="indicator-right-menu"></span></a>
                        </li>
                     
                                   
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            @yield('content')
</div>
</div>
 
            <!-- Transitions End-->
        </div>
    </div>
 
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2018 Colorlib All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- Chat Box Start-->
   
    <!-- Chat Box End-->
    <!-- jquery
        ============================================ -->
    <script src="{{asset('a/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('a/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('a/js/jquery.meanmenu.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('a/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{asset('a/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('a/js/jquery.scrollUp.min.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('a/js/wow/wow.min.js')}}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{asset('a/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('a/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('a/js/counterup/counterup-active.js')}}"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="{{asset('a/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('a/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('a/js/jvectormap/jvectormap-active.js')}}"></script>
    <!-- peity JS
        ============================================ -->
    <script src="{{asset('a/js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('a/js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{asset('a/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('a/js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
        ============================================ -->
    <script src="{{asset('a/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('a/js/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('a/js/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('a/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('a/js/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('a/js/flot/jquery.flot.symbol.js')}}"></script>
    <script src="{{asset('a/js/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('a/js/flot/dashtwo-flot-active.js')}}"></script>
    <!-- data table JS
        ============================================ -->
    <script src="{{asset('a/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('a/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('a/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('a/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('a/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('a/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('a/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('a/js/data-table/bootstrap-table-export.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('a/js/main.js')}}"></script>


        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor1' );
    </script>
       <script>
        CKEDITOR.replace( 'ckeditor2' );
    </script>
      <script>
        CKEDITOR.replace( 'ckeditor3' );
    </script>

</body>
 
</html>