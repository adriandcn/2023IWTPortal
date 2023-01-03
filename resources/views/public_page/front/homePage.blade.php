<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <!-- Page Title -->
    <title>iWaNaTrip - Viaja y vive la experiencia de conocer Ecuador - Aventura</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="description" content="iWaNaTrip es un espacio de busqueda para la red viajeros de todo el mundo, permite compartir el contenido de forma sencilla a traves de internet.
              iWaNaTrip es experiencia de vida. Deja de ser turista, conviertete en viajero. Viaja por el mundo y descubre Ecuador">
    <meta name="keywords" content="iWaNaTrip, Vive, Turismo, Transformacion digital, Guia turistica,  Marketing digital, Turistas, Viajeros, Viaja, Potencial turistico, Ecuador, Viajar,  Aventura, Tours">
    <meta name="author" content="iWaNaTrip group">
    <meta http-equiv="Content-Language" content="es">
    <meta NAME="robots" CONTENT="all | index | follow">
    <meta name="Revisit" content="3 days">
    <meta name="msvalidate.01" content="421B34D10B14BB413DA96450492A81E9" />

    <!-- Theme Styles -->

    <link rel="apple-touch-icon" href="{{ asset('/img/60x60_logo_iwana.png')}}">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/76x76logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/120x120logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/180x180logo_iwana.png')}}">
    <link rel="icon" sizes="180x180" href="{{ asset('/img/180x180logo_iwana.png')}}">

    <meta property="og:title" content="iWaNaTrip | Ecuador" />
    <meta property="og:description" content="es un espacio de busqueda para la red viajeros de todo el mundo, permite compartir el contenido de forma sencilla a traves de internet.
              iWaNaTrip es experiencia de vida. Deja de ser turista, conviertete en viajero. Viaja por el mundo y descubre Ecuador" />
    <meta property="og:image" content="{{ asset('/img/index-fondo.jpg')}}" />

    <link rel="shortcut icon" href="{{ asset('/favicon.ico')}}" />
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon.png')}}" />
    <link rel="stylesheet" href="{{ asset('/public_components/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/public_components/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/public_components/search_inbox/css/default.css')}}">
    <link rel="stylesheet" href="{{ asset('/public_components/search_inbox/css/component.css')}}">
    <link rel="stylesheet" href="{{ asset('/public_components/css/letras.css')}}">

    <link rel="stylesheet" href="{{ asset('/public_components/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{ asset('/public_components/components/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/revolution_slider/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/revolution_slider/css/style.css')}}" media="screen" />

    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{ asset('/public_components/css/style.css')}}">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{ asset('/public_components/css/updates.css')}}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('/public_components/css/custom.css')}}">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{ asset('/public_components/css/responsive.css')}}">
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
            <link rel="stylesheet" type="text/css" href="{{ asset('public_components/css/ie.css')}}" />
        <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->

    {!! HTML::style('css/DataTables/jquery.dataTables.min.css') !!}
    {!! HTML::style('css/DataTables/buttons.dataTables.min.css') !!}
    {!! HTML::style('css/DataTables/responsive.dataTables.min.css') !!}

	{!! HTML::style('css/basehome.css') !!}
	{!! HTML::style('css/jquerysctipttop.css') !!}

    <link rel="stylesheet" href="{{ asset('public_components/css/booking.css')}}">

    <link rel="stylesheet" href="{{ asset('public_components/css/bootstrapNewSite.css')}}">
    <link rel="stylesheet" href="{{ asset('public_components/components/tooltipster-master/dist/css/tooltipster.bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public_components/components/tooltipster-master/dist/css/tooltipster-sideTip-light.min.css')}}">
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-85546019-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>

    <div id="page-wrapper">
        <header id="header" class="header-color-white">
            @include('public_page.reusable.header')
        </header>
        @if(session('device')!='mobile')
        <div id="slideshow">
            <div class="revolution-slider">
                <ul>
                    <!-- SLIDE  -->
                    <li data-slotamount="7" data-transition="notransition" class="tp-revslider-slidesli active-revslide current-sr-slide-visible">
                        <!-- MAIN IMAGE -->
                        @if(session('device')!='mobile')
                        <div data-bgfit="cover" style="width:100%;height:100%;" class="slotholder">
                            <div style="background-color: transparent;
                                     background-repeat: no-repeat;

                                     background-image: url('{{ asset('/img/index-fondo.jpg')}}');
                                     background-size: cover;
                                     background-position: center center;
                                     width: 100%; height: 100%; opacity: 1;
                                     visibility: inherit;" data-src="{{ asset('/images/backgrounds/gradient.png')}}" src="{{ asset('/img/index-rodelas.png')}}" data-bgrepeat="no-repeat" data-bgposition="center center" data-bgfit="cover" class="tp-bgimg defaultimg">
                        	 <!--<h2 class="caption-md skin-color" ><b> As exciting as planning your next adventure can be, sometimes it's hard to know exactly where you want to go. With our online travel guides we cover off all the need-to-know info on what to see and do in each of our destinations. From the top things to eat, to the top attractions to what to pack, Contiki travel guides are the perfect starting point when booking your trip.</b></h2>
                                        -->
                            </div>
                        </div>

                        @endif
                        <!-- LAYERS -->
                        <div data-endspeed="300" data-endelementdelay="0.1" data-elementdelay="0.1" data-splitout="none" data-splitin="none" data-easing="easeInCubic" data-start="500" data-speed="600" data-y="460" data-hoffset="0" data-x="center" class="tp-caption lft fadeout tp-resizeme start">
                            @if(session('device')!='mobile')
                            <h2 class="caption-xl">
                                     <b>#</b>iWaNaTrip<b>all</b>Ecuador
                                 </h2> @else
                            <h2 class="caption-xl" style="font-size: 58px;">
                                    {{ trans('publico/labels.label127')}}
                                </h2> @endif
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div data-endspeed="300" data-endelementdelay="0.1" data-elementdelay="0.1" data-splitout="none" data-splitin="none" data-easing="easeInOutCubic" data-start="700" data-speed="600" data-y="540" data-hoffset="0" data-x="center" class="tp-caption lfl fadeout tp-resizeme start">

                            @if(session('device')!='mobile')
                            <!--  <h2 class="caption-md skin-color" ><b>{{ trans('publico/labels.label123')}}</b></h2>-->
						    @else

                            <h2 class="caption-md skin-color" style="font-size: 53px;">{{ trans('publico/labels.label123')}}</h2> @endif

                        </div>

                        @if(session('device')!='mobile')
                        <!-- LAYER NR. 3 -->
                        <div data-endspeed="300" data-endelementdelay="0.1" data-elementdelay="0.1" data-splitout="none" data-splitin="none" data-easing="Power3.easeInOut" data-start="1000" data-speed="300" data-voffset="-79" data-y="35" data-x="-280" class="tp-caption sfl fadeout start">
                            <img alt="" src="{{ asset('/img/index-logo.png')}}">
                            <!--<h2  style="font-size: 53px;" ><b>iWaNaTrip</b></h2>-->

                        </div>1
                        @endif
                        <!-- LAYER NR. 4 -->
                        @if(session('device')!='mobile')
                        <div style='width: 80%' data-endspeed="300" data-endelementdelay="0.1" data-elementdelay="0.1" data-splitout="none" data-splitin="none" data-easing="easeOutBack" data-start="1500" data-speed="600" data-y="630" data-x="center" class="tp-caption sfr str start">

                            {!! Form::open(['url' => route('min-search'), 'method' => 'get', 'id'=>'min-search']) !!} @if(session('device')!='mobile')
                            <input class="sb-search-input" placeholder="{{ trans('publico/labels.label127')}}" type="text" value="" name="s" id="s">


							     <div class="parallax " data-stellar-background-ratio="0.1">
                            <div class="section text-center">
                                <div class="container">
                                   <!-- carousel head -->
                                    <div class="features-icon-slider owl-carousel box-lg carouselTypeService" data-items="6">
                                        @if(session('locale') == 'es' )
                                        <a href="{!!asset('/tokenDz$rip')!!}/1" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon" style="height: 105px !important;">
                                            <i class="fa fa-cutlery" style="font-size: 6.1667em;"></i>
                                            <div style="alignment-baseline: central;font-size: 14px;">Alimentación y bebidas</div>
                                        </a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/2" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon" style="height: 105px !important;">
                                            <i class="fa fa-bed" style="font-size: 6.1667em;"></i>
                                            <div style="alignment-baseline: central;font-size: 14px;margin-top: 5px;">Alojamiento</div>
                                        </a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/4" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon" style="height: 105px !important;">
                                            <i class="fa fa-map-marker" style="font-size: 6.1667em;"></i>
                                            <div style="alignment-baseline: central;font-size: 14px;margin-top: 5px;">Lugares</div>
                                        </a> @else
                                        <a href="{!!asset('/tokenDz$rip')!!}/1" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon" style="height: 105px !important;">
                                            <i class="fa fa-cutlery" style="font-size: 6.1667em;"></i>
                                            <div style="alignment-baseline: central;font-size: 14px;margin-top: 5px;">Eat & drink</div>
                                        </a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/2" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon" style="height: 105px !important;">
                                            <i class="fa fa-bed" style="font-size: 6.1667em;"></i>
                                            <div style="alignment-baseline: central;font-size: 14px;margin-top: 5px;">Sleep</div>
                                        </a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/4" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon" style="height: 105px !important;">
                                            <i class="fa fa-map-marker" style="font-size: 6.1667em;"></i>
                                            <div style="alignment-baseline: central;font-size: 14px;margin-top: 5px;">Places</div>
                                        </a> @endif
                                    </div>
                                    </div>
                            </div>
                        </div>

                            @else
                            <input class="sb-search-input" placeholder="{{ trans('publico/labels.label10')}}" style="font-size: 12px;" type="text" value="" name="s" id="s"> @endif

                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search "></span> {!! Form::close() !!}
                        </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
        @endif
        <?php
        $titulo = "Ecuador";
        ?>

            @if($location->city!="")
            <?php
            $titulo = $location->city;
            ?>
                @else $titulo="Ecuador"; @endif @if(session('device')=='mobile')
                <br>
                <br>
                <br>
                <br>
                <section id="content" style=" background-size: 100% auto;background-repeat: no-repeat;background-image:url('{{asset('img/iWanaBack2.jpg')}}')">
                    @else
                    <section id="content">
                        @endif
                        <section id="content" class="back" style="padding: 10px 0 0 !important;">
                            <div class="container">
                                @if(session('device')=='mobile')
                                <!-- Responsive Styles -->
                                <br>
                                <br> @if(session('locale') == 'es' )
                                <div class="heading-box col-md-10 col-lg-8">
                                    <h2>
                                    <p><em style="color:white"><b>#</b>iWaNaTrip<b>todo</b>Ecuador</em></p>
                                </h2>
                                </div>
                                @else
                                <div class="heading-box col-md-10 col-lg-8">
                                    <h2>
                                    <p><em style="color:white"><b>#</b>iWaNaTrip<b>all</b>Ecuador</em></p>
                                </h2>
                                </div>
                                @endif
								  <div class="social-wrap ">

                                        <div class="social-icons">

                                            @if(session('locale') == 'es' )
											<br>
                                            <em style="color:white"><b>Que visitar</b></em>
                                            @else
                                            <em style="color:white"><b>See & Do</b></em>
                                            @endif
                                             <a href="{!!asset('/tokenDz$rip')!!}/4" title="Visit" class="social-icon"><i title="" class="fa  has-circlehome" style="color: #ff6600;" ><img class="activities" style=" max-width: 60%;" alt="Hay transporte" src="{{ asset('img/register/')}}/4.png"></i></a>
                                                                                        <br>
                                              @if(session('locale') == 'es' )
                                            <em style="color:white"><b>Alojamiento</b></em>

                                            @else
                                            <em style="color:white"><b>Sleep</b></em>
                                            @endif
                                               <a href="{!!asset('/tokenDz$rip')!!}/2" title="Sleep" class="social-icon"><i title="" class="fa  has-circlehome" ><img class="activities" style=" max-width: 60%;" alt="Iglesia" src="{{ asset('img/register/')}}/2.png"></i></a>
                                                                                        <br>
                                             @if(session('locale') == 'es' )

                                            <em style="color:white"><b>Alimentación</b></em>

                                            @else

                                            <em style="color:white"><b>Eat&Drink</b></em>
                                            @endif
                                                <a  href="{!!asset('/tokenDz$rip')!!}/1" title="Eat" class="social-icon"><i title="" class="fa  has-circlehome" ><img class="activities" style=" max-width: 60%;" alt="Museo" src="{{ asset('img/register/')}}/1.png"></i></a>
                                            </div>
                                    </div>
                                <br>
                                <br>
                                <br>
                            @else
                                <!-- <div class="heading-box col-md-10 col-lg-8">
                                    <h2 class="box-title">
                                        {{ trans('publico/labels.label138AB')}}
                                        <em class="skin-color">{!!$titulo!!}</em>
                                        {{ trans('publico/labels.label139AB')}}
                                    </h2>
                                    <p>
                                        <em class="skin-color">iWaNaTrip</em>
                                        {{ trans('publico/labels.label140AB')}}
                                    </p>
                                </div> -->
                                @endif
                               <!-- @if(session('device')!='mobile')
                                 <div class="row">
                                    <div class="col-sm-4">
                                        <div class="icon-box style-side-2 ">

                                            <a href="{!!asset('/tokenDz$rip')!!}/4" onclick="$('.container').LoadingOverlay('show');">
                                                <img src="{{ asset('/img/iconos')}}/visit.jpg" alt="iwanatrip">
                                            </a>

                                            <div class="">
                                                <br>
                                                <h4 class="box-title"><a href="{!!asset('/tokenDz$rip')!!}/4"  onclick="$('.parallax').LoadingOverlay('show')">{{ trans('publico/labels.label130AB')}}</a></h4>

                                                <p>{{ trans('publico/labels.label133AB')}} {!!$titulo!!} {{ trans('publico/labels.label134AB')}} </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="icon-box style-side-2 ">

                                            <a href="{!!asset('/tokenDz$rip')!!}/1" onclick="$('.container').LoadingOverlay('show');">
                                                <img src="{{ asset('/img/iconos')}}/eat.jpg" alt="iwanatrip">
                                            </a>

                                            <div class="">
                                                <br>
                                                <h4 class="box-title"><a href="{!!asset('/tokenDz$rip')!!}/1"  onclick="$('.parallax').LoadingOverlay('show')">{{ trans('publico/labels.label131AB')}}</a></h4> {{ trans('publico/labels.label135AB')}}
                                                <p>{!!$titulo!!} {{ trans('publico/labels.label136AB')}} </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="icon-box style-side-2 ">

                                            <a href="{!!asset('/tokenDz$rip')!!}/2" onclick="$('.container').LoadingOverlay('show');">
                                                <img src="{{ asset('/img/iconos')}}/sleep.jpg" alt="iwanatrip">
                                            </a>

                                            <div class="">
                                                <br>
                                                <h4 class="box-title"><a href="{!!asset('/tokenDz$rip')!!}/2"  onclick="$('.parallax').LoadingOverlay('show')">{{ trans('publico/labels.label132AB')}}</a></h4>
                                                <p>{!!$titulo!!} {{ trans('publico/labels.label137AB')}}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                @endif
                               <!--  <br>
                                <div class="text-center"><h1><i class="fa fa-instagram"></i> Instagram </h1></div>
                                <div class="owl-carousel box-lg carouselInstagram" data-items="6">
                                @if(!empty($instagrams))
								@foreach($instagrams as $media)
                                        <div class="Instagram-card">
                                            <div class="Instagram-card-image" onclick="setFullImage('{{ $media['images']['standard_resolution']['url'] }}')" data-toggle="modal" data-target="#form-img-full">
                                              <img src= "{{ $media['images']['standard_resolution']['url'] }}" height=600px/>
                                            </div>
                                            <div class="Instagram-card-content">
                                              <p class="Likes">
                                                <a class="footer-action-icons"href=""><i class="fa fa-heart-o"></i></a> {{$media['likes']['count']}} {{(session('locale') == 'es')?'Me gusta':'Likes'}}
                                                <a href="{{$media['link']}}" target="_blank">
                                                    <i class="fa fa-eye"></i> {{(session('locale') == 'es')?'Ver Post ':'Watch Post'}}
                                                </a>
                                              </p>
                                              <p>
                                                {{
                                                    ($media['caption'] != null)?str_limit($media['caption']['text'],60):''
                                                }}
                                              </p>
                                              <hr>
                                              <!-- <p class="comments">{{(session('locale') == 'es')?' ' . $media['comments']['count'] . ' comentarios':' ' . $media['comments']['count'] . ' comentarios'}}</p>
                                            </div>
                                        </div>
                                    @endforeach
									@endif
                                </div>-->

                                <!-- TABLA DE LOS TOURS -->
                                <center>
                                    <a href="{!!asset('/tourList')!!}">
                                        <div class="text-center"><h1><i class="fa fa-map"></i> Booking iWaNaTrip </h1></div>
                                    </a>
                                </center>
                                <!-- carousel tours -->
                                <div class="owl-carousel box-lg carouselTypeService" data-items="6">
                                    @foreach($agrupamientos as $group)
                                    <div class="Instagram-card">
                                        <div class="Instagram-card-image" onclick="setFullImage('https://bookiw.iwannatrip.com/app/web/uploads/{!!$group->foto[0]->filename!!}')" data-toggle="modal" data-target="#form-img-full">
                                            @if(empty($group->foto))
                                            <img src= "/images/no-image-available.png" height=600px/>
                                            @else
                                            <img src= "https://bookiw.iwannatrip.com/app/web/uploads/{!!$group->foto[0]->filename!!}" height=600px/> @endif
                                        </div>
                                        <div class="Instagram-card-content-tour">
                                          <p class="Likes">
                                            <a href='{!!asset("/tour/$group->nombre/$group->id_usuario_servicio/$group->id")!!}'>{{$group->nombre}}
                                            </a>
                                          </p>
                                          <p>
                                            <?php
                                                $idGroup = $group->id;
                                            ?>
                                            <div class="tooltip_templates">
                                                <span id="tooltip_content_{{$idGroup}}">
                                                    @foreach ($group->resumen_views as $resumen)
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
                                                @if(count($group->resumen_views) > 0)
                                                    <span data-stars="{!!($group->total)/count($group->resumen_views)!!}"></span>
                                                @else
                                                    <span data-stars="0"></span>
                                                @endif
                                                <div class="tooltip" data-tooltip-content="#tooltip_content_{{$idGroup}}"></div>
                                            </span>
                                          </p>
                                          <p style="font-size: 14px;">
                                            <div class="tour-detail">
                                                <span class="label-tour-item">Precio desde:</span>
                                                <span class="label-tour-price">{{($group->precioDesde > 0) ? ' $'. $group->precioDesde: 'FREE'}}</span>
                                            </div>
                                            <br>
                                          </p>
                                          <hr>
                                        </div>
                                        <div class="Instagram-card-footer">
                                          <a class="footer-action-icons-tour"href='{!!asset("/tour/$group->nombre/$group->id_usuario_servicio/$group->id")!!}'>
                                            Book
                                          </a>
                                          <a class="footer-action-icons-tour"href='{!!asset("/tour/$group->nombre/$group->id_usuario_servicio/$group->id")!!}' style="margin-left: 10px;"><i class="fa fa-commenting-o"></i> {{(session('locale') == 'es' )?'Detalles':'Details'}}
                                          </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!--    SECCION DE EVENTOS HOME-->
                               <!--  @if(session('device')!='mobile') @if(!empty($eventos))
                                <section id="content">
                                    <div class="container">
                                        <div id="main">
                                            <div class="blog-posts layout-timeline layout-fullwidth">
                                                <div class="timeline-author text-center">
                                                    <img src="{{ asset('img/eventos.jpg')}}" alt="">
                                                </div>
                                                <div class="iso-container iso-col-2 style-masonry has-column-width">
                                                    @foreach($eventos as $event)
                                                    <div class="iso-item">
                                                        <article class="post post-masonry">
                                                            <div class="post-date" style="width: 35% !important;font-weight: bold !important;font-size: 1.2em !important;">
                                                                <?php $d=strtotime($event->fecha_ingreso);
                                                                      echo date("d-m-Y h:ia", $d); ?>
                                                            </div>
                                                            <div class="post-action">
                                                                <a href="{{ asset('/detalle/'.$event->nombre_servicio.'/'.$event->id)}}">

                                                                    <table style="width: 100% !important;">
                                                                        <tr>
                                                                            <td style="padding: 0 !important;width:30%">
                                                                                @if(empty($event->foto))
                                                                                <img class="thumbnail" src="/images/no-image-available.png" alt="" style="width: 100% !important;padding: 0 !important;"> @else
                                                                                <img class="thumbnail" src="{{ asset('images/icon/'.$event->foto[0]->filename)}}" alt="" style="width: 100% !important;height: auto !important;padding: 0 !important;margin-top: 2px !Important;"> @endif
                                                                            </td>

                                                                            <td style="width:70%;padding-left: 20px !important;">
                                                                                <h3 class="entry-title" style="margin-bottom: -2px !important;">{!! $event->nombre_servicio!!}</h3>
                                                                                <?php $ini = strtotime($event->fecha_ingreso);
                                                                                      $inicio =  date("h:ia", $ini); ?>
                                                                                    <?php $fn = strtotime($event->fecha_fin);
                                                                                          $fin =  date("h:i:sa", $fn); ?>
                                                                                        <?php $fechaini = strtotime($event->fecha_ingreso);
                                                                                              $fechaInicio = date("d-m-Y", $fechaini); ?>
                                                                                            <p style="font-weight: 400 !important;margin-bottom: -3px !important;"> Lugar: {!! $event->canton[0]->nombre !!} / {!! $event->direccion_servicio!!} </p>
                                                                                            <p style="font-weight: 400 !important;margin-bottom: -3px !important;"> Fecha Inicio: {!! $fechaInicio !!} </p>
                                                                                            <p style="font-weight: 400 !important;margin-bottom: -3px !important;"> Hora Inicio: {!! $inicio!!} </p>
                                                                                            <p style="font-weight: 400 !important;margin-bottom: -3px !important;font-weight: bold !important;">
                                                                                                @if(!empty($event->tipoEvento)) {!! $event->tipoEvento[0]->nombre_catalogo_eventos !!} @endif
                                                                                            </p>
                                                                                            <p style="font-weight: 400 !important;margin-bottom: -3px !important;"> Precio: @if($event->precio_desde == 0)
                                                                                                <span class="product-price box" style="color:#FF6600;font-size:1em !important;"> FREE </span> @else
                                                                                                <span class="product-price box" style="color:#FF6600;font-size:1em !important;"> ${!! $event->precio_desde!!} </span> @endif
                                                                                            </p>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </a>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="text-center" style="margin-top: 12px !important;" id="verMas">
                                                    <a class="btn style4 hover-blue moreImagesEvents" onclick="$('#verMas').LoadingOverlay('show')" href='{!!asset("/eventList")!!}'>{{ trans('publico/labels.label31')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                @endif @endif -->
                            </div>
                        </section>
						  <section id="content" style="padding: 0px;">
                            <div class="container">
                                <center>
                                    <div class="text-center"><h1><i class="fa fa-compass"></i> {{ trans('publico/labels.lblDiscoverEcuador')}} </h1></div>
                                </center>
                                <div id="main">
                                    <div class="post-wrapper">

                                        <div class="text-center">
                                            <br>
                                            <style type="text/css">
                                                .owl-carousel .owl-nav button.owl-prev,
                                                .owl-carousel .owl-nav button.owl-next,
                                                .owl-carousel button.owl-dot {
                                                    background: none;
                                                    border: none;
                                                    padding: 0 !important;
                                                    font: inherit;
                                                    font-size: 25px;
                                                    margin-right: 20px;
                                                    color: #1b4268;
                                                    font-weight: bold;
                                                }

                                                .owl-nav {
                                                    margin-bottom: 15px;
                                                }
                                            </style>
                                            <div class="topPlaces">Cargando ...</div>
                                            <!-- <a class="btn style4 hover-blue load-more moreImagesTop">{{ trans('publico/labels.label31')}}</a> -->
                                            <br>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        @if(session('device')=='mobile')
                        <div class="parallax parallax-image1" data-stellar-background-ratio="0.1">
                            <div class="section text-center">
                                <div class="container">
                                    <div class="heading-box">
                                        <h2 class="box-title color-white">{{ trans('publico/labels.label30')}}</h2>
                                    </div>

                                    <h3 class="skin-color">{{ trans('publico/labels.label124')}}</h3>
                                    <p>{{ trans('publico/labels.label125')}}</p>
                                </div>
                            </div>
                        </div>
                        @endif @if(session('device')!='mobile')
                        <div class="parallax parallax-image1" data-stellar-background-ratio="0.1">
                            <div class="section text-center">
                                <div class="container">
                                    <div class="heading-box">
                                        <h2 class="box-title color-white">{{ trans('publico/labels.label30')}}</h2>
                                    </div>
                                    <div class="features-icon-slider owl-carousel box-lg carouselTypeService" data-items="6">
                                        @if(session('locale') == 'es' )
                                        <a href="{!!asset('/tokenDz$rip')!!}/1" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-cutlery"></i><div style="alignment-baseline: central">Alimentación y bebidas</div></a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/2" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-bed"></i><div style="alignment-baseline: central">Alojamiento</div></a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/3" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-suitcase"></i><div style="alignment-baseline: central">Agencias de viajes</div></a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/4" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-map-marker"></i><div style="alignment-baseline: central">Lugares</div></a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/8" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-hand-scissors-o"></i><div style="alignment-baseline: central">Eventos</div></a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/9" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-users"></i><div style="alignment-baseline: central">Festividades</div></a> @else
                                        <a href="{!!asset('/tokenDz$rip')!!}/1" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-cutlery"></i><div style="alignment-baseline: central">Eat & drink</div></a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/2" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-bed"></i><div style="alignment-baseline: central">Sleep</div></a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/3" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-suitcase"></i><div style="alignment-baseline: central">Travel agency</div></a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/4" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-map-marker"></i><div style="alignment-baseline: central">Places</div></a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/8" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-hand-scissors-o"></i><div style="alignment-baseline: central">Events</div></a>
                                        <a href="{!!asset('/tokenDz$rip')!!}/9" onclick="$('.parallax').LoadingOverlay('show')" class="feature-icon"><i class="fa fa-users"></i><div style="alignment-baseline: central">Festivities</div></a> @endif
                                    </div>
                                    <h3 class="skin-color">{{ trans('publico/labels.label124')}}</h3>
                                    <p>{{ trans('publico/labels.label125')}}</p>
                                </div>
                            </div>
                        </div>

                        <section id="content" class="no-padding">
                            <div class="section no-padding">
                                <h2 class="section-title">{{ trans('publico/labels.label126')}}</h2>
                                <div class="post-wrapper">
                                    <div class="iso-container iso-col-4 style-fancy">
                                        <div class="shortcode-banner style-animated iso-item  filter-all ">
                                            <article class="post">
                                                <figure><img src="{{ asset('/img/costa.jpg')}}" alt=""></figure>
                                                @if(session('device')!='mobile')
                                                <div class="shortcode-banner-inside" style=" width: 108%;">
                                                    @else
                                                    <div class="shortcode-banner-inside" style=" width: 112%;">
                                                        @endif
                                                        <div class="shortcode-banner-content">
                                                            <a href="{!!asset('/getRegionDescipcion/1')!!}" onclick="$('.iso-container').LoadingOverlay('show');">
                                                                <h3 class="banner-title">Costa</h3></a>
                                                            <div class="details">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </article>
                                            </div>
                                            <div class="shortcode-banner style-animated iso-item  filter-all ">
                                                <article class="post">
                                                    <figure><img src="{{ asset('/img/sierra.jpg')}}" alt=""></figure>
                                                    @if(session('device')!='mobile')
                                                    <div class="shortcode-banner-inside" style=" width: 108%;">
                                                        @else
                                                        <div class="shortcode-banner-inside" style=" width: 112%;">
                                                            @endif
                                                            <div class="shortcode-banner-content">
                                                                <a href="{!!asset('/getRegionDescipcion/2')!!}" onclick="$('.iso-container').LoadingOverlay('show');"><h3 class="banner-title">Sierra</h3>
                                                        </a>
                                                                <div class="details">

                                                                </div>
                                                            </div>
                                                        </div>
                                                </article>
                                                </div>
                                                <div class="shortcode-banner style-animated iso-item  filter-all ">
                                                    <article class="post">
                                                        <figure><img src="{{ asset('/img/oriente.jpg')}}" alt=""></figure>
                                                        @if(session('device')!='mobile')
                                                        <div class="shortcode-banner-inside" style=" width: 108%;">
                                                            @else
                                                            <div class="shortcode-banner-inside" style=" width: 112%;">
                                                                @endif
                                                                <div class="shortcode-banner-content">
                                                                    <a href="{!!asset('/getRegionDescipcion/3')!!}" onclick="$('.iso-container').LoadingOverlay('show');"><h3  class="banner-title">Oriente</h3>
                                                        </a>
                                                                    <div class="details">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </article>
                                                    </div>
                                                    <div class="shortcode-banner style-animated iso-item  filter-all ">
                                                        <article class="post">
                                                            <figure><img src="{{ asset('/img/galapagos.jpg')}}" alt=""></figure>
                                                            @if(session('device')!='mobile')
                                                            <div class="shortcode-banner-inside" style=" width: 108%;">
                                                                @else
                                                                <div class="shortcode-banner-inside" style=" width: 112%;">
                                                                    @endif
                                                                    <div class="shortcode-banner-content">
                                                                        <a href="{!!asset('/getRegionDescipcion/4')!!}" onclick="$('.iso-container').LoadingOverlay('show');">
                                                                            <h3  class="banner-title">Galápagos</h3>
                                                                        </a>
                                                                        <div class="details">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </article>
                                                        </div>
                                                    </div>
                                                </div>
                        </section>
                        @endif
						<section id="content" class="back">
                            <div class="container">

                                @include('public_page.reusable.travelAdvice')
					        </div>
                        </section>
                        @if(session('device')!='mobile')
                        <a href="#" class="scrollupWeb">Scroll</a> @else
                        <a href="#" class="scrollup">Scroll</a> @endif
                        <input type="hidden" name="pagina" class="pagina">
                        <footer id="footer" class="style4">
                            @include('public_page.reusable.footer')
                        </footer>
                        </div>
                         <!-- Modal full image-->
                          <div class="modal modal-custom fade" id="form-img-full" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content-transparent" id="imgFull" >
                                <button class="btn style1" type="button" data-dismiss="modal" aria-label="Close" style="    color: white;
                                    top: 80%;
                                    padding-left: 17px;
                                    padding-right: 13px;">
                                    <i class="fa fa-close"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        <!-- Javascript -->
                        {!! HTML::script('/js/jquery.js') !!}
                        <!-- load datatables Javascript
                        {!!HTML::script('js/DataTables/jquery.dataTables.min.js') !!}
						{!!HTML::script('js/DataTables/dataTables.buttons.min.js') !!}
						{!!HTML::script('js/DataTables/buttons.print.min.js') !!}
						{!!HTML::script('js/DataTables/buttons.html5.js') !!}
						{!!HTML::script('js/DataTables/buttons.flash.js') !!}
						{!!HTML::script('js/DataTables/buttons.bootstrap.min.js') !!}
						{!!HTML::script('js/DataTables/dataTables.responsive.min.js') !!}
						{!!HTML::script('js/DataTables/dataTables.select.min.js') !!}-->

						{!!HTML::script('/js/js_public/Compartido.js') !!} {!!HTML::script('/js/loadingScreen/loadingoverlay.min.js') !!}
						<!--{!!HTML::script('/js/jquery.autocomplet.js') !!}
						{!!HTML::script('/js/jquery.bootstrap.newsbox.min.js') !!}-->

                        <script type="text/javascript" src="{{ asset('/public_components/js/jquery-2.1.3.min.js')}}"></script>
                        <!-- Tooltipster -->
                        <script type="text/javascript" src="{{ asset('public_components/components/tooltipster-master/dist/js/tooltipster.bundle.min.js')}}"></script>
                        <script type="text/javascript">
                            $('.tooltip').tooltipster({
                                theme: 'tooltipster-light'
                            });
                        </script>
                        <script type="text/javascript" src="{{ asset('/public_components/js/jquery.noconflict.js')}}"></script>
                        <script type="text/javascript" src="{{ asset('/public_components/js/modernizr.2.8.3.min.js')}}"></script>
                        <script type="text/javascript" src="{{ asset('/public_components/js/jquery-migrate-1.2.1.min.js')}}"></script>
                        <script type="text/javascript" src="{{ asset('/public_components/js/jquery-ui.1.11.2.min.js')}}"></script>
                        <!-- Twitter Bootstrap -->
                        <script type="text/javascript" src="{{ asset('/public_components/js/bootstrap.min.js')}}"></script>

                        <!-- Magnific Popup core JS file -->
                        <script type="text/javascript" src="{{ asset('/public_components/components/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

                        <!-- parallax -->
                        <script type="text/javascript" src="{{ asset('/public_components/js/jquery.stellar.min.js')}}"></script>

                        <!-- waypoint -->
                        <script type="text/javascript" src="{{ asset('/public_components/js/waypoints.min.js')}}"></script>

                        <!-- Owl Carousel -->
                        <!-- <script type="text/javascript" src="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.min.js')}}"></script> -->

                        <!-- load revolution slider scripts -->
                        <script type="text/javascript" src="{{ asset('/public_components/components/revolution_slider/js/jquery.themepunch.tools.min.js')}}"></script>
                        <script type="text/javascript" src="{{ asset('/public_components/components/revolution_slider/js/jquery.themepunch.revolution.min.js')}}"></script>

                        <!-- plugins -->
                        <script type="text/javascript" src="{{ asset('/public_components/js/jquery.plugins.js')}}"></script>

                        <!-- load page Javascript -->
                        <script type="text/javascript" src="{{ asset('/public_components/js/main.js')}}"></script>

                        <script type="text/javascript" src="{{ asset('/public_components/js/revolution-slider.js')}}"></script>

                        <!-- <script type="text/javascript" src="{{ asset('/public_components/js/lugares_ecuador.js')}}"></script>-->
                       <script type="text/javascript">
                         /*   $(function() {
                                $(".demo1").bootstrapNews({
                                    newsPerPage: 3,
                                    autoplay: true,
                                    pauseOnHover: true,
                                    direction: 'up',
                                    newsTickerInterval: 4000,
                                    onToDo: function() {
                                        //console.log(this);
                                    }
                                });

                            }); */

                            function setFullImage($url) {
                                console.log($url);
                                $("#imgFull").css("background", 'url(' + $url + ')');
                                $("#imgFull").css("background-repeat", 'no-repeat');
                                $("#imgFull").css("background-size", 'contain');
                                $("#imgFull").css("height", '-webkit-fill-available');
                                $("#imgFull").css("background-position", 'center');
                               $("#imgFull").css("background", 'url(' + $url + ')');
                               $("#imgFull").css("background-repeat", 'no-repeat');
                               $("#imgFull").css("background-size", 'contain');
                               $("#imgFull").css("height", '-webkit-fill-available');
                               $("#imgFull").css("background-position", 'center');
                            }
                        </script>
                        <script>
                            $(document).ready(function() {
                                var pagina = 1;
                                GetDataAjaxTopPlaces("{!!asset('/getTopPlaces')!!}?page=" + pagina);
                                //GetDataAjaxEventsInd("{!!asset('/getEventscloseToMe')!!}/"+valor+"?page=1");
                                var contador = pagina + 1;
                                $(".pagina").val(contador);
                            });

                            @if(session('device') == 'mobile')
                                $("#mapas").hide();
                            @endif

                            $(".moremaps").click(function() {
                                $("#mapas").show();
                            });

                            $(".moreImagesTop").click(function() {
                                pagina = $(".pagina").val();

                                GetDataAjaxTopPlacesHome("{!!asset('/getTopPlaces')!!}");
                                contador = parseInt(pagina) + 1;

                                $(".pagina").val(contador);
                            });

                            $(".moreImagesEvents").click(function() {
                                var valor = $("#ciudad").val();
                                //GetDataAjaxEventsHome("{!!asset('/getEventscloseToMe')!!}/"+valor);
                            });

                            $(".search-city").click(function() {
                                var valor = $("#ciudad").val();
                                window.current_page_e = 1;
                                //GetDataAjaxEventsIndbyCity("{!!asset('/getEventscloseToMe')!!}/"+valor+"?page=1");
                            });

                            $(".sb-icon-search").click(function() {
                                $("#min-search").submit();
                            });
                            $(window).scroll(function() {
                                if ($(this).scrollTop() > 1000) {
                                    $('.scrollup').fadeIn();
                                } else {
                                    $('.scrollup').fadeOut();
                                }
                            });

                            $('.btn-sm').click(function() {
                                //$("html, body").animate({scrollTop: 0}, 600);
                                $('html, body').animate({
                                    scrollTop: parseInt($(".topPlaces").offset().top)
                                }, 2000);

                                return false;
                            });

                            $('.scrollup').click(function() {
                                //$("html, body").animate({scrollTop: 0}, 600);
                                $('html, body').animate({
                                    scrollTop: parseInt($(".topPlaces").offset().top)
                                }, 2000);

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
                                //$("html, body").animate({scrollTop: 0}, 600);
                                $('html, body').animate({
                                    scrollTop: parseInt($(".topPlaces").offset().top)
                                }, 2000);
                                return false;
                            });


                        </script>

                        @if(session('device')!='mobile')
                        <script>
                            $('tr[data-href]').on("click", function() {
                                $('.tablaDeTours').LoadingOverlay('show');
                                document.location = $(this).data('href');
                                $('.tablaDeTours').LoadingOverlay('hide');
                            });

                         /*   $(document).ready(function() {

                                $('.pepa').attr('id', 'example');
                                if ($("#example").length) {
                                    function explode() {
                                        $('#example').DataTable({
                                            //lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                                            language: {
                                                decimal: "",
                                                emptyTable: "No hay información",
                                                info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                                                infoEmpty: "Mostrando 0 to 0 of 0 Entradas",
                                                infoFiltered: "(Filtrado de _MAX_ total entradas)",
                                                infoPostFix: "",
                                                thousands: ",",
                                                lengthMenu: "Mostrar _MENU_ Entradas",
                                                loadingRecords: "Cargando...",
                                                processing: "Procesando...",
                                                search: "Buscar:",
                                                zeroRecords: "Sin resultados encontrados",
                                                paginate: {
                                                    first: "Primero",
                                                    last: "Ultimo",
                                                    next: "Siguiente",
                                                    previous: "Anterior"
                                                }
                                            },
                                            //input de busqueda
                                            bFilter: true,
                                            responsive: true,
                                            searching: true,
                                            sSearch: "Buscar:",
                                            //para mostrar los botones de exportar
                                            //dom: 'Bfrtip',
                                            lengthChange: false,
                                            order: [],
                                            columnDefs: [{
                                                orderable: false,
                                                targets: [0, 4]
                                            }],

                                        });
                                    }
                                    explode();
                                }
                            });*/
                        </script>
                        @endif @if(session('device')=='mobile')
                        <script>
                            $('tr[data-href]').on("click", function() {
                                $('.woocommerce').LoadingOverlay('show');
                                document.location = $(this).data('href');
                                $('.woocommerce').LoadingOverlay('hide');
                            });

                            $('.pepa').attr('id', 'example');

                        </script>
                        @endif
                         <script type="text/javascript">
                           // GetDataLatestOperators();
                        </script>
</body>

</html>