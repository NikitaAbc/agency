<!DOCTYPE html>
<html dir="ltr" lang="zxx">

<head>
    <meta charset="utf-8">
    <title>{{ $page->tag_title }}</title>

    <meta name="description" content="{{ $page->tag_description }}">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

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

{{ $class_body= $view == "home"?"front-page transparent-header":"" }}



<body class="{{$class_body}}">

<style>
    .hide {
        display:none;
    }
</style>
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
                    <div class="col-3 col-sm-6 col-lg-9">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-sm-down">


                                @empty(!$contact->linkedin_link)
                                    <li ><a href="{{ $contact->linkedin_link }}"><i
                                                    class="fa fa-linkedin" title="linkedin"></i></a></li>
                                @endempty

                                    @empty(!$contact->google_link)
                                <li class="{{ $contact->google_link ?: "hidden" }}"><a href="{{ $contact->google_link}}"><i
                                                class="fa fa-google-plus" title="google"></i></a></li>
                                    @endempty

                                    @empty(!$contact->youtube_link)
                                <li class="{{ $contact->youtube_link ?: "hidden" }}"><a href="{{ $contact->youtube_link}}"><i
                                                class="fa fa-youtube" title="youtube"></i></a></li>
                                    @endempty

                                    @empty(!$contact->fb_link)
                                <li class="{{ $contact->fb_link ?: "hidden" }}"><a href="{{ $contact->fb_link}}"><i
                                                class="fa fa-facebook-f" title="facebook"></i></a></li>
                                    @endempty

                                    @empty(!$contact->fb_link)
                                <li class="{{ $contact->instagram ?: "hidden" }}"><a href="{{ $contact->instagram }}"><i
                                                class="fa fa-instagram" title="instagram"></i></a></li>
                                    @endempty

                            </ul>
                            <div class="social-links hidden-md-up circle small">
                                <div class="btn-group dropdown">
                                    <button id="header-top-drop-1" type="button"
                                            class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="skype"><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline hidden-md-down hidden">
                                @empty(!$contact->address)
                                <li class="list-inline-item"><i class="fa fa-map-marker pr-1 pl-2"></i>
                                    {{ $contact->address }}
                                </li>
                                @endempty
                                    @empty(!$contact->phone1 )
                                <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-2"></i>{{ $contact->phone1 }}
                                    @endempty
                                </li>
                                        @empty(!$contact->email_contact )
                                <li class="list-inline-item"><i class="fa fa-envelope-o pr-1 pl-2"></i>
                                    {{ $contact->email_contact }}
                                </li>
                                        @endempty
                            </ul>
                        </div>
                        <!-- header-top-first end -->
                    </div>
                    <div class="col-9 col-sm-6 col-lg-3">

                        <!-- header-top-second start -->
                        <!-- ================ -->
                        <div id="header-top-second" class="clearfix">

                            <!-- header top dropdowns start -->
                            <!-- ================ -->
                            <div class="header-top-dropdown text-right">

                                <div class="btn-group">

                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation"
                                        aria-labelledby="header-top-drop-2">
                                        <li>
                                            <form class="login-form margin-clear">
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                    <i class="fa fa-user form-control-feedback"></i>
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" placeholder="">
                                                    <i class="fa fa-lock form-control-feedback"></i>
                                                </div>

                                                <ul>
                                                    <li><a href="#">Forgot your password?</a></li>
                                                </ul>
                                                <span class="text-center">Login with</span>
                                                <ul class="social-links circle small colored clearfix">
                                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--  header top dropdowns end -->
                        </div>
                        <!-- header-top-second end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->

        <header class="header fixed fixed-desktop clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-auto hidden-md-down">
                        <!-- header-first start -->
                        <!-- ================ -->
                        <div class="header-first clearfix">

                            <!-- logo -->
                            <div id="logo" class="logo">
                                <a href="index.html"><img id="logo_img"
                                                          src="{{ asset("public/images/logo_light_blue.png") }}"
                                                          alt="The Project"></a>
                            </div>

                            <!-- name-and-slogan -->
                            <div class="site-slogan">
                                Multipurpose HTML5 Template
                            </div>

                        </div>
                        <!-- header-first end -->

                    </div>
                    <div class="col-lg-8 ml-auto">

                        <!-- header-second start -->
                        <!-- ================ -->
                        <div class="header-second clearfix">

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
                                            <a href="index.html"><img id="logo-img-mobile"
                                                                      src="{{ asset("public/images/logo_light_blue.png") }}"
                                                                      alt="The Project"></a>
                                        </div>

                                        <!-- name-and-slogan -->
                                        <div class="site-slogan">
                                            Multipurpose HTML5 Template
                                        </div>

                                    </div>

                                    <!-- header dropdown buttons -->
                                    <div class="header-dropdown-buttons hidden-lg-up p-0 ml-auto mr-3">
                                        <div class="btn-group">
                                            <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret"
                                                    id="header-drop-3" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class="fa fa-search"></i></button>
                                            <ul class="dropdown-menu dropdown-menu-right dropdown-animation"
                                                aria-labelledby="header-drop-3">
                                                <li>
                                                    <form role="search" class="search-box margin-clear">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Search">
                                                            <i class="fa fa-search form-control-feedback"></i>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret"
                                                    id="header-drop-4" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class="fa fa-shopping-basket"></i><span
                                                        class="cart-count default-bg">8</span></button>
                                            <ul class="dropdown-menu dropdown-menu-right cart dropdown-animation"
                                                aria-labelledby="header-drop-4">
                                                <li>
                                                    <table class="table table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th class="quantity">QTY</th>
                                                            <th class="product">Product</th>
                                                            <th class="amount">Subtotal</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="quantity">2 x</td>
                                                            <td class="product"><a href="shop-product.html">Android 4.4
                                                                    Smartphone</a><span
                                                                        class="small">4.7" Dual Core 1GB</span></td>
                                                            <td class="amount">$199.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="quantity">3 x</td>
                                                            <td class="product"><a href="shop-product.html">Android 4.2
                                                                    Tablet</a><span
                                                                        class="small">7.3" Quad Core 2GB</span></td>
                                                            <td class="amount">$299.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="quantity">3 x</td>
                                                            <td class="product"><a href="shop-product.html">Desktop
                                                                    PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span>
                                                            </td>
                                                            <td class="amount">$1499.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="total-quantity" colspan="2">Total 8 Items</td>
                                                            <td class="total-amount">$1997.00</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="panel-body text-right">
                                                        <a href="shop-cart.html" class="btn btn-group btn-gray btn-sm">View
                                                            Cart</a>
                                                        <a href="shop-checkout.html"
                                                           class="btn btn-group btn-gray btn-sm">Checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- header dropdown buttons end -->

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
        </header>
        <!-- header end -->
    </div>
    <!-- header-container end -->

    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i><a class="link-dark"
                                                                              href="index.html">Домой</a></li>
                <li class="breadcrumb-item active">{{ ucfirst($view) }}</li>
            </ol>
        </div>
    </div>

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
                        <div class="col-lg-3">
                            <div class="footer-content">
                                <div class="logo-footer"><img id="logo-footer"
                                                              src="{{"public/images/logo_light_blue.png"}}" alt="">
                                </div>
                                <p>{{ str_limit($page->footer_text,250) }}<a href="{{ $page->route }}">Читать больше<i class="fa fa-long-arrow-right pl-1"></i></a></p>
                                <div class="separator-2"></div>

                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-content">
                                <h2 class="title">Latest From Blog</h2>
                                <div class="separator-2"></div>
                                <div class="media margin-clear">
                                    <div class="d-flex pr-2">
                                        <div class="overlay-container">
                                            <img class="media-object" src="public/images/blog-thumb-1.jpg"
                                                 alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i
                                                        class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit
                                                amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 23, 2017
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media margin-clear">
                                    <div class="d-flex pr-2">
                                        <div class="overlay-container">
                                            <img class="media-object" src="public/images/blog-thumb-2.jpg"
                                                 alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i
                                                        class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="public/blog-post.html">Lorem ipsum dolor sit
                                                amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 22, 2017
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media margin-clear">
                                    <div class="d-flex pr-2">
                                        <div class="overlay-container">
                                            <img class="media-object" src="public/images/blog-thumb-3.jpg"
                                                 alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i
                                                        class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="public/blog-post.html">Lorem ipsum dolor sit
                                                amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 21, 2017
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media margin-clear">
                                    <div class="d-flex pr-2">
                                        <div class="overlay-container">
                                            <img class="media-object" src="public/images/blog-thumb-4.jpg"
                                                 alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i
                                                        class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit
                                                amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i>Mar 21, 2017
                                        </p>
                                    </div>
                                </div>
                                <div class="text-right space-top">
                                    <a href="blog-large-image-right-sidebar.html" class="link-dark"><i
                                                class="fa fa-plus-circle pl-1 pr-1"></i>More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-content">
                                <h2 class="title">Portfolio Gallery</h2>
                                <div class="separator-2"></div>
                                <div class="row grid-space-10">
                                    <div class="col-4 col-lg-6">
                                        <div class="overlay-container mb-10">
                                            <img src="public/images/gallery-1.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-6">
                                        <div class="overlay-container mb-10">
                                            <img src="public/images/gallery-2.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-6">
                                        <div class="overlay-container mb-10">
                                            <img src="public/images/gallery-3.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-6">
                                        <div class="overlay-container mb-10">
                                            <img src="public/images/gallery-4.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-6">
                                        <div class="overlay-container mb-10">
                                            <img src="public/images/gallery-5.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-6">
                                        <div class="overlay-container mb-10">
                                            <img src="public/images/gallery-6.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right space-top">
                                    <a href="portfolio-grid-2-3-col.html" class="link-dark"><i
                                                class="fa fa-plus-circle pl-1 pr-1"></i>More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-content">
                                <h2 class="title">Find Us</h2>
                                <div class="separator-2"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio voluptatem
                                    necessitatibus illo vel dolorum soluta.</p>
                                <ul class="social-links circle animated-effect-1">
                                    <li class="linkedin"><a href="{{ $contact->linkedin_link }}"><i
                                                    class="fa fa-linkedin" title="linkedin"></i></a></li>
                                    <li class="googleplus"><a href="{{ $contact->google_link }}"><i
                                                    class="fa fa-google-plus" title="google"></i></a></li>
                                    <li class="youtube"><a href="{{ $contact->youtube_link }}"><i class="fa fa-youtube"
                                                                                                  title="youtube"></i></a>
                                    </li>
                                    <li class="email"><a href="{{ $contact->email }}"><i class="fa fa-at"
                                                                                         title="email"></i></a></li>
                                    <li class="fax"><a href="{{ $contact->fax }}"><i class="fa fa-fax" title="fax"></i></a>
                                    </li>
                                    <li class="facebook-f"><a href="{{ $contact->fb_link }}"><i class="fa fa-facebook-f"
                                                                                                title="facebook"></i></a>
                                    </li>
                                    <li class="instagram"><a href="{{ $contact->instagram }}"><i class="fa fa-instagram"
                                                                                                 title="instagram"></i></a>
                                    </li>

                                </ul>
                                <div class="separator-2"></div>
                                <ul class="list-icons">
                                    <li><i class="fa fa-map-marker pr-2 text-default"></i> {{ $contact->address }}</li>
                                    <li><i class="fa fa-phone pr-2 text-default"></i> {{ $contact->phone1 }}</li>
                                    <li><a href="mailto:email@domain.com"><i
                                                    class="fa fa-envelope-o pr-2"></i>{{ $contact->email_contact }}</a>
                                    </li>
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
                            <p class="text-center">Copyright © 2018 Все права защищены</p>
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
<!-- Initialization of Plugins -->
<script src="{{ asset("public/js/site/template.js") }}"></script>
<!-- Custom Scripts -->
<script src="{{ asset("public/js/site/custom.js") }}"></script>

@yield("js")

</body>
</html>
