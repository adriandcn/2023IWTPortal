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
    <link rel="canonical" href="https://iwannatrip.com/en/itinerary/The-best-of-Ecuador/1173" hreflang="en-us" />
    <link rel="alternate" href="https://iwannatrip.com/es/itinerario/Lo-mejor-de-Ecuador/1173" hreflang="es-ec" />
    <link rel="alternate" href="https://iwannatrip.com/en/itinerary/The-best-of-Ecuador/1173" hreflang="en-us" />

	@else
    <link rel="canonical" href="https://iwannatrip.com/es/itinerario/Lo-mejor-de-Ecuador/1173" hreflang="es-ec" />
            <link rel="alternate" href="https://iwannatrip.com/en/itinerary/The-best-of-Ecuador/1173" hreflang="en-us" />
            <link rel="alternate" href="https://iwannatrip.com/es/itinerario/Lo-mejor-de-Ecuador/1173" hreflang="es-ec" />

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
                <li class="active">{{(session('locale') == 'es' )?$atraccion->nombre_servicio:$atraccion->nombre_servicio_eng}}
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
                                    <h2 class="box-title"> <em class="skin-color">{{(session('locale') == 'es' )?$atraccion->nombre_servicio:$atraccion->nombre_servicio_eng}}</em> </h2>

                                </div>
                                <div class="post-image">
                                    <div class="image-container">


                                             <div id="sync1" class="owl-carousel images">
                                        <div class="post-slider style3 owl-carousel box">

                                            <a href="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/1173imgmaparuta05xl.jpg')}}" class="soap-mfp-popup">
                                                <img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/1173imgmaparuta05xl.jpg')}}" alt="Ecuador - iWaNaTrip.com">
                                    </div></div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-action">

                                        <div id="fb-root"></div>
                                        <script>(function (d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id))
                                                    return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));</script>

                                        <div class="fb-share-button" data-href="{!!asset('/trip')!!}/{!!$atraccion->nombre_servicio!!}/{!!$atraccion->id!!}" data-layout="button_count"></div>

                                    </div>
                                    <h2 class="entry-title"><a href="#">{{(session('locale') == 'es' )?$atraccion->nombre_servicio:$atraccion->nombre_servicio_eng}}</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category"> <a href="#">{{(session('locale') == 'es' )?"Tres semanas":"3 weeks"}} </a></span>

                                    </div>
									@if(session('locale') == 'es' )

                                    <?php $str = htmlspecialchars(html_entity_decode(nl2br(e(("La esencia de Ecuador reside en probar un poquito de cada región. Siente el frío de las imponentes montañas andinas. Experimenta al máximo la biodiversidad de la Amazonía y su magia. Relájate y aprende surf en las calurosas playas del oeste, para finalmente admirar la magnificencia del paraíso en la Tierra: Las Islas Galápagos. Todo esto es posible en Ecuador, un pequeño y desconocido rincón del mundo. En Ecuador hay una extensa red de autobuses que cubren todas las vías que se mencionan en el itinerario. "))))) ?>

								  @else
								     <?php $str = utf8_encode("Making the most of your visit to Ecuador is about savoring the best of each region. Feel the cold landscapes of the Andes mountains. Live the nature and be fascinated by the Amazonia�s biodiversity. Relax or learn surf in the hot beaches of the West Coast. Finally, witness the beauty of the Eden garden on Hearth: The Galapagos Islands. All this is possible to happen in Ecuador, an unknown yet incredible small corner of the world. Buses are widely available to the majority of the places suggested in this itinerary, and these are not expensive at all ($1 per hour approximately).") ?>


								  @endif

                                    <p>{!!$str!!}</p>
                                </div>
                            </article>
                            <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">1</span>
                                    <span class="month">parada</span>
                                </div>
                                <div class="post-image">
                                    <div class="image-container">

                                        <a href="https://iwannatrip.com/detalle/Monumento-Ciudad-Mitad-del-Mundo/97"><img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/974fcf799334e773bf6048bbae7bd193fec8ad65.jpg')}}" alt="Mitad del mundo"></a>
                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Monumento-Ciudad-Mitad-del-Mundo/97">{{(session('locale') == 'es' )?"Mitad del mundo":"The Middle of the World"}}</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
										@if(session('locale') == 'es' )
                                    <?php $str4 = htmlspecialchars(html_entity_decode(nl2br(e((("Comienza tu viaje en Quito, la capital Ecuatoriana donde en dos días tendrás la oportunidad de apreciar la belleza de su Centro Histórico, visitar la Capilla del Hombre, el volcán Pichincha y la Mitad del Mundo. Desde Quito, se pueden realizar varias excursiones a lugares únicos como Otavalo, Mindo y Quilotoa. Primero, observa los paisajes de lagunas y montañas camino a  Otavalo. Otavalo es una de las pocas comunidades en Ecuador que muestra orgullosa su identidad indígena. Es el lugar perfecto para adquirir artesanías de calidad en su famoso mercado de ponchos. Si viajas en coche, desde Otavalo también puedes visitar Cuicocha y la laguna de Mojanda. Regresa a Quito y toma un bus de dos horas al oeste, hacia el bosque nublado de Mindo, lleno de mariposas, deportes de agua y hermosas cascadas. ") )))))?>
									@else
									<?php $str4 = utf8_encode("The trip starts in Quito, capital city of Ecuador. Firstly, spend a couple of days exploring Quito. Highlights that this city has to offer are the Historic Center, the Man�s Chapel, the skyline to the Pichincha Volcano and the Middle of the World. From Quito, it�s possible to carry out several daytrips to unique places such as Otavalo, Mindo and Quilotoa. Travel to Otavalo, the road goes through a truly beautiful mountainous landscape. Otavalo is one of the few communities that proudly showcases its indigenous identity. This is the perfect place to purchase great quality handcrafts at their famous poncho market.If you travel by car, from Otavalo, it's recommended to visit Cuicocha and the Mojanda's Lagoon the same day. Return to Quito and go two hours West to the foggy forest of Mindo. This excursion stands out for its natural beauty: thousands of butterflies, waterfalls and water sports that you can practice. ") ?>

									@endif
                                    <p>{!!$str4!!} </p>
                                </div>
                            </article>

                            <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">2</span>
                                    <span class="month">parada</span>
                                </div>
                                <div class="post-image">
                                    <div class="post-slider style3 owl-carousel">

                                        <a href="https://iwannatrip.com/detalle/Quilotoa/320"><img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/320img0034-1024x768.jpg')}}" alt="Quilotoa"></a>
                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Quilotoa/320">Quilotoa</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
										@if(session('locale') == 'es' )
                                    <?php $str5 = htmlspecialchars(html_entity_decode(nl2br(e((("Al día siguiente, regresa a Quito y dirígete hacia la encantadora laguna del Quilotoa. Volcán con una laguna en su cráter. Caminar su contorno, bordeando sus aguas turquesas o da un paseo en burro. Al siguiente día, toma un vuelo desde Quito al Coca, para luego adentrarte en las entrañas del Amazonas, hacia la parte baja del Rio Napo o Limoncocha. Existen tours organizados previamente, que te llevarán por un par de dias a conocer las comunidades de la selva y te mostrarán uno de los lugares con mayor biodiversidad del mundo. Se dice que este es un lugar mágico.")))))) ?>

									@else
									<?php $str5 = utf8_encode("Return to Quito the day after, and travel to the breathtaking Lagoon of Quilotoa. This is one of the hidden bids of Ecuador. Walk around its contour or do it on the back of a donkey. Contemplate the turquoise water that changes colors depending on the day light. It's time to continue flying Quito- Coca. Coca is the gate to the deep Amazonia, towards the lower part of the Napo River or Limoncocha. It's possible to pre-arrange a two-day tour that will take you to a few communities that live in the jungle. Experience the magic connection with one of the places with the largest biodiversity in the world. ") ?>

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
                                        <a href="https://iwannatrip.com/detalle/Tena/204">
                                        <img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/204riversstonestena442675.jpg')}}" alt="Tena"></a>

                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Tena/204">Tena</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
										@if(session('locale') == 'es' )

                                    <?php $str6 = htmlspecialchars(html_entity_decode(nl2br(e((("Es hora de dirigirte al sur en autobus a otra ciudad amazónica: Tena. Esta ciudad rodeada de ríos es el centro de rafting del Ecuador, con rápidos de nivel III y IV. También son interesantes las visitas a las cavernas de Jumanji entre otras, los bosques primarios, y la encantadora ciudad de Misahualli, donde se puede llegar en autobús. ")))))) ?>

									@else
									<?php $str6 = utf8_encode(" From Coca, head south by bus to another Amazonian city: Tena. It's surrounded by rivers and is the rafting center of Ecuador. Trigger your adrenaline with its level III and IV rapids. Other impressing spots nearby are the Jumanji caverns, primary forests and the charming city of Misahualli. ") ?>

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
                                        <a href="https://iwannatrip.com/detalle/Ba%C3%B1os/263"><img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/263lacasadelarboloriginal12312.jpg')}}" alt="Ba�os"></a>

                                    </div>
                                </div>
                                <div class="post-content">
                                    <?php $str17 = htmlspecialchars(html_entity_decode(nl2br(e((("Baños")))))) ?>
                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Ba%C3%B1os/263">{!!$str17!!}</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
											@if(session('locale') == 'es' )
                                    <?php $str7 = htmlspecialchars(html_entity_decode(nl2br(e((("Es tiempo de despedirse de la selva y retornar a la sierra. La paradisíaca ciudad de Baños es capital del deporte de aventura de Ecuador. Aquí la oferta turística está bien nutrida por tour operadores locales: caminatas a hermosas cascadas, baños en aguas termales, paseos en bicicleta, cabalgatas, bungee jumping, rafting, canoping, kayaking etc. Luego de un par de días de aventura, dirígete hacia el sur. Cuenca es una ciudad aclamada por su hermosa arquitectura y actividades culturales: la catedral nueva, la catedral vieja, el museo y parque arqueológico de Pumapungo etc. Desde Cuenca, visita Ingapirca, el mayor centro arqueológico del Ecuador. Igualmente puedes visitar el Parque Nacional Cajas con sus parajes andinos.")))))) ?>
									@else
									<?php $str7 = utf8_encode("Say goodbye to the jungle and return to the Andes Mountains. Spend 2 days in Baños, the adventure sports capital of Ecuador. Here, the tourist offer is well nourished by local operators: tracks to beautiful waterfalls, baths in thermal waters, bike riding, water sports, bungee jumping, rafting, canopying, kayaking. The opportunities to enjoy nature are endless. Next stop: Cuenca. Acclaimed by its colonial architecture, this city provides a great cultural experience: the New Cathedral, the Old Cathedral, the archeologic park and museum of Pumapungo etc.  Plan a daytrip to visit the largest archeologic center in Ecuador, Ingapirca. Likewise, don�t miss Las Cajas National Park, with its beautiful Andean landscapes. ") ?>

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
                                        <a href="https://iwannatrip.com/detalle/Playa-de-Puerto-L%C3%B3pez/142"><img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/142jpgpuertoadolfo6.jpg')}}" alt="Puerto Lopez"></a>

                                    </div>
                                </div>
                                <div class="post-content">
                                    <?php $str17 = htmlspecialchars(html_entity_decode(nl2br(e((("Puerto López")))))) ?>
                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Playa-de-Puerto-L%C3%B3pez/142">{!!$str17!!}</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
									@if(session('locale') == 'es' )
                                    <?php $str7 = htmlspecialchars(html_entity_decode(nl2br(e((("Ahora, un poco de sol y arena, dirígete hacia Montañita, lugar donde mochileros de todo Ecuador llegan en busca de su famosa fiesta, pero también de sus actividades de relax y surf. Desde aquí también podrás visitar Puerto López, donde puedes tomar un bote para avistar ballenas en temporada (Junio-Octubre). Tampoco debes perderte la que es probablemente la mejor playa de Ecuador, la Playa de los Frailes, de preciosas aguas turquesas. Continúa tu viaje a Guayaquil para tomar un vuelo a las Islas Encantadas: Galápagos.")))))) ?>


									@else
									<?php $str7 = utf8_encode("Time for a bit of sun and beach in Montañita. It's a headquarter for backpackers from all Ecuador because of its good surf, beautiful beaches and a vibrant night life .If you are seeking for an unforgettable night out this is your place. Other more relaxation oriented options are the visit to Puerto Lopez, famous for its whale watching boat excursions during season ( June-October) and the popular beach of Los Frailes, a turquoise gem of the west coast. Continue your trip to Guayaquil and get a flight to the charmed Islands: Galapagos. ") ?>

									@endif
                                    <p>{!!$str7!!} </p>


                                </div>
                            </article>


                             <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">6</span>
                                    <span class="month">parada</span>
                                </div>
                                <div class="post-image">
                                    <div class="post-slider style3 owl-carousel">
                                        <a href="https://iwannatrip.com/detalle/ISLA-SAN-CRISTOBAL/221"><img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/221galapagos238.jpg')}}" alt="Galapagos"></a>

                                    </div>
                                </div>
                                <div class="post-content">
                                    <?php $str17 = htmlspecialchars(html_entity_decode(nl2br(e((("Galápagos")))))) ?>
                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/ISLA-SAN-CRISTOBAL/221">{!!$str17!!}</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
									@if(session('locale') == 'es' )
                                    <?php $str7 = htmlspecialchars(html_entity_decode(nl2br(e((("Galápagos es el paraíso en la Tierra. Caminar entre leones marinos, iguanas perezosas, y tortugas gigantes es un sueño hecho realidad para el viajero. Sin lugar a dudas, las islas Galapagos son la joya mejor guardada de Ecuador y el broche final de este extraordinario viaje. Toma el vuelo Guayaquil- Baltra, y  dirígete a Puerto Ayora, en la Isla Santa Cruz. En esta isla, son visitas ineludibles Las Grietas, Toruga Bay, la estación Charles Darwin y la Hacienda el Chato. Si el tiempo lo permite, toma una excursión al espectacular Puerto Baquerizo. ")))))) ?>
                                    <?php $str8 = htmlspecialchars(html_entity_decode(nl2br(e((("Deja al menos tres días para visitar Isla Isabela (Puerto Villamarín), más salvaje y conservada que Santa Cruz. Aquí podrás tomar un tour hacia el volcán Sierra Negra, ir en bicicleta al Muro de las Lágrimas, visitar la Galapaguera o simplemente relajarte con el snorker de Concha y Perla. No olvides hacer una de las mejores excursiones que Isabela ofrece, Los Túneles.")))))) ?>

									@else
									<?php $str7 = utf8_encode("Galapagos Islands are the Eden garden on Earth. Walking among playful sea lions, marine iguanas and giant turtles are certainly a dream come true for travelers. Undoubtedly, Galapagos are the best kept jewel of Ecuador thus it�s the culmination of this extraordinary trip. Fly Guayaquil-Baltra, and travel to Puerto Ayora, in Santa Cruz Island. In this island, the must visit places are: Las Grietas, Tortuga Bay, The Charles Darwin Station and the country house of El Chato. If time permits, book an excursion to Puerto Baquerizo.  ") ?>
                                    <?php $str8 = utf8_encode("Leave at least 3 days to explore Isabela Island (Puerto Villamar�n). This island is wilder and better preserved than Santa Cruz. Here, it�s highly recommended the tour to Sierra Negra volcano, a bike riding trip to �El Muro de las Lagrimas�, the visit to the turtle breeding center �La Galapaguera�, the snorkel at �Concha y Perla� and last but not least, the excursion to �Los Tuneles�, where you�ll be able to encounter Isabela's marine life. ") ?>

									@endif
                                    <p>{!!$str7!!} </p>
                                    <br>
                                    <p>{!!$str8!!} </p>


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
                            <h4>{{(session('locale') == 'es' )?"Comidas & bebidas":"Eat & Drink"}}</h4>
                            <ul class="product-list-widget">
                                @if($eat!=null)
                                @foreach ($eat as $serv)
                                @if($serv!=null)
                                <li>



                                    <div class="product-image">
                                        <a href="#"  onclick="$('.container').LoadingOverlay('show');">

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
                            <h4>{{(session('locale') == 'es' )?"También te podría interesar":"Related for you"}}</h4>
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
                            <h4>{{(session('locale') == 'es' )?"Donde dormir":"Sleep"}}</h4>

                            <ul class="product-list-widget">
                                @if($sleep!=null)
                                @foreach ($sleep as $sleepe)
                                @if($sleepe!=null)

                                <li>



                                    <div class="product-image">
                                        <a href="#"  onclick="$('.container').LoadingOverlay('show');">

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




    <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>
    <!-- load page Javascript -->

    <script>

$('#lang').click(function(e) {
        e.preventDefault();


   if("{!!$language!!}" == 'en' ){

      window.location='https://iwannatrip.com/es/itinerario/Lo-mejor-de-Ecuador/1173';

   }
   else{


       window.location='https://iwannatrip.com/en/itinerary/The-best-of-Ecuador/1173';
   }

});
</script>
</body>
</html>