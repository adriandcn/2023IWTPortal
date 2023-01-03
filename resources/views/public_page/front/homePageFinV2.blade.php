<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="{{session('locale')}}" dir="{{session('locale')}}">
<!--<![endif]-->

<head>
    <!-- Page Title -->
    <title>iWaNaTrip - |Galapagos Transfers |DayTrips Ecuador |Discover Ecuador</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">

    <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0089/6154.js" async="async"></script>
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

    <link rel="apple-touch-icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.png') }}" />

    {{-- <link rel="stylesheet" href="{{ asset('/public_components/css/bootstrap.min.css')}}"> --}}
     {{-- <link rel="stylesheet" href="{{ asset('/public_components/css/font-awesome.min.css')}}"> --}}

    <link rel="stylesheet" href="{{ asset('/public_components/newHome/styles/bootstrap4/bootstrap.min.css')}}" media="none" onload="if(media!=='all')media='all'" >>



    <link href="{{ asset('/public_components/newHome/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="none" onload="if(media!=='all')media='all'" >>

    <link rel="stylesheet" href="{{ asset('/public_components/css/letras.css')}}" media="none" onload="if(media!=='all')media='all'" >>
    <link href="{{ asset('/extern/css/style.css')}}" rel="stylesheet" type="text/css" media="all" media="none" onload="if(media!=='all')media='all'" >/>
    <link href="{{ asset('/common/styles.css')}}" rel="stylesheet" type="text/css" media="all" media="none" onload="if(media!=='all')media='all'" > />
    <link rel="stylesheet" href="{{ asset('/public_components/css/animate.min.css')}}" media="none" onload="if(media!=='all')media='all'" >>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" /> --}}
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{ asset('/public_components/css/style.css')}}" media="none" onload="if(media!=='all')media='all'" >>
    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{ asset('/public_components/css/updates.css')}}" media="none" onload="if(media!=='all')media='all'" >>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('/public_components/css/custom.css')}}" media="none" onload="if(media!=='all')media='all'" >>
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{ asset('/public_components/css/responsive.css')}}" media="none" onload="if(media!=='all')media='all'" >>

    <!-- Booking Styles -->
    <link rel="stylesheet" href="{{asset('public_components/booking/css/booking_home.css')}}">
    <!-- Booking Styles -->

    {{-- CSS NEW HOME --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/styles/about.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/styles/responsive.css')}}">
    {{-- CSS NEW HOME --}}


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

        <header id="header" class="header-color-white" style="background: rgba(255, 255, 255, 0.9) !important;">
            @include('public_page.reusable.header')
        </header>

        <!-- Destinations -->
        <div class="destinations" id="destinations">
            <div class="container-fluid">

                <div class="row">
                    <div class="col text-center">
                        <div class="section_title">
                            @if(session('locale') == 'es' )
                                <h2>Destinos Populares Ecuador</h2>
                            @else
                                <h2>Popular Destinations Ecuador</h2>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row destinations_row">

                    <div class="col">

                        <div class="destinations_container item_grid">

                            <!-- Destination -->
                            <a href="{!!asset('/Ferry-Galapagos')!!}">
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{!!asset('/img/booking/rutas-todas-big.jpg')!!}" alt="">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="{!!asset('/Ferry-Galapagos')!!}">Ferries Galapagos</a></div>
                                        <div class="destination_subtitle"><p>{{(session('locale') == 'es' )?"Reserva Online":"Book Online"}}</p></div>
                                        <div class="destination_price">{{(session('locale') == 'es' )?"Desde":"From"}} $33</div>
                                    </div>
                                </div>
                            </a>

                            <a href="{!!asset('/region?region=4')!!}">
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{!!asset('/img/home/galapagos.jpg')!!}" alt="galapagos">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="{!!asset('/region?region=4')!!}">Galapagos</a></div>
                                        <div class="destination_subtitle"><p>{{(session('locale') == 'es' )?"Descubre":"Discover"}}</p></div>
                                        <div class="destination_price">{{(session('locale') == 'es' )?"Gratis":"Free"}}</div>
                                    </div>
                                </div>
                            </a>
                            <!-- Destination -->
                            <a href="{!!asset('/DayTrips/Santa Cruz/237')!!}">
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{!!asset('/images/home/santacruz.jpg')!!}" alt="santacruz">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="{!!asset('/DayTrips/Santa Cruz/237')!!}"">Santa Cruz Galapagos</a></div>
                                        <div class="destination_subtitle"><p>{{(session('locale') == 'es' )?"Reserva Online":"Book Online"}}</p></div>
                                        <div class="destination_price">{{(session('locale') == 'es' )?"Desde":"From"}} $33</div>
                                    </div>
                                </div>
                            </a>

                            <!-- Destination -->
                            <a href="{!!asset('/DayTrips/San Cristobal/235')!!}">
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{!!asset('/images/home/sancristobal.jpg')!!}" alt="sancristobal">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="{!!asset('/DayTrips/San Cristobal/235')!!}">San Cristobal Galapagos</a></div>
                                        <div class="destination_subtitle"><p>{{(session('locale') == 'es' )?"Reserva Online":"Book Online"}}</p></div>
                                        <div class="destination_price">{{(session('locale') == 'es' )?"Desde":"From"}} $33</div>
                                    </div>
                                </div>
                            </a>


                            <!-- Destination -->
                            <a href="{!!asset('/DayTrips/Isabela/236')!!}">
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{!!asset('/images/home/isabela.jpg')!!}" alt="isabela">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="{!!asset('/DayTrips/Isabela/236')!!}">Isabela Galapagos</a></div>
                                        <div class="destination_subtitle"><p>{{(session('locale') == 'es' )?"Reserva Online":"Book Online"}}</p></div>
                                        <div class="destination_price">{{(session('locale') == 'es' )?"Desde":"From"}} $33</div>
                                    </div>
                                </div>
                            </a>

                            <a href="{!!asset('/region?region=2')!!}">
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{!!asset('/img/home/andes.jpg')!!}" alt="galapagos">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="{!!asset('/region?region=2')!!}">{{(session('locale') == 'es' )?"Sierra":"Andes"}}</a></div>
                                        <div class="destination_subtitle"><p>{{(session('locale') == 'es' )?"Descubre":"Discover"}}</p></div>
                                        <div class="destination_price">{{(session('locale') == 'es' )?"Gratis":"Free"}}</div>
                                    </div>
                                </div>
                            </a>

							    <!-- Destination -->
                            <a href="{!!asset('/DayTripsVolcanes')!!}">
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="https://bookiw.iwannatrip.comecuador-condortrekk-expeditions-ecuador-movil2-1.jpg" alt="volcanes">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="{!!asset('/DayTripsVolcanes')!!}">Volcanes Ecuador</a></div>
                                        <div class="destination_subtitle"><p>{{(session('locale') == 'es' )?"Reserva Online":"Book Online"}}</p></div>
                                        <div class="destination_price">{{(session('locale') == 'es' )?"Desde":"From"}} $100</div>
                                    </div>
                                </div>
                            </a>


                            <a href="{!!asset('/region?region=3')!!}">
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{!!asset('/img/home/amazon.jpg')!!}" alt="oriente">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="{!!asset('/region?region=2')!!}">{{(session('locale') == 'es' )?"Oriente":"Jungle"}}</a></div>
                                        <div class="destination_subtitle"><p>{{(session('locale') == 'es' )?"Descubre":"Discover"}}</p></div>
                                        <div class="destination_price">{{(session('locale') == 'es' )?"Gratis":"Free"}}</div>
                                    </div>
                                </div>
                            </a>

                            <!-- Destination -->
                            <a href="{!!asset('/DayTrips/Baños/286')!!}">
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{!!asset('/images/home/banos2.jpg')!!}" alt="baños">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="{!!asset('/DayTrips/Baños/286')!!}">Baños</a></div>
                                        <div class="destination_subtitle"><p>{{(session('locale') == 'es' )?"Reserva Online":"Book Online"}}</p></div>
                                        <div class="destination_price">{{(session('locale') == 'es' )?"Desde":"From"}} $30</div>
                                    </div>
                                </div>
                            </a>

                            <a href="{!!asset('/region?region=1')!!}">
                                <div class="destination item">
                                    <div class="destination_image">
                                        <img src="{!!asset('/img/home/costa.jpg')!!}" alt="costa">
                                    </div>
                                    <div class="destination_content">
                                        <div class="destination_title"><a href="{!!asset('/region?region=1')!!}">{{(session('locale') == 'es' )?"Costa & Playa":"Coast & Beach"}}</a></div>
                                        <div class="destination_subtitle"><p>{{(session('locale') == 'es' )?"Descubre":"Discover"}}</p></div>
                                        <div class="destination_price">{{(session('locale') == 'es' )?"Gratis":"Free"}}</div>
                                    </div>
                                </div>
                            </a>





                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us -->
        {{-- <div class="why">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{!!asset('/public_components/newHome/images/why.jpg')!!}" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_subtitle">simply amazing places</div>
                        <div class="section_title"><h2>Why choose us?</h2></div>
                    </div>
                </div>
                <div class="row why_row">

                    <!-- Why item -->
                    <div class="col-lg-4 why_col">
                        <div class="why_item">
                            <div class="why_image">
                                <img src="{!!asset('/public_components/newHome/images/why_1.jpg')!!}" alt="">
                                <div class="why_icon d-flex flex-column align-items-center justify-content-center">
                                    <img src="{!!asset('/public_components/newHome/images/why_1.svg')!!}" alt="">
                                </div>
                            </div>
                            <div class="why_content text-center">
                                <div class="why_title">Fast Services</div>
                                <div class="why_text">
                                    <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Why item -->
                    <div class="col-lg-4 why_col">
                        <div class="why_item">
                            <div class="why_image">
                                <img src="{!!asset('/public_components/newHome/images/why_2.jpg')!!}" alt="">
                                <div class="why_icon d-flex flex-column align-items-center justify-content-center">
                                    <img src="{!!asset('/public_components/newHome/images/why_2.svg')!!}" alt="">
                                </div>
                            </div>
                            <div class="why_content text-center">
                                <div class="why_title">Great Team</div>
                                <div class="why_text">
                                    <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Why item -->
                    <div class="col-lg-4 why_col">
                        <div class="why_item">
                            <div class="why_image">
                                <img src="{!!asset('/public_components/newHome/images/why_3.jpg')!!}" alt="">
                                <div class="why_icon d-flex flex-column align-items-center justify-content-center">
                                    <img src="{!!asset('/public_components/newHome/images/why_3.svg')!!}" alt="">
                                </div>
                            </div>
                            <div class="why_content text-center">
                                <div class="why_title">Best Deals</div>
                                <div class="why_text">
                                    <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}


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
    href="{{ asset('/public_components/newHome/styles/responsive.css')}}"

    <script type="text/javascript" src="{{ asset('public_components/newHome/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/styles/bootstrap4/popper.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/plugins/easing/easing.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/plugins/greensock/TweenMax.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/newHome/js/about.js')}}"></script>


    {{-- {!! HTML::script('/js/jquery.js') !!} --}}
    <!-- load datatables Javascript -->
    {{-- {!!HTML::script('/js/js_public/Compartido.js') !!} --}}

    {!!HTML::script('/js/js_public/Compartido.js') !!}
    {!!HTML::script('/js/Compartido.js') !!}
    {{-- <script type="text/javascript" src="{{ asset('/public_components/js/jquery-2.1.3.min.js')}}"></script> --}}
    <!-- Tooltipster -->
    <script type="text/javascript" src="{{ asset('public_components/components/tooltipster-master/dist/js/tooltipster.bundle.min.js')}}"></script>
    <script type="text/javascript">
    $('.tooltip').tooltipster({
        theme: 'tooltipster-light'
    });
    </script>
    {{-- <script type="text/javascript" src="{{ asset('/public_components/js/jquery.noconflict.js')}}"></script>
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
    <script type="text/javascript" src="{{ asset('/public_components/js/main.js')}}"></script> --}}

    {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}

    {{-- SCRIPTS DEL BOOKING --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script> --}}
    {{-- SCRIPTS DEL BOOKING --}}

    <script type="text/javascript">
    $(window).bind("load", function() {
        // GetDataLatestOperators();
    });
    </script>


    <script>
    $(document).ready(function() {

        var pagina = 1;
        //GetDataAjaxTopPlaces("{!!asset('/getTopPlaces')!!}?page=" + pagina);

        function doneCallback(){
            console.log('EXITOSO');
        }

        function failCallback(){
            console.log('FALLIDO');
        }

		// $.when( GetDataAjaxTopPlaces("{!!asset('/getTopPlaces')!!}?page=" + pagina)).then(doneCallback, failCallback);
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

    {{-- SCRIPTS DEL BOOKING --}}
    <script language="javascript">
        $(document).ready(function() {
            var blockDays = 2;
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;     // getMonth() is zero-based
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
        $(document).ready(function() {
            $('#contact_us').submit(function(e) {
                e.preventDefault();
                // $('.woocommerce').LoadingOverlay('show');
                var fecha = $('#date').val();
                var fechaNueva = new Date(fecha);
                var mes = fechaNueva.getMonth() + 1;
                var anio = fechaNueva.getUTCFullYear();

                var fechaFormato = Math.round((new Date(fecha)).getTime() / 1000);
                var horario = $('#calendar').val();
                var nombreHorario = $("#calendar option:selected").text();;
                var pasajeros = $('#passengers').val();
                var todo = $('#contact_us').serialize();

                console.log('horario: ', horario);
                window.location.href = horario;
            });
        });
     </script>
    {{-- SCRIPTS DEL BOOKING --}}

</body>

</html>