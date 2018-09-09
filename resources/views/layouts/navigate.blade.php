<body class="front-page transparent-header gradient-background-header">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset("public/css/skins/light_blue.css") }}">

<div class="page-wrapper">

    <div class="header-container">

        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-sm-6 col-lg-9">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-sm-down">
                                <li class="twitter"><a href="#"><i class="fab fa-twitter" title="twitter"></i></a></li>
                                <li class="skype"><a href="#"><i class="fab fa-skype" title="skype"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fab fa-linkedin" title="linkedin"></i></a></li>
                                <li class="googleplus"><a href="#"><i class="fab fa-google-plus" title="google-plus"></i></a></li>
                                <li class="youtube"><a href="#"><i class="fab fa-youtube" title="youtube"></i></a></li>
                                <li class="email"><a href="#"><i class="fas fa-mail-bulk" title="email"></i></a></li>
                                <li class="instagram"><a href="#"><i class="fas fa-fax" title="fax"></i></a></li>
                                <li class="facebook-f"><a href="#"><i class="fab fa-facebook-f" title="facebook"></i></a></li>
                                <li class="instagram"><a href="#"><i class="fab fa-instagram" title="instagram"></i></a></li>
                            </ul>
                            <ul class="list-inline hidden-md-down">
                                <li class="list-inline-item"><i class="fa fa-map-marker pr-1 pl-2"></i>Adress</li>
                                <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-2"></i>Телефон1</li>
                                <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-2"></i>Телефон2</li>
                                <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-2"></i>Телефон3</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

<div class="page-wrapper">

    <div class="header-container">

        <header class="header dark fixed fixed-all clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-auto hidden-md-down pl-3">
                        <!-- header-first start -->
                        <!-- ================ -->
                        <div class="header-first clearfix">

                            <!-- logo -->
                            <div id="logo" class="logo">
                                <a href="template/index.html"><img id="logo_img"  alt="The Project"></a>
                            </div>

                            <!-- name-and-slogan -->
                            <div class="site-slogan">
                                Какой-то текст
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-7 col-xl-8 ml-auto">
                        <div class="header-second clearfix">
                            <div class="main-navigation  animated">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">
                                    <div class="navbar-brand clearfix hidden-lg-up">

                                        <!-- logo -->
                                        <div id="logo-mobile" class="logo">
                                            <a href="index.html"><img id="logo-img-mobile"  alt="The Project"></a>
                                        </div>


                                    </div>
                                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse scrollspy" id="navbar-collapse-1">
                                        <!-- main-menu -->
                                        <ul class="navbar-nav ml-lg-auto">
                                            @foreach($pages as $page)
                                            <li class="nav-item"><a href="{{ $page->route ?: url("/") }}" class="nav-link smooth-scroll">{{ $page->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
</body>


<style>
    header.header .btn {
        color: #ffffff;
    }
    .fixed-header-on header.header .btn {
        margin-top: 5px !important;
    }
    .list-style-icons .nav-item {
        font-size: 16px;
        padding: 1px 0;
        font-weight: 300;
    }
    .footer .list-style-icons .nav-item {
        color: #dddddd;
    }
</style>


