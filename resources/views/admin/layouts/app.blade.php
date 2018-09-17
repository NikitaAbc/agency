<head>
    <link rel="stylesheet" href="{{ asset("public/css/bootstrap.css") }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" media="screen"
          href="{{ asset("public/css/admin/smartadmin-production-plugins.min.css") }}">
    <link rel="stylesheet" type="text/css" media="screen"
          href="{{ asset("public/css/admin/smartadmin-production.min.css") }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<header id="header">


    <!-- end projects dropdown -->

    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="#" data-action="toggleMenu" title="Collapse Menu"><i
                            class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->


        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">

                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="#" class="padding-10 padding-top-0 padding-bottom-0"><i
                                    class="fa fa-cog"></i> Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i
                                    class="fa fa-user"></i> <u>P</u>rofile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="padding-10 padding-top-0 padding-bottom-0"
                           data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="padding-10 padding-top-0 padding-bottom-0"
                           data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i
                                    class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" title="Выйти" data-action="userLogout"
                      data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i
                            class="fa fa-sign-out"></i></a> </span>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->

        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i
                            class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->



    </div>



</header>

@include("admin.layouts.navigate")

<div id="include">

    <div id="main" role="main">

        <div id="content">
            @yield("content")
        </div>

    </div>
</div>

<div class="page-footer">
        <div class="col-xs-10 col-sm-6">
            <span class="txt-color-white"> <span class="hidden-xs">Footer</span> © 2017-2019</span>
        </div>
</div>


@section("main-js")



    <!-- IMPORTANT: APP CONFIG -->
    <script src="{{ asset("public/js/admin/app.config.js") }}"></script>

    <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
    <script src="{{ asset("public/js/admin/plugin/jquery-touch/jquery.ui.touch-punch.min.js") }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset("public/js/admin/bootstrap/bootstrap.min.js") }}"></script>

    <!-- CUSTOM NOTIFICATION -->
    <script src="{{ asset("public/js/admin/notification/SmartNotification.min.js") }}"></script>

    <!-- JARVIS WIDGETS -->
    <script src="{{ asset("public/js/admin/smartwidgets/jarvis.widget.min.js") }}"></script>

    <!-- EASY PIE CHARTS -->
    <script src="{{ asset("public/js/admin/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js") }}"></script>

    <!-- SPARKLINES -->
    <script src="{{ asset("public/js/admin/plugin/sparkline/jquery.sparkline.min.js") }}"></script>

    <!-- JQUERY VALIDATE -->
    <script src="{{ asset("public/js/admin/plugin/jquery-validate/jquery.validate.min.js") }}"></script>

    <!-- JQUERY MASKED INPUT -->
    <script src="{{ asset("public/js/admin/plugin/masked-input/jquery.maskedinput.min.js") }}"></script>

    <!-- JQUERY SELECT2 INPUT -->
    <script src="{{ asset("public/js/admin/plugin/select2/select2.min.js") }}"></script>

    <!-- JQUERY UI + Bootstrap Slider -->
    <script src="{{ asset("public/js/admin/plugin/bootstrap-slider/bootstrap-slider.min.js") }}"></script>

    <!-- browser msie issue fix -->
    <script src="{{ asset("public/js/admin/plugin/msie-fix/jquery.mb.browser.min.js") }}"></script>

    <!-- FastClick: For mobile devices -->
    <script src="{{ asset("public/js/admin/plugin/fastclick/fastclick.min.js") }}"></script>

    <!--[if IE 8]>

    <h1>Ваш браузер не поддерживает данный ресурс.</h1>

    <![endif]-->

    <!-- MAIN APP JS FILE -->
    <script src="{{ asset("public/js/admin/app.min.js") }}"></script>

    <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
    <!-- Voice command : plugin -->
    <script src="{{ asset("public/js/admin/speech/voicecommand.min.js") }}"></script>

    <!-- SmartChat UI : plugin -->
    <script src="{{ asset("public/js/admin/smart-chat-ui/smart.chat.ui.min.js") }}"></script>
    <script src="{{ asset("public/js/admin/smart-chat-ui/smart.chat.manager.min.js") }}"></script>

    <!-- PAGE RELATED PLUGIN(S) -->

    <!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
    <script src="{{ asset("public/js/admin/plugin/flot/jquery.flot.cust.min.js") }}"></script>
    <script src="{{ asset("public/js/admin/plugin/flot/jquery.flot.resize.min.js") }}"></script>
    <script src="{{ asset("public/js/admin/plugin/flot/jquery.flot.time.min.js") }}"></script>
    <script src="{{ asset("public/js/admin/plugin/flot/jquery.flot.tooltip.min.js") }}"></script>

    <!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
    <script src="{{ asset("public/js/admin/plugin/vectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
    <script src="{{ asset("public/js/admin/plugin/vectormap/jquery-jvectormap-world-mill-en.js") }}"></script>

    <!-- Full Calendar -->
    <script src="{{ asset("public/js/admin/plugin/moment/moment.min.js") }}"></script>
    <script src="{{ asset("public/js/admin/plugin/fullcalendar/fullcalendar.min.js") }}"></script>



    <script src="{{ asset("public/js/admin/plugin/jcrop/jquery.Jcrop.min.js") }}"></script>
    <script src="{{ asset("public/js/admin/plugin/jcrop/jquery.color.min.js")  }}"></script>

@show

<style>
    #include {
        margin-bottom: 100px;
    }
    .action{
        cursor: pointer; font-size:30px;
    }

</style>

