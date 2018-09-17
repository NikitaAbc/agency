@extends("layouts.app")
@section("content")
    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-lg-8">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title text-center">{{ $service->title }}</h1>
                    <!-- page-title end -->

                    <!-- blogpost start -->
                    <!-- ================ -->
                    <article class="blogpost full">
                        <header>
                            <div class="post-info mb-4">

                            </div>
                        </header>
                        <div class="blogpost-content">
                            <div>
                                <img src="{{ asset("public/img/services/". "1537147243.jpg") }}" alt="">
                            </div>

                            <p style="overflow: hidden">{{ $service->text }}</p>

                    </article>



                </div>

            </div>
        </div>
    </section>
@endsection