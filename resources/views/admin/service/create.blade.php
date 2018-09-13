@extends("admin.layouts.app")
@section("content")
<div id="content">


    <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <h1 class="page-title txt-color-blueDark">

                <i class="fa-fw fa fa-pencil-square-o"></i>
                Forms
                <span>>
				Form Layouts
			</span>
            </h1>
        </div>
    </div>

    <div class="alert alert-block alert-success">
        <a class="close" data-dismiss="alert" href="#">×</a>
        <h4 class="alert-heading"><i class="fa fa-check-square-o"></i>Предупреждения</h4>
        <p>
            Заполните все данные корректно, перед тем как отправить.
        </p>
    </div>

    <!-- widget grid -->
    <section id="widget-grid" class="">


        <div class="row">


            <article class="col-sm-12 col-md-12 col-lg-6">


                <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">

                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                        <h2>Добавления услуг</h2>

                    </header>
                    <div>

                        <div class="widget-body no-padding">

                            <form id="checkout-form" class="smart-form" method="post">

                                {{ csrf_field() }}

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                                <input type="text" name="title" placeholder="Заголовок">
                                            </label>
                                        </section>
                                    </div>
                                    <section>
                                        <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                                            <textarea rows="5" name="text" placeholder="Описание"></textarea>
                                        </label>
                                    </section>

                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                                <input name="footer_text" placeholder="footer">
                                            </label>
                                        </section>
                                </fieldset>

                                <fieldset>
                                    <h3 class="text-center">Дополнительно</h3>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input">
                                                <input type="text" name="tag_title" placeholder="tag_title">
                                            </label>
                                        </section>
                                    </div>
                                    <div class="row">
                                        <section class="col col-6">
                                            <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                                <input name="tag_description" placeholder="tag_description">
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
@endsection