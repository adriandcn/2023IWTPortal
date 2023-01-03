<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <!-- Page Title -->


	<?php
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

    header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days)

    $mobile= preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);


	if($mobile){
	    $desk = "mobile";
		Session::put('device', $desk);
	}

    ?>


	<title>{!!$tituloIdioma!!}</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="_token" content="{!!csrf_token() !!}" />
    <?php
        $length = 100;
        //Primero eliminamos las etiquetas html y luego cortamos el string
        $stringDisplay = substr(strip_tags($detalleIdioma), 0, $length);
        //Si el texto es mayor que la longitud se agrega puntos suspensivos
        if (strlen(strip_tags($detalleIdioma)) > $length)
        $stringDisplay .= ' ...';
        $str = utf8_encode("Viaja y descubre lugares, tours, comida, huecas, aventuras,gente y más. Hoteles Diversión Restaurantes Cultura");


		       $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'#", '-', $nombreCanonical);
                                $language=session('locale');


                                    $tituloIdiomaES=$agrupacion[0]->nombre_eng;
                                    $nombreCanonicalEN=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdiomaES))));
                                    $nombreCanonicalEN = str_replace(' ', '-', $nombreCanonicalEN);
                                    $nombreCanonicalEN = str_replace('/', '-', $nombreCanonicalEN);
                                    $nombreCanonicalEN = str_replace('?', '-', $nombreCanonicalEN);
                                    $nombreCanonicalEN = str_replace("'", '-', $nombreCanonicalEN);

                                    $tituloIdiomaEN=$agrupacion[0]->nombre;

                                    $nombreCanonicalES=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdiomaEN))));
                                    $nombreCanonicalES = str_replace(' ', '-', $nombreCanonicalES);
                                    $nombreCanonicalES = str_replace('/', '-', $nombreCanonicalES);
                                    $nombreCanonicalES = str_replace('?', '-', $nombreCanonicalES);
                                    $nombreCanonicalES = str_replace("'", '-', $nombreCanonicalES);




    ?>
    <meta name="description" content='{!!$keywordsIdioma!!}. {!!str_replace("\""," ",$stringDisplay)!!}'>
    <meta name="keywords" content="{!!$keywordsIdioma!!} ">
    <meta name="author" content="iWaNaTrip group">
    <meta http-equiv="Cache-control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 @if($language=="es")
		<meta http-equiv="Content-Language" content="es">
	@else
		<meta http-equiv="Content-Language" content="en_US">
    @endif


    <META NAME="robots" CONTENT="all | index | follow">
    <META name="Revisit" content="1 days">

	<meta property="og:title" content="{!!$tituloIdioma!!}" />
    <meta property="og:description" content="{!!$stringDisplay!!}" />
    @if(isset($imagenes[0]->filename))
    <?php $header= 'https://bookiw.iwannatrip.com/app/web/uploads/'.$imagenes[0]->filename;?>
    <meta property="og:image" content="{!!$header!!}" />
    @endif

    <!-- Theme Styles -->
    <link rel="apple-touch-icon" href="{{ url(env('AWS_PUBLIC_URL').'images/img/60x60_logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url(env('AWS_PUBLIC_URL').'images/img/76x76logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url(env('AWS_PUBLIC_URL').'images/img/120x120logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url(env('AWS_PUBLIC_URL').'images/img/180x180logo_iwana.png')}}">
    <link rel="icon" sizes="180x180" href="{{ url(env('AWS_PUBLIC_URL').'images/img/180x180logo_iwana.png')}}">
    <link rel="shortcut icon" href="{{ asset('public/favicon.png')}}" />
    <link rel="apple-touch-icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.png') }}" />

    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{asset('public_components/css/bootstrap.min.css')}}" media="none" onload="if(media!=='all')media='all'" >
    <link rel="stylesheet" href="{{asset('public_components/css/font-awesome.min.css')}}" media="none" onload="if(media!=='all')media='all'" >




    @if($language=="en")
    <link rel="canonical" href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"  />
    <link rel="alternate" href="https://iwannatrip.com/es/tour/{!!$nombreCanonicalES!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" hreflang="es-ec" />
    <link rel="alternate" href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" hreflang="en-ec" />
    <link rel="alternate" href="https://iwannatrip.com/es/tour/{!!$nombreCanonicalES!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" hreflang="es" />
    <link rel="alternate" href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" hreflang="en" />

    <link rel="alternate" href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" hreflang="x-default" />
    @else

        <link rel="canonical" href="https://iwannatrip.com/es/tour/{!!$nombreCanonicalES!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}"  />
            <link rel="alternate" href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" hreflang="en-ec" />
            <link rel="alternate" href="https://iwannatrip.com/es/tour/{!!$nombreCanonicalES!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" hreflang="es-ec" />

            <link rel="alternate" href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" hreflang="en" />
            <link rel="alternate" href="https://iwannatrip.com/es/tour/{!!$nombreCanonicalES!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" hreflang="es" />

            <link rel="alternate" href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalEN!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" hreflang="x-default" />

            @endif


    <link rel="stylesheet" href="{{ asset('public_components/css/letras.css')}}" media="none" onload="if(media!=='all')media='all'" >
    <link rel="stylesheet" href="{{asset('public_components/css/animate.min.css')}}" media="none" onload="if(media!=='all')media='all'" >

    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.css')}}" media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/owl-carousel/owl.transitions.css')}}" media="none" onload="if(media!=='all')media='all'" />



    <!--<link rel="stylesheet" type="text/css" href="{{asset('public_components/components/owl-carousel/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />
     Magnific Popup core CSS file
    <link rel="stylesheet" href="{{asset('public_components/components/magnific-popup/magnific-popup.css')}}">-->
    <!-- Main Style

    <link rel="stylesheet" href="{{asset('public_components/css/style.css')}}" media="none" onload="if(media!=='all')media='all'" >-->

    <!-- Updated Styles -->



    <link rel="stylesheet" href="{{asset('public_components/css/updates.css')}}" media="none" onload="if(media!=='all')media='all'">

    <link rel="stylesheet" href="{{asset('public_components/css/custom.css')}}" media="none" onload="if(media!=='all')media='all'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css" media="none" onload="if(media!=='all')media='all'">

	<!--<noscript id="deferred-styles">
    </noscript>-->
    <!-- Responsive Styles -->

    <link rel="stylesheet" href="{{asset('public_components/css/responsive.css')}}" media="none" onload="if(media!=='all')media='all'" >

    {!!HTML::script('js/jquery.js') !!}

    <script type="text/javascript" src="{{ asset('js/loadingScreen/loadingoverlay.min.js')}}" defer></script>


    <div class="page">


</div>
<div id="loading"></div>

    <!--{!!HTML::script('js/sweetAlert/sweetalert2.min.js') !!}-->
       <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-85546019-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-85546019-1');
</script>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
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
        padding: 0px;
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
    .owl-wrapper-outer{
            height: 200px !important;
    }

    #header .logo {


background-size: auto 56px !important;

}

.one{
  padding-top: 28.0519480519%;
  background-image: url("");
}



.one.visible{
    background-image: var(--background);
}



.page    { display: none; padding: 0 0.5em; }
.page h2 { font-size: 2em; line-height: 1em; margin-top: 1.1em; font-weight: bold; }
.page p  { font-size: 1.5em; line-height: 1.275em; margin-top: 0.15em; }

#loading {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  width: 100vw;
  height: 100vh;
  background-color: black;
  background-image: url("{{ asset('img/IWTloading.gif')}}");
  background-repeat: no-repeat;
  background-position: center;
}



    </style>


</head>

<body class="woocommerce">
    <div id="page-wrapper">
        <br>
        <br>
        <br>
        <header id="header" class="header-color-white">
            @include('public_page.reusable.header')
        </header>
        <div class="page-title-container parallax " style="background-size: cover;" data-stellar-background-ratio="0.5" id="bgTop">
            <div class="page-title">
                <div class="container">



                    @if($h1=="")
                    <h1 class="whitex">{{$tituloIdioma}}</h1>
                    @else
                    <h1 class="whitex">{{$h1}}</h1>
                    @endif
                </div>
            </div>
            <ul class="breadcrumbs">
                <li>
                    <a href="https://iwannatrip.com" onclick="$('.woocommerce').LoadingOverlay('show')">
                        {{ trans('publico/labels.label1')}}
                    </a>
                </li>
                <li class="active">{{$tituloIdioma}}</li>
            </ul>
        </div>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="sidebar col-sm-4 col-md-3">


						<div class="widget post-slider box">
                              </span>



                        <div class="product type-product">
                            <div class="row single-product-details">
                                <div class="summary entry-summary col-sm-12 box-lg">

                                    <div class="clearfix">
                                        <h1 class="product-title entry-title">{{$tituloIdioma}}</h1>
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
                                                      <div class="barProg" style="width: {{intval($resumen->calificacion)*100/5}}%"></div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </span>
                                        </div>
                                        <span style="cursor: pointer" data-toggle="tooltip" class="star-rating">
                                            {{-- <span data-stars="{!!($agrupamientos[0]->total)/count($agrupamientos[0]->resumen_views)!!}"></span> --}}
											 <span data-stars="{!!($calificacionAgrupamiento[0]->calificacion)!!}"></span>
                                            <div class="tooltip" data-tooltip-content="#tooltip_content_{{$idAgrupamiento}}"></div>
                                        </span>
                                      @endif
                                      <span style="color: #ff9000;font-size: 15px;">({{$calificacionAgrupamiento[0]->calificacion}})</span>
                                      @if($numerosReviews[0]->numerosReviews > 0)
                                        <span style="color: #1b4268;font-size: 15px;"> &nbsp;{{ $numerosReviews[0]->numerosReviews }} Reviews </span>
                                      @endif
                                       </div>
									   <span class="product-price box"> {{(session('locale') == 'es' )?"Desde":"From"}}  {!! $agrupamientos[0]->precioDesde !!}$ </span>

                                </div>
                            </div>
                            <!--<h4>{{ trans('publico/labels.label28')}}</h4>
                            <div class="iso-container iso-col-3 style-masonry has-column-width cercanos ">
                                @section('cercanos') @show
                            </div>-->
                        </div>

                        <div id="buttonBook" class="tab-container full-width style2">
                            <ul class="tabs clearfix" style="background: #f60 !important;">

                                <?php $contador = 0;?>
                                            <li class="calendarsXY active" onClick="ga('send', 'event', 'Calendar', 'SelectCalendar', 'InteractionCalendar');" class="active"><a href="#tab3" data-toggle="tab">Book Now</a></li>

                            </ul>
                            </div>
							<br>


                        @if(session('locale') == 'en')
                                <div class="fb-share-button" data-href="https://iwannatrip.com/es/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" data-layout="button_count"></div>
                                @else
                                <div class="fb-share-button" data-href="https://iwannatrip.com/en/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" data-layout="button_count"></div>

                                @endif
                        </div>

						    <div class="box" style="margin-bottom: 0px !important;">
                                <div class="product type-product">
                                    <div class="row single-product-details">
                                        <div class="summary entry-summary col-sm-12 box-lg">
                                           <span class="product-price box">
                                               Overview
                                        </div>
					    		    </div>
								</div>
					    	</div>

						  <div class="box">
                                          <pre class="mores" style="padding: 9.5px;

text-align: justify;

word-break: inherit;

white-space: pre-line;

word-wrap: inherit;

font-family: arial;

border: 0 solid;">

                                                    {!!$detalleIdioma!!}

                                            </pre>
                                        </div>



                                    <!--
									  <div class="section-info">
                                        <h3 class="section-title"><label> {{(session('locale') == 'es' )?'Ubicación':'Location'}}</label></h3>
                                        <div class="row">
                                            <div class="col-lg-12">

												<span class="product-price">



											<a target="_blank" href="http://www.google.com/maps/place/1,1">
											<img width="42" height="42" alt="web site" src="{{ asset('img/register/map.png')}}">
                                            </a>



														</span>

                                            </div>
                                        </div>
                                    </div>
                                                    -->



                                            <div class="row">


  <!-- carga de los calendarios -->
            <div class="section-info ">
                        @if(count($calendarios)== 0)
                        <h3 class="section-title">No hay booking disponibles para este tour.</h3>
                        @endif
                        @if(count($calendarios)>0)

				@if(count($calendarios)==1)

							<h3 class="section-title">{{utf8_encode( trans('booking/labels.label50'))}}</h3>
							@else

										<h3 class="section-title"> {{(session('locale') == 'es' )?"Seleccione horario":"Select schedule"}}</h3>


					@endif

					<div id="calendarios2" class='calendarios'>
									</div>

						 <div class="tab-container full-width style2">
                            <ul class="tabs clearfix">
                                <?php $contador = 0;?>
                                @foreach($calendarios as $calendario)
                                    @if($calendario->content != '')
                                        @if($contador == 0)
                                            <li class="calendarsXY active" onClick="ga('send', 'event', 'Calendar', 'SelectCalendar', 'InteractionCalendar');" class="active"><a href="#tab3-{!!$calendario->id!!}" data-toggle="tab">{!!$calendario->content!!}</a></li>


                                        @else
                                            <li><a class="calendarsXY" onClick="ga('send', 'event', 'Calendar', 'SelectCalendar', 'InteractionCalendar');"  href="#tab3-{!!$calendario->id!!}" data-toggle="tab">{!!$calendario->content!!}</a></li>
                                        @endif
                                        <?php $contador++;?>
                                    @endif
                                 @endforeach
                            </ul>
                            <?php $contador1 = 0;?>



                            @foreach($calendarios as $calendario)
                                @if($calendario->content != '')
                                    @if($contador1 == 0)
                                        <div id="tab3-{!!$calendario->id!!}" class="tab-content in active ">
                                            <div class="tab-pane" style="height: 800px;">
                                                <h3>{!!$calendario->content!!}</h3>
                                                 <p> </p>
                                                <link href="https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=pjActionLoadCss&cid={!!$calendario->id!!}" type="text/css" rel="stylesheet" media="none" onload="if(media!=='all')media='all'"/>
                                                <script type="text/javascript" src="https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=pjActionLoad&cid={!!$calendario->id!!}&view=1" ></script>
                                            </div>
                                        </div>
                                    @else
                                        <div id="tab3-{!!$calendario->id!!}" class="tab-content">
                                            <div class="tab-pane" style="height: 800px;">
                                                <h3>{!!$calendario->content!!}</h3>
                                                 <p> </p>
                                                <link href="https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=pjActionLoadCss&cid={!!$calendario->id!!}" type="text/css" rel="stylesheet" media="none" onload="if(media!=='all')media='all'"/>
                                                <script type="text/javascript" src="https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=pjActionLoad&cid={!!$calendario->id!!}&view=1"></script>
                                            </div>
                                        </div>
                                    @endif

                                    <?php $contador1++;?>
                                @endif
                            @endforeach

                        </div>
                        @endif
                    </div>





                    @if(count($agrupamientos2) > 0)
        <section id="content" style="padding-top: 0;">
            <div class="container">
                <div id="main" style="margin-bottom:0px !important">
                    <div class="section-info">
                        <h3 class="section-title">  {{(session('locale') == 'es' )?'Más Trips que te interesarán':'More Trips for you'}} </h3>
                        <div class="pricing-table-container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="post-slider style1 owl-carousel box carouselLugares">



                                    @include('public_page.reusable.AllToursMobilecarrousel')


                                    </div>
                                    <div class="customNavigation text-center">
                                      <a class="prev" idCarousel="carouselLugares" style="cursor: pointer;"><i class="fa fa-angle-left fa-4x"></i></a>
                                      &nbsp;&nbsp;&nbsp;
                                      <a class="next" idCarousel="carouselLugares" style="cursor:pointer;"><i class="fa fa-angle-right fa-4x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                                                      <div class="barProg" style="width: {{intval($resumen->calificacion)*100/5}}%"></div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </span>
                                        </div>
                                        <span style="cursor: pointer" data-toggle="tooltip" class="star-rating">
                                            {{-- <span data-stars="{!!($agrupamientos[0]->total)/count($agrupamientos[0]->resumen_views)!!}"></span> --}}
											 <span data-stars="{!!($calificacionAgrupamiento[0]->calificacion)!!}"></span>
                                            <div class="tooltip" data-tooltip-content="#tooltip_content_{{$idAgrupamiento}}"></div>
                                        </span>
                                      @endif
                                      <h3 class="section-title"><label> <span style="color: #ff9000;font-size: 15px;">({{$calificacionAgrupamiento[0]->calificacion}})</span> {{ $numerosReviews[0]->numerosReviews }} {{(session('locale') == 'es' )?'Reviews':'Reviews'}}</label></h3>


                                 </div>
                            <div id="principalReview">
                                <!-- CARGA DE LOS REVIEWS -->
                                @section('contentReviews')

                                @show
                                <!-- CARGA DE LOS REVIEWS -->
                            </div>

					</div>





                                        @if(count($lugaresList) > 0)
        <section id="content" style="padding-top: 0;">
            <div class="container">
                <div id="main" style="margin-bottom:0px !important">
                    <div class="section-info">
                        <h3 class="section-title">{{ trans('publico/labels.lblTitleLugares')}}</h3>
                        <div class="pricing-table-container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="post-slider style1 owl-carousel box carouselLugares">
                                        @foreach($lugaresList as $lugar)
                                        <div class="Instagram-card">
                                            <div class="Instagram-card-image"  data-toggle="modal" data-target="#form-img-full">

												 <?php
                                                $name=preg_replace('([^A-Za-z0-9])', '', $lugar->nombre_servicio);
                                                ?>
                                                <a href='{!!asset("/detalle/$name/$lugar->id")!!}'>

                                                    @if(is_null($lugar->serviceImage))
                                                    <div style="height: 150px; background: url('/images/no-image-available.png');background-position: top;    background-size: 115%;">
                                                    </div>
                                                    @else
                                                     <div class="lazy-background one" style="height: 150px; --background: url('{{asset('images/icon')}}/{!!$lugar->serviceImage->filename!!}');background-position: top;    background-size: 115%;">
                                                    </div>
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="Instagram-card-content-tour">
                                              <p class="Likes">
                                                <a href='{!!asset("/detalle/$name/$lugar->id")!!}'>
                                                    {{ str_limit($lugar->nombre_servicio, $limit = 17, $end = '...') }}
                                                </a>
                                              </p>
                                               @if($lugar->id_catalogo_servicio == 1)
                                                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/1.png')}}" title="eatDrink" alt="eatDrink">
                                                     <span class="product-price" ><span class="currency-symbol"></span>Eat & Drink</span>

                                                @elseif($lugar->id_catalogo_servicio == 2)
                                                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/2.png')}}" title="Sleep" alt="Sleep">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Sleep</span>
                                                @elseif($lugar->id_catalogo_servicio == 3)
                                                    <img class="lazyloaded" src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Tour Operator</span>
                                                @elseif($lugar->id_catalogo_servicio == 9)
                                                    <img style="width:50px"  src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/festividades.png')}}" title="Festividades" alt="turismo">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Festividades</span>
                                                        <?php
                                                            $date = date_create($lugar->fecha_ingreso);
                                                            $date2 = date_create($lugar->fecha_fin);
                                                         ?>
                                                    <span class="comment-date" style="color: #EB5D5E">{!!date_format($date, 'j F ')!!}-{!!date_format($date2, 'j F ')!!}</span>
                                                @else
                                                    <img src="{{ asset('/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Turism</span>
                                                @endif
                                            </div>
                                            <div class="Instagram-card-footer">
                                              <a class="footer-action-icons-tour"href='{!!asset("/detalle/$lugar->nombre_servicio/$lugar->id")!!}' style="margin-left: 10px;">
                                                {{(session('locale') == 'es' )?'Ver más':'Details'}} <i class="fa fa-eye"></i>
                                              </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="customNavigation text-center">
                                      <a class="prev" idCarousel="carouselLugares" style="cursor: pointer;"><i class="fa fa-angle-left fa-4x"></i></a>
                                      &nbsp;&nbsp;&nbsp;
                                      <a class="next" idCarousel="carouselLugares" style="cursor:pointer;"><i class="fa fa-angle-right fa-4x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif



                        <div class="box">
                            <div class="product type-product">
                                <div class="row single-product-details">
                                    <div class="summary entry-summary col-sm-12 box-lg">

                                                   <div class="box">
                                            <div class="panel-group" id="accordion-map">


                                        <!--
                                            <div class="panel style4">
                                                    <h5 class="panel-title">
                                                        <a href="#accmap-1" data-toggle="collapse" data-parent="#accordion-map">
                                                            <span class="open-sub"></span>
                                                            {{ trans('publico/labels.label52')}}
                                                        </a>
                                                    </h5>
                                                    <div class="panel-collapse collapse" id="accmap-1">
                                                        <div class="panel-content">
                                                            <div class="soap-google-map maps ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->




                                            </div>
                                        </div>



                    </div>
                    <div class="sidebar col-sm-4 col-md-3">
                        <!-- <div class="widget box">

							<a href="{!!asset('/tourList')!!}" >
                            <h4>{{(session('locale') == 'es' )?"Reservas online iWaNaTrip":"Reservations online iWaNaTrip"}}</h4>
                            	</a>
                            <ul class="demo1">
                                @foreach($agrupamientos as $group)
                                <li class="news-item">

                                  <?php
								    $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($group->nombre))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);

        ?>
                                    <a href='{!!asset("/tour/$nombreCanonical/$group->id_usuario_servicio/$group->id")!!}'>
									<table cellpadding="4">
                                            <tr>
                                                @if(empty($group->foto))
                                                <td style="margin-right: 10px !important;width: 30%;"> <img src="/images/no-image-available.png" width="80" height="50" alt="iWaNaTrip"> </td>
                                                @else
                                                <td style="margin-right: 10px !important;width: 30%;">  <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="https://bookiw.iwannatrip.com/app/web/uploadsMobile/{!!$group->foto[0]->filename!!}" width="80" height="50"> </td>
                                                @endif
                                                <td style="width: 80%;padding-left: 5px;">
                                                    <p style="margin-bottom: 0px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                                        {!!$group->nombre!!}
                                                    </p>
                                                    @if($group->precioDesde == 0)
                                                    <p> FREE </p>
                                                    @else
                                                    <p> Precio Desde:
                                                        <span class="product-price box" style="color:#FF6600;font-size:1em !important;"> ${!!$group->precioDesde !!} </span>
                                                    </p>
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                      -->

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
                            <a href="https://iwannatrip.com" onclick="$('.woocommerce').LoadingOverlay('show');" class="btn style4">{{ trans('publico/labels.label27')}}</a>
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
    <script type="text/javascript" src="{{ asset('public_components/components/magnific-popup/jquery.magnific-popup.min.js')}}" defer></script>
    <!-- parallax -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.stellar.min.js')}}" defer></script>
    <!-- waypoint -->
    <script type="text/javascript" src="{{ asset('public_components/js/waypoints.min.js')}}" defer></script>
    <!-- Owl Carousel
    <script type="text/javascript" src="{{ asset('public_components/components/owl-carousel/owl.carousel.min.js')}}" defer></script>-->
    <script type="text/javascript" src="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.min.js')}}"></script>
    <!-- plugins -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.plugins.js')}}" defer></script>
    <!-- Google Map Api
    <script type='text/javascript' src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrmpFejINcm5NX0KJBmpVBP38MPyhvadU"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/gmap3.js')}}"></script>-->
    <!--{!!HTML::style('/packages/dropzone/dropzone.css') !!} {!!HTML::script('/packages/dropzone/dropzone.js') !!}-->
    <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>


    <script src="{{ asset('public_components/js/lazysizes.min.js')}}" async></script>
    {!!HTML::script('js/Compartido.js') !!} {!!HTML::script('js/js_public/Compartido.js') !!}


    {{-- SCRIPTS DEL BOOKING --}}
    {{-- <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> --}}
    <script src="{{ asset('public_components/js/vaidatejquery.js')}}"></script>
    <script src="{{ asset('public_components/js/aditional.js')}}"></script>
    {{-- SCRIPTS DEL BOOKING --}}




    <script>
        function showAlert(){
            swal({
                title: "{{ trans('booking/booking.label24')}}",
                type: "info",
                showCancelButton: false,
                showConfirmButton: false,
                allowOutsideClick: false
            });
        }

                                  $("#buttonBook").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#calendarios2").offset().top
    }, 2000);
});
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
            var url = SITEURLREVIEW+'/reviewsAgrupamiento/'+idAgrupamiento+'/'+limite+'/'+nombreAgrupamiento;
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
                    console.log('ERROR DATA: ', data);
                }
            });
        }
    </script>

    <script>
        var SITEURLREVIEW = '{{URL::to('')}}';
        var limite = 5;
        sjq(document).ready(function($) {
            $(function () {
                var nombreAgrupamiento = '{!! $tituloIdioma !!}';
                var idAUsuarioServicio = '{!! $group->id_usuario_servicio !!}';
                var idAgrupamiento = '{!! $agrupamientos[0]->id !!}';
                console.log('aumentar limite ', limite);
                var url = SITEURLREVIEW+'/reviewsAgrupamiento/'+idAgrupamiento+'/'+limite+'/'+nombreAgrupamiento;
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
                        console.log('limite despues : ', limite);
                    },
                    error: function (data) {
                        console.log('ERROR DATA: ', data);
                    }
                });
            });
        });
    </script>

    <script>
        /*****************************************************************/
        /* INICIOSHOW MORE / LESS REVIEWS
        /*****************************************************************/
        sjq(document).ready(function($) {
            var showChar = 120; // How many characters are shown by default
            var ellipsestext = "";
            var moretext = " Show more >";
            var lesstext = " < Show less";
            $('.moreReview').each(function() {
                var content = $(this).html();
                if (content.length > showChar) {
                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);
                    var html =`${c} <span class="moreellipses"> ${ellipsestext} &nbsp;</span><span class="morecontentReview"> ${h}</span> <span><a href="" class="morelinkReview" style="text-decoration: none;color: #ff6600;">${moretext}</a></span>`;
                    $(this).html(html);
                }
            });

            $(".morecontentReview").css("display", "none");

            $(".morelinkReview").click(function() {
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

     sjq(document).ready(function($) {
        // Configure/customize these variables.
        var showChar = 900; // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "Show more >";
        var lesstext = "Show less";
        $('.more').each(function() {
            var content = $(this).html();
            if (content.length > showChar) {
                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);
//                var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
                  var html =`${c} <span class="moreellipses"> ${ellipsestext} &nbsp;</span><span class="morecontent"> ${h}</span> <span><a href="" class="morelink">${moretext}</a></span>`;
  //              var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' ;
                $(this).html(html);
            }
        });

        $(".morecontent").css("display", "none");

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

        $(".calendarsXY").click(function() {
            ga('send', 'event', 'Calendars', 'CalendarsINteraction', 'CalendarsInter', {
  nonInteraction: true
});

        });
    });
    </script>

    {{-- INICIO SCRIPTS PARA EL BOOKING --}}
    <script language="javascript">
        sjq(document).ready(function($) {

            var blockDays = parseInt({!! $diasBloqueados !!});

            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate() + blockDays;
            var year = dtToday.getFullYear();
            if(month < 10)
                month = '0' + month.toString();
            if(day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#date').attr('min', maxDate);
            $('#date').attr('value', maxDate);
        });
    </script>

    <script>
        sjq(document).ready(function($) {

            $(function () {
                var $popover = $('.popover-markup>.trigger').popover({
                    html: true,
                    placement: 'bottom',
                    content: function () {
                        return $(this).parent().find('.content').html();
                    }
                });

                // open popover & inital value in form
                var passengers = [1,0,0];
                $('.popover-markup>.trigger').click(function (e) {
                    e.stopPropagation();
                    $(".popover-content input").each(function(i) {
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
                $(".popover-content input").each(function(i) {
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

                    if(parseInt(oldValue, 10) < parseInt(input.attr('max'), 10)){
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

        sjq(document).ready(function($) {

            //var urlBooking = 'http://127.0.0.1/BookiW/index.php?controller=pjFront&action=';
            var urlBooking = 'https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=';
            var mensajeDisponibilidad = {!! json_encode(html_entity_decode( trans('booking/booking.label18'))) !!};
            var mensajeCuponVencido = {!! json_encode(html_entity_decode( trans('booking/booking.label20'))) !!};
            var mensajeCuponConsumido = {!! json_encode(html_entity_decode( trans('booking/booking.label21'))) !!};
            var mensajeErrorDisponibilidad = {!! json_encode(html_entity_decode( trans('booking/booking.label22'))) !!};

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
                    submitHandler: function(form) {

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
                            url: urlBooking+'pjActionCheckDates&cid='+horario+'&start_dt='+fechaFormato+'&end_dt='+fechaFormato+'&session_id=',
                            type: "GET",
                            data: "",
                            success: function( response ) {
                                if (response.status === "OK") {
                                    getBookingForm(horario,nombreHorario,fecha,fechaFormato,pasajeros,mes,anio);
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
                                    setTimeout(function(){
                                        $('#message_pay1').hide();
                                        $('#message_pay_div1').hide();
                                    },5000);
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
                    num1 = ((parseFloat($('#finalPrice').text()) + parseFloat('2')).toFixed(2)).toString();
                    $('#finalPrice').text(num1);
                } else {
                    num1 = ((parseFloat($('#finalPrice').text()) - parseFloat('2')).toFixed(2)).toString();
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
                    submitHandler: function(form) {

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

                        if(cupon === '' || cupon === null || cupon === undefined){

                            var sendData = 'start_dt='+fechaFormatoFinal+'&end_dt='+fechaFormatoFinal+'&c_adults='+pasajerosFinal+'&c_children=0&c_name='+name+'&c_lastname='+lastname+'&c_email='+email+'&c_cedula='+identification+'&c_phone='+phone+'&c_address='+address+'&cupon=0&payment_method=creditcard';

                            $.ajax({
                                url: urlBooking+'pjActionGetSummaryFormBookingLight&cid='+horarioFinal+'&view=1&locale=&index=0&session_id=' ,
                                type: "POST",
                                data: sendData,
                                success: function( response ) {

                                    if (parseInt(response.code, 10) === 200){
                                        if(parseInt(response.disponibilidad, 10) === 1){
                                            //AQUI SE HACE EL LLAMADO A LA OTRA FUNCION PARA REAZILAR EL PAGO
                                            getBookingSave(horarioFinal,checkUpdatePrice,sendData);
                                        }else{
                                            //MOSTRAR MENSAJE DE FALTA DE DISPONIBILIDAD
                                            $("#section-info-booking-hide").click();
                                            $('#message_pay').show();
                                            $('#message_pay_div').show();
                                            $('#message_pay').html(mensajeDisponibilidad);
                                            $("#section-info-booking-hide").click();
                                            setTimeout(function(){
                                                $('#message_pay').hide();
                                                $('#message_pay_div').hide();
                                            },5000);
                                        }
                                    }
                                }
                            });

                        }else{
                            console.log('validar el calor del cupon');

                            var sendDataCupon = 'code='+cupon;
                            $.ajax({
                                url: urlBooking+'verifyCouponBookingLight' ,
                                type: "POST",
                                data: sendDataCupon,
                                success: function( response ) {

                                    console.log('response del cupon');


                                    if (parseInt(response.code, 10) === 200){

                                        if(parseInt(response.cupon, 10) === 1){

                                            // SE VALIDA EL CUPON Y SE SIGUE EL PROCESO NORMAL
                                            var valorCupon = Number(response.cantidad);
                                            var cuponID = response.id;

                                            var sendData = 'start_dt='+fechaFormatoFinal+'&end_dt='+fechaFormatoFinal+'&c_adults='+pasajerosFinal+'&c_children=0&c_name='+name+'&c_lastname='+lastname+'&c_email='+email+'&c_cedula='+identification+'&c_phone='+phone+'&c_address='+address+'&cupon='+valorCupon+'&cupon_id='+cuponID+'&payment_method=creditcard';

                                            $.ajax({
                                                url: urlBooking+'pjActionGetSummaryFormBookingLight&cid='+horarioFinal+'&view=1&locale=&index=0&session_id=' ,
                                                type: "POST",
                                                data: sendData,
                                                success: function( response ) {

                                                    if (parseInt(response.code, 10) === 200){
                                                        if(parseInt(response.disponibilidad, 10) === 1){
                                                            //AQUI SE HACE EL LLAMADO A LA OTRA FUNCION PARA REAZILAR EL PAGO
                                                            getBookingSave(horarioFinal,checkUpdatePrice,sendData);
                                                        }else{
                                                            //MOSTRAR MENSAJE DE FALTA DE DISPONIBILIDAD
                                                            $("#section-info-booking-hide").click();
                                                            $('#message_pay').show();
                                                            $('#message_pay_div').show();
                                                            $('#message_pay').html(mensajeDisponibilidad);
                                                            $("#section-info-booking-hide").click();
                                                            setTimeout(function(){
                                                                $('#message_pay').hide();
                                                                $('#message_pay_div').hide();
                                                            },5000);
                                                        }
                                                    }
                                                }
                                            });

                                        }else if(parseInt(response.cupon, 10) === 2){

                                            $("#section-info-booking-hide").click();
                                            $('#message_pay').show();
                                            $('#message_pay_div').show();
                                            $('#message_pay').html(mensajeCuponVencido);
                                            $("#section-info-booking-hide").click();
                                            setTimeout(function(){
                                                $('#message_pay').hide();
                                                $('#message_pay_div').hide();
                                            },5000);

                                        }else{

                                            // CUPON VENCIDO
                                            $("#section-info-booking-hide").click();
                                            $('#message_pay').show();
                                            $('#message_pay_div').show();
                                            $('#message_pay').html(mensajeCuponConsumido);
                                            $("#section-info-booking-hide").click();
                                            setTimeout(function(){
                                                $('#message_pay').hide();
                                                $('#message_pay_div').hide();
                                            },5000);
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

            function getBookingForm(horario,nombreHorario,fecha,fechaFormato,pasajeros,mes,anio){

                $.ajax({

                    url: urlBooking+'pjActionGetBookingForm&cid='+horario+'&view=1&month='+mes+'&year='+anio+'&start_dt='+fechaFormato+'&end_dt='+fechaFormato+'&c_adults='+pasajeros+'&locale=&index=0&session_id=',
                    type: "GET",
                    data: "",
                    success: function( response ) {

                        var jqueryObject = $($.parseHTML(response));
                        var precio1 = jqueryObject.find("#precio1").html();
                        getPrices(horario,nombreHorario,fecha,fechaFormato,pasajeros);

                    }
                });
            }

            function getPrices(horario,nombreHorario,fecha,fechaFormato,pasajeros){
                console.log(horario,fecha,pasajeros,fechaFormato);
                $.ajax({

                    url: urlBooking+'pjActionGetPriceBookingLight&cid='+horario+'&start_dt='+fechaFormato+'&end_dt='+fechaFormato+'&c_adults='+pasajeros+'&c_name=&c_lastname=&c_email=&c_cedula=&c_phone=&c_address=&payment_method=creditcard',
                    type: "GET",
                    data: "",
                    success: function( response ) {

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

            function getBookingSave(horarioFinal,check,sendData){

                $.ajax({

                    url: urlBooking+'pjActionBookingSaveLight&cid='+horarioFinal+'&check='+check+'&session_id=',
                    type: "POST",
                    data: sendData,
                    success: function( data ) {

                        $("#section-info-booking-hide").click();
                        if (data.code === undefined) {
                            return;
                        }
                        if (parseInt(data.code, 10) === 200){
                            if(parseInt(data.array.error_code, 10) === 400){
                                //$('#send_form_info').html('Pagar');
                                $('#res_message_form').show();
                                $('#msg_div_form').show();
                                $('#res_message_form').html(data.array.message);
                                setTimeout(function(){
                                    $('#res_message_form').hide();
                                    $('#msg_div_form').hide();
                                },5000);
                            }else{
                                // REDIRECCIONA A PAGO MEDIOS
                                window.location.href = data.url;
                            }
                        } else {
                            //$('#send_form_info').html('Pagar');
                            $('#res_message_form').show();
                            $('#msg_div_form').show();
                            $('#res_message_form').html(data.array.message);
                            setTimeout(function(){
                                $('#res_message_form').hide();
                                $('#msg_div_form').hide();
                            },5000);
                        }

                    }
                });
            }

        });

     </script>

     <script type="text/javascript">
        $(document).ready(function () {
            (function ($) {
                var carouselLugares = $(".carouselLugares");
                var carouselHoteles = $(".carouselHoteles");
                var carouselRestaurantes = $(".carouselRestaurantes");

                $('.owl-carousel').owlCarousel({
                        stagePadding: 50,
                            loop:true,
                            margin:10,
                            nav:false,
                            responsive:{
                                0:{
                                    items:1
                                },
                                600:{
                                    items:3
                                },
                                1000:{
                                    items:5
                                }
                            }
                });

                $(".next").click(function(e){
                    var selectedCarousel = $(this)[0].attributes[1].nodeValue;
                    $('.' + selectedCarousel).trigger('next.owl.carousel');
                  })
                $(".prev").click(function(e){
                    var selectedCarousel = $(this)[0].attributes[1].nodeValue;
                    $('.' + selectedCarousel).trigger('prev.owl.carousel');
                })
            })(jQuery);
        });
    </script>
    {{-- FIN SCRIPTS PARA EL BOOKING --}}

    <script type="text/javascript">

	 $('#lang').click(function(e) {
	   	 e.preventDefault();
	   if("{!!$language!!}" == 'en' ){
            window.location='https://iwannatrip.com/es/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}';
            //window.location='http://localhost:8000/es/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}';

	   }
	   else{
            window.location='https://iwannatrip.com/en/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}';
            //window.location='http://localhost:8000/en/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}';

	   }

    });


    function openModalReviewExplore(event) {
        event.preventDefault();
        $('#modal-review-explore').modal().show();
    }



	 $('.btnsmAvailab').click(function () {
                                                                //$("html, body").animate({scrollTop: 0}, 600);
            $('html, body').animate({scrollTop: parseInt($(".calendarios").offset().top)}, 2000);
			return false;
                                                            });



                                                            function startBgTopCarousel(arrayImages,urlServ) {
        // console.log(arrayImages.replace(/&quot;/g, '\\"'));
        var arrayImages = JSON.parse(arrayImages.replace(/&quot;/g, '"'));
        var index = 0;
        var imageUrlIcon = '';
        var imageUrlFull = '';
        if (arrayImages.length > 1) {
            imageUrlIcon =  urlServ + '/' + arrayImages[0].filename;
            imageUrlFull =  urlServ + '/' + arrayImages[0].filename;
            var index = 1;
            $('#bgTop').css('background-image', 'url(' + imageUrlIcon + ')');
            setInterval(function(){
                if (index < arrayImages.length) {
                    imageUrlIcon =  urlServ + '/' + arrayImages[index].filename;
                    imageUrlFull =  urlServ + '/' + arrayImages[index].filename;
                    index++;
                }else{
                    index = 0;
                }
                $('#bgTop').fadeTo('slow', 0.5, function()
                    {
                        $(this).css('background-image', 'url(' + imageUrlIcon + ')');
                    })
                .fadeTo('slow', 1);
            },5000);
        }else{
            imageUrlIcon =  urlServ + '/' + arrayImages[0].filename;
            imageUrlFull =  urlServ + '/' + arrayImages[0].filename;
            $('#bgTop').css('background-image', 'url(' + imageUrlIcon + ')');
            $('#bgTop').fadeTo('slow', 0.5, function()
                {
                    $(this).css('background-image', 'url(' + imageUrlIcon + ')');
                })
            .fadeTo('slow', 1);
        }
    }

    startBgTopCarousel('{{ json_encode($imagenes) }}',"https://bookiw.iwannatrip.com/app/web/uploads");



    document.addEventListener("DOMContentLoaded", function() {
  var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy-background"));

  if ("IntersectionObserver" in window) {
    let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          lazyBackgroundObserver.unobserve(entry.target);
        }
      });
    });

    lazyBackgrounds.forEach(function(lazyBackground) {
      lazyBackgroundObserver.observe(lazyBackground);
    });
  }
});



document.addEventListener("DOMContentLoaded", function() {
  var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy-background"));

  if ("IntersectionObserver" in window && "IntersectionObserverEntry" in window && "intersectionRatio" in window.IntersectionObserverEntry.prototype) {
    let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          lazyBackgroundObserver.unobserve(entry.target);
        }
      });
    });

    lazyBackgrounds.forEach(function(lazyBackground) {
      lazyBackgroundObserver.observe(lazyBackground);
    });
  }
});

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

    </script>



</body>

</html>
