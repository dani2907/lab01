<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <title>Admin Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="{{ asset('css/bootstrap-cerulean.min.css') }}" rel="stylesheet">

<!--     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 -->

    <link href="{{ asset('charisma_master/css/charisma-app.css') }}" rel="stylesheet">
    <link href="{{ asset('charisma_master/bower_components/fullcalendar/dist/fullcalendar.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma_master/bower_components/fullcalendar/dist/fullcalendar.print.css') }}" rel='stylesheet' media='print'>
    <link href="{{ asset('charisma_master/bower_components/chosen/chosen.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma_master/bower_components/colorbox/example3/colorbox.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma_master/bower_components/responsive-tables/responsive-tables.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma_master/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma_master/css/jquery.noty.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma_master/css/noty_theme_default.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma_master/css/elfinder.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma_master/css/elfinder.theme.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma_master/css/jquery.iphone.toggle.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma_master/css/uploadify.css') }}" rel='stylesheet'>
    <link href="{{ asset('charisma_master/css/animate.min.css') }}" rel='stylesheet'>

    <!-- jQuery -->
    <script src="{{ asset('charisma_master/bower_components/jquery/jquery.min.js') }}"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="{{ asset('charisma_master/img/logo20.png') }}">

    @yield('style')
</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                 </li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <a class="navbar-brand" href="{{ url('/') }}"> <img alt="Charisma Logo" src="{{asset('charisma_master/img/logo20.png')}}" class="hidden-xs"/>
                <span>DSchool</span></a>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="{{ url('/homeadmin') }}"><i class="glyphicon glyphicon-home"></i><span> Beranda</span></a>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Akses Berita </span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{url('/inputberita')}}">Input Berita</a></li>
                                <li><a href="{{url('/aksesberita')}}">View Berita </a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span >Akses Penguman</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{url('/inputpenguman')}}">Input Penguman</a></li>
                                <li><a href="{{url('/aksespenguman')}}">View Penguman </a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span >Akses Agenda</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{url('/inputagenda')}}">Input Agenda</a></li>
                                <li><a href="{{url('/aksesagenda')}}">View Agenda </a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="{{url('/konfirmasijudul')}}"><span>Konf. Judul SKripsi</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{url('/registrasimember')}}"></i><span>Registrasi Member</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      <!-- left menu ends -->

        <div id="content" class="col-lg-10 col-sm-10">
            @yield('content')
        </div>
    </div><!--/fluid-row-->


</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="{{ asset('charisma_master/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- library for cookie management -->
<script src="{{ asset('charisma_master/js/jquery.cookie.js') }}"></script>
<!-- calender plugin -->
<script src="{{ asset('charisma_master/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('charisma_master/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<!-- data table plugin -->
<script src="{{ asset('charisma_master/js/jquery.dataTables.min.js') }}"></script>

<!-- select or dropdown enhancer -->
<script src="{{ asset('charisma_master/bower_components/chosen/chosen.jquery.min.js') }}"></script>
<!-- plugin for gallery image view -->
<script src="{{ asset('charisma_master/bower_components/colorbox/jquery.colorbox-min.js') }}"></script>
<!-- notification plugin -->
<script src="{{ asset('charisma_master/js/jquery.noty.js') }}"></script>
<!-- library for making tables responsive -->
<script src="{{ asset('charisma_master/bower_components/responsive-tables/responsive-tables.js') }}"></script>
<!-- tour plugin -->
<script src="{{ asset('charisma_master/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js') }}"></script>
<!-- star rating plugin -->
<script src="{{ asset('charisma_master/js/jquery.raty.min.js') }}"></script>
<!-- for iOS style toggle switch -->
<script src="{{ asset('charisma_master/js/jquery.iphone.toggle.js') }}"></script>
<!-- autogrowing textarea plugin -->
<script src="{{ asset('charisma_master/js/jquery.autogrow-textarea.js') }}"></script>
<!-- multiple file upload plugin -->
<script src="{{ asset('charisma_master/js/jquery.uploadify-3.1.min.js') }}"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="{{ asset('charisma_master/js/jquery.history.js') }}"></script>
<!-- application script for Charisma demo -->
<script src="{{ asset('charisma_master/js/charisma.js') }}"></script>

@yield('script')
</body>
</html>

