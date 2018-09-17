@extends("admin.layouts.app")

@section("content")



    @if(session("success"))
        <div class="alert alert-success no-margin">
            <button class="close" data-dismiss="alert">
                ×
            </button>
            <div class="text-center">{{ session("success") }}</div>
        </div>
    @endif




    <div id="content">


        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">

                    <!-- PAGE HEADER -->
                    <i class="fa-fw fa fa-pencil-square-o"></i>
                    <a class="btn btn-default">Статьи</a>
                </h1>
            </div>
        </div>

        <section id="widget-grid" class="">

            <!-- row -->
            <h2 class="text-right"><a href="{{ route("admin.articles.create") }}">Добавить статью</a></h2>

            <h3>Всего статей: {{ $count }}</h3>

            <div class="row">

                @forelse($articles as $article)
                    <div class="col-sm-6 col-md-6 col-lg-4 article" rel="{{ $article->id }}">
                        <div class="product-content product-wrap clearfix">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <div class="product-image">
                                        <img src="{{ asset("public/img/articles/" . $article->image) }}" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="product-deatil">
                                        <h5>
                                            <a href="#" class="title">
                                                {{ $article->title }}
                                            </a>
                                        </h5>
                                        <span class="tag1"></span>
                                    </div>
                                    <div class="description" style="overflow: hidden">
                                        <p> {{ str_limit($article->text,230) }} </p>
                                    </div>
                                </div>
                                <div class="action">
                                    <a class="btn btn-warning tex" href="{{ route("admin.articles.show",$article->route) }}"> Редактировать </a>
                                    <a class="btn btn-danger delete"> Удалить </a>
                                </div>
                            </div>
                        </div>

                        <!-- end product -->
                    </div>

                @empty
                    <h4>На данный момент список статей пуст.</h4>
                @endforelse


                <div class="col-sm-12">
                    {{ $articles->links() }}
                </div>

            </div>

        </section>
    </div>


    <script>
        $(".action .delete").on("click", function () {

            var id = $(this).parents(".article").attr("rel");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "articles",
                dataType: 'json',
                type: 'delete',
                data: {
                    "id": id,
                },
                complete: function () {
                    location.reload();
                }
            });

        });
    </script>

@endsection



