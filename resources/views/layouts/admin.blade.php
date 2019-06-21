<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title> Global Agra Vaishchamber </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('files/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/feather/css/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/font-awesome-n.min.css') }}">

    <link rel="stylesheet" href="{{ asset('files/bower_components/chartist/css/chartist.css') }}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/widget.css') }}">
</head>
<body>
<div id="app">
    <main class="py-4">
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                @include('admin.inc.adminnav')
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        @include('admin.inc.sidenavbar')
                        <div class="pcoded-content">

                            <div class="page-header card">
                                <div class="row align-items-end">
                                    <div class="col-lg-8">
                                        <div class="page-header-title">
                                            <i class="feather icon-home bg-c-blue"></i>
                                            <div class="d-inline">
                                                <h5>Dashboard</h5>
                                                <span> Welcome <strong class="font-weight-bold">User name Here </strong>, to Global Agra vaishChamber DashBoard </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="page-header-breadcrumb">
                                            <ul class=" breadcrumb breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="feather icon-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pcoded-inner-content">
                                @yield('content-admin')
                            </div>
                        </div>
                        <div id="styleSelector">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script type="text/javascript" src="{{ asset('files/bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('files/assets/pages/waves/js/waves.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>

<script type="text/javascript" src="{{ asset('files/assets/pages/chart/float/jquery.flot.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/assets/pages/chart/float/jquery.flot.categories.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/assets/pages/chart/float/curvedLines.js') }}"></script>
<script type="text/javascript" src=" {{ asset('files/assets/pages/chart/float/jquery.flot.tooltip.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('files/bower_components/chartist/js/chartist.js') }}"></script>

<script type="text/javascript" src="{{asset('files/assets/pages/widget/amchart/amcharts.js')}}"></script>
<script type="text/javascript" src="{{ asset('files/assets/pages/widget/amchart/serial.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/assets/pages/widget/amchart/light.js') }}"></script>

<script type="text/javascript" src="{{ asset('files/assets/js/pcoded.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/assets/js/vertical/vertical-layout.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/assets/pages/dashboard/custom-dashboard.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/assets/js/script.min.js') }}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</body>


</html>
