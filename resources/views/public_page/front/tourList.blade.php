<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
    <head>

        <!-- Page Title -->
        <title> {{ trans('agrupamiento/labels.label1')}} | iWaNaTrip</title>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <meta name="description" content="Buy your Ecuador travel deals online |{{ trans('agrupamiento/labels.label1')}} |iWaNaTrip.com">
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
        <link rel="stylesheet" href="{{ asset('public_components/components/tooltipster-master/dist/css/tooltipster.bundle.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public_components/components/tooltipster-master/dist/css/tooltipster-sideTip-light.min.css')}}">

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
            <?php $titulov=(session('locale')=='es')?'Sabías que solo $4 de cada $10 son destinados a los operadores locales':'Less than $4 of each $10 reach local tour operators'; ?>
            @include('public_page.reusable.banner', ['titulo' =>'{!!$titulov!!}'])

            <ul class="breadcrumbs">
                <li><a href="{!!asset('/')!!}"  onclick="$('.woocommerce').LoadingOverlay('show')">{{ trans('publico/labels.label1')}}</a></li>
                <li class="active">{{ trans('agrupamiento/labels.label1')}}</li>
            </ul>
        </div>

 <section id="content">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sm-8 col-md-9">
                        <div class="product type-product">
                            <div class="row single-product-details" style="padding: 2% !important;">
                                <!-- TABLA DE LOS TOURS -->
                                <center>
                                    <h1 class="title">{{(session('locale') == 'es' )?'Reserva directamente con operadoras locales':'Book directly to local tour operators'}}</h1>
                                </center>
                                @if(session('device')!='mobile')
                                <div class="table-responsive">
                                    <table class="table table-bordered pepa">
                                        <thead>
                                            <tr class="cabeceraTabla">
                                                <th class="text-center no-sort sorting_disabled" style="border: 1px solid #34495e !important;">
                                                </th>
                                                <th class="text-center" style="border: 1px solid #34495e !important;">
                                                    {{ trans('agrupamiento/labels.label2')}}
                                                </th>
                                                <th class="numeric text-center" style="border: 1px solid #34495e !important;">
                                                    {{ trans('agrupamiento/labels.label3')}}
                                                </th>
                                                <th class="numeric text-center" style="border: 1px solid #34495e !important;">
                                                    {{ trans('agrupamiento/labels.label4')}}
                                                </th>
                                                <th class="text-center no-sort" style="border: 1px solid #34495e !important;">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($agrupamientos as $group)

											<?php
            $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($group->nombre))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);

        ?>


                                            <tr data-href='{!!asset("/tour/$nombreCanonical/$group->id_usuario_servicio/$group->id")!!}'>
                                                <td class="text-center smallThumb" style="text-align: center !important;width: 10% !important;border: 1px solid transparent !important;background-color: #fff !important;">
                                                    @if(empty($group->foto))
                                                        <img src="/images/no-image-available.png" />
                                                    @else
                                                    <img src="https://bookiw.iwannatrip.com/app/web/uploadsMobile/{!!$group->foto[0]->filename!!}" id='fotoTour'/>
                                                    @endif
                                                </td>

                                                <td class="text-center" style="text-align: left !important; border: 1px solid transparent !important;width: 10% !important;background-color: #fff !important;">
                                                    <h3 style="font-weight: 600;font-size: 1rem;color: #005b9c;line-height: 1.25;padding: 0 1rem;font-family:  'Open Sans';">
                                                        <?php echo $group->nombre; ?>
                                                    </h3>
                                                </td>

                                                <td class="text-center" style="text-align: center !important;width: 10% !important;border: 1px solid transparent !important;background-color: #fff !important;">
                                                    <strong>
                                                        <span style="top: .5rem;left: -1.8rem;font-family: 'Open sans';font-size: 1.2rem !important;font-weight: normal;font-style: normal;letter-spacing: 0;color: black !important;">
                                                            <?php
                                                                if($group->precioDesde == 0){
                                                                    echo "FREE";
                                                                }else{
                                                                    echo " $".$group->precioDesde;
                                                               }
                                                            ?>
                                                        </span>
                                                    </strong>
                                                </td>

                                                <td class="text-center" style="text-align: center !important;width: 10% !important;border: 1px solid transparent !important;background-color: #fff !important;">
                                                    <span style="top: .5rem;left: -1.8rem;font-family: 'Open sans';font-size: 1.2rem !important;font-weight: 400;font-style: italic;letter-spacing: 0;color: #f30;line-height: 1.2;">
                                                        <?php
                                                            if($group->precioHasta == 0 || ($group->precioDesde == $group->precioHasta)){
                                                                echo "0%";
                                                            }else{
                                                                $descuento = ($group->precioHasta - $group->precioDesde ) / $group->precioHasta;
                                                                $percentage = $descuento * 100;
                                                                echo round(number_format($percentage,2,",","."),2)." %";
                                                            }
                                                        ?>
                                                    </span>

                                                </td>

                                                <td class="text-center" style="text-align: center !important;width: 15% !important;border: 3px solid rgba(0,177,205,0.03) !important;background-color: rgba(0,177,205,0.03);display:block;">
                                                    <div class="botontour">
                                                        <div class="col1tour">
                                                            <a class="btn btn-medium"  style="border-radius:10px !important;"
                                                               title="{{ $group->nombre }}"
                                                               href='{!!asset("/tour/$nombreCanonical/$group->id_usuario_servicio/$group->id")!!}'  onclick="$('#target').LoadingOverlay('show')">
                                                                Book
                                                            </a>
                                                        </div>
                                                        <div class="col2tour">
                                                           @if($group->total == 0)
                                                                <span class="star-rating" title="0" data-toggle="tooltip">
                                                                     <span data-stars="0"></span>
                                                                 </span>
                                                          @endif
                                                          @if($group->total > 0)
                                                          <?php $idAgrupamiento = $group->id; ?>
                                                             <div class="tooltip_templates">
                                                                <span id="tooltip_content_{{$idAgrupamiento}}">
                                                                    <?php $Resumencalificacion = "";?>
                                                                    @foreach ($group->resumen_views as $resumen)
                                                                    <div>
                                                                        <?php
                                                                            if (session('locale') == 'es') {
                                                                                $nameReview = $resumen->tipo_review;
                                                                            } else {
                                                                                $nameReview = $resumen->tipo_review_eng;
                                                                            }
                                                                        ?>
                                                                        {{$nameReview}} : {{$resumen->calificacion}}
                                                                        <div class="progressContent">
                                                                          <div class="barProg" style="width: {{intval($resumen->calificacion)*100/5}}%"></div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </span>
                                                            </div>
                                                            <span style="cursor: pointer" data-toggle="tooltip" class="star-rating">
                                                                <span data-stars="{!!($group->total)/count($group->resumen_views)!!}"></span>
                                                                <div class="tooltip" data-tooltip-content="#tooltip_content_{{$idAgrupamiento}}"></div>
                                                            </span>
                                                          @endif

                                                        </div>
                                                        <div class="col3tour">
                                                            <a title="Review" href='{!!asset("/tour/$nombreCanonical/$group->id_usuario_servicio/$group->id")!!}'  onclick="$('#target').LoadingOverlay('show')">
                                                                <i class="fa fa-commenting-o fa-2x" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </a>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endif


                                @if(session('device')=='mobile')
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example">
                                        <thead>
                                            <tr class="cabeceraTabla">
                                                <th class="text-center no-sort sorting_disabled" style="border: 1px solid #34495e !important;">
                                                </th>
                                                <th class="text-center" style="border: 1px solid #34495e !important;">
                                                    {{ trans('agrupamiento/labels.label2')}}
                                                </th>
                                                <th class="numeric text-center" style="border: 1px solid #34495e !important;">
                                                    {{ trans('agrupamiento/labels.label3')}}
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($agrupamientos as $group)

											<?php
            $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($group->nombre))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);

        ?>

                                            <tr data-href='{!!asset("/tour/$nombreCanonical/$group->id_usuario_servicio/$group->id")!!}'>

                                                <td class="text-center smallThumb" style="text-align: center !important;width: 100% !important;border: 1px solid transparent !important;background-color: #fff !important;">
                                                    @if(empty($group->foto))
                                                        <img src="/images/no-image-available.png" />
                                                    @else
                                                    <img src="https://bookiw.iwannatrip.com/app/web/uploadsMobile/{!!$group->foto[0]->filename!!}" id='fotoTourMobile' />
                                                    @endif
                                                </td>

                                                <td class="text-center" style="text-align: left !important; border: 1px solid transparent !important;width: 50% !important;background-color: #fff !important;"
                                                    data-href='{!!asset("/tour/$group->nombre/$group->id_usuario_servicio/$group->id")!!}'>
                                                    <h3 style="font-weight: 600;font-size: 1rem;color: #005b9c;line-height: 1.25;padding: 0 1rem;font-family:  'Open Sans';">
                                                        <?php echo $group->nombre; ?>
                                                    </h3>
                                                </td>

                                                <td class="text-center" style="text-align: center !important;width: 10% !important;border: 1px solid transparent !important;background-color: #fff !important;padding-left: 0px !important;">
                                                      <div class="botontour">
                                                          <div class="col1tour">
                                                                <strong>
                                                                    <span style="top: .5rem;left: -1.8rem;font-family: 'Open sans';font-size: 1.2rem !important;font-weight: normal;font-style: normal;letter-spacing: 0;color: black !important;">
                                                                        <?php
                                                                            if($group->precioDesde == 0){
                                                                                echo "FREE";
                                                                            }else{
                                                                                echo " $".$group->precioDesde;
                                                                           }
                                                                        ?>
                                                                    </span>
                                                                </strong>
                                                          </div>
                                                          <div class="col2tour">
                                                             @if($group->reviewCalculado == 0)
                                                             <span class="star-rating" title="0" data-toggle="tooltip" style="font-size:11px !important;">
                                                                  <span data-stars="0"></span>
                                                              </span>
                                                             @endif
                                                              @if($group->reviewCalculado != 0)
                                                                  <span class="star-rating" title="{{ $group->reviewCalculado }}" data-toggle="tooltip" style="font-size:11px !important;">
                                                                      <span data-stars="{{ $group->reviewCalculado }}"></span>
                                                                  </span>
                                                              @endif
                                                          </div>
                                                      </div>
                                                  </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                            </div>

                            @if(session('device')=='mobile')
                                <div class="sidebar col-sm-4 col-md-4">

                            @if(isset($servicios))

                        <div class="widget box">

                            <h4>{{ trans('publico/labels.label18')}}</h4>
                            <ul class="product-list-widget">
                                @foreach ($servicios as $serv)
                             @if($serv->id_catalogo_servicios!=3)


                       <li style="background:#fff; border: solid #f7f7f7;
  box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;
">


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

                                   <li style="background:#fff; border: solid #f7f7f7;
  box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;
">
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
        <script type="text/javascript" src="{{ asset('public_components/components/tooltipster-master/dist/js/tooltipster.bundle.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.tooltip').tooltipster({
                theme: 'tooltipster-light'
            });
        });
    </script>
    {!!HTML::script('js/DataTables/jquery.dataTables.min.js') !!}
    {!!HTML::script('js/DataTables/dataTables.buttons.min.js') !!}
    {!!HTML::script('js/DataTables/buttons.print.min.js') !!}
    {!!HTML::script('js/DataTables/buttons.html5.js') !!}
    {!!HTML::script('js/DataTables/buttons.flash.js') !!}
    {!!HTML::script('js/DataTables/buttons.bootstrap.min.js') !!}

    {!!HTML::script('js/DataTables/dataTables.responsive.min.js') !!}
    {!!HTML::script('js/DataTables/dataTables.select.min.js') !!}
    {!!HTML::script('js/pdfMake/pdfmake.min.js') !!}
    {!!HTML::script('js/pdfMake/vfs_fonts.js') !!}
    {!!HTML::script('js/pdfMake/jszip.min.js') !!}

    {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}
    {!!HTML::script('js/Compartido.js') !!}
    {!!HTML::script('js/js_Compartido.js') !!}

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
