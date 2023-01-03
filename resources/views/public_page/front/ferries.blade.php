<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <!-- Page Title -->
    <?php $language = session('locale'); ?>

    @if ($language == 'es')
        <title>Ferry Galapagos </title>
    @else
        <title>Galapagos Ferry</title>
    @endif


    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="_token" content="{!! csrf_token() !!}" />

    <meta name="author" content="iWanaTrip team">
    <?php
    $language = session('locale');

    $mobile = preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i', $_SERVER['HTTP_USER_AGENT']);

    if ($mobile) {
        $desk = 'mobile';
        Session::put('device', $desk);
    }

    ?>
    <meta name="description"
        content="{{ session('locale') == 'es' ? 'Ferry Galapagos | Reserva online desde $33 | Encuentra las mejores ofertas de transporte entre las islas Galapagos San Cristobal - Santa Cruz - Isabela. 100% garantizado atención al cliente 24/7 todos los días del año' : 'Galapagos Ferry | Book only for $33 | Online reservations. Find the best deals for transportation between San Cristobal - Santa Cruz - Isabela 100% guarantee. Customer service 24/7 all year' }}">


    @if ($language == 'es')
        <meta name="keywords"
            content="Ferry Galapagos, Ferries Galapagos, ferry Galapagos tickets, transporte entre islas Galapagos, Ferry Galapagos horario, lanchas Galapagos, transporte Galapagos">
    @else
        <meta name="keywords"
            content="Galapagos Ferry, , boat to Galapagos, Galapagos boat tour, Galapagos boats, Island hopping Galapagos, cheap Galapagos, Ferry Galapagos islans, Galapagos small boat tours, Ferry between Galapagos islands, Galapagos boat trip, Galapagos islands boat, ferries between Galapagos islands, Galapagos ferry service, Galapagos ferry times, Galapagos inter islands ferries, Galapagos Ferry, Galapagos Ferry tickets, Galapagos Ferry  schedule, boats Galapagos, Galapagos transportation ">
    @endif



    <meta name="author" content="iWaNaTrip group">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if ($language == 'es')
        <meta http-equiv="Content-Language" content="es">
    @else
        <meta http-equiv="Content-Language" content="en_US">
    @endif


    <meta property="og:title" content="Ferry Galapagos" />
    <meta property="og:description"
        content="{{ session('locale') == 'es' ? 'Ferry Galapagos | Reserva online desde $33 | Encuentra las mejores ofertas de transporte entre las islas Galapagos San Cristobal - Santa Cruz - Isabela. 100% garantizado atención al cliente 24/7 todos los días del año' : 'Galapagos Ferry | Book only for $33 | Online reservations. Find the best deals for transportation between San Cristobal - Santa Cruz - Isabela 100% guarantee. Customer service 24/7 all year' }}" />
    <meta property="og:image" content="{{ asset('img/serr/ferry.jpg') }}" />



    @if ($language == 'en')
        <link rel="canonical" href="https://iwannatrip.com/en/Ferry-Galapagos" />
        <link rel="alternate" href="https://iwannatrip.com/Ferry-Galapagos" hreflang="es-ec" />
        <link rel="alternate" href="https://iwannatrip.com/en/Ferry-Galapagos" hreflang="en-ec" />
        <link rel="alternate" href="https://iwannatrip.com/Ferry-Galapagos" hreflang="es" />
        <link rel="alternate" href="https://iwannatrip.com/en/Ferry-Galapagos" hreflang="en" />
        <link rel="alternate" href="https://iwannatrip.com/en/Ferry-Galapagos" hreflang="x-default" />
    @else
        <link rel="canonical" href="https://iwannatrip.com/Ferry-Galapagos" />
        <link rel="alternate" href="https://iwannatrip.com/Ferry-Galapagos" hreflang="es-ec" />
        <link rel="alternate" href="https://iwannatrip.com/en/Ferry-Galapagos" hreflang="en-ec" />
        <link rel="alternate" href="https://iwannatrip.com/Ferry-Galapagos" hreflang="es" />
        <link rel="alternate" href="https://iwannatrip.com/en/Ferry-Galapagos" hreflang="en" />
        <link rel="alternate" href="https://iwannatrip.com/en/Ferry-Galapagos" hreflang="x-default" />
    @endif


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('public_components/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public_components/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public_components/css/letras.css') }}">


    <!-- Magnific Popup core CSS file -->


    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{ asset('public_components/css/style.css') }}">

    <!-- Updated Styles -->


    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('public_components/css/custom.css') }}">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{ asset('public_components/css/responsive.css') }}">


    <!-- CSS for IE -->
    <!--[if lte IE 9]>
            <link rel="stylesheet" type="text/css" href="{{ asset('public_components/css/ie.css') }}" />
        <![endif]-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->

    @if (session('device') == 'mobile')
        <div class="page">
            <h2>iWaNaTrip</h2>

        </div>
        <div id="loading"></div>
    @endif
    <style>
        a.morelink {
            text-decoration: none;
            outline: none;
        }

        .morecontent span {
            display: none;
        }

        .scrollupWeb {
            width: 40px;
            height: 40px;
            opacity: 0.3;
            position: fixed;
            bottom: 20px;
            right: 0;
            display: none;
            text-indent: -9999px;

            /*background: url("../../img/top.png") no-repeat;*/
            background: url("../../../img/top.png") no-repeat;
        }

        .scrollup {
            width: 40px;
            height: 40px;
            opacity: 0.3;
            position: fixed;
            bottom: 20px;
            right: 40%;
            display: none;
            text-indent: -9999px;
            z-index: 10000;
            background: url("../../img/top.png") no-repeat;
        }

        .ui-menu {
            box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.11);
            background: rgba(255, 255, 255, 0.9) none repeat scroll 0 0;
            width: 240px;
        }




        .page {
            display: none;
            padding: 0 0.5em;
        }

        .page h2 {
            font-size: 2em;
            line-height: 1em;
            margin-top: 1.1em;
            font-weight: bold;
        }

        .page p {
            font-size: 1.5em;
            line-height: 1.275em;
            margin-top: 0.15em;
        }

        #loading {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 100;
            width: 100vw;
            height: 100vh;
            background-color: black;
            background-image: url("{{ asset('img/IWTloading.gif') }}");

            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-85546019-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-85546019-1');
</script>

<body class="woocommerce">
    <div id="page-wrapper">
        @if (session('device') != 'mobile')
            <div class="page-title-container">

                <div class="page-title">
                </div>
                <ul class="breadcrumbs">
                    <li><a href="{!! asset('/') !!}"
                            onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1') }}</a>
                    </li>
                    <li class="active">Ferry Galapagos</li>
                </ul>
            </div>
        @else
            <div class="page-title-container  "
                style="background-size: cover; background-image: url(../../img/serr/ferry.jpeg)"
                data-stellar-background-ratio="0.5" id="bgTop">




                <div class="page-title">
                    <div class="container">


                        @if ($language == 'es')
                            <h1 class="whitex">Ferry Galapagos</h1>
                        @else
                            <h1 class="whitex">Galapagos Ferry</h1>
                        @endif

                    </div>
                </div>
                <ul class="breadcrumbs">
                    <li>
                        <a href="https://iwannatrip.com" onclick="$('.woocommerce').LoadingOverlay('show')">
                            {{ trans('publico/labels.label1') }}
                        </a>
                    </li>
                    <li class="active">Ferry Galapagos</li>
                </ul>
            </div>
        @endif

        <header id="header" class="header-color-white">
            @include('public_page.reusable.header')
        </header>
        <section id="content">
            <div class="container">
                <div class="row">
                    @if (session('device') != 'mobile')
                        <div class="sidebar col-sm-4 col-md-3">
                            <div class="widget box">



                                <a href="{!! asset('/faqt') !!}">
                                    <img src="{{ url(env('AWS_PUBLIC_URL') . 'util/3dsecure-notext.png') }}"
                                        title="Este es un sitio seguro, ver mas detalles..." alt="secure site">

                                </a>

                                </br>
                                </br>
                                </br>

                                <a target="_blank" href="{!! asset('/faqt') !!}">
                                    <img width="182" height="182" alt="web site" src="{{ asset('img/HTTPS.png/') }}">
                                    <dd>{{ session('locale') == 'es' ? 'Los datos de su tarjeta de crédito pasan directamente a través del Getway de pago seguro para su procesamiento en tiempo real. Nosotros no almacenamos ningúipo de información su tarjeta de crédito. Una vez que usted haga click en el botón de pago, será direccionado al Getway de pago seguro para procesar su pago' : 'Credit Card Details are securely passed directly through to the Payment Getway for processing in real time. We do not store your Credit Card details at any time. Once you click on Pay you will be redirect to the secure Getway page to process the payment' }}
                                    </dd>
                                </a>

                                </br>
                                </br>

                                <a target="_blank" href="{!! asset('/faqt') !!}">
                                    <img width="42" height="42" alt="web site" src="{{ asset('img/faq.png/') }}">

                                    <h2 style="color:#FF6600" class="product-title btnsmAvailab"><a class='btnsmAvailab'" > info@iwannatrip.com</a></h2>
                                                        </a>
 @endif

                                            </br>

                                            </br>


                                            @if (session('device') != 'mobile')

                                                @if (isset($servicios))
                                                    @if (count($servicios > 1))
                                                        <ul class=" filter-categories panel-group">



                                                            <li class="category-has-children">
                                                                <a href="#cat-sweaters-jacketsserv"
                                                                    data-toggle="collapse">{{ trans('publico/labels.label54') }}</a>
                                                                <ul id="cat-sweaters-jacketsserv"
                                                                    class="collapse">

                                                                    @foreach ($servicios as $serv)
                                                                        @if (session('locale') == 'es')
                                                                        @else
                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                            </li>



                                                        </ul>
                                                    @endif
                                                @endif
                                            @endif
                            </div>


                            @if (session('device') != 'mobile')
                                <div class="widget banner-slider box">
                                    <div class="owl-carousel"
                                        data-itemsPerDisplayWidth="[[0, 1], [480, 2], [768, 1], [992, 1], [1200, 1]]"
                                        data-items="1">
                                        <a href="#">
                                            <img src="{{ asset('img/rsz_00kwwk8s.jpg') }}" alt="">
                                        </a>

                                    </div>

                                </div>



                                <div class="widget box">
                                    <h4>{{ trans('publico/labels.label121') }}</h4>
                                    <ul class="product-list-widget">
                                        <li>
                                            <div class="product-image">
                                                <a href="{!! asset('/detalle') !!}/ESTACION-CHARLES-DARWIN/228">
                                                    <img src="{!! url(env('AWS_PUBLIC_URL') . 'images/icon/228estacion6.jpg') !!}" alt="Charles Darwin" />
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h6 class="product-title"><a
                                                        href="{!! asset('/detalle') !!}/ESTACION-CHARLES-DARWIN/228">Estación
                                                        Charles Darwin</a></h6>
                                                <span
                                                    class="product-price">{{ trans('publico/labels.label128') }}</span>
                                                <span class="star-rating" title="4" data-toggle="tooltip">
                                                    <span data-stars="4"></span>
                                                </span>
                                            </div>
                                        </li>
                                        <li>

                                            <div class="product-image">
                                                <a href="{!! asset('/detalle') !!}/Centro-Histórico-de-Quito/127">
                                                    <img src="{!! url(env('AWS_PUBLIC_URL') . 'images/icon/127centrohistoricociclovia.jpg') !!}" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h6 class="product-title"><a
                                                        href="{!! asset('/detalle') !!}/Centro-Histórico-de-Quito/127">Centro
                                                        Histórico de Quito</a></h6>
                                                <span
                                                    class="product-price">{{ trans('publico/labels.label128') }}</span>
                                                <span class="star-rating" title="4" data-toggle="tooltip">
                                                    <span data-stars="4"></span>
                                                </span>
                                            </div>
                                        </li>

                                        <li>


                                            <div class="product-image">
                                                <a href="{!! asset('/detalle') !!}/Montañita/148">
                                                    <img src="{!! url(env('AWS_PUBLIC_URL') . 'images/icon/148103677257361922164010645062755965301191111n.jpg') !!}" alt="Montañita" />
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h6 class="product-title"><a
                                                        href="{!! asset('/detalle') !!}/Montañita/148">Montañita</a></h6>
                                                <span
                                                    class="product-price">{{ trans('publico/labels.label128') }}</span>
                                                <span class="star-rating" title="4" data-toggle="tooltip">
                                                    <span data-stars="4"></span>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                        {!! Form::close() !!}
                        <div id="main" class="col-sm-8 col-md-9">
                            @if (session('device') != 'mobile')
                                <div class="image-banner box">
                                    <div class="image-container">

                                        <img src="{{ asset('img/serr/ferry.jpg') }}" alt="ferry_iWaNaTrip">

                                    </div>
                                    <div class="caption-wrapper position-left">
                                        <div class="captions">
                                            @if (session('locale') == 'es')
                                                <h1 style="font-size: 75px;line-height: 1.25em;color: white;">Ferry
                                                    Galapagos</h1>
                                            @else
                                                <h1 style="font-size: 75px;line-height: 1.25em;color: white;">Galapagos
                                                    Ferry</h1>
                                            @endif



                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!--  <form method="get" class="woocommerce-ordering box">
                            <select class="orderby selector" name="orderby" id="orderby">
                                <option value="satisfaction">Sort by satsifaction</option>
                                <option value="rating">Sort by average rating</option>
                                <option selected="selected" value="popularity">Sort by popularity</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </form>-->
                            <div class="post-wrapper">
                                <div class="post-filters">
                                    <a href="#" class="btn btn-sm style4 hover-blue active"
                                        data-filter="filter-all">All</a>
                                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="isabela">Isabela</a>
                                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="scruz">Santa Cruz</a>
                                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="scristobal">San
                                        Cristobal</a>
                                </div>

                                <div class="iso-container iso-col-2 style-masonry has-column-width Searchcategorias1 ">

                                    <div class="TopPlace">

                                        <div class="iso-item filter-all filter-website isabela scruz">
                                            <article class="post">
                                                @if ($language == 'es')
                                                    <a href="{!! asset('/tour/Bote-de-isla-Isabela-a-isla-Santa-Cruz-(Galápagos)/1759/33') !!}/" class="product-image">
                                                        <img src="{{ asset('img/booking/all-Isabella-SantaCruz-Big.jpeg') }}"
                                                            alt="isabela">
                                                        <span class="image-extras"></span>
                                                    </a>
                                                @else
                                                    <a href="{!! asset('/en/tour/Bote-de-isla-Isabela-a-isla-Santa-Cruz-(Galápagos)/1759/33') !!}/" class="product-image">
                                                        <img src="{{ asset('img/booking/all-Isabella-SantaCruz-Big.jpeg') }}"
                                                            alt="isabela">
                                                        <span class="image-extras"></span>
                                                    </a>
                                                @endif
                                                <div class="portfolio-content">
                                                    @if ($language == 'es')
                                                        <h5 class="portfolio-title"><a
                                                                href="{!! asset('/tour/Bote-de-isla-Isabela-a-isla-Santa-Cruz-(Galápagos)/1759/33') !!}/">Isabela
                                                                a Santa Cruz</a></h3>
                                                        @else
                                                            <h5 class="portfolio-title"><a
                                                                    href="{!! asset('/en/tour/Bote-de-isla-Isabela-a-isla-Santa-Cruz-(Galápagos)/1759/33') !!}/">Isabela
                                                                    to Santa Cruz</a></h3>
                                                    @endif
                                                    <span class="product-price "
                                                        style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span
                                                            class="currency-symbol">{{ trans('publico/labels.label59') }}
                                                            $</span>33</span>
                                                    <br />
                                                    <br />
                                                </div>
                                            </article>
                                        </div>

                                        <div class="iso-item filter-all filter-website scruz scristobal ">

                                            <article class="post">

                                                @if ($language == 'es')
                                                    <a href="{!! asset('/tour/Bote-de-isla-San-Cristobal-a-isla-Santa-Cruz-(Galápagos)/1759/36') !!}/" class="product-image">
                                                        <img src="{{ asset('img/booking/half-SanCristobal-SantaCruz-big.jpeg') }}"
                                                            alt="isabela">
                                                        <span class="image-extras"></span>
                                                    </a>
                                                @else
                                                    <a href="{!! asset('/en/tour/Bote-de-isla-San-Cristobal-a-isla-Santa-Cruz-(Galápagos)/1759/36') !!}/" class="product-image">
                                                        <img src="{{ asset('img/booking/half-SanCristobal-SantaCruz-big.jpeg') }}"
                                                            alt="isabela">
                                                        <span class="image-extras"></span>
                                                    </a>
                                                @endif

                                                <div class="portfolio-content">
                                                    @if ($language == 'es')
                                                        <h5 class="portfolio-title"><a
                                                                href="{!! asset('/tour/Bote-de-isla-San-Cristobal-a-isla-Santa-Cruz-(Galápagos)/1759/36') !!}/">San
                                                                Cristobal a Santa Cruz</a></h3>
                                                        @else
                                                            <h5 class="portfolio-title"><a
                                                                    href="{!! asset('/en/tour/Bote-de-isla-San-Cristobal-a-isla-Santa-Cruz-(Galápagos)/1759/36') !!}/">San
                                                                    Cristobal to Santa Cruz</a></h3>
                                                    @endif
                                                    <span class="product-price "
                                                        style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span
                                                            class="currency-symbol">{{ trans('publico/labels.label59') }}
                                                            $</span>33</span>
                                                    <br />
                                                    <br />
                                                </div>

                                            </article>

                                        </div>
                                        <div class="iso-item filter-all filter-website isabela scruz">
                                            <article class="post">
                                                @if ($language == 'es')
                                                    <a href="{!! asset('/tour/Bote-de-isla-Santa-Cruz-a-isla-Isabela-(Galápagos)/1759/34') !!}/" class="product-image">
                                                        <img src="{{ asset('img/booking/all-SantaCruz-Isabella-big.jpeg') }}"
                                                            alt="isabela">
                                                        <span class="image-extras"></span>
                                                    </a>
                                                @else
                                                    <a href="{!! asset('/en/tour/Bote-de-isla-Santa-Cruz-a-isla-Isabela-(Galápagos)/1759/34') !!}/" class="product-image">
                                                        <img src="{{ asset('img/booking/all-SantaCruz-Isabella-big.jpeg') }}"
                                                            alt="isabela">
                                                        <span class="image-extras"></span>
                                                    </a>
                                                @endif

                                                <div class="portfolio-content">

                                                    @if ($language == 'es')
                                                        <h5 class="portfolio-title"><a
                                                                href="{!! asset('/tour/Bote-de-isla-Santa-Cruz-a-isla-Isabela-(Galápagos)/1759/34') !!}/">Santa
                                                                Cruz a Isabela</a></h3>
                                                        @else
                                                            <h5 class="portfolio-title"><a
                                                                    href="{!! asset('/en/tour/Bote-de-isla-Santa-Cruz-a-isla-Isabela-(Galápagos)/1759/34') !!}/">Santa
                                                                    Cruz to Isabela</a></h3>
                                                    @endif
                                                    <span class="product-price "
                                                        style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span
                                                            class="currency-symbol">{{ trans('publico/labels.label59') }}
                                                            $</span>33</span>
                                                    <br />
                                                    <br />
                                                </div>

                                            </article>
                                        </div>





                                        <div class="iso-item filter-all filter-website  scruz scristobal">
                                            <article class="post">

                                                @if ($language == 'es')
                                                    <a href="{!! asset('/tour/Bote-de-isla-Santa-Cruz-a-isla-San-Cristobal-(Galápagos)/1759/35') !!}/" class="product-image">
                                                        <img src="{{ asset('img/booking/all-SantaCruz-SanCristobal-big.jpeg') }}"
                                                            alt="isabela">
                                                        <span class="image-extras"></span>
                                                    </a>
                                                @else
                                                    <a href="{!! asset('/en/tour/Bote-de-isla-Santa-Cruz-a-isla-San-Cristobal-(Galápagos)/1759/35') !!}/" class="product-image">
                                                        <img src="{{ asset('img/booking/all-SantaCruz-SanCristobal-big.jpeg') }}"
                                                            alt="isabela">
                                                        <span class="image-extras"></span>
                                                    </a>
                                                @endif

                                                <div class="portfolio-content">

                                                    @if ($language == 'es')
                                                        <h5 class="portfolio-title"><a
                                                                href="{!! asset('/tour/Bote-de-isla-Santa-Cruz-a-isla-San-Cristobal-(Galápagos)/1759/35') !!}/">Santa
                                                                Cruz a San Cristobal</a></h3>
                                                        @else
                                                            <h5 class="portfolio-title"><a
                                                                    href="{!! asset('/en/tour/Bote-de-isla-Santa-Cruz-a-isla-San-Cristobal-(Galápagos)/1759/35') !!}/">Santa
                                                                    Cruz to San Cristobal</a></h3>
                                                    @endif


                                                    <span class="product-price " style=" color: #eb3b50;
                        float: left;
                        font-size: 1.3333em;
                        font-weight: 600;
                        margin-right: 8px;"><span class="currency-symbol">{{ trans('publico/labels.label59') }}
                                                            $</span>33</span>


                                                    <br />
                                                    <br />


                                                </div>








                                            </article>
                                        </div>






                                    </div>

                                </div>
                            </div>
        </section>

        @if (session('device') != 'mobile')
            <a href="#" class="scrollupWeb">Scroll</a>
        @else
            <a href="#" class="scrollup">Scroll</a>
        @endif

        <input type="hidden" name="pagina" class="pagina">
        <footer id="footer" class="style4">
            <div class="callout-box style2">
                <div class="container">
                    <div class="callout-content">
                        <div class="callout-text">
                            <h4>{{ trans('publico/labels.label26') }}</h4>
                        </div>
                        <div class="callout-action">
                            <a class="btn style4">{{ trans('publico/labels.label27') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('public_page.reusable.footer')
        </footer>
    </div>

    <!-- Javascript -->

    {!! HTML::script('js/jquery.js') !!}
    {{-- {!!HTML::script('js/js_Compartido.js') !!} --}}
    {!! HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}
    {!! HTML::script('js/jquery.autocomplet.js') !!}
    {!! HTML::script('js/Compartido.js') !!}

    <script type="text/javascript" src="{{ asset('public_components/js/jquery-2.1.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.noconflict.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/modernizr.2.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery-ui.1.11.2.min.js') }}"></script>

    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="{{ asset('public_components/js/bootstrap.min.js') }}"></script>

    <!-- Magnific Popup core JS file -->
    <script type="text/javascript"
        src="{{ asset('public_components/components/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- parallax -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.stellar.min.js') }}"></script>

    <!-- waypoint -->
    <script type="text/javascript" src="{{ asset('public_components/js/waypoints.min.js') }}"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('public_components/components/owl-carousel/owl.carousel.min.js') }}">
    </script>

    <!-- plugins -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.plugins.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public_components/js/lugares_ecuador.js') }}"></script>

    <script>
        sjq(document).ready(function($) {
            // Configure/customize these variables.
            var showChar = 100; // How many characters are shown by default
            var ellipsestext = "...";
            var moretext = "Show more >";
            var lesstext = "Show less";
            $('.more').each(function() {
                var content = $(this).html();
                if (content.length > showChar) {

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);
                    var html = c + '<span class="moreellipses">' + ellipsestext +
                        '&nbsp;</span><span class="morecontent"><span>' + h +
                        '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
                    $(this).html(html);
                }

            });
            $(".morelink").click(function() {
                if ($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });

        sjq(document).ready(function($) {
            var sync1 = $("#sync1");
            var sync2 = $("#sync2");
            sync1.owlCarousel({
                singleItem: true,
                slideSpeed: 1000,
                navigation: false,
                pagination: false,
                afterAction: syncPosition,
                responsiveRefreshRate: 200,
            });
            sync2.owlCarousel({
                items: 3,
                itemsDesktop: [1199, 2],
                itemsDesktopSmall: [991, 1],
                itemsTablet: [767, 2],
                itemsMobile: [479, 2],
                navigation: true,
                navigationText: false,
                pagination: false,
                responsiveRefreshRate: 100,
                afterInit: function(el) {
                    el.find(".owl-item").eq(0).addClass("synced");
                    el.find(".owl-wrapper").equalHeights();
                },
                afterUpdate: function(el) {
                    el.find(".owl-wrapper").equalHeights();
                }
            });

            function syncPosition(el) {
                var current = this.currentItem;
                $("#sync2")
                    .find(".owl-item")
                    .removeClass("synced")
                    .eq(current)
                    .addClass("synced")
                if ($("#sync2").data("owlCarousel") !== undefined) {
                    center(current)
                }
            }

            $("#sync2").on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).data("owlItem");
                sync1.trigger("owl.goTo", number);
            });

            function center(number) {
                var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
                var num = number;
                var found = false;
                for (var i in sync2visible) {
                    if (num === sync2visible[i]) {
                        var found = true;
                    }
                }

                if (found === false) {
                    if (num > sync2visible[sync2visible.length - 1]) {
                        sync2.trigger("owl.goTo", num - sync2visible.length + 2)
                    } else {
                        if (num - 1 === -1) {
                            num = 0;
                        }
                        sync2.trigger("owl.goTo", num);
                    }
                } else if (num === sync2visible[sync2visible.length - 1]) {
                    sync2.trigger("owl.goTo", sync2visible[1])
                } else if (num === sync2visible[0]) {
                    sync2.trigger("owl.goTo", num - 1)
                }
            }
            var $easyzoom = $('.product-images .easyzoom').easyZoom();
            var $easyzoomApi = $easyzoom.data('easyZoom');
        });
    </script>

    @if (session('device') != 'mobile')
        <script>
            $('#lang').click(function(e) {
                e.preventDefault();
                if ("{!! $language !!}" == 'en') {
                    window.location = 'https://iwannatrip.com/Ferry-Galapagos';
                } else {
                    window.location = 'https://iwannatrip.com/en/Ferry-Galapagos';
                }
            });
            jQuery(document).ready(function($) {

                var jssor_1_SlideshowTransitions = [{
                    $Duration: 1800,
                    $Opacity: 2
                }];
                var jssor_1_options = {
                    $AutoPlay: true,
                    $SlideshowOptions: {
                        $Class: $JssorSlideshowRunner$,
                        $Transitions: jssor_1_SlideshowTransitions,
                        $TransitionsOrder: 1
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    }
                };
                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1360);
                        jssor_1_slider.$ScaleWidth(refSize);
                    } else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>

        <style>
            /* jssor slider bullet navigator skin 05 css */
            /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
            .jssorb05 {
                position: absolute;
            }

            .jssorb05 div,
            .jssorb05 div:hover,
            .jssorb05 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background: url ("{!! asset('img/internas/b05.png') !!}") no-repeat;
                overflow: hidden;
                cursor: pointer;
            }

            .jssorb05 div {
                background-position: -7px -7px;
            }

            .jssorb05 div:hover,
            .jssorb05 .av:hover {
                background-position: -37px -7px;
            }

            .jssorb05 .av {
                background-position: -67px -7px;
            }

            .jssorb05 .dn,
            .jssorb05 .dn:hover {
                background-position: -97px -7px;
            }

            /* jssor slider arrow navigator skin 12 css */
            /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
            .jssora12l,
            .jssora12r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 30px;
                height: 46px;
                cursor: pointer;
                background: url("{!! asset('img/internas/a12.png') !!}") no-repeat;
                overflow: hidden;
            }

            .jssora12l {
                background-position: -16px -37px;
            }

            .jssora12r {
                background-position: -75px -37px;
            }

            .jssora12l:hover {
                background-position: -136px -37px;
            }

            .jssora12r:hover {
                background-position: -195px -37px;
            }

            .jssora12l.jssora12ldn {
                background-position: -256px -37px;
            }

            .jssora12r.jssora12rdn {
                background-position: -315px -37px;
            }
        </style>
    @else
        <script></script>
    @endif

    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
        $('.scrollup').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });


        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scrollupWeb').fadeIn();
            } else {
                $('.scrollupWeb').fadeOut();
            }
        });

        $('.scrollupWeb').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

        $(function() {
            $(".searchCity").autocomplete({
                source: availableTags
            });
        });

        //load page -->
        function onReady(callback) {
            var intervalId = window.setInterval(function() {
                if (document.getElementsByTagName('body')[0] !== undefined) {
                    window.clearInterval(intervalId);
                    callback.call(this);
                }
            }, 1000);
        }

        function setVisible(selector, visible) {
            document.querySelector(selector).style.display = visible ? 'block' : 'none';
        }

        onReady(function() {
            setVisible('.page', true);
            setVisible('#loading', false);
        });

        //load page  -->
    </script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="{{ asset('public_components/js/main.js') }}"></script>
</body>

</html>
