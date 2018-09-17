<!DOCTYPE html>
<html dir="ltr" lang="ru">

<head>
    <meta charset="utf-8">
    <title>{{ $page->tag_title }}</title>

    <meta name="description" content="{{ $page->tag_description }}">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&subset=latin,latin-ext,cyrillic,cyrillic-ext"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&subset=latin,latin-ext,cyrillic,cyrillic-ext"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&subset=latin,latin-ext,cyrillic,cyrillic-ext"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&subset=latin,latin-ext,cyrillic,cyrillic-ext"
          rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset("public/bootstrap/css/bootstrap.css") }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{ asset("public/fonts/font-awesome/css/font-awesome.css") }}" rel="stylesheet">

    <!-- Plugins -->
    <link href="{{ asset("public/plugins/magnific-popup/magnific-popup.css") }}" rel="stylesheet">
    <link href="{{ asset("public/plugins/rs-plugin-5/css/settings.css") }}" rel="stylesheet">
    <link href="{{ asset("public/plugins/rs-plugin-5/css/layers.css") }}" rel="stylesheet">
    <link href="{{ asset("public/plugins/rs-plugin-5/css/navigation.css") }}" rel="stylesheet">
    <link href="{{ asset("public/css/site/animations.css") }}" rel="stylesheet">
    <link href="{{ asset("public/plugins/slick/slick.css") }}" rel="stylesheet">

    <!-- The Project's core CSS file -->
    <!-- Use css/rtl_style.css for RTL version -->
    <link href="{{ asset("public/css/site/style.css") }}" rel="stylesheet">
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="{{ asset("public/css/site/typography-default.css") }}" rel="stylesheet">
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer) -->
    <link href="{{ asset("public/css/site/skins/light_blue.css") }}" rel="stylesheet">

    <!-- Custom css -->
    <link href="{{ asset("public/css/site/custom.css") }}" rel="stylesheet">

    @yield("css")

</head>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->

<?php $class_body = $view == "home" ? "front-page page-loader-1" : "" ?>


<body class="{{$class_body}}">

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">
    <!-- header-container start -->
    <div class="header-container">

        <div class="header-top dark">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-md-5">

                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-sm-down">

                                @include('layouts.socials')

                            </ul>
                            <div class="social-links hidden-md-up circle small">
                                <div class="btn-group dropdown">
                                    <button id="header-top-drop-1" type="button"
                                            class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
                                        @include('layouts.socials')
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- header-top-first end -->
                    </div>
                    <div class="col-9 col-md-7">
                        <div id="header-top-second" class="clearfix text-right">
                            <nav>
                                <ul class="list-inline">
                                    @empty(!$contact->address)
                                        <li class="list-inline-item">
                                            <i class="fa fa-map-marker pr-1 pl-2"></i>
                                            {{ $contact->address }}
                                        </li>
                                    @endempty
                                    @empty(!$contact->phone1 )
                                        <li class="list-inline-item">
                                            <i class="fa fa-phone pr-1 pl-2"></i>
                                            {{ $contact->phone1 }}
                                        </li>
                                    @endempty
                                    @empty(!$contact->email_contact )
                                        <li class="list-inline-item"><i class="fa fa-envelope-o pr-1 pl-2"></i>
                                            {{ $contact->email_contact }}
                                        </li>
                                    @endempty
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->

        <header class="header centered fixed fixed-desktop clearfix">
            <div class="container">
                <div class="row">

                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <!-- header-first start -->
                                <!-- ================ -->
                                <div class="header-first clearfix hidden-md-down">

                                    <div id="logo" class="logo">
                                        <a href="/">
                                            <img id="logo_img" src="{{ asset("public/images/logo_light_blue.png") }}"
                                                 alt="The Project"></a>
                                    </div>

                                </div>
                                <!-- header-first end -->
                            </div>

                            <div class="col-md-12">
                                <!-- header-second start -->
                                <!-- ================ -->
                                <div class="header-second d-lg-flex d-xl-flex justify-content-xl-center justify-content-lg-center clearfix">

                                    <!-- main-navigation start -->
                                    <!-- classes: -->
                                    <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                                    <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                                    <!-- ================ -->
                                    <div class="main-navigation main-navigation--mega-menu  animated">
                                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                                            <div class="navbar-brand clearfix hidden-lg-up">

                                                <!-- logo -->
                                                <div id="logo-mobile" class="logo">
                                                    <a href="/">
                                                        <img id="logo-img-mobile"
                                                             src="{{ asset("public/images/logo_light_blue.png") }}"
                                                             alt="The Project"></a>
                                                </div>

                                            </div>

                                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                    data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1"
                                                    aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>

                                            @include("layouts.navigate")
                                        </nav>
                                    </div>
                                    <!-- main-navigation end -->
                                </div>
                                <!-- header-second end -->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- header end -->
    </div>
    <!-- header-container end -->

    @if ($page->route!='')

        <div class="breadcrumb-container">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="fa fa-home pr-2"></i><a class="link-dark" href="{{ url("/") }}">Главная</a>
                    </li>
                    <li class="breadcrumb-item active">{{ $page->menu }}</li>
                </ol>
            </div>
        </div>

@endif

@yield("content")

<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
    <!-- ================ -->
    <footer id="footer" class="clearfix ">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-content">
                                <div class="logo-footer"><img id="logo-footer"
                                                              src="{{ asset("public/images/logo_light_blue.png") }}" alt="">
                                </div>
                            </div>
                            <div>
                                {{ $page->footer_text }}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-content">
                                <h2 class="title">Последние новости</h2>
                                <div class="separator-2"></div>
                                @foreach($articles as $article)
                                <div class="media margin-clear">
                                    <div class="d-flex pr-2">
                                        <div class="overlay-container">
                                            <img class="media-object" src="{{ asset("public/img/articles/". $article->image) }}"
                                                 alt="blog-thumb">
                                            <a href="{{ url("novosti/".$article->route) }}" class="overlay-link small"><i
                                                        class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="{{ url("novosti/".$article->route) }}" style="overflow: hidden">{{ str_limit($article->title,30) }}</a></h6>
                                       <!--- <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 23, 2017 --->
                                        </p>
                                    </div>
                                </div>
                                    <hr>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-content">
                                <h2 class="title">Связь с нами</h2>
                                <div class="separator-2"></div>
                                <ul class="social-links circle animated-effect-1">
                                    @include('layouts.socials')
                                </ul>
                                <div class="separator-2"></div>
                                <ul class="list-icons">
                                    @empty(!$contact->address)
                                    <li><i class="fa fa-map-marker pr-2 text-default" title="Адрес"></i> {{ $contact->address }}</li>
                                    @endempty
                                        @empty(!$contact->phone1)
                                    <li><i class="fa fa-phone pr-2 text-default" title="Телефон #1"></i> {{ $contact->phone1 }}</li>
                                        @endempty
                                        @empty(!$contact->email_contact)
                                    <li><a href="mailto:{{ $contact->email_contact }}"><i
                                                    class="fa fa-envelope-o pr-2" title="Почта"> </i>{{ $contact->email_contact }}</a>
                                    </li>
                                        @endempty
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .footer end -->

        <!-- .subfooter start -->
        <!-- ================ -->
        <div class="subfooter">
            <div class="container">
                <div class="subfooter-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">Copyright © <?php echo date('Y'); ?> Все права сохранены</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .subfooter end -->

    </footer>
    <!-- footer end -->
</div>


<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script src="{{ asset("public/plugins/jquery.min.js") }}"></script>
<script src="{{ asset("public/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- jQuery Revolution Slider  -->
<script src="{{ asset("public/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js") }}"></script>
<script src="{{ asset("public/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js") }}"></script>
<!-- Isotope javascript -->
<script src="{{ asset("public/plugins/isotope/imagesloaded.pkgd.min.js") }}"></script>
<script src="{{ asset("public/plugins/isotope/isotope.pkgd.min.js") }}"></script>
<!-- Magnific Popup javascript -->
<script src="{{ asset("public/plugins/magnific-popup/jquery.magnific-popup.min.js") }}"></script>
<!-- Appear javascript -->
<script src="{{ asset("public/plugins/waypoints/jquery.waypoints.min.js") }}"></script>
<script src="{{ asset("public/plugins/waypoints/sticky.min.js") }}"></script>
<!-- Count To javascript -->
<script src="{{ asset("public/plugins/countTo/jquery.countTo.js") }}"></script>
<!-- Slick carousel javascript -->
<script src="{{ asset("public/plugins/slick/slick.min.js") }}"></script>
<!-- Pace javascript -->
<script src="{{ asset("public/plugins/pace/pace.min.js") }}"></script>
<!-- Initialization of Plugins -->
<script src="{{ asset("public/js/site/template.js") }}"></script>
<!-- Custom Scripts -->
<script src="{{ asset("public/js/site/custom.js") }}"></script>

@yield("js")

</body>
</html>
