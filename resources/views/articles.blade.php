@extends("layouts.app")
@section("content")

    <section class="main-container">





        <div class="container">

            <h2 class="text-center">{{ $page->title }}</h2>
            <p class="text-center">{{ $page->text }}</p>

            <div class="row">

                    <div class="separator-2"></div>
                    <!-- page-title end -->
                    <div class="image-box team-member style-3-b">
                        @foreach($articles_paginate as $article)
                        <div class="row" style="margin-top:30px;">

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="overlay-container overlay-visible">
                                    <img src="{{ asset("public/img/articles/". $article->image) }}" alt="">
                                    <a href="{{ asset("public/img/articles/". $article->image) }}" class="popup-img overlay-link" title="Просмотр заставки"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-6">
                                <div class="body">
                                    <h3 class="title margin-clear">{{ $article->title }}</h3>
                                    <div class="separator-2 mt-10"></div>
                                <p style="overflow: hidden">{{ str_limit($article->text,120) }}</p>
                                    <br>
                                    <a href="{{ url("novosti/". $article->route) }}" class="btn btn-default">Читать больше</a>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>

            <div>
                {{ $articles_paginate->links() }}
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

