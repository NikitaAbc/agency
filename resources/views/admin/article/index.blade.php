@extends("admin.layouts.app")
@section("content")
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <h2 class="text-center bg-success" >{{ session('success')  }} </h2>


        <!-- MAIN CONTENT -->


            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                    <h1 class="page-title txt-color-blueDark">
                        <!-- PAGE HEADER -->
                        <i class="fa-fw fa fa-home"></i> App Views <span>>
								Blog </span>
                    </h1>
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

            <div class="row">

                <div class="col-sm-9">

                    <div class="well padding-10" >

                        @forelse($articles as $article)
                        <div class="row" id="article">
                            <div class="col-md-4" >
                                <img src="img/superbox/superbox-full-15.jpg" class="img-responsive" alt="img">
                                <ul class="list-inline padding-10">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        <a href="javascript:void(0);"> Дата </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-comments"></i>
                                        <a href="javascript:void(0);"> 38 Comments </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-8 padding-left-0" id="action">
                                <h3 class="margin-top-0" id="title"><a href="{{ route("admin.articles.show",$article->route) }}"> {{ $article->title }}</a><br></h3>
                                <p style="overflow: hidden;">
                                    {{ str_limit($article->text,230) }}
                                </p>
                                <a class="btn btn-warning" href="{{ route("admin.articles.show",$article->route) }}"> Редактировать </a>
                                <a class="btn btn-danger" id="delete"> Удалить </a>
                            </div>
                        </div>
                        <hr>
                            @empty
                            <h3 class="text-center">На данный момент список статей пуст.</h3>
                        @endforelse

                    </div>

                    <div class="col-lg-8 col-lg-push-2" style="margin-top:50px;">

                        {{ $articles->links() }}
                    </div>
                </div>

                <div class="col-sm-3">
                    <h2 class="text-center"><a href="{{ route("admin.articles.create") }}">Добавить статью</a></h2>
                    <div class="well padding-10">
                        <h5 class="margin-top-0"><i class="fa fa-search"></i> Blog Search...</h5>
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<i class="fa fa-search"></i>
									</button> </span>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /well -->

                    <!-- /well -->
                    <div class="well padding-10">
                        <h3 class="margin-top-0"><i class="fa fa-thumbs-o-up"></i> Всего статей: {{ $count }}</h3>
                    </div>
                    <!-- /well -->
                    <!-- /well -->
                    <div class="well padding-10">
                        <h5 class="margin-top-0"><i class="fa fa-fire"></i>Последние статьи:</h5>
                        <ul class="no-padding list-unstyled">
                            <li>
                                <a href="javascript:void(0);" class="margin-top-0">WPF vs. Windows Forms-Which is better?</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="padding-top-5 display-block">How to create responsive website with Bootstrap?</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="margin-top-5">The best Joomla! templates 2014</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="margin-top-5">ASP .NET cms list</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="margin-top-5">C# Hello, World! program</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="margin-top-5">Java random generator</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /well -->

                    <!-- /well -->

                    <!-- /well -->

                </div>

            </div>

    <script>
        $("#action #delete").on("click",function () {

            var title = $(this).parents("#article").find("#title");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "articles",
                dataType : 'json',
                type: 'delete',
                data: {
                    "title": title.text(),
                },
                complete: function(){
                    location.reload();
                }
            });
        })
    </script>
        <!-- END MAIN CONTENT -->
@endsection



