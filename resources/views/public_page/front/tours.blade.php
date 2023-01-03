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
     if(session('locale') == 'en' && $agrupacion[0]->nombre_eng!=''){
		$tituloIdioma=$agrupacion[0]->nombre_eng;
		$detalleIdioma=$agrupacion[0]->descripcion_eng;
		$keywordsIdioma=$agrupacion[0]->key_words_eng;
		}
	 else{
		$tituloIdioma=$agrupacion[0]->nombre;
		$detalleIdioma=$agrupacion[0]->descripcion;
		$keywordsIdioma=$agrupacion[0]->key_words;
	}
	$language=session('locale');
	 $nombreCanonicalRed=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonicalRed = str_replace(' ', '-', $nombreCanonicalRed);
                                $nombreCanonicalRed = str_replace('/', '-', $nombreCanonicalRed);
                                $nombreCanonicalRed = str_replace('?', '-', $nombreCanonicalRed);
                                $nombreCanonicalRed = str_replace("'", '-', $nombreCanonicalRed);
	?>


	 <?php



    $mobile= preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);


	if($mobile){
	$desk = "mobile";
		Session::put('device', $desk);
	}




    ?>
				<title>{!!$tituloIdioma!!} | iWaNaTrip | Galapagos Transfers |DayTrips Ecuador |Discover Ecuador</title>


    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="_token" content="{!!csrf_token() !!}" />
    <?php
        $length = 150;
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

								$language=session('locale');
    ?>
    <meta name="description" content='Reservations- {!!$nombreCanonical!!}. {!!str_replace("\""," ",$stringDisplay)!!} |iWaNaTrip.com| |Galapagos Transfers |DayTrips Ecuador |Discover Ecuador'>
    <meta name="keywords" content="{!!$keywordsIdioma!!} | |Galapagos Transfers |DayTrips Ecuador |Discover Ecuador">
    <meta name="author" content="iWaNaTrip group">
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
    <link rel="shortcut icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.ico') }}" />

    <link rel="apple-touch-icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.png') }}" />
    <link rel="stylesheet" href="{{asset('public_components/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public_components/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public_components/css/letras.css')}}">
	<link rel="stylesheet" href="{{asset('public_components/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public_components/components/owl-carousel/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('public_components/components/magnific-popup/magnific-popup.css')}}">
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{asset('public_components/css/style.css')}}">
    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{asset('public_components/css/updates.css')}}">
    <!-- Custom Styles -->



    <link rel="stylesheet" href="{{asset('public_components/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{asset('public_components/css/responsive.css')}}"> {!!HTML::script('js/jquery.js') !!} {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}
    {!!HTML::script('js/sweetAlert/sweetalert2.min.js') !!}
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-85546019-1');
</script>
    <!-- Slider -->
    <!-- {!!HTML::script('js/sliderTop/jssor.slider.mini.js') !!} -->
    <style type="text/css">
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
    .owl-buttons{
        display: none !important;
    }
    .page-title-container .page-title{
        padding: 100px 0 25px;
    }
    </style>
</head>

<body class="woocommerce">
    <div id="page-wrapper">
        <div class="page-title-container">
            <div class="page-title">
            </div>
            <ul class="breadcrumbs">
                <li><a href="{!!asset('/')!!}" onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1')}}</a></li>
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
                            <div class="owl-carousel carouselLeft" data-itemsPerDisplayWidth="[[0, 1], [480, 2], [768, 1], [992, 1], [1200, 1]]" data-items="1" data-navigation="false">
                                @foreach ($imagenes as $imagen)
								   <?php
					 		 $file = 'https://bookiw.iwannatrip.com/app/web/uploadsMobile/'.$imagen->filename;
								if (!file_exists($file)) {
									$file = 'https://bookiw.iwannatrip.com/app/web/uploads/'.$imagen->filename;
									}
					?>



                                <a class="soap-mfp-popup" href="https://bookiw.iwannatrip.com/app/web/uploadsMobile/{!!$imagen->filename!!}">
                                    <img src="{{$file}}" alt="">
                                </a>
                                @endforeach
                            </div>
                        </div>

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
                        <div class="box">
                            <h4>{{ trans('publico/labels.label77')}}</h4>
                            <?php
                                $nombre = str_replace(' ', '-', $tituloIdioma);
                                $nombre = str_replace('/', '-', $nombre);
                                $nombre = str_replace('?', '', $nombre);
                                $nombre = str_replace("'", '', $nombre);
                            ?>


							@if(session('locale') == 'en' )
                                       <div class="fb-share-button" data-href="{!!asset('/en/tour')!!}/{!!$nombre!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" data-layout="button_count"></div>
                                     @else
										    <div class="fb-share-button" data-href="{!!asset('/tour')!!}/{!!$nombre!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}" data-layout="button_count"></div>
										 @endif


                        </div>
						@endif


						 @if(session('device')!='mobile')
									<a href="{!!asset('/faqt')!!}">
                                    <img src="{{ url(env('AWS_PUBLIC_URL').'util/3dsecure-notext.png') }}" title="Este es un sitio seguro, ver mas detalles...">

                                </a>

								</br>
								</br>
								</br>

							<a target="_blank" href="{!!asset('/faqt')!!}">
                                                          <img width="182" height="182" alt="web site" src="{{ asset('img/HTTPS.png/')}}">
                                                            <dd>{{(session('locale') == 'es' )?"Los datos de su tarjeta de cr�dito pasan directamente a trav�s del Getway de pago seguro para su procesamiento en tiempo real. Nosotros no almacenamos ning�n tipo de informaci�n de su tarjeta de cr�dito. Una vez que usted haga click en el bot�n de pago, ser� redireccionado al Getway de pago seguro para procesar su pago":"Credit Card Details are securely passed directly through to the Payment Getway for processing in real time. We do not store your Credit Card details at any time. Once you click on Pay you will be redirect to the secure Getway page to process the payment"}}</dd>
                                                        </a>

														</br>
														</br>

                            <a target="_blank" href="{!!asset('/faqt')!!}">
                                                          <img width="42" height="42" alt="web site" src="{{ asset('img/faq.png/')}}">
                                                            </a>
															<h2 style="color:#FF6600" class="product-title btnsmAvailab" ><a class='btnsmAvailab' > info@iwannatrip.com</a>
															</h2>






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
                            <div class="owl-carousel" data-itemsPerDisplayWidth="[[0, 1], [480, 2], [768, 1], [992, 1], [1200, 1]]" data-items="1">
                                <a href="{!!asset('/detalle')!!}/detail/{!!$atraccionComplete->id!!}">
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
                                        <h1 class="product-title entry-title">{{$tituloIdioma}}</h1>
										  {{-- @if($agrupamientos[0]->total == 0)  --}}
                                        @if($calificacionAgrupamiento[0]->calificacion == 0)
                                             <span class="star-rating" title="0" data-toggle="tooltip">
                                                 <span data-stars="0"></span>
                                             </span>
                                      @endif

                                    {{-- @if($agrupamientos[0]->total > 0) --}}
                                        @if($calificacionAgrupamiento[0]->calificacion)
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
									   </div>
									   <span class="product-price box"> {{(session('locale') == 'es' )?"Desde":"From"}}  {!! $agrupamientos[0]->precioDesde !!}$ </span>



									       <div class="widget box">

                                <ul class="product-list-widget btnsmAvailab">

                                    <li style="background:#248FAF ; border: solid #f7f7f7;
                                        box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;
                                        ">
                                        <div class="product-image">
                                            <a class='btnsmAvailab' >

                                            </a>
                                        </div>
                                        <div class="product-content">

                                            @if(session('locale') == 'es' )
                                            <h2 style="color:white" class="product-title btnsmAvailab" ><a class='btnsmAvailab' >Ver Disponibilidad</a></h2>

                                            @else
                                            <h2 style="color:white"  class="product-title" ><a class='btnsmAvailab'>Check Availability </a></h2>

                                            @endif
                                        </div>
                                    </li>
									</ul>

                                   </div>
                                    <dl class="product-meta">

                                        <pre class="more">

                                                {!!$detalleIdioma!!}

                                        </pre>







                                    </dl>




                                </div>
                            </div>
                            <!--<h4>{{ trans('publico/labels.label28')}}</h4>
                            <div class="iso-container iso-col-3 style-masonry has-column-width cercanos ">
                                @section('cercanos') @show
                            </div>-->




                        </div>


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

					<div class='calendarios'>
									</div>

						 <div class="tab-container full-width style2">
                            <ul class="tabs clearfix">
                                <?php $contador = 0;?>
                                @foreach($calendarios as $calendario)
                                    @if($calendario->content != '')
                                        @if($contador == 0)
                                            <li class="active"><a href="#tab3-{!!$calendario->id!!}" data-toggle="tab">{!!$calendario->content!!}</a></li>


                                        @else
                                            <li><a href="#tab3-{!!$calendario->id!!}" data-toggle="tab">{!!$calendario->content!!}</a></li>
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
                                                <link href="https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=pjActionLoadCss&cid={!!$calendario->id!!}" type="text/css" rel="stylesheet" />
                                                <script type="text/javascript" src="https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=pjActionLoad&cid={!!$calendario->id!!}&view=1" ></script>
                                            </div>
                                        </div>
                                    @else
                                        <div id="tab3-{!!$calendario->id!!}" class="tab-content">
                                            <div class="tab-pane" style="height: 800px;">
                                                <h3>{!!$calendario->content!!}</h3>
                                                 <p> </p>
                                                <link href="https://bookiw.iwannatrip.com/index.php?controller=pjFront&action=pjActionLoadCss&cid={!!$calendario->id!!}" type="text/css" rel="stylesheet" />
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







                                <!-- CARGA DE LOS REVIEWS -->
							@if(($reviewsAgrupamientos!=null))
                                @if(!empty($reviewsAgrupamientos))
                                <div class="section-info">
                                    <div class="woocommerce-tabs tab-container vertical-tab clearfix box">
                                        <ul class="tabs">
                                            <li class="active"><a href="#tab3-3" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div id="tab3-3" class="tab-content panel entry-content in active">
                                            <div class="tab-pane">
                                                <div id="comments">
                                                    <?php $contadorReviews = count($reviewsAgrupamientos);?>
                                                    <h3> <?php echo $contadorReviews; ?> Reviews {!!$agrupacion[0]->nombre!!} </h3>
                                                    @foreach($reviewsAgrupamientos as $reviews)
                                                        <ol class="commentlist">
                                                            <li class="comment">
                                                                <div class="author-img">
                                                                    <span class="user-name"><?php echo trim($reviews->nombre_reviewer);?></span>
                                                                </div>
                                                                <div class="comment-content">
                                                                  <div class="tooltip_templates">
                                                                        <span id="tooltip_content_{{$reviews->id}}">
                                                                            <?php $Resumencalificacion = "";?>
                                                                            @foreach ($reviews->resumen_views as $resumen)
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
                                                                    <h5 class="comment-author-name"><a href="#">{!! $reviews->nombre_reviewer !!}</a></h5>
                                                                    <span style="cursor: pointer" data-toggle="tooltip" class="star-rating">
                                                                        <span data-stars="{!!($reviews->total)/count($reviews->resumen_views)!!}"></span>
                                                                        <div class="tooltip" data-tooltip-content="#tooltip_content_{{$reviews->id}}"></div>
                                                                    </span>

                                                                        <?php $d = strtotime($reviews->created_at);
                                                                              $fecha = date("d M, Y ", $d); ?>
                                                                    <span class="comment-date"> <?php echo $fecha; ?></span>
                                                                    <div class="description">
                                                                        <p> {!! $reviews->text_review !!} </p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
							@endif

							 </div>


								 @if(session('device')!='mobile')
                    <div class="sidebar col-sm-4 col-md-3">
                        <div class="main-mini-search-form full-width box">
                            <div class="search-box">
                                <div class="social-wrap">
                                    <div class="social-icons box size-lg style3">
                                        @if(session('statut')!='visitor')
                                        <a href="{!!asset('/services')!!}" onclick="$('.container').LoadingOverlay('show');" class="social-icon">
                                            <label>{{utf8_encode( trans('publico/labels.label151'))}}</label> <i class="fa fa-plus has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
                                        @else
                                        <a href="{!!asset('/services')!!}" onclick="$('.container').LoadingOverlay('show');" class="social-icon">
                                            <label>{{utf8_encode( trans('publico/labels.label151'))}}</label> <i class="fa fa-plus has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
                                        @endif
                                    </div>
                                </div>
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
                            <a href="{!!asset('/tourList')!!}" >
							<h4>{{(session('locale') == 'es' )?"Reservas online iWaNaTrip":"Reservations online iWaNaTrip"}}</h4>
							</a>
                            <ul class="demo1">
                                @foreach($agrupamientos2 as $group)
                                <li class="news-item">
                                            <?php

											if(session('locale') == 'en' )
								    $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($group->nombre_eng))));
								else
									$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($group->nombre))));



                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);

        ?>
							@if(session('locale') == 'en' )
                                    <a href='{!!asset("/en/tour/$nombreCanonical/$group->id_usuario_servicio/$group->id")!!}'>
                                     @else
										 <a href='{!!asset("/tour/$nombreCanonical/$group->id_usuario_servicio/$group->id")!!}'>
										 @endif
                                        <table cellpadding="4">
                                            <tr>
                                                @if(empty($group->foto))
                                                <td style="margin-right: 10px !important;width: 30%;"> <img src="/images/no-image-available.png" width="80" height="50"> </td>
                                                @else
                                                <td style="margin-right: 10px !important;width: 30%;"> <img src="https://bookiw.iwannatrip.com/app/web/uploadsMobile/{!!$group->foto[0]->filename!!}" width="80" height="50"> </td>
                                                @endif
                                                <td style="width: 80%;padding-left: 5px;">
                                                    <p style="margin-bottom: 0px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                                        {!!$nombreCanonical!!}
                                                    </p>
                                                    @if($group->precioDesde == 0)
                                                    <p> {{(session('locale') == 'es' )?"Gratis":"Free"}} </p>
                                                    @else
                                                    <p> {{(session('locale') == 'es' )?"Precio Desde:":"Price From"}}
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
                        <div class="widget banner-slider box">
                            <div class="owl-carousel" data-itemsPerDisplayWidth="[[0, 1], [480, 2], [768, 1], [992, 1], [1200, 1]]" data-items="1">
                                <a href="#">
                                        <img src="{{ asset('img/rsz_00kwwk8s.jpg')}}" alt="">
                                    </a>
                            </div>
                        </div>
                    </div>

					@endif


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
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('public_components/components/owl-carousel/owl.carousel.min.js')}}" defer></script>
    <!-- plugins -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.plugins.js')}}" defer></script>
    <!-- Google Map Api
    <script type='text/javascript' src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_EMZUmPpoFAnnKhXfBf5Gzl4FcK_jaLU"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/gmap3.js')}}"></script>

    <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>
    {!!HTML::script('js/Compartido.js') !!} {!!HTML::script('js/js_public/Compartido.js') !!}

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
    });
    </script>

    <script type="text/javascript">

	 $('#lang').click(function(e) {
	   	 e.preventDefault();
	   if("{!!$language!!}" == 'en' ){
			window.location='https://iwannatrip.com/es/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}';

	   }
	   else{
			window.location='https://iwannatrip.com/en/tour/{!!$nombreCanonicalRed!!}/{!!$atraccionComplete->id!!}/{!!$agrupacion[0]->id!!}';

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

    </script>
</body>

</html>