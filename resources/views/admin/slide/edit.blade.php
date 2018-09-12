@extends("admin.layouts.app")
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
            border: 1px rgba(0,0,0,.4) solid;
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
                    <h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-pencil-square-o"></i> Forms <span>>
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

                        <div class="jarviswidget jarviswidget-sortable" id="wid-id-0" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" role="widget" style="">

                            <!-- widget div-->
                            <div role="content">
                                <!-- widget edit box -->

                                <div class="widget-body">
                                    <!-- content -->
                                    <div id="myTabContent" class="tab-content">

                                        <!-- new tab: API interface -->
                                        <div id="s1">

                                            <h4 class="margin-bottom-10">API Interface — real-time API example</h4>

                                            <div class="alert alert-info">
                                                <b>Experimental shader active.</b>
                                                Jcrop now includes a shading mode that facilitates building
                                                better transparent Jcrop instances. The experimental shader is less
                                                robust than Jcrop's default shading method and should only be
                                                used if you require this functionality.
                                                <br>
                                                View jcrop's documentation by going to: <a href="http://deepliquid.com/content/Jcrop.html" target="_blank">http://deepliquid.com/content/Jcrop.html</a>
                                            </div>

                                            <img src="{{ asset("public/img/temp/" . $file) }}" id="target-5"  class="pull-left" />

                                            <div class="pull-left padding-gutter padding-top-0 padding-bottom-0 jcrop-api-tabs-options">

                                                <fieldset>

                                                    <legend>
                                                        Option Toggles
                                                    </legend>

                                                    <span class="requiresjcrop">
															<button id="setSelect" class="btn btn-default btn-sm">
																setSelect
															</button>
															<button id="animateTo" class="btn btn-default btn-sm">
																animateTo
															</button>
															<button id="release" class="btn btn-default btn-sm">
																Release
															</button>
															<button id="disable" class="btn btn-default btn-sm">
																Disable
															</button>
														</span>
                                                    <button id="enable" class="btn btn-default btn-sm" style="display:none;">
                                                        Re-Enable
                                                    </button>
                                                    <button id="unhook" class="btn btn-default btn-sm">
                                                        Destroy!
                                                    </button>
                                                    <button id="rehook" class="btn btn-default btn-sm" style="display:none;">
                                                        Attach Jcrop
                                                    </button>
                                                </fieldset>

                                                <fieldset class="optdual requiresjcrop">
                                                    <legend>
                                                        Option Toggles
                                                    </legend>
                                                    <div class="optlist offset">
                                                        <label class="margin-top-0">
                                                            <input type="checkbox" class="checkbox style-0" id="ar_lock">
                                                            <span>Aspect ratio</span>
                                                        </label>

                                                        <label class="">
                                                            <input type="checkbox" class="checkbox style-0" id="size_lock">
                                                            <span>minSize/maxSize setting</span>
                                                        </label>
                                                    </div>
                                                    <div class="optlist">
                                                        <label class="margin-top-0">
                                                            <input type="checkbox" class="checkbox style-0" id="can_click">
                                                            <span>Allow new selections</span>
                                                        </label>

                                                        <label class="">
                                                            <input type="checkbox" class="checkbox style-0" id="can_move">
                                                            <span>Selection can be moved</span>
                                                        </label>

                                                        <label class="">
                                                            <input type="checkbox" class="checkbox style-0" id="can_size">
                                                            <span>Resizable selection</span>
                                                        </label>

                                                    </div>
                                                </fieldset>

                                            </div>

                                        </div>

                                        <!-- end s6 tab pane -->

                                    </div>

                                    <!-- end content -->
                                </div>

                            </div>
                            <!-- end widget div -->
                        </div>

                    </article>


                </div>



            </section>
        </div>


    </div>



    <script>

        $(document).ready(function() {



            var default_handler = function(){
                $('#target').Jcrop();
            }

            var basic_handler = function() {

                var jcrop_api;


                $('#coords').on('change', 'input', function(e) {
                    var x1 = $('#x1').val(), x2 = $('#x2').val(), y1 = $('#y1').val(), y2 = $('#y2').val();
                    jcrop_api.setSelect([x1, y1, x2, y2]);
                });

                // Simple event handler, called from onChange and onSelect
                // event handlers, as per the Jcrop invocation above
                function showCoords(c) {
                    $('#x1').val(c.x);
                    $('#y1').val(c.y);
                    $('#x2').val(c.x2);
                    $('#y2').val(c.y2);
                    $('#w').val(c.w);
                    $('#h').val(c.h);
                };

                function clearCoords() {
                    $('#coords input').val('');
                };

            };


            // styling_handler
            var styling_handler = function () {
                var api;

                $('#buttonbar').on('click', 'button', function(e) {
                    var $t = $(this), $g = $t.closest('.btn-group');
                    $g.find('button.active').removeClass('active');
                    $t.addClass('active');
                    $g.find('[data-setclass]').each(function() {
                        var $th = $(this), c = $th.data('setclass'), a = $th.hasClass('active');
                        if (a) {
                            switch(c) {

                                case 'jcrop-light':
                                    api.setOptions({
                                        bgColor : 'white',
                                        bgOpacity : 0.5
                                    });
                                    break;

                                case 'jcrop-dark':
                                    api.setOptions({
                                        bgColor : 'black',
                                        bgOpacity : 0.8
                                    });
                                    break;

                                case 'jcrop-normal':
                                    api.setOptions({
                                        bgColor : $.Jcrop.defaults.bgColor,
                                        bgOpacity : $.Jcrop.defaults.bgOpacity
                                    });
                                    break;
                            }
                        }

                    });
                });

            };
            function random_coords() {
                return [
                    Math.random()*300,
                    Math.random()*200,
                    (Math.random()*400),
                    (Math.random()*300)
                ];
            }

            var api_handler = function() {
                // The variable jcrop_api will hold a reference to the
                // Jcrop API once Jcrop is instantiated.
                var cb;
                $('#target-5').Jcrop({
                }, function() {
                    interface_load(this);
                });
                function interface_load(obj){
                    cb = obj;
                    cb.newSelection();
                    cb.setSelect(random_coords());
                    function run_cleanup(){
                        var m = cb.ui.multi, s = cb.ui.selection;

                        for(var i=0;i<m.length;i++)
                            if (s !== m[i]) m[i].remove();

                        cb.ui.multi = [ s ];
                        s.center();
                        s.focus();
                    }
                    $('.jcrop-api-tabs-options').on('click', 'button', function () {
                        id = $(this).attr('id');
                        switch(id){
                            case 'setSelect':
                                cb.setSelect(random_coords());
                                break;
                            case 'animateTo':
                                cb.animateTo(random_coords());
                                break;
                            case 'release':
                                cb.setOptions({setSelect: null});
                                run_cleanup();
                                break;
                            case 'disable' :
                                cb.setOptions(allOptions(false));
                                $('#enable').show();
                                $('.requiresjcrop').hide();
                                break;
                            case 'enable' :
                                cb.setOptions(allOptions(true));
                                console.log(allOptions(true));
                                $('#enable').hide();
                                $('.requiresjcrop').show();
                                break;
                            case 'unhook' :
                                cb.destroy();
                                $('#unhook,.requiresjcrop,#enable').hide();
                                $('#rehook').show();
                                break;
                            case 'rehook' :
                                api_handler();
                                $('#rehook').hide();
                                $('#unhook,.requiresjcrop').show();
                                break;
                        }
                    })
                    function allOptions(boolean) {
                        var array = {
                            canResize : boolean,
                            allowSelect: boolean,
                            canDrag: boolean,
                            canResize: boolean
                        };
                        return array;
                    };
                    function checked(element) {
                        return document.getElementById(element).checked;
                    }
                    $('.optlist').on('change', 'input[type="checkbox"]', function () {
                        id = $(this).attr('id');
                        switch(id){
                            case 'can_click':
                                cb.setOptions({
                                    allowSelect: checked(id) ? true : false
                                });
                                break;
                            case 'ar_lock' :
                                cb.setOptions({
                                    aspectRatio: checked(id) ? 5/3 : false
                                });
                                break;
                            case 'can_move' :
                                cb.setOptions({
                                    canDrag : checked(id) ? true : false
                                });
                                break;
                            case 'can_size' :
                                cb.setOptions({
                                    canResize : checked(id) ? true : false
                                });
                                break;
                            case 'size_lock' :
                                cb.setOptions({
                                    minSize: checked(id) ? [100,100]: [50,50],
                                    maxSize: checked(id) ? [400,350]: [0,0]
                                });
                                break;


                        }

                    });


                }
            };
            $('#can_click, #can_move, #can_size').attr('checked','checked');
            basic_handler();
            default_handler();
            api_handler();
            styling_handler();


        });

    </script>

@endsection