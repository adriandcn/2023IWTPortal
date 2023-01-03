<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
    <head>
        <!-- Page Title -->
        <title>{{(session('locale') == 'es' )?$atraccion->nombre_servicio:$atraccion->nombre_servicio_eng}}| iWaNaTrip</title>


        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <meta name="description" content="{{(session('locale') == 'es' )?$atraccion->nombre_servicio:$atraccion->nombre_servicio_eng}}| iWaNaTrip">

        <meta name="author" content="iWaNaTrip team">
        <meta property="og:title" content="{{(session('locale') == 'es' )?$atraccion->nombre_servicio:$atraccion->nombre_servicio_eng}}" />
        <meta property="og:description" content="{{(session('locale') == 'es' )?$atraccion->nombre_servicio:$atraccion->nombre_servicio_eng}}. | iWaNaTrip" />
        <meta property="og:image" content="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/1122imgmaparuta01xl.jpg') !!}" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Theme Styles -->

        <link rel="apple-touch-icon" href="{{ url(env('AWS_PUBLIC_URL').'images/img/60x60_logo_iwana.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ url(env('AWS_PUBLIC_URL').'images/img/76x76logo_iwana.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ url(env('AWS_PUBLIC_URL').'images/img/120x120logo_iwana.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url(env('AWS_PUBLIC_URL').'images/img/180x180logo_iwana.png')}}">
        <link rel="icon" sizes="180x180" href="{{ url(env('AWS_PUBLIC_URL').'images/img/180x180logo_iwana.png')}}">
        <link rel="shortcut icon" href="{{ asset('public/favicon.png')}}" />
        <link rel="apple-touch-icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.png') }}" />
        <link rel="stylesheet" href="{{ asset('public_components/css/bootstrap.min.css')}}"media="none" onload="if(media!=='all')media='all'" />
        <link rel="stylesheet" href="{{ asset('public_components/css/font-awesome.min.css')}}"media="none" onload="if(media!=='all')media='all'" />
        <link rel="stylesheet" href="{{ asset('public_components/css/letras.css')}}"media="none" onload="if(media!=='all')media='all'" />
        <link rel="stylesheet" href="{{ asset('public_components/css/animate.min.css')}}"media="none" onload="if(media!=='all')media='all'" />
        <link rel="stylesheet" type="text/css" href="{{ asset('public_components/components/owl-carousel/owl.carousel.css')}}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />



        <?php
	$language=session('locale');
    ?>
    @if($language=="en")
    <link rel="canonical" href="https://iwannatrip.com/en/itinerary/Galapagos/1170" hreflang="en-us" />
    <link rel="alternate" href="https://iwannatrip.com/es/itinerario/Galapagos/1170" hreflang="es-ec" />
    <link rel="alternate" href="https://iwannatrip.com/en/itinerary/Galapagos/1170" hreflang="en-us" />

	@else
    <link rel="canonical" href="https://iwannatrip.com/es/itinerario/Galapagos/1170" hreflang="es-ec" />
            <link rel="alternate" href="https://iwannatrip.com/en/itinerary/Galapagos/1170" hreflang="en-us" />
            <link rel="alternate" href="https://iwannatrip.com/es/itinerario/Galapagos/1170" hreflang="es-ec" />

    @endif


        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="{{ asset('public_components/components/magnific-popup/magnific-popup.css')}}"media="none" onload="if(media!=='all')media='all'" />
        {!!HTML::script('js/sliderTop/jssor.slider.mini.js') !!}
        <!-- Main Style -->
        <link id="main-style" rel="stylesheet" href="{{ asset('public_components/css/style.css')}}"media="none" onload="if(media!=='all')media='all'" />
        <!-- Updated Styles -->
        <link rel="stylesheet" href="{{ asset('public_components/css/updates.css')}}"media="none" onload="if(media!=='all')media='all'" />

        <!-- Custom Styles -->
        <link rel="stylesheet" href="{{ asset('public_components/css/custom.css')}}"media="none" onload="if(media!=='all')media='all'" />

        <!-- Responsive Styles -->
        <link rel="stylesheet" href="{{ asset('public_components/css/responsive.css')}}"media="none" onload="if(media!=='all')media='all'" />

        <!-- CSS for IE -->
        <!--[if lte IE 9]>
            <link rel="stylesheet" type="text/css" href="{{ asset('public_components/css/ie.css')}}" />
        <![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->

                <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85546019-1', 'auto');
  ga('send', 'pageview');

</script>

<?php
	$language=session('locale');
    ?>
    </head>

<body>
    <div id="page-wrapper">
         <header id="header"  class="header-color-white" >
                @include('public_page.reusable.header')
            </header>
        @include('public_page.reusable.banner', ['titulo' =>$atraccion->nombre_servicio])


            <ul class="breadcrumbs">
                <li><a href="{!!asset('/')!!}"  onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1')}}</a></li>
                <li class="active">{!!$atraccion->nombre_servicio!!}

                </li>
            </ul>
        </div>

        <section id="content">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-md-8">
                        <div class="blog-posts">
                            <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">1</span>

                                </div>

                                    <div class="heading-box col-md-10 col-lg-8">
                    <h2 class="box-title"> <em class="skin-color">{!!$atraccion->nombre_servicio!!}</em> </h2>

                </div>
                                <div class="post-image">
                                    <div class="image-container">



                                          <div id="sync1" class="owl-carousel images">
                                        <div class="post-slider style3 owl-carousel box">

                                            <a href="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/galapagositiner.jpg')!!}" class="soap-mfp-popup">
                                                <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/galapagositiner.jpg')!!}" alt="Galapagos - iWaNaTrip.com">
                                    </div></div>

                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-action">

                                                                 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

      <div class="fb-share-button" data-href="{!!asset('/trip')!!}/{!!$atraccion->nombre_servicio!!}/{!!$atraccion->id!!}" data-layout="button_count"></div>

                                    </div>
                                    <h2 class="entry-title"><a href="#">{!!$atraccion->nombre_servicio!!}</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category"> <a href="#">8 dias </a></span>

                                    </div>

									@if(session('locale') == 'es' )
                                    <?php $str=htmlspecialchars(html_entity_decode(nl2br(e(("Galápagos es el paraíso en la Tierra. Imagina la belleza de una isla del Pacífico con aguas cristalinas color turquesa y paisajes volcánicos alucinantes. Caminar entre leones marinos, iguanas perezosas, y tortugas gigantes es un sueño hecho realidad para los amantes de la naturaleza. Sin lugar a dudas, lo que hace único a estas islas es  la explosión de vida salvaje endémica que invade las islas. Comúnmente se cree que es muy caro viajar a Galápagos. Sin embargo, no es del todo cierto. Tomar un full tour en un crucero es insanamente costoso pero si vas por tu cuenta y planificas en detalle, la diferencia económicamente será notable."))))) ?>
                                    <?php $str2=htmlspecialchars(html_entity_decode(nl2br(e(("El principal gasto es el vuelo hacia las islas que para extranjeros cuesta alrededor de $480 regreso desde Quito. Los Ecuatorianos tienen otra tarifa ($280) y los colonos de la isla pagan aún mucho menos ($200). Es más barato tomar el vuelo desde Guayaquil. El segundo gasto es la entrada al Parque Nacional Galápagos. Para menores de 2 años es gratis, para turistas cuesta ($100, $50<12años) para Latinoamericanos ($50, $25<12años) y para Ecuatorianos ($6, $3<12años). Una vez en las islas el costo de vida es mucho más manejable. Hay hospedaje desde $30 por pareja, alimentación $5 por comida y los taxis internos cuestan $1.5 dentro de la ciudad. Los ferrys entre islas cuestan $30. Las islas más pobladas tienen ATMs, sin embargo, por pagar con tarjeta de crédito te cargarán un 28% extra y muy pocos establecimientos aceptan tarjetas. Por ello es mejor llevar efectivo. "))))) ?>
                                    <?php $str3=htmlspecialchars(html_entity_decode(nl2br(e(("Tranquilamente puedes pasar más de una semana explorando gratuitamente los fascinantes paisajes de Galápagos. Sin embargo, las más espectaculares atracciones se encuentran lejos de las zonas pobladas. Para ello existen excursiones que salen diariamente hacia estos puntos. Los precios oscilan entre $35 hasta los $200, dependiendo de la actividad y la distancia recorrida. En resumen, para disfrutar al máximo Galápagos se requiere de al menos $80 diarios y entre 7 y 15 dias. La mayoría de gente lo hace en 6-9 dias. No es aconsejable ir por menos de 5 dias."))))) ?>
                                    @else
									<?php $str=utf8_encode("Galapagos Islands are the Eden garden on Earth. Imagine a beautiful pacific island, with turquoise crystal waters and astonishing volcanic landscapes. Walking among playful sea lions, idle marine iguanas and fearless giant turtles are certainly a dream come true for nature lovers. Undoubtedly,  what it makes these islands so unique is that they are bursting with incredible endemic wildlife. It's believed that a trip to the islands is very costly. Purchasing a 7-day cruise can be insanely expensive, but if you plan it on your own, you might be surprised to see the difference.") ?>
                                    <?php $str2=utf8_encode("The main expense in this trip is the flight to the islands. It costs around $480 return from Quito. Ecuadorians can enjoy a lower fee ($280) while this is even lower for locals ($200). Foreigners cannot benefit of any discount from the airline.  It's cheaper to fly from Guayaquil. The second main expense is the entry ticket to Galapagos National Park. Babies under 2 are free of charge. International tourists pay ($100, $50<12 years) Latin- Americans ($50, $25<12 years) and Ecuadorians ($6, $3<12 years). Once the tourist arrives to the islands the cost of life is a lot more manageable. Accommodation starts from $30 per couple, a full meal is $5 and taxies charge a flat rate of $1.5 within the city. Ferries between the islands cost $30. ATM machines are available in the most populated islands. Credit card payments entail a 28% commission and very few establishments accept credit cards. It's recommended to withdraw cash before you reach the islands to avoid these high fees.  ") ?>
                                    <?php $str3=utf8_encode("It's quite easy to spend more than a week exploring the fascinating landscapes of Galapagos without spending a cent. However, some of the most spectacular attractions are away from the villages. Daytrips work daily and can take you to these fantastic destinations. Prices range from $35 to $200, depending on the activity and the trip. To sum up, to make the most of your experience in Galapagos, it's required to spend 7 to 15 days and at least $80 a day. Most people dedicate 6 to 9 days. It�s not advisable to spend less than 5 days. ") ?>


									@endif
                                    <p>{!!$str!!}</p>
                                    <br>
                                    <p>{!!$str2!!}</p>
                                    <br>
                                    <p>{!!$str3!!}</p>
                                    </div>
                            </article>
                            <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">1</span>
                                    <span class="month">parada</span>
                                </div>
                                <div class="post-image">
                                    <div class="image-container">

                                        <a href="https://iwannatrip.com/detalle/ISLA-SANTA-CRUZ/226"><img src="{{ asset('public/images/fullsize/226160628gv2050plazasurpanoldljpg4288x2848q85cropupscale.jpg')}}" alt="Santa Cruz"></a>
                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/ISLA-SANTA-CRUZ/226">Santa Cruz</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
									@if(session('locale') == 'es' )
                                      <?php $str4=htmlspecialchars(html_entity_decode(nl2br(e(("Viaje Quito-Santa Cruz. Llegada al hotel alrededor de las 12pm. Por la tarde visita a La estación Charles Darwin. Comprar los tickets de la lancha para ir a Isabela para la mañana del siguiente día. "))))) ?>
                                  <?php $str44=htmlspecialchars(html_entity_decode(nl2br(e((" Bookea los tikets aquí"))))) ?>
								  @else
								      <?php $str4=utf8_encode(" Flight Quito - Santa Cruz. Arrival to the hotel at midday. Visit the Charles Darwin Center in the afternoon.  Buy the boat tickets to Isabela Island for the next morning. ") ?>
									<?php $str44=utf8_encode(" Book the tikets here") ?>

								  @endif
                                    <p>{!!$str4!!} </p>
									    <a href="https://iwannatrip.com/tour/BOAT%20FROM%20SANTA%20CRUZ%20TO%20ISABELA/1759/34">{!!$str44!!} </a>

                                  </div>
                            </article>

                            <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">2</span>
                                    <span class="month">parada</span>
                                </div>
                                <div class="post-image">
                                    <div class="post-slider style3 owl-carousel">

                                        <a href="https://iwannatrip.com/detalle/Muro-de-las-L%C3%A1grimas/256"><img src="{{ asset('public/images/fullsize/256oba53508galapagos-262-muro-de-las-lagrimas.jpg')}}" alt="Muro de las lagrimas"></a>
                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Muro-de-las-L%C3%A1grimas/256">Isabela</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
                                   @if(session('locale') == 'es' )
								   <?php $str5=htmlspecialchars(html_entity_decode(nl2br(e(("La lancha a Isabela sale a las 7am. Llegada a la isla alrededor de las 9:30am. A la mayoría de los hoteles se puede ir caminando a menos que el equipaje sea muy pesado. Realizar el check-in en el hotel. Visita al histórico Muro de las Lagrimas en bicicleta (alquiler diario 5$) o a pie (12km ida y vuelta, 4 horas). En el camino, hay numerosos lugares para realizar pequeñas paradas como playas llenas de iguanas marinas y miradores. Es verdaderamente un camino precioso para recorrer. Abre tus ojos, tal vez encuentres una tortuga gigante paseándo por el bosque. "))))) ?>
                                  @else
								   <?php $str5=utf8_encode("The boat to Isabela leaves at 7.00am and it takes 2 and a half hours to arrive. Most hotels are walking distance from the port unless you are carrying heavy luggage. Check-in at the hotel. Visit the historic Muro de las Lagrimas (The Wall of Tears) by bike (rent $5/ day) or by foot (12km return, 4 hours). Along the way, there are numerous stopping points such as lookouts and little beaches replete with marine iguanas. It�s a truly beautiful pathway. Keep your eyes open, you might sight a giant turtle rambling in the forest.") ?>


								  @endif

                                    <p>{!!$str5!!} </p>


                                   </div>
                            </article>

                            <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">3</span>
                                    <span class="month">parada</span>
                                </div>
                                <div class="post-image">
                                    <div class="post-slider style3 owl-carousel">
                                        <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/252itinerary-header.jpg')!!}" alt="Concha y Perla">

                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Concha-de-Perla/252">Concha y Perla</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
                                    @if(session('locale') == 'es' )
									<?php $str6=htmlspecialchars(html_entity_decode(nl2br(e((" Salida a Concha y Perla. Este accesible lugar para hacer snorkel, al lado del puerto, es perfecto para nadar con focas, tortugas y otros tipos de animales marinos. El equipo de snorkel se puede alquilar en el hotel o en las tiendas de Isabela. Es aconsejable ir en marea baja ya que en marea alta hay mucha corriente. Es preferible también ir cuando hay un fuerte sol ya que las focas van a refrescarse allá y es cuando se puede nadar con ellas. Visita a la Galapaguera, el criadero de tortugas de Isabela. En dirección al Muro de las Lágrimas, después del último hotel virar a la derecha.  Ahí está el camino a la Galapaguera. El sendero que va hacia la Galapaguera está construido sobre humedales. Toma unos minutos para observar la abundante colonia de aves que habita este paraje natural. Los fotógrafos quedaran hipnotizados con la belleza del flamenco salvaje.  Continua recto y en 30 minutos alcanzarás el centro de crianza de tortugas. Curiosamente, aquí se encuentran especies de todas las islas. Comprar el tour a Sierra Negra y a los Túneles ($110)."))))) ?>
                                  @else
								  <?php $str6=utf8_encode("Go snorkeling to 'Concha y Perla'. This accessible snorkel point, nearby the port, is the perfect place to encounter seals, turtles and other marine animals. Snorkel gear is available to rent in hotels and shops.  It's recommended to go during low tide to avoid strong currents. Note that seals are often seen swimming in 'Concha y Perla' in very sunny days. Visit the Galapaguera, Isabela's turtle breeding center. Follow the same direction as to El Muro de las Lagrimas, after you've passed the last hotel, turn right. There it is the pathway that will lead you to La Galapaguera. This pathway is built on a wetland. Along the side way there is the 'Laguna Salinas'. Take a few minutes to observe the abundant bird life that inhabits this natural spot.  Bird photographers will be mesmerized by the beauty of the wild flamingo. Continue straight, and you will reach the breeding center in 30 minutes. Amazingly, here you'll come across turtle species from every Galapago Island. Buy the tour for Sierra Negra and Los Tuneles ($110).") ?>

								  @endif

                                    <p>{!!$str6!!} </p>


                                     </div>
                            </article>

                              <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">4</span>
                                    <span class="month">parada</span>
                                </div>
                                <div class="post-image">
                                    <div class="post-slider style3 owl-carousel">
                                        <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/257galapagos-sierra-negra-volcano-16-of-72-june-15.jpg')!!}" alt="Volcán Sierra Negra">

                                    </div>
                                </div>
                                <div class="post-content">
                                   <?php $str17=htmlspecialchars(html_entity_decode(nl2br(e(("Volcán Sierra Negra"))))) ?>
                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Volc%C3%A1n-Sierra-Negra/257">{!!$str17!!}</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
									@if(session('locale') == 'es' )
                                    <?php $str7=htmlspecialchars(html_entity_decode(nl2br(e(("Tour al Volcán Sierra Negra ($35, $25 extra a caballo). Una caminata hacia los cráteres del volcán desde donde se podrá apreciar las islas colindantes."))))) ?>

								  @else
								    <?php $str7=utf8_encode("Tour to Sierra Negra Volcano ($35, $25 extra on horseback). It's a walk to the volcano crater where you'll be able to observe the adjoining islands.") ?>


								  @endif

                                    <p>{!!$str7!!} </p>


                                 </div>
                            </article>

                                <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">5</span>
                                    <span class="month">parada</span>
                                </div>
                                <div class="post-image">
                                    <div class="post-slider style3 owl-carousel">
                                        <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/258lavatube.jpg')!!}" alt="Los Tuneles">

                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Los-T%C3%BAneles-de-Isabela/258">Los Tuneles </a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>


                                    </div>
									@if(session('locale') == 'es' )
                                    <?php $str8=htmlspecialchars(html_entity_decode(nl2br(e((" Tomar el tour a Los Túneles ($110). Probablemente este es uno de los mejores tours de Galápagos y solo hay 100 cupos diarios. Les recogerán en el hotel y les llevarán en lancha a un área donde harán snorker por varias horas. Verán tiburones, tortugas marinas, mantas, caballos de mar, lobos marinos y una gran variedad de peces endemicos. Las agencias suelen alquilar el traje térmico por $5 extras ya que se pasa varias horas de snorker."))))) ?>

								  @else
								  <?php $str8=utf8_encode("Tour to 'Los Túneles' (The Tunnels). This is probably one of the best tours in Galapagos, and there are only 100 quotas per day. You'll be picked up at the hotel in the morning and taken by boat to a spot to snorkel for a few hours. You'll be able to sight sharks, marine turtles, stingrays, seahorses, seals and a wide variety of endemic fishes. The agencies usually surcharge a $5 fee for the wetsuit") ?>

								  @endif
                                    <p>{!!$str8!!} </p>


                                 </div>
                            </article>


                               <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">6</span>
                                    <span class="month">parada</span>
                                </div>
                                <div class="post-image">
                                    <div class="post-slider style3 owl-carousel">
                                        <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/227the-galapagos-islands-santa-cruz-island-tortuga-bay.jpg')!!}" alt="Tortuga Bay">

                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/PLAYA-TORTUGA-BAY/227">Tortuga Bay </a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
									@if(session('locale') == 'es' )
                                    <?php $str9=htmlspecialchars(html_entity_decode(nl2br(e(("Lancha de Isabela a Santa Cruz. Camina hasta 'Tortuga Bay', la más famosa y hermosa de las plazas de Santa Cruz. Tus fotos no harán justicia a su belleza. Toma 40 minutos llegar andando hasta la plaza. Hay que llegar hasta un parque y atravesarlo por un sendero marcado. Ten en cuenta que el parque esta cercado y tiene un horario de apertura. Si el tiempo lo permite, camina a 'Las Grietas', unas piscinas naturales. Finalmente visitar la finca 'el Chato' ($3 por persona). En este lugar las tortugas gigantes viven en su hábitat natural. Para llegar a la finca se puede alquilar una camioneta que por dos horas les cobrará alrededor de $30 y les llevará y esperará por ustedes. La finca queda a mas o menos 12Km o 20 min de la ciudad.Comprar Tour a la Isla de Bartolom� ($180)"))))) ?>
                                  @else
								     <?php $str9=utf8_encode("Return to Santa Cruz by boat. Walk to 'Tortuga Bay', the most famous and beautiful beach in Santa Cruz. Your pictures won't make justice. It takes 40 min each way. You need to arrive to a park and follow a pathway to the beach. Note that the park is fenced and there are opening hours. If time permits, walk to 'Las Grietas' ( The Clefs), these are natural pools. You need to catch a water taxi ($1) and then follow the pathway. It takes around 40 min walk each way.  Finally, visit the country house of 'El Chato' ($3 per person).  In this setting, giant turtles live in their natural habitat. It's possible to rent a van and a driver for 2 hours that will wait for you and take you back for $30. The country house is 12km away from town (20 min) Buy the tour to Bartolome island ($180)") ?>

								  @endif
                                    <p>{!!$str9!!} </p>


                                 </div>
                            </article>


                            <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">7-8</span>
                                    <span class="month">parada</span>
                                </div>
                                <div class="post-image">
                                    <div class="post-slider style3 owl-carousel">
                                        <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/286toursquitoimagen2.jpg')!!}" alt="Quito">
                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Quito/286">Regreso a Quito </a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
										@if(session('locale') == 'es' )
                                    <?php $str10=htmlspecialchars(html_entity_decode(nl2br(e(("El tour los recogen y los devuelve al hotel. Este es sin duda el mejor tour ya que incluye buceo y te dan todo el equipo para dos inmersiones. Regreso a Quito. Hay buses de Santa Cruz a baltra desde las 7am."))))) ?>

								  @else
								  <?php $str10=utf8_encode("This fantastic tour includes 2 dives and all the equipment that you need. Return to Quito. Buses Santa Cruz-Baltra operate from 7am.") ?>

								  @endif
                                    <p>{!!$str10!!} </p>


                                 </div>
                            </article>


						    <article class="post post-classic">

                                <div class="post-image">
                                    <div class="post-slider style3 owl-carousel">
                                        <img src="https://bookiw.iwannatrip.com161632.jpg" alt="transporte iwanatrip">

                                    </div>
                                </div>
                                <div class="post-content">
                                 @if(session('locale') == 'es' )
                                    <h2 class="entry-title"><a href="https://iwannatrip.com/tourList">TRANSPORTE DENTRO DE LAS ISLAS</a></h2>
									@else
									<h2 class="entry-title"><a href="https://iwannatrip.com/tourList">TRANSPORT INSIDE THE ISLANDS</a></h2>
									@endif
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>


									@if(session('locale') == 'es' )
                                    <h2 class="entry-title"><a href="https://iwannatrip.com/tourList">BALTRA AIRPORT - SANTA CRUZ</a></h2>
									@else
									<h2 class="entry-title"><a href="https://iwannatrip.com/tourList">BALTRA AIRPORT - SANTA CRUZ</a></h2>
									@endif

										@if(session('locale') == 'es' )
                                    <?php $str10=htmlspecialchars(html_entity_decode(nl2br(e(("Desde Baltra (aeropuerto) hay un bus gratuito que te lleva al bote para cruzar a Santa Cruz. El bote cuesta $1 por persona y se demora 5 minutos en cruzar hasta la otra isla. Una vez en Santa Cruz, hay un bus que cuesta $2 por persona que les lleva a la ciudad. También pueden tomar un taxi (camioneta blanca) la cual cuesta $18 hasta la ciudad. Se demora 40 minutos. De ahí pueden ir al hotel que es muy cercano caminando o tomar un taxi (camioneta blanca) que cuesta  $1.5 a cualquier lugar de la ciudad. "))))) ?>

								  @else
								  <?php $str10=utf8_encode("From Baltra airport there is a free bus to the ferry that goes to Santa Cruz. The boat cost $1 per person and it takes 5 minutes to cross to the other island. Once you are in Santa Cruz, there is a bus that costs 2$ per person that takes you to the city. You can also catch a taxi (white van) and this cost $18 to town. It takes 40 min. You can then walk to the hostel or get another taxi (white van) that charges a flat rate of $1.5 to any place in the city.") ?>

								  @endif
                                    <p>{!!$str10!!} </p>


                                 </div>
                            </article>



							 <article class="post post-classic">

                                <div class="post-content">


									@if(session('locale') == 'es' )
                                    <h2 class="entry-title"><a href="https://iwannatrip.com/tourList">SANTA CRUZ - ISABELA ($30)</a></h2>
									@else
									<h2 class="entry-title"><a href="https://iwannatrip.com/tourList">SANTA CRUZ - ISABELA ($30)</a></h2>
									@endif

										@if(session('locale') == 'es' )
                                    <?php $str10=htmlspecialchars(html_entity_decode(nl2br(e(("Existen las lanchas que son para más  o menos 24 personas una sale a las 7am y la otra a las 2pm. Cuestan $30 por persona por viaje. Los tickets se venden en cualquier hotel o agencia de viajes en Santa Cruz o Isabela y se pueden comprar con anticipación. Para regresar de Isabela a Santa Cruz cuesta igual $30 y salen a las  6am y 3pm. "))))) ?>

								  @else
								  <?php $str10=utf8_encode("Boats with capacity for 24 people are run twice a day in both islands: Santa-Cruz-Isabela (7am & 2pm) and Isabela-Santa Cruz (6am & 3pm).  It cost $30 per person per trip. Tickets are sold at any travel agency or hotel in Santa Cruz or Isabela and it's possible to buy them in advance. ") ?>

								  @endif
                                    <p>{!!$str10!!} </p>


                                 </div>
                            </article>





							 <article class="post post-classic">

                                <div class="post-content">


									@if(session('locale') == 'es' )
                                    <h2 class="entry-title"><a href="https://iwannatrip.com/tourList">SAN CRISTOBAL - SANTA CRUZ ($30)</a></h2>
									@else
									<h2 class="entry-title"><a href="https://iwannatrip.com/tourList">SAN CRISTOBAL - SANTA CRUZ ($30)</a></h2>
									@endif

										@if(session('locale') == 'es' )
                                    <?php $str10=htmlspecialchars(html_entity_decode(nl2br(e(("Igualmente las lanchas son de alrededor de 24 personas. Se compran los tickets en cualquier hotel o agencia de viajes. Las lanchas salen de San Cristóbal 8am y 2pm y de regreso 7:30am 2pm."))))) ?>

								  @else
								  <?php $str10=utf8_encode("Boats covering this journey operate exactly in the same way as Santa Cruz- Isabella in terms of price, frequency, capacity and distribution of tickets. Timetables are as follows: San Cristobal- Santa Cruz (8am & 2pm) and Santa Cruz-San Cristobal (7. 30am & 2pm).") ?>

								  @endif
                                    <p>{!!$str10!!} </p>


                                 </div>
                            </article>


							<article class="post post-classic">

                                <div class="post-content">


									@if(session('locale') == 'es' )
                                    <h2 class="entry-title"><a href="https://iwannatrip.com/tourList">MOVILIZARSE EN AVIONETA ENTRE ISLAS</a></h2>
									@else
									<h2 class="entry-title"><a href="https://iwannatrip.com/tourList">AIRLPLANE TRASPORT BETWEEN THE ISLANDS</a></h2>
									@endif

										@if(session('locale') == 'es' )
                                    <?php $str10=htmlspecialchars(html_entity_decode(nl2br(e(("Existen avionetas que vuelan entre islas con capacidad de 9 personas. La avioneta está sujeta al siguiente horario y ruta: San Cristobal- Isabela (7am), Isabela-Baltra (8.30am) Baltra-Isabela (1pm) Isabela- San Cristóbal (2pm). Cada trayecto cuesta $155 (extranjeros), $125 (Nacionales) o $95 (residentes de Galapagos); dura aproximadamente 30min."))))) ?>

								  @else
								  <?php $str10=utf8_encode("Light aircrafts with capacity for 9 people operate between the main islands. The aircraft is subject to the following schedule and itinerary: San Cristobal- Isabela (7am), Isabela-Baltra (8.30am) Baltra-Isabela (1pm) Isabela- San Cristóbal (2pm).Each section of the itinerary can be bought for $155 (foreigners), $125 (Ecuadorian) or $95 (Galapagos residents) and it takes about 30min.") ?>

								  @endif
                                    <p>{!!$str10!!} </p>


                                 </div>
                            </article>

                        </div>

                    </div>
                    <div class="sidebar col-md-4">
                       <div class="main-mini-search-form full-width box">
                            {!! Form::open(['url' => route('min-search'),  'method' => 'get', 'id'=>'min-search']) !!}
                                            <div class="search-box">
                                                <input type="text" id="s"  placeholder="Search" name="s" value="">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        {!! Form::close() !!}
                        </div>
                        <div class="box">
                            <h4>{{ trans('publico/labels.label131AB')}}</h4>
                            <ul class="product-list-widget">
                                @if($eat!=null)
                                @foreach ($eat as $serv)
                                @if($serv!=null)
                                <li>



                                     <div class="product-image">
                                        <a href="{!!asset('/detalle')!!}/{!!$serv->nombre_servicio!!}/{!!$serv->id!!}" >

                                            <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$serv->filename)}}" alt="{!!$serv->nombre_servicio!!}">
                                        </a>
                                    </div>


                                    <div class="product-content">


                                    <h6 class="product-title"><a href="{!!asset('/detalle')!!}/{!!$serv->nombre_servicio!!}/{!!$serv->id!!}"  onclick="$('.container').LoadingOverlay('show');">{!!$serv->nombre_servicio!!}</a></h6>



                                        <span class="product-price">{!!$serv->ubicacion!!}</span>

                                    </div>



                                </li>
                                @endif
                                @endforeach
                                @endif

                            </ul>
                        </div>
                        <div class="box">
                            <h4>More Trips</h4>
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="arrow-circle hover-effect archives">
                                        @if($moretrips!=null)
                                        @foreach ($moretrips as $trips)
                                        @if($trips!=null && $trips->nombre_servicio!="")
                                        <li><a href="{!!asset('/trip')!!}/{!!$trips->nombre_servicio!!}/{!!$trips->id!!}">{!!$trips->nombre_servicio!!}</a></li>
                                        @endif
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>

                            </div>
                        </div>


                        <div class="widget box">
                                <a href="{!!asset('/tourList')!!}" >
                                <h4>{{(session('locale') == 'es' )?"Reservas online Mobile iWaNaTrip":"Reservations online Mobile iWaNaTrip"}}</h4>
                                </a>
                                <ul class="demo1">
                                    @foreach($agrupamientos2 as $group)
                                    <li class="news-item">
                                                <?php

                                                if(session('locale') == 'en' )
                                        $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($group->nombre_eng))));
                                    else
                                        $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($group->nombre))));


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
                                                <td style="margin-right: 10px !important;width: 30%;"> <img src="/images/no-image-available.png" width="80" height="50" alt="iWaNaTrip"> </td>
                                                @else
                                                <td style="margin-right: 10px !important;width: 30%;"> <img src="https://bookiw.iwannatrip.comroup->foto[0]->filename!!}" width="80" height="50" alt="iWaNaTrip"> </td>
                                                @endif

                                                    <td style="width: 80%;padding-left: 5px;">
                                                        <p style="margin-bottom: 0px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                                            {!!$nombreCanonical!!}
                                                        </p>

                                                    </td>
                                                </tr>
                                            </table>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        <div class="box">
                            <h4>{{ trans('publico/labels.label132AB')}}</h4>

                                <ul class="product-list-widget">
                                    @if($sleep!=null)
                                    @foreach ($sleep as $sleepe)
                                @if($sleepe!=null)

                                  <li>



                                     <div class="product-image">
                                        <a href="{!!asset('/detalle')!!}/{!!$sleepe->nombre_servicio!!}/{!!$sleepe->id!!}">

                                            <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$sleepe->filename)}}" alt="{!!$sleepe->nombre_servicio!!}">
                                        </a>
                                    </div>


                                    <div class="product-content">


                                    <h6 class="product-title"><a href="{!!asset('/detalle')!!}/{!!$sleepe->nombre_servicio!!}/{!!$sleepe->id!!}"  onclick="$('.container').LoadingOverlay('show');">{!!$sleepe->nombre_servicio!!}</a></h6>



                                        <span class="product-price">{!!$sleepe->ubicacion!!}</span>

                                    </div>



                                </li>
                                @endif
                                    @endforeach
                                    @endif

                                </ul>

                        </div>
                        <div class="box">
                              <h4>Tags</h4>
                            <div class="tags">
                                @if($atraccion->tags!="")
                                <?php
                            $tags = explode(",", $atraccion->tags);
                            ?>
                                  @foreach ($tags as $tag)
                                <a class="tag" href="#">{!!$tag!!}</a>
                                @endforeach
                                @endif

                            </div>
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
                            <a onclick="$('.woocommerce').LoadingOverlay('show');" class="btn style4">{{ trans('publico/labels.label27')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('public_page.reusable.footer')
        </footer>
    </div>

    <!-- Javascript -->
{!! HTML::script('js/jquery.js') !!}
        {!!HTML::script('js/js_public/Compartido.js') !!}
        {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}
        {!!HTML::script('js/jquery.autocomplet.js') !!}




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
    <script type="text/javascript" src="{{ asset('public_components/components/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- plugins -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.plugins.js')}}"></script>


<!-- Google Map Api -->
    <script type='text/javascript' src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/gmap3.js')}}"></script>
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
                                });</script>
    <script>
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
            background:url ("{!!asset("img/internas/b05.png")!!}") no-repeat;
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
            background:url("{!!asset("img/internas/a12.png")!!}") no-repeat;
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

$('#lang').click(function(e) {
        e.preventDefault();


   if("{!!$language!!}" == 'en' ){

      window.location='https://iwannatrip.com/es/itinerary/Galapagos/1170';

   }
   else{


       window.location='https://iwannatrip.com/en/itinerary/Galapagos/1170';
   }

});
</script>


<script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>
    <!-- load page Javascript -->


</body>
</html>