<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
    <head>
        <!-- Page Title -->
        <title>iWanaTrip Services| Vive la experiencia Ecuador</title>

        <link rel="shortcut icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.png') }}" />


        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <meta name="description" content="iWanaTrip.com Services">
        <meta name="author" content="iWanaTrip team">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Theme Styles -->

        <link rel="stylesheet" href="{{ asset('public_components/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public_components/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('public_components/css/letras.css')}}">

{!! HTML::style('css/jquery-labelauty.css') !!}
        <link rel="stylesheet" href="{{ asset('public_components/css/animate.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public_components/components/owl-carousel/owl.carousel.css')}}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />
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

        <style>

            a.morelink {
                text-decoration:none;
                outline: none;
            }
            .morecontent span {
                display: none;
            }

        </style>
        <style>
            .ui-menu {
    box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.11);
    background:rgba(255, 255, 255, 0.9) none repeat scroll 0 0;
    width: 240px;
            }
        </style>
    </head>
    <body class="woocommerce">
        <div id="page-wrapper">

            <header id="header"  class="header-color-white" >
                @include('public_page.reusable.header')
            </header>
                                       @if(session('locale') == 'es' )
                                          <?php $titlUp="Servicios"?>
                                            @else

                                           <?php $titlUp="Services"?>  @endif

      @include('public_page.reusable.banner', ['titulo' =>$titlUp])
<ul class="breadcrumbs">
                <li><a href="{!!asset('/')!!}"  onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1')}}</a></li>



                <li class="active">{!!$titlUp!!}</li>
            </ul>
        </div>




        <div class="section">
                <div class="container">
                    <div class="heading-box">
                        <h2 class="box-title">{{ trans('welcome/index.label13')}}</h2>
                        <p class="desc-lg">{{ trans('welcome/index.label14')}}</p>
                    </div>
                    <div class="block row">
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-4 box">
                                <div class="icon-container">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label15')}}</a></h4>
                                    <p>{{ trans('welcome/index.label16')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-4 box">
                                <div class="icon-container">
                                    <i class="fa fa-thumbs-o-up"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label17')}}</a></h4>
                                    <p>{{ trans('welcome/index.label18')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-4 box">
                                <div class="icon-container">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label17')}}</a></h4>
                                    <p>{{ trans('welcome/index.label20')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-4 box">
                                <div class="icon-container">
                                    <i class="fa  fa-eye "></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label21')}}</a></h4>
                                    <p>{{ trans('welcome/index.label22')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="post-slider style1 owl-carousel box">
                                <a href="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/142buceo-puerto-lopez-manabi.jpg') !!}" class="soap-mfp-popup">
                                    <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/142buceo-puerto-lopez-manabi.jpg')!!}" alt="iWaNATrip">

                                </a>
								<a href="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/104p3031916.jpg')!!}" class="soap-mfp-popup">
                                    <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/104p3031916.jpg')!!}" alt="iWaNATrip">
                                </a>

                                <a href="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/106ecuador-cotopaxi.jpg')!!}" class="soap-mfp-popup">
                                    <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/106ecuador-cotopaxi.jpg')!!}" alt="iWaNATrip">

                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h3>iWaNaTrip</h3>
                            <p>{{ trans('welcome/index.label24')}}</p>
                            <p>{{ trans('welcome/index.label23')}}</p>
							<p>{{ trans('welcome/index.label25')}}</p>
                            <br>

                        </div>
                    </div>
                </div>
            </div>


			 <section id="content">
            <div class="container">
                <div id="main">
				<div class="section-info">
                        <h3 class="section-title">{{ trans('welcome/index.label35')}}</h3>
                        <div class="pricing-table-container">
                            <div class="row">
                                <div class="col-sms-6 col-sm-6 col-md-4">
                                    <div class="pricing-table style1">
                                        <div class="pricing-table-header">
                                            <div class="pricing-row">
                                                <span class="currency-symbol">$</span><span class="price-value">7</span>
                                                <small>{{ trans('welcome/index.label36')}}</small>
                                            </div>
                                            <h4 class="pricing-type">Standard</h4>
                                        </div>
                                        <div class="pricing-table-content">
                                            <ul>
                                                <li>{{ trans('welcome/index.label37')}}</li>
                                                <li>{{ trans('welcome/index.label38')}}</li>
                                                <li>{{ trans('welcome/index.label39')}}</li>
                                                <li>{{ trans('welcome/index.label40')}}</li>
                                                <li>{{ trans('welcome/index.label41')}}</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sms-6 col-sm-6 col-md-4">
                                    <div class="pricing-table active style1">
                                        <div class="pricing-table-header">
                                            <div class="pricing-row">
                                                <span class="currency-symbol">$</span><span class="price-value">25</span>
                                                <small>{{ trans('welcome/index.label42')}}</small>
                                            </div>
                                            <h4 class="pricing-type">Business</h4>
                                        </div>
                                        <div class="pricing-table-content">
                                            <ul>
                                                <li>{{ trans('welcome/index.label37')}}</li>
                                                <li>{{ trans('welcome/index.label38')}}</li>
                                                <li>{{ trans('welcome/index.label39')}}</li>
                                                <li>{{ trans('welcome/index.label43')}}</li>
                                                <li>{{ trans('welcome/index.label41')}}</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sms-6 col-sm-6 col-md-4">
                                    <div class="pricing-table style1">
                                        <div class="pricing-table-header">
                                            <div class="pricing-row">
                                                <span class="currency-symbol">$</span><span class="price-value">70</span>
                                                <small>{{ trans('welcome/index.label44')}}</small>
                                            </div>
                                            <h4 class="pricing-type">Premium</h4>
                                        </div>
                                        <div class="pricing-table-content">
                                            <ul>
                                                <li>{{ trans('welcome/index.label37')}}</li>
                                                <li>{{ trans('welcome/index.label38')}}</li>
                                                <li>{{ trans('welcome/index.label39')}}</li>
                                                <li>{{ trans('welcome/index.label45')}}</li>
                                                <li>{{ trans('welcome/index.label41')}}</li>
												<li>{{ trans('welcome/index.label46')}}</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				</div>
				</section>

        <section id="content">
            <div class="section">
                <div class="container">
                    <div class="heading-box">
                        <h1 class="box-title">iWaNaTrip</h1>
                        <h2>{{ trans('welcome/index.label1')}}</h2>
						<p>{{ trans('welcome/index.label2')}}</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-3 box">
                                <div class="icon-container">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label3')}}</a></h4>
                                    <p>{{ trans('welcome/index.label4')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-3 box">
                                <div class="icon-container">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label5')}}</a></h4>
                                    <p>{{ trans('welcome/index.label6')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-3 box">
                                <div class="icon-container">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label7')}}</a></h4>
                                    <p>{{ trans('welcome/index.label8')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="icon-box style-boxed-3 box">
                                <div class="icon-container">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label9')}}</a></h4>
                                    <p>{{ trans('welcome/index.label10')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="section">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="post-slider style1 owl-carousel box">
                                <a href="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/book1.jpg')!!}" class="soap-mfp-popup">
                                    <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/book1.JPG')!!}" alt="">
                                </a>
                                <a href="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/book2.jpg')!!}" class="soap-mfp-popup">
                                    <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/book2.JPG')!!}" alt="">
                                </a>
                                <a href="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/book3.jpg')!!}" class="soap-mfp-popup">
                                    <img src="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/book3.JPG')!!}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h3>Booking</h3>
                            <p>{{ trans('welcome/index.label11')}}</p>
                            <p>{{ trans('welcome/index.label12')}}</p>
                            <br>

                        </div>
                    </div>
                </div>
            </div>




            <div class="section">
                <div class="container">
				<div class="heading-box">
                        <h1 class="box-title">{{ trans('welcome/index.label26')}}</h1>

                    </div>
                    <div class="row add-clearfix">
                        <div class="col-sms-6 col-sm-6 col-md-4">
                            <div class="icon-box style-side-1 box">
                                <i class="fa fa-eye"></i>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label27')}}</a></h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-4">
                            <div class="icon-box style-side-1 box">
                                <i class="fa fa-laptop"></i>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label29')}}</a></h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-4">
                            <div class="icon-box style-side-1 box">
                                <i class="fa fa-shopping-cart"></i>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label28')}}</a></h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-4">
                            <div class="icon-box style-side-1 box">
                                <i class="fa fa-umbrella"></i>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label30')}}</a></h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-4">
                            <div class="icon-box style-side-1 box">
                                <i class="fa fa-thumbs-o-up"></i>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label31')}}</a></h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-sms-6 col-sm-6 col-md-4">
                            <div class="icon-box style-side-1 box">
                                <i class="fa fa-star"></i>
                                <div class="box-content">
                                    <h4 class="box-title"><a href="#">{{ trans('welcome/index.label32')}}</a></h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		 <section id="content">
            <div class="section">
                <div class="container">
                    <div class="heading-box">
                        <h1 class="box-title">info@iwannatrip.com</h1>


                    </div>
				</div>
				</div>
				</section>

          <footer id="footer" class="style4">
            <div class="callout-box style2">
                <div class="container">
                    <div class="callout-content">
                        <div class="callout-text">
                            <h4>{{ trans('publico/labels.label119')}}</h4>
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
        {!!HTML::script('js/Compartido.js') !!}

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
            background:url ("{!!url("https://iwannatrip.s3.us-east-1.amazonaws.com/images/img/internas/b05.png")!!}") no-repeat;
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

    @endif







    <!-- load page Javascript -->
    <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>


</body>
</html>