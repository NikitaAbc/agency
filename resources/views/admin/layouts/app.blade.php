<head>
    <link rel="stylesheet" href="{{ asset("public/css/bootstrap.css") }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" media="screen"
          href="{{ asset("public/css/admin/smartadmin-production-plugins.min.css") }}">
    <link rel="stylesheet" type="text/css" media="screen"
          href="{{ asset("public/css/admin/smartadmin-production.min.css") }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
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
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white"> <span class="hidden-xs">Footer</span> © 2017-2019</span>
        </div>
    </div>
</div>


@section("main-js")


<script src="{{ asset("public/js/admin/app.config.js") }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset("public/js/bootstrap/bootstrap.min.js") }}"></script>
<!-- JARVIS WIDGETS -->

<script src="{{ asset("public/js/app.js") }}"></script>

<script src="{{ asset("public/js/admin/jarvis.widget.min.js") }}"></script>

<script src="{{ asset("public/js/admin/validator/bootstrapValidator.min.js") }}"></script>

<script src="{{ asset("public/js/admin/datatables/jquery.dataTables.min.js") }}"></script>

<script src="{{ asset("public/js/admin/datatables/datatables.responsive.min.js") }}"></script>

<script src="{{ asset("public/js/admin/jcrop/jquery.Jcrop.min.js") }}"></script>
<script src="{{ asset("public/js/admin/jcrop/jquery.color.min.js") }}"></script>
@show

<style>
    #include {
        margin-bottom: 100px;
    }
    .action{
        cursor: pointer; font-size:35px;
    }

</style>

