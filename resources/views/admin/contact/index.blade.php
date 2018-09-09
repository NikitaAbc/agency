@extends("admin.layouts.app")
@section("content")
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <div id="main" role="main">

        <!-- MAIN CONTENT -->
        <div id="content">

            <section id="widget-grid" class="">

                <!-- row -->
                <div class="row">

                    <!-- NEW WIDGET START -->
                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0"
                             data-widget-editbutton="false">

                            <header>

                                <h2>Заполнения контактов</h2>

                            </header>

                            <div>

                                <div class="widget-body no-padding">

                                    <table id="dt_basic" class="table table-striped table-bordered" width="100%">
                                        <thead>
                                        <tr>
                                            <th data-class="expand"><i
                                                        class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Название
                                            </th>
                                            <th data-hide="edit">Редактирование</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contacts as $contact)
                                            <tr>

                                                <td>Номер телефона</td>
                                                <td contenteditable="false" class="selected" id="phone1">{{ $contact->phone1 ?: "Рекомендуется заполнить!" }}</td>

                                            </tr>
                                            <tr>
                                                <td>Номер телефона #2</td>
                                                <td contenteditable="false" class="selected" id="phone2">{{ $contact->phone2 }}</td>

                                            </tr>

                                        <tr>

                                            <td>Instagram</td>
                                            <td contenteditable="false" class="selected" id="instagram">{{ $contact->instagram_link }}</td>

                                        </tr>
                                        <tr>

                                            <td>Youtube</td>
                                            <td contenteditable="false" class="selected" id="Youtube">{{ $contact->youtube_link }}</td>

                                        </tr>
                                            <tr>
                                                <td>Почта</td>
                                                <td contenteditable="false" class="selected" id="email_contact">{{ $contact->email_contact }}</td>

                                            </tr>
                                        <tr>

                                            <td>Facebook</td>
                                            <td contenteditable="false" class="selected" id="Facebook">{{ $contact->fb_link }}</td>

                                        </tr>
                                        <tr>

                                            <td>Адрес</td>
                                            <td contenteditable="false" class="selected" id="address">{{ $contact->address  }}</td>

                                        </tr>
                                        <tr>

                                            <td>Google</td>
                                            <td contenteditable="false" class="selected" id="Google">{{ $contact->google_link }}</td>

                                        </tr>

                                        <tr>

                                            <td>Linkedin</td>
                                            <td contenteditable="false" class="selected" id="linkedin">{{ $contact->linkedin_link }}</td>

                                        </tr>

                                        <tr>

                                            <td>Skype</td>
                                            <td contenteditable="false" class="selected" id="skype">{{ $contact->skype }}</td>

                                        </tr>

                                        @endforeach

                                        </tbody>

                                    </table>
                                    <button class="btn btn-primary" id="edit">Редактировать</button>
                                </div>


                            </div>


                        </div>
                        <h3 class="text-center">Предпросмотр:</h3>

                    </article>

                </div>


            </section>


        </div>

    </div>


    <script>
        $(document).ready(function () {

            $("#edit").on("click", function () {

                let getTable = $(this).parents(".widget-body"),
                    selected = getTable.find("tbody .selected");


                if ($(selected).attr("contenteditable") == 'false') {

                    $(selected).attr("contenteditable", "true");
                    $(selected).css({border: "1px solid black"});

                } else {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            url: 'contacts',
                            dataType : 'json',
                            type: 'put',
                            data: {
                                "instagram_link": getTable.find("#instagram").text(),
                                "phone1":getTable.find("#phone1").text(),
                                "phone2":getTable.find("#phone2").text(),
                                "email_contact":getTable.find("#email_contact").text(),
                                "youtube_link": getTable.find("#youtube").text(),
                                "linkedin_link": getTable.find("#linkedin").text(),
                                "fb_link": getTable.find("#facebook").text(),
                                "address": getTable.find("#address").text(),
                                "google_link": getTable.find("#google").text(),
                                "skype": getTable.find("#skype").text(),
                            },
                            complete: function(response){
                                location.reload();
                            }
                        });


                    return false;

                }

            });

            var responsiveHelper_dt_basic = undefined;

            var breakpointDefinition = {
                tablet: 1024,
                phone: 480
            };


            $('#dt_basic').dataTable({
                "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>" +
                "t" +
                "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
                "autoWidth": true,
                "oLanguage": {
                    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
                },
                "preDrawCallback": function () {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper_dt_basic) {
                        responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
                    }
                },
                "rowCallback": function (nRow) {
                    responsiveHelper_dt_basic.createExpandIcon(nRow);
                },
                "drawCallback": function (oSettings) {
                    responsiveHelper_dt_basic.respond();
                }
            });


        })
    </script>
@endsection

