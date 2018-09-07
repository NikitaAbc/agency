@section("content")


    <div id="main">

        <div id="content" class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
                    <h1 class="txt-color-red login-header-big">SmartAdmin</h1>
                    <div class="hero">

                        <div class="pull-left login-desc-box-l">
                            <h4 class="paragraph-header">It's Okay to be Smart. Experience the simplicity of SmartAdmin, everywhere you go!</h4>

                        </div>

                        <img src="{{ asset("public/img/iphoneview.png") }}" class="pull-right display-image" alt="" style="width:210px">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                    <div class="well no-padding">
                        <form method="POST" action="{{ route('login') }}" id="login-form" class="smart-form client-form">
                            @csrf
                            <header>
                                Sign In
                            </header>

                            <fieldset>

                                <section>
                                    <label class="label">E-mail</label>
                                    <label class="input"> <i class="icon-append fa fa-user"></i>
                                        <input type="email" name="email">
                                        <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>

                                </section>

                                <section>
                                    <label class="label">Password</label>
                                    <label class="input"> <i class="icon-append fa fa-lock"></i>
                                        <input type="password" name="password">

                                    <div class="note">
                                        <a href="forgotpassword.html">{{ __('Forgot Your Password?') }}</a>
                                    </div>
                                </section>


                                @if ($errors->has('email') || $errors->has('password'))
                                    <span class="help-block bg-color-red">
                                        <center><strong>Неверный логин или пароль</strong></center>
                                    </span>
                                @endif



                                <section>
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" checked="">
                                        <i></i>Stay signed in</label>
                                </section>
                            </fieldset>
                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    Sign in
                                </button>
                            </footer>
                        </form>

                    </div>



                </div>
            </div>
        </div>
    </div>

@show

@section("js")

@endsection

@section("css")

    <link rel="stylesheet" href="{{ asset("public/css/bootstrap.css") }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset("public/css/smartadmin-production.min.css") }}">

@show



