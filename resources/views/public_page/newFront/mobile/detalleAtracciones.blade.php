<!DOCTYPE html>
<html lang="en">

<head>

<?php
     if(session('locale') == 'en' && $atraccion->nombre_servicio_eng!=''){
		$tituloIdioma=$atraccion->nombre_servicio_eng;
		$detalleIdioma=$atraccion->detalle_servicio_eng;
        $keywordsIdioma=$atraccion->key_words_eng;
        $h1=$atraccion->h1_eng;
		}
	 else{
		$tituloIdioma=$atraccion->nombre_servicio;
		$detalleIdioma=$atraccion->detalle_servicio;
        $keywordsIdioma=$atraccion->key_words;
        $h1=$atraccion->h1_esp;
	}
	//dd($tituloIdioma);
	?>

				<title>{!!$tituloIdioma!!}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php
        $length = 100;
        //Primero eliminamos las etiquetas html y luego cortamos el string
        $stringDisplay = substr(strip_tags($detalleIdioma), 0, $length);
        //Si el texto es mayor que la longitud se agrega puntos suspensivos
        if (strlen(strip_tags($detalleIdioma)) > $length)
        $stringDisplay .= ' ...';
        $str = utf8_encode("Viaja y descubre lugares, tours, comida, huecas, aventuras,gente y más. Hoteles Diversión Restaurantes Cultura");

		       $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);
								 $nombreCanonicalEsp=htmlspecialchars(html_entity_decode(nl2br(e($atraccion->nombre_servicio))));
                                $nombreCanonicalEsp = str_replace(' ', '-', $nombreCanonicalEsp);
                                $nombreCanonicalEsp = str_replace('/', '-', $nombreCanonicalEsp);
                                $nombreCanonicalEsp = str_replace('?', '-', $nombreCanonicalEsp);
                                $nombreCanonicalEsp = str_replace("'", '-', $nombreCanonicalEsp);
								$nombreCanonicalEsp = str_replace("#", '-', $nombreCanonicalEsp);
								$nombreCanonicalEng=htmlspecialchars(html_entity_decode(nl2br(e($atraccion->nombre_servicio_eng))));
                                $nombreCanonicalEng = str_replace(' ', '-', $nombreCanonicalEng);
                                $nombreCanonicalEng = str_replace('/', '-', $nombreCanonicalEng);
                                $nombreCanonicalEng = str_replace('?', '-', $nombreCanonicalEng);
                                $nombreCanonicalEng = str_replace("'", '-', $nombreCanonicalEng);
                                $nombreCanonicalEng = str_replace("#", '-', $nombreCanonicalEng);
								if($nombreCanonicalEng=="")
									$nombreCanonicalEng=$nombreCanonicalEsp;

								$language=session('locale');
    ?>
    <meta name="description" content='{!!$atraccion->nombre_servicio!!}. {!!str_replace("\""," ",$stringDisplay)!!} |iWaNaTrip.com'>
  <meta name="keywords" content="{!!$keywordsIdioma!!} ">
	<meta name="author" content="iWaNaTrip group">

	<meta name="_token" content="{!!csrf_token() !!}" />
	@if($language=="es")
	 <meta http-equiv="Content-Language" content="es">
		@else
 	 <meta http-equiv="Content-Language" content="en_US">
		@endif

		<META NAME="robots" CONTENT="all | index | follow">
    <META name="Revisit" content="1 days">


	<meta property="og:title" content="{!!$atraccion->nombre_servicio!!}" />
    <meta property="og:description" content="{!!$stringDisplay!!}" />
	@if(isset($imagenes[0]->filename))
		<meta property="og:image" content="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/'.$imagenes[0]->filename) !!}" />
	@endif



    @if($language=="en")
    <link rel="canonical" href="https://iwannatrip.com/en/{!!$nombreCanonicalEng!!}/{!!$atraccion->id!!}"  />
    <link rel="alternate" href="https://iwannatrip.com/es/{!!$nombreCanonicalEsp!!}/{!!$atraccion->id!!}" hreflang="es-ec" />
    <link rel="alternate" href="https://iwannatrip.com/en/{!!$nombreCanonicalEng!!}/{!!$atraccion->id!!}" hreflang="en-ec" />
    <link rel="alternate" href="https://iwannatrip.com/es/{!!$nombreCanonicalEsp!!}/{!!$atraccion->id!!}" hreflang="es" />
    <link rel="alternate" href="https://iwannatrip.com/en/{!!$nombreCanonicalEng!!}/{!!$atraccion->id!!}" hreflang="en" />

    <link rel="alternate" href="https://iwannatrip.com/en/{!!$nombreCanonicalEng!!}/{!!$atraccion->id!!}" hreflang="x-default" />
    @else

        <link rel="canonical" href="https://iwannatrip.com/es/{!!$nombreCanonicalEsp!!}/{!!$atraccion->id!!}"  />
            <link rel="alternate" href="https://iwannatrip.com/en/{!!$nombreCanonicalEng!!}/{!!$atraccion->id!!}" hreflang="en-ec" />
            <link rel="alternate" href="https://iwannatrip.com/es/{!!$nombreCanonicalEsp!!}/{!!$atraccion->id!!}" hreflang="es-ec" />

            <link rel="alternate" href="https://iwannatrip.com/en/{!!$nombreCanonicalEng!!}/{!!$atraccion->id!!}" hreflang="en" />
            <link rel="alternate" href="https://iwannatrip.com/es/{!!$nombreCanonicalEsp!!}/{!!$atraccion->id!!}" hreflang="es" />

            <link rel="alternate" href="https://iwannatrip.com/en/{!!$nombreCanonicalEng!!}/{!!$atraccion->id!!}" hreflang="x-default" />

            @endif


    <!-- Favicons-->
	<link rel="apple-touch-icon" href="{{ url(env('AWS_PUBLIC_URL').'images/img/60x60_logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url(env('AWS_PUBLIC_URL').'images/img/76x76logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url(env('AWS_PUBLIC_URL').'images/img/120x120logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url(env('AWS_PUBLIC_URL').'images/img/180x180logo_iwana.png')}}">
    <link rel="icon" sizes="180x180" href="{{ url(env('AWS_PUBLIC_URL').'images/img/180x180logo_iwana.png')}}">
    <link rel="shortcut icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.ico') }}" />
    <link rel="apple-touch-icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.png') }}" />

    <!-- GOOGLE WEB FONT -->

	<link rel="preload" as="font" href="{{ asset('/MobileDetails/css/icon_fonts/font/ElegantIcons.woff')}}" type="font/woff2" crossorigin >
	<link rel="preload" as="font" href="{{ asset('/MobileDetails/css/icon_fonts/font/themify.woff?-fvbane')}}" type="font/woff2" crossorigin >
	<link rel="preload" as="font" href="{{ asset('/MobileDetails/css/icon_fonts/font/fontello.woff?32974303')}}" type="font/woff2" crossorigin>
	<link rel="preload" as="font" href="{{ asset('/MobileDetails/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0')}}" type="font/woff2" crossorigin>



    <!-- BASE CSS -->
    <link href="{{ asset('/MobileDetails/css/bootstrap.min.css')}}" rel="stylesheet" media="none" onload="if(media!=='all')media='all'" >
    <link href="{{ asset('/MobileDetails/css/style.css')}}" rel="stylesheet" media="none" onload="if(media!=='all')media='all'" >
	<link href="{{ asset('/MobileDetails/css/vendors.css')}}" rel="stylesheet" media="none" onload="if(media!=='all')media='all'" >

    <!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('/MobileDetails/css/custom.css')}}" rel="stylesheet" media="none" onload="if(media!=='all')media='all'" >
	<!-- Icon fonts-->
	<link href="{{ asset('/MobileDetails/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<script src="{{ asset('public_components/js/lazysizes.min.js')}}" async></script>

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

	<div id="page" class="theia-exception">


	<header class="header menu_fixed" style="padding:15px 15px 25px 15px;!important">

	@include('public_page.reusable.headerMobile')
	</header>
	<!-- /header -->

	<main>
		<section  class="hero_in tours_detail">
			<div class="wrapper">
				<div class="container">


					@if($h1=="")
                    <h1 class="fadeInUp"><span></span>{{$tituloIdioma}}</h1>
                    @else
                    <h1 class="fadeInUp"><span></span>{{$h1}}</h1>
                    @endif
				</div>
				<span class="magnific-gallery">
					<a href="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/'.$imagenes[0]->filename) !!}" class="btn_photos" title="iWaNaTrip" data-effect="mfp-zoom-in">{{(session('locale') == 'es' )?"Ver fotos":"View photos"}}</a>
					@foreach ($imagenes as $imagen)
						<a href="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/'.$imagen->filename) !!}" title="iWaNaTrip" data-effect="mfp-zoom-in"></a>
                    @endforeach

				</span>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<nav class="secondary_nav sticky_horizontal">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#description" class="active">{{(session('locale') == 'es' )?"Info":"Info"}}</a></li>
						<li><a href="#gethere">{{(session('locale') == 'es' )?"Mapa":"Map"}}</a></li>
						<li><a href="#price">{{(session('locale') == 'es' )?"Precio":"Price"}}</a></li>
						<li><a href="#moret">{{(session('locale') == 'es' )?"Más":"More"}}</a></li>

					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">


						<div id="description">
							<h2>{{(session('locale') == 'es' )?"Info":"Info"}}</h2>

							@if(session('locale') == 'es' )
									 <?php
                                $nombre = str_replace('(#', ' <a href="', $atraccion->detalle_servicio);
                                $nombre = str_replace('#)', '"> (Ver más)</a>', $nombre);
                            ?>
							    @elseif(session('locale') == 'en' && $atraccion->detalle_servicio_eng!='')
								 <?php
                                $nombre = str_replace('(#', ' <a href="', $atraccion->detalle_servicio_eng);
                                $nombre = str_replace('#)', '"> (More info)</a>', $nombre);
                            ?>
							@else

									 <?php
                                $nombre = str_replace('(#', ' <a href="', $atraccion->detalle_servicio);
                                $nombre = str_replace('#)', '"> (Ver más)</a>', $nombre);
                            ?>
							@endif


							  <pre style="padding: 9.5px;
                                                        text-align: justify;
                                                        word-break: inherit;
                                                        white-space: pre-line;
                                                        word-wrap: inherit;
                                                        font-family: arial;
                                                        border: 0 solid;" class="mores">

                                                    {!!$nombre!!}

											</pre>


							<hr>
					</div>






					<div id="gethere">

										@if($atraccion->como_llegar1!=""||$atraccion->como_llegar2!="")

							<h3> {{(session('locale') == 'es' )?"¿Cómo llegar?":"Getting here"}}</h3>
							@if(session('locale') == 'es' )
                                                            <pre style="padding: 9.5px;
                                                        text-align: justify;
                                                        word-break: inherit;
                                                        white-space: pre-line;
                                                        word-wrap: inherit;
                                                        font-family: arial;
                                                        border: 0 solid;" class="mores">
                                                                        {!!$atraccion->como_llegar1!!}
                                                                        {!!$atraccion->como_llegar1_1!!}
                                                                    </pre> @elseif(session('locale') == 'en' && $atraccion->como_llegar2!='')
                                                            <pre style="padding: 9.5px;
                                                        text-align: justify;
                                                        word-break: inherit;
                                                        white-space: pre-line;
                                                        word-wrap: inherit;
                                                        font-family: arial;
                                                        border: 0 solid;" class="mores">
                                                                        {!!$atraccion->como_llegar2!!}
                                                                        {!!$atraccion->como_llegar2_2!!}
                                                                    </pre> @else
                                                            <pre style="padding: 9.5px;
                                                        text-align: justify;
                                                        word-break: inherit;
                                                        white-space: pre-line;
                                                        word-wrap: inherit;
                                                        font-family: arial;
                                                        border: 0 solid;" class="mores">
                                                                        {!!$atraccion->como_llegar1!!}
                                                                        {!!$atraccion->como_llegar1_1!!}
                                                            </pre> @endif
							@endif

								<div id="mapa"></div>
							<hr>
							<h3> {{(session('locale') == 'es' )?"Mapa":"Map"}}</h3>



													<a target="_blank" href="http://www.google.com/maps/place/{!!$atraccion->latitud_servicio!!},{!!$atraccion->longitud_servicio!!}">

													<img class="lazy" width="80%" height="80%" alt="web site" data-src="{{ asset('/MobileDetails/img/mapa1.png')}}" src="{{asset('/images/no-image-available.png')}}"  data-srcset="image-to-lazy-load-2x.jpg 2x, image-to-lazy-load-1x.jpg 1x" alt="map">
													</a>




							<!-- End Map -->
							<ul class="cbp_tmtimeline">

							@if($atraccion->telefono!="")
								<li>
									<time class="cbp_tmtime"><span></span><span>{{ trans('publico/labels.label38')}}</span>
									</time>

									<div class="cbp_tmlabel">
										<div class="hidden-xs">
											<img src="img/tour_plan_1.jpg" alt="" class="rounded-circle thumb_visit">
										</div>
										<p>
										{!!$atraccion->telefono!!}
										</p>
									</div>
								</li>
								@endif

							@if($atraccion->direccion_servicio!="")
								<li>
									<time class="cbp_tmtime"><span></span><span>{{ trans('publico/labels.label35')}}</span>
									</time>

									<div class="cbp_tmlabel">
										<div class="hidden-xs">
											<img src="img/tour_plan_1.jpg" alt="" class="rounded-circle thumb_visit">
										</div>

										<p>
										{!!$atraccion->direccion_servicio!!}
										</p>
									</div>
								</li>
								@endif
								@if($atraccion->horario!="")
								<li>
									<time class="cbp_tmtime"><span></span><span>{{ trans('publico/labels.label75')}}</span>
									</time>

									<div class="cbp_tmlabel">
										<div class="hidden-xs">
											<img src="img/tour_plan_1.jpg" alt="" class="rounded-circle thumb_visit">
										</div>

										<p>
										{!!$atraccion->horario!!}
										</p>
									</div>
								</li>
								@endif

								@if($atraccion->correo_contacto!="")
								<li>
									<time class="cbp_tmtime"><span></span><span>{{ trans('publico/labels.label39')}}</span>
									</time>

									<div class="cbp_tmlabel">
										<div class="hidden-xs">
											<img src="img/tour_plan_1.jpg" alt="" class="rounded-circle thumb_visit">
										</div>

										<p>
										{!!$atraccion->correo_contacto!!}
										</p>
									</div>
								</li>
								@endif


								@if($atraccion->pagina_web!="")
								<li>
									<time class="cbp_tmtime"><span></span><span>{{ trans('publico/labels.label40')}}</span>
									</time>

									<div class="cbp_tmlabel">
										<div class="hidden-xs">
											<img src="img/tour_plan_1.jpg" alt="" class="rounded-circle thumb_visit">
										</div>

										<p>
										{!!$atraccion->pagina_web!!}
										</p>
									</div>
								</li>
								@endif


							</ul>

			</div>


		<div id="moret" class="bg_color_1">
			<div class="container container-custom margin_80_55">
				<div class="main_title_2">
					<h2>{{(session('locale') == 'es' )?"Planifica tu viaje":"Plan Your Trip Easly"}}</h2>
					<p >{{(session('locale') == 'es' )?"Encuentra las mejores rutas, restaurantes y sitios turisticos en iWaNaTrip":"Find the best places, restaurants and all the national atractions in iWaNaTrip"}}</p>
				</div>
				<div class="row adventure_feat">
				<a href="https://www.partner.viator.com/en/82253/Ecuador/d727-ttd?activities=all&activities=all&seoDestination=Ecuador&section=ttd&destinationID=727">
				<div class="col-md-4">
						<img src="{{ asset('/MobileDetails/img/adventure_icon_1.svg')}}" alt="" width="75" height="75"> {{(session('locale') == 'es' )?"Muéstrame":"Show Me"}}
						<h3>{{(session('locale') == 'es' )?"Itinerarios estudiados a detalle":"Itineraries studied in detail"}}</h3>
						<p style="color:#555;!important;">{{(session('locale') == 'es' )?"Conoce los mejores itinerarios diseñados para que disfrutes al máximo tu estancia en Ecuador":"Get all the best itineraries designed for you to make your visit more exiting"}}</p>
					</div></a>


					<a href="https://82253.m.viator.com/attractions/Ecuador/727-1-T-0/top-attractions.htm">

					<div class="col-md-4">
						<img src="{{ asset('/MobileDetails/img/adventure_icon_3.svg')}}" alt="" width="75" height="75"> {{(session('locale') == 'es' )?"Muéstrame":"Show Me"}}
						<h3>{{(session('locale') == 'es' )?"Todo organizado":"Everything organized"}}</h3>
						<p style="color:#555;!important;">{{(session('locale') == 'es' )?"No te preocupes por los detalles, nosotros nos encargamos... solo relájate y disfruta el paisaje":"Do not worry about details, we take care of everything... just relax and enjoy the view"}}</p>
					</div>
				</a>
				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->

							</div>
							<!-- /row -->

						</section>


					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
							<div id="price" class="price">
							@if($atraccion->precio_desde!="")
							<span>USD $ {!!$atraccion->precio_desde!!}</span>
							@else
							<span>{{(session('locale') == 'es' )?"Gratis":"Free"}}</span>
								@endif


						</div>
						<ul class="share-buttons">





						</ul>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->

	@include('public_page.reusable.footerMobile')
	<!--/footer-->
	</div>
	<!-- page -->



	<div id="toTop"></div><!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
    <script src="{{ asset('/MobileDetails/js/common_scripts.js')}}"></script>
    <script src="{{ asset('/MobileDetails/js/main.js')}}"></script>





	<!-- INSTAGRAM FEED  -->
	<script>


		$('.hero_in.tours_detail').css("background-image", "{!! url(env('AWS_PUBLIC_URL').'images/fullsize/'.$imagenes[0]->filename) !!}");
		// $('.hero_in.tours_detail').css("background-image", "url({{ asset('images/fullsize/'.$imagenes[0]->filename)}})");
		$('.hero_in.tours_detail').css("background-repeat", "no-repeat");

		$('.hero_in.tours_detail').css("background-position-x:", "center");
		$('.hero_in.tours_detail').css("background-position-y", "center");
		$('.hero_in.tours_detail').css("background-attachment", "scroll");
		$('.hero_in.tours_detail').css("background-size", "auto");

		$('.hero_in.tours_detail').css("background-origin", "padding-box");
		$('.hero_in.tours_detail').css("background-clip", "border-box");




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