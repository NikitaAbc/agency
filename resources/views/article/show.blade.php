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
                    <h1 class="page-title text-center">{{ $article->title }}</h1>
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
                                            <img src="{{ asset("public/img/articles/". $article->img) }}" alt="">
                                        </div>

                            <p style="overflow: hidden">{{ $article->text }}</p>

                    </article>
                    <!-- blogpost end -->


                </div>
                <!-- main end -->

                <!-- sidebar start -->
                <!-- ================ -->
                <aside class="col-lg-4 col-xl-3 ml-xl-auto">
                    <div class="sidebar">
                        <div class="block clearfix">
                            <h3 class="title">Другие новости</h3>
                            @foreach($articles as $otherArticle)

                             @if($article->title != $otherArticle->title)
                            <div class="separator-2"></div>
                            <div class="media margin-clear">
                                <div class="d-flex pr-2">
                                    <div class="overlay-container">
                                        <img class="media-object" src="{{ asset("public/img/articles/" . $otherArticle->image) }}" alt="blog-thumb">
                                    </div>
                                </div>
                                <div class="media-body">

                                    <h6 class="media-heading"><a href="{{ url("novosti/".$otherArticle->route) }}">{{ $otherArticle->title }}</a></h6>

                                </div>
                            </div>
                            <hr>
                                @endif
                            @endforeach

                        </div>

                    </div>
                </aside>
                <!-- sidebar end -->

            </div>
        </div>
    </section>
@endsection