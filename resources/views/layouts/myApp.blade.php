<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
{{-- signature start --}}
  <meta charset="utf-8">
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
     Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="initial-scale=1.0, target-densitydpi=device-dpi" /><!-- this is for mobile (Android) Chrome -->
  <meta name="viewport" content="initial-scale=1.0, width=device-height"><!--  mobile Safari, FireFox, Opera Mobile  -->
{{-- signature end --}}


  <link rel="shortcut icon" href="{{url('asset/images/logo_icon.png')}}" type="image/png">

  <title>R3 Stem Cell </title>

  <!--icheck-->
  <link href="{{url('asset/js/iCheck/skins/minimal/minimal.css')}}" rel="stylesheet">
  <link href="{{url('asset/js/iCheck/skins/square/square.css')}}" rel="stylesheet">
  <link href="{{url('asset/js/iCheck/skins/square/red.css')}}" rel="stylesheet">
  <link href="{{url('asset/js/iCheck/skins/square/blue.css')}}" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="{{url('asset/css/clndr.css')}}" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="{{url('asset/js/morris-chart/morris.css')}}">

  <!--common-->
  <link href="{{url('asset/css/style.css')}}" rel="stylesheet">
  <link href="{{url('asset/css/style-responsive.css')}}" rel="stylesheet">
  <link href="{{url('asset/css/my-custom-style.css')}}" rel="stylesheet">


  @yield('style')

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">
<section>
    <!-- left side start-->
    
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="{{url('/')}}"><img src="{{url('asset/images/logo.png')}}" alt="" width="200" style="margin-top: 22px;"></a>
        </div>

        <div class="logo-icon text-center">
            <a href="{{url('/')}}"><img src="{{url('asset/images/logo_icon.png')}}" alt="" width="50"></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">
            <!--sidebar nav start-->
            @yield('left-side-menu')
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--search start-->
        {{-- <form class="searchform" action="index.html" method="post">
            <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
        </form> --}}
        
        <div class="searchform menu-left">
            <span class="page-name">@yield('page-name')</span>
        </div>
        <!--search end-->

        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        {{-- <img src="{{url('images/photos/user-avatar.png')}}" alt="" /> --}}
                        <i class="fa fa-user" aria-hidden="true" style="margin-right: 10px; font-size:20px"></i>

                        {{Auth::user()->name}}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <!-- <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li> -->
                        <li><a href="logout"href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        <!-- <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"><i> Log Out </a>

                            
                        </li> -->
                    </ul>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
        </div>
        <!--notification menu end -->

        </div>

        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            @yield('page-heading')
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            @yield('content')
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer style="text-align:center">
            <img src="{{url('asset/images/logo_icon.png')}}" height="30"> Copyright &copy; <?php echo date('Y');?> R3 Stem Cell. All Rights Reserved.
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>



<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{url('asset/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{url('asset/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{url('asset/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{url('asset/js/bootstrap.min.js')}}"></script>
<script src="{{url('asset/js/modernizr.min.js')}}"></script>
<script src="{{url('asset/js/jquery.nicescroll.js')}}"></script>

<!--easy pie chart-->
<script src="{{url('asset/js/easypiechart/jquery.easypiechart.js')}}"></script>
<script src="{{url('asset/js/easypiechart/easypiechart-init.js')}}"></script>

<!--Sparkline Chart-->
<script src="{{url('asset/js/sparkline/jquery.sparkline.js')}}"></script>
<script src="{{url('asset/js/sparkline/sparkline-init.js')}}"></script>

<!--icheck -->
<script src="{{url('asset/js/iCheck/jquery.icheck.js')}}"></script>
<script src="{{url('asset/js/icheck-init.js')}}"></script>

<!-- jQuery Flot Chart-->
<script src="{{url('asset/js/flot-chart/jquery.flot.js')}}"></script>
<script src="{{url('asset/js/flot-chart/jquery.flot.tooltip.js')}}"></script>
<script src="{{url('asset/js/flot-chart/jquery.flot.resize.js')}}"></script>


<!--Morris Chart-->
<script src="{{url('asset/js/morris-chart/morris.js')}}"></script>
<script src="{{url('asset/js/morris-chart/raphael-min.js')}}"></script>

<!--Calendar-->
<script src="{{url('asset/js/calendar/clndr.js')}}"></script>
<script src="{{url('asset/js/calendar/evnt.calendar.init.js')}}"></script>
<script src="{{url('asset/js/calendar/moment-2.2.1.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="{{url('asset/js/scripts.js')}}"></script>

<!--Dashboard Charts-->
<script src="{{url('asset/js/dashboard-chart-init.js')}}"></script>


<!--data table-->
<script type="text/javascript" src="{{url('asset/js/data-tables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{url('asset/js/data-tables/DT_bootstrap.js')}}"></script>


<!--script for editable table-->
<script src="{{url('asset/js/editable-table.js')}}"></script>

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>

@yield('script')

</body>
</html>