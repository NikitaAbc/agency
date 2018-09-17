@extends("admin.layouts.app")
@section("content")
    <div id="main" role="main">
    <div id="content">


        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <h1 class="page-title txt-color-blueDark">

                    <!-- PAGE HEADER -->
                    <i class="fa-fw fa fa-pencil-square-o"></i>
                    <a href="{{ route("admin.services.index") }}" class="btn btn-default">Услуги</a>
                    <span>>
				Редактирование
			</span>
                </h1>
            </div>
        </div>


        <!-- widget grid -->
        <section id="widget-grid" class="">

            <div class="row">


                <article class="col-sm-12 col-md-12 col-lg-6">


                    <div class="jarviswidget " id="wid-id-0"  data-widget-editbutton="false" data-widget-custombutton="false">

                        <div>

                            <div class="widget-body no-padding">
                                <form id="checkout-form" class="smart-form" method="post">

                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="PUT">

                                    <fieldset>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="input">Заголовок
                                                    <input type="text" name="title" value="{{ $service->title }}">
                                                </label>
                                            </section>
                                        </div>
                                        <section>
                                            <label class="textarea">Описание
                                                <textarea rows="5" name="text" >{{ $service->text }}</textarea>
                                            </label>
                                        </section>

                                            <section>
                                                <label class="textarea">Низ страницы
                                                    <textarea rows="5" name="text">{{ $service->footer_text }}</textarea>
                                                </label>
                                            </section>
                                    </fieldset>

                                    <fieldset>
                                        <h3 class="text-center">Дополнительно</h3>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="input">Tag title
                                                    <input type="text" name="tag_title" value="{{ $service->tag_title }}">
                                                </label>
                                            </section>
                                        </div>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="input">Tag description
                                                    <input name="tag_description" value="{{ $service->tag_description }}">
                                                </label>
                                            </section>
                                    </fieldset>


                                    <footer>
                                        <button type="submit" class="btn btn-primary">
                                            Отправить
                                        </button>
                                    </footer>
                                </form>

                            </div>


                        </div>


                    </div>


                </article>

            </div>

        </section>


    </div>
    </div>


@endsection