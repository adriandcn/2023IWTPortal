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
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png')}}" />


    <link rel="apple-touch-icon" href="{{ asset('/images/favicon.png')}}" />

    {{-- <link rel="stylesheet" href="{{ asset('/public_components/css/bootstrap.min.css')}}"> --}}
     {{-- <link rel="stylesheet" href="{{ asset('/public_components/css/font-awesome.min.css')}}"> --}}

    <link rel="stylesheet" href="{{ asset('/public_components/newHome/styles/bootstrap4/bootstrap.min.css')}}" media="none" onload="if(media!=='all')media='all'"/>



    <link href="{{ asset('/public_components/newHome/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="none" onload="if(media!=='all')media='all'" />

    <link rel="stylesheet" href="{{ asset('/public_components/css/letras.css')}}" media="none" onload="if(media!=='all')media='all'" />
    <link href="{{ asset('/extern/css/style.css')}}" rel="stylesheet" type="text/css" media="all" media="none" onload="if(media!=='all')media='all'" />
    <link href="{{ asset('/common/styles.css')}}" rel="stylesheet" type="text/css" media="all" media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" href="{{ asset('/public_components/css/animate.min.css')}}" media="none" onload="if(media!=='all')media='all'" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" /> --}}
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{ asset('/public_components/css/style.css')}}" media="none" onload="if(media!=='all')media='all'" />
    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{ asset('/public_components/css/updates.css')}}" media="none" onload="if(media!=='all')media='all'" />
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('/public_components/css/custom.css')}}" media="none" onload="if(media!=='all')media='all'" />
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{ asset('/public_components/css/responsive.css')}}" media="none" onload="if(media!=='all')media='all'" />

    <!-- Booking Styles -->
    <link rel="stylesheet" href="{{asset('public_components/booking/css/booking_home.css')}}" media="none" onload="if(media!=='all')media='all'" />
    <!-- Booking Styles -->


	<link type="text/css" href="{{ asset('/css/plugin-frameworks/bootstrap.css')}}" rel="stylesheet" media="none" onload="if(media!=='all')media='all'" />



	<link type="text/css" href="{{ asset('/css/common/styles.css')}}" rel="stylesheet" media="none" onload="if(media!=='all')media='all'" />
    {{-- CSS NEW HOME --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}"media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}"media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/plugins/OwlCarousel2-2.2.1/animate.css')}}"media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/styles/main_styles.css')}}"media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/styles/about.css')}}"media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/newHome/styles/responsive.css')}}"media="none" onload="if(media!=='all')media='all'" />
    {{-- CSS NEW HOME --}}



    <?php
	$language=session('locale');
    ?>
    @if($language=="en")
    <link rel="canonical" href="https://iwannatrip.com/en/" hreflang="en-us" />
    <link rel="alternate" href="https://iwannatrip.com/" hreflang="es-ec" />
    <link rel="alternate" href="https://iwannatrip.com/en/" hreflang="en-us" />

	@else
    <link rel="canonical" href="https://iwannatrip.com/" hreflang="es-ec" />
            <link rel="alternate" href="https://iwannatrip.com/en/" hreflang="en-us" />
            <link rel="alternate" href="https://iwannatrip.com/" hreflang="es-ec" />

    @endif


    <!-- CSS for IE -->
    <!--[if lte IE 9]>
            <link rel="stylesheet" type="text/css" href="{{ asset('public_components/css/ie.css')}}" />
        <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->

    <link rel="stylesheet" href="{{ asset('public_components/css/booking.css')}}" media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" href="{{ asset('public_components/css/bootstrapNewSite.css')}}"media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" href="{{ asset('public_components/components/tooltipster-master/dist/css/tooltipster.bundle.min.css')}}"media="none" onload="if(media!=='all')media='all'" />
    <link rel="stylesheet" href="{{ asset('public_components/components/tooltipster-master/dist/css/tooltipster-sideTip-light.min.css')}}"media="none" onload="if(media!=='all')media='all'" />
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







            <div class="container">
		<div class="h-600x h-sm-auto">
			<div class="h-2-3 h-sm-auto oflow-hidden">

				<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="{!!asset('/region?region=4')!!}">

						<div style="background: url({!!asset('/img/home/galapagos2.jpg')!!});
    background-size: auto;
background-size: cover;" class="img-bg bg-1 bg-grad-layer-6"></div>


						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h3 class="mb-15 mb-sm-5 font-sm-13"><b>{{(session('locale') == 'es' )?"Descubre":"Discover"}} Galapagos</b></h3>
							<ul class="list-li-mr-20">
								<li>by <span class="color-primary"><b>iWaNaTrip.com</b></span> 2019</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->

				<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x" data-ce-key="742">


						<a class="pos-relative h-100 dplay-block" href="{!!asset('/Ferry-Galapagos')!!}" data-ce-key="743">

							<div style=" background: url(https://iwannatrip.com/img/booking/rutas-todas-big.jpg) no-repeat red;
    background-size: auto;
background-size: contain;" class="img-bg bg-2 bg-grad-layer-6" data-ce-key="744"></div>



							<div class="abs-blr color-white p-20 bg-sm-color-7" data-ce-key="745">
								<h4 class="mb-10 mb-sm-5" data-ce-key="746"><b data-ce-key="747">Ferries Galapagos</b></h4>
								<ul class="list-li-mr-20" data-ce-key="748">
									<li data-ce-key="749">{{(session('locale') == 'es' )?"Reserva Online":"Book Online"}}</li>
									<li data-ce-key="750"><i class="color-primary mr-5 font-12 ion-ios-bolt" data-ce-key="751"></i>{{(session('locale') == 'es' )?"Desde":"From"}} $33</li>
										</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div>

			</div><!-- h-2-3 -->

			<div class="h-1-3 oflow-hidden">

				<div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="{!!asset('/DayTrips/Santa Cruz/237')!!}">


                        <div style="background: url({!!asset('/images/home/santacruz.jpg')!!});
    background-size: auto;
background-size: cover;" class="img-bg bg-4 bg-grad-layer-6"></div>




						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>Santa Cruz</b></h4>
							<ul class="list-li-mr-20">
								<li>{{(session('locale') == 'es' )?"Reserva Online":"Book Online"}}</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>{{(session('locale') == 'es' )?"Desde":"From"}} $33</li>

							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->




				<div class="plr-5 plr-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="{!!asset('/DayTrips/San Cristobal/235')!!}">

						<div class="img-bg bg-5 bg-grad-layer-6"></div>

                        <div style="background: url({!!asset('/images/home/sancristobal.JPEG')!!});
                            background-size: auto;
                        background-size: cover;" class="img-bg bg-5 bg-grad-layer-6"></div>


						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>San Cristobal</b></h4>
							<ul class="list-li-mr-20">
								<li>{{(session('locale') == 'es' )?"Reserva Online":"Book Online"}}</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>{{(session('locale') == 'es' )?"Desde":"From"}} $33</li>

							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->




				<div class="pl-5 pl-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="{!!asset('/DayTrips/Isabela/236')!!}">

						<div class="img-bg bg-6 bg-grad-layer-6"></div>

                        <div style="background: url({!!asset('/images/home/isabela.jpg')!!});
                        background-size: auto; background-position-y: center;
                        background-size: cover;" class="img-bg bg-6 bg-grad-layer-6"></div>

						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>Isabela Galapagos</b></h4>
							<ul class="list-li-mr-20">
								<li>{{(session('locale') == 'es' )?"Reserva Online":"Book Online"}}</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>{{(session('locale') == 'es' )?"Desde":"From"}} $33</li>

							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->

			</div><!-- h-2-3 -->
		</div><!-- h-100vh -->
	</div><!-- container -->








	<section>
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-lg-8">
					<h4 class="p-title"><b>{{(session('locale') == 'es' )?"Descubre más de Ecuador":"Discover more of Ecuador"}}</b></h4>
					<div class="row">

						<div class="col-sm-6">
                        <a href="{!!asset('/trip/Lo-mejor-de-Ecuador/1173')!!}">

                            <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/1173imgmaparuta05xl.jpg') !!}" alt="Ecuador"/>
                            </a>

							<h4 class="pt-20"><a href="https://iwannatrip.com/trip/Lo-mejor-de-Ecuador/1173"><b>{{(session('locale') == 'es' )?"Lo mejor de":"The best of"}} <br/>Ecuador</b></a></h4>
							<ul class="list-li-mr-20 pt-10 pb-20">
								<li class="color-lite-black">by <a href="https://iwannatrip.com/trip/Lo-mejor-de-Ecuador/1173" class="color-black"><b>iWaNaTrip</b></a>
								01 25, 2019</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><b>30,190</b></li>

							</ul>
                            <a href="{!!asset('/trip/Lo-mejor-de-Ecuador/1173')!!}">
							<p>{{(session('locale') == 'es' )?"La esencia de Ecuador reside en probar un poquito de cada región. Siente el frío de las imponentes montañas andinas. Experimenta al máximo la biodiversidad de la Amazonía y su magia.":"Making the most of your visit to Ecuador is about savoring the best of each region. Feel the cold landscapes of the Andes mountains. Live the nature and be fascinated by the Amazon biodiversity. Relax or learn surf in the hot beaches of the West Coast. Finally, witness the beauty of the Eden garden on Hearth"}}</p>
						</a>
                        </div><!-- col-sm-6 -->




						<div class="col-sm-6">



                            <a class="oflow-hidden pos-relative mb-20 dplay-block" href="{!!asset('/DayTrips')!!}">
								<div class="wh-100x abs-tlr"><img src="https://s23444.pcdn.co/wp-content/uploads/2017/07/1-community-tourism.jpg.optimal.jpg" alt="daytrips"></div>
								<div class="ml-120 min-h-100x">
									<h5><b>DayTrips</b></h5>
									<h6 class="color-lite-black pt-10">{{(session('locale') == 'es' )?"Desde":"From"}} <span class="color-black"><b>$30</b></span></h6>
								</div>
							</a><!-- oflow-hidden -->


							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="{!!asset('/DayTrips/Baños/286')!!}">
								<div class="wh-100x abs-tlr"><img src="{!!asset('/images/home/banos2.jpg')!!}" alt="Baños"></div>
								<div class="ml-120 min-h-100x">
									<h5><b>{{(session('locale') == 'es' )?"Adrenalina en Baños":"Baños Adrenaline"}}</b></h5>
									<h6 class="color-lite-black pt-10">{{(session('locale') == 'es' )?"Desde":"From"}}  <span class="color-black"><b>$30</b></span> </h6>
								</div>
							</a><!-- oflow-hidden -->

							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="{!!asset('/Ferry-Galapagos')!!}">
								<div class="wh-100x abs-tlr"><img src="{!!asset('/img/booking/half-SanCristobal-SantaCruz-big.jpeg')!!}" alt="GAlapagos"></div>
								<div class="ml-120 min-h-100x">
									<h5><b>{{(session('locale') == 'es' )?"Ferry Galapagos":"Ferry Galapagos"}}</b></h5>
									<h6 class="color-lite-black pt-10">{{(session('locale') == 'es' )?"Desde":"From"}} <span class="color-black"><b>$33</b></span></h6>
								</div>
							</a><!-- oflow-hidden -->

							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="https://iwannatrip.com/tour/Tour-diario-isla-Pinz%C3%B3n---Salida-desde-Santa-Cruz---Gal%C3%A1pagos/74/39">
								<div class="wh-100x abs-tlr"><img src="https://bookiw.iwannatrip.com/app/web/uploads/39WhatsApp Image 2019-01-16 at 11.05.57 PM.jpeg" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>{{(session('locale') == 'es' )?"DayTrip isla Pinzón":"Daytrip Pinzón island"}}</b></h5>
									<h6 class="color-lite-black pt-10">{{(session('locale') == 'es' )?"Desde":"From"}}  <span class="color-black"><b>$165</b></span></h6>
								</div>
							</a><!-- oflow-hidden -->
						</div><!-- col-sm-6 -->

					</div><!-- row -->

					<h4 class="p-title mt-30"><b>{{(session('locale') == 'es' )?"Prepárate para tu viaje":"Get ready for your trip"}}</b></h4>
					<div class="row">

						<div class="col-sm-6">
                        <a href="https://iwannatrip.com/trip/La-ruta-Mochilera-en-Ecuador/1122">
                            <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/1122imgmaparuta01xl.jpg') !!}" alt="ruta mochilera"/>
							<h4 class="pt-20"><b>{{(session('locale') == 'es' )?"Ruta Mochilera":"BackPack trip"}}<br/>{{(session('locale') == 'es' )?"Presupuesto ":"Budget "}}$300 </b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>iWaNaTrip</b></a>
								</li>

							</ul>
						</div><!-- col-sm-6 -->

                        <div class="col-sm-6">
                        <a href="https://iwannatrip.com/trip/Sol-y-Surf-en-Ecuador/1172">
                            <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/1172imgmaparuta04xl.jpg') !!}"  alt="ruta sol"/>
							<h4 class="pt-20"><b>{{(session('locale') == 'es' )?"Sol & Surf":"Surf & Sun"}}<br/>{{(session('locale') == 'es' )?"Presupuesto ":"Budget "}}$200 </b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>iWaNaTrip</b></a>
								</li>

							</ul>
						</div><!-- col-sm-6 -->

						<div class="col-sm-6">
                        <a href="{!!asset('/region?region=2')!!}">
							<img src="{!!asset('/img/home/andes.jpg')!!}" alt="sierra">
							<h4 class="pt-20"><b>{{(session('locale') == 'es' )?"Sierra":"Andes"}} <br/>Free</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>iWaNaTrip</b></a>
								</li>

							</ul>
						</div><!-- col-sm-6 -->

                        <div class="col-sm-6">
                        <a href="{!!asset('/tour/Tintorera-daytrip-(Isabela-island--Galapagos)/2107/38')!!}">
							<img src="https://www.republica.com/lugar-de-la-vida/wp-content/uploads/sites/34/2015/08/Tintorera.jpg" alt="sierra">
							<h4 class="pt-20"><b>{{(session('locale') == 'es' )?"DayTrip Tintoreras":"DayTrip Tintoreras"}} <br/>{{(session('locale') == 'es' )?"Desde":"From"}} $50</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>iWaNaTrip</b></a>
								</li>

							</ul>
						</div><!-- col-sm-6 -->


                        <div class="col-sm-6">
                        <a href="{!!asset('/region?region=3')!!}">
							<img src="{!!asset('/img/home/amazon.jpg')!!}" alt="Oriente">
							<h4 class="pt-20"><b>{{(session('locale') == 'es' )?"Amazonía":"Amazon Jungle"}} <br/>Free</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>iWaNaTrip</b></a>
								</li>

							</ul>
						</div><!-- col-sm-6 -->

                        <div class="col-sm-6">
                        <a href="{!!asset('/region?region=1')!!}">
							<img src="{!!asset('/img/home/costa.jpg')!!}" alt="Costa">
							<h4 class="pt-20"><b>{{(session('locale') == 'es' )?"Costa":"Coast"}} <br/>Free</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>iWaNaTrip</b></a>
								</li>

							</ul>
						</div><!-- col-sm-6 -->


						<div class="col-sm-6">
                        <a href="{!!asset('/DayTripsVolcanes')!!}">
							<img src="https://bookiw.iwannatrip.com/app/web/uploads/44cotopaxi-ecuador-condortrekk-expeditions-ecuador-movil2-1.jpg" alt="volcanoes">
							<h4 class="pt-20"><b>{{(session('locale') == 'es' )?"Volcanes en Ecuador":"Ecuador volcanoes"}} <br/>{{(session('locale') == 'es' )?"Andinismo":"Andinism"}} $100</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>iWaNaTrip</b></a>
								Jan 25, 2018</li>

							</ul>
						</div><!-- col-sm-6 -->

                        <div class="col-sm-6">
                        <a href="{!!asset('/region?region=4')!!}">
							<img src="{!!asset('/img/home/galapagos.jpg')!!}" alt="Galapagos">
							<h4 class="pt-20"><b>{{(session('locale') == 'es' )?"Galápagos":"Galapagos"}} <br/>Free</b></a></h4>
							<ul class="list-li-mr-20 pt-10 mb-30">
								<li class="color-lite-black">by <a href="#" class="color-black"><b>iWaNaTrip</b></a>
								</li>

							</ul>
						</div><!-- col-sm-6 -->



					</div><!-- row -->

					<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="{!!asset('/DayTrips')!!}"><b>{{(session('locale') == 'es' )?"Ver más":"View more"}}</b></a>
				</div><!-- col-md-9 -->

				<div class="d-none d-md-block d-lg-none col-md-3"></div>
				<div class="col-md-6 col-lg-4">
					<div class="pl-20 pl-md-0">
						<ul class="list-block list-li-ptb-15 list-btm-border-white bg-primary text-center">
							<li>	<a href="{!!asset('/region?region=1')!!}">
						<b style="color:white">{{(session('locale') == 'es' )?"Costa":"Coast"}}</b></a></li>
							<li>
                            <a href="{!!asset('/region?region=2')!!}">
                            <b style="color:white">{{(session('locale') == 'es' )?"Sierra":"Andes"}}</b></a></li>
							<li>
                            <a href="{!!asset('/region?region=3')!!}">
                            <b style="color:white">{{(session('locale') == 'es' )?"Oriente":"Jungle"}}</b></a></li>
							<li>
                            <a href="{!!asset('/region?region=4')!!}">
                            <b style="color:white">{{(session('locale') == 'es' )?"Galápagos":"Galapagos"}}</b></a></li>

						</ul>

						<div class="mtb-50">
							<h4 class="p-title"><b>{{(session('locale') == 'es' )?"Posts Populares":"Popular Posts"}}</b></h4>

                            <a class="oflow-hidden pos-relative mb-20 dplay-block" href="{!!asset('/tour/The-tunnels-daytrip-(Isabela---Galapagos)/2107/37')!!}">
								<div class="wh-100x abs-tlr"><img src="https://bookiw.iwannatrip.com/app/web/uploads/3724899869_1736560619710170_7265213013221685588_n.jpg" alt="costa"></div>
								<div class="ml-120 min-h-100x">
									<h5><b>{{(session('locale') == 'es' )?"Snorkeling Túneles Isla Isabela":"Snorkeling tunnels Isabela island"}}</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>iWaNaTrip</b></span> {{(session('locale') == 'es' )?"Desde":"From"}} $125</h6>
								</div>
							</a><!-- oflow-hidden -->


                            <a class="oflow-hidden pos-relative mb-20 dplay-block" href="{!!asset('/DayTripsVolcanes')!!}">
								<div class="wh-100x abs-tlr"><img src="https://bookiw.iwannatrip.com/app/web/uploads/45cayambe5-movil-1.jpg" alt="volcanos"></div>
								<div class="ml-120 min-h-100x">
									<h5><b>{{(session('locale') == 'es' )?"Asciende a los volcanes":"Andinism on volcanoes"}}</b></h5>
									<h6 class="color-lite-black pt-10">{{(session('locale') == 'es' )?"Desde":"From"}}  <span class="color-black"><b>$100</b></span> </h6>
								</div>
							</a><!-- oflow-hidden -->


                            <a class="oflow-hidden pos-relative mb-20 dplay-block" href="{!!asset('/tour/Boat-transfer-from-Isabela-to-Santa-Cruz-island-(Galapagos)/1759/33')!!}">
								<div class="wh-100x abs-tlr"><img src="{!!asset('/img/booking/all-Isabella-SantaCruz-Big.jpeg')!!}" alt="isabela"></div>
								<div class="ml-120 min-h-100x">
									<h5><b>{{(session('locale') == 'es' )?"Ferry Isabela a Santa Cruz":"Ferry Isabela to Santa Cruz"}}</b></h5>
									<h6 class="color-lite-black pt-10">{{(session('locale') == 'es' )?"Desde":"From"}}<span class="color-black"><b>$33</b></span></h6>
								</div>
							</a><!-- oflow-hidden -->




                        <a class="oflow-hidden pos-relative mb-20 dplay-block" href="{!!asset('/tour/Tintorera-daytrip-(Isabela-island--Galapagos)/2107/38')!!}">
								<div class="wh-100x abs-tlr"><img src="https://www.republica.com/lugar-de-la-vida/wp-content/uploads/sites/34/2015/08/Tintorera.jpg" alt="costa"></div>
								<div class="ml-120 min-h-100x">
									<h5><b>{{(session('locale') == 'es' )?"DayTrip Tintoreras":"DayTrip Tintoreras"}}</b></h5>
									<h6 class="color-lite-black pt-10">by <span class="color-black"><b>iWaNaTrip</b></span> {{(session('locale') == 'es' )?"Desde":"From"}} $50</h6>
								</div>
							</a><!-- oflow-hidden -->




						</div><!-- mtb-50 -->

						<div class="mtb-50 pos-relative">
							<img src="{!!asset('/img/logo_iwana.png')!!}" alt="iwanatrip">
							<div class="abs-tblr bg-layer-7 text-center color-white">
								<div class="dplay-tbl">
									<div class="dplay-tbl-cell">
										<h4><b>{{(session('locale') == 'es' )?"Contáctanos":"Contact us"}}</b></h4>
										<a class="mt-15 color-primary link-brdr-btm-primary" href="{!!asset('/contactos')!!}"><b>info@iwannatrip.com</b></a>
									</div><!-- dplay-tbl-cell -->
								</div><!-- dplay-tbl -->
							</div><!-- abs-tblr -->
						</div><!-- mtb-50 -->
						<!--
						<div class="mtb-50 mb-md-0">
							<h4 class="p-title"><b>NEWSLETTER</b></h4>
							<p class="mb-20">Subscribe to our newsletter to get notification about new updates,
								information, discount, etc..</p>
							<form class="nwsltr-primary-1">
								<input type="text" placeholder="Your email"/>
								<button type="submit"><i class="ion-ios-paperplane"></i></button>
							</form>
						</div>
                        --><!-- mtb-50 -->

					</div><!--  pl-20 -->
				</div><!-- col-md-3 -->

			</div><!-- row -->
		</div><!-- container -->
	</section>













            </div>
        </div>




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

    <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>

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

        $('#lang').click(function(e) {
	   	 e.preventDefault();
	   if("{!!$language!!}" == 'en' ){
			window.location='https://iwannatrip.com/';
	   }
	   else{
			window.location='https://iwannatrip.com/en/';

	   }

    });

     </script>
    {{-- SCRIPTS DEL BOOKING --}}

</body>

</html>