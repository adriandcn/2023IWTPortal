<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <!-- Page Title -->
    <title>iWanaTrip | Vive la experiencia Ecuador</title>
    <link rel="shortcut icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.png') }}" />
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <meta name="description" content="iWanaTrip.com">
    <meta name="author" content="iWanaTrip team">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('public_components/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public_components/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public_components/css/letras.css')}}"> {!! HTML::style('css/jquery-labelauty.css') !!}
    <link rel="stylesheet" href="{{ asset('public_components/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{ asset('public_components/components/magnific-popup/magnific-popup.css')}}"> {!!HTML::script('js/sliderTop/jssor.slider.mini.js') !!}
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
        text-decoration: none;
        outline: none;
    }

    .morecontent span {
        display: none;
    }
    </style>
    <style>
    .ui-menu {
        box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.11);
        background: rgba(255, 255, 255, 0.9) none repeat scroll 0 0;
        width: 240px;
    }
    </style>
    <style>
    /* clearfix because of floats */

    .gallery-container:before,
    .gallery-container:after {
        content: "";
        display: table;
    }

    .gallery-container:after {
        clear: both;
    }

    .item {
        float: left;
        margin-bottom: 15px;
        transition: all .2s ease-in-out;
    }

    .item img {
        max-width: 100%;
        max-height: 100%;
        vertical-align: bottom;
    }

    .first-item {
        clear: both;
    }
    /* remove margin bottom on last row */

    .last-row,
    .last-row~.item {
        margin-bottom: 0;
    }

    .item:hover {
        transform: scale(1.5);
    }
    </style>
</head>

<body class="woocommerce">
    <div id="page-wrapper">
        <header id="header" class="header-color-white">
            @include('public_page.reusable.header')
        </header>
        @if(session('locale') == 'es' )
        <?php $titlUp="Galería"?> @else
        <?php $titlUp="Gallery"?> @endif @include('public_page.reusable.banner', ['titulo' =>$titlUp])
        <ul class="breadcrumbs">
            <li><a href="{!!asset('/')!!}" onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1')}}</a></li>
            <li class="active">{!!$titlUp!!}</li>
        </ul>
    </div>
    <div class="section">
        <div class="container">
            <div class="heading-box">
                <button class="btn style1" type="button" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#add-foto">
                    <i class="fa fa-photo"></i>Añadir imágenes
                </button>
            </div>
            <div class="block row">
                <div class="col-sm-12">
                    <div class="owl-carousel box-lg carouselInstagram" data-items="6">
                        @if(!empty($instagrams)) @foreach($instagrams as $media)
                        <div class="Instagram-card">
                            <div class="Instagram-card-image" onclick="setFullImage('{{ $media['images']['standard_resolution']['url'] }}')" data-toggle="modal" data-target="#form-img-full">
                                <img src="{{ $media['images']['standard_resolution']['url'] }}" height=600px/>
                            </div>
                            <div class="Instagram-card-content">
                                <p class="Likes">
                                    <a class="footer-action-icons" href=""><i class="fa fa-heart-o"></i></a> {{$media['likes']['count']}} {{(session('locale') == 'es')?'Me gusta':'Likes'}}
                                    <a href="{{$media['link']}}" target="_blank">
                                      <i class="fa fa-eye"></i> {{(session('locale') == 'es')?'Ver Post ':'Watch Post'}}
                                  </a>
                                </p>
                                <p>
                                    {{ ($media['caption'] != null)?str_limit($media['caption']['text'],60):'' }}
                                </p>
                                <hr>
                                <!-- <p class="comments">{{(session('locale') == 'es')?' ' . $media['comments']['count'] . ' comentarios':' ' . $media['comments']['count'] . ' comentarios'}}</p> -->
                            </div>
                        </div>
                        @endforeach @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="galleryGrid"></div>
                </div>
            </div>
        </div>
    </div>
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
    <div class="modal fade" id="add-foto" tabindex="-1" role="dialog" style="z-index: 99999; background: #00000099;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="testboxForm" class="foto">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">{{trans('front/responsive.agregarfoto')}}</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="{{trans('front/responsive.cerrar')}}">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="input-text full-width" placeholder="Nombre de la imagen" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="tags" id="tags" class="input-text full-width" placeholder="Tags" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="input-text full-width" rows="5" id="descripcion" name="descripcion" placeholder="Descripción de la imagen"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="url_redirect" id="url_redirect" class="input-text full-width" placeholder="Url de redirección" />
                                </div>
                            </div>
                        </div>
                        <!-- {!! Form::open(['url' => route('upload-gallery'), 'class' => 'dropzone', 'files'=>true, 'id'=>'gallery_dropzone']) !!} -->
                        <form action="{{asset('/upload-gallery')}}" class="dropzone" id="gallery-dropzone">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <div class="dz-message">
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                                <div class="dropzone-previews" id="dropzonePreview"></div>
                            </div>
                        </form>
                    </div>
                    <!-- {!! Form::close() !!}        -->
                    <div class="modal-footer">
                        <button class="btn style1" type="button" id="btn_upload">
                            <i class="fa fa-photo"></i>Subir
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal full image-->
    <div class="modal modal-custom fade" id="form-img-full" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content-transparent" id="imgFull">
                <button class="btn style1" type="button" data-dismiss="modal" aria-label="Close" style="color: white;
              top: 80%;
              padding-left: 17px;
              padding-right: 13px;
              float: right;">
                    <i class="fa fa-close"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    {!! HTML::script('js/jquery.js') !!} {!!HTML::script('js/js_public/Compartido.js') !!} {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!} {!!HTML::script('js/jquery.autocomplet.js') !!} {!!HTML::script('js/Compartido.js') !!}
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
    <!-- <script type="text/javascript" src="{{ asset('public_components/components/owl-carousel/owl.carousel.min.js')}}"></script> -->
    <script type="text/javascript" src="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.min.js')}}"></script>
    <!-- plugins -->
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.plugins.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/public_components/components/rowGrid/jquery.row-grid.js')}}"></script>
    {!! HTML::style('/packages/dropzone/dropzone.css') !!} {!! HTML::script('/packages/dropzone/dropzone.js') !!} {!! HTML::script('/assets/js/dropzone-config.js') !!}
    <script>
    sjq(document).ready(function($) {
        $(".container").rowGrid({ itemSelector: ".item", minMargin: 10, maxMargin: 25, firstItemClass: "first-item", lastItemClass: "last-item" });
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
            afterInit: function(el) {
                el.find(".owl-item").eq(0).addClass("synced");
                el.find(".owl-wrapper").equalHeights();
            },
            afterUpdate: function(el) {
                el.find(".owl-wrapper").equalHeights();
            }
        });


        var carouselInstagram = $('.carouselInstagram');
        carouselInstagram.owlCarousel({
            stagePadding: 50,
            loop: false,
            margin: 10,
            nav: false,
            autoPlay: false,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                768: {
                    items: 4
                }
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

        $("#sync2").on("click", ".owl-item", function(e) {
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
    jQuery(document).ready(function($) {

        var jssor_1_SlideshowTransitions = [
            { $Duration: 1800, $Opacity: 2 }
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
        background:url ("{!!url("https://iwannatrip.s3.us-east-1.amazonaws.com/images/img/internas/b05.png")!!}") no-repeat;
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
    @endif
    <!-- load page Javascript -->
    <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>
    <script type="text/javascript">
    function setFullImage($url) {
        $("#imgFull").css("background", 'url(' + $url + ')');
        $("#imgFull").css("background-repeat", 'no-repeat');
        $("#imgFull").css("background-size", 'contain');
        $("#imgFull").css("height", '-webkit-fill-available');
        $("#imgFull").css("background-position", 'center');
        $("#imgFull").css("background", 'url(' + $url + ')');
        $("#imgFull").css("background-repeat", 'no-repeat');
        $("#imgFull").css("background-size", 'contain');
        $("#imgFull").css("height", '-webkit-fill-available');
        $("#imgFull").css("background-position", 'center');
    }
    </script>
    <script type="text/javascript">

    var getGallery = function(){
        var url = '{!! asset("/getGallery") !!}';
        $.ajax({
            type: 'GET',
            url: url,
            data: "",
            success: function(data) {
                $('#galleryGrid').html(data.galleryList);
            },
            error: function(e) {
                console.log(e);
            }
        });
    }

    getGallery();

    Dropzone.options.galleryDropzone = {
        autoProcessQueue: false,
        init: function(e) {
            var myDropzone = this;
            $('#btn_upload').on("click", function() {
                myDropzone.processQueue();
            });
            myDropzone.on("sending", function(file, xhr, data) {
                data.append("name", $('#name').val());
                data.append("tags", $('#tags').val());
                data.append("descripcion", $('#descripcion').val());
                data.append("url_redirect", $('#url_redirect').val());
            });

            myDropzone.on("queuecomplete", function (file) {
                $('#name').val('');
                $('#tags').val('');
                $('#descripcion').val('');
                $('#url_redirect').val('');
                getGallery();
                alert('Imagen guardada correctamente');
            });
        }
    };
    </script>
</body>

</html>