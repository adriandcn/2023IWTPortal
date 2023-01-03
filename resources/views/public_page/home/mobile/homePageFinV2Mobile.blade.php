<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="iWaNaTrip - |{{(session('locale') == 'es' )?' Ecuador Turismo | Ferry Galápagos | Ofertas Ecuador | Reservas online':'  Ecuador Travel | Ferry Galapagos | Ecuador deals |Online reservations'}} ">
    <meta name="keywords" content="iWaNaTrip - |{{(session('locale') == 'es' )?' Ecuador Turismo | Ferry Galápagos | Ofertas Ecuador | Reservas online':'  Ecuador Travel | Ferry Galapagos | Ecuador deals |Online reservations'}} ">
    <meta name="author" content="iWaNaTrip group">
    <meta NAME="robots" CONTENT="all | index | follow">
    <meta name="Revisit" content="3 days">
    <meta name="msvalidate.01" content="421B34D10B14BB413DA96450492A81E9" />

    <title>iWaNaTrip - |{{(session('locale') == 'es' )?" Ecuador Turismo | Ferry Galápagos | Ofertas Ecuador | Reservas online":"  Ecuador Travel |Tourist Places in Ecuador |Ferry Galapagos | Ecuador deals |Online reservations"}}</title>



    <!-- Favicons-->
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

    <!-- GOOGLE WEB FONT -->

	<link rel="preload" as="font" href="{{ asset('/MobileDetails/css/icon_fonts/font/ElegantIcons.woff')}}" type="font/woff2" crossorigin >
	<link rel="preload" as="font" href="{{ asset('/MobileDetails/css/icon_fonts/font/themify.woff?-fvbane')}}" type="font/woff2" crossorigin >
	<link rel="preload" as="font" href="{{ asset('/MobileDetails/css/icon_fonts/font/fontello.woff?32974303')}}" type="font/woff2" crossorigin>


    <!-- BASE CSS -->
    <link href="{{ asset('/MobileDetails/css/bootstrap.min.css')}}" rel="stylesheet" media="none" onload="if(media!=='all')media='all'" >
    <link href="{{ asset('/MobileDetails/css/style.css')}}" rel="stylesheet" media="none" onload="if(media!=='all')media='all'" >
	<link href="{{ asset('/MobileDetails/css/vendors.css')}}" rel="stylesheet"  >


    <link href="{{ asset('/MobileDetails/js/modernizr_slider.js')}}" rel="stylesheet" media="none" onload="if(media!=='all')media='all'" >



    <?php
	$language=session('locale');
    ?>

	@if($language=="en")
    <link rel="canonical" href="https://iwannatrip.com/en/"  />
	<link rel="alternate" href="https://iwannatrip.com/" hreflang="es-ec" />
	<link rel="alternate" href="https://iwannatrip.com/en/" hreflang="en-ec" />
	<link rel="alternate" href="https://iwannatrip.com/" hreflang="es" />
    <link rel="alternate" href="https://iwannatrip.com/en/" hreflang="en" />
	<link rel="alternate" href="https://iwannatrip.com/en/" hreflang="x-default" />



	@else
    <link rel="canonical" href="https://iwannatrip.com/" />
            <link rel="alternate" href="https://iwannatrip.com/en/" hreflang="en-ec" />
            <link rel="alternate" href="https://iwannatrip.com/" hreflang="es-ec" />
			<link rel="alternate" href="https://iwannatrip.com/en/" hreflang="en" />
			<link rel="alternate" href="https://iwannatrip.com/" hreflang="es" />
			<link rel="alternate" href="https://iwannatrip.com/" hreflang="x-default" />
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

<body>

	<div id="page">


  <header class="header menu_fixed" style="padding:15px 15px 25px 15px;!important">

	@include('public_page.reusable.headerMobile')
	</header>
	<!-- /header -->

	<main>
		<section class="slider">
			<div id="slider" class="flexslider">
				<ul class="slides">
					<li>
            <img class="lazy "  src="{{asset('/images/no-image-available.png')}}" data-src="{!!asset('/images/home/santacruz.jpg')!!}" alt="santacruz iwanatrip">

						<div class="meta">
							<h3>{{(session('locale') == 'es' )?"Galápagos, Santa Cruz las islas encantadas":"Galapagos, Santa Cruz The amazing islands"}}</h3>
							<div class="info">

							</div>
							<a href="{!!asset('/DayTrips/Santa Cruz/237')!!}" class="btn_1">{{(session('locale') == 'es' )?"Leer más":"Read more"}}</a>
						</div>
					</li>
					<li>
          <img class="lazy"  src="{{asset('/images/no-image-available.png')}}" data-src="{!!asset('/images/home/isabela.jpg')!!}" alt="galapagos ">
						<div class="meta">
							<h3>{{(session('locale') == 'es' )?"Galápagos, Santa Cruz las islas salvajes":"Galapagos, Isabela The wildest island"}}</h3>
							<div class="info">

							</div>
							<a href="{!!asset('/DayTrips/Isabela/236')!!}" class="btn_1">{{(session('locale') == 'es' )?"Leer más":"Read more"}}</a>
						</div>
					</li>
					<li>

						<img class="lazy"  src="{{asset('/images/no-image-available.png')}}" data-src="{!!asset('/img/home/costamobile.jpg')!!}" alt="costa">
						<div class="meta">
							<h3>{{(session('locale') == 'es' )?"Costa, Ecuador playas y horizontes únicos":"Coast, Ecuador Unique beaches and horizons"}}</h3>
							<div class="info">

							</div>
							<a href="{!!asset('/region?region=1')!!}" class="btn_1">{{(session('locale') == 'es' )?"Leer más":"Read more"}}</a>
						</div>
					</li>
					<li>

						<img class="lazy"  src="{{asset('/images/no-image-available.png')}}" data-src="{!!asset('/img/home/sierramobile.jpg')!!}" alt="andes">
						<div class="meta">
							<h3>{{(session('locale') == 'es' )?"Sierra, Ecuador tradiciones y costumbres":"Andes, Ecuador Traditions and culture"}} </h3>
							<div class="info">

							</div>
							<a href="{!!asset('/region?region=2')!!}" class="btn_1">R{{(session('locale') == 'es' )?"Leer más":"Read more"}}</a>
						</div>
					</li>
					<li>

						<img class="lazy"  src="{{asset('/images/no-image-available.png')}}" data-src="{!!asset('/img/home/amazonmobile.jpg')!!}" alt="amazon iwanatrip">
						<div class="meta">
							<h3>{{(session('locale') == 'es' )?"Amazonas, Ecuador aventuras":"Amazon, Ecuador adventures"}}</h3>
							<div class="info">

							</div>
							<a href="{!!asset('/region?region=3')!!}" class="btn_1">{{(session('locale') == 'es' )?"Leer más":"Read more"}}</a>
						</div>
					</li>
				</ul>
				<div id="icon_drag_mobile"></div>
			</div>

		</section>

		<div class="container container-custom margin_80_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>{{(session('locale') == 'es' )?"Tours populares":"Our Popular Tours"}}</h2>
				<p>{{(session('locale') == 'es' )?"Los mejores tours diseñados para ti":"The best tours designed for you"}}</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<div class="item">
					<div class="box_grid">
						<figure>

							<a href="{!!asset('/es/Ferry-Galapagos')!!}"><img  class="lazy img-fluid"  src="{{asset('/images/no-image-available.png')}}" data-src="{!!asset('/img/booking/rutas-todas-big.jpg')!!}"  alt="galapagos" width="800" height="533"><div class="read_more"><span>{{(session('locale') == 'es' )?"Leer más":"Read more"}}</span></div></a>
							<small>{{(session('locale') == 'es' )?"Transporte":"Transportation"}}</small>
						</figure>
						<div class="wrapper">


							<h3><a href="{!!asset('/es/Ferry-Galapagos')!!}">{{(session('locale') == 'es' )?"Ferry Galápagos":"Ferry Galapagos"}}</a></h3>
							<p>{{(session('locale') == 'es' )?"Encuentra todas las rutas disponibles entre las islas Galáapagos":"Find all the avaliable routes inter island in Galápagos"}}</p>
							<span class="price">{{(session('locale') == 'es' )?"Desde":"From"}} <strong>$33</strong> /per person</span>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 2h 30min</li>
							<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>

							<a href="{!!asset('/DayTripsVolcanes')!!}"><img class="lazy img-fluid"  src="{{asset('/images/no-image-available.png')}}" data-src="https://bookiw.iwannatrip.com/app/web/uploads/44cotopaxi-ecuador-condortrekk-expeditions-ecuador-movil2-1.jpg" alt="iwanatrip cotopaxi" width="800" height="533"><div class="read_more"><span>{{(session('locale') == 'es' )?"Leer más":"Read more"}}</span></div></a>
							<small>{{(session('locale') == 'es' )?"Aventura":"Adventure"}}</small>
						</figure>
						<div class="wrapper">
							<h3><a href="{!!asset('/DayTripsVolcanes')!!}">{{(session('locale') == 'es' )?"Volcanes del Ecuador":"Ecuador Highlands"}}</a></h3>
							<p>{{(session('locale') == 'es' )?"Sabias que el punto más cercano al sol está en Ecuador?":"Did you know that the closest point to the sun is in Ecuador...are you ready ??"}}</p>
							<span class="price">{{(session('locale') == 'es' )?"Desde":"From"}} <strong>$100</strong> /per person</span>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 6h 30min</li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>

							<a href="{!!asset('/trip/Lo-mejor-de-Ecuador/1173')!!}"><img class="lazy img-fluid"  src="{{asset('/images/no-image-available.png')}}" data-src="{!!url(env('AWS_PUBLIC_URL').'images/icon/1173imgmaparuta05xl.jpg')!!}" alt="best of ecuador" width="800" height="533"><div class="read_more"><span>{{(session('locale') == 'es' )?"Leer más":"Read more"}}</span></div></a>
							<small>{{(session('locale') == 'es' )?"Aventura":"Adventure"}}</small>
						</figure>
						<div class="wrapper">
							<h3><a href="{!!asset('/trip/Lo-mejor-de-Ecuador/1173')!!}">{{(session('locale') == 'es' )?"Lo mejor de Ecuador":"Best of Ecuador"}}</a></h3>
							<p>{{(session('locale') == 'es' )?"La esencia de Ecuador reside en probar un poquito de cada región. Siente el frío de las imponentes montañas andinas. Experimenta al máximo la biodiversidad de la Amazonía y su magia.":"Making the most of your visit to Ecuador is about savoring the best of each region. Feel the cold landscapes of the Andes mountains. Finally, witness the beauty of the Eden garden on Hearth"}}</p>
							<span class="price">{{(session('locale') == 'es' )?"Desde":"From"}} <strong>$300</strong> /per person</span>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 15h</li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
        </div>
        		<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>

							<a href="https://iwannatrip.com/tour/Tour-diario-isla-Pinz%C3%B3n---Salida-desde-Santa-Cruz---Gal%C3%A1pagos/74/39"><img class="lazy img-fluid" src="{{asset('/images/no-image-available.png')}}" data-src="https://bookiw.iwannatrip.comImage 2019-01-16 at 11.05.57 PM.jpeg"  alt="iwanatrip aventuras" width="800" height="533"><div class="read_more"><span>{{(session('locale') == 'es' )?"Leer más":"Read more"}}</span></div></a>
							<small>{{(session('locale') == 'es' )?"Aventura":"Adventure"}}</small>
						</figure>
						<div class="wrapper">
							<h3><a href="https://iwannatrip.com/tour/Tour-diario-isla-Pinz%C3%B3n---Salida-desde-Santa-Cruz---Gal%C3%A1pagos/74/39">{{(session('locale') == 'es' )?"DayTrip isla Pinzón":"Daytrip Pinzón island"}}</a></h3>
							<p>{{(session('locale') == 'es' )?"Visita Roca sin Nombre, circunvalación al Islote. Aves marinas (fragatas, piqueros, gaviotas, golondrinas, pájaros tropicales, lobos marinos, etc) ":"Visit Roca Nameless, ring the islet. Seabirds (frigates, boobies, gulls, swallows, tropical birds, sea lions, etc) "}}</p>
							<span class="price">{{(session('locale') == 'es' )?"Desde":"From"}} <strong>$165</strong> /per person</span>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div></li>
            </ul>


					</div>
				</div>
				<!-- /item -->
				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>

							<a href="{!!asset('/trip/La-ruta-Mochilera-en-Ecuador/1122')!!}"><img class="lazy img-fluid"  src="{{asset('/images/no-image-available.png')}}" data-src="{!!url(env('AWS_PUBLIC_URL').'images/icon/1122imgmaparuta01xl.jpg')!!}" alt="iwanatrip aventura" width="800" height="533"><div class="read_more"><span>{{(session('locale') == 'es' )?"Leer más":"Read more"}}</span></div></a>
							<small>{{(session('locale') == 'es' )?"Aventura":"Adventure"}}</small>
						</figure>
						<div class="wrapper">
							<h3><a href="{!!asset('/trip/La-ruta-Mochilera-en-Ecuador/1122')!!}">{{(session('locale') == 'es' )?"Ruta Mochilera":"BackPack trip"}}</a></h3>
							<p>{{(session('locale') == 'es' )?"Tu mochila y un presupuesto de 20 dólares por día te llevarán a explorar los diferentes mundos que ofrece Ecuador sin viajar grandes distancias.":"Your backpack and a $20 a day budget will take you to explore the different worlds that Ecuador offers without traveling long distances. "}}</p>
							<span class="price">{{(session('locale') == 'es' )?"Desde":"From"}} <strong>$300</strong> /per person</span>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 21h 30min</li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
        </div>




				<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>

							<a href="{!!asset('/tour/The-tunnels-daytrip-(Isabela---Galapagos)/2107/37')!!}"><img class="lazy img-fluid"  src="{{asset('/images/no-image-available.png')}}" data-src="https://bookiw.iwannatrip.com/app/web/uploads/3724899869_1736560619710170_7265213013221685588_n.jpg"  alt="iwanatrip galapagos" width="800" height="533"><div class="read_more"><span>{{(session('locale') == 'es' )?"Leer más":"Read more"}}</span></div></a>
							<small>{{(session('locale') == 'es' )?"Aventura":"Adventure"}}</small>
						</figure>
						<div class="wrapper">
							<h3><a href="{!!asset('/tour/The-tunnels-daytrip-(Isabela---Galapagos)/2107/37')!!}">{{(session('locale') == 'es' )?"Snorkeling Túneles Isla Isabela":"Snorkeling tunnels Isabela island"}}</a></h3>
							<p>{{(session('locale') == 'es' )?"El lugar más espectacular de snorkelling en Isabela. Está formado por una serie de túneles por donde bajaba la lava del volcán.":"The most spectacular site for scuba diving in Isabela Island. A series of lava flows have produced unique geological formations tunnels underneath and above the water."}}</p>
							<span class="price">{{(session('locale') == 'es' )?"Desde":"From"}} <strong>$125</strong> /per person</span>
            </div>




						<ul>
							<li><i class="icon_clock_alt"></i> 5h 30min</li>
							<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div></li>
						</ul>
					</div>
				</div>



      	<!-- /item -->
				<div class="item">
					<div class="box_grid">
						<figure>

							<a href="https://www.partner.viator.com/en/82253/Ecuador/d727-ttd?activities=all&activities=all&seoDestination=Ecuador&section=ttd&destinationID=727"><img class="lazy img-fluid" src="{{asset('/images/no-image-available.png')}}" data-src="{!!asset('/img/booking/daytrips.jpg')!!}"  alt="ecuador turismo" width="800" height="533"><div class="read_more"><span>{{(session('locale') == 'es' )?"Leer más":"Read more"}}</span></div></a>
							<small>{{(session('locale') == 'es' )?"Ecuador":"Ecuador"}}</small>
						</figure>
						<div class="wrapper">
							<h3><a href="https://www.partner.viator.com/en/82253/Ecuador/d727-ttd?activities=all&activities=all&seoDestination=Ecuador&section=ttd&destinationID=727">{{(session('locale') == 'es' )?"Ecuador turismo":"Toursim Ecuador"}}</a></h3>
							<p>{{(session('locale') == 'es' )?"Descubre las mejores ofertas de tours en Ecuador explora con seguridad y confianza.":"Get the best tour deals in Ecuador, explore with confidence and enjoy all the views and adventures."}}</p>
							<span class="price">{{(session('locale') == 'es' )?"Desde":"From"}} <strong>$25</strong> /per person</span>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 21h 30min</li>
							<li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
        </div>

        </div>



				<!-- /item -->
			<!-- /carousel -->
			<p class="btn_home_align"><a href="{!!asset('/DayTrips')!!}" class="btn_1 rounded">{{(session('locale') == 'es' )?"Ver todos los Tours":"View all Tours"}}</a></p>
			<hr class="large">
		</div>
		<!-- /container -->

		<div class="container container-custom margin_30_95">
			<section class="add_bottom_45">
				<div class="main_title_3">
					<span><em></em></span>
					<h2>{{(session('locale') == 'es' )?"Popular en iWaNaTrip":"Popular in iWaNaTrip"}}</h2>

				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{!!asset('/es/El-Épico-Sincholagua/2211')!!}" class="grid_item">
							<figure>
								<div class="score"><strong>8.9</strong></div>
								<img class="lazy img-fluid" src="{{asset('/images/no-image-available.png')}}" data-src="{!!url(env('AWS_PUBLIC_URL').'images/fullsize/22115.jpg')!!}" alt="iwanatrip sincholagua">
								<div class="info">
                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
									<h3>{{(session('locale') == 'es' )?"El Épico Sincholagua":"The Epic Sincholagua"}}</h3>
								</div>
							</figure>
						</a>
					</div>
          <!-- /grid_item -->

          <div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{!!asset('/es/El-Altar-y-su-magia/2212')!!}" class="grid_item">
							<figure>
								<div class="score"><strong>8.9</strong></div>
								<img class="lazy img-fluid" src="{{asset('/images/no-image-available.png')}}" data-src="{!!url(env('AWS_PUBLIC_URL').'images/fullsize/22123.jpg')!!}"  alt="el altar iwanatrip">
								<div class="info">
								<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
									<h3>{{(session('locale') == 'es' )?"El Altar y su mágia":"The magic Altar"}}</h3>
								</div>
							</figure>
						</a>
					</div>
          <!-- /grid_item -->

					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{!!asset('/es/Quito--la-puerta-para-viajar-en-Ecuador/286')!!}" class="grid_item">
							<figure>
								<div class="score"><strong>8.6</strong></div>
								<img class="lazy img-fluid" src="{{asset('/images/no-image-available.png')}}" data-src="{!!url(env('AWS_PUBLIC_URL').'images/fullsize/286toursquitoimagen2.jpg')!!}" alt="quito iwanatrip">
								<div class="info">
									<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
									<h3>{{(session('locale') == 'es' )?"Quito hitoria y cultura":"Quito history and culture"}}</h3>
								</div>
							</figure>
						</a>
          </div>

					<!-- /grid_item -->
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{!!asset('/es/Mirador-de-Indichuris/364')!!}" class="grid_item">
							<figure>
								<div class="score"><strong>7.0</strong></div>
								<img class="lazy img-fluid" src="{{asset('/images/no-image-available.png')}}" data-src="{!!url(env('AWS_PUBLIC_URL').'images/fullsize/3641507887411560180478220411675480156571472143n.jpg')!!}" alt="indichuris iwanatrip">
								<div class="info">
									<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
									<h3>{{(session('locale') == 'es' )?"Mirador Indichuris":"Indichuris lookup"}}</h3>
								</div>
							</figure>
						</a>
          </div>


				</div>
				<!-- /row -->
				<a href="{!!asset('/DayTrips')!!}"><strong>{{(session('locale') == 'es' )?"Ver Más":"View More"}} <i class="arrow_carrot-right"></i></strong></a>
			</section>
			<!-- /section -->



			<div class="banner mb-0">
				<div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
					<div>
						<small>{{(session('locale') == 'es' )?"Aventura":"Adventure"}}</small>
						<h3>{{(session('locale') == 'es' )?"La perfecta":"Your perfect"}}<br>{{(session('locale') == 'es' )?"Experiencia de aventuras":"Adventure Experience"}}</h3>
						<p>{{(session('locale') == 'es' )?"Tours y Actividades":"Activities and Tours"}}</p>
						<a href="https://www.partner.viator.com/en/82253/Ecuador/d727-ttd?activities=all&activities=all&seoDestination=Ecuador&section=ttd&destinationID=727" class="btn_1">{{(session('locale') == 'es' )?"Ver Más":"View More"}}</a>
					</div>
				</div>
				<!-- /wrapper -->
			</div>
			<!-- /banner -->

		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h3>{{(session('locale') == 'es' )?"Noticias Recientes":"Recent News"}}</h3>
					<p>{{(session('locale') == 'es' )?"Informate sobre las noticias más recientes del turismo en Ecuador":"Get informed about the recent news about tourismn Ecuador"}}</p>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<a class="box_news" href="https://www.gobiernogalapagos.gob.ec/toda-persona-que-ingrese-a-galapagos-sera-sometida-a-evaluacion-medica-para-prevenir-el-covid-19/">
							<figure><img class="lazy img-fluid" src="{{asset('/images/no-image-available.png')}}" data-src="https://www.gobiernogalapagos.gob.ec/wp-content/uploads/2020/03/acciones-COVID-19.jpg" alt="noticias2">
								<figcaption><strong>04</strong>Apr</figcaption>
							</figure>
							<ul>

								<li>04.20.2020</li>
							</ul>
							<h4>{{(session('locale') == 'es' )?"Prevención de Covid19 en Galápagos":"Covid 19 prevention in Galapagos"}}</h4>
							<p>Puerto Baquerizo Moreno, Galápagos. –  Las personas que deseen ingresar a las Islas Galápagos, a través de puertos y aeropuertos, serán evaluadas por personal médico del Ministerio de Salud Pública (MSP)</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="https://www.ecogal.aero/informacion-para-pasajeros">
							<figure><img class="lazy img-fluid" src="{{asset('/images/no-image-available.png')}}" data-src="https://quetedenpasaporte.com/wp-content/uploads/2018/11/Infografia-Tramites-Galapagos-600x600.jpg" alt="noticias iwanatrip">
								<figcaption><strong>1</strong>Ago</figcaption>
							</figure>
							<ul>

								<li>01.08.2020</li>
							</ul>
							<h4>{{(session('locale') == 'es' )?"Información para viajeros":"Information for travelers"}}</h4>
							<p>Todo pasajero que desee viajar a Galápagos debe cumplir con los requerimientos establecidos en el Protocolo de reapertura </p>
						</a>
					</div>
					<!-- /box_news -->

				</div>
				<!-- /row -->
				<p class="btn_home_align"><a href="https://www.turismo.gob.ec/" class="btn_1 rounded">{{(session('locale') == 'es' )?"Ver Más":"View More"}}</a></p>
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->


		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>{{(session('locale') == 'es' )?"Disfruta un GRAN viaje con nosotros":"Enjoy a GREAT travel with us"}}</h3>
							<p>info@iwannatrip.com </p>
							<a href="#0" class="btn_1 rounded">{{(session('locale') == 'es' )?"Contáctanos":"Contact US"}}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->

  @include('public_page.reusable.footerMobile')
	<!--/footer-->
	</div>
	<!-- page -->



	<div id="toTop"></div><!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
    <script src="{{ asset('/MobileDetails/js/common_scripts.js')}}"></script>
    <script src="{{ asset('/MobileDetails/js/main.js')}}"></script>
	<script src="{{ asset('/MobileDetails/assets/validate.js')}}"></script>

	<!-- FlexSlider -->
	<script defer src="{{ asset('/MobileDetails/js/jquery.flexslider.js')}}"></script>
	<script>
		$(window).on('load', function(){
			'use strict';
			$('#carousel_slider').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				itemWidth: 280,
				itemMargin: 25,
				asNavFor: '#slider'
			});
			$('#slider').flexslider({
				animation: "fade",
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				sync: "#carousel_slider",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});





document.addEventListener("DOMContentLoaded", function() {
  var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

  if ("IntersectionObserver" in window) {
    let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          let lazyImage = entry.target;
          lazyImage.src = lazyImage.dataset.src;
          //lazyImage.srcset = lazyImage.dataset.srcset;
          lazyImage.classList.remove("lazy");
          lazyImageObserver.unobserve(lazyImage);
        }
      });
    });

    lazyImages.forEach(function(lazyImage) {
      lazyImageObserver.observe(lazyImage);
    });
  } else {
    // Possibly fall back to a more compatible method here
  }
});


document.addEventListener("DOMContentLoaded", function() {
  let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
  let active = false;

  const lazyLoad = function() {
    if (active === false) {
      active = true;

      setTimeout(function() {
        lazyImages.forEach(function(lazyImage) {
          if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
            lazyImage.src = lazyImage.dataset.src;
            //lazyImage.srcset = lazyImage.dataset.srcset;
            lazyImage.classList.remove("lazy");

            lazyImages = lazyImages.filter(function(image) {
              return image !== lazyImage;
            });

            if (lazyImages.length === 0) {
              document.removeEventListener("scroll", lazyLoad);
              window.removeEventListener("resize", lazyLoad);
              window.removeEventListener("orientationchange", lazyLoad);
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

	</script>

</body>
</html>