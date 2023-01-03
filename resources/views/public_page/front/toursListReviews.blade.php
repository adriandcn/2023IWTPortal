<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
    <head>
        <!-- Page Title -->
        <title> Rate {{ $agrupacion[0]->nombre }} | iWaNaTrip</title>
        <!-- Page Title -->
        <title> Rate {{ $agrupacion[0]->nombre }} | iWaNaTrip</title>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <meta name="description" content='{{ trans('agrupamiento/labels.label1')}} |iWaNaTrip.com'>
        <meta name="keywords" content="{{ trans('agrupamiento/labels.label1')}}">
        <meta name="author" content="iWaNaTrip group">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="Content-Language" content="es">
        <META NAME="robots" CONTENT="all | index | follow">
        <META name="Revisit" content="3 days">

        <meta property="og:title" content="{{ trans('agrupamiento/labels.label1')}}" />
        <meta property="og:description" content="{{ trans('agrupamiento/labels.label1')}}" />
        @if(isset($imagenes[0]->filename))
        <meta property="og:image" content="{{ url(env('AWS_PUBLIC_URL').'images/icon/')}}/{{$imagenes[0]->filename}}" />
         @endif
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
        <link rel="stylesheet" href="{{ asset('public_components/components/magnific-popup/magnific-popup.css')}}">
        {!!HTML::script('js/sliderTop/jssor.slider.mini.js') !!}
        {!!HTML::script('js/sweetAlert/sweetalert2.min.js') !!}

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

            *[data-href] {
                cursor: pointer;
            }

            .containerestrellas{
                display: grid;
                grid-template-columns: repeat(5,1fr);
            }


            #emoji th {
                border: 1px solid #dedede;
                border-radius: 5px;
                width: 10%;
            }

            #emoji th:hover {
                /* background-color: rgb(0, 174, 255); */
            }

            #emoji th div{
                /* Making the headerlinks 100% width */
                width:100%;
                float:left;

                /* border: 1px solid black; */
                /* padding: 10px; */

                /* Making the headerlinks 100% height ??? */
                height: 100%; /* doesnt work! */
                min-height:100%;
            }

            .switch-field {
                /* display: flex; */
                /* margin-bottom: 36px; */
                overflow: hidden;
            }

            .switch-field input {
                position: absolute !important;
                /* clip: rect(0, 0, 0, 0); */
                /* clip: rect(20px,60px,200px,0px) */
                /* height: 1px;
                width: 1px; */
                border: 1px solid orange;
                overflow: hidden;
            }

            .switch-field label {
                background-color: transparent;
                /* color: rgba(0, 0, 0, 0.6); */
                /* font-size: 14px; */
                line-height: 1;
                text-align: center;
                /* padding: 8px 16px; */
                /* margin-right: -1px; */
                /* border: 1px solid rgba(0, 0, 0, 0.2); */
                /* box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1); */
                transition: all 0.1s ease-in-out;
            }

            .switch-field label:hover {
                cursor: pointer;
            }

            .switch-field input:checked + label {
                background-color: #a5dc86 !important;
                box-shadow: none;
            }

            .switch-field label:first-of-type {
                border-radius: 4px 0 0 4px;
            }

            .switch-field label:last-of-type {
                border-radius: 0 4px 4px 0;
            }

            /* prueba */
            .checkboxFive {
                position: relative;
                text-align: center;
            }

            .checkboxFive label {
                margin-top: -16px;
                text-align: center;
                align-content: center;
                cursor: pointer;
                position: absolute;
                width: 100%;
                height: 52px;
                top: 0;
                left: 0;
                z-index: 950;
            }

            .checkboxFive label:hover::after {
                opacity: 0.5;
                background-color: #a5dc86 !important;
            }

            .checkboxFive input:checked + label {
                /* background-color: #a5dc86 !important; */
                background-color: rgb(0, 174, 255);
                box-shadow: none;
            }

            .emoji{
                width: 100%;
                height: 50px;
                font-size: 40px;
                position: absolute;
                left: 0;
                padding-top: 20px;
            }

            input[type=radio] {
            /* border: 1px solid #fff;
            padding: 0.5em; */
            -webkit-appearance: none;
            }

            .radio-group-servicio{
                position: relative;
                width:100%;
            }

            .radio-group-organizacion{
                position: relative;
                width:100%;
            }

            .radio-group-calidad{
                position: relative;
                width:100%;
            }

            .radio-group-seguridad{
                position: relative;
                width:100%;
            }

        </style>

        {{-- DISENO PARA DESKTOP --}}
        @if(session('device')!='mobile')
            <style>
                .estrella1{
                    height: 70px;
                    grid-column: 1 / 3;
                }

                .estrella2{
                    margin-bottom: 5px;
                    height: 70px;
                    text-align: left;
                    grid-column: 3 / 6;
                }

                .radio{
                    display:inline-block;
                    width:15%;
                    height: 60px;
                    border-radius:5%;
                    background-color:transparent;
                    border: 1px solid #dedede;
                    cursor:pointer;
                    margin-left: 15px;
                }

                .radio:before{
                    border: 0;
                }

                .radio.selected{
                    background-color: rgb(0, 174, 255);
                    box-shadow: none;
                }

                .emojiPos{
                    font-size: 50px;
                    position: absolute;
                    left: 6px;
                    top: 20px;

                }
                .textoPrincipal{
                    text-transform: uppercase;
                    color:#d7360f;
                    font-weight: bold;
                    font-size:35px
                }
            </style>
        @endif

        {{-- DISENO PARA MOBILE --}}
        @if(session('device')=='mobile')
            <style>
                .estrella1{
                    grid-column: 1 / 12;
                    font-size: 18px;
                    margin-bottom: 2%;
                }

                .estrella2{
                    text-align: left;
                    grid-column: 1 / 12;
                    margin-bottom: 5%;
                    text-align: center;
                }

                .radio{
                    display:inline-block;
                    width:15%;
                    height: 60px;
                    border-radius:5%;
                    background-color:transparent;
                    border: 1px solid #dedede;
                    cursor:pointer;
                    margin-left: 10px;
                }

                .radio:before{
                    border: 0;
                }

                .radio.selected{
                    background-color: rgb(0, 174, 255);
                    box-shadow: none;
                }

                .emojiPos{
                    font-size: 40px;
                    position: absolute;
                    left: 12%;
                    top: 20px;

                }
                .textoPrincipal{
                    text-transform: uppercase;
                    color:#d7360f;
                    font-weight: bold;
                    font-size:25px
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

            @include('public_page.reusable.banner', ['titulo' =>'Reviews Tours'])
            <ul class="breadcrumbs">
                <li><a href="{!!asset('/')!!}"  onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1')}}</a></li>
                <li class="active">Reviews</li>
            </ul>
        </div>

        <section id="content">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sm-8 col-md-9">
                        <div class="product type-product">
                            <div class="row single-product-details" style="padding: 2% !important;">
                                <!-- TABLA DE LOS TOURS -->
                                <h1 class="title"> Rate <span class="textoPrincipal">{{ $agrupacion[0]->nombre }}</span>  </h1>
                                <p style="font-size:16px;text-align:left;"> <strong> {{ $fecha }} </strong> <br>
                                    <strong> {{ $nombrecalendario}} </strong>
                                </p>
                                <br>


                                <div >
                                    {!! Form::open(['url' => route('postReviewsTours'),  'id'=>'preview']) !!}
                                        <input type="hidden" name="id_agrupamiento" id="id_agrupamiento" value="{!! $agrupacion[0]->id!!}">
                                        <input type="hidden" name="id_usuario_servicio" id="id_usuario_servicio" value="{!! $agrupacion[0]->id_usuario_servicio!!}">
                                        <input type="hidden" name="token_reservacion" id="token_reservacion" value="{!! $reservacion[0]->token_consulta!!}">
                                        <input type="hidden" name="review_servicio" type="text" id="radio-value-servicio"/>
                                        <input type="hidden" name="review_organizacion" type="text" id="radio-value-organizacion"/>
                                        <input type="hidden" name="review_calidad" type="text" id="radio-value-calidad"/>
                                        <input type="hidden" name="review_seguridad" type="text" id="radio-value-seguridad"/>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="form-group">

                                                    {{-- CALIFICACION SERVICIO  --}}
                                                    <div class="containerestrellas">
                                                        <div class="estrella1">
                                                            <label>{{ trans('agrupamiento/labels.primer_servicio')}}</label>
                                                        </div>
                                                        <div class="estrella2">
                                                            <div class="radio-group-servicio">
                                                                <div class="radio" data-value="1" id="servicio1">
                                                                    <span class="emojiPos">&#x1F62B;</span>
                                                                </div>
                                                                <div class="radio" data-value="2" id="servicio2">
                                                                    <span class="emojiPos">&#x1F61E;</span>
                                                                </div>
                                                                <div class="radio" data-value="3" id="servicio3">
                                                                    <span class="emojiPos">&#x1F610;</span>
                                                                </div>
                                                                <div class="radio" data-value="4" id="servicio4">
                                                                    <span class="emojiPos">&#x1F60A;</span>
                                                                </div>
                                                                <div class="radio" data-value="5" id="servicio5">
                                                                    <span class="emojiPos">&#x1F600;</span>
                                                                </div>
                                                                <br/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- CALIFICACION ORGANIZACION --}}
                                                    <div class="containerestrellas">
                                                        <div class="estrella1">
                                                            <label>{{ trans('agrupamiento/labels.segundo_servicio')}}</label>
                                                        </div>
                                                        <div class="estrella2">
                                                            <div class="radio-group-organizacion">
                                                                <div class="radio" data-value="1" id="organizacion1">
                                                                    <span class="emojiPos">&#x1F62B;</span>
                                                                </div>
                                                                <div class="radio" data-value="2" id="organizacion2">
                                                                    <span class="emojiPos">&#x1F61E;</span>
                                                                </div>
                                                                <div class="radio" data-value="3" id="organizacion3">
                                                                    <span class="emojiPos">&#x1F610;</span>
                                                                </div>
                                                                <div class="radio" data-value="4" id="organizacion4">
                                                                    <span class="emojiPos">&#x1F60A;</span>
                                                                </div>
                                                                <div class="radio" data-value="5" id="organizacion5">
                                                                    <span class="emojiPos">&#x1F600;</span>
                                                                </div>
                                                                <br/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- CALIFICACION CALIDAD --}}
                                                    <div class="containerestrellas">
                                                        <div class="estrella1">
                                                            <label>{{ trans('agrupamiento/labels.tercer_servicio')}}</label>
                                                        </div>
                                                        <div class="estrella2">
                                                            <div class="radio-group-calidad">
                                                                <div class="radio" data-value="1" id="calidad1">
                                                                    <span class="emojiPos">&#x1F62B;</span>
                                                                </div>
                                                                <div class="radio" data-value="2" id="calidad2">
                                                                    <span class="emojiPos">&#x1F61E;</span>
                                                                </div>
                                                                <div class="radio" data-value="3" id="calidad3">
                                                                    <span class="emojiPos">&#x1F610;</span>
                                                                </div>
                                                                <div class="radio" data-value="4" id="calidad4">
                                                                    <span class="emojiPos">&#x1F60A;</span>
                                                                </div>
                                                                <div class="radio" data-value="5" id="calidad5">
                                                                    <span class="emojiPos">&#x1F600;</span>
                                                                </div>
                                                                <br/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- CALIFICACION SEGURIDAD --}}
                                                    <div class="containerestrellas">
                                                        <div class="estrella1">
                                                            <label>{{ trans('agrupamiento/labels.cuarto_servicio')}}</label>
                                                        </div>
                                                        <div class="estrella2">

                                                            <div class="radio-group-seguridad">
                                                                <div class="radio" data-value="1" id="seguridad1">
                                                                    <span class="emojiPos">&#x1F62B;</span>
                                                                </div>
                                                                <div class="radio" data-value="2" id="seguridad2">
                                                                    <span class="emojiPos">&#x1F61E;</span>
                                                                </div>
                                                                <div class="radio" data-value="3" id="seguridad3">
                                                                    <span class="emojiPos">&#x1F610;</span>
                                                                </div>
                                                                <div class="radio" data-value="4" id="seguridad4">
                                                                    <span class="emojiPos">&#x1F60A;</span>
                                                                </div>
                                                                <div class="radio" data-value="5" id="seguridad5">
                                                                    <span class="emojiPos">&#x1F600;</span>
                                                                </div>
                                                                <br/>
                                                            </div>

                                                            {{-- <table style="width:100%" id="emoji" cellspacing="10">
                                                                <tr>
                                                                    <th>
                                                                        <div class="switch-field">
                                                                            <input type="radio" value="1" name="review_seguridad"/>
                                                                            <label for="radio-one">
                                                                                <span style="font-size: 50px;">&#x1F62B;</span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="switch-field">
                                                                            <input type="radio" value="2" name="review_seguridad"/>
                                                                            <label for="radio-one">
                                                                                <span style="font-size: 50px;">&#x1F61E;</span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="switch-field">
                                                                            <input type="radio" value="3" name="review_seguridad"/>
                                                                            <label for="radio-one">
                                                                                <span style="font-size: 50px;">&#x1F610;</span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="switch-field">
                                                                            <input type="radio" value="4" name="review_seguridad"/>
                                                                            <label for="radio-one">
                                                                                <span style="font-size: 50px;">&#x1F60A;</span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="switch-field">
                                                                            <input type="radio" value="5" name="review_seguridad"/>
                                                                            <label for="radio-one">
                                                                                <span style="font-size: 50px;">&#x1F600;</span>
                                                                            </label>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </table>                                                                                                                           --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label> <span style="font-size: 25px;">&#x1F600;</span> What did you like?</label>
                                                    <textarea class="input-text full-width" rows="4" name="mensaje_reviewer" style="resize:none;"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label> <span style="font-size: 25px;">&#x1F61E;</span> What did not you like?</label>
                                                    <textarea class="input-text full-width" rows="4" name="mensaje_reviewer_dont_like" style="resize:none;" required></textarea>
                                                </div>


                                                @if(session('device')!='mobile')
                                                    <div class="form-group">
                                                        <a onclick="AjaxContainerRegistroLoadFTours('preview','single-product-details')" class="btn style1">{{ trans('agrupamiento/labels.review_send')}}</a>
                                                    </div>
                                                @endif

                                                @if(session('device')=='mobile')
                                                    <div class="form-group text-center">
                                                        <a onclick="AjaxContainerRegistroLoadFTours('preview','single-product-details')" class="btn style1">{{ trans('agrupamiento/labels.review_send')}}</a>
                                                    </div>
                                                @endif


                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                            @if(session('device')=='mobile')
                                <div class="sidebar col-sm-4 col-md-4">

                            @if(isset($servicios))

                        <div class="widget box">

                            <h4>{{ trans('publico/labels.label18')}}</h4>
                            <ul class="product-list-widget">
                                @foreach ($servicios as $serv)
                             @if($serv->id_catalogo_servicios!=3)


                       <li style="background:#fff; border: solid #f7f7f7;box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;">


                                    <div class="product-image">
                                        <a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/{!!$serv->id_catalogo_servicios!!}"  onclick="$('.container').LoadingOverlay('show');">

                                            <img src="{{ asset('img/register/')}}/{!!$serv->id_catalogo_servicios!!}.png" alt="">
                                        </a>
                                    </div>
                                      <div class="product-content">

                                           @if(session('locale') == 'es' )
                                    <h6 class="product-title"><a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/{!!$serv->id_catalogo_servicios!!}"  onclick="$('.container').LoadingOverlay('show');">{!!$serv->nombre_servicio!!}</a></h6>

                                    @else
                                    <h6 class="product-title"><a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/{!!$serv->id_catalogo_servicios!!}"  onclick="$('.container').LoadingOverlay('show');">{!!$serv->nombre_servicio_eng!!}</a></h6>

                                    @endif
                                    </div>
                                </li>
                                @endif
                             @endforeach


                               @if(isset($trips)||isset($operadores))

                                   <li style="background:#fff; border: solid #f7f7f7;box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;">
                                    <div class="product-image">
                                        <a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/11"  onclick="$('.container').LoadingOverlay('show');">

                                            <img src="{{ asset('img/register/')}}/11.png" alt="">
                                        </a>
                                    </div>
                                      <div class="product-content">

                                           @if(session('locale') == 'es' )
                                    <h6 class="product-title"><a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/11"  onclick="$('.container').LoadingOverlay('show');">Itinerarios & Tours</a></h6>

                                    @else
                                    <h6 class="product-title"><a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/11"  onclick="$('.container').LoadingOverlay('show');">Itineraries & Tours</a></h6>

                                    @endif



                                    </div>
                                </li>
                                @endif
                            </ul>
                        </div>
                        @endif

                    </div>
                            @endif
                        </div>
                        <br>
                    </div>

                    <!-- Parte Derecha-->
                    <div class="sidebar col-sm-4 col-md-3" >
                        <div class="main-mini-search-form full-width box">
                            <div class="search-box">
                                <div class="social-wrap">
                                    <div class="social-icons box size-lg style3">
                                        @if(session('statut')!='visitor')
                                            <a href="{!!asset('/serviciosres')!!}"  onclick="$('.container').LoadingOverlay('show');" class="social-icon"><label>{{utf8_encode( trans('publico/labels.label151'))}}</label> <i class="fa fa-plus has-circle"  data-toggle="tooltip" data-placement="top" title=""></i></a>
                                        @else
                                            <a href="{!!asset('/login')!!}"  onclick="$('.container').LoadingOverlay('show');" class="social-icon"><label>{{utf8_encode( trans('publico/labels.label151'))}}</label> <i class="fa fa-plus has-circle"  data-toggle="tooltip" data-placement="top" title=""></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(session('device')!='mobile')
                        <div class="main-mini-search-form full-width box">
                            {!! Form::open(['url' => route('min-search'),  'method' => 'get', 'id'=>'min-search']) !!}
                                <div class="search-box">
                                    <input type="text" id="s"  placeholder="Search" name="s" value="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                        @endif
                        <div class="widget box">
                            <h4>{{ trans('publico/labels.label18')}}</h4>
                            <ul class="product-list-widget">

                                @if(isset($servicios))

                                @foreach ($servicios as $serv)
                                   @if($serv->id_catalogo_servicios!=3)
                                <li>
                                    <div class="product-image">
                                        <a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/{!!$serv->id_catalogo_servicios!!}"  onclick="$('.container').LoadingOverlay('show');">

                                            <img src="{{ asset('img/register/')}}/{!!$serv->id_catalogo_servicios!!}.png" alt="">
                                        </a>
                                    </div>


                                    <div class="product-content">

                                           @if(session('locale') == 'es' )
                                    <h6 class="product-title"><a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/{!!$serv->id_catalogo_servicios!!}"  onclick="$('.container').LoadingOverlay('show');">{!!$serv->nombre_servicio!!}</a></h6>

                                    @else
                                    <h6 class="product-title"><a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/{!!$serv->id_catalogo_servicios!!}"  onclick="$('.container').LoadingOverlay('show');">{!!$serv->nombre_servicio_eng!!}</a></h6>

                                    @endif


                                    </div>
                                </li>
                                @endif
                                @endforeach

                                   @if(isset($trips)||isset($operadores))

                                  <li>
                                    <div class="product-image">
                                        <a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/11"  onclick="$('.container').LoadingOverlay('show');">

                                            <img src="{{ asset('img/register/')}}/11.png" alt="">
                                        </a>
                                    </div>
                                      <div class="product-content">

                                           @if(session('locale') == 'es' )
                                    <h6 class="product-title"><a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/11"  onclick="$('.container').LoadingOverlay('show');">Itinerarios & Tours</a></h6>

                                    @else
                                    <h6 class="product-title"><a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/11"  onclick="$('.container').LoadingOverlay('show');">Itineraries & Tours</a></h6>

                                    @endif



                                    </div>
                                </li>
                                @endif
                                @endif

                            </ul>
                        </div>


                        @if(session('device')!='mobile')
                        <div class="widget banner-slider box">
                            <div class="owl-carousel" data-itemsPerDisplayWidth="[[0, 1], [480, 2], [768, 1], [992, 1], [1200, 1]]" data-items="1">
                                <a href="#">
                                    <img src="{{ asset('img/rsz_00kwwk8s.jpg')}}" alt="">
                                </a>

                            </div>

                        </div>

                        @endif
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

    <script>
        jQuery(document).ready(function ($) {

            // SE SETEAN LOS VALORES INICALES
            // $('#servicio1').addClass('selected');
            // $('#organizacion1').addClass('selected');
            // $('#calidad1').addClass('selected');
            // $('#seguridad1').addClass('selected');

            $('#radio-value-servicio').val('0');
            $('#radio-value-organizacion').val('0');
            $('#radio-value-calidad').val('0');
            $('#radio-value-seguridad').val('0');

            $('.radio-group-servicio .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
                var val = $(this).attr('data-value');
                $('#radio-value-servicio').val(val);
            });

            $('.radio-group-organizacion .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
                var val = $(this).attr('data-value');
                $('#radio-value-organizacion').val(val);
            });

            $('.radio-group-calidad .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
                var val = $(this).attr('data-value');
                $('#radio-value-calidad').val(val);
            });

            $('.radio-group-seguridad .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
                var val = $(this).attr('data-value');
                $('#radio-value-seguridad').val(val);
            });
        });
    </script>

<script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>
    <!-- load page Javascript -->


</body>
</html>
