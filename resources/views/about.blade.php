@extends("layouts.app")
@section("content")

    <!-- banner end -->

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container">
        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-12">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title">{{ $page->title }}</h1>
                    <div class="separator-2 mb-20"></div>
                    <!-- page-title end -->
                    <div class="row">
                        <div class="col-lg-6">
                            <p>{{ $page->text }}</p>
                        </div>

                        <!-- sidebar start -->
                        <!-- ================ -->
                        <aside class="sidebar col-lg-6">
                            <div class="block clearfix">
                                <div class="overlay-container">
                                    <img src="https://syndicat.com.ua/wp-content/uploads/2016/09/security2-660x350.jpg" alt="">

                                </div>
                            </div>
                        </aside>
                        <!-- sidebar end -->
                    </div>
                </div>
                <!-- main end -->

            </div>
        </div>
    </section>
@endsection

@section("js")

@endsection

@section("css")

@endsection

