@extends("layouts.app")
@section("content")

    <!-- breadcrumb end -->

    <div class="banner dark-translucent-bg" style="background-image:url('images/page-services-banner.jpg'); background-position: 50% 32%;">
        <!-- breadcrumb start -->
        <!-- ================ -->

        <!-- breadcrumb end -->
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-lg-8 text-center pv-20">
                    <h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">{{ $page->title }}</h2>
                    <div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
                    <p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">{{ $page->text }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container padding-bottom-clear">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-12">

                    <div class="row">
                        @foreach($services as $service)
                        <div class="col-lg-4 col-md-6">
                            <div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                                <span class="icon large default-bg circle"><img src="{{ asset("public/img/services/". $service->image) }}"></span>
                                <h3>{{ $service->title }}</h3>
                                <div class="separator clearfix"></div>
                                <p class="text-muted">{{ str_limit($service->text,80) }}</p>
                                <a href="{{ url("uslugi/". $service->route) }}">Читать больше<i class="pl-1 fa fa-angle-double-right"></i></a>
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

@endsection

@section("js")

@endsection

@section("css")

@endsection

