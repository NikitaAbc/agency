@extends("admin.layouts.app")
@section("content")
<div class="widget-body no-padding">

    <form id="checkout-form" class="smart-form" method="post">

        @csrf
        <input name="_method" type="hidden" value="PUT">

        <fieldset>
            <h3>Контактные данные: </h3>
            <div class="row">
                <section class="col col-6">
                    <label class="input">

                        <i class="icon-prepend fa fa-map-marker"></i>
                        <input type="text" name="address" placeholder="Адрес" value="{{ $contact->address }}">
                    </label>
                </section>
            </div>

            <div class="row">
            <section class="col col-6">
                <label class="input">
                    <i class="icon-prepend fa fa-phone"></i>
                    <input type="tel" name="phone1" placeholder="Телефон #1" data-mask="(999) 999-9999" aria-required="true" aria-invalid="false" class="valid" value="{{ $contact->phone1 }}">
                </label>
            </section>
            </div>

            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <i class="icon-prepend fa fa-phone"></i>
                        <input type="tel" name="phone2" placeholder="Телефон #2" data-mask="(999) 999-9999" value="{{ $contact->phone2 }}" aria-required="true" aria-invalid="false" class="valid">
                    </label>
                </section>
            </div>
            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <i class="icon-prepend fa fa-phone"></i>
                        <input type="tel" name="phone3" placeholder="Телефон #3" data-mask="(999) 999-9999" value="{{ $contact->phone3 }}"aria-required="true" aria-invalid="false" class="valid">
                    </label>
                </section>
            </div>
            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <i class="icon-prepend fa fa-envelope-o"></i>
                        <input name="email_contact" placeholder="Почта" value="{{ $contact->email_contact }}">
                    </label>
                </section>
            </div>
            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <i class="icon-prepend fa fa-forward"></i>
                        <input name="email_form" placeholder="Контактная форма" value="{{ $contact->email_form }}">
                    </label>
                </section>
            </div>
        </fieldset>

        <fieldset>
            <h3>Социальные сети: </h3>


            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <input name="instagram_link" placeholder="Ссылка на Instagram" value="{{ $contact->instagram_link }}">
                    </label>
                </section>
            </div>

            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <input name="fb_link" placeholder="Ссылка на Facebook" value="{{ $contact->fb_link }}">
                    </label>
                </section>
            </div>

            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <input name="linkedin_link" placeholder="Ссылка на Linkedin" value="{{ $contact->linkedin_link }}">
                    </label>
                </section>
            </div>

            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <input name="youtube_link" placeholder="Ссылка на Youtube" value="{{ $contact->youtube_link }}">
                    </label>
                </section>
            </div>

            <div class="row">
                <section class="col col-6">
                    <label class="input">
                        <input name="skype" placeholder="Аккаунт в skype" value="{{ $contact->skype }}">
                    </label>
                </section>
            </div>


        </fieldset>


        <footer>
            <button type="submit" class="btn btn-primary">
                Сохранить
            </button>
        </footer>
    </form>

</div>
@endsection    