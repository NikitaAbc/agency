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
                    <p>It would be great to hear from you! Just drop us a line and ask for anything with which you think
                        we could be helpful. We are looking forward to hearing from you!</p>
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
                <!-- main end -->

                <!-- sidebar start -->
                <!-- ================ -->
                <aside class="col-lg-4 col-xl-3 ml-xl-auto">
                    <div class="sidebar">
                        <div class="block clearfix">
                            <h3 class="title">Связь с нами:</h3>
                            <div class="separator-2"></div>
                            <ul class="list">
                                <li class="{{ $contact->address ?: "hidden"  }}"><i class="fa fa-home pr-10"></i>{{ $contact->address }}</li>
                                <li class="{{ $contact->phone1 ?: "hidden"  }}"><i class="fa fa-mobile pr-10 pl-1"></i><abbr title="Phone"></abbr>{{ $contact->phone1 }}
                                </li>
                                <li class="{{ $contact->phone2 ?: "hidden"  }}"><i class="fa fa-mobile pr-10 pl-1"></i><abbr
                                            title="Phone"></abbr> {{ $contact->phone2 ?: "" }}</li>
                                <li class="{{ $contact->phone3 ?: "hidden"  }}"><i class="fa fa-mobile pr-10 pl-1"></i><abbr
                                            title="Phone"></abbr> {{ $contact->phone3 ?: "" }}</li>
                                <li class="{{ $contact->email_contact ?: "hidden"  }}"><i class="fa fa-envelope pr-10"></i><a
                                            href="mailto:youremail@domain.com">{{ $contact->email_contact?: "" }}</a></li>
                            </ul>
                            <a class="btn btn-gray collapsed map-show btn-animated" data-toggle="collapse"
                               href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Show Map <i
                                        class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="block clearfix">
                            <h4 class="title">Следите за нами:</h4>
                            <div class="separator-2"></div>
                            <ul class="social-links circle small margin-clear clearfix animated-effect-1">
                                <ul class="social-links circle small clearfix hidden-sm-down">

                                    <li class="{{ $contact->linkedin_link ?: "hidden" }}"><a href="{{ $contact->linkedin_link }}"><i
                                                    class="fa fa-linkedin" title="linkedin"></i></a></li>
                                    <li class="{{ $contact->google_link ?: "hidden" }}"><a href="{{ $contact->google_link}}"><i
                                                    class="fa fa-google-plus" title="google"></i></a></li>
                                    <li class="{{ $contact->youtube_link ?: "hidden" }}"><a href="{{ $contact->youtube_link}}"><i
                                                    class="fa fa-youtube" title="youtube"></i></a></li>
                                    <li class="{{ $contact->fb_link ?: "hidden" }}"><a href="{{ $contact->fb_link}}"><i
                                                    class="fa fa-facebook-f" title="facebook"></i></a></li>
                                    <li class="{{ $contact->instagram ?: "hidden" }}"><a href="{{ $contact->instagram }}"><i
                                                    class="fa fa-instagram" title="instagram"></i></a></li>

                                    @empty($contact)
                                        <li class="{{ $contact->instagram ?: "hidden" }}">На данный момент соц. сети не указаны.</li>
                                    @endempty
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
@endsection

@section("css")

@endsection
