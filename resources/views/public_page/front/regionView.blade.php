<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="{{session('locale')}}" dir="{{session('locale')}}">
<!--<![endif]-->

<head>
    <!-- Page Title -->

        <title>iWaNaTrip - |{{(session('locale') == 'es' )?" Ecuador Turismo | Ferry Galápagos | Ofertas Ecuador | Reservas online | ":"Ecuador Travel |Tourist Places in Ecuador |Ferry Galapagos | Ecuador deals |Online reservations | "}}</title>



    <link rel="shortcut icon" href="{{ url(env('AWS_PUBLIC_URL').'images/images/favicon.png')}}" />
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="_token" content="{!! csrf_token() !!}" />

    <meta name="author" content="iWanaTrip team">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="iWaNaTrip - |{{(session('locale') == 'es' )?' Ecuador Turismo | Ferry Galápagos | Ofertas Ecuador | Reservas online':'  Ecuador Travel | Ferry Galapagos | Ecuador deals |Online reservations'}} ">
    <meta name="keywords" content="iWaNaTrip - |{{(session('locale') == 'es' )?' Ecuador Turismo | Ferry Galápagos | Ofertas Ecuador | Reservas online':'  Ecuador Travel | Ferry Galapagos | Ecuador deals |Online reservations'}} ">
      <meta name="author" content="iWaNaTrip group">
    <meta http-equiv="Content-Language" content="en">
    <meta NAME="robots" CONTENT="all | index | follow">
    <meta name="Revisit" content="3 days">
    <meta name="msvalidate.01" content="421B34D10B14BB413DA96450492A81E9" />
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png')}}" />
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon.png')}}" />

    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('public_components/css/bootstrap.min.css')}}" media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" href="{{ asset('public_components/css/font-awesome.min.css')}}" media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" href="{{ asset('public_components/css/letras.css')}}"> {!! HTML::style('css/jquery-labelauty.css') !!}
    <link rel="stylesheet" href="{{ asset('public_components/css/animate.min.css')}}" media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.css')}}" media="screen"  media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/owl-carousel/owl.transitions.css')}}" media="screen"  media="none" onload="if(media!=='all')media='all'" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{ asset('public_components/components/magnific-popup/magnific-popup.css')}}"> {!!HTML::script('js/sliderTop/jssor.slider.mini.js') !!}
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{ asset('public_components/css/style.css')}}"  media="screen"  media="none" onload="if(media!=='all')media='all'" />
    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{ asset('public_components/css/updates.css')}}" media="screen"  media="none" onload="if(media!=='all')media='all'" />
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('public_components/css/custom.css')}}" media="screen"  media="none" onload="if(media!=='all')media='all'" />
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{ asset('public_components/css/responsive.css')}}" media="screen"  media="none" onload="if(media!=='all')media='all'" />
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
            <link rel="stylesheet" type="text/css" href="{{ asset('public_components/css/ie.css')}}" />
        <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->
    <style>
    a.morelink {
        text-decoration: none;
        outline: none;
    }

    .morecontent span {
        display: none;
    }
    </style>
    <style>
    .ui-menu {
        box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.11);
        background: rgba(255, 255, 255, 0.9) none repeat scroll 0 0;
        width: 240px;
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


@if(session('device')=='mobile')
	<div class="page">
  <h2>iWaNaTrip</h2>

</div>
<div id="loading"></div>
@endif

  	<!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85546019-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-85546019-1');
</script>
</head>

<body class="woocommerce">
    <div id="page-wrapper">

	@if(session('device')!='mobile')
    <div class="page-title-container">
            <div class="page-title">
            </div>

        </div>
        @endif


    <header id="header" class="header-color-white">
                @include('public_page.reusable.header')
            </header>



            <section>
		<div class="container">
			<div class="row">


        @if(session('locale') == 'es' )
        <?php $titlUp = $dataRegion['name']?> @else
        <?php $titlUp = $dataRegion['name_eng']?> @endif


    </div>
    <div class="section" style="padding: 0;">
        <div class="container">
            <div class="heading-box">
                <!-- <p class="desc-lg">{{ trans('welcome/index.label14')}}</p> -->
            </div>
            <div class="block row">
                <div class="col-lg-2" style="margin-top: 7%;">
                    <article class="post post-masonry">
                           <div class="post-image">
                                <div class="image">


	@if(session('device')!='mobile')
						   <div class="image">
                           <img alt="" src="{{asset('/img/')}}/{{$dataRegion['image']}}">
						   @else
                             <!-- <p class="desc-lg">{{ trans('welcome/index.label14')}}</p>
						   <div class="image" style="width: 70%;margin-left: 15%;">
                           <img alt="" style="width: 50%;margin-left: 20%;" src="{{asset('/img/')}}/{{$dataRegion['image']}}">           -->
						   @endif

                                    <div class="image-extras">
                                        <a class="post-gallery" href="#"></a>
                                    </div>
                                </div>
                            </div>
                    </article>
                </div>
				<br>
                <div class="col-lg-9 text-center">
                    <h1 class="box-title" style="font-size: 50px;"><strong>{{$titlUp}}</strong></h1>
                    <hr>
                    <p class="more" style="text-align: justify;">
                            {{str_limit($dataRegion['description'], $limit = 2500, $end = '...')}}
                    </p>
                </div>
                @foreach($placesRegionList as $place)
                <div class="col-sm-6 col-md-3">
                    <div class="icon-box style-boxed-4 box">




                    @if(session('locale') == 'es' )
                        <a href="{!!asset('/es')!!}/{{$place->serviceData->nombre_servicio}}/{{$place->serviceData->id}}">
                    @else

                        <a href="{!!asset('/en')!!}/{{$place->serviceData->nombre_servicio}}/{{$place->serviceData->id}}">
                    @endif




                            <div class="icon-container" style="
                                background: url('{{url('https://iwannatrip.s3.us-east-1.amazonaws.com/images/icon')}}/{{(is_null($place->serviceImage))?'no':$place->serviceImage->filename}}');
                                min-height: 120px;
                                background-position: center;
                                background-size: 110%;">
                            </div>
                        </a>
                        <div class="box-content">
                            <h4 class="box-title">


                    @if(session('locale') == 'es' )
                        <a href="{!!asset('/es')!!}/{{$place->serviceData->nombre_servicio}}/{{$place->serviceData->id}}">
                    @else

                        <a href="{!!asset('/en')!!}/{{$place->serviceData->nombre_servicio}}/{{$place->serviceData->id}}">
                    @endif
                                    {{ $place->serviceData->nombre_servicio}}
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
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



                    @if(session('locale') == 'es' )
                        <a href="{!!asset('/es')!!}/$name/$lugar->id">
                    @else

                        <a href="{!!asset('/en')!!}/$name/$lugar->id">
                    @endif


                                                    @if(is_null($lugar->serviceImage))
                                                    <div style="height: 150px; background: url('/images/no-image-available.png');background-position: top;    background-size: 115%;">
                                                    </div>
                                                    @else
                                                     <div style="height: 150px; background: url('{{url('https://iwannatrip.s3.us-east-1.amazonaws.com/images/icon')}}/{!!$lugar->serviceImage->filename!!}');background-position: top;    background-size: 115%;">
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
                                                    <img src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
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


                    @if(session('locale') == 'es' )

                        <a class="footer-action-icons-tour"href='{!!asset("/es/$lugar->nombre_servicio/$lugar->id")!!}' style="margin-left: 10px;">
                    @else

                    <a class="footer-action-icons-tour"href='{!!asset("/en/$lugar->nombre_servicio/$lugar->id")!!}' style="margin-left: 10px;">
                    @endif





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
    @if(count($hotelesList) > 0)
        <section id="content" style="padding-top: 0;">
            <div class="container">
                <div id="main" style="margin-bottom:0px !important">
                    <div class="section-info">
                        <h3 class="section-title">{{ trans('publico/labels.lblTitleHoteles')}}</h3>
                        <div class="pricing-table-container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="post-slider style1 owl-carousel box carouselHoteles">
                                        @foreach($hotelesList as $hotel)
                                        <div class="Instagram-card">
                                            <div class="Instagram-card-image"  data-toggle="modal" data-target="#form-img-full">




                    @if(session('locale') == 'es' )


                        <a href='{!!asset("/es/$hotel->nombre_servicio/$hotel->id")!!}'>
                    @else

                    <a href='{!!asset("/en/$hotel->nombre_servicio/$hotel->id")!!}'>
                    @endif



                                                    @if(is_null($hotel->serviceImage))
                                                    <div style="height: 150px; background: url('/images/no-image-available.png');background-position: top;    background-size: 115%;">
                                                    </div>
                                                    @else
                                                     <div style="height: 150px; background: url('{{url('https://iwannatrip.s3.us-east-1.amazonaws.com/images/fullsize')}}/{!!$hotel->serviceImage->filename!!}');background-position: top;    background-size: 115%;">
                                                    </div>
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="Instagram-card-content-tour">
                                              <p class="Likes">
                                                <a href='{!!asset("/detalle/$hotel->nombre_servicio/$hotel->id")!!}'>
                                                    {{ str_limit($hotel->nombre_servicio, $limit = 17, $end = '...') }}
                                                </a>
                                              </p>
                                              <p style="font-size: 14px;">
                                                <div class="tour-detail">
                                                    <span class="label-tour-item">{{ trans('booking/labels.labelBook5')}}:</span>
                                                    <span class="label-tour-price">{{($hotel->precio_desde > 0) ? ' $'. $hotel->precio_desde: 'FREE'}}</span>
                                                </div>
                                              </p>
                                               @if($hotel->id_catalogo_servicio == 1)
                                                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/1.png')}}" title="eatDrink" alt="eatDrink">
                                                     <span class="product-price" ><span class="currency-symbol"></span>Eat & Drink</span>

                                                @elseif($hotel->id_catalogo_servicio == 2)
                                                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/2.png')}}" title="Sleep" alt="Sleep">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Sleep</span>
                                                @elseif($hotel->id_catalogo_servicio == 3)
                                                    <img src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Tour Operator</span>
                                                @elseif($hotel->id_catalogo_servicio == 9)
                                                    <img style="width:50px"  src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/festividades.png')}}" title="Festividades" alt="turismo">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Festividades</span>
                                                        <?php
                                                            $date = date_create($hotel->fecha_ingreso);
                                                            $date2 = date_create($hotel->fecha_fin);
                                                         ?>
                                                    <span class="comment-date" style="color: #EB5D5E">{!!date_format($date, 'j F ')!!}-{!!date_format($date2, 'j F ')!!}</span>
                                                @else
                                                    <img src="{{ asset('/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Turism</span>
                                                @endif
                                            </div>
                                            <div class="Instagram-card-footer">
                                              <a class="footer-action-icons-tour"href='{!!asset("/detalle/$hotel->nombre_servicio/$hotel->id")!!}' style="margin-left: 10px;">
                                                {{(session('locale') == 'es' )?'Ver más':'Details'}} <i class="fa fa-eye"></i>
                                              </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="customNavigation text-center">
                                      <a class="prev" idCarousel="carouselHoteles" style="cursor: pointer;"><i class="fa fa-angle-left fa-4x"></i></a>
                                      &nbsp;&nbsp;&nbsp;
                                      <a class="next" idCarousel="carouselHoteles" style="cursor:pointer;"><i class="fa fa-angle-right fa-4x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(count($restaurantesList) > 0)
        <section id="content" style="padding-top: 0;">
            <div class="container">
                <div id="main" style="margin-bottom:0px !important">
                    <div class="section-info">
                        <h3 class="section-title">{{ trans('publico/labels.lblTitleRestaurantes')}}</h3>
                        <div class="pricing-table-container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="post-slider style1 owl-carousel box carouselRestaurantes">
                                        @foreach($restaurantesList as $restaurante)
                                        <div class="Instagram-card">
                                            <div class="Instagram-card-image"  data-toggle="modal" data-target="#form-img-full">


                                                @if(session('locale') == 'es' )


                                                <a href='{!!asset("/es/$restaurante->nombre_servicio/$restaurante->id")!!}'>
                    @else

                    <a href='{!!asset("/en/$restaurante->nombre_servicio/$restaurante->id")!!}'>
                    @endif
                                                    @if(is_null($restaurante->serviceImage))
                                                    <div style="height: 150px; background: url('/images/no-image-available.png');background-position: top;    background-size: 115%;">
                                                    </div>
                                                    @else
                                                     <div style="height: 150px; background: url('{{url('https://iwannatrip.s3.us-east-1.amazonaws.com/images/fullsize')}}/{!!$restaurante->serviceImage->filename!!}');background-position: top;    background-size: 115%;">
                                                    </div>
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="Instagram-card-content-tour">
                                              <p class="Likes">


                                                @if(session('locale') == 'es' )



                                                    <a href='{!!asset("/es/$restaurante->nombre_servicio/$restaurante->id")!!}'>
                                                    @else

                                                    <a href='{!!asset("/en/$restaurante->nombre_servicio/$restaurante->id")!!}'>
                                                    @endif


                                                    {{ str_limit($restaurante->nombre_servicio, $limit = 17, $end = '...') }}
                                                </a>
                                              </p>
                                              <p style="font-size: 14px;">
                                                <div class="tour-detail">
                                                    <span class="label-tour-item">{{ trans('booking/labels.labelBook5')}}:</span>
                                                    <span class="label-tour-price">{{($restaurante->precio_desde > 0) ? ' $'. $restaurante->precio_desde: 'FREE'}}</span>
                                                </div>
                                              </p>
                                               @if($restaurante->id_catalogo_servicio == 1)
                                                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/1.png')}}" title="eatDrink" alt="eatDrink">
                                                     <span class="product-price" ><span class="currency-symbol"></span>Eat & Drink</span>

                                                @elseif($restaurante->id_catalogo_servicio == 2)
                                                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/2.png')}}" title="Sleep" alt="Sleep">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Sleep</span>
                                                @elseif($restaurante->id_catalogo_servicio == 3)
                                                    <img src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Tour Operator</span>
                                                @elseif($restaurante->id_catalogo_servicio == 9)
                                                    <img style="width:50px"  src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/festividades.png')}}" title="Festividades" alt="turismo">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Festividades</span>
                                                        <?php
                                                            $date = date_create($restaurante->fecha_ingreso);
                                                            $date2 = date_create($restaurante->fecha_fin);
                                                         ?>
                                                    <span class="comment-date" style="color: #EB5D5E">{!!date_format($date, 'j F ')!!}-{!!date_format($date2, 'j F ')!!}</span>
                                                @else
                                                    <img src="{{ asset('/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                                                    <span class="product-price" ><span class="currency-symbol"></span>Turism</span>
                                                @endif
                                            </div>
                                            <div class="Instagram-card-footer">




                                              @if(session('locale') == 'es' )



                                              <a class="footer-action-icons-tour"href='{!!asset("/es/$restaurante->nombre_servicio/$restaurante->id")!!}' style="margin-left: 10px;">
                        @else

                        <a class="footer-action-icons-tour"href='{!!asset("/en/$restaurante->nombre_servicio/$restaurante->id")!!}' style="margin-left: 10px;">
                        @endif
                                                {{(session('locale') == 'es' )?'Ver más':'Details'}} <i class="fa fa-eye"></i>
                                              </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="customNavigation text-center">
                                      <a class="prev" idCarousel="carouselRestaurantes" style="cursor: pointer;"><i class="fa fa-angle-left fa-4x"></i></a>
                                      &nbsp;&nbsp;&nbsp;
                                      <a class="next" idCarousel="carouselRestaurantes" style="cursor:pointer;"><i class="fa fa-angle-right fa-4x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="btn" href="{{asset('getRegionDescipcion')}}/{{Request::get('region')}}" idCarousel="carouselRestaurantes" style="cursor:pointer;">
                        {{(session('locale') == 'es' ? 'Ver más' : 'Show more')}}
                    </a>
                </div>
            </div>
        </section>
<br>
    @endif

    </div><!-- row -->
		</div><!-- container -->
	</section>
    </div>
    <footer id="footer" class="style4">
        <div class="callout-box style2">
            <div class="container">
                <div class="callout-content">
                    <div class="callout-text">
                        <h4>{{ trans('publico/labels.label119')}}</h4>
                    </div>
                </div>
            </div>
        </div>
        @include('public_page.reusable.footer')
    </footer>

    <!-- Javascript -->
    {!! HTML::script('js/jquery.js') !!} {!!HTML::script('js/js_public/Compartido.js') !!} {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}  {!!HTML::script('js/Compartido.js') !!}
    <script type="text/javascript" src="{{ asset('public_components/js/jquery-2.1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.noconflict.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/modernizr.2.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery-ui.1.11.2.min.js')}}"></script>
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="{{ asset('public_components/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup core JS file -->
    <script type="text/javascript" src="{{ asset('public_components/components/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- parallax -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.stellar.min.js')}}"></script>
    <!-- waypoint -->
    <script type="text/javascript" src="{{ asset('public_components/js/waypoints.min.js')}}"></script>
    <!-- Owl Carousel -->
    <!-- <script type="text/javascript" src="{{ asset('public_components/components/owl-carousel/owl.carousel.min.js')}}"></script> -->
    <script type="text/javascript" src="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.min.js')}}"></script>
    <!-- plugins -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.plugins.js')}}"></script>
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

$("body").on("click",function(e){var target=$(e.target);if($("#header .mini-search .main-nav-search-form").hasClass("active")&&!target.is("#header .mini-search form *")){$("#header .mini-search .main-nav-search-form").fadeOut();$("#header .mini-search .main-nav-search-form").removeClass("active");}});
    $("#header .mini-search > a").on("click",function(e){e.preventDefault();$(this).parent().children(".main-nav-search-form").fadeIn("fast",function(){$(this).addClass("active");});$(this).parent().children(".main-nav-search-form").find("input[type=text]").focus();});

    </script>

	<script>

     sjq(document).ready(function($) {
        // Configure/customize these variables.
        var showChar = {{(session('device')!='mobile' )?800:300}}; // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "Show more >";
        var lesstext = "Show less";
        $('.more').each(function() {
            var content = $(this).html();
            if (content.length > showChar) {
                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);
                  var html =`${c} <span class="moreellipses"> ${ellipsestext} &nbsp;</span><span class="morecontent"> ${h}</span> <span><a href="" class="morelink">${moretext}</a></span>`;
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
    <script>
    sjq(document).ready(function($) {
        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        sync1.owlCarousel({
            singleItem: true,
            slideSpeed: 1000,
            navigation: true,
            pagination: true,
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
            pagination: true,
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
    @if(session('device')!='mobile')
    <script>
    jQuery(document).ready(function($) {

        var jssor_1_SlideshowTransitions = [
            { $Duration: 1800, $Opacity: 2 }
        ];
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
        background:url ("{!!url("https://iwannatrip.s3.us-east-1.amazonaws.com/images/img/internas/b05.png")!!}") no-repeat;
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
        background:url("{!!asset("img/internas/a12.png")!!}") no-repeat;
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
    @endif
    <!-- load page Javascript -->
    <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>
</body>

</html>