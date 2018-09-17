@extends("admin/layouts.app")
@section("content")



            <h3 class="page-title txt-color-blueDark">

                <i class="fa-fw fa fa-pencil-square-o"></i>
                <a href="{{ route("admin.articles.index") }}" class="btn btn-default">Статьи</a>
                <span>>
				Редактирование
			</span>
            </h3>



    <div id="main" role="main">

        <div id="content">

            <section id="widget-grid" class="">

                <!-- row -->
                <div class="row">

                    <div class="col-sm-6">

                        <div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false"	data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-sortable="false">

                            <header>
                                <h2>Редактировать статью</h2>
                            </header>

                            <!-- widget div-->

                            <div>
                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox">
                                    <!-- This area used as dropdown edit box -->
                                    <input class="form-control" type="text">
                                </div>
                                <!-- end widget edit box -->

                                <!-- widget content -->
                                <div class="widget-body">

                                    <form id="movieForm" method="post" enctype="multipart/form-data">

                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="PUT">

                                        <fieldset>
                                            <legend>
                                                Редактировать статью
                                            </legend>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="control-label">Заголовок</label>
                                                        <input type="text" class="form-control" name="title" value="{{ $article->title }}" required autofocus/>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="text-center">
                                            <label>Изменить картинку.</label>
                                            <input type="file" name="image">
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-group">
                                                <label class="control-label">Описание</label>
                                                <textarea class="form-control" name="text" rows="8" required>{{ $article->text }}</textarea>
                                            </div>
                                        </fieldset>


                                        <fieldset>
                                            <div class="form-group">
                                                <label class="control-label">Низ страницы</label>
                                                <textarea class="form-control" name="footer_text" rows="8" required>{{ $article->footer_text }}</textarea>
                                            </div>
                                        </fieldset>



                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="btn btn-default" type="submit">
                                                        <i class="fa fa-eye"></i>
                                                        Отправить
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                </div>

                            </div>


                        </div>


                    </div>

                </div>
        </div>

    </div>

@endsection

@section("js")

    <script src="{{ asset("public/js/admin/jquery-validate/jquery.validate.min.js") }}"></script>

    <script>

        $(document).ready(function() {

            pageSetUp();


            $('#movieForm').bootstrapValidator({
                feedbackIcons : {
                    valid : 'glyphicon glyphicon-ok',
                    invalid : 'glyphicon glyphicon-remove',
                    validating : 'glyphicon glyphicon-refresh'
                },
                fields : {
                    title : {
                        group : '.col-md-8',
                        validators : {
                            notEmpty : {
                                message : 'Заголовок не может быть пустым'
                            },
                            stringLength : {
                                max : 60,
                                message : 'Заголовок должен быть больше 60 символов'
                            }
                        }
                    },

                    text : {
                        // The group will be set as default (.form-group)
                        validators : {
                            notEmpty : {
                                message : 'Описание не может быть пустым'
                            },
                            stringLength : {
                                max : 4000,
                                message : 'Слишком длинный текст'
                            }
                        }
                    },

                }
            });

        })

    </script>
@show