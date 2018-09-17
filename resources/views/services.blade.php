@extends("layouts.app")
@section("content")

    <!-- breadcrumb end -->

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container padding-bottom-clear">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-12">
                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title text-center">Наши <strong>Услуги</strong></h1>
                    <div class="separator"></div>
                    <br>
                    <!-- page-title end -->

                    <div class="row">
                        @foreach($services as $service)
                        <div class="col-md-4">
                            <div class="image-box style-2 mb-20">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/service-1.jpg" alt="">
                                    <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                                    <div class="overlay-bottom hidden-sm-down">
                                        <div class="text">
                                            <p class="lead margin-clear text-left">{{ $service->title }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="body padding-horizontal-clear">
                                    <p>{{ $service->text }}</p>
                                    <a class="link-dark" href="{{ $service->route }}">Перейти<i class="pl-1 fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="video-background-banner pv-40 dark-translucent-bg">

        <div class="video-background-poster" style="background-image: url('videos/video-banner-poster.jpg');"></div>
        <video autoplay loop muted style="top:auto; bottom: -130px; left: 0;" poster="videos/video-banner-poster.jpg">
            <source src="videos/background-video-banner.mp4" type="video/mp4">
            <source src="videos/background-video-banner.webm" type="video/webm">
        </video>

        <div class="container">
            <div class="call-to-action text-center">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-8">
                        <h2 class="title">Subscribe Now</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
                        <div class="separator"></div>
                        <form class="form-inline margin-clear d-flex justify-content-center">
                            <div class="form-group has-feedback">
                                <label class="sr-only" for="subscribe3">Email address</label>
                                <input type="email" class="form-control form-control-lg" id="subscribe3" placeholder="Enter email" required="">
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                            <button type="submit" class="btn btn-lg btn-gray-transparent btn-animated margin-clear ml-3">Submit <i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <section class="clearfix pv-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center mt-4">The <strong>Process</strong> We Follow</h3>
                    <div class="separator"></div>
                    <!-- pills start -->
                    <!-- ================ -->
                    <div class="process">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item"><a class="nav-link active" href="#pill-pr-1" role="tab" data-toggle="tab" title="Step 1"><i class="fa fa-dot-circle-o pr-1"></i> Step 1</a></li>
                            <li class="nav-item"><a class="nav-link" href="#pill-pr-2" role="tab" data-toggle="tab" title="Step 2"><i class="fa fa-dot-circle-o pr-1"></i> Step 2</a></li>
                            <li class="nav-item"><a class="nav-link" href="#pill-pr-3" role="tab" data-toggle="tab" title="Step 3"><i class="fa fa-dot-circle-o pr-1"></i> Step 3</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content clear-style">
                            <div class="tab-pane active" id="pill-pr-1">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="title">Consectetur adipisicing elit</h4>
                                        <p>Ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea sit enim sint deleniti saepe esse nisi nesciunt fuga eaque dicta tenetur, cupiditate illo, consequuntur unde dolores quis dolore rem ex asperiores error. Labore saepe beatae harum quod fuga ipsam! Iusto earum iste similique, quam esse rerum, quae atque inventore consequuntur voluptatum amet deserunt mollitia? Tempore fugit, cumque dolor eaque doloremque iusto nostrum excepturi unde! Similique ipsum fugit eius laboriosam nihil quos, quia et! Earum iure, sapiente. Molestiae unde earum fugiat voluptate incidunt.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repellendus autem corporis obcaecati, laboriosam ipsam ea, alias saepe libero ab consequuntur.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="overlay-container">
                                            <img src="images/page-about-2.jpg" alt="">
                                            <a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="pill-pr-2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img class="mb-4 mb-lg-0" src="images/section-image-3.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6">
                                        <h3 class="title">Lorem ipsum dolor sit amet</h3>
                                        <p>Ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea sit enim sint deleniti saepe esse nisi nesciunt fuga eaque dicta tenetur, cupiditate illo, consequuntur unde dolores quis dolore rem ex asperiores error. Labore saepe beatae harum quod fuga ipsam! Iusto earum iste similique, quam esse rerum, quae atque inventore consequuntur voluptatum amet deserunt mollitia? Tempore fugit, cumque dolor eaque doloremque iusto nostrum excepturi unde! Similique ipsum fugit eius laboriosam nihil quos, quia et! Earum iure, sapiente. Molestiae unde earum fugiat voluptate incidunt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="pill-pr-3">
                                <p>Consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
                                <p>Ipsum dolor sit amet, consectetur adipisicing elit. Debitis eaque nihil obcaecati minus perferendis officiis cumque nesciunt quae dolorem ad tenetur voluptate blanditiis labore libero id veritatis similique facere, fugiat soluta omnis minima? Iusto optio hic a reiciendis, inventore numquam impedit quaerat deserunt, voluptatum illum in magni, aspernatur corporis mollitia nam? Ipsum, cumque facilis recusandae commodi dolorum sequi quis possimus, aut, ab incidunt dolorem perferendis rerum tenetur. Labore exercitationem magni perspiciatis laborum, aliquam officia molestias obcaecati, voluptatum quidem eum iure aut, officiis dicta cupiditate ab, sit aliquid. Corporis ducimus ab commodi officia? Inventore suscipit saepe dolorem vitae aperiam autem, iusto id, enim assumenda modi a voluptate aliquam molestiae quidem sapiente, obcaecati recusandae. Magni repellat dignissimos sint iste dolorem maxime accusantium quas repellendus quam ipsa, sapiente, beatae enim ab ex. Optio eveniet necessitatibus, tempora dolor eaque saepe, ipsam vero at officiis cumque, maxime consequuntur in ea, voluptate quae nesciunt hic delectus.</p>
                            </div>
                        </div>
                    </div>
                    <!-- pills end -->

                    <!-- pricing tables start -->
                    <!-- ================ -->
                    <div class="pricing-tables stripped object-non-visible" data-animation-effect="fadeInUpSmall"  data-effect-delay="100">
                        <div class="row grid-space-0">
                            <!-- pricing table start -->
                            <!-- ================ -->
                            <div class="col-md-3 plan stripped">
                                <div class="header dark-bg">
                                    <h3>Basic</h3>
                                    <div class="price"><span>Free</span></div>
                                </div>
                                <ul>
                                    <li>Pricing table item</li>
                                    <li>
                                        <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="15GB Storage" data-trigger="hover">Pricing table item</a>
                                    </li>
                                    <li>
                                        <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="15 Email Acounts">Pricing table item</a>
                                    </li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li><a href="#" class="btn btn-dark btn-animated">Subscribe <i class="fa fa-user"></i></a></li>
                                </ul>
                            </div>
                            <!-- pricing table end -->

                            <!-- pricing table start -->
                            <div class="col-md-3 plan stripped">
                                <div class="header dark-bg">
                                    <h3>Premium</h3>
                                    <div class="price"><span>$19.99</span>/m.</div>
                                </div>
                                <ul>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>
                                        <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Pricing table item">Pricing table item</a>
                                    </li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li><a href="#" class="btn btn-dark btn-animated">Add to cart <i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <!-- pricing table end -->

                            <!-- pricing table start -->
                            <!-- ================ -->
                            <div class="col-md-3 plan stripped best-value">
                                <div class="header default-bg">
                                    <h3>Pro</h3>
                                    <div class="price"><span>$24.99</span>/m.</div>
                                </div>
                                <ul>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>
                                        <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Pricing table item">Pricing table item</a>
                                    </li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li><a href="#" class="btn btn-default btn-animated">Add to cart <i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <!-- pricing table end -->

                            <!-- pricing table start -->
                            <!-- ================ -->
                            <div class="col-md-3 plan">
                                <div class="header dark-bg">
                                    <h3>Ultimate</h3>
                                    <div class="price"><span>$45.99</span>/m.</div>
                                </div>
                                <ul>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li>
                                        <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Pricing table item">Pricing table item</a>
                                    </li>
                                    <li>Pricing table item</li>
                                    <li>Pricing table item</li>
                                    <li><a href="#" class="btn btn-dark btn-animated">Add to cart <i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <!-- pricing table end -->

                        </div>
                    </div>
                    <!-- pricing tables end -->

                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- footer top start -->
    <!-- ================ -->
    <div class="dark-bg default-hovered footer-top animated-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="mt-4">Powerful Bootstrap Template</h2>
                                <h2 class="mt-4">Waste no more time</h2>
                            </div>
                            <div class="col-md-4">
                                <p class="mt-3"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent">Purchase<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("js")

@endsection

@section("css")

@endsection

