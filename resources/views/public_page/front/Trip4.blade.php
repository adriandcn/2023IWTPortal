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
    <link rel="canonical" href="https://iwannatrip.com/en/itinerary/Sol-and-surf-in-Ecuador/1172" hreflang="en-us" />
    <link rel="alternate" href="https://iwannatrip.com/es/itinerario/Sol-y-surf-en-Ecuador/1172" hreflang="es-ec" />
    <link rel="alternate" href="https://iwannatrip.com/en/itinerary/Sol-and-surf-in-Ecuador/1172" hreflang="en-us" />

	@else
    <link rel="canonical" href="https://iwannatrip.com/es/itinerario/Sol-y-surf-en-Ecuador/1172" hreflang="es-ec" />
            <link rel="alternate" href="https://iwannatrip.com/en/itinerary/Sol-and-surf-in-Ecuador/1172" hreflang="en-us" />
            <link rel="alternate" href="https://iwannatrip.com/es/itinerario/Sol-y-surf-en-Ecuador/1172" hreflang="es-ec" />

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

                                            <a href="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/1172imgmaparuta04xl.jpg')}}" class="soap-mfp-popup">
                                                <img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/1172imgmaparuta04xl.jpg')}}" alt="Sol Surf - iWaNaTrip.com">
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
                                    <h2 class="entry-title"><a href="#">{!!$atraccion->nombre_servicio!!}</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
											@if(session('locale') == 'es' )
                                        <span class="post-category"> <a href="#">Sol y Surf Ecuador </a></span>

                                    </div>
                                    <?php $str = htmlspecialchars(html_entity_decode(nl2br(e(("La costa Ecuatoriana ofrece una gran diversidad de sitios para tomar el sol, surfear, pescar, ir de fiesta, disfrutar de sabrosa comida marinera y de hermosos paisajes, donde relajarse.  Con un agradable clima de playa y una temperatura de mar constante de 25gC a 27gC durante todo el año, hacen de estas costas un destino de surf y  playa sensacional. "))))) ?>
                                    <?php $strx = htmlspecialchars(html_entity_decode(nl2br(e(("Las playas ecuatorianas están plagadas de pequeñas aldeas o ciudades de unos pocos cientos de habitantes, la mayoría de personas se dedican a la pesca artesanal, agricultura o al turismo. Sin duda, otra ventaja es lo económico que puede resultar este viaje. La vida en estas pequeñas villas es muy económica con hospedajes desde los $10 y comida por $2.5. Igualmente el transporte en Ecuador es bastante barato, cuesta alrededor de $1 por cada hora de viaje."))))) ?>
                                    @else
									    <span class="post-category"> <a href="#">Surf and Sun in Ecuador </a></span>

                                    </div>
                                    <?php $str = utf8_encode("The Ecuadorian coastline offer a wide variety of places to sunbathing, surfing, fishing, parting and savoring a tasty food surrounded by the most beautiful landscapes. Blessed with a pleasant beach climate and a water temperature of 25�C to 27�C all year long, Ecuador is a sensational destination for those ones looking for a surf and beach trip on a low budget. ") ?>
                                    <?php $strx = utf8_encode("The western coast is bursting with little villages of just a few hundreds of people. Most of them work in traditional fishing, agriculture or tourism. There is no doubt that the low cost of life in these regions is very appealing for certain travelers. For instance, accommodation starts from as cheap as $10 a day, meals can be purchased for $2.5 and bus tickets cost around $1 per hour of travel.") ?>


									@endif
                                    <p>{!!$str!!}</p>
                                    <br>
                                    <p>{!!$strx!!}</p>

                                </div>
                            </article>
                            <article class="post post-classic">
                                <div class="post-date">
                                    <span class="day">1</span>
                                    <span class="month">parada</span>
                                </div>
                                <div class="post-image">
                                    <div class="image-container">

                                        <a href="https://iwannatrip.com/detalle/Playa-de-Mompiche/108"><img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/108dsc1178.jpg')}}" alt="Mompiche"></a>
                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Playa-de-Mompiche/108">Mompiche</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
										@if(session('locale') == 'es' )
                                    <?php $str4 = htmlspecialchars(html_entity_decode(nl2br(e(("El viaje de carretera por la costa se la conoce como la ruta del spondylus, en honor a una concha que habita en estas costas que antiguas civilizaciones utilizaban como moneda. Comienza tu aventura playera en el norte, en la ciudad de Same, donde podrás relajarte y disfrutar de una exquisita comida costeña. El segundo día, continúa hacia el sur hasta llegar a Mompiche, con sus 7Km de playa de agua color turquesa, que enamora a los surfistas por sus grandes olas. En temporada de ballenas (Junio-Octubre), toma un bote hacia la pequeña isla de Portete, al sur de Mompiche, donde encontrarás una pequeña y pacífica población con una playa rodeada de manglares. En la embarcación te mostrarán diferentes aves, tortugas marinas y por supuesto las ballenas jorobadas."))))) ?>
									@else
									<?php $str4 = utf8_encode("The route starts at the north, in the city of Same, where you'll be able to taste your first coastal meal. The second day, continue south to Mompiche, with a 7km beach of turquoise water and great waves. During whale season (June-Octover), is a good idea toget a boat to Portete Island, at the south of Mompiche, where you'll find a small tranquil town surrounded by mangroves. During this trip, you'll be shown different birds, marine turtles and the stunning handback whales.") ?>

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

                                        <a href="https://iwannatrip.com/detalle/Playa-de-Canoa/113"><img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/113canoa1.jpg')}}" alt="Canoa"></a>
                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Playa-de-Canoa/113">Canoa</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
										@if(session('locale') == 'es' )
                                    <?php $str5 = htmlspecialchars(html_entity_decode(nl2br(e(("El cuarto día, continúa dirección sur, hacia Canoa, pero antes de llegar haz una parada en el desconocido poblado de El Matal, con su espectacular brazo de mar (Playa Paraíso) y su sabrosa comida, para terminar el día con uno de los mejores atardeceres en Punta Ballena. Pasa la noche en Canoa, un lugar de mochileros con un agradable ambiente, diversión, buena comida y muchas actividades. Entre sus actividades destacan las clases de español, clases de surf, bicicletas o cabalgatas en caballo. Hay de todo un poco y muchos viajeros se quedan varios dias en este encantador pueblo."))))) ?>
									@else
									<?php $str5 = utf8_encode("Continue south on the fourth day towards Canoa, but before you reach it, make a quick stop at El Matal, a traditional fishermen town with its spectacular sea arm (Paradise beach) and fresh tasty food restaurants. Finish the day with a marvelous sunset in Punta Ballena. Spend the night in Canoa, one of the most popular villages for travelers. In Canoa the time doesn't go by and it's easy to be mesmerized for its beauty and pleasant environment. Entertainment options are also widely available. Some very popular activities are Spanish lessons, surf lessons, renting bikes and horseback tours. Many backpackers decide to spend in Canoa a few days. ") ?>

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
                                        <a href="https://iwannatrip.com/detalle/Bah%C3%ADa-de-Car%C3%A1quez-y-San-Vicente/134">
                                        <img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/134bahia-de-caraquez-sunset-1920x1080.jpg')}}" alt="Bahia de Caraquez"></a>

                                    </div>
                                </div>
                                <div class="post-content">

                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Bah%C3%ADa-de-Car%C3%A1quez-y-San-Vicente/134">Bahia de Caraquez</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
											@if(session('locale') == 'es' )
                                    <?php $str6 = htmlspecialchars(html_entity_decode(nl2br(e(("Continúa hacia el sur y después de obtener algo de dinero en los ATM de Bahía de Caraquez, continúa  15 minutos por la playa (solo se puede acceder en marea baja) se encuentra el punto arqueológico de Chirije. Este lugar, centro de una antigua civilización, guarda lugares místicos además de estar rodeado de kilómetros de playas vírgenes y un bosque seco tropical de 238 hectáreas. Pasa la noche ahí para al día siguiente dirigirte a Puerto López, desde donde puedes visitar la isla de la Plata, famosa por los piqueros patas azules, un tipo de ave parecida a las de que se encuentran en Galápagos. También en temporada, puedes hacer avistamiento de ballenas y quedarte maravillado en lo que probablemente es la mejor playa de Ecuador: Los Frailes."))))) ?>
									@else
									<?php $str6 = utf8_encode("Continue south but don't forget to withdraw some cash at the Bahía de Caraquez ATM's (nearby Canoa). Drive by the beach for 15 min (only possible in low-tide) to reach Chirije. This archeological place, used to be the center of an ancient civilization. Mystical places can be found here and it's surrounded by kilometers of untouched beaches and 238 hectares of dry tropical forest. Spend the night and head to Puerto López the following day. It's interesting to visit Isla de la Plata (Silver Island), famous for its blue footed boobies and whale watching boat excursions during season ( June-October). Also the popular beach of Los Frailes is found here, a turquoise gem of the west coast") ?>

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
                                        <a href="https://iwannatrip.com/detalle/Playa-Los-Frailes-Parque-Nacional-Machalilla/143"><img src="{{ url(env('AWS_PUBLIC_URL').'images/fullsize/143mirador.jpg')}}" alt="Los frailes"></a>

                                    </div>
                                </div>
                                <div class="post-content">
                                    <?php $str17 = utf8_encode("Monta�ita y Los Frailes") ?>
                                    <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Playa-Los-Frailes-Parque-Nacional-Machalilla/143">{!!$str17!!}</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                    </div>
									@if(session('locale') == 'es' )
                                    <?php $str7 = htmlspecialchars(html_entity_decode(nl2br(e(("Finaliza tu viaje en la ciudad hippie, Montañita. Aquí, miles de turistas viven o vienen a pasar varios dias en busca de fiesta o buen surf, por lo tanto la diversión está asegurada. Si buscas algo más tranquilo, puedes optar por Ayampe o por Olón.La costa oeste de Ecuador está hecha para viajeros que vibran con el sonido de las olas, y aprecian una vida simple y despreocupada. Descubre la razón por la que muchos viajeros pasan meses en estos lugares y disfruta de esta increíble experiencia. "))))) ?>
									@else
									<?php $str7 = utf8_encode("The end of your trip is about to happen. What a better way to do it than in the hippy town of Montañita, well known for being a surf and party tourist destination. If you are after something more quiet, a good alternative are Ayampe and Olón. The west coast of Ecuador is made for people who can vibe with the sound of waves and appreciate a chilled simple life. Discover the reason why many travelers spend months in some of these places and make the most of this amazing experience. ") ?>

									@endif
                                    <p>{!!$str7!!} </p>


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
                                        <a href="{!!asset('/detalle')!!}/{!!$serv->nombre_servicio!!}/{!!$serv->id!!}"  >

                                            <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$serv->filename)}}" alt="{!!$serv->nombre_servicio!!}">
                                        </a>
                                    </div>


                                    <div class="product-content">


                                        <h6 class="product-title"><a href="{!!asset('/detalle')!!}/{!!$serv->nombre_servicio!!}/{!!$serv->id!!}"  >{!!$serv->nombre_servicio!!}</a></h6>



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
                                        <a href="{!!asset('/detalle')!!}/{!!$sleepe->nombre_servicio!!}/{!!$sleepe->id!!}"  >

                                            <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$sleepe->filename)}}" alt="{!!$sleepe->nombre_servicio!!}">
                                        </a>
                                    </div>


                                    <div class="product-content">


                                        <h6 class="product-title"><a href="{!!asset('/detalle')!!}/{!!$sleepe->nombre_servicio!!}/{!!$sleepe->id!!}"  >{!!$sleepe->nombre_servicio!!}</a></h6>



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

      window.location='https://iwannatrip.com/es/itinerario/Sol-y-Surf-en-Ecuador/1172';

   }
   else{


       window.location='https://iwannatrip.com/en/itinerary/Sol-and-Surf-in-Ecuador/1172';
   }

});
</script>

    <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>
    <!-- load page Javascript -->


</body>
</html>