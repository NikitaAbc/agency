@extends("admin.layouts.app")
@section("content")
    <meta name="csrf-token" content="{{ csrf_token() }}" />



            <h1 class="page-title txt-color-blueDark">

                <!-- PAGE HEADER -->
                <i class="fa-fw fa fa-pencil-square-o"></i>
                <a class="btn btn-default">Контакты</a>
            </h1>



    <div class="container">


        <div class="widget-body no-padding">

            @if(session("success"))
            <div class="alert alert-success no-margin">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <div class="text-center">{{ session("success") }}</div>
            </div>
            @endif


            <div class="table-responsive" style="margin-top:70px;">


                <table class="table table-bordered table-condensed table-hover smart-form has-tickbox">
                    <thead>
                    <tr>
                        <th>Название <a class="btn btn-xs btn-default pull-right"></a> </th>
                        <th>Данные <a class="btn btn-xs btn-default pull-right"></a> </th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        <td>Адрес</td>
                        <td contenteditable="false" class="selected" id="address">{{ $contact->address  }}</td>

                    </tr>

                    <tr>

                        <td>Номер телефона #1</td>
                        <td class="selected" id="phone1">{{ $contact->phone1 }}</td>

                    </tr>
                    <tr>
                        <td>Номер телефона #2</td>
                        <td class="selected" id="phone2">{{ $contact->phone2 }}</td>

                    </tr>
                    <tr>
                        <td>Номер телефона #3</td>
                        <td class="selected" id="phone2">{{ $contact->phone3 }}</td>

                    </tr>
                    <tr>
                        <td>Почта</td>
                        <td contenteditable="false" class="selected" id="email_contact">{{ $contact->email_contact }}</td>

                    </tr>

                    <tr>
                        <td>Форма почты</td>
                        <td contenteditable="false" class="selected" id="email_contact">{{ $contact->email_contact }}</td>

                    </tr>

                    </tbody>

                    <tbody>

                    <tr>

                        <td>Instagram</td>
                        <td class="selected" id="instagram">{{ $contact->instagram_link }}</td>

                    </tr>
                    <tr>

                        <td>Youtube</td>
                        <td class="selected" id="Youtube">{{ $contact->youtube_link }}</td>

                    </tr>
                    <tr>

                        <td>Facebook</td>
                        <td class="selected" id="Facebook">{{ $contact->fb_link }}</td>

                    </tr>
                    <tr>

                        <td>Linkedin</td>
                        <td class="selected" id="linkedin">{{ $contact->linkedin_link }}</td>

                    </tr>

                    <tr>

                        <td>Google</td>
                        <td class="selected" id="Google">{{ $contact->google_link }}</td>

                    </tr>


                    <tr>

                        <td>Skype</td>
                        <td class="selected" id="skype">{{ $contact->skype }}</td>

                    </tr>
                    <tr>

                        <td>Fax</td>
                        <td class="selected" id="skype">{{ $contact->skype }}</td>

                    </tr>
                    </tbody>
                </table>

            </div>
            <a class="btn btn-warning pull-right" href="{{ route("admin.contacts.edit") }}">Редактировать</a>


        </div>
    </div>



@endsection

