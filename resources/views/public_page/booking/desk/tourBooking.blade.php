<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>


    <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <!-- Page Title -->


    <?php

      header("Cache-Control: max-age=25920000"); //30days (60sec * 60min * 24hours * 30days)

     if(session('locale') == 'en' && $agrupacion[0]->nombre_eng!=''){
		$tituloIdioma=$agrupacion[0]->nombre_eng;
		$detalleIdioma=$agrupacion[0]->descripcion_eng;
        $keywordsIdioma=$agrupacion[0]->key_words_eng;
        $h1=$agrupacion[0]->h1_eng;
		}
	 else{
		$tituloIdioma=$agrupacion[0]->nombre;
		$detalleIdioma=$agrupacion[0]->descripcion;
        $keywordsIdioma=$agrupacion[0]->key_words;
        $h1=$agrupacion[0]->h1_esp;
	}
	$language=session('locale');
	 $nombreCanonicalRed=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonicalRed = str_replace(' ', '-', $nombreCanonicalRed);
                                $nombreCanonicalRed = str_replace('/', '-', $nombreCanonicalRed);
                                $nombreCanonicalRed = str_replace('?', '-', $nombreCanonicalRed);
                                $nombreCanonicalRed = str_replace("'", '-', $nombreCanonicalRed);
                                $nombreCanonicalRed = str_replace("#", '-', $nombreCanonicalRed);

    $mobile= preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	if($mobile){
	    $desk = "mobile";
		Session::put('device', $desk);
	}
    ?>
    <title>{!!$tituloIdioma!!}</title>


    <!-- Meta Tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" />
    <meta name="_token" content="{!!csrf_token() !!}" />
    <?php
        $length = 150;
        //Primero eliminamos las etiquetas html y luego cortamos el string
        $stringDisplay = substr(strip_tags($detalleIdioma), 0, $length);
        //Si el texto es mayor que la longitud se agrega puntos suspensivos
        if (strlen(strip_tags($detalleIdioma)) > $length)
        $stringDisplay .= ' ...';
        $str = utf8_encode("Viaja y descubre lugares, tours, comida, huecas, aventuras,gente y mÃ¡s. Hoteles DiversiÃ³n Restaurantes Cultura");

		       $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
                                $nombreCanonical = str_replace("#", '-', $nombreCanonical);



                                    $tituloIdiomaEN=$agrupacion[0]->nombre_eng;
                                    $nombreCanonicalEN=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdiomaEN))));
                                    $nombreCanonicalEN = str_replace(' ', '-', $nombreCanonicalEN);
                                    $nombreCanonicalEN = str_replace('/', '-', $nombreCanonicalEN);
                                    $nombreCanonicalEN = str_replace('?', '-', $nombreCanonicalEN);
                                    $nombreCanonicalEN = str_replace("'", '-', $nombreCanonicalEN);
                                    $nombreCanonicalEN = str_replace("#", '-', $nombreCanonicalEN);


                                    $tituloIdiomaES=$agrupacion[0]->nombre;

                                    $nombreCanonicalES=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdiomaES))));
                                    $nombreCanonicalES = str_replace(' ', '-', $nombreCanonicalES);
                                    $nombreCanonicalES = str_replace('/', '-', $nombreCanonicalES);
                                    $nombreCanonicalES = str_replace('?', '-', $nombreCanonicalES);
                                    $nombreCanonicalES = str_replace("'", '-', $nombreCanonicalES);
                                    $nombreCanonicalES = str_replace("#", '-', $nombreCanonicalES);




								$language=session('locale');
    ?>
    <meta name="description" content='{!!$keywordsIdioma!!}. {!!str_replace("\""," ",$stringDisplay)!!}'>
    <meta name="keywords" content="{!!$keywordsIdioma!!} ">
    <meta name="author" content="iWaNaTrip group">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if($language=="es")
    <meta http-equiv="Content-Language" content="es">
    @else
    <meta http-equiv="Content-Language" content="en_US">
    @endif


    <meta property="og:title" content="{!!$tituloIdioma!!}" />
    <meta property="og:description" content="{!!$stringDisplay!!}" />

    @if(isset($imagenes[0]->filename))
    <?php $header= 'https://bookiw.iwannatrip.com/app/web/uploads/'.$imagenes[0]->filename;?>
    <meta property="og:image" content="{!!$header!!}" />
    @endif


    <!-- Theme Styles -->
    <link rel="apple-touch-icon" href="{{ asset('img/60x60_logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/76x76logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/120x120logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/180x180logo_iwana.png')}}">
    <link rel="icon" sizes="180x180" href="{{ asset('img/180x180logo_iwana.png')}}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" />
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png')}}" />


    @if($language=="en")
    <link rel="canonical"
        href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" />
    <link rel="alternate"
        href="https://iwannatrip.com/es/tour/{!!$nombreCanonicalES!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
        hreflang="es-ec" />
    <link rel="alternate"
        href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
        hreflang="en-ec" />
    <link rel="alternate"
        href="https://iwannatrip.com/es/tour/{!!$nombreCanonicalES!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
        hreflang="es" />
    <link rel="alternate"
        href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
        hreflang="en" />
    <link rel="alternate"
        href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
        hreflang="x-default" />

    @else

    <link rel="canonical"
        href="https://iwannatrip.com/es/tour/{!!$nombreCanonicalES!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" />
    <link rel="alternate"
        href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
        hreflang="en-ec" />
    <link rel="alternate"
        href="https://iwannatrip.com/es/tour/{!!$nombreCanonicalES!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
        hreflang="es-ec" />
    <link rel="alternate"
        href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
        hreflang="en" />
    <link rel="alternate"
        href="https://iwannatrip.com/es/tour/{!!$nombreCanonicalES!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
        hreflang="es" />
    <link rel="alternate"
        href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
        hreflang="x-default" />

    @endif


    <link rel="stylesheet" href="{{asset('public_components/css/bootstrap.min.css')}}" media="none"
        onload="if(media!=='all')media='all'">
    <link rel="stylesheet" href="{{asset('public_components/css/font-awesome.min.css')}}" media="none"
        onload="if(media!=='all')media='all'">
    <link rel="stylesheet" href="{{ asset('public_components/css/letras.css')}}" media="none"
        onload="if(media!=='all')media='all'">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('public_components/components/owl-carousel/owl.carousel.css')}}" media="none"
        onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" type="text/css"
        href="{{asset('public_components/components/owl-carousel/owl.transitions.css')}}" media="none"
        onload="if(media!=='all')media='all'" />

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('public_components/components/magnific-popup/magnific-popup.css')}}"
        media="none" onload="if(media!=='all')media='all'" />
    <!-- Main Style -->

    <link rel="stylesheet" href="{{asset('public_components/css/style.css')}}" media="none"
        onload="if(media!=='all')media='all'">


    <!-- Updated Styles -->

    <link rel="stylesheet" href="{{asset('public_components/css/updates.css')}}" media="none"
        onload="if(media!=='all')media='all'">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('public_components/css/custom.css')}}" media="none"
        onload="if(media!=='all')media='all'">



    <!-- Booking Styles -->

    <link rel="stylesheet" href="{{asset('public_components/booking/css/booking.css')}}" media="none"
        onload="if(media!=='all')media='all'">
    {{-- <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> --}}

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{asset('public_components/css/responsive.css')}}" media="none"
        onload="if(media!=='all')media='all'">

    {!!HTML::script('js/jquery.js') !!}
    {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}
    <!-- Responsive Styles
    {!!HTML::script('js/sweetAlert/sweetalert2.min.js') !!}-->

    <!-- CSS for IE -->
    <!--[if lte IE 9]>
            <link rel="stylesheet" type="text/css" href="{{ asset('public_components/css/ie.css')}}" />
        <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->
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


    <!-- Slider -->
    <!-- {!!HTML::script('js/sliderTop/jssor.slider.mini.js') !!} -->
    <style type="text/css">
        @font-face {
            font-family: 'Pacifico';
            font-style: normal;
            font-weight: 400;
            src: local('Pacifico Regular'), local('Pacifico-Regular'), url(https://fonts.gstatic.com/s/pacifico/v12/FwZY7-Qmy14u9lezJ-6H6MmBp0u-.woff2) format('woff2');
            font-display: swap;
        }

        pre {
            display: block;
            padding: 0px;
            margin: 0 0 10px;
            font-size: 13px;
            line-height: 1.42857143;
            word-break: break-all;
            color: #000000f2;
            background-color: #ffffff;
            border: 1px solid #ffffff;
            border-radius: 4px;
            white-space: pre-wrap;
            white-space: -moz-pre-wrap;
            white-space: -pre-wrap;
            white-space: -o-pre-wrap;
            word-wrap: break-word;
            font: 100%/150% "Open Sans", Arial, Helvetica, sans-serif;
        }

        .more {
            background-color: white;
            border-radius: 4px;
            color: #000000f2;
            display: block;
            font-size: 12px;
            line-height: 1.42857;
            margin: 0 0 10px;
            padding: 9.5px;
            text-align: justify;

            word-break: inherit;
            word-wrap: inherit;
            font-family: arial;
            border: 0 solid;
            white-space: pre-line;
            /* CSS 3 */
            white-space: -moz-pre-wrap;
            /* Mozilla, since 1999 */
            white-space: -pre-line;
            /* Opera 4-6 */
            white-space: -o-pre-line;
            /* Opera 7 */
            word-wrap: inherit;
            /* Internet Explorer 5.5+ */
        }

        .section-info {
            padding: 20px 0;
        }

        .owl-buttons {
            display: none !important;
        }

        .page-title-container .page-title {
            padding: 100px 0 25px;
        }
    </style>

    {{-- ESTILOS PARA EL BOOKING --}}
    <style>
        .popover-markup .popover {
            width: 150%;
        }

        .popover-markup label {
            padding: 0px;
        }

        .container {
            margin: 0px auto;
        }

        .error {
            color: red;
        }

        /* .d-none {
            display: none !important;
            visibility: hidden !important;
        }         */
        .one {
            padding-top: 28.0519480519%;
            background-image: url("");
        }



        .one.visible {
            background-image: var(--background);
        }
    </style>
</head>

<body class="woocommerce">

    <div id="page-wrapper">

        <div class="page-title-container">
            <div class="page-title">
            </div>
            <ul class="breadcrumbs">
                <li><a href="{!!asset('/')!!}"
                        onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1')}}</a></li>
                <li class="active">{!!$tituloIdioma!!}</li>
            </ul>
        </div>

        <header id="header" class="header-color-white">
            @include('public_page.reusable.header')
        </header>

        <section id="content">

            <div class="container">

                <div class="row">

                    @if(session('device')!='mobile')
                    <div class="sidebar col-sm-4 col-md-3">

                        <div class="widget post-slider box">
                            <div class="owl-carousel carouselLeft"
                                data-itemsPerDisplayWidth="[[0, 1], [480, 2], [768, 1], [992, 1], [1200, 1]]"
                                data-items="1" data-navigation="false">
                                @foreach ($imagenes as $imagen)
                                    <?php
                                        $file = 'https://bookiw.iwannatrip.com/app/web/uploadsMobile/'.$imagen->filename;
                                        if (!file_exists($file)) {
                                            $file = 'https://bookiw.iwannatrip.com/app/web/uploads/'.$imagen->filename;
                                        }
                                    ?>

                                    <a class="soap-mfp-popup"
                                        href="https://bookiw.iwannatrip.com/app/web/uploadsMobile/{!!$imagen->filename!!}">
                                        <img class="lazy" src="/images/no-image-available.png" data-src="{{$file}}"
                                            alt="{{$imagen->filename}}">
                                    </a>

                                @endforeach
                            </div>
                        </div>

                        <script>
                            (function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="box">
                            <h4>{{ trans('publico/labels.label77')}}</h4>
                            <?php
                                    $nombre = str_replace(' ', '-', $tituloIdioma);
                                    $nombre = str_replace('/', '-', $nombre);
                                    $nombre = str_replace('?', '', $nombre);
                                    $nombre = str_replace("'", '', $nombre);
                                ?>


                            @if(session('locale') == 'en' )
                                <div class="fb-share-button"
                                data-href="{!!asset('/en/tour')!!}/{!!$nombre!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
                                data-layout="button_count"></div>
                            @else
                                <div class="fb-share-button"
                                data-href="{!!asset('/tour')!!}/{!!$nombre!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"
                                data-layout="button_count"></div>
                            @endif

                        </div>
                        @endif


                        @if(session('device')!='mobile')
                        <a href="{!!asset('/faqt')!!}">
                            <img src="{{ url(env('AWS_PUBLIC_URL').'util/3dsecure-notext.png') }}"
                                title="Este es un sitio seguro, ver mas detalles...">

                        </a>

                        </br>
                        </br>
                        </br>

                        <a target="_blank" href="{!!asset('/faqt')!!}">
                            <img width="182" height="182" alt="web site" src="{{ asset('img/HTTPS.png/')}}">
                            <dd>{{(session('locale') == 'es' )?"Los datos de su tarjeta de crédito pasan directamente a través del Getway de pago seguro para su procesamiento en tiempo real. Nosotros no almacenamos ningún tipo de información de su tarjeta de crédito. Una vez que usted haga click en el botón de pago, será redireccionado al Getway de pago seguro para procesar su pago":"Credit Card Details are securely passed directly through to the Payment Getway for processing in real time. We do not store your Credit Card details at any time. Once you click on Pay you will be redirect to the secure Getway page to process the payment"}}
                            </dd>
                        </a>

                        </br>
                        </br>

                        <a target="_blank" href="{!!asset('/faqt')!!}">
                            <img width="42" height="42" alt="web site" src="{{ asset('img/faq.png/')}}">
                        </a>

                        <h2 style="color:#FF6600" class="product-title"><a target="_blank"
                                href="{!!asset('/contactos')!!}" class=''> info@iwannatrip.com</a>
                        </h2>

                        <a rel="nofollow"
                            href="https://www.partner.viator.com/en/82253/Ecuador/d727-ttd?activities=all&activities=all&seoDestination=Ecuador&section=ttd&destinationID=727"><img
                                src="https://www.partner.viator.com/partner/admin/images/banners/shorex_sale_124x240.jpg"
                                border="0" alt="Viator" /></a>
                        </br>

                        </br>
                        @endif

                        @if(session('device')!='mobile')


                            @if(isset($imagenesOperador[0]->filename))

                                <a target="_blank" href="{!!asset('/detalle')!!}/detail/{!!$atraccionComplete->id!!}">
                                    <img width="42" height="42" alt="web site" src="{{ asset('img/website.png/')}}">
                                    <dd>{{(session('locale') == 'es' )?"Tour operado por":"Tour operated by"}}</dd>
                                </a>

                                <div class="widget banner-slider box">
                                    <div class="owl-carousel"
                                        data-itemsPerDisplayWidth="[[0, 1], [480, 2], [768, 1], [992, 1], [1200, 1]]"
                                        data-items="1">
                                        <a href="{!!asset('/detalle')!!}/detail/{!!$atraccionComplete->id!!}" >
                                            <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/'.$imagenesOperador[0]->filename) !!}" alt=""/>
                                        </a>
                                    </div>
                                </div>

                            @endif

                    </div>
                        @endif

                    <div id="main" class="col-md-6">

                        <div class="product type-product">
                            <div class="row single-product-details">
                                <div class="summary entry-summary col-sm-12 box-lg">

                                    <div class="clearfix">

                                        @if($h1=="")

                                        <h1 class="product-title entry-title">{{$tituloIdioma}} sdasdasdsdsd</h1>
                                        @else
                                        <h1 class="product-title entry-title">{{$h1}}</h1>
                                        @endif


                                        {{-- @if($agrupamientos[0]->total == 0)  --}}
                                        @if($calificacionAgrupamiento[0]->calificacion == 0)
                                        <span class="star-rating" title="0" data-toggle="tooltip">
                                            <span data-stars="0"></span>
                                        </span>
                                        @endif

                                        {{-- @if($agrupamientos[0]->total > 0) --}}
                                        @if($calificacionAgrupamiento[0]->calificacion > 0)
                                        <?php $idAgrupamiento = $agrupamientos[0]->id; ?>
                                        <div class="tooltip_templates">
                                            <span id="tooltip_content_{{$idAgrupamiento}}">
                                                <?php $Resumencalificacion = "";?>
                                                @foreach ($agrupamientos[0]->resumen_views as $resumen)
                                                <div>
                                                    <?php
                                                        if (session('locale') == 'es') {
                                                            $nameReview = $resumen->tipo_review;
                                                        } else {
                                                            $nameReview = $resumen->tipo_review_eng;
                                                        }
                                                    ?>
                                                    {{$nameReview}} : {{$resumen->calificacion}}
                                                    <div class="progressContent">
                                                        <div class="barProg"
                                                            style="width: {{intval($resumen->calificacion)*100/5}}%">
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </span>
                                        </div>
                                        <span style="cursor: pointer" data-toggle="tooltip" class="star-rating">
                                            {{-- <span data-stars="{!!($agrupamientos[0]->total)/count($agrupamientos[0]->resumen_views)!!}"></span> --}}
                                            <span
                                                data-stars="{!!($calificacionAgrupamiento[0]->calificacion)!!}"></span>
                                            <div class="tooltip"
                                                data-tooltip-content="#tooltip_content_{{$idAgrupamiento}}"></div>
                                        </span>
                                        @endif
                                        <span
                                            style="color: #ff9000;font-size: 15px;">({{$calificacionAgrupamiento[0]->calificacion}})</span>
                                        @if($numerosReviews[0]->numerosReviews > 0)
                                        <span style="color: #1b4268;font-size: 15px;">
                                            &nbsp;{{ $numerosReviews[0]->numerosReviews }} Reviews </span>
                                        @endif
                                    </div>
                                    <span class="product-price box"> {{(session('locale') == 'es' )?"Desde":"From"}} {!!
                                        $agrupamientos[0]->precioDesde !!}$ </span>

                                </div>
                            </div>
                            <!--<h4>{{ trans('publico/labels.label28')}}</h4>
                            <div class="iso-container iso-col-3 style-masonry has-column-width cercanos ">
                                @section('cercanos') @show
                            </div>-->
                        </div>

                        {{-- INICIO SECCION DE CARGA DE LOS CALENDARIOS --}}
                        {{-- <div id="section-show-alert" onclick="showAlert()"></div> --}}
                        <div id="section-info-booking-hide" onclick="$('.container').LoadingOverlay('hide',true);">
                        </div>
                        <div id="section-info-booking-show" onclick="$('.container').LoadingOverlay('show');"></div>

                        <div id="btnsmAvailab" class="tab-container full-width style2 btnsmAvailab">
                            <ul class="tabs clearfix" style="background: #f60 !important;">

                                <?php $contador = 0;?>
                                <li class="calendarsXY active"
                                    onClick="ga('send', 'event', 'Calendar', 'SelectCalendar', 'InteractionCalendar');"
                                    class="active"><a href="#tab3"
                                        data-toggle="tab">{{(session('locale') == 'es' )?"Reserva ahora":"Book now"}}</a>
                                </li>

                            </ul>
                        </div>
                        <br>

                        <div class="section-info ">
                            {{-- INICIO SECCION DE CARGA DE LOS CALENDARIOS --}}
                            <a href="{!!asset('/tourList')!!}">
                                <div class="text-left">
                                    <h1>
                                        <i class="fa fa-map"></i> <span
                                            style="color: red !important;">{{(session('locale') == 'es' )?"Servicio incluye":"Service included"}}</span>
                                        <em class="skin-color"> </em>
                                    </h1>
                                </div>
                            </a>
                            {{-- DESCRIPCION DEL AGRUPAMIENTO --}}
                            <dl class="product-meta">
                                <pre style="padding: 9.5px;text-align: justify;word-break: inherit;white-space: pre-line;word-wrap: inherit;font-family: arial;border: 0 solid;"
                                    class="mores"> {!!$detalleIdioma!!} </pre>
                            </dl>
                            {{-- DESCRIPCION DEL AGRUPAMIENTO --}}
                        </div>
                        <!--
                        <div class="section-info" >

                            @if(count($calendarios)>0)

                                <div class="row text-center">

                                    {{-- <a href="{!!asset('/tourList')!!}">
                                        <div class="text-left">
                                            <h1>
                                                <i class="fa fa-globe"></i> <span style="color: red !important;">{{(session('locale') == 'es' )?"Disponibilidad":"Availability"}} </span>
                                                <em class="skin-color">  </em>
                                            </h1>
                                        </div>
                                    </a> --}}
                                    {{-- FIN NUEVA SECCION DEL BOOKING --}}
                                    <div id="booking" class="section">
                                        <div class="section-center">
                                            {{-- <div class="container"> --}}
                                                <div class="row">
                                                    <div class="booking-form">

                                                        <form id="contact_us" method="post" action="javascript:void(0)">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <span class="form-label">{{utf8_encode( trans('booking/booking.label1'))}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <input class="form-control select-height" type="date" name="date" id="date" required>
                                                                    {{-- <span class="form-label">{{utf8_encode( trans('booking/booking.label1'))}}</span> --}}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <span class="form-label">{{utf8_encode( trans('booking/booking.label2'))}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <select class="form-control select-height" name="calendar" id="calendar" required>
                                                                            @foreach($calendarios as $calendario)
                                                                            <option value="{{$calendario->id}}">{{$calendario->content}}</option>
                                                                            @endforeach
                                                                    </select>
                                                                    <span class="select-arrow"></span>
                                                                    {{-- <span class="form-label">{{utf8_encode( trans('booking/booking.label2'))}}</span> --}}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <span class="form-label">{{utf8_encode( trans('booking/booking.label3'))}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <select class="form-control select-height" name="passengers" id="passengers" required>
                                                                        <option value="1">1</option>
                                                                        <option value="2" selected>2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                    </select>
                                                                    <span class="select-arrow"></span>
                                                                    {{-- <span class="form-label">{{utf8_encode( trans('booking/booking.label3'))}}</span> --}}
                                                                </div>
                                                            </div>

                                                            <div class="col-md-8 col-md-offset-2">
                                                                <div class="form-group">
                                                                    <div class="alert alert-error" id="message_pay_div1">
                                                                        <span id="message_pay1"></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-8 col-md-offset-2">
                                                                <div class="form-btn">
                                                                    <br>
                                                                    <button class="btn submit-btn" id="send_form1">{{utf8_encode( trans('booking/booking.label4'))}}</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                    {{-- FIN NUEVA SECCION DEL BOOKING --}}

                                </div>


                                <div>

                                    {{-- SECCION DE LA RESERVACION --}}
                                    {{-- <div class="row text-center">

                                        <form id="contact_us" method="post" action="javascript:void(0)">

                                            <div class="form-group col-xs-8 col-sm-8 col-md-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2">
                                                <label for="exampleInputEmail1">{{(session('locale') == 'es' )?"Fecha":"Date"}}</label>
                                                <input type="text" class="form-control" name="date" id="date" autocomplete="off">
                                            </div>

                                            <div class="form-group col-xs-8 col-sm-8 col-md-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2">
                                                <label for="exampleInputPassword1">{{(session('locale') == 'es' )?"Horarios":"Schedule"}}</label>
                                                <select class="form-control" name="calendar" id="calendar">
                                                    @foreach($calendarios as $calendario)
                                                    <option value="{{$calendario->id}}">{{$calendario->content}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-8 col-sm-8 col-md-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2">
                                                <label for="exampleInputFile">{{(session('locale') == 'es' )?"Pasajeros":"Passenger"}}</label>
                                                <div class="popover-markup">
                                                    <div class="trigger form-group form-group-icon-left">
                                                        <input type="number" name="passengers" id="passengers" class="form-control" value="1" readonly="readonly">
                                                    </div>
                                                    <div class="content hide">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5"><strong>{{(session('locale') == 'es' )?"Adultos":"Adults"}}</strong><br></label>
                                                        <div class="input-group number-spinner col-md-12">
                                                            <span class="input-group-btn">
                                                                <a class="btn" data-dir="dwn" style="margin-top: 0px !important;height: 34px !important;border-radius: 0px !important; color: #fff !important; background-color: #d9534f !important;border-color: #d43f3a !important;"><span class="glyphicon glyphicon-minus"></span></a>
                                                            </span>
                                                            <input type="text" disabled name="adult" id="adult" class="form-control text-center" value="1" max="20  " min="1">
                                                            <span class="input-group-btn">
                                                                <a class="btn" data-dir="up" style="margin-top: 0px !important;height: 34px !important;border-radius: 0px !important; background-color: #5bc0de !important; color: #fff !important;border-color: #46b8da;"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-default btn-block demise">{{(session('locale') == 'es' )?"Seleccionar":"Select"}}</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-xs-8 col-sm-8 col-md-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2">
                                                <div class="alert alert-error d-none" id="msg_div">
                                                    <span id="res_message"></span>
                                                </div>
                                            </div>

                                            <div class="form-group col-xs-8 col-sm-8 col-md-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2">
                                                <button type="submit" id="send_form1" class="btn" style="color: #fff !important;font-weight: 600 !important;">{{(session('locale') == 'es' )?"Actualizar":"Update"}}</button>
                                            </div>

                                        </form>

                                    </div> --}}
                                    {{-- SECCION DE LA RESERVACION --}}

                                    {{-- SECCION DETALLE DE LA RESERVACION --}}
                                    <div class="row" id="information">
                                        <div class="form-group col-sm-12 col-md-12">
                                            <div class="panel-group">
                                                <div class="panel panel-primary">
                                                <div class="panel-heading color-heading" style="background-color: #5cb85c !important;">{{html_entity_decode( trans('booking/booking.label9'))}}</div>
                                                <div class="panel-body">
                                                    <p class="detail-booking"> {{utf8_encode( trans('booking/booking.label1'))}}:      <strong><span id="finalDate"></span>      </strong>  </p>
                                                    <p class="detail-booking"> {{utf8_encode( trans('booking/booking.label6'))}}:    <strong><span id="finalCalendar"></span>  </strong>  </p>
                                                    <p class="detail-booking"> {{utf8_encode( trans('booking/booking.label3'))}}:  <strong><span id="finalPassenger"></span> </strong>  </p>
                                                    <p class="detail-booking"> {{utf8_encode( trans('booking/booking.label5'))}}:     <strong>$<span id="finalPrice"></span>    </strong>  </p>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="panel-group">
                                                    <div class="panel panel-primary">
                                                    <div class="panel-heading color-heading" style="background-color: #5cb85c !important;">{{html_entity_decode( trans('booking/booking.label10'))}}</div>
                                                    <div class="panel-body">
                                                        <form class="form-horizontal" id="contact_info" method="post" action="javascript:void(0)">
                                                            <div class="form-group">
                                                                {{-- <label for="inputEmail3" class="col-sm-2 control-label">{{(session('locale') == 'es' )?"Arreglar fecha":"Fixed Price"}}</label> --}}
                                                                <div class="col-sm-12">
                                                                    <div class="checkbox">
                                                                        <label class="texto">
                                                                        <input type="checkbox" name="fixDate" id="fixDate">
                                                                        {{utf8_encode( trans('booking/booking.label7'))}}&nbsp; <a href="https://iwannatrip.com/TermsConditions" target="_blank" style="font-weight: bold;text-align: center">{{html_entity_decode( trans('booking/booking.label8'))}}</a>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                {{-- <label for="inputEmail3" class="col-sm-2 control-label">{{(session('locale') == 'es' )?"Nombre":"Name"}}</label> --}}
                                                                <div class="col-sm-12">
                                                                    {{-- <input type="text" class="form-control input-text full-width" name="name" id="name"> --}}
                                                                    <input type="text" class="input-text full-width texto" name="name" id="name" placeholder="{!! html_entity_decode( trans('booking/booking.label11')) !!}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                {{-- <label for="inputEmail3" class="col-sm-2 control-label">{{(session('locale') == 'es' )?"Apellido":"Lastname"}}</label> --}}
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="input-text full-width texto" name="lastname" id="lastname" placeholder="{!! html_entity_decode( trans('booking/booking.label12')) !!}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                {{-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> --}}
                                                                <div class="col-sm-12">
                                                                    <input type="email" class="input-text full-width texto" name="email" id="email" placeholder="{!! html_entity_decode( trans('booking/booking.label13')) !!}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                {{-- <label for="inputEmail3" class="col-sm-2 control-label">{{(session('locale') == 'es' )?"Identificación":"ID/Passport"}}</label> --}}
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="input-text full-width texto" name="identification" id="identification" placeholder="{!! html_entity_decode( trans('booking/booking.label14')) !!}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                {{-- <label for="inputEmail3" class="col-sm-2 control-label">{{(session('locale') == 'es' )?"Teléfono":"Phone"}}</label> --}}
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="input-text full-width texto" name="phone" id="phone" placeholder="{!! html_entity_decode( trans('booking/booking.label15')) !!}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                {{-- <label for="inputEmail3" class="col-sm-2 control-label">{{(session('locale') == 'es' )?"Dirección":"Address"}}</label> --}}
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="input-text full-width texto" name="address" id="address" placeholder="{!! html_entity_decode( trans('booking/booking.label16')) !!}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        <input type="text" class="input-text full-width texto" name="cupon" id="cupon" placeholder="{!! html_entity_decode( trans('booking/booking.label19')) !!}">
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="alert alert-error" id="message_pay_div">
                                                                    <span id="message_pay"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-offset-2 col-sm-8">
                                                                    <button type="submit" id="send_form_info" class="btn payButton" style="color: #fff !important;font-weight: 600 !important;">{{ html_entity_decode( trans('booking/booking.label17')) }}</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    </div>
                                            </div>

                                        </div>
                                    </div>
                                    {{-- SECCION DETALLE DE LA RESERVACION --}}

                                </div>

                            @endif

                            </div>

								-->

                        <!-- carga de los calendarios -->
                        <div class="section-info ">
                            @if(count($calendarios)== 0)
                            <h3 class="section-title">No hay booking disponibles para este tour.</h3>
                            @endif
                            @if(count($calendarios)>0)

                            @if(count($calendarios)==1)

                            <h3 class="section-title">{{utf8_encode( trans('booking/labels.label50'))}}</h3>
                            @else

                            <h3 class="section-title">
                                {{(session('locale') == 'es' )?"Seleccione horario":"Select schedule"}}</h3>


                            @endif

                            <div class='calendarios'></div>

                            <div class="tab-container full-width style2">
                                <ul class="tabs clearfix">
                                    <?php $contador = 0;?>
                                    @foreach($calendarios as $calendario)
                                    @if($calendario->content != '')
                                    @if($contador == 0)
                                    <li class="calendarsXY active"
                                        onClick="ga('send', 'event', 'Calendar', 'SelectCalendar', 'InteractionCalendar');"
                                        class="active"><a href="#tab3-{!!$calendario->id!!}"
                                            data-toggle="tab">{!!$calendario->content!!}</a></li>
                                    @else
                                    <li><a class="calendarsXY"
                                            onClick="ga('send', 'event', 'Calendar', 'SelectCalendar', 'InteractionCalendar');"
                                            href="#tab3-{!!$calendario->id!!}"
                                            data-toggle="tab">{!!$calendario->content!!}</a></li>
                                    @endif
                                    <?php $contador++;?>
                                    @endif
                                    @endforeach
                                </ul>

                                <?php $contador1 = 0;?>

                                <!--	<h3 class="section-title"> {{(session('locale') == 'es' )?"Al momento todos nuestras embarcaciones están llenas, favor revisa el día de mañana para verificar disponibilidad":"At the moment all our ferry are full, please check tomorrow for new availability"}}</h3>-->
                                @foreach($calendarios as $calendario)
                                @if($calendario->content != '')
                                @if($contador1 == 0)
                                <div id="tab3-{!!$calendario->id!!}" class="tab-content in active ">
                                    <div class="tab-pane" style="height: 800px;">
                                        <h3>{!!$calendario->content!!}</h3>
                                        <p> </p>
                                        <link
                                            href="https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=pjActionLoadCss&cid={!!$calendario->id!!}"
                                            type="text/css" rel="stylesheet" />
                                        <script type="text/javascript"
                                            src="https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=pjActionLoad&cid={!!$calendario->id!!}&view=1">
                                        </script>
                                    </div>
                                </div>
                                @else
                                <div id="tab3-{!!$calendario->id!!}" class="tab-content">
                                    <div class="tab-pane" style="height: 800px;">
                                        <h3>{!!$calendario->content!!}</h3>
                                        <p> </p>
                                        <link
                                            href="https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=pjActionLoadCss&cid={!!$calendario->id!!}"
                                            type="text/css" rel="stylesheet" />
                                        <script type="text/javascript"
                                            src="https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=pjActionLoad&cid={!!$calendario->id!!}&view=1">
                                        </script>
                                    </div>
                                </div>
                                @endif

                                <?php $contador1++;?>
                                @endif
                                @endforeach


                            </div>
                            @endif
                        </div>

                        <div id="principalReview">
                            <!-- CARGA DE LOS REVIEWS -->
                            @section('contentReviews')

                            @show
                            <!-- CARGA DE LOS REVIEWS -->
                        </div>

                    </div>

                    <div class="sidebar col-sm-4 col-md-3">
                        <div class="main-mini-search-form full-width box">
                            <div class="search-box">

                            </div>
                        </div>
                        <div class="main-mini-search-form full-width box">
                            {!!Form::open(['url' => route('min-search'), 'method' => 'get', 'id'=>'min-search']) !!}
                            <div class="search-box">
                                <input type="text" id="s" placeholder="Search" name="s" value="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                            {!!Form::close() !!}
                        </div>
                        <div class="widget box">
                            <a href="{!!asset('/tourList')!!}">
                                <h4>{{(session('locale') == 'es' )?"Reservas online iWaNaTrip":"Reservations online iWaNaTrip"}}
                                </h4>
                            </a>



                            <!--
                                    @foreach($agrupamientos2 as $group)

                                                <?php

                                                if(session('locale') == 'en' )
                                        $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($group->nombre_eng))));
                                    else
                                        $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($group->nombre))));


                                    $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                    $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                    $nombreCanonical = str_replace("'", '-', $nombreCanonical);


                                    ?>


                                    @endforeach-->


                            @include('public_page.reusable.AllTours')

                        </div>


                        <div class="widget banner-slider box">
                            <a
                                href="https://www.partner.viator.com/en/82253/Ecuador/d727-ttd?activities=all&activities=all&seoDestination=Ecuador&section=ttd&destinationID=727">
                                <h4>{{(session('locale') == 'es' )?"Tours & más cosas que hacer seleccionados para ti":"Tours & things to do hand-picked by our insiders "}}
                                </h4>
                            </a>



                            <a rel="nofollow"
                                href="https://www.partner.viator.com/en/82253/Ecuador/d727-ttd?activities=all&activities=all&seoDestination=Ecuador&section=ttd&destinationID=727"><img
                                    src="https://www.partner.viator.com/partner/admin/images/banners/On_Sale_med_300x250.gif"
                                    border="0" alt="Viator" /></a>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <footer id="footer" class="style4">
            <div class="callout-box style2">
                <div class="container">
                    <div class="callout-content">
                        <div class="callout-text">
                            <h4>{{ trans('publico/labels.label26')}}</h4>
                        </div>
                        <div class="callout-action">
                            <a href="https://iwannatrip.com" onclick="$('.woocommerce').LoadingOverlay('show');"
                                class="btn style4">{{ trans('publico/labels.label27')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="pagina" class="pagina"> @include('public_page.reusable.footer')
        </footer>
    </div>
    <!-- Modal full image-->
    <div class="modal modal-custom fade" id="form-img-full" tabindex="1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="imgFull" style="border:none; box-shadow: none;">
                <a class="btn btn-compare" title="Close" data-dismiss="modal" style=" margin-left: 90%;
                margin-top: 12px;
                padding: 0 15px;"><span style="padding: 0 4px;">X</span>
                </a>
            </div>
        </div>
    </div>


    <!-- Javascript -->
    {!!HTML::script('js/jquery.bootstrap.newsbox.min.js') !!}
    <script type="text/javascript" src="{{ asset('public_components/js/jquery-2.1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.noconflict.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/modernizr.2.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery-ui.1.11.2.min.js')}}"></script>
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="{{ asset('public_components/js/bootstrap.min.js')}}" defer></script>
    <!-- Magnific Popup core JS file -->
    <script type="text/javascript"
        src="{{ asset('public_components/components/magnific-popup/jquery.magnific-popup.min.js')}}" defer></script>
    <!-- parallax -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.stellar.min.js')}}" defer></script>
    <!-- waypoint -->
    <script type="text/javascript" src="{{ asset('public_components/js/waypoints.min.js')}}" defer></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('public_components/components/owl-carousel/owl.carousel.min.js')}}"
        defer></script>
    <!-- plugins -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.plugins.js')}}" defer></script>
    <!-- Google Map Api
    <script type='text/javascript' src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_EMZUmPpoFAnnKhXfBf5Gzl4FcK_jaLU"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/gmap3.js')}}"></script>-->

    <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>
    {!!HTML::script('js/Compartido.js') !!} {!!HTML::script('js/js_public/Compartido.js') !!}


    {{-- SCRIPTS DEL BOOKING --}}
    {{-- <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    {{-- SCRIPTS DEL BOOKING --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

    <script>
        function showAlert() {
            swal({
                title: "{{ trans('booking/booking.label24')}}",
                type: "info",
                showCancelButton: false,
                showConfirmButton: false,
                allowOutsideClick: false
            });
        }
    </script>

    {{-- ************************************************************* --}}
    {{--               CARGA DE LOS SCRIPT DE LOS REVIEWS              --}}
    {{-- ************************************************************* --}}
    <script>
        function ajaxRenderSection() {
            var nombreAgrupamiento = '{!! $tituloIdioma !!}';
            var idAUsuarioServicio = '{!! $group->id_usuario_servicio !!}';
            var idAgrupamiento = '{!! $agrupamientos[0]->id !!}';
            $('#target-reviews').LoadingOverlay('show')
            var url = SITEURLREVIEW + '/reviewsAgrupamiento/' + idAgrupamiento + '/' + limite + '/' +
            nombreAgrupamiento;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function (data) {
                    $('#principalReview').empty().append($(data.contentReviews));
                    limite = limite + 5;
                    $('#target-reviews').LoadingOverlay('hide')
                },
                error: function (data) {

                }
            });
        }
    </script>

    <script>
        var SITEURLREVIEW = '{{URL::to('')}}';
        var limite = 5;
        sjq(document).ready(function ($) {
            $(function () {
                var nombreAgrupamiento = '{!! $tituloIdioma !!}';
                var idAUsuarioServicio = '{!! $group->id_usuario_servicio !!}';
                var idAgrupamiento = '{!! $agrupamientos[0]->id !!}';

                var url = SITEURLREVIEW + '/reviewsAgrupamiento/' + idAgrupamiento + '/' + limite +
                    '/' + nombreAgrupamiento;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'json',
                    success: function (data) {
                        $('#principalReview').empty().append($(data.contentReviews));
                        limite = limite + 5;

                    },
                    error: function (data) {

                    }
                });
            });
        });
    </script>

    <script>
        /*****************************************************************/
        /* INICIOSHOW MORE / LESS REVIEWS
        /*****************************************************************/
        sjq(document).ready(function ($) {
            var showChar = 250; // How many characters are shown by default
            var ellipsestext = "";
            var moretext = " Show more >";
            var lesstext = " < Show less";
            $('.moreReview').each(function () {
                var content = $(this).html();
                if (content.length > showChar) {
                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);
                    var html =
                        `${c} <span class="moreellipses"> ${ellipsestext} &nbsp;</span><span class="morecontentReview"> ${h}</span> <span><a href="" class="morelinkReview" style="text-decoration: none;color: #ff6600;">${moretext}</a></span>`;
                    $(this).html(html);
                }
            });

            $(".morecontentReview").css("display", "none");

            $(".morelinkReview").click(function () {
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
        /*****************************************************************/
        /* FIN SHOW MORE / LESS REVIEWS
        /*****************************************************************/
    </script>
    {{-- ************************************************************* --}}
    {{--               CARGA DE LOS SCRIPT DE LOS REVIEWS              --}}
    {{-- ************************************************************* --}}

    <script>
        sjq(document).ready(function ($) {
            // Configure/customize these variables.
            var showChar = 1500; // How many characters are shown by default
            var ellipsestext = "...";
            var moretext = "Show more >";
            var lesstext = "Show less";
            $('.more').each(function () {
                var content = $(this).html();
                if (content.length > showChar) {
                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);
                    // var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
                    var html =
                        `${c} <span class="moreellipses"> ${ellipsestext} &nbsp;</span><span class="morecontent"> ${h}</span> <span><a href="" class="morelink">${moretext}</a></span>`;
                    // var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' ;
                    $(this).html(html);
                }
            });

            $(".morecontent").css("display", "none");

            $(".morelink").click(function () {
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

            $(".calendarsXY").click(function () {
                ga('send', 'event', 'Calendars', 'CalendarsINteraction', 'CalendarsInter', {
                    nonInteraction: true
                });
            });
        });
    </script>

    {{-- INICIO SCRIPTS PARA EL BOOKING --}}
    <script language="javascript">
        sjq(document).ready(function ($) {

            var blockDays = parseInt({!!$diasBloqueados!!});

            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate() + blockDays;
            var year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#date').attr('min', maxDate);
            $('#date').attr('value', maxDate);
        });
    </script>

    <script>
        sjq(document).ready(function ($) {

            $(function () {
                var $popover = $('.popover-markup>.trigger').popover({
                    html: true,
                    placement: 'bottom',
                    content: function () {
                        return $(this).parent().find('.content').html();
                    }
                });

                // open popover & inital value in form
                var passengers = [1, 0, 0];
                $('.popover-markup>.trigger').click(function (e) {
                    e.stopPropagation();
                    $(".popover-content input").each(function (i) {
                        $(this).val(passengers[i]);
                    });
                });
                // close popover
                $(document).click(function (e) {
                    if ($(e.target).is('.demise')) {
                        $('.popover-markup>.trigger').popover('hide');
                    }
                });
                // store form value when popover closed
                $popover.on('hide.bs.popover', function () {
                    $(".popover-content input").each(function (i) {
                        passengers[i] = $(this).val();
                    });
                });
                // spinner(+-btn to change value) & total to parent input
                $(document).on('click', '.number-spinner a', function () {
                    var btn = $(this),
                        input = btn.closest('.number-spinner').find('input'),
                        total = $('#passengers').val(),
                        oldValue = input.val().trim();

                    if (btn.attr('data-dir') == 'up') {

                        if (parseInt(oldValue, 10) < parseInt(input.attr('max'), 10)) {
                            oldValue++;
                            total++;
                        }
                    } else {
                        if (oldValue > input.attr('min')) {
                            oldValue--;
                            total--;
                        }
                    }
                    $('#passengers').val(total);
                    input.val(oldValue);
                });
                //$(".popover-markup>.trigger").popover('show');
            });


        });
    </script>

    <script>
        sjq(document).ready(function ($) {

            //var urlBooking = 'http://127.0.0.1/BookiW/index.php?controller=pjFront&action=';
            var urlBooking = 'https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=';
            var mensajeDisponibilidad = {!!json_encode(html_entity_decode(trans('booking/booking.label18')))!!};
            var mensajeCuponVencido = {!!json_encode(html_entity_decode(trans('booking/booking.label20')))!!};
            var mensajeCuponConsumido = {!!json_encode(html_entity_decode(trans('booking/booking.label21')))!!};
            var mensajeErrorDisponibilidad = {!!json_encode(html_entity_decode(trans('booking/booking.label22')))!!};

            $('#information').hide();
            $('#res_message').hide();
            $('#msg_div1').hide();
            $('#message_pay_div1').hide();
            $('#msg_div').hide();
            $('#message_pay_div').hide();


            // $("#send_form1").attr("disabled", true);
            // $('#date').on('input change', function() { //'input change keyup paste'
            //     $("#send_form1").attr("disabled", false);
            // });

            // FORMULARIO DE FECHA, HORARIO Y PASAJEROS
            if ($("#contact_us").length > 0) {
                $("#contact_us").validate({

                    rules: {
                        date: {
                            required: true,
                        },
                        calendar: {
                            required: true,
                        },
                        passengers: {
                            required: true,
                        },
                    },
                    messages: {
                        date: {
                            required: "Date is required"
                        },
                        calendar: {
                            required: "Schedule is required"
                        },
                        passengers: {
                            required: "Passengers is required",
                        },

                    },
                    submitHandler: function (form) {

                        var fecha = $('#date').val();
                        var fechaNueva = new Date(fecha);
                        var mes = fechaNueva.getMonth() + 1;
                        var anio = fechaNueva.getUTCFullYear();

                        var fechaFormato = Math.round((new Date(fecha)).getTime() / 1000);
                        var horario = $('#calendar').val();
                        var nombreHorario = $("#calendar option:selected").text();;
                        var pasajeros = $('#passengers').val();
                        var todo = $('#contact_us').serialize();
                        //console.log({fecha, fechaFormato, horario, pasajeros, nombreHorario ,todo, form});

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $("#section-info-booking-show").click();

                        $.ajax({
                            url: urlBooking + 'pjActionCheckDates&cid=' + horario +
                                '&start_dt=' + fechaFormato + '&end_dt=' + fechaFormato +
                                '&session_id=',
                            type: "GET",
                            data: "",
                            success: function (response) {
                                if (response.status === "OK") {
                                    getBookingForm(horario, nombreHorario, fecha,
                                        fechaFormato, pasajeros, mes, anio);
                                } else {
                                    $("#section-info-booking-hide").click();
                                    //MOSTRAR MENSAJE DE FALTA DE DISPONIBILIDAD
                                    //var mensajeError = 'Para la fecha '+fecha+' no hay disponibilidad. por favor seleccione otra fecha.';
                                    //$('#send_form').html('Actualizar');
                                    $('#message_pay_div1').show();
                                    $('#message_pay1').show();
                                    $('#message_pay1').html(mensajeErrorDisponibilidad);
                                    //$("#send_form1").attr("disabled", true);
                                    //document.getElementById("contact_us").reset();
                                    setTimeout(function () {
                                        $('#message_pay1').hide();
                                        $('#message_pay_div1').hide();
                                    }, 5000);
                                }
                            }
                        });
                    }
                })
            }

            //SE SELEECIONO EL CAMBIO DE FECHAS
            $("#fixDate").click(function () {
                var num1;
                if ($(this).is(":checked")) {
                    num1 = ((parseFloat($('#finalPrice').text()) + parseFloat('2')).toFixed(2))
                        .toString();
                    $('#finalPrice').text(num1);
                } else {
                    num1 = ((parseFloat($('#finalPrice').text()) - parseFloat('2')).toFixed(2))
                        .toString();
                    $('#finalPrice').text(num1);
                }
            });

            // FORMULARIO DE INFORMACION DE LA RESERVA
            if ($("#contact_info").length > 0) {

                $("#contact_info").validate({

                    rules: {
                        name: {
                            required: true,
                        },
                        lastname: {
                            required: true,
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        identification: {
                            required: true,
                        },
                        phone: {
                            required: true,
                            digits: true
                        },
                        address: {
                            required: true,
                        },
                    },
                    messages: {
                        name: {
                            required: "Name is required"
                        },
                        lastname: {
                            required: "Lastname is required"
                        },
                        email: {
                            required: "Email is required",
                            email: "Please enter a valid email address"
                        },
                        identification: {
                            required: "ID/Passport is required"
                        },
                        phone: {
                            required: "Phone is required",
                            digits: "Please enter only numbers",
                        },
                        address: {
                            required: "Address is required"
                        },
                    },
                    submitHandler: function (form) {

                        var todo = $('#contact_us').serialize();
                        var name = $('#name').val();
                        var lastname = $('#lastname').val();
                        var email = $('#email').val();
                        var identification = $('#identification').val();
                        var phone = $('#phone').val();
                        var address = $('#address').val();
                        var fechaFinal = $('#finalDate').text();
                        var fechaFormatoFinal = Math.round((new Date(fechaFinal)).getTime() / 1000);
                        var pasajerosFinal = $('#finalPassenger').text();
                        var precioFinal = $('#finalPrice').text();
                        var horarioFinal = $('#calendar').val();
                        var checkUpdatePrice = $("#fixDate").is(":checked");
                        var cupon = $('#cupon').val();

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $("#section-info-booking-show").click();

                        console.log('VALOR DEL CUPON: ', cupon);

                        if (cupon === '' || cupon === null || cupon === undefined) {

                            var sendData = 'start_dt=' + fechaFormatoFinal + '&end_dt=' +
                                fechaFormatoFinal + '&c_adults=' + pasajerosFinal +
                                '&c_children=0&c_name=' + name + '&c_lastname=' + lastname +
                                '&c_email=' + email + '&c_cedula=' + identification + '&c_phone=' +
                                phone + '&c_address=' + address +
                                '&cupon=0&payment_method=creditcard';

                            $.ajax({
                                url: urlBooking +
                                    'pjActionGetSummaryFormBookingLight&cid=' +
                                    horarioFinal + '&view=1&locale=&index=0&session_id=',
                                type: "POST",
                                data: sendData,
                                success: function (response) {

                                    if (parseInt(response.code, 10) === 200) {
                                        if (parseInt(response.disponibilidad, 10) ===
                                            1) {
                                            //AQUI SE HACE EL LLAMADO A LA OTRA FUNCION PARA REAZILAR EL PAGO
                                            getBookingSave(horarioFinal,
                                                checkUpdatePrice, sendData);
                                        } else {
                                            //MOSTRAR MENSAJE DE FALTA DE DISPONIBILIDAD
                                            $("#section-info-booking-hide").click();
                                            $('#message_pay').show();
                                            $('#message_pay_div').show();
                                            $('#message_pay').html(
                                                mensajeDisponibilidad);
                                            $("#section-info-booking-hide").click();
                                            setTimeout(function () {
                                                $('#message_pay').hide();
                                                $('#message_pay_div').hide();
                                            }, 5000);
                                        }
                                    }
                                }
                            });

                        } else {


                            var sendDataCupon = 'code=' + cupon;
                            $.ajax({
                                url: urlBooking + 'verifyCouponBookingLight',
                                type: "POST",
                                data: sendDataCupon,
                                success: function (response) {
                                    if (parseInt(response.code, 10) === 200) {

                                        if (parseInt(response.cupon, 10) === 1) {

                                            // SE VALIDA EL CUPON Y SE SIGUE EL PROCESO NORMAL
                                            var valorCupon = Number(response.cantidad);
                                            var cuponID = response.id;

                                            var sendData = 'start_dt=' +
                                                fechaFormatoFinal + '&end_dt=' +
                                                fechaFormatoFinal + '&c_adults=' +
                                                pasajerosFinal +
                                                '&c_children=0&c_name=' + name +
                                                '&c_lastname=' + lastname +
                                                '&c_email=' + email + '&c_cedula=' +
                                                identification + '&c_phone=' + phone +
                                                '&c_address=' + address + '&cupon=' +
                                                valorCupon + '&cupon_id=' + cuponID +
                                                '&payment_method=creditcard';

                                            $.ajax({
                                                url: urlBooking +
                                                    'pjActionGetSummaryFormBookingLight&cid=' +
                                                    horarioFinal +
                                                    '&view=1&locale=&index=0&session_id=',
                                                type: "POST",
                                                data: sendData,
                                                success: function (response) {

                                                    if (parseInt(response
                                                            .code, 10) ===
                                                        200) {
                                                        if (parseInt(
                                                                response
                                                                .disponibilidad,
                                                                10) === 1) {
                                                            //AQUI SE HACE EL LLAMADO A LA OTRA FUNCION PARA REAZILAR EL PAGO
                                                            getBookingSave(
                                                                horarioFinal,
                                                                checkUpdatePrice,
                                                                sendData
                                                                );
                                                        } else {
                                                            //MOSTRAR MENSAJE DE FALTA DE DISPONIBILIDAD
                                                            $("#section-info-booking-hide")
                                                                .click();
                                                            $('#message_pay')
                                                                .show();
                                                            $('#message_pay_div')
                                                                .show();
                                                            $('#message_pay')
                                                                .html(
                                                                    mensajeDisponibilidad
                                                                    );
                                                            $("#section-info-booking-hide")
                                                                .click();
                                                            setTimeout(
                                                                function () {
                                                                    $('#message_pay')
                                                                        .hide();
                                                                    $('#message_pay_div')
                                                                        .hide();
                                                                }, 5000);
                                                        }
                                                    }
                                                }
                                            });

                                        } else if (parseInt(response.cupon, 10) === 2) {

                                            $("#section-info-booking-hide").click();
                                            $('#message_pay').show();
                                            $('#message_pay_div').show();
                                            $('#message_pay').html(mensajeCuponVencido);
                                            $("#section-info-booking-hide").click();
                                            setTimeout(function () {
                                                $('#message_pay').hide();
                                                $('#message_pay_div').hide();
                                            }, 5000);

                                        } else {

                                            // CUPON VENCIDO
                                            $("#section-info-booking-hide").click();
                                            $('#message_pay').show();
                                            $('#message_pay_div').show();
                                            $('#message_pay').html(
                                                mensajeCuponConsumido);
                                            $("#section-info-booking-hide").click();
                                            setTimeout(function () {
                                                $('#message_pay').hide();
                                                $('#message_pay_div').hide();
                                            }, 5000);
                                        }

                                    }
                                }
                            });

                        }

                        // $.ajax({
                        //     url: urlBooking+'pjActionGetSummaryFormBookingLight&cid='+horarioFinal+'&view=1&locale=&index=0&session_id=' ,
                        //     type: "POST",
                        //     data: sendData,
                        //     success: function( response ) {

                        //         if (parseInt(response.code, 10) === 200){
                        //             if(parseInt(response.disponibilidad, 10) === 1){
                        //                 //AQUI SE HACE EL LLAMADO A LA OTRA FUNCION PARA REAZILAR EL PAGO
                        //                 getBookingSave(horarioFinal,checkUpdatePrice,sendData);
                        //             }else{
                        //                 //MOSTRAR MENSAJE DE FALTA DE DISPONIBILIDAD
                        //                 $("#section-info-booking-hide").click();
                        //                 $('#message_pay').show();
                        //                 $('#message_pay_div').show();
                        //                 $('#message_pay').html(mensajeDisponibilidad);
                        //                 $("#section-info-booking-hide").click();
                        //                 setTimeout(function(){
                        //                     $('#message_pay').hide();
                        //                     $('#message_pay_div').hide();
                        //                 },5000);
                        //             }
                        //         }
                        //     }
                        // });
                    }
                })
            }

            function getBookingForm(horario, nombreHorario, fecha, fechaFormato, pasajeros, mes, anio) {

                $.ajax({
                    url: urlBooking + 'pjActionGetBookingForm&cid=' + horario + '&view=1&month=' + mes +
                        '&year=' + anio + '&start_dt=' + fechaFormato + '&end_dt=' + fechaFormato +
                        '&c_adults=' + pasajeros + '&locale=&index=0&session_id=',
                    type: "GET",
                    data: "",
                    success: function (response) {
                        var jqueryObject = $($.parseHTML(response));
                        var precio1 = jqueryObject.find("#precio1").html();
                        getPrices(horario, nombreHorario, fecha, fechaFormato, pasajeros);
                    }
                });
            }

            function getPrices(horario, nombreHorario, fecha, fechaFormato, pasajeros) {
                console.log(horario, fecha, pasajeros, fechaFormato);
                $.ajax({

                    url: urlBooking + 'pjActionGetPriceBookingLight&cid=' + horario + '&start_dt=' +
                        fechaFormato + '&end_dt=' + fechaFormato + '&c_adults=' + pasajeros +
                        '&c_name=&c_lastname=&c_email=&c_cedula=&c_phone=&c_address=&payment_method=creditcard',
                    type: "GET",
                    data: "",
                    success: function (response) {

                        $("#section-info-booking-hide").click();
                        $('#send_form').html('Actualizar');
                        $('#information').show();
                        $('#finalDate').text(fecha);
                        $('#finalCalendar').text(nombreHorario);
                        $('#finalPassenger').text(pasajeros);
                        $('#finalPrice').text(response.amount);

                    }
                });
            }

            function getBookingSave(horarioFinal, check, sendData) {
                $.ajax({
                    url: urlBooking + 'pjActionBookingSaveLight&cid=' + horarioFinal + '&check=' +
                        check + '&session_id=',
                    type: "POST",
                    data: sendData,
                    success: function (data) {
                        $("#section-info-booking-hide").click();
                        if (data.code === undefined) {
                            return;
                        }
                        if (parseInt(data.code, 10) === 200) {
                            if (parseInt(data.array.error_code, 10) === 400) {
                                //$('#send_form_info').html('Pagar');
                                $('#res_message_form').show();
                                $('#msg_div_form').show();
                                $('#res_message_form').html(data.array.message);
                                setTimeout(function () {
                                    $('#res_message_form').hide();
                                    $('#msg_div_form').hide();
                                }, 5000);
                            } else {
                                // REDIRECCIONA A PAGO MEDIOS
                                window.location.href = data.url;
                            }
                        } else {
                            //$('#send_form_info').html('Pagar');
                            $('#res_message_form').show();
                            $('#msg_div_form').show();
                            $('#res_message_form').html(data.array.message);
                            setTimeout(function () {
                                $('#res_message_form').hide();
                                $('#msg_div_form').hide();
                            }, 5000);
                        }

                    }
                });
            }

        });
    </script>
    {{-- FIN SCRIPTS PARA EL BOOKING --}}

    <script type="text/javascript">
        $('#lang').click(function (e) {
            e.preventDefault();
            if ("{!!$language!!}" == 'en') {
                window.location =
                    'https://iwannatrip.com/es/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}';
                //window.location='http://localhost:8000/es/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}';

            } else {
                window.location =
                    'https://iwannatrip.com/en/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}';
                //window.location='http://localhost:8000/en/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}';

            }

        });


        function openModalReviewExplore(event) {
            event.preventDefault();
            $('#modal-review-explore').modal().show();
        }

        $("#buttonBook").click(function () {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#calendarios2").offset().top
            }, 2000);
        });

        $('.btnsmAvailab').click(function () {
            //$("html, body").animate({scrollTop: 0}, 600);
            $('html, body').animate({
                scrollTop: parseInt($(".calendarios").offset().top)
            }, 2000);
            return false;
        });




        document.addEventListener("DOMContentLoaded", function () {
            let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
            let active = false;

            const lazyLoad = function () {
                if (active === false) {
                    active = true;

                    setTimeout(function () {
                        lazyImages.forEach(function (lazyImage) {
                            if ((lazyImage.getBoundingClientRect().top <= window
                                    .innerHeight && lazyImage.getBoundingClientRect()
                                    .bottom >= 0) && getComputedStyle(lazyImage).display !==
                                "none") {
                                lazyImage.src = lazyImage.dataset.src;
                                //lazyImage.srcset = lazyImage.dataset.srcset;
                                lazyImage.classList.remove("lazy");

                                lazyImages = lazyImages.filter(function (image) {
                                    return image !== lazyImage;
                                });

                                if (lazyImages.length === 0) {
                                    document.removeEventListener("scroll", lazyLoad);
                                    window.removeEventListener("resize", lazyLoad);
                                    window.removeEventListener("orientationchange",
                                        lazyLoad);
                                }
                            }
                        });

                        active = false;
                    }, 200);
                }
            };

            document.addEventListener("scroll", lazyLoad);
            window.addEventListener("resize", lazyLoad);
            window.addEventListener("orientationchange", lazyLoad);
        });


        document.addEventListener("DOMContentLoaded", function () {
            var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

            if ("IntersectionObserver" in window) {
                let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            //lazyImage.srcset = lazyImage.dataset.srcset;
                            lazyImage.classList.remove("lazy");
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });

                lazyImages.forEach(function (lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            } else {
                // Possibly fall back to a more compatible method here
            }
        });
    </script>
</body>

</html>