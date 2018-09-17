@extends('layouts.app')

@section('content')
    <!-- banner start -->
    <!-- ================ -->
    <div class="banner clearfix">

        <!-- slideshow start -->
        <!-- ================ -->
        <div class="slideshow">

            <!-- slider revolution start -->
            <!-- ================ -->
            <div class="slider-revolution-5-container">
                <div id="slider-banner-fullscreen" class="slider-banner-fullscreen rev_slider" data-version="5.0">
                    <ul class="slides">
                        <!-- slide 1 start -->
                        <!-- ================ -->
                        <li class="text-center" data-transition="random" data-slotamount="default"
                            data-masterspeed="default" data-title="Slide Title">

                            <!-- main image -->
                            <img src="{{asset('public/images/slider-fullscreen-slide-1.jpg')}}" alt="slidebg1"
                                 data-bgposition="center center" data-bgrepeat="no-repeat" data-bgfit="cover"
                                 class="rev-slidebg">

                            <!-- Transparent Background -->
                            <div class="tp-caption dark-translucent-bg"
                                 data-x="center"
                                 data-y="center"
                                 data-start="0"
                                 data-transform_idle="o:1;"
                                 data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                 data-transform_out="o:0;s:600;"
                                 data-width="5000"
                                 data-height="5000">
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption xlarge_white"
                                 data-x="center"
                                 data-y="110"
                                 data-start="1000"
                                 data-end="2500"
                                 data-splitin="chars"
                                 data-splitout="chars"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:[50%];o:0;s:600;e:Power4.easeInOut;"
                                 data-transform_out="x:[-50%];o:0;s:200;e:Power2.easeInOut;"
                                 data-mask_in="x:0;y:0;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">ГРОМ-Х
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption xlarge_white"
                                 data-x="center"
                                 data-y="110"
                                 data-start="3100"
                                 data-end="4600"
                                 data-splitin="chars"
                                 data-splitout="chars"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:[-50%];o:0;s:600;e:Power4.easeInOut;"
                                 data-transform_out="x:[-50%];o:0;s:200;e:Power2.easeInOut;"
                                 data-mask_in="x:0;y:0;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Безопасность
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption xlarge_white"
                                 data-x="center"
                                 data-y="110"
                                 data-start="5200"
                                 data-end="6700"
                                 data-splitin="chars"
                                 data-splitout="chars"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:[50%];o:0;s:600;e:Power4.easeInOut;"
                                 data-transform_out="x:0;y:[-50%];o:0;s:200;e:Power2.easeInOut;"
                                 data-mask_in="x:0;y:0;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Защита
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption large_white"
                                 data-x="center"
                                 data-y="110"
                                 data-start="7000"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                 data-transform_out="y:0;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[-100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span
                                        class="logo-font">ГРОМ-<span class="text-default">Х</span></span> <br>
                                Мы защищаем Вас!
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption"
                                 data-x="center"
                                 data-y="250"
                                 data-hoffset="-232"
                                 data-start="1000"
                                 data-end="6200"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:[50%];y:0;o:0;s:700;e:Power4.easeInOut;"
                                 data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;"><span
                                        class="icon large circle"><i class="circle fa fa-lightbulb-o"></i></span>
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption"
                                 data-x="center"
                                 data-y="250"
                                 data-start="3100"
                                 data-end="6200"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:[-50%];y:0;o:0;s:700;e:Power4.easeInOut;"
                                 data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;"><span
                                        class="icon large circle"><i class="circle fa fa-rotate-left"></i></span>
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption"
                                 data-x="center"
                                 data-y="250"
                                 data-hoffset="232"
                                 data-start="5200"
                                 data-end="6200"
                                 data-transform_idle="o:1;"
                                 data-transform_in="x:[50%];y:0;o:0;s:700;e:Power4.easeInOut;"
                                 data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;"><span
                                        class="icon large circle"><i class="circle fa fa-line-chart"></i></span>
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption tp-resizeme large_white"
                                 data-x="center"
                                 data-y="210"
                                 data-start="6400"
                                 data-end="10000"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                 data-transform_out="y:0;s:1000;e:Power2.easeInOut;">
                                <div class="separator light"></div>
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption medium_white"
                                 data-x="center"
                                 data-y="260"
                                 data-start="6800"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-50%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                 data-transform_out="y:0;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[-50%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                Каждый объект, взятый под защиту<br>
                                нашим охранным агентством, всесторонне<br>
                                изучается нашими специалистами на предмет выявления <br>уязвимостей и тактики противодействия преступникам.
                            </div>

                        </li>
                        <!-- slide 1 end -->

                        <!-- slide 2 start -->
                        <!-- ================ -->
                        <li data-transition="random" data-slotamount="7" data-masterspeed="default"
                            data-title="Охранное агентство">

                            <!-- main image -->
                            <img src="{{asset('public/images/slider-fullscreen-slide-2.jpg')}}" alt="slidebg2"
                                 data-bgposition="center center" data-bgrepeat="no-repeat" data-bgfit="cover"
                                 class="rev-slidebg">

                            <!-- Transparent Background -->
                            <div class="tp-caption dark-translucent-bg"
                                 data-x="center"
                                 data-y="center"
                                 data-start="0"
                                 data-transform_idle="o:1;"
                                 data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                 data-transform_out="o:0;s:600;"
                                 data-width="5000"
                                 data-height="5000">
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption large_white"
                                 data-x="left"
                                 data-y="110"
                                 data-start="1000"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="logo-font">ГРОМ-Х</span>
                                <br> охранное агентство
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption medium_white"
                                 data-x="left"
                                 data-y="240"
                                 data-speed="500"
                                 data-start="1200"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span
                                        class="icon default-bg circle small hidden-xs"><i
                                            class="fa fa-laptop"></i></span> Технологично
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption medium_white"
                                 data-x="left"
                                 data-y="300"
                                 data-speed="500"
                                 data-start="1400"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span
                                        class="icon default-bg circle small hidden-xs"><i
                                            class="fa fa-check"></i></span> Надежно
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption medium_white"
                                 data-x="left"
                                 data-y="360"
                                 data-speed="500"
                                 data-start="1600"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span
                                        class="icon default-bg circle small hidden-xs"><i class="fa fa-gift"></i></span>
                                Уникально
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption medium_white"
                                 data-x="left"
                                 data-y="420"
                                 data-speed="500"
                                 data-start="1800"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span
                                        class="icon default-bg circle small hidden-xs"><i
                                            class="fa fa-hourglass-half"></i></span> Постоянно
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption small_white"
                                 data-x="left"
                                 data-y="490"
                                 data-speed="500"
                                 data-start="2000"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="/kontakty"
                                                                                             class="btn btn-default btn-lg btn-animated">Звоните
                                    <i class="fa fa-phone"></i></a>
                            </div>
                        </li>
                        <!-- slide 2 end -->
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!-- slider revolution end -->

        </div>
        <!-- slideshow end -->

    </div>
    <!-- banner end -->

    <div id="page-start"></div>

    <!-- section start -->
    <!-- ================ -->
    <section class="light-gray-bg pv-30 clearfix">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-8">
                    <h2 class="text-center mt-4">Охранное агентство  <strong>ГРОМ-X</strong></h2>
                    <div class="separator"></div>
                    <p class="large text-center">

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <span class="icon default-bg circle"><i class="fa fa-clock-o"></i></span>
                        <h3>Защита 24/7</h3>
                        <div class="separator clearfix"></div>
                        <p>24 часа в сутки, 7 дней в неделю мы являемся гарантом надежности, стабильности и безопасности Вас, вашей семьи, дома или бизнеса.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                        <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                        <h3>Гарант надежности</h3>
                        <div class="separator clearfix"></div>
                        <p>
                            Мы с полной ответственностью подходим к исполнению поставленных перед нами задач и четко следуем выполнению договорных обязательств.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                         data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                        <span class="icon default-bg circle"><i class="fa fa fa-gears"></i></span>
                        <h3>Технологичность</h3>
                        <div class="separator clearfix"></div>
                        <p>
                            Мощная техническая база, включающая в себя новейшее современное оборудование ведущих фирм, специализирующихся в этой области.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <section class="section default-bg clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-lg-8">
                                <h1 class="title">Надежно и профессионально.</h1>
                                <p>
                                    Полный комплекс охранно-защитных услуг. Узнайте о наших услугах больше.
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <br>
                                <p><a href="/uslugi" class="btn btn-lg btn-gray-transparent btn-animated">Подробнее<i
                                                class="fa fa-arrow-right pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- section -->
    <!-- ================ -->
    <section class="pv-30">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-8">
                    <h2 class="text-center mt-4">Почему <strong>выбирают</strong> нас</h2>
                    <div class="separator"></div>
                    <p class="large text-center">
                        Наш многолетний опыт, высочайший профессионализм - основа Вашей безопасности.
                    </p>
                    <br>
                </div>
            </div>
        </div>
        <div class="slick-carousel content-slider-with-large-controls">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{asset('public/images/section-image-1.png')}}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <p class="space-top">
                                Частное охранное агентство «ГРОМ-Х"» было основано в ноябре 2004 года кадровыми офицерами МВД.
                                На сегодня охранная деятельность осуществляется на основании лицензии №АВ- 540269 от 28 мая 2010 года.
                            </p>
                            <p>
                                "ГРОМ-Х" сегодня - это группа динамично развивающихся предприятий в области объектовой
                                охраны коммерческих предприятий и государственных учреждений, персональной охраны физических лиц, охраной офисов и домов,
                                а также полным циклом установки и обслуживания систем видеонаблюдения.
                            </p>
                            <p>
                                Мы – профессионалы своего дела! Весь наш персонал прошел специальную подготовку и проверку и КАЖДЫЙ сотрудник охранного агентства
                                «ГРОМ-Х» занят в системе профессионального тренинга в Институте Стандартов Безопасности.
                            </p>
                            <p>
                                Охранное агентство «ГРОМ-Х» несет абсолютную материальную ответственность за взятые под охрану ценности.
                                Материальные ценности высокой стоимости
                                и уязвимости в обязательном порядке страхуются нами в страховой компании «Теком».
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->


@endsection
