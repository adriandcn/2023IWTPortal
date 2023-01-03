<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="{{session('locale')}}" dir="{{session('locale')}}">
<!--<![endif]-->

<head>
    <!-- Page Title -->
    <title>iWaNaTrip - Viaja y vive la experiencia de conocer Ecuador - Aventura</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <meta http-equiv="Content-Language" content="en,es">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="description" content="iWaNaTrip es un espacio de busqueda para la red viajeros de todo el mundo, permite compartir el contenido de forma sencilla a traves de internet.
              iWaNaTrip es experiencia de vida. Deja de ser turista, conviertete en viajero. Viaja por el mundo y descubre Ecuador">
    <meta name="keywords" content="iWaNaTrip, Vive, Turismo, Travel Ecuador, Travel Galapagos, Visit Ecuador, Visita Ecuador ">
    <meta name="author" content="iWaNaTrip group">
    <meta NAME="robots" CONTENT="all | index | follow">
    <meta name="Revisit" content="3 days">
    <meta name="msvalidate.01" content="421B34D10B14BB413DA96450492A81E9" />
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
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
    <link rel="stylesheet" href="{{ asset('/public_components/css/letras.css')}}">
    <link href="{{ asset('/extern/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('/common/styles.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('/public_components/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />
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

<body class="woocommerce">
    <div id="page-wrapper">
        <header id="header" class="header-color-white">
            @include('public_page.reusable.header')
        </header>
        <!-- banner -->
        @if(session('device')=='mobile')
        <section id="content">
            <section id="content" class="back">
                <div class="container">
                    <!-- Responsive Styles -->
                    <div class="heading-box col-md-10 col-lg-8">
                        <h2>

                            @if(session('locale') == 'es' )
                                 <p><em style="color:black"><b>#</b><em class="skin-color">iWaNaTrip  </em><b>todo</b>Ecuador</em></p>
                            @else
                                <p><em style="color:black"><b>#</b><em class="skin-color">iWaNaTrip  </em><b>all</b>Ecuador</em></p>
                            @endif
                                </h2>
                    </div>
                    <div class="social-wrap ">
                        <div class="social-icons">
                            <a href="{!! url('language') !!}"  class="social-icon">
                                         <i title="" class="fa  has-circlehome" >
                                              <img class="activities" style=" max-width: 60%;" alt="Iglesia" src="{!! asset('img/' . (session('locale') == 'es' ? 'english' : 'espanol') . '-flag.png') !!}">
                                         </i>
                                     </a>
                            <a href="https://www.facebook.com/iWaNaTrip"  class="social-icon">
                                          <i title="" class="fa  has-circlehome" >
                                              <img class="activities" style=" max-width: 60%;" alt="Iglesia" src="{{ asset('img/facebook/')}}.png"></i>
                                     </a>
                            <a  href="https://www.instagram.com/iwannatrip_/" title="Eat" class="social-icon">
                                          <i title="" class="fa  has-circlehome" >
                                              <img class="activities" style=" max-width: 60%;" alt="Museo" src="{{ asset('img/instagram/')}}.png"></i>
                                     </a>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            <!-- START OF MAIN SLIDER -->
            <section class="pt-0 bg-primary">
                @if(session('device')!='mobile')
                <div class="container ptb-10">
                    <div class="row">
                        <div class="header-left logo" style="height: 60px;"
                            <h1>
                                <a href="index.html"></a></h1>
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
                @endif
                <div class="plr-50 h-600x h-md-800x h-xs-1000x oflow-hidden">
                    <div class="w-60 w-md-100 float-left float-md-none h-100 h-md-40 h-xs-50">
                        <div class="w-50 w-xs-100 float-left float-xs-none pos-relative h-100 h-xs-50">
                            <!-- Image as bg-1 -->
                            <a class="hover-grey" href="{!!asset('/region?region=4')!!}" >
                    <div class="img-bg bg-1 bg-grad-layer-6"></div>
                    </a>
                            <div class="abs-blr color-white p-20">
                                <h3 class="mb-10 mb-sm-5 t-upper" style="color:white">
                            <a class="hover-grey" href="{!!asset('/region?region=4')!!}" ><b>{{ trans('welcome/index.label50')}}</b></a></h3>
                                <ul class="list-li-mr-10 color-grey">
                                    @if(session('device')!='mobile')
                                    <li><i class="mr-5 font-12 ion-eye"></i>{!!str_limit(html_entity_decode(trans('publico/labels.descriptionGalapagos'), ENT_QUOTES, 'UTF-8'), $limit =300, $end = '...')!!}</li>
                                    @else
                                    <li><i class="mr-5 font-12 ion-eye"></i>{!!str_limit(html_entity_decode(trans('publico/labels.descriptionGalapagos'), ENT_QUOTES, 'UTF-8'), $limit =100, $end = '...')!!}</li>
                                    @endif
                                </ul>
                            </div>
                            <!--abs-blr -->
                        </div><!-- w-50 -->
                        <div class="w-50 w-xs-100 float-left float-xs-none pos-relative h-100 h-xs-50 pt-xs-10">
                            <div class="mlr-10 mr-md-0 ml-xs-0 pos-relative h-100">
                                <!-- Image as bg-2 -->
                                <a class="hover-grey" href="{!!asset('/region?region=2')!!}" >
                        <div class="img-bg bg-2 bg-grad-layer-6"></div>
                        </a>
                                <div class="abs-blr color-white p-20">
                                    <h3 class="mb-10 mb-sm-5 t-upper" style="color:white">
                                <a class="hover-grey" href="{!!asset('/region?region=2')!!}" ><b>{{ trans('welcome/index.label49')}}</b></a></h3>
                                    <ul class="list-li-mr-10 color-grey">
                                        @if(session('device')!='mobile')
                                        <li><i class="mr-5 font-12 ion-eye"></i>{!!str_limit(html_entity_decode(trans('publico/labels.descriptionSierra'), ENT_QUOTES, 'UTF-8'), $limit =300, $end = '...')!!}</li>
                                        @else
                                        <li><i class="mr-5 font-12 ion-eye"></i>{!!str_limit(html_entity_decode(trans('publico/labels.descriptionSierra'), ENT_QUOTES, 'UTF-8'), $limit =100, $end = '...')!!}</li>
                                        @endif
                                    </ul>
                                </div>
                                <!--abs-blr -->
                            </div><!-- w-50 -->
                        </div><!-- w-50 -->
                    </div><!-- w-60 -->
                    <div class="w-40 w-md-100 float-left float-md-none h-100 h-md-60 h-xs-50">
                        <div class="h-50 pb-5 pt-md-10">
                            <div class="h-100 pos-relative">
                                <!-- Image as bg-3 -->
                                <a class="hover-grey" href="{!!asset('/region?region=3')!!}">
                        <div class="img-bg bg-3 bg-grad-layer-6"></div>
                        </a>
                                <div class="abs-blr color-white p-20">
                                    <h3 class="mb-10 mb-sm-5 t-upper" style="color:white">
                                <a class="hover-grey" href="{!!asset('/region?region=3')!!}"><b>{{ trans('welcome/index.label51')}}</b></a></h3>
                                    <ul class="list-li-mr-10 color-ash">
                                        @if(session('device')!='mobile')
                                        <li><i class="mr-5 font-12 ion-eye"></i>{!!str_limit(html_entity_decode(trans('publico/labels.descriptionOriente'), ENT_QUOTES, 'UTF-8'), $limit =300, $end = '...')!!}</li>
                                        @else
                                        <li><i class="mr-5 font-12 ion-eye"></i>{!!str_limit(html_entity_decode(trans('publico/labels.descriptionOriente'), ENT_QUOTES, 'UTF-8'), $limit =100, $end = '...')!!}</li>
                                        @endif
                                    </ul>
                                </div>
                                <!--abs-blr -->
                            </div><!-- h-50 -->
                        </div><!-- h-50 -->
                        <div class="h-50 pt-5">
                            <div class="h-100 pos-relative">
                                <!-- Image as bg-4 -->
                                <a class="hover-grey" href="{!!asset('/region?region=1')!!}" >
                        <div class="img-bg bg-4 bg-grad-layer-6" ></div>
                        </a>
                                <div class="abs-blr color-white p-20">
                                    <h3 class="mb-10 mb-sm-5 t-upper" style="color:white">
                                <a class="hover-grey" href="{!!asset('/region?region=1')!!}" ><b>{{ trans('welcome/index.label48')}}</b></a></h3>
                                    <ul class="list-li-mr-20 color-grey">
                                        @if(session('device')!='mobile')
                                        <li><i class="mr-5 font-12 ion-eye"></i>{!!str_limit(html_entity_decode(trans('publico/labels.descriptionCosta'), ENT_QUOTES, 'UTF-8'), $limit =300, $end = '...')!!}</li>
                                        @else
                                        <li><i class="mr-5 font-12 ion-eye"></i>{!!str_limit(html_entity_decode(trans('publico/labels.descriptionCosta'), ENT_QUOTES, 'UTF-8'), $limit =100, $end = '...')!!}</li>
                                        @endif
                                    </ul>
                                </div>
                                <!--abs-blr -->
                            </div><!-- h-50 -->
                        </div><!-- h-50 -->
                    </div><!-- w-40 -->
                </div><!-- wrapper -->
            </section>
            <!-- <section id="content"> -->
            <section id="content" class="back" style="padding: 10px 0 0 !important;">
                <div class="container">
                    <!-- TABLA DE LOS TOURS -->
                    <center>
                        <a href="{!!asset('/tourList')!!}">
                            <div class="text-center"><h1><i class="fa fa-map"></i> {{(session('locale') == 'es' )?"Reservas":"Reservation"}} <em class="skin-color">iWaNaTrip  </em> </h1></div>

                        </a>
                    </center>
                    <!-- carousel tours -->
                    <div class="owl-carousel box-lg carouselTypeService" data-items="6">
                        @foreach($agrupamientos as $group)
						  <?php
            $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($group->nombre))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);

        ?>
                        <div class="Instagram-card">
                            <div class="Instagram-card-image" data-toggle="modal" data-target="#form-img-full">
                                @if(empty($group->foto))
                                <img src= "/images/no-image-available.png" height="600px"/>
                                            @else
												 <a class="footer-action-icons-tour"href='{!!asset("/tour/$nombreCanonical/$group->id_usuario_servicio/$group->id")!!}' >   <img src="https://bookiw.iwannatrip.com/app/web/uploadsMobile/{!!$group->foto[0]->filename!!}" id='fotoTour'/>
                                          </a>

                                            @endif
                                        </div>
                                <div class="Instagram-card-content-tour">
                                    <p class="Likes">

									@if(session('locale') == 'en' && $group->nombre_eng!='')
                                        <a href='{!!asset("/tour/$nombreCanonical/$group->id_usuario_servicio/$group->id")!!}'>{!!$group->nombre_eng!!}
                                            </a>

											@else

											<a href='{!!asset("/tour/$nombreCanonical/$group->id_usuario_servicio/$group->id")!!}'>{!!$group->nombre!!}
                                            </a>
												@endif

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
                                            <span class="label-tour-item">{{ trans('booking/labels.labelBook5')}}:</span>
                                            <span class="label-tour-price">{{($group->precioDesde > 0) ? ' $'. $group->precioDesde: 'FREE'}}</span>
                                        </div>
                                    </p>
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
                        <!--<div class="customNavigation text-center">
                            <a class="prev" idCarousel="carouselLugares" style="cursor: pointer;"><i class="fa fa-angle-left fa-4x"></i></a>
                            &nbsp;&nbsp;&nbsp;
                            <a class="next" idCarousel="carouselLugares" style="cursor:pointer;"><i class="fa fa-angle-right fa-4x"></i></a>
                        </div>-->
                    </div>
            </section>
            <section id="content" class="back">
                <div class="container">
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
                    <center>
                        <div class="topPlaces">Cargando ...</div>
                    </center>
                </div>
            </section>
            <!-- <section id="content" class="back">
                            <div class="container">
                                @include('public_page.reusable.travelAdvice')
                            </div>
                        </section> -->
    </div>
    @if(session('device')!='mobile')
    <a href="#" class="scrollupWeb">Scroll</a> @else
    <a href="#" class="scrollup">Scroll</a> @endif
    <input type="hidden" name="pagina" class="pagina">
    <footer id="footer" class="style4">
        @include('public_page.reusable.footer')
    </footer>
    </div>
    <!-- Javascript -->
    {!! HTML::script('/js/jquery.js') !!}
    <!-- load datatables Javascript -->
    {!!HTML::script('/js/js_public/Compartido.js') !!}
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
    <!-- Owl Carousel -->
    <!-- <script type="text/javascript" src="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.min.js')}}"></script> -->
    <!-- load revolution slider scripts -->
    <!-- plugins -->
    <script type="text/javascript" src="{{ asset('/public_components/js/jquery.plugins.js')}}"></script>
    <!-- load page Javascript -->
    <script type="text/javascript" src="{{ asset('/public_components/js/main.js')}}"></script>
    <script type="text/javascript">
    $(window).bind("load", function() {
        GetDataLatestOperators();
    });
    </script>
    <script>
    $(document).ready(function() {

        var pagina = 1;
        //GetDataAjaxTopPlaces("{!!asset('/getTopPlaces')!!}?page=" + pagina);

		 $.when( GetDataAjaxTopPlaces("{!!asset('/getTopPlaces')!!}?page=" + pagina)).then(doneCallback, failCallback);
        var contador = pagina + 1;
        $(".pagina").val(contador);
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
</body>

</html>