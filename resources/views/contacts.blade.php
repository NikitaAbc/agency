@extends("layouts.app")
@section("content")

    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-lg-8">
                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title">Связь с нами</h1>
                    <div class="separator-2"></div>
                    <!-- page-title end -->
                    <p class="text-center">Введите свои данные, для связи с нами.</p>
                    <div class="contact-form">
                        <form class="margin-clear" method="post">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group has-feedback col-md-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Имя" required>
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback col-md-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Ваша почта"
                                           required>
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <textarea class="form-control" rows="6" id="message" name="message" placeholder="Сообщение"
                                          required></textarea>
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                            <input type="submit" value="Отправить" id="submit"
                                   class="submit-button btn btn-lg btn-success">
                        </form>
                    </div>
                </div>

                <!-- sidebar start -->
                <!-- ================ -->
                <aside class="col-lg-4 col-xl-3 ml-xl-auto">
                    <div class="sidebar">
                        <div class="block clearfix">
                            <h3 class="title">Связь с нами:</h3>
                            <div class="separator-2"></div>
                            <ul class="list">
                                @empty(!$contact->address)
                                    <li class="{{ $contact->address }}"><i class="fa fa-home pr-10"></i>{{ $contact->address }}</li>
                                @endempty

                                    @empty(!$contact->phone1)
                                        <li class="{{ $contact->phone1 }}"><i class="fa fa-phone  pr-10 pl-1"></i><abbr title="Phone">{{  $contact->phone1 }}</li>
                                    @endempty

                                    @empty(!$contact->phone2)
                                        <li class="{{ $contact->phone2 }}"><i class="fa fa-phone  pr-10 pl-1"></i><abbr title="Phone">{{  $contact->phone2 }}</li>
                                    @endempty
                                    @empty(!$contact->phone3)
                                        <li class="{{ $contact->phone3}}"><i class="fa fa-phone pr-10 pl-1"></i><abbr
                                                    title="Phone"></abbr> {{ $contact->phone3 }}</li>
                                    @endempty

                                    @empty(!$contact->email_contact)
                                        <li class="{{ $contact->email_contact }}"><i class="fa fa-envelope pr-10"></i><a
                                                    href="{{ $contact->email_contact }}">{{ $contact->email_contact }}</a></li>
                                    @endempty

                            </ul>

                            <a class="btn btn-gray collapsed map-show btn-animated" data-toggle="collapse" href="#map" aria-expanded="false"
                               aria-controls="collapseExample">Наше местоположение<i
                                        class="fa fa-plus"></i></a>
                            <div class="collapse" id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3051.033792605589!2d36.22703312584621!3d49.98129617104838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a05fa181aa71%3A0x23f918527f2475c2!2z0YPQuy4g0JLQvtGB0LrRgNC10YHQtdC90YHQutCw0Y8sIDIzLCDQpdCw0YDRjNC60L7Qsiwg0KXQsNGA0YzQutC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNjEwMDA!5e0!3m2!1sru!2sua!4v1537182944283"
                                            width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>


                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="block clearfix">
                            <h4 class="title">Подписывайтесь на нас:</h4>
                            <div class="separator-2"></div>
                            <ul class="social-links circle small margin-clear clearfix animated-effect-1">
                                <ul class="social-links circle small clearfix hidden-sm-down">

                                    @include('layouts.socials')
                                </ul>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- sidebar end -->

            </div>
        </div>
    </section>

@endsection

@section("js")

    <script>


        $("#submit").on("submit", function (e) {

            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "send",
                dataType: 'json',
                type: 'post',
                data: $(this).serialize(),
                success: function f(response) {
                    console.log(response);
                }
        })


        });


    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
@endsection

@section("css")

@endsection
