<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
    <head>
        <!-- Page Title -->
        <title>iWaNaTrip - |Galapagos Transfers |DayTrips Ecuador |Discover Ecuador</title>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="_token" content="{!! csrf_token() !!}" />
        <meta http-equiv="Content-Language" content="en,es">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <meta name="description" content="iWaNaTrip| Buy your ferry tickets for Galapagos Islands online | Buy your day Trips online| Discover Ecuador">
        <meta name="keywords" content="iWaNaTrip| Buy your ferry tickets for Galapagos Islands online | Buy your day Trips online| Discover Ecuador">

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
        <meta property="og:title" content="iWaNaTrip - |Galapagos Transfers |DayTrips Ecuador |Discover Ecuador" />
        <meta property="og:description" content="iWaNaTrip| Buy your ferry tickets for Galapagos Islands online | Buy your day Trips online| Discover Ecuador" />
        <meta property="og:image" content="{{ asset('/img/index-fondo.jpg')}}" />
        <link rel="shortcut icon" href="{{ asset('/favicon.ico')}}" />
        <link rel="apple-touch-icon" href="{{ asset('/images/favicon.png')}}" />

        <!-- Theme Styles -->


        <link rel="stylesheet" href="{{asset('/public_components/css/bootstrap.min.css')}}" media="none" onload="if(media!=='all')media='all'" >
        <link rel="stylesheet" href="{{ asset('/public_components/css/font-awesome.min.css')}}" media="none" onload="if(media!=='all')media='all'" >
        <link rel="stylesheet" href="{{ asset('/public_components/css/letras.css')}}" media="none" onload="if(media!=='all')media='all'" >



        {!! HTML::style('/css/jquery-labelauty.css') !!}

        <link rel="stylesheet" href="{{ asset('/public_components/css/animate.min.css')}}" media="none" onload="if(media!=='all')media='all'" >
   <!--
        <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/owl-carousel/owl.carousel.css')}}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />
      -->  <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="{{ asset('/public_components/components/magnific-popup/magnific-popup.css')}}" media="none" onload="if(media!=='all')media='all'">
        {!!HTML::script('/js/sliderTop/jssor.slider.mini.js') !!}

        <!-- Main Style -->
        <link id="main-style" rel="stylesheet" href="{{ asset('/public_components/css/style.css')}}" media="none" onload="if(media!=='all')media='all'">

        <!-- Updated Styles -->
        <link rel="stylesheet" href="{{ asset('/public_components/css/updates.css')}}" media="none" onload="if(media!=='all')media='all'">

        <!-- Custom Styles -->
        <link rel="stylesheet" href="{{ asset('/public_components/css/custom.css')}}" media="none" onload="if(media!=='all')media='all'">

        <!-- Responsive Styles -->
        <link rel="stylesheet" href="{{ asset('/public_components/css/responsive.css')}}" media="none" onload="if(media!=='all')media='all'">


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
                text-decoration:none;
                outline: none;
            }
            .morecontent span {
                display: none;
            }

                  .scrollupWeb{
    width:40px;
    height:40px;
    opacity:0.3;
    position:fixed;
    bottom:20px;
    right:0;
    display:none;
    text-indent:-9999px;

    /*background: url("../../img/top.png") no-repeat;*/
    background: url("../../../img/top.png") no-repeat;
}
            .scrollup{
    width:40px;
    height:40px;
    opacity:0.3;
    position:fixed;
    bottom:20px;
    right:40%;
    display:none;
    text-indent:-9999px;
    z-index: 10000;
    background: url("../../img/top.png") no-repeat;
}
            .ui-menu {
    box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.11);
    background:rgba(255, 255, 255, 0.9) none repeat scroll 0 0;
    width: 240px;
            }
        </style>
    </head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-85546019-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-85546019-1');
</script>

    <body class="woocommerce">
        <div id="page-wrapper">

            @if(session('device')!='mobile')
                <div class="page-title-container">

                    <div class="page-title">
                    </div>
                <ul class="breadcrumbs">
                        <li><a href="{!!asset('/')!!}" onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1')}}</a></li>
                        <li class="active">iWaNaTrip</li>
                    </ul>
                </div>
            @else
		        <div class="page-title-container  " style="background-size: cover;margin-top: 50px; background-image: url({{ asset('/images/home')}}/volcanhome.jpg)"data-stellar-background-ratio="0.5" id="bgTop">

                    <div class="page-title">
                        <div class="container">
                            <h1 class="whitex">iWaNaTrip</h1>
                        </div>
                    </div>
                    <ul class="breadcrumbs">
                        <li>
                            <a href="https://iwannatrip.com" onclick="$('.woocommerce').LoadingOverlay('show')">
                                {{ trans('publico/labels.label1')}}
                            </a>
                        </li>
                        <li class="active">iWaNaTrip</li>
                    </ul>
                </div>
		    @endif

            <header id="header" class="header-color-white">
                @include('public_page.reusable.header')
            </header>

            <section id="content">
                <div class="container">
                    <div class="row">
                        @if(session('device')!='mobile')
                        <div class="sidebar col-sm-4 col-md-3">
                            <div class="widget box">



                                        <a href="{!!asset('/faqt')!!}">
                                        <img src="{{ url(env('AWS_PUBLIC_URL').'util/3dsecure-notext.png') }}" title="Este es un sitio seguro, ver mas detalles...">

                                    </a>

                                    </br>
                                    </br>
                                    </br>

                                <a target="_blank" href="{!!asset('/faqt')!!}">
                                                            <img width="182" height="182" alt="web site" src="{{ asset('img/HTTPS.png/')}}">
                                                                <dd>{{(session('locale') == 'es' )?"Los datos de su tarjeta de crꥩto pasan directamente a trav고del Getway de pago seguro para su procesamiento en tiempo real. Nosotros no almacenamos ning򮠴ipo de informaci󮠤e su tarjeta de crꥩto. Una vez que usted haga click en el bot󮠤e pago, serᡲedireccionado al Getway de pago seguro para procesar su pago":"Credit Card Details are securely passed directly through to the Payment Getway for processing in real time. We do not store your Credit Card details at any time. Once you click on Pay you will be redirect to the secure Getway page to process the payment"}}</dd>
                                                            </a>

                                                            </br>
                                                            </br>

                                <a target="_blank" href="{!!asset('/faqt')!!}">
                                                            <img width="42" height="42" alt="web site" src="{{ asset('img/faq.png/')}}">

                                                                <h2 style="color:#FF6600" class="product-title btnsmAvailab" ><a class='btnsmAvailab'" > info@iwannatrip.com</a></h2>
                                                            </a>



                            @endif

                            </br>

                            </br>


                                @if(session('device')!='mobile')

                            @if(isset($servicios))
                            @if(count($servicios>1))
                                <ul class="filter-categories panel-group">



                                    <li class="category-has-children">
                                        <a href="#cat-sweaters-jacketsserv" data-toggle="collapse">{{ trans('publico/labels.label54')}}</a>
                                        <ul id="cat-sweaters-jacketsserv" class="collapse">

                                                @foreach ($servicios as $serv)
                                                @if(session('locale') == 'es' )

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


                            @if(session('device')!='mobile')
                            <div class="widget banner-slider box">
                                <div class="owl-carousel" data-itemsPerDisplayWidth="[[0, 1], [480, 2], [768, 1], [992, 1], [1200, 1]]" data-items="1">
                                    <a href="#">
                                        <img src="{{ asset('/img/rsz_00kwwk8s.jpg')}}" alt="">
                                    </a>

                                </div>

                            </div>



                            <div class="widget box">
                                <h4>{{ trans('publico/labels.label121')}}</h4>
                                <ul class="product-list-widget">
                                    <li>
                                        <div class="product-image">
                                            <a href="{!!asset('/detalle')!!}/ESTACION-CHARLES-DARWIN/228">
                                                <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/228estacion6.jpg')}}" alt="Charles Darwin">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h6 class="product-title"><a href="{!!asset('/detalle')!!}/ESTACION-CHARLES-DARWIN/228">Estación Charles Darwin</a></h6>
                                            <span class="product-price">{{ trans('publico/labels.label128')}}</span>
                                            <span class="star-rating" title="4" data-toggle="tooltip">
                                                <span data-stars="4"></span>
                                            </span>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="product-image">
                                            <a href="{!!asset('/detalle')!!}/Centro-Histórico-de-Quito/127">
                                                <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/127centrohistoricociclovia.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h6 class="product-title"><a href="{!!asset('/detalle')!!}/Centro-Histórico-de-Quito/127">Centro Histórico de Quito</a></h6>
                                            <span class="product-price">{{ trans('publico/labels.label128')}}</span>
                                            <span class="star-rating" title="4" data-toggle="tooltip">
                                                <span data-stars="4"></span>
                                            </span>
                                        </div>
                                    </li>

                                    <li>


                                        <div class="product-image">
                                            <a href="{!!asset('/detalle')!!}/Montañita/148">
                                                <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/148103677257361922164010645062755965301191111n.jpg')}}" alt="Montañita">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h6 class="product-title"><a href="{!!asset('/detalle')!!}/Montañita/148">Montañita</a></h6>
                                            <span class="product-price">{{ trans('publico/labels.label128')}}</span>
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
                            @if(session('device')!='mobile')
                            <div class="image-banner box">
                                <div class="image-container">

                                    <img src="{{ asset('/img/serr/ferry.jpg')}}" alt="ferry_iWaNaTrip">

                                </div>
                                <div class="caption-wrapper position-left">
                                    <div class="captions">
                                        @if(session('locale') == 'es' )
                                            <h2>Ferries Galapagos</h2>
                                                @else
                                            <h2>Ferries Galapagos</h2>
                                                @endif



                                    </div>
                                </div>
                            </div>
                            @endif

                            <div class="post-wrapper">
                                <div class="post-filters">
                                    <a href="#" class="btn btn-sm style4 hover-blue active" data-filter="filter-all">All</a>
                                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="ferries">Ferries Galapagos</a>
                                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="scruz">Santa Cruz</a>
                                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="scristobal">San Cristobal</a>
                                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="isabela">Isabela</a>
                                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="banos">Baños</a>
                                    <a href="#" class="btn btn-sm style4 hover-blue" data-filter="volcanes">Climbing, Volcanes Ecuador</a>
                                </div>

                            <div class="iso-container iso-col-2 style-masonry has-column-width Searchcategorias1 ">

                                <div class="TopPlace">

                                    {{-- Ferries Galapagos --}}
                                    <div class="iso-item filter-all filter-website ferries">
                                        <article class="post">
                                            <a href="{!!asset('/Ferry-Galapagos')!!}/"  class="product-image">
                                                <img src="{{ asset('/img/booking/all-Isabella-SantaCruz-Big.jpg')}}" alt="ferries">
                                                <span class="image-extras"></span>
                                            </a>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="{!!asset('/Ferry-Galapagos')!!}">{{(session('locale') == 'es' )?"Transporte Ferries Galápagos ":"Ferries transportation Galapagos"}}</a></h3>
                                                <span class="product-price " style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span class="currency-symbol">{{ trans('publico/labels.label59')}} $</span>30</span>

                                                <br/>
                                                <br/>
                                            </div>
                                        </article>
                                    </div>

                                    <div class="iso-item filter-all filter-website ferries isabela scristobal scruz">
                                        <article class="post">
                                            <a href="{!!asset('/region?region=4')!!}"  class="product-image">
                                                <img src="{{ asset('/img/home/galapagos.jpg')}}" alt="galapagos">
                                                <span class="image-extras"></span>
                                            </a>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="{!!asset('/region?region=4')!!}">Galapagos</a></h3>
                                                <span class="product-price " style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span class="currency-symbol">{{(session('locale') == 'es' )?"Descúbrelo Gratis":"Discover Free"}}</span></span>

                                                <br/>
                                                <br/>
                                            </div>
                                        </article>
                                    </div>

                                    {{-- Santa Cruz --}}
                                    <div class="iso-item filter-all filter-website scruz">
                                        <article class="post">
                                            <a href="{!!asset('/DayTrips/Santa Cruz/237')!!}" class="product-image">
                                                <img src="{{ asset('/images/home/santacruz.jpg')}}" alt="scruz">
                                                <span class="image-extras"></span>
                                            </a>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="{!!asset('/DayTrips/Santa Cruz/237')!!}">Santa Cruz</a></h3>
                                                <span class="product-price " style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span class="currency-symbol">{{ trans('publico/labels.label59')}} $</span>30</span>
                                                <br/>
                                                <br/>
                                            </div>
                                        </article>
                                    </div>

                                    {{-- San Cristobal --}}
                                    <div class="iso-item filter-all filter-website scristobal">
                                        <article class="post">

                                            <a href="{!!asset('/DayTrips/San Cristobal/235')!!}" class="product-image">
                                                <img src="{{ asset('/images/home/sancristobal.jpg')}}" alt="scristobal">
                                                <span class="image-extras"></span>
                                            </a>
                                            <div class="portfolio-content">

                                                <h5 class="portfolio-title"><a href="{!!asset('/DayTrips/San Cristobal/235')!!}">San Cristobal</a></h3>
                                                <span class="product-price " style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span class="currency-symbol">{{ trans('publico/labels.label59')}} $</span>30</span>

                                                <br/>
                                                <br/>

                                            </div>

                                        </article>
                                    </div>

                                    {{-- Isabela --}}
                                    <div class="iso-item filter-all filter-website isabela">
                                        <article class="post">
                                            <a href="{!!asset('/DayTrips/Isabela/236')!!}" class="product-image">
                                                <img src="{{ asset('/images/home/isabela.jpg')}}" alt="isabela">
                                                <span class="image-extras"></span>
                                            </a>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="{!!asset('/DayTrips/Isabela/236')!!}">Isabela</a></h3>
                                                <span class="product-price " style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span class="currency-symbol">{{ trans('publico/labels.label59')}} $</span>30</span>
                                                <br/>
                                                <br/>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="iso-item filter-all filter-website banos">
                                        <article class="post">
                                            <a href="{!!asset('/region?region=3')!!}"  class="product-image">
                                                <img src="{{ asset('/img/home/amazon.jpg')}}" alt="amazon">
                                                <span class="image-extras"></span>
                                            </a>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="{!!asset('/region?region=3')!!}">{{(session('locale') == 'es' )?"Oriente de aventura":"Adventure Jungle"}}</a></h3>
                                                <span class="product-price " style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span class="currency-symbol">{{(session('locale') == 'es' )?"Descúbrelo Gratis":"Discover Free"}}</span></span>

                                                <br/>
                                                <br/>
                                            </div>
                                        </article>
                                    </div>




                                    {{-- Baños     --}}
                                    <div class="iso-item filter-all filter-website banos">
                                        <article class="post">
                                            <a href="{!!asset('/DayTrips/Baños/286')!!}"  class="product-image">
                                                <img src="{{ asset('/images/home/banos2.jpg')}}" alt="banos">
                                                <span class="image-extras"></span>
                                            </a>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="{!!asset('/DayTrips/Baños/286')!!}">Baños</a></h3>
                                                <span class="product-price " style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span class="currency-symbol">{{ trans('publico/labels.label59')}} $</span>30</span>
                                                <br/>
                                                <br/>
                                            </div>
                                        </article>
                                    </div>

                                    <div class="iso-item filter-all filter-website volcanes">
                                        <article class="post">
                                            <a href="{!!asset('/region?region=2')!!}"  class="product-image">
                                                <img src="{{ asset('/img/home/andes.jpg')}}" alt="andes">
                                                <span class="image-extras"></span>
                                            </a>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="{!!asset('/region?region=2')!!}">{{(session('locale') == 'es' )?"Sierra Ecuatoriana":"Ecuadorian Andes"}}</a></h3>
                                                <span class="product-price " style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span class="currency-symbol">{{(session('locale') == 'es' )?"Descúbrelo Gratis":"Discover Free"}}</span></span>

                                                <br/>
                                                <br/>
                                            </div>
                                        </article>
                                    </div>


                                    {{-- Climbing, Volcanes Ecuador --}}
                                    <div class="iso-item filter-all filter-website volcanes">
                                        <article class="post">
                                            <a href="{!!asset('DayTripsVolcanes')!!}"  class="product-image">
                                                <img src="https://bookiw.iwannatrip.com/app/web/uploads/44cotopaxi-ecuador-condortrekk-expeditions-ecuador-movil2-1.jpg" alt="volcanes">
                                                <span class="image-extras"></span>
                                            </a>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="{!!asset('DayTripsVolcanes')!!}">Climbing, Volcanes Ecuador</a></h3>
                                                <span class="product-price " style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span class="currency-symbol">{{ trans('publico/labels.label59')}} $</span>100</span>
                                                <br/>
                                                <br/>
                                            </div>
                                        </article>
                                    </div>


                                       <div class="iso-item filter-all filter-website volcanes">
                                        <article class="post">
                                            <a href="{!!asset('/region?region=1')!!}"  class="product-image">
                                                <img src="{{ asset('/img/home/costa.jpg')}}" alt="costa">
                                                <span class="image-extras"></span>
                                            </a>
                                            <div class="portfolio-content">
                                                <h5 class="portfolio-title"><a href="{!!asset('/region?region=1')!!}">{{(session('locale') == 'es' )?"Costa & Playa":"Coast & Beach"}}</a></h3>
                                                <span class="product-price " style=" color: #eb3b50;float: left;font-size: 1.3333em;font-weight: 600;margin-right: 8px;"><span class="currency-symbol">{{(session('locale') == 'es' )?"Descúbrelo Gratis":"Discover Free"}}</span></span>

                                                <br/>
                                                <br/>
                                            </div>
                                        </article>
                                    </div>


                                </div>

                            </div>

                        </div>



                        </div>
                    </div>
                </div>
            </section>

            @if(session('device')!='mobile')
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
                                <h4>{{ trans('publico/labels.label26')}}</h4>
                            </div>
                            <div class="callout-action">
                                <a  class="btn style4">{{ trans('publico/labels.label27')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @include('public_page.reusable.footer')
            </footer>
    </div>

    <!-- Javascript -->

    {!! HTML::script('/js/jquery.js') !!}
    {!!HTML::script('/js/js_public/Compartido.js') !!}
    {!!HTML::script('/js/loadingScreen/loadingoverlay.min.js') !!}
        {!!HTML::script('/js/jquery.autocomplet.js') !!}
        {!!HTML::script('/js/Compartido.js') !!}

    <script type="text/javascript" src="{{ asset('/public_components/js/jquery-2.1.3.min.js')}}"></script>
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
    <script type="text/javascript" src="{{ asset('/public_components/components/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- plugins -->
    <script type="text/javascript" src="{{ asset('/public_components/js/jquery.plugins.js')}}"></script>

<script type="text/javascript" src="{{ asset('/public_components/js/lugares_ecuador.js')}}"></script>

    <script>
                                sjq(document).ready(function ($) {
                                    // Configure/customize these variables.
                                    var showChar = 100; // How many characters are shown by default
                                    var ellipsestext = "...";
                                    var moretext = "Show more >";
                                    var lesstext = "Show less";
                                    $('.more').each(function () {
                                        var content = $(this).html();
                                        if (content.length > showChar) {

                                            var c = content.substr(0, showChar);
                                            var h = content.substr(showChar, content.length - showChar);
                                            var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
                                            $(this).html(html);
                                        }

                                    });
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
                                });
        sjq(document).ready(function ($) {
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
                afterInit: function (el) {
                    el.find(".owl-item").eq(0).addClass("synced");
                    el.find(".owl-wrapper").equalHeights();
                },
                afterUpdate: function (el) {
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

            $("#sync2").on("click", ".owl-item", function (e) {
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
        });</script>

    @if(session('device')!='mobile')


    <script>
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
                {$Duration: 1800, $Opacity: 2}
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
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });</script>

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
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background:url ("{!!asset("/img/internas/b05.png")!!}") no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background:url("{!!asset("/img/internas/a12.png")!!}") no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>
@else
  <script>




</script>
    @endif




<script>



$(window).scroll(function(){
   if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
   } else {
        $('.scrollup').fadeOut();
   }
});
$('.scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});


$(window).scroll(function(){
   if ($(this).scrollTop() > 100) {
        $('.scrollupWeb').fadeIn();
   } else {
        $('.scrollupWeb').fadeOut();
   }
});
$('.scrollupWeb').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});



              $(function() {



    $( ".searchCity" ).autocomplete({

      source: availableTags

    });

  });

</script>




    <!-- load page Javascript -->
    <script type="text/javascript" src="{{ asset('/public_components/js/main.js')}}"></script>


</body>
</html>