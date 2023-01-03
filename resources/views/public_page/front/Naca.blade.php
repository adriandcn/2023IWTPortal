<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <!-- Page Title -->
    <title>{!!$atraccion->nombre_servicio!!} | iWaNaTrip</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" />

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <meta name="description"
        content="Siendo jóvenes, felices y despreocupados, la aventura nos abre sus puertas, provocando que queramos satisfacer plenamente nuestros deseos, dicho de este modo, siempre que haya alegría interna y curiosidad, habrá ocasión para un Ñaca Ñaca | iWaNaTrip">

    <meta name="author" content="iWaNaTrip team">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="ÑacaÑaca" />
    <meta property="og:description"
        content="Siendo jóvenes, felices y despreocupados, la aventura nos abre sus puertas, provocando que queramos satisfacer plenamente nuestros deseos, dicho de este modo, siempre que haya alegría interna y curiosidad, habrá ocasión para un Ñaca Ñaca | iWaNaTrip" />
    <meta property="og:image" content="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/1438logo-ñaca-ñaca.jpg') !!}"/>

    <link rel="shortcut icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.ico') }}" />
    <link rel="apple-touch-icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('public_components/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public_components/css/font-awesome.min.css')}}">


    <link rel="stylesheet" href="{{ asset('public_components/css/letras.css')}}">

    <link rel="stylesheet" href="{{ asset('public_components/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public_components/components/owl-carousel/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{ asset('public_components/components/magnific-popup/magnific-popup.css')}}">
    {!!HTML::script('js/sliderTop/jssor.slider.mini.js') !!}
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{ asset('public_components/css/style.css')}}">
    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{ asset('public_components/css/updates.css')}}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('public_components/css/custom.css')}}">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{ asset('public_components/css/responsive.css')}}">

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
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
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
    <style>
        a.morelink {
            text-decoration: none;
            outline: none;
        }

        .morecontent span {
            display: none;
        }

        .more {
            background-color: white;
            border-radius: 4px;
            color: #939faa;
            display: block;
            font-size: 12px;
            line-height: 1.42857;
            margin: 0 0 10px;
            padding: 9.5px;
            text-align: justify;

            word-break: inherit;
            word-wrap: inherit;
            font-family: arial;
            border: 0 solid;
            white-space: pre-line;
            /* CSS 3 */
            white-space: -moz-pre-wrap;
            /* Mozilla, since 1999 */
            white-space: -pre-line;
            /* Opera 4-6 */
            white-space: -o-pre-line;
            /* Opera 7 */
            word-wrap: inherit;
            /* Internet Explorer 5.5+ */


        }
    </style>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
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
        @include('public_page.reusable.banner', ['titulo' =>$atraccion->nombre_servicio])


        <ul class="breadcrumbs">
            <li><a href="{!!asset('/')!!}"
                    onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1')}}</a></li>
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
                                <h2 class="box-title"> <em class="skin-color">{!!$atraccion->nombre_servicio!!} </em>
                                </h2>

                            </div>
                            <div class="post-image">
                                <div class="image-container">


                                    <div id="sync1" class="owl-carousel images">
                                        <div class="post-slider style3 owl-carousel box">
                                            <a href="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/1438logo-ñaca-ñaca.jpg') !!}" class="soap-mfp-popup">
                                                <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/1438logo-ñaca-ñaca.jpg') !!}" alt="ñacañaca - iWaNaTrip.com">
                                        </div>
                                    </div>


                                </div>
                                <div class="post-content">
                                    <div class="post-action">

                                        <div id="fb-root"></div>
                                        <script>
                                            (function (d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }(document, 'script', 'facebook-jssdk'));
                                        </script>

                                        <div class="fb-share-button" data-href="{!!asset('/nacanaca')!!}"
                                            data-layout="button_count"></div>

                                    </div>
                                    <h2 class="entry-title"><a href="#">{!!$atraccion->nombre_servicio!!}</a></h2>
                                    <div class="post-meta">
                                        <span class="entry-author fn">by <a href="#">ÑacaÑaca</a></span>
                                        <span class="post-category"> <a href="#">QUE SIGNIFICA ÑACA ÑACA???</a></span>

                                    </div>


                                    <?php $str=("Siendo una Expresión que denota acción inmediata y emoción, es también un gesto físico, que al frotar las manos y repetirlo, nos marca un punto de partida y complicidad por descubrir, es un banderazo de partida para echar a andar.") ?>
                                    <?php $str2=("Me atrevo a decir, que esta expresión nos llena, haciéndonos creer por un momento que siendo jóvenes, felices y despreocupados, la aventura nos abre sus puertas, provocando que queramos satisfacer plenamente nuestros deseos, dicho de este modo, siempre que haya alegría interna y curiosidad, habrá ocasión para un Ñaca Ñaca!!!!!!") ?>
                                    <p>{!!$str!!}</p>
                                    <br>
                                    <p>{!!$str2!!}</p>
                                </div>
                        </article>



                        <article class="post post-classic">
                            <div class="post-date">
                                <span class="day">20</span>
                                <span class="month">Abr</span>
                            </div>
                            <div class="post-image">
                                <div class="video-container">
                                    <div class="full-video">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/uFIYmubJJ_Q"
                                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="post-content">



                                <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Riobamba/132">Chambo
                                    </a></h2>
                                <div class="post-meta">
                                    <span class="entry-author fn">by <a href="#">ÑacaÑaca</a></span>
                                    <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                </div>


                                <?php $strx123=("Hola Ñaca Ñaca, esta vez Visitamos El cantón Chambo en la Provincia de Chimborazo ubicado al noroeste de la provincia.
Ubicado en un simpático valle, Posee una superficie de 163 km2, y representan el 2.5% de la superficie de la provincia.
La altura promedio del cantón está por los 2.780 msnm, con una temperatura promedio de 14 °C, se convierte en una zona muy apta para la agricultura y ganadería.
Está Situada apenas a 8 km de la Ciudad de Riobamba y se extiende en las faldas de los montes Quilimas y Cubillín de la Cordillera Oriental.

") ?>
                                <?php $str2y123=("
Pasar un viernes santo en Chambo, es toda una experiencia espiritual, su población acude a la iglesia central, donde pudimos contar alrededor de 300 cucuruchos, correctamente uniformados con sus atuendos, encargados de subir en hombros las distintas imágenes religiosas a las que rinden tributo, y en quienes depositan sus oraciones y solidifican su fe.


") ?>
                                <?php $str3y123=("Más que una fiesta, es un espacio para para la reflexión y la convivencia.
Evidenciando además, ancestrales costumbres, que son el fiel reflejo de la colonización Española y sus rituales religiosos.
Se puede respirar un ambiente familiar absoluto, un respeto inmejorable por lo que llevan a cabo y un pretexto para socializar.
Terminada la procesión, la gente se reúne en las calles principales a degustar deliciosos bocadillos gastronómicos y como no… un buen canelazo para apaciguar el clima.
Quiero agradecer personalmente a la familia Guerrero Mera, ilustres moradores de Chambo, familia descendiente de quien en paz ya descansa y su legado fue el más importante para la provincia y sus cantones.  El Dr. Fernando Guerrero , exdiputado, ex vicepresidente del Congreso Nacional y exalcalde de Riobamba, Fernando Guerrero, falleció en marzo del 2016, en Chambo, en la misma casa que compró al expresidente de la República, Osvaldo Hurtado quien Nació en esta residencia.
Hoy su Hijo Fabricio Guerrero Mera, es uno de los personajes políticos más importantes de la provincia, líder de opinión y portador de ese importante legado que dejo “El Flaco Guerrero”.



") ?>


                                <p>{!!$str2y123!!}</p>
                                <br>
                                <p>{!!$str2y123!!}</p>
                                <br>
                                <p>{!!$str3y123!!}</p>
                                <p>Gracias Riobamba, Gracias Chambo, su hospitalidad e historia son inmejorables.
                                    Ñaca Ñaca.

                                </p>
                            </div>
                        </article>





                        <article class="post post-classic">
                            <div class="post-date">
                                <span class="day">14</span>
                                <span class="month">Abr</span>
                            </div>
                            <div class="post-image">
                                <div class="video-container">
                                    <div class="full-video">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_ot5MHMrhqA"
                                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="post-content">



                                <h2 class="entry-title"><a
                                        href="https://iwannatrip.com/detalle/Riobamba/132">Riobamba</a></h2>
                                <div class="post-meta">
                                    <span class="entry-author fn">by <a href="#">ÑacaÑaca</a></span>
                                    <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                </div>


                                <?php $strx12=("Visitar la sultana de los andes Riobamba, es una experiencia unica
Despues de saludar al imponente Chimborazo y sentir su presencia, llegamos a esta pintoresca ciudad, Situada en el centro mismo del Ecuador,
Riobamba nos recibio con su particular desfile, en donde se pudo apreciar alrededor de mil caballos, que al retumbar de sus cascos en el asfalto, vuelven el entorno a tiempos ya perdidos.
") ?>
                                <?php $str2y12=("La provincia de Chimborazo, es agricola y ganadera por excelencia, esto se evidencia en este desfile de importantes grupos equinos, que hacen alarde de sus esbeltas paradas, conjugadas con las destrezas de los habiles jinetes Riobambeños.

") ?>
                                <?php $str3y12=("El desfile termina en el centro Agricola de Macaji, donde se realiza un  Rodeo chacarero, se exponen hermosos ejemplares, que tambien compiten en disciplinas como doma de potros, monta de toros, concurso de lazo y carrera de Barriles.
Con unas instalaciones de primerisima calidad, alrededor de 3000 personas asistieron a este evento, luego para rematar, fuimos invitados a  una espectacular fiesta en la Hosteria el Toril, orquestas, Djs, modelos y artistas,dieron la pauta de que en Riobamba se sabe festejar por todo lo alto.



") ?>

                                <p>{!!$strx12!!}</p>
                                <br>
                                <p>{!!$str2y12!!}</p>
                                <br>
                                <p>{!!$str3y12!!}</p>
                                <p>Que viva Riobamba y su generosa GENTE.

                                </p>
                            </div>
                        </article>


                        <article class="post post-classic">
                            <div class="post-date">
                                <span class="day">7</span>
                                <span class="month">Abr</span>
                            </div>
                            <div class="post-image">
                                <div class="video-container">
                                    <div class="full-video">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/mFeUp1XZpf0"
                                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="post-content">



                                <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Quito/286">San
                                        Francisco</a></h2>
                                <div class="post-meta">
                                    <span class="entry-author fn">by <a href="#">ÑacaÑaca</a></span>
                                    <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                </div>


                                <?php $strx1=("Visitar el convento de San Francisco en la ciudad de Quito, es adentrarse en la cultura religiosa de una ciudad Franciscana y colonial, bajo la intimidad de sus paredes y cúpulas encendidas.
Simpáticos personajes como Cucuruchos, Verónicas y Magdalenas, van guiando la visita, haciendo que se respire un ambiente Sacro e histórico.
Pasa la vida y uno no llega a notar como los sucesos Políticos, religiosos e históricos dejan sus huellas en las edificaciones de siglos pasados.
¡San Francisco es impresionante!") ?>
                                <?php $str2y1=("¡su atrio principal, su órgano intacto, el coro, sus patios iluminados y las riquezas artísticas de la escuela de arte Quiteña, plasmada en la perfecta anatomía de los Cristos de Manuel Chilli “Caspicara”  y cientos de autores españoles e indígenas que dedicaban su tiempo a edificar su fe.
La imponencia del Cristo Nazareno, luego denominado el Jesus del Gran Poder, la misteriosa mirada de los cucuruchos y los aromas que dejaron las velas encendidas, tras la leyenda del indio Cantuña y su venta del alma al mismo diablo, quien supuestamente hizo de Arquitecto Mayor y en pocas horas entrego la obra, faltándole una sola piedra, que fue el pretexto para devolver el alma a Cantuña.

") ?>
                                <?php $str3y1=("Hoy por hoy… la historia se mezcla con el modernismo y se construye en Quito 22 Kilómetros de la más importante obra subterránea, El Metro de Quito, con 6000 personas en obra, es más que una leyenda una realidad, que aportara a nacionales y extranjeros a convertir esta ciudad en lo que siempre fue, un museo viviente digno de aplaudir y visitar.

") ?>

                                <p>{!!$strx1!!}</p>
                                <br>
                                <p>{!!$str2y1!!}</p>
                                <br>
                                <p>{!!$str3y1!!}</p>
                                <p>Ya de esto se hablara mas adelante….
                                    Andres Morales 2018.
                                </p>
                            </div>
                        </article>






                        <article class="post post-classic">
                            <div class="post-date">
                                <span class="day">30</span>
                                <span class="month">Mar</span>
                            </div>
                            <div class="post-image">
                                <div class="video-container">
                                    <div class="full-video">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_xbn3tKhsWE"
                                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="post-content">

                                <h2 class="entry-title"><a href="https://iwannatrip.com/detalle/Quito/286">VIAJE AL
                                        NORTE, RAPIDO Y LIGERO</a></h2>
                                <div class="post-meta">
                                    <span class="entry-author fn">by <a href="#">ÑacaÑaca</a></span>
                                    <span class="post-category">in <a href="#">iWaNaTrip</a></span>

                                </div>

                                <?php $strx=("Resulta muy cómodo, fácil y ligero realizar un Tripp a la zona norte del país.
A apenas una hora y media de camino desde Quito, se abren ante nuestras atónitas miradas, innumerables paisajes norteños, que entre paramos, lagos, música folklorica, flores, bizcochos y chocolates, te dan la bienvenida a la provincia de Imbabura.
Pasar por Cayambe y probar unos bizcochos viendo al imponente volcán es una parada obligatoria, luego de este “tente en pie”, arreando camino con la brújula apuntada al norte.") ?>
                                <?php $str2y=("¡Una espectacular carretera, muy segura y bien señalizada, es el pasaporte para la tranquilidad, luego de coronar el páramo, aparece de la nada!  el majestuoso lago San Pablo y el Taita Imbabura, el volcán enamorado.
Foto de rigor en el mirador de Mira Lago y un café al son de charangos, no tiene precio.
¡Seguimos camino, hasta llegar a San Luis de Otavalo, cuidad curiosa y pintoresca! La meca de la cultura Otavaleña.
Los Otavaleños son gente pulcra, respetuosa y trabajadora, que han tenido mucha relación con los turistas y se han acoplado perfectamente a sus necesidades y están prestos todo el tiempo a compartir su rica cultura con los afuereños.
") ?>
                                <?php $str3y=("Recrear el alma en la laguna de Mojanda, es indispensable, apenas a 45 minutos desde la carretera, cualquier vehículo puede ingresar hasta la misma orilla de la Laguna.
Vaya, respire, sienta y disfrute….
") ?>


                                <p>{!!$strx!!}</p>
                                <br>
                                <p>{!!$str2y!!}</p>
                                <br>
                                <p>{!!$str3y!!}</p>
                                <p>¡Al bajar, visite la plaza de ponchos de Otavalo, se llevará coloridas y musicales
                                    sorpresas!
                                </p>
                            </div>
                        </article>







                    </div>

                </div>
                <div class="sidebar col-md-4">
                    <div class="main-mini-search-form full-width box">
                        {!! Form::open(['url' => route('min-search'), 'method' => 'get', 'id'=>'min-search']) !!}
                        <div class="search-box">
                            <input type="text" id="s" placeholder="Search" name="s" value="">
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
                                    <a href="{!!asset('/detalle')!!}/{!!$serv->nombre_servicio!!}/{!!$serv->id!!}">

                                        <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$serv->filename)}}"
                                            alt="{!!$serv->nombre_servicio!!}">
                                    </a>
                                </div>


                                <div class="product-content">


                                    <h6 class="product-title"><a
                                            href="{!!asset('/detalle')!!}/{!!$serv->nombre_servicio!!}/{!!$serv->id!!}"
                                            onclick="$('.container').LoadingOverlay('show');">{!!$serv->nombre_servicio!!}</a>
                                    </h6>



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
                                    @if($trips!=null)
                                    <li><a
                                            href="{!!asset('/trip')!!}/{!!$trips->nombre_servicio!!}/{!!$trips->id!!}">{!!$trips->nombre_servicio!!}</a>
                                    </li>
                                    @endif
                                    @endforeach
                                    @endif
                                </ul>
                            </div>

                        </div>
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

                                        <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$sleepe->filename)}}"
                                            alt="{!!$serv->nombre_servicio!!}">
                                    </a>
                                </div>


                                <div class="product-content">


                                    <h6 class="product-title"><a
                                            href="{!!asset('/detalle')!!}/{!!$sleepe->nombre_servicio!!}/{!!$sleepe->id!!}">{!!$sleepe->nombre_servicio!!}</a>
                                    </h6>



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
                        <a onclick="$('.woocommerce').LoadingOverlay('show');"
                            class="btn style4">{{ trans('publico/labels.label27')}}</a>
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
    <script type="text/javascript"
        src="{{ asset('public_components/components/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- parallax -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.stellar.min.js')}}"></script>

    <!-- waypoint -->
    <script type="text/javascript" src="{{ asset('public_components/js/waypoints.min.js')}}"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('public_components/components/owl-carousel/owl.carousel.min.js')}}">
    </script>

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
                    var html = c + '<span class="moreellipses">' + ellipsestext +
                        '&nbsp;</span><span class="morecontent"><span>' + h +
                        '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
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
    </script>
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
        });
    </script>

    @if(session('device')!='mobile')
    <script>
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [{
                $Duration: 1800,
                $Opacity: 2
            }];
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
            background:url ("{!!asset("img/internas/b05.png")!!}") no-repeat;
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

    @else
    <script>




    </script>
    @endif





    <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>
    <!-- load page Javascript -->


</body>

</html>