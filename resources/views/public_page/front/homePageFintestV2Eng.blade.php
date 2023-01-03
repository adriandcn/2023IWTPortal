<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <!-- Page Title -->
    <title>iWaNaTrip - Viaja y vive la experiencia de conocer Ecuador - Aventura</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta name="description" content="iWaNaTrip es un espacio de busqueda para la red viajeros de todo el mundo, permite compartir el contenido de forma sencilla a traves de internet.
              iWaNaTrip es experiencia de vida. Deja de ser turista, conviertete en viajero. Viaja por el mundo y descubre Ecuador">
    <meta name="keywords" content="iWaNaTrip, Vive, Turismo, Transformacion digital, Guia turistica,  Marketing digital, Turistas, Viajeros, Viaja, Potencial turistico, Ecuador, Viajar,  Aventura, Tours">
    <meta name="author" content="iWaNaTrip group">
    <meta http-equiv="Content-Language" content="en">
    <meta NAME="robots" CONTENT="all | index | follow">
    <meta name="Revisit" content="3 days">
    <meta name="msvalidate.01" content="421B34D10B14BB413DA96450492A81E9" />

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


    <link rel="stylesheet" href="{{ asset('/public_components/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />

    <!-- Stylesheets -->
	
	<link type="text/css" href="{{ asset('/css/plugin-frameworks/bootstrap.css')}}" rel="stylesheet">
	
	<link  type="text/css" href="{{ asset('/css/fonts/ionicons.css')}}" rel="stylesheet">
	
		
	<link type="text/css" href="{{ asset('/css/common/styles.css')}}" rel="stylesheet">
	

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{ asset('/public_components/components/magnific-popup/magnific-popup.css')}}">
    
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

<body>

    <div id="page-wrapper">
        <header id="header" class="header-color-white">
            @include('public_page.reusable.header')
        </header>
        @if(session('device')!='mobile')

		<!-- banner -->
	<div class="banner-figures">
		<div class="banner">
			<div class="container banner-drop">
				<div class="header">
					<div class="header-left logo">
						<h1><a href="index.html"> <img alt="iWaNaTrip" style="width: 159.883px; height: 152.777px;" src="{{ asset('/img/index-logo.png')}}"></a></h1>
					</div>
				</div>
			
				<div class="banner-text-agileits">
			         <h3  class="caption-xl" >
                       <b>#</b>iWaNaTrip<b>all</b>Ecuador
                     </h3>
				</div>
			
				<div class="subscribe">
                            {!! Form::open(['url' => route('min-search'), 'method' => 'get', 'id'=>'min-search']) !!}
                                <input type="text" class="Search" name="s" id="s"  required="">
								<input type="submit" value="">
                              {!! Form::close() !!}
                        </div>

				<div class="social-icons animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
					<ul class="top-links">
						<li><a href="https://www.facebook.com/iWaNaTrip"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/iwannatrip_/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/in/iwanatrip-group-a537b4130/"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!-- //banner -->
   @endif

   <div class="container">
		<div class="h-600x h-sm-auto">
			<div class="h-2-3 h-sm-auto oflow-hidden">
		
				<div class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div class="img-bg bg-1 bg-grad-layer-6"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h3 class="mb-15 mb-sm-5 font-sm-13"><b>Peter Thiels VC Found Invests Million into Bitcoin, Market Reacts</b></h3>
							<ul class="list-li-mr-20">
								<li>by <span class="color-primary"><b>Olivia Capzallo</b></span> Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x">
				
					<div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="#">
						
							<div class="img-bg bg-2 bg-grad-layer-6"></div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b>Russians Bisiops Condems Cryptocurrecy</b></h4>
								<ul class="list-li-mr-20">
									<li>Jan 25, 2018</li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
					<div class="pl-5 ptb-5 pl-sm-0 pos-relative h-50">
						<a class="pos-relative h-100 dplay-block" href="#">
						
							<div class="img-bg bg-3 bg-grad-layer-6"></div>
							
							<div class="abs-blr color-white p-20 bg-sm-color-7">
								<h4 class="mb-10 mb-sm-5"><b>Bitcoin Adoption by Business in 2017</b></h4>
								<ul class="list-li-mr-20">
									<li>Jan 25, 2018</li>
									<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
									<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
								</ul>
							</div><!--abs-blr -->
						</a><!-- pos-relative -->
					</div><!-- w-1-3 -->
					
				</div><!-- float-left -->

			</div><!-- h-2-3 -->
			
			<div class="h-1-3 oflow-hidden">
		
				<div class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div class="img-bg bg-4 bg-grad-layer-6"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>2017 Market Performance: Crypto vs.Stock</b></h4>
							<ul class="list-li-mr-20">
								<li>Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="plr-5 plr-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div class="img-bg bg-5 bg-grad-layer-6"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>Culture Stock: Bitcoin a Part of all Walks of life in 2017</b></h4>
							<ul class="list-li-mr-20">
								<li>Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
				<div class="pl-5 pl-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x">
					<a class="pos-relative h-100 dplay-block" href="#">
					
						<div class="img-bg bg-6 bg-grad-layer-6"></div>
						
						<div class="abs-blr color-white p-20 bg-sm-color-7">
							<h4 class="mb-10 mb-sm-5"><b>Bitcoin Billionares Hidding in Plain Sight</b></h4>
							<ul class="list-li-mr-20">
								<li>Jan 25, 2018</li>
								<li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i>30,190</li>
								<li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i>30</li>
							</ul>
						</div><!--abs-blr -->
					</a><!-- pos-relative -->
				</div><!-- w-1-3 -->
				
			</div><!-- h-2-3 -->
		</div><!-- h-100vh -->
	</div><!-- container -->


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
									$(window).bind("load", function () {
    									GetDataLatestOperators();
									});
								</script>
				
                        <script>
                            $(document).ready(function() {
					
                                var pagina = 1;
                                GetDataAjaxTopPlaces("{!!asset('/getTopPlaces')!!}?page=" + pagina);
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
                               $(".next").click(function(e){
                    var selectedCarousel = $(this)[0].attributes[1].nodeValue;
                    $('.carouselTypeService').trigger('next.owl.carousel');
                  })
                $(".prev").click(function(e){
                    var selectedCarousel = $(this)[0].attributes[1].nodeValue;
                    $('.carouselTypeService').trigger('prev.owl.carousel');
                })
            
                       
                        </script>

                         
</body>

</html>