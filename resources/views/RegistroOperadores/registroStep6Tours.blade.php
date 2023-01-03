@extends('front.masterPageServicios')

@section('step1')
{!! HTML::style('css/calendar/ui-jquery.css') !!}

<div style='display:none'>
    <img src="{!! asset('img/x.png')!!}" alt='' />
</div>

<style>
    #simplemodal-container a.modalCloseImg {
        background:url("{!! asset('img/x.png')!!}") no-repeat;
        width:25px; height:29px; display:inline; z-index:1200; position:absolute; top:-15px; right:-16px; cursor:pointer;}
</style>
    <div id="basic-modal-content" class="cls loadModal"></div>

<div class="rowerror">
</div>
    

<div class="row-step4">
    <div id="title-box-header">
        <div id="title-box-type" style="cursor:pointer;"onclick="window.location.href = '{!!asset('/servicios')!!}'">

            <?php
            switch (session('tip_oper')) {
                case 1:
                    $prefix = "I'm an ";
                    $operadorName = "Agency";
                    break;
                case 2:
                    $prefix = "I'm an ";
                    $operadorName = "Enterprise";
                    break;
                case 3:
                    $prefix = "I'm just";
                    $operadorName = "Me";
                    break;
            }
            ?>
 
            <h2 class="head-title">
                     <strong>{!!$calendario->nombre!!}</strong>
            </h2>
        </div>
        <div id="description-box-type">
            En ésta sección se detalla el servicio, se da a conocer la ubicación geográfica de donde se puede contratar el servicio, se pueden agregar fotografías, eventos, promociones e itinerarios. 
        </div>
    </div>
    <div id="space"></div>
    <div id="title-box-header-navigation">

        <h2 class="head-title-navigation">
            <a class="button-step4" onclick="window.location.href = '{!!asset('/operador')!!}'"> 
                <strong><img src="{!! asset('img/flecha-1.png')!!}" height="15px" width="15px" /> Mi info </strong></a>
            <a class="button-step4" onclick="window.location.href = '{!!asset('/userservice')!!}'"> 
                <strong><img src="{!! asset('img/flecha-1.png')!!}" height="15px" width="15px" /> Agregar servicio </strong></a>
            <a class="button-step4" onclick="window.location.href = '{!!asset('/detalleServicios')!!}'"> 
                <strong><img src="{!! asset('img/flecha-1.png')!!}" height="15px" width="15px" /> Mis servicios </strong></a>
            <a class="button-step4 "> 
                <div style="color:#F26803; display: block;
                     font-size: 0.9em;
                     font-weight: normal;
                     line-height: 31px;
                     text-indent: 31px;"> Detalle {!!$calendario->nombre!!}</div></a>
        </h2>
    </div>
    
    <div id="space"></div>

    <div class="wrapper uwa-font-aa">
        
        {!! Form::open(['url' => route('upload-postusuarioserviciosTour'), 'method' => 'post', 'role' => 'form', 'id'=>'registro_step1'] ) !!}
        <input type="hidden" value="{!!$calendario->id!!}" name="id_calendar" id="id_calendar">
        <input type="hidden" value="{!!$id_agrupamiento!!}" name="id_agrupamiento" id="id_agrupamiento">
        <div id="part-1-form">
            <div id="principal-data">
                <div class="form-group-1">
                    {!!Form::label('Tittulo Agrupamiento Esp', 'Nombre Agrupamiento(M Title)', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                    {!!Form::text('title_esp', $calendario->title_esp, array('class'=>'inputtext chng','placeholder'=>'titulo del agrupamiento'))!!}
                </div>
                <div class="form-group-1">
                    {!!Form::label('Tittulo Agrupamiento Eng', 'Nombre Agrupamiento Eng(M Title)', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                    {!!Form::text('title_eng', $calendario->title_eng, array('class'=>'inputtext chng','placeholder'=>'titulo del agrupamiento'))!!}
                </div>
                <div class="form-group-1">
                    {!!Form::label('url_esp', 'url_esp', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                    {!!Form::text('url_esp', $calendario->url_esp, array('class'=>'inputtext chng','placeholder'=>'url_esp'))!!}
                </div>
                <div class="form-group-1">
                    {!!Form::label('url_eng', 'url_eng', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                    {!!Form::text('url_eng', $calendario->url_eng, array('class'=>'inputtext chng','placeholder'=>'url_eng'))!!}
                </div>

                <div class="form-group-1">
                    {!!Form::label('H1 Esp', 'H1 Esp', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                    {!!Form::text('h1_esp', $calendario->h1_esp, array('class'=>'inputtext chng','placeholder'=>'h1'))!!}
                </div>
				
                <div class="form-group-1">
                    {!!Form::label('H1 Eng', 'H1 Eng', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                    {!!Form::text('h1_eng', $calendario->h1_eng, array('class'=>'inputtext chng','placeholder'=>'h1'))!!}
                </div>
				
                <div class="form-group-1">
                    {!!Form::label('Meta Descrip Eng', 'Meta Descrip Eng', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                    {!!Form::text('meta_descrip_eng', $calendario->meta_descrip_eng, array('class'=>'inputtext chng','placeholder'=>'meta descrip'))!!}
                </div>

                <div class="form-group-1">
                    {!!Form::label('Meta Descrip esp', 'Meta Descrip esp', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                    {!!Form::text('meta_descrip_esp', $calendario->meta_descrip_esp, array('class'=>'inputtext chng','placeholder'=>'meta descrip'))!!}
                </div>
				
                <div class="form-group-1">
                    {!!Form::label('Facebook imag desk', 'Image desk', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                    {!!Form::text('faceb_img_desk', $calendario->faceb_img_desk, array('class'=>'inputtext chng','placeholder'=>'facebook image'))!!}
                </div>


                <div class="form-group-1">
                    {!!Form::label('Facebook imag mobile', 'Image mobile', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                    {!!Form::text('faceb_img_mobile', $calendario->faceb_img_mobile, array('class'=>'inputtext chng','placeholder'=>'facebook image'))!!}
                </div>
				
                

                
               
            </div>
           
              
        </div>
        <div id="part-1-form">
            <div class="box-content-button-1">
                <a class="button-1" title="Guardar." onclick="AjaxContainerRetrunMessageTours('registro_step1', 'optional'); window.location.href = '/thankyou'" href="#">Guardar y Finalizar</a>
            </div>              
              
        </div>
         
        {!! Form::close() !!}

     
     
      
<script>
  
    $(".chng").change(function() {
    AjaxContainerRetrunMessage('registro_step1', 'optional')
            });
           
        
    
</script>





{!!HTML::script('js/loadingScreen/loadingoverlay.js') !!}
{!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}


@stop


@section('scripts')
{!! HTML::script('/js/jsModal/jquery.simplemodal.js') !!}

{!! HTML::script('/js/jsModal/basic.js') !!}


 
@stop


