<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <!-- Page Title -->
    <title>{!!$atraccion->nombre_servicio!!} | iWaNaTrip</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="_token" content="{!!csrf_token() !!}" />
    <?php
        $length = 150;
        //Primero eliminamos las etiquetas html y luego cortamos el string
        $stringDisplay = substr(strip_tags($atraccion->detalle_servicio), 0, $length);
        //Si el texto es mayor que la longitud se agrega puntos suspensivos
        if (strlen(strip_tags($atraccion->detalle_servicio)) > $length)
        $stringDisplay .= ' ...';
        $str = utf8_encode("Viaja y descubre lugares, tours, comida, huecas, aventuras,gente y m¨¢s. Hoteles Diversi¨®n Restaurantes Cultura");
    ?>
    <meta name="description" content='{!!$atraccion->nombre_servicio!!}. {!!str_replace("\""," ",$stringDisplay)!!} |iWaNaTrip.com'>
    <meta name="keywords" content="{!!$atraccion->nombre_servicio!!} . {!!$str!!}">
    <meta name="author" content="iWaNaTrip group">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="Content-Language" content="es">
    <META NAME="robots" CONTENT="all | index | follow">
    <META name="Revisit" content="2 days">
    <meta property="og:title" content="{!!$atraccion->nombre_servicio!!}" />
    <meta property="og:description" content="{!!$atraccion->nombre_servicio!!}. {!!$stringDisplay!!}" />
    @if(isset($imagenes[0]->filename))
        <meta property="og:image" content="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/'.$imagenes[0]->filename) !!}" />
    @endif


    <!-- Theme Styles -->
    <link rel="apple-touch-icon" href="{{ url(env('AWS_PUBLIC_URL').'images/img/60x60_logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url(env('AWS_PUBLIC_URL').'images/img/76x76logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url(env('AWS_PUBLIC_URL').'images/img/120x120logo_iwana.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url(env('AWS_PUBLIC_URL').'images/img/180x180logo_iwana.png')}}">
    <link rel="icon" sizes="180x180" href="{{ url(env('AWS_PUBLIC_URL').'images/img/180x180logo_iwana.png')}}">
    <link rel="shortcut icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.ico') }}" />
    <link rel="apple-touch-icon" href="{{ url(env('AWS_PUBLIC_URL').'util/favicon.png') }}" />
    <link rel="stylesheet" href="{{asset('public_components/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public_components/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public_components/css/letras.css')}}">
	<link rel="stylesheet" href="{{asset('public_components/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public_components/components/owl-carousel/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('public_components/components/magnific-popup/magnific-popup.css')}}">
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{asset('public_components/css/style.css')}}">
    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{asset('public_components/css/updates.css')}}">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('public_components/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{asset('public_components/css/responsive.css')}}"> {!!HTML::script('js/jquery.js') !!} {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}
    {!!HTML::script('js/sweetAlert/sweetalert2.min.js') !!}
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
    <!-- Slider -->
    <!-- {!!HTML::script('js/sliderTop/jssor.slider.mini.js') !!} -->
    <style type="text/css">
    pre {
        display: block;
        padding: 0px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.42857143;
        word-break: break-all;
        color: #939faa;
        background-color: #ffffff;
        border: 1px solid #ffffff;
        border-radius: 4px;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
        word-wrap: break-word;
        font: 100%/150% "Open Sans", Arial, Helvetica, sans-serif;
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

    .section-info {
        padding: 20px 0;
    }
    .owl-buttons{
        display: none !important;
    }
    .page-title-container .page-title{
        padding: 100px 0 25px;
    }
    </style>
</head>

<body class="woocommerce">
    <div id="page-wrapper">
        <div class="page-title-container">
            <div class="page-title">
            </div>
            <ul class="breadcrumbs">
                <li><a href="{!!asset('/')!!}" onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1')}}</a></li>
                <li class="active">{!!$atraccion->nombre_servicio!!}</li>
            </ul>
        </div>
        <header id="header" class="header-color-white">
            @include('public_page.reusable.header')
        </header>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="sidebar col-sm-4 col-md-3">
                        <div class="widget post-slider box">
                            <div class="owl-carousel carouselLeft" data-itemsPerDisplayWidth="[[0, 1], [480, 2], [768, 1], [992, 1], [1200, 1]]" data-items="1" data-navigation="false">
                                @foreach ($imagenes as $imagen)
                                <a class="soap-mfp-popup" href="{!! url(env('AWS_PUBLIC_URL').'images/fullsize/'.$imagen->filename) !!}">
                                    <img src="{!! url(env('AWS_PUBLIC_URL').'images/icon/'.$imagen->filename) !!}" />
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="box">
                            @if(session('device')!='mobile')
                            <div class="soap-google-map maps ">
                            </div>
                            @endif
                        </div>




                        <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="box">
                            <h4>{{ trans('publico/labels.label77')}}</h4>
                            <?php
                                $nombre = str_replace(' ', '-', $atraccion->nombre_servicio);
                                $nombre = str_replace('/', '-', $nombre);
                                $nombre = str_replace('?', '', $nombre);
                                $nombre = str_replace("'", '', $nombre);
                            ?>
							<div>
												<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
												<script type="IN/Share" data-url="{!!asset('/detalle')!!}/{!!htmlspecialchars(html_entity_decode(nl2br(e($atraccion->nombre_servicio))))!!}/{!!$atraccion->id!!}"></script>
												</div>
                                <div class="fb-share-button" data-href="{!!asset('/detalle')!!}/{!!$nombre!!}/{!!$atraccion->id!!}" data-layout="button_count"></div>
                        </div>
                        <!--<div class="box">
                            <h4>{{ trans('publico/labels.reportarerror')}}</h4>
                            <a href="#" data-toggle="modal" data-target="#errores">
                                <i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>-->

                        <div class="box">
                            <h4>{{ trans('publico/labels.updatedServices')}}</h4>
                            @if(isset($updatedServices))
                                <ul class="recent-posts">
                                    @foreach($updatedServices as $service)
                                        <li>
                                            <a href="{!! asset('/detalle')!!}/{{$service->nombre_servicio}}/{{$service->id}}" class="post-author-avatar">
                                                <span>
                                                    @if(isset($service->profile_image))
                                                       <img src="{!! url(env('AWS_PUBLIC_URL').'images/icon/'.$service->profile_image->filename) !!}" />
                                                    @else
                                                       <img src="{!! url(env('AWS_PUBLIC_URL').'images/icon/default_icon.png') !!}" />
                                                    @endif
                                                </span>
                                            </a>
                                            <div class="post-content">
                                                <a href="{!! asset('/detalle')!!}/{{$service->nombre_servicio}}/{{$service->id}}" class="post-title">
                                                    {{($service->nombre_servicio != "")?$service->nombre_servicio:''}}
                                                </a>
                                                <span style=" color: #eb3b50;"class="product-price">{{Carbon\Carbon::parse($service->created_at)->formatLocalized('%A %d %B %Y')}}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>

                    <div id="main" class="col-md-6">
                        <div class="product type-product">
                            <div class="row single-product-details">
                                <div class="summary entry-summary col-sm-12 box-lg">
                                    <div class="clearfix">
                                        <h2 class="product-title entry-title">{!!$atraccion->nombre_servicio!!}</h2>
                                    </div>
                                    @if($provincia!=null) @if($canton!=null) @if($parroquia!=null)
                                    <span class="product-price box">
                                                    {!!$provincia->nombre!!}-{!!$canton->nombre!!}-{!!$parroquia->nombre!!}
                                                </span> @else
                                    <span class="product-price box">
                                                    {!!$provincia->nombre!!}-{!!$canton->nombre!!}
                                                </span> @endif @else
                                    <span class="product-price box">{!!$provincia->nombre!!}</span> @endif @endif
                                    <dl class="product-meta">
									 @if(session('locale') == 'es' )
									 <?php
                                $nombre = str_replace('(#', ' <a href="', $atraccion->detalle_servicio);
                                $nombre = str_replace('#)', '">(Ver más)</a>', $nombre);
                            ?>
							    @elseif(session('locale') == 'en' && $atraccion->detalle_servicio_eng!='')
								 <?php
                                $nombre = str_replace('(#', ' <a href="', $atraccion->detalle_servicio_eng);
                                $nombre = str_replace('#)', '">(More info)</a>', $nombre);
                            ?>
							@else

									 <?php
                                $nombre = str_replace('(#', ' <a href="', $atraccion->detalle_servicio);
                                $nombre = str_replace('#)', '">(Ver más)</a>', $nombre);
                            ?>
							@endif
                                        <pre class="more">

                                                {!!$nombre!!}

                                        </pre>


                                        <div class="section-info">
                                        <h3 class="section-title"><label>{{(session('locale') == 'es' )?"¿Cómo llegar?":"Getting here"}}</label></h3>
                                        <div class="row">
                                            <div class="col-lg-12">
                                             @if(session('locale') == 'es' )
                                            <pre class="more">
                                                        {!!$atraccion->como_llegar1!!}
                                                        {!!$atraccion->como_llegar1_1!!}
                                                    </pre> @elseif(session('locale') == 'en' && $atraccion->como_llegar2!='')
                                            <pre class="more">
                                                        {!!$atraccion->como_llegar2!!}
                                                        {!!$atraccion->como_llegar2_2!!}
                                                    </pre> @else
                                            <pre class="more">
                                                        {!!$atraccion->como_llegar1!!}
                                                        {!!$atraccion->como_llegar1_1!!}
                                                    </pre> @endif
                                            </div>
                                        </div>
                                    </div>


										 <div class="section-info">
                                        <h3 class="section-title"><label>{{ trans('publico/labels.label29')}}</label></h3>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @if($atraccion->id_catalogo_servicio!=9) @if(isset($explore) && count($explore)>0)
                                                <div class="social-icons pull-right">
                                                @if($servicios!=null)
                                                    @foreach ($servicios as $serv) @if($serv->id_catalogo_servicios!=6 && $serv->id_catalogo_servicios!=3 && $serv->id_catalogo_servicios!=9 && $serv->id_catalogo_servicios!=10 && $serv->id_catalogo_servicios!=9)
                                                    <a href="{!!asset('/tokenDc$ripT')!!}/{!!$atraccion->id!!}/{!!$serv->id_catalogo_servicios!!}" class="social-icon" data-toggle="tooltip" data-placement="top" title="{{(session('locale') == 'es' )?$serv->nombre_servicio:$serv->nombre_servicio_eng}}">
                                                                            <i title="" class="fa  has-circlehome" style="border-color: #0f2541;">
                                                                                <img src="{{ asset('img/register/')}}/{!!$serv->id_catalogo_servicios!!}.png" alt="" class="activities" style=" max-width: 60%;">
                                                                            </i>
																			{{(session('locale') == 'es' )?$serv->nombre_servicio:$serv->nombre_servicio_eng}}
                                                                        </a> @endif @endforeach
                                                                        @endif

                                                </div>
                                                @endif @endif
                                            </div>
                                        </div>
                                    </div>
                                        <div class="panel-group" id="accordion-2">
                                            @if($atraccion->direccion_servicio!="")
                                            <div class="panel style5">
                                                <h5 class="panel-title">
                                                        <a href="#acc2-1" data-toggle="collapse" data-parent="#accordion-2">
                                                            <span class="open-sub"></span>
                                                            {{ trans('publico/labels.label35')}}
                                                        </a>
                                                    </h5>
                                                <div class="panel-collapse collapse" id="acc2-1">
                                                    <div class="panel-content">
                                                        <dd>{!!$atraccion->direccion_servicio!!}</dd>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif @if($atraccion->horario!="")
                                            <div class="panel style5">
                                                <h5 class="panel-title">
                                                        <a href="#acc2-2" data-toggle="collapse" data-parent="#accordion-2">
                                                            <span class="open-sub"></span>
                                                            {{ trans('publico/labels.label75')}}
                                                        </a>
                                                    </h5>
                                                <div class="panel-collapse collapse" id="acc2-2">
                                                    <div class="panel-content">
                                                        <pre>
                                                                {!!$atraccion->horario!!}
                                                            </pre>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif @if($atraccion->precio_desde!="" || $atraccion->precio_hasta!="")
                                            <div class="panel style5">
                                                <h5 class="panel-title">
                                                        <a href="#acc2-3" data-toggle="collapse" data-parent="#accordion-2">
                                                            <span class="open-sub"></span>
                                                            {{ trans('publico/labels.label37')}} USD $
                                                        </a>
                                                    </h5>
                                                <div class="panel-collapse collapse" id="acc2-3">
                                                    <div class="panel-content">
                                                        <table style="width:100%">

                                                                @if($atraccion->precio_desde!="")
																<tr>
                                                                <td>{{ trans('publico/labels.label73')}}</td>
                                                                <td>{!!$atraccion->precio_desde!!}</td>
																</tr>
                                                                @endif

																@if($atraccion->precio_hasta!="")
																<tr>
                                                                <th>{{ trans('publico/labels.label74')}}</th>
                                                                <th>{!!$atraccion->precio_hasta!!}</th>
																</tr>
                                                                @endif
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif @if($atraccion->telefono!="")
                                            <div class="panel style5">
                                                <h5 class="panel-title">
                                                        <a href="#acc2-4" data-toggle="collapse" data-parent="#accordion-2">
                                                            <span class="open-sub"></span>
                                                            {{ trans('publico/labels.label38')}}
                                                        </a>
                                                    </h5>
                                                <div class="panel-collapse collapse" id="acc2-4">
                                                    <div class="panel-content">

                                                        <dd>{!!$atraccion->telefono!!}</dd>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif @if($atraccion->correo_contacto!="")
                                            <div class="panel style5">
                                                <h5 class="panel-title">
                                                        <a href="#acc2-5" data-toggle="collapse" data-parent="#accordion-2">
                                                            <span class="open-sub"></span>
                                                            {{ trans('publico/labels.label39')}}
                                                        </a>
                                                    </h5>
                                                <div class="panel-collapse collapse" id="acc2-5">
                                                    <div class="panel-content">
                                                        <dt class="more">
                                                            {!!$atraccion->correo_contacto!!}
                                                        </dt>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif @if($atraccion->pagina_web!="")
                                            <div class="panel style5">
                                                <h5 class="panel-title">
                                                        <a href="#acc2-6" data-toggle="collapse" data-parent="#accordion-2">
                                                            <span class="open-sub"></span>
                                                            {{ trans('publico/labels.label40')}}
                                                        </a>
                                                    </h5>
                                                <div class="panel-collapse collapse" id="acc2-6">
                                                    <div class="panel-content">
                                                        <a target="_blank" href="{!!$atraccion->pagina_web!!}">

                                                            <dd>{!!$atraccion->pagina_web!!}</dd>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </dl>

                                    <div class="section-info">
                                        <h3 class="section-title"><label>{{ trans('publico/labels.label97')}}</label></h3>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tags">
                                                    @if($atraccion->tags!="")
                                                    <?php
                                                        $tags = explode(",", $atraccion->tags);
                                                    ?> @foreach ($tags as $tag)
                                                    <?php
                                                        $tagC = str_replace(" #","",$tag);
                                                        $tagC = str_replace("#","",$tag);
                                                    ?>
                                                    <a class="tag" href="https://iwannatrip.com/Search?s={!!$tagC!!}">{!!$tag!!}</a> @endforeach @endif @if($provincia!=null)
                                                    <a class="tag" href="https://iwannatrip.com/Search?s={!!$provincia->nombre!!}">{!!$provincia->nombre!!}</a> @endif @if($canton!=null)
                                                    <a class="tag" href="https://iwannatrip.com/Search?s={!!$canton->nombre!!}">#{!!$canton->nombre!!}</a> @endif @if($parroquia!=null)
                                                    <a class="tag" href="https://iwannatrip.com/Search?s={!!$parroquia->nombre!!}">#{!!$parroquia->nombre!!}</a> @endif
                                                    <!--Explore items-->
                                                    @if($atraccion->id_catalogo_servicio!=9) @if(isset($explore) && count($explore)>0) @foreach ($explore as $explor)
                                                    <a class="tag" href="https://iwannatrip.com/Search?s={!!$explor->nombre_servicio_est!!}">#{!!$explor->nombre_servicio_est!!}</a> @endforeach @endif @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-info">
                                        <!-- <h3 class="section-title">Servicios</h3> -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="likes" id="likes">
                                                    @section('likes') @show
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <h4>{{ trans('publico/labels.label28')}}</h4>
                            <div class="iso-container iso-col-3 style-masonry has-column-width cercanos ">
                                @section('cercanos') @show
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-sm-4 col-md-3">
                        <div class="main-mini-search-form full-width box">
                            <div class="search-box">
                                <div class="social-wrap">
                                    <div class="social-icons box size-lg style3">
                                        @if(session('statut')!='visitor')
                                        <a href="{!!asset('/services')!!}" onclick="$('.container').LoadingOverlay('show');" class="social-icon">
                                            <label>{{utf8_encode( trans('publico/labels.label151'))}}</label> <i class="fa fa-plus has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
                                        @else
                                        <a href="{!!asset('/services')!!}" onclick="$('.container').LoadingOverlay('show');" class="social-icon">
                                            <label>{{utf8_encode( trans('publico/labels.label151'))}}</label> <i class="fa fa-plus has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-mini-search-form full-width box">
                            {!!Form::open(['url' => route('min-search'), 'method' => 'get', 'id'=>'min-search']) !!}
                            <div class="search-box">
                                <input type="text" id="s" placeholder="Search" name="s" value="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                            {!!Form::close() !!}
                        </div>
                        <div class="widget box">
                            <h4>{{ trans('agrupamiento/labels.bookonline')}}</h4>
                            <ul class="demo1">
                                @foreach($agrupamientos as $group)
                                <li class="news-item">
                                    <a href='{!!asset("/tour/$group->nombre/$group->id_usuario_servicio/$group->id")!!}'>
                                        <table cellpadding="4">
                                            <tr>
                                                @if(empty($group->foto))
                                                <td style="margin-right: 10px !important;width: 30%;"> <img src="/images/no-image-available.png" width="80" height="50"> </td>
                                                @else
                                                <td style="margin-right: 10px !important;width: 30%;"> <img src="https://bookiw.iwannatrip.comfoto[0]->filename!!}" width="80" height="50"> </td>
                                                @endif
                                                <td style="width: 80%;padding-left: 5px;">
                                                    <p style="margin-bottom: 0px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                                        {!!$group->nombre!!}
                                                    </p>
                                                    @if($group->precioDesde == 0)
                                                    <p> FREE </p>
                                                    @else
                                                    <p> Precio Desde:
                                                        <span class="product-price box" style="color:#FF6600;font-size:1em !important;"> ${!!$group->precioDesde !!} </span>
                                                    </p>
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget banner-slider box">
                            <div class="owl-carousel" data-itemsPerDisplayWidth="[[0, 1], [480, 2], [768, 1], [992, 1], [1200, 1]]" data-items="1">
                                <a href="#">
                                        <img src="{{ asset('img/rsz_00kwwk8s.jpg')}}" alt="">
                                    </a>
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
                            <a href="https://iwannatrip.com" onclick="$('.woocommerce').LoadingOverlay('show');" class="btn style4">{{ trans('publico/labels.label27')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="pagina" class="pagina"> @include('public_page.reusable.footer')
        </footer>
    </div>
    <!-- Modal full image-->
    <div class="modal modal-custom fade" id="form-img-full" tabindex="1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="imgFull" style="border:none; box-shadow: none;">
                <a class="btn btn-compare" title="Close" data-dismiss="modal" style=" margin-left: 90%;
                margin-top: 12px;
                padding: 0 15px;"><span style="padding: 0 4px;">X</span>
            </a>
            </div>
        </div>
    </div>
    <!-- Modal FORM Review-->
    <div class="modal modal-custom fade" id="modal-review-explore" tabindex="1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a class="btn btn-compare" title="Close" data-dismiss="modal" style=" margin-left: 90%;
                margin-top: 12px;
                padding: 0 15px;"><span style="padding: 0 4px;">X</span>
            </a>
                <div class="modal-body" id="modal-body-review-explore">
                    <form action="{{asset('')}}/postReviews" method="POST" id="form-modal-review-explore">
                        <h4>Deja un review para {!!$atraccion->nombre_servicio!!}</h4>
                        <input type="hidden" name="id_atraccion" id="review_score" value="{!!$atraccion->id!!}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <input type="email" class="input-text full-width" id="email_reviewer" name="email_reviewer" placeholder="{{trans('front/contact.email')}}">
                        </div>
                        <div class="form-group" style="display: none;">
                            @foreach ($tipoReviews as $rev)
                            <input type="hidden" name="id_tipo_review_{!!$rev->id!!}" id="review_score" value="{!!$rev->id!!}">
                            <div class="form-group">
                                @if(session('locale') == 'es' )
                                <label>{!!$rev->tipo_review!!}</label>
                                @else
                                <label>{!!$rev->tipo_review_eng!!}</label>
                                @endif
                                <span class="input-star-rating">
                                            <input type="radio" value="5" name="review_score_{!!$rev->id!!}">
                                            <input type="radio" value="4" name="review_score_{!!$rev->id!!}">
                                            <input type="radio" value="3" name="review_score_{!!$rev->id!!}">
                                            <input type="radio" value="2" name="review_score_{!!$rev->id!!}">
                                            <input type="radio" value="1" name="review_score_{!!$rev->id!!}">
                                        </span>
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group" style="display: none;">
                            <textarea class="input-text full-width" id="text_review" name="text_review" rows="5" placeholder="{{trans('front/responsive.commentPlaceholder')}}"></textarea>
                        </div>
                    </form>
                    <div class="text-center">
                        <h3 class="modal-title" id="exampleModalLabel">{{trans('front/responsive.agregarfoto')}}</h3>
                    </div>
                    <br> {!!Form::open(['url' => route('upload-review'), 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone','auto-queue'=>'false']) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" id="id_usuario_servicio" name="id_usuario_servicio" value="{!!$atraccion->id!!}">
                    <div class="form-group">
                        <div class="dz-message">
                        </div>
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                        <div class="dropzone-previews" id="preview-template"></div>
                    </div>
                    {!!Form::close() !!}
                    <br>
                    <div class="form-group">
                        <a href="" class="btn style1" onclick="AjaxContainerReviewImageLoadF(event,'form-modal-review-explore','modal-review-explore');">
                            <i class="fa fa-spin fa-spinner" id="spinner-save-review-img" style="display: none;"></i>Enviar review
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal fotos Review -->
    <div class="modal modal-custom fade" id="foto-review" tabindex="1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a class="btn btn-compare" title="Close" data-dismiss="modal" style=" margin-left: 90%;
                margin-top: 12px;
                padding: 0 15px;"><span style="padding: 0 4px;">X</span>
            </a>
                <div class="modal-body" id="modal-body-review-explore">
                    <div class="text-center">
                        <h3 class="modal-title" id="exampleModalLabel">{{trans('front/responsive.agregarfoto')}}</h3>
                    </div>
                    <br> {!!Form::open(['url' => route('upload-review'), 'class' => 'dropzone', 'files'=>true, 'id'=>'foto-review-real-dropzone','auto-queue'=>'false']) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" id="id_usuario_servicio" name="id_usuario_servicio" value="{!!$atraccion->id!!}">
                    <div class="form-group">
                        <div class="dz-message">
                        </div>
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                        <div class="dropzone-previews" id="preview-template"></div>
                    </div>
                    {!!Form::close() !!}
                    <br>
                    <div class="form-group">
                        <a href="" class="btn style1" data-dismiss="modal">
                            <i class="fa fa-spin fa-spinner" id="spinner-save-review-img" style="display: none;"></i>Aceptar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal fotos Review -->
    <!-- Modal ERRORES-->
    <div class="modal fade" id="errores" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="testboxForm" class="trip">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">{{ trans('publico/labels.reportarerror')}}</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="{{ trans('publico/labels.cerrarerror')}}">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modalerrores">
                        @foreach($errores as $error)
                        <div class="row">
                            <div class="col-md-8 box">
                                <div class="panel style5">
                                    <h2 class="panel-title" style="padding-left:4%;">
                                    <strong>{!!$error->nombre_espanol!!} </stong>
                                </h2>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel-group" id="accordion-2">
                                    <div>
                                        @if($error->id != 4 )
                                        <button type="button" class="btn btn-secondary" onclick="ReportarErrores('{!!asset('/reportarErrores')!!}/{!!$atraccion->id!!}/{!!$error->id!!}')">
                                            Reportar</button>
                                        @else
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#errorguardar" data-dismiss="modal">
                                            Reportar</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('publico/labels.cerrarerror')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    {!!HTML::script('js/jquery.bootstrap.newsbox.min.js') !!}
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
    <!-- Google Map Api
    <script type='text/javascript' src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_EMZUmPpoFAnnKhXfBf5Gzl4FcK_jaLU"></script>
    <script type="text/javascript" src="{{ asset('public_components/js/gmap3.js')}}"></script>

    <script type="text/javascript" src="{{ asset('public_components/js/main.js')}}"></script>
    {!!HTML::script('js/Compartido.js') !!} {!!HTML::script('js/js_public/Compartido.js') !!}

    <script>

     sjq(document).ready(function($) {
        // Configure/customize these variables.
        var showChar = 900; // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "Show more >";
        var lesstext = "Show less";
        $('.more').each(function() {
            var content = $(this).html();
            if (content.length > showChar) {
                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);
//                var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
                  var html =`${c} <span class="moreellipses"> ${ellipsestext} &nbsp;</span><span class="morecontent"> ${h}</span> <span><a href="" class="morelink">${moretext}</a></span>`;
  //              var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' ;
                $(this).html(html);
            }
        });

        $(".morecontent").css("display", "none");

        $(".morelink").click(function() {
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
    sjq(".soap-google-map").gmap3({
        map: {
            options: {
                scrollwheel: false,
                center: [{!!$atraccion->latitud_servicio!!}, {!!$atraccion->longitud_servicio!!}],
                zoom: 15,
                mapTypeControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_BOTTOM
                },
                zoomControlOptions: {
                    position: google.maps.ControlPosition.LEFT_CENTER
                },
                panControlOptions: {
                    position: google.maps.ControlPosition.LEFT_CENTER
                }
            }
        },
        marker: {
            values: [
                { latLng: [{!!$atraccion->latitud_servicio!!}, {!!$atraccion->longitud_servicio!!}], data: "Ecuador" }
            ],
            options: {
                //draggable: false,
                //icon: "{!!asset("img/CollageIsmage_opt.png")!!}",
            },
        }
    });
    sjq(document).ready(function($) {
        // Show more
        var carouselLeft = $("#carouselLeft");
        var sync2 = $("#sync2");

        carouselLeft.owlCarousel({
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
            carouselLeft.trigger("owl.goTo", number);
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
    <script>
    jQuery(document).ready(function($) {
        // var jssor_1_SlideshowTransitions = [
        //     { $Duration: 18000, $Opacity: 2 }
        // ];
        // var jssor_1_options = {
        //     $AutoPlay: false,
        //     $SlideshowOptions: {
        //         $Class: $JssorSlideshowRunner$,
        //         $Transitions: jssor_1_SlideshowTransitions,
        //         $TransitionsOrder: 1
        //     },
        //     $ArrowNavigatorOptions: {
        //         $Class: $JssorArrowNavigator$
        //     },
        //     $BulletNavigatorOptions: {
        //         $Class: $JssorBulletNavigator$
        //     }
        // };
        // var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
        // //responsive code begin
        // //you can remove responsive code if you don't want the slider scales while window resizing
        // function ScaleSlider() {
        //     var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        //     if (refSize) {
        //         refSize = Math.min(refSize, 1360);
        //         jssor_1_slider.$ScaleWidth(refSize);
        //     } else {
        //         window.setTimeout(ScaleSlider, 30);
        //     }
        // }
        // ScaleSlider();
        // $(window).bind("load", ScaleSlider);
        // $(window).bind("resize", ScaleSlider);
        // $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
        GetDataAjaxPromociones("{!!asset('/tokenDc$ripPromo')!!}/{!!$atraccion->id!!}");
        GetDataAjaxEventos("{!!asset('/tokenDc$ripEvent')!!}/{!!$atraccion->id!!}");
        GetLikes("{!!asset('/getLikesA')!!}/{!!$atraccion->id!!}");
        GetReview("{!!asset('/getReviews')!!}/{!!$atraccion->id!!}?page=1");
        var pagina = 1;
        GetDataAjaxCloseIntern("{!!asset('/getCercanosIntern')!!}/{!!$atraccion->id!!}/{!!$atraccion->id_provincia!!}/{!!$atraccion->id_canton!!}/{!!$atraccion->id_parroquia!!}");
        //GetDataAjaxEventsInd("{!!asset('/getEventscloseToMe')!!}/"+valor+"?page=1");
        var contador = pagina + 1;
        $(".pagina").val(contador);
    });

    var _throttleTimer = null;
    var _throttleDelay = 90;
    var $window = $(window);
    var $document = $(document);
    var validate = 0;
    $document.ready(function() {
        $window
            .off('scroll', ScrollHandler)
            .on('scroll', ScrollHandler);
    });

    function ScrollHandler(e) {
        //throttle event:
        clearTimeout(_throttleTimer);
        //validate=0;
        _throttleTimer = setTimeout(function() {
            //do work
            if ($window.scrollTop() + $window.height() > $document.height() - 5000) {
                pagina = $(".pagina").val();
                GetDataAjaxCloseIntern("{!!asset('/getCercanosIntern')!!}/{!!$atraccion->id!!}/{!!$atraccion->id_provincia!!}/{!!$atraccion->id_canton!!}/{!!$atraccion->id_parroquia!!}");
                contador = parseInt(pagina) + 1;
                $(".pagina").val(contador);
            }
        }, _throttleDelay);
    }
    </script>
    <script type="text/javascript">
    function openModalReviewExplore(event) {
        event.preventDefault();
        $('#modal-review-explore').modal().show();
    }
    $('.btn-write-review').click(function(e) {
        e.preventDefault();
        $('#review_form').show();
        $('.btn-write-review').hide();
    });
    $('.btn-back-reviews').click(function(e) {
        $('.btn-write-review').show();
    });

    </script>
</body>

</html>