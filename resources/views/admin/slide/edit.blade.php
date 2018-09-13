@extends("admin.layouts.app")
<head>
    <title>
        Редактирование
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
@section("content")

    <style type="text/css">
        /* Apply these styles only when #preview-pane has
         been placed within the Jcrop widget */
        .jcrop-holder #preview-pane {
            display: block;
            position: absolute;
            z-index: 200;
            right: -280px;
            padding: 3px;
            border: 1px rgba(0, 0, 0, .4) solid;
            background-color: white;
            -webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.1);
            box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.1);
        }

        /* The Javascript code will set the aspect ratio of the crop
         area based on the size of the thumbnail preview,
         specified here */
        #preview-pane .preview-container {
            width: 250px;
            height: 170px;
            overflow: hidden;
        }

        .optdual {
            position: relative;
        }

        .optdual .offset {
            position: absolute;
            left: 18em;
        }

        .optlist label {
            width: 16em;
            display: block;
        }

        #dl_links {
            margin-top: .5em;
        }

    </style>

    <div id="main" role="main">


        <!-- MAIN CONTENT -->
        <div id="content">
            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i
                                class="fa-fw fa fa-pencil-square-o"></i> Forms <span>>
							Image Editor </span></h1>
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

            <!--
            The ID "widget-grid" will start to initialize all widgets below
            You do not need to use widgets if you dont want to. Simply remove
            the <section></section> and you can use wells or panels instead
            -->

            <!-- widget grid -->
            <section id="widget-grid" class="">

                <!-- row -->
                <div class="row">

                    <!-- NEW WIDGET START -->
                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="alert alert-danger hidden-lg hidden-md hidden-sm">
                            <b>Please note:</b>
                            This plugin is non-responsive
                        </div>

                        <!-- Widget ID (each widget will need unique ID)-->


                        <div class="jarviswidget jarviswidget-sortable" id="wid-id-0"
                             data-widget-togglebutton="false" data-widget-editbutton="false"
                             data-widget-fullscreenbutton="false" data-widget-colorbutton="false"
                             data-widget-deletebutton="false" role="widget" style="">

                            <div role="content">

                                <div class="widget-body">

                                    <div id="myTabContent" class="tab-content">

                                        <div id="s1">

                                            <h4 class="margin-bottom-10">API Interface — real-time API example</h4>

                                            <div class="alert alert-info">
                                                <b>Experimental shader active.</b>
                                                Jcrop now includes a shading mode that facilitates building
                                                better transparent Jcrop instances. The experimental shader is less
                                                robust than Jcrop's default shading method and should only be
                                                used if you require this functionality.
                                                <br>
                                                View jcrop's documentation by going to: <a
                                                        href="http://deepliquid.com/content/Jcrop.html"
                                                        target="_blank">http://deepliquid.com/content/Jcrop.html</a>
                                            </div>

                                            <img src="{{ asset("public/img/temp/" . $file) }}" id="target-5"
                                                 class="pull-left"/>

                                            <div class="pull-left padding-gutter padding-top-0 padding-bottom-0 jcrop-api-tabs-options">

                                                <fieldset class="optdual requiresjcrop">

                                                    <div class="optlist offset">
                                                        <label class="margin-top-0">
                                                            <input type="checkbox" class="checkbox style-0"
                                                                   id="ar_lock">
                                                            <span>Aspect ratio</span>
                                                        </label>

                                                    </div>


                                                </fieldset>

                                            </div>
                                        </div>
                                        <fieldset>
                                            <form method="post" action="store">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $file }}" name="file_name">

                                                <input type="hidden" id="x1" name="x1">
                                                <input type="hidden" id="x2" name="x2" >
                                                <input type="hidden" id="y1" name="y1">
                                                <input type="hidden" id="y2" name="y2">
                                                <input type="hidden" id="{{ $id }}" name="slide_id">


                                                <button type="submit" class="btn btn-primary" id="send">
                                                    Отправить
                                                </button>
                                            </form>
                                        </fieldset>


                                    </div>


                                </div>

                            </div>

                        </div>

                    </article>


                </div>

            </section>
        </div>


    </div>



    <script>

        $(document).ready(function () {


            initJcrop();
            var wk = $('#target-5').get(0).naturalWidth / $('#target-5').width();
            var hk = $('#target-5').get(0).naturalHeight / $('#target-5').height();

            var jcrop_api;

            function initJcrop() {
                $('#target-5').Jcrop({
                    onChange: showCoords,
                    onSelect: showCoords,
                    onRelease: releaseCheck
                }, function () {
                    jcrop_api = this;
                    jcrop_api.animateTo([100, 100, 400, 300]);
                    jcrop_api.setOptions({aspectRatio: 21 / 10});
                //jcrop_api.focus();
                });
            }


            function getRandom() {
                var dim = jcrop_api.getBounds();


                return [
                    Math.round(Math.random() * dim[0]),
                    Math.round(Math.random() * dim[1]),
                    Math.round(Math.random() * dim[0]),
                    Math.round(Math.random() * dim[1])
                ];
            };


            function releaseCheck() {
                jcrop_api.setOptions({allowSelect: true});
            }

            function showCoords(c) {
                $('#x1').val(Math.round(c.x * wk));
                $('#y1').val(Math.round(c.y * hk));
                $('#x2').val(Math.round(c.x2 * wk));
                $('#y2').val(Math.round(c.y2 * hk));
            }


        });

    </script>

@endsection