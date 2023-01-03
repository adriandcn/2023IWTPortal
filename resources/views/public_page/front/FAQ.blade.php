<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
    <head>
        <!-- Page Title -->
        <title> FAQ | iWaNaTrip</title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <meta name="description" content='FAQ|iWaNaTrip.com'>
        <meta name="keywords" content="iWaNaTrip">
        <meta name="author" content="iWaNaTrip group">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="Content-Language" content="es">
        <META NAME="robots" CONTENT="all | index | follow">
        <META name="Revisit" content="3 days">

        <meta property="og:title" content="FAQ" />
        <meta property="og:description" content="FAQ" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Theme Styles -->

        <link rel="apple-touch-icon" href="{{ asset('img/60x60_logo_iwana.png')}}">

        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/76x76logo_iwana.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/120x120logo_iwana.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/180x180logo_iwana.png')}}">
        <link rel="icon" sizes="180x180" href="{{ asset('img/180x180logo_iwana.png')}}">

        <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" />
        <link rel="apple-touch-icon" href="{{ asset('images/favicon.png')}}" />

        <!-- Theme Styles -->
        {!! HTML::style('public_components/css/bootstrap.min.css') !!}
        {!! HTML::style('public_components/css/font-awesome.min.css') !!}
        {!! HTML::style('public_components/css/letras.css') !!}
        {!! HTML::style('public_components/css/animate.min.css') !!}
        {!! HTML::style('public_components/components/owl-carousel/owl.carousel.css') !!}
        {!! HTML::style('public_components/css/font-awesome.min.css') !!}
        {!! HTML::style('public_components/components/owl-carousel/owl.transitions.css') !!}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
        {!! HTML::style('css/DataTables/jquery.dataTables.min.css') !!}
        {!! HTML::style('css/DataTables/buttons.dataTables.min.css') !!}
        {!! HTML::style('css/DataTables/responsive.dataTables.min.css') !!}

        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
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

      {!!HTML::script('js/sweetAlert/sweetalert2.min.js') !!}

<!--      <link rel="stylesheet" href="{{ asset('public_components/css/responsive-pack-min.css')}}">-->
            <link rel="stylesheet" href="{{ asset('public_components/css/booking.css')}}">


        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85546019-1', 'auto');
  ga('send', 'pageview');

</script>
        <style>

            a.morelink {
                text-decoration:none;
                outline: none;
            }

            .mapMobile {
                height: 270px;
            }
            .morecontent span {
                display: none;
            }

            .scrollupWeb{
    width:40px;
    height:40px;
    opacity:0.3;
    position:fixed;
    bottom:20px;
    right:0;
    display:none;
    text-indent:-9999px;

    /*background: url("../../img/top.png") no-repeat;*/
    background: url("../../../img/top.png") no-repeat;
}
            .scrollup{
    width:40px;
    height:40px;
    opacity:0.3;
    position:fixed;
    bottom:20px;
    right:40%;
    display:none;
    text-indent:-9999px;
    z-index: 10000;
    background: url("../../img/top.png") no-repeat;
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
     white-space: pre-line;       /* CSS 3 */
        white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
        white-space: -pre-line;      /* Opera 4-6 */
        white-space: -o-pre-line;    /* Opera 7 */
        word-wrap: inherit;       /* Internet Explorer 5.5+ */


}

.section {
    padding: 0px 0 70px;
}

*[data-href] {
  cursor: pointer;
}

#fotoTour{
    width: 80% !important;
}

#fotoTourMobile{
    width: 100% !important;
}

</style>

@if(session('device')!='mobile')
<style>
.botontour{
    display: grid;
    grid-gap: 5px;
    grid-template-columns: repeat(3,1fr);
}

.col1tour{
    grid-column: 1 / 4;
}

.col2tour{
    grid-column: 1 / 3;
}

.col3tour{
    grid-column: 3 / 4;
}

</style>
@endif

@if(session('device')=='mobile')
<style>
.botontour{
    display: grid;
    grid-gap: 0px;
    grid-template-columns: repeat(2,1fr);
}

.col1tour{
    grid-column: 1 / 4;
}

.col2tour{
    grid-column: 1 / 4;
}
</style>
@endif

        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85546019-1', 'auto');
  ga('send', 'pageview');

</script>
    </head>

    <body class="woocommerce">
        <div id="page-wrapper">

            <header id="header"  class="header-color-white" >
                @include('public_page.reusable.header')
            </header>

            @include('public_page.reusable.banner', ['titulo' =>'FAQ'])
            <ul class="breadcrumbs">
                <li><a href="{!!asset('/')!!}"  onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1')}}</a></li>
                <li class="active">{{ trans('agrupamiento/labels.label1')}}</li>
            </ul>
        </div>

 <section id="content">
            <div class="container">
                <div id="main">


                    <div class="panel-group faqs" id="faqs">
                        <div class="panel">
                            <h3 class="panel-title">
                                <a class="collapsed" data-parent="#faqs" data-toggle="collapse" href="#faqs-1"><span class="open-sub"></span>{{ trans('FAQ/labels.faq1')}}</a>
                            </h3>
                            <div class="panel-collapse collapse" id="faqs-1">
                                <div class="panel-content">
                                    <p>{{ trans('FAQ/labels.Res1')}} </p>

                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <h3 class="panel-title">
                                <a class="active" data-parent="#faqs" data-toggle="collapse" href="#faqs-2"><span class="open-sub"></span>{{ trans('FAQ/labels.faq2')}}</a>
                            </h3>
                            <div class="panel-collapse collapse in" id="faqs-2">
                                <div class="panel-content">
                                    <p>{{ trans('FAQ/labels.Res2')}} </p>

 <a href="{!!asset('/faqt')!!}">
                                    <img src="{{ url(env('AWS_PUBLIC_URL').'util/3dsecure-notext.png') }}" title="Este es un sitio seguro, ver mas detalles...">
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <h3 class="panel-title">
                                <a data-parent="#faqs" data-toggle="collapse" href="#faqs-3"><span class="open-sub"></span>{{ trans('FAQ/labels.faq3')}}</a>
                            </h3>
                            <div class="panel-collapse collapse" id="faqs-3">
                                <div class="panel-content">
                                    <p>{{ trans('FAQ/labels.Res3')}} </p>

                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <h3 class="panel-title">
                                <a data-parent="#faqs" data-toggle="collapse" href="#faqs-4"><span class="open-sub"></span>{{ trans('FAQ/labels.faq4')}}</a>
                            </h3>
                            <div class="panel-collapse collapse" id="faqs-4">
                                <div class="panel-content">
                                    <p>{{ trans('FAQ/labels.Res4')}}</p>

                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <h3 class="panel-title">
                                <a data-parent="#faqs" data-toggle="collapse" href="#faqs-5"><span class="open-sub"></span>{{ trans('FAQ/labels.faq5')}}</a>
                            </h3>
                            <div class="panel-collapse collapse" id="faqs-5">
                                <div class="panel-content">
                                    <p>{{ trans('FAQ/labels.Res5')}} </p>

                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <h3 class="panel-title">
                                <a data-parent="#faqs" data-toggle="collapse" href="#faqs-6"><span class="open-sub"></span>{{ trans('FAQ/labels.faq6')}}</a>
                            </h3>
                            <div class="panel-collapse collapse" id="faqs-6">
                                <div class="panel-content">
                                    <p>{{ trans('FAQ/labels.Res6')}} </p>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>


        @if(session('device')!='mobile')
                           <a href="#" class="scrollupWeb">Scroll</a>
            @else
                           <a href="#" class="scrollup">Scroll</a>
            @endif



        <footer id="footer" class="style4">
            <div class="callout-box style2">
                <div class="container">
                    <div class="callout-content">
                        <div class="callout-text">
                            <h4>{{ trans('publico/labels.label26')}}</h4>
                        </div>
                        <div class="callout-action">
                            <a href="https://iwannatrip.com" onclick="$('.woocommerce').LoadingOverlay('show');" class="btn style4">{{ trans('publico/labels.label27')}}</a>
                        </div>
                    </div>
                </div>
            </div>


            @include('public_page.reusable.footer')
        </footer>
    </div>

    <!-- Javascript -->
    {!! HTML::script('js/jquery.js') !!}


    {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}
    {!!HTML::script('js/Compartido.js') !!}


    <script type="text/javascript" src="{{ asset('public_components/js/jquery-2.1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery.noconflict.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/modernizr.2.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/jquery-ui.1.11.2.min.js')}}"></script>

    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="{{ asset('public_components/js/bootstrap.min.js')}}"></script>


    @if(session('device')!='mobile')
    <script>
    $('tr[data-href]').on("click", function() {
        $('.woocommerce').LoadingOverlay('show');
        document.location = $(this).data('href');
        $('.woocommerce').LoadingOverlay('hide');
    });

    $(document).ready(function() {

        $('.pepa').attr('id', 'example');
        if ( $( "#example" ).length ) {
            function explode(){
                $('#example').DataTable( {
                    //lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    language: {
                        decimal: "",
                        emptyTable: "No hay información",
                        info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                        infoEmpty: "Mostrando 0 to 0 of 0 Entradas",
                        infoFiltered: "(Filtrado de _MAX_ total entradas)",
                        infoPostFix: "",
                        thousands: ",",
                        lengthMenu: "Mostrar _MENU_ Entradas",
                        loadingRecords: "Cargando...",
                        processing: "Procesando...",
                        search: "Buscar:",
                        zeroRecords: "Sin resultados encontrados",
                        paginate: {
                            first: "Primero",
                            last: "Ultimo",
                            next: "Siguiente",
                            previous: "Anterior"
                        }
                    },
                    //input de busqueda
                    bFilter: true,
                    responsive: true,
                    searching: true,
                    sSearch:"Buscar:",
                    //para mostrar los botones de exportar
                    //dom: 'Bfrtip',
                    lengthChange: false,
                    order: [],
                    columnDefs: [
                        { orderable: false, targets: [0,4] }
                    ],

                } );
            }
            setTimeout(explode, 1000);
        }

    } );
    </script>
    @endif

@if(session('device')=='mobile')
<script>

$('tr[data-href]').on("click", function() {
    $('.woocommerce').LoadingOverlay('show');
    document.location = $(this).data('href');
    $('.woocommerce').LoadingOverlay('hide');
});

$('.pepa').attr('id', 'example');
    if ( $( "#example" ).length ) {
        function explode(){
            $('#example').DataTable( {
                language: {
                    decimal: "",
                    emptyTable: "No hay información",
                    info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    infoEmpty: "Mostrando 0 to 0 of 0 Entradas",
                    infoFiltered: "(Filtrado de _MAX_ total entradas)",
                    infoPostFix: "",
                    thousands: ",",
                    lengthMenu: "Mostrar _MENU_ Entradas",
                    loadingRecords: "Cargando...",
                    processing: "Procesando...",
                    search: "Buscar:",
                    zeroRecords: "Sin resultados encontrados",
                    paginate: {
                        first: "Primero",
                        last: "Ultimo",
                        next: "Siguiente",
                        previous: "Anterior"
                    }
                },
                bFilter: true,
                responsive: true,
                searching: true,
                sSearch:"Buscar:",
                lengthChange: false,
                order: [],
                columnDefs: [
                    { orderable: false, targets: [0] }
                ],

            } );
        }
        setTimeout(explode, 1000);
    }
</script>
@endif

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
                                    // Configure/customize these variables.
                                    var showChar = 900; // How many characters are shown by default
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
     <?php $header = "/img/portada_face_iwanatrip_04.jpg";?>
  <script>


jQuery(document).ready(function ($) {
   $(".page-title-container.style3").css('backgroundImage','url({!!$header!!})');
});


</script>
    @endif
<script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>
    <!-- load page Javascript -->


</body>
</html>
