@extends('responsive.dashboardLight')
@section('content')


{!! HTML::script('js/jquery.js') !!}

<?php
$prefix = "";
$operadorName = "";
$usuarioServicio->id = 0;
$usuarioServicio->nombre_servicio = '';
$usuarioServicio->nombre_servicio_eng = '';
$usuarioServicio->detalle_servicio = '';
$usuarioServicio->detalle_servicio_eng = '';

$usuarioServicio->precio_desde = '';
$usuarioServicio->key_words = '';
$usuarioServicio->precio_hasta = '';
$usuarioServicio->precio_anterior = '';
$usuarioServicio->precio_actual = '';
$usuarioServicio->descuento_servico = '';
$usuarioServicio->direccion_servicio = '';
$usuarioServicio->correo_contacto = '';
$usuarioServicio->pagina_web = '';
$usuarioServicio->nombre_comercial = '';
$usuarioServicio->tags = '';
$usuarioServicio->descuento_clientes = '';
$usuarioServicio->tags_servicio = '';
$usuarioServicio->observaciones = '';
$usuarioServicio->telefono = '';
$usuarioServicio->id_provincia = '';
$usuarioServicio->id_canton = '';
$usuarioServicio->id_parroquia = '';
$usuarioServicio->como_llegar1 = '';
$usuarioServicio->como_llegar2 = '';
$usuarioServicio->horario = '';
$usuarioServicio->fuente = '';

$usuarioServicio->id_usuario_operador = '';
$usuarioServicio->id_padre = '';

$usuarioServicio->fecha_ingreso = '';
$usuarioServicio->fecha_fin = '';
$usuarioServicio->como_llegar1_1 = '';
$usuarioServicio->como_llegar2_2 = '';
$usuarioServicio->latitud_servicio = -0.1806532;
$usuarioServicio->longitud_servicio = -78.46783820000002;

?>

@foreach ($usuarioServicio as $detalles)
<?php
$usuarioServicio->id = $detalles->id;
$usuarioServicio->nombre_servicio = trim($detalles->nombre_servicio);
$usuarioServicio->nombre_servicio_eng = trim($detalles->nombre_servicio_eng);
$usuarioServicio->detalle_servicio = trim($detalles->detalle_servicio);
$usuarioServicio->detalle_servicio_eng = trim($detalles->detalle_servicio_eng);
$usuarioServicio->fuente = trim($detalles->fuente);

$usuarioServicio->estado_servicio_usuario = trim($detalles->estado_servicio_usuario);
$usuarioServicio->id_catalogo_servicio = trim($detalles->id_catalogo_servicio);

$usuarioServicio->precio_desde = trim($detalles->precio_desde);
$usuarioServicio->precio_hasta = trim($detalles->precio_hasta);
$usuarioServicio->precio_anterior = trim($detalles->precio_anterior);
$usuarioServicio->precio_actual = trim($detalles->precio_actual);
$usuarioServicio->descuento_servico = trim($detalles->descuento_servico);
$usuarioServicio->key_words = trim($detalles->key_words);
$usuarioServicio->direccion_servicio = trim($detalles->direccion_servicio);
$usuarioServicio->correo_contacto = trim($detalles->correo_contacto);
$usuarioServicio->pagina_web = trim($detalles->pagina_web);
$usuarioServicio->nombre_comercial = trim($detalles->nombre_comercial);
$usuarioServicio->tags = trim($detalles->tags);
$usuarioServicio->descuento_clientes = $detalles->descuento_clientes;
$usuarioServicio->tags_servicio = trim($detalles->tags_servicio);
$usuarioServicio->id_provincia = $detalles->id_provincia;
$usuarioServicio->id_canton = $detalles->id_canton;
$usuarioServicio->id_parroquia = $detalles->id_parroquia;
$usuarioServicio->como_llegar1 = $detalles->como_llegar1;
$usuarioServicio->como_llegar2 = $detalles->como_llegar2;
$usuarioServicio->id_usuario_operador = $detalles->id_usuario_operador;
$usuarioServicio->horario = $detalles->horario;


$usuarioServicio->como_llegar1_1 = $detalles->como_llegar1_1;
$usuarioServicio->como_llegar2_2 = $detalles->como_llegar2_2;
$usuarioServicio->fecha_ingreso = $detalles->fecha_ingreso;
$usuarioServicio->fecha_fin = $detalles->fecha_fin;
$usuarioServicio->id_padre = $detalles->id_padre;


$usuarioServicio->observaciones = trim($detalles->observaciones);
$usuarioServicio->telefono = $detalles->telefono;
$usuarioServicio->latitud_servicio = ($detalles->latitud_servicio == '') ? -0.1806532 : $detalles->latitud_servicio;
$usuarioServicio->longitud_servicio = ($detalles->longitud_servicio == '') ? -78.46783820000002 : $detalles->longitud_servicio;

?>
@endforeach



<div id="basic-modal-content" class="cls loadModal"></div>
<div class="rowerror"> </div>

@if(session('device')!='mobile')
{!! Form::open(['url' => route('upload-serviciosres'), 'method' => 'post', 'role' => 'form', 'class'=>'form-bordered','id'=>'registro_step1'] ) !!}
@else
{!! Form::open(['url' => route('upload-serviciosres'), 'method' => 'post', 'role' => 'form', 'class'=>'form-bordered','style' => 'padding: 0','id'=>'registro_step1'] ) !!}
@endif

 <input type="hidden" value="{!!$usuarioServicio->id!!}" name="id" id="id">
 <input type="hidden" value="{!!$id_catalogo!!}" name="id_catalogo" id="id_catalogo">
 <div class="row">

        <!-- PARTE IZQUIERDA DEL RESPONSIVE-->
        <div class="col-sm-12 col-md-5" style="margin-bottom: 3%;">
            <div class="col-xs-12 col-md-12 res" style="margin-bottom: 3%;margin-top: 2%;">
                    <div class="col-xs-12 col-md-12 res">
                        <h4 class="section-title">Agregar Fotos:</h4>
                        <div class="tab-container full-width style2" style="text-align:center;">
                             <div id="promocion">
                                 <!--<a onclick="RenderPartialGenericFotografia('reusable.uploadImagePopUp', 1, {!!$usuarioServicio->id!!}, {!!$usuarioServicio->id!!})" href="#"><img src="{{ asset('img/fotograf.png')}}" style="width:111px"></a>  -->
                                 <a data-toggle="modal" data-target="#foto" href="#"><img src="{{ asset('img/fotograf.png')}}" style="width:111px"></a>
                             </div>
                            </div>
                    </div>
            </div>
            <br>
            <div class="col-xs-12 col-md-12 res" style="margin-bottom: 3%;margin-top: 2%;">
                    <div class="col-xs-12 col-md-12">
                        <div class="tab-container full-width style2">
                            <div id="renderPartialImagenes">
                                        @section('contentImagenes')
                                        @show
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-sm-12 col-md-12" style="margin-bottom: 3%;margin-top: 2%;">
                    <div class="col-xs-12 col-md-12 res">
                        @if($id_catalogo==1)
                        <h4 class="section-title">Servicio de Alimentacion & bebidas:</h4>

                        @elseif($id_catalogo==2)
                        <h4 class="section-title">El hospedaje incluye:</h4>

                        @else
                        <h4 class="section-title">El servicio incluye:</h4>


                        @endif
                            <div class="tab-container full-width style2">
                                    <ul style="list-style: none">
                                 @foreach ($catalogoServicioEstablecimiento as $catalogo)
                                    <li>
                                        <input class="circulo" name="id_servicio_est[]" id="id_servicio_est[]"
                                               value="{!!$catalogo->id!!}" type="checkbox"
                                               data-labelauty="No brindo este servicio|Si brindo este servicio" {{($catalogo->estado_servicio_est_us <> NULL)?'checked':''}}/>
                                        {!!$catalogo->nombre_servicio_est!!}
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                    </div>
            </div>



        </div>

        <!-- PARTE CENTRAL DEL RESPONSIVE-->
        <div class="col-xs-12 col-md-7" style="margin-bottom: 3%;">
            <!-- NOMBRE SERVICIO-->
            <div class="col-xs-12 col-md-12 res" style="margin-bottom: 3%;margin-top: 5%;">

                <!--<div class="col-xs-12 col-md-12 " style="border: 1px solid blue;width: 100%;"> -->
                <div class="col-xs-12 col-md-12 res" style="width: 100%;">
                    <h4 class="section-title"> {{trans('front/responsive.nombreservicio')}} </h4>
                    <div class="tab-container full-width style2">
                        <div class="form-group">
                            <input type="text" name="nombre_servicio" value="{!!$usuarioServicio->nombre_servicio!!}" class="input-text chng" style="width: 100%;" placeholder="Nombre del Servicio">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 res" style="width: 100%;">
                    <h4 class="section-title"> {{trans('front/responsive.nombreservicioEng')}} </h4>
                    <div class="tab-container full-width style2">
                        <div class="form-group">
                            <input type="text" name="nombre_servicio_eng" value="{!!$usuarioServicio->nombre_servicio_eng!!}" class="input-text chng" style="width: 100%;" placeholder="Nombre del Servicio en ingles">
                        </div>
                    </div>
                </div>
            </div>
            <!-- PROVINCIA, CANTON Y PARROQUIA-->
            <div class="col-xs-12 col-md-12 res" style="margin-bottom: 3%;margin-top: 2%;">

                            <div class="col-xs-12 col-md-12 res">


                                 @if($id_catalogo==1)
                        <h4 class="section-title">{{trans('front/responsive.provincia')}} del lugar</h4>

                        @elseif($id_catalogo==2)
                        <h4 class="section-title">{{trans('front/responsive.provincia')}} del alojamiento</h4>

                        @else
                        <h4 class="section-title">{{trans('front/responsive.provincia')}} del las oficinas</h4>


                        @endif


                                <div class="tab-container full-width style2">
                                     <div id='provincias'>
                                        @section('provincia')
                                        @show
                                    </div>

                                </div>
                            </div>
            </div>
            <!-- DETALLE SERVICIO Y COMO LLEGAR-->
            <div class="col-xs-12 col-md-12 res" style="margin-bottom: 3%;margin-top: 2%;">

                            <div class="col-xs-12 col-md-12 res">
                                <h4 class="section-title">{{trans('front/responsive.detallellegar')}}</h4>
                                <div class="tab-container full-width style2 text-center">
                                    <ul class="tabs clearfix text-center" style="text-align: center;">
                                        <li class="active" style="text-align: center;"><a href="#tab2-1" data-toggle="tab">{{trans('front/responsive.espanol')}}</a></li>
                                        <li><a href="#tab2-2" data-toggle="tab">{{trans('front/responsive.ingles')}}</a></li>
                                    </ul>
                                    <div id="tab2-1" class="tab-content in active">
                                        <div class="tab-pane" style="margin:2%;">

                                            <div class="form-group">
                                                {!!Form::label('detalle_servicio_1', 'Detalle Servicio', array("title"=>"Ingresa un detalle corto y preciso, no más de 4 líneas procura usar un todo cortéz para invitar a los turistas. Nosotros nos encargaremos de traducirlo a diferentes idiomas.",'class'=>'control-label-1'))!!}
                                                <textarea id="detalle_servicio" name="detalle_servicio" class="input-text chng" placeholder="Detalle Servicio" title="Ingresa un detalle corto y preciso, no más de 4 líneas procura usar un todo cortéz para invitar a los turistas. Nosotros nos encargaremos de traducirlo a diferentes idiomas." style="resize:none;width: 100%;height: 200px;">{!!trim($usuarioServicio->detalle_servicio)!!}</textarea>
                                            </div>
                                            <div class="form-group">
                                                {!!Form::label('como_llegar1', 'Como llegar desde', array('class'=>'control-label-2'))!!}
                                                <input type="text" name="como_llegar1_1" value="{!!$usuarioServicio->como_llegar1_1!!}" class="input-text chng" style="width: 100%;"
                                                       title="Como llegar" placeholder="Quito, GYE, Parque central ,etc">
                                                <textarea style="height: 200px;resize:none;margin-top: 1%;width: 100%;height: 200px;" id="como_llegar1" name="como_llegar1" class="input-text chng" placeholder="Detalle de como llegar a tu servicio">{!!trim($usuarioServicio->como_llegar1)!!}</textarea>
                                            </div>
                                       </div>
                                    </div>
                                    <div id="tab2-2" class="tab-content">
                                        <div class="tab-pane" style="margin:2%;">
                                            <div class="form-group">
                                                {!!Form::label('detalle_servicio_1', 'Detalle Servicio Inglés', array("title"=>"Ingresa un detalle corto y preciso",'class'=>'control-label-1'))!!}
                                                <textarea style="height: 200px;resize:none;margin-top: 1%;width: 100%" id="detalle_servicio_eng" name="detalle_servicio_eng" class="input-text chng" placeholder="Detalle Servicio" title="Ingresa un detalle corto y preciso, no más de 4 líneas procura usar un todo cortéz para invitar a los turistas. Nosotros nos encargaremos de traducirlo a diferentes idiomas." style="resize:none;">{!!trim($usuarioServicio->detalle_servicio_eng)!!}</textarea>
                                            </div>
                                            <div class="form-group">
                                                {!!Form::label('como_llegar2', 'Como llegar Inglés', array('class'=>'control-label-2'))!!}
                                                <input type="text" name="como_llegar2_2" value="{!!$usuarioServicio->como_llegar2_2!!}" class="input-text chng" style="width: 100%;"
                                                       title="Como llegar" placeholder="Cuenca, Manta, Parque central ,etc">
                                                <textarea style="height: 200px;resize:none;margin-top: 1%;width: 100%;" name="como_llegar2" class="input-text chng" placeholder="Detalle de como llegar a tu servicio" >{!!trim($usuarioServicio->como_llegar2)!!}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
            </div>
            <!-- iNFORMACION DEL SERVICIO-->
            <div class="col-xs-12 col-md-12 res" style="margin-bottom: 3%;margin-top: 2%;">

                            <div class="col-xs-12 col-md-12 res">
                                <h4 class="section-title">{{trans('front/responsive.infoservicio')}}</h4>
                                <div class="tab-container full-width style2">
                                    <ul class="tabs clearfix text-center">

                                    </ul>
                                    <div id="tab2-12" class="tab-content in active" style="border: 1px solid #edf6ff">
                                        <div class="tab-pane" style="margin:2%;">
                                            <div class="form-group">
                                                {!!Form::label('precio_desde_1', 'Precio Desde', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                                                <input type="text" name="precio_desde" value="{!!$usuarioServicio->precio_desde!!}" class="input-text chng" style="width: 100%;"
                                                       title="Para realizar una segmentación adecuada de interesados, sería bueno que nos des el rango de precios de tu servicio. El valor es en dólares americanos" placeholder="Precio Desde">
                                            </div>
                                            <div class="form-group">
                                                {!!Form::label('precio_hasta_1', 'Precio Hasta', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                                                <input type="text" name="precio_hasta" value="{!!$usuarioServicio->precio_hasta!!}" class="input-text chng" style="width: 100%;" placeholder="Precio Hasta">
                                            </div>
                                            <div class="form-group">
                                                {!!Form::label('direccion_servicio_1', 'Direccion Servicio', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                                                <input type="text" name="direccion_servicio" value="{!!$usuarioServicio->direccion_servicio!!}" class="input-text chng" style="width: 100%;"
                                                       placeholder="Direccion del Servicio">
                                            </div>
                                            <div class="form-group">
                                                {!!Form::label('horarios', 'Horario atención', array('class'=>'control-label','id'=>'iconFormulario-step4'))!!}
                                                <input type="text" name="horario" value="{!!$usuarioServicio->horario!!}" class="input-text chng" style="width: 100%;"
                                                       placeholder="Lunes a Viernes de 7AM a 8PM" title="Horario de atención">
                                            </div>
                                            <div class="form-group">
                                                {!!Form::label('telefono_1', 'Telefono', array('class'=>'control-label-2'))!!}
                                                <input type="text" name="telefono" value="{!!$usuarioServicio->telefono!!}" class="input-text chng" style="width: 100%;"
                                                       placeholder="Telefono del Servicio" title="El turista podrá comunicarse directamente contigo si así lo deseas">
                                            </div>
                                            <div class="form-group">
                                                {!!Form::label('correo_contacto_1', 'Correo del contacto', array('class'=>'control-label-2'))!!}
                                                <input type="text" name="correo_contacto" value="{!!$usuarioServicio->correo_contacto!!}" class="input-text chng" style="width: 100%;"
                                                       placeholder="Correo Contacto" title="Siempre es bueno tener un correo electrónico en el cual puedan pedirte más información sobre tu servicio">
                                            </div>
                                            <div class="form-group">
                                                {!!Form::label('pagina_web_1', 'Pagina Web', array('class'=>'control-label-2'))!!}
                                                <input type="text" name="pagina_web" value="{!!$usuarioServicio->pagina_web!!}" class="input-text chng" style="width: 100%;"
                                                       placeholder="URL" title="Si tienes una página web servirá mucho para tu credibilidad.">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>

            <!-- TAGS-->
            <div class="col-xs-12 col-md-12 res" style="margin-bottom: 3%;margin-top: 2%;">
                <div class="col-xs-12 col-md-12 res">
                    <h4 class="section-title">{{trans('front/responsive.tags')}}</h4>
                    <div class="tab-container full-width style2">
                        <input type="text" name="tags" value="{!!$usuarioServicio->tags!!}" title="Palabras clave o referencias separadas por comas" class="input-text chng" placeholder="#ruta del sol, #museos" style="width: 100% !important;">
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 res">
                    <h4 class="section-title">{{trans('front/responsive.keywords')}}</h4>
                    <div class="tab-container full-width style2">
                        <input type="text" name="key_words" value="{!!$usuarioServicio->key_words!!}" title="Palabras clave" class="input-text chng" placeholder="#ruta del sol, #museos" style="width: 100% !important;">
                    </div>
                </div>
            </div>

            <!-- UBICACION-->
            <div class="col-xs-12 col-md-12 res" style="margin-bottom: 3%;margin-top: 2%;">

                            <div class="col-xs-12 col-md-12 res">
                                <h4 class="section-title">{{trans('front/responsive.ubicacion')}}</h4>
                                <div class="tab-container full-width style2">
                                     @include('reusable.maps1', ['longitud_servicio' => $usuarioServicio->longitud_servicio,'latitud_servicio'=>$usuarioServicio->latitud_servicio])
                                </div>
                            </div>
            </div>

            <!-- ACTIVAR Y DESACTIVAR -->
            <div class="col-xs-12 col-md-12 res" style="margin-bottom: 3%;margin-top: 2%;">
                <div class="col-xs-12 col-md-12 res">
                    <h4 class="section-title">{{trans('front/responsive.activar')}}</h4>
                    <div class="tab-container full-width style2">
                @if($usuarioServicio->estado_servicio_usuario == 0)
                <?php $check = ''; ?>
                @endif
                @if($usuarioServicio->estado_servicio_usuario == 1)
                <?php $check = 'checked'; ?>
                @endif

                <div class="form-group text-center">

                   <input type="checkbox" id='estado_servicio_usuario'
                                   name="estado_servicio_usuario" value="{!!$usuarioServicio->estado_servicio_usuario!!}"
                                   onchange="UpdateServicioActivo('{!!asset('/updateServicioActivo')!!}/{!!$usuarioServicio->id!!}')">
                </div>


                    </div>
                </div>
            </div>


        </div>

        <!-- VISTA PREVIA Y GUARDAR-->
        <br>
        <div class="col-xs-12 col-md-12 res text-center">
            <div class="form-group" style="display: inline-table; margin-left: 4%;">
                 <a class="btn btn-medium style1" title="Guardar" onclick="UpdateServicioInfo1('registro_step1', 'optional');" href="#">{{trans('front/responsive.guardar')}}</a>

            </div>
            <!--<div class="form-group" style="display: inline-table; margin-left: 4%;">
                 <a class="btn btn-medium style1" title="Vista previa" onclick="AjaxContainerVistaPrevia({!!$usuarioServicio->id!!},{!!$id_catalogo!!});" href="#">{{trans('front/responsive.vistaprevia')}}</a>
            </div>-->

			<div class="form-group" style="display: inline-table; margin-left: 4%;">
             <a class="btn btn-medium style1" target="_blank"s title="Vista previa" href="https://iwannatrip.com/detalle/{!!htmlspecialchars(html_entity_decode(nl2br(e($usuarioServicio->nombre_servicio))))!!}/{!!$usuarioServicio->id!!}">Ver el servicio</a>
            </div>

        </div>


        {!! Form::close() !!}

    </div>
<input type="hidden" value="0" id="flag_image">


@stop


@section('scripts')

{!! HTML::script('js/jquery.js') !!}
{!!HTML::script('js/loadingScreen/loadingoverlay.js') !!}
{!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}
{!! HTML::script('/js/jsModal/jquery.simplemodal.js') !!}

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDor7F0iN5YavbFiLRA7pY7L8-Rgl89GT8&signed_in=true&libraries=places&callback=initMap" async defer></script>

{!! HTML::script('/js/jsModal/basic.js') !!}
{!! HTML::script('js/calendar/calendar.js') !!}
<script type="text/javascript" src="{{ asset('public_components/components/owl-carousel/owl.carousel.min.js')}}"></script>

@if($usuarioServicio->id_provincia=='' )
<script>
            $(document).ready(function () {
            GetDataAjaxProvincias1("{!!asset('/getProvincias1')!!}/0/0/0");
    });</script>
@else
<script>
            $(document).ready(function () {
    GetDataAjaxProvincias1("{!!asset('/getProvincias1')!!}/{!!$usuarioServicio->id_provincia!!}/{!!$usuarioServicio->id_canton!!}/{!!$usuarioServicio->id_parroquia!!}");
    });</script>
@endif

<script>
    $(document).ready(function () {
                GetDataAjaxImagenesRes("{!!asset('/imagenesAjaxDescription1')!!}/1/{!!$usuarioServicio->id!!}");
                var check = $("#estado_servicio_usuario").val();
                if(check == 1){
                    $( "#estado_servicio_usuario" ).prop( "checked", true );
                }
    });

     ///Script para actualizar el container una vez que se hayan subido las imagenes
     setInterval( function() {
        if ($('#flag_image').val() == 1) {
            // Save the new value
           GetDataAjaxImagenesRes("{!!asset('/imagenesAjaxDescription1')!!}/1/{!!$usuarioServicio->id!!}");
           $("#flag_image").val('0');

            // TODO - Handle the changed value

        }

        if ($('#flag_image_preview').val() == 0) {
            //alert("Entro aqui");
            $("#mostrarJS").show();
        }

}, 100);
</script>


<script>
    $(document).ready(function () {

               // GetDataAjaxSectionEventos("{!!asset('/getlistaServiciosComplete1')!!}/{!!$usuarioServicio->id!!}");
                //GetDataAjaxImagenesRes("{!!asset('/imagenesAjaxDescription1')!!}/1/{!!$usuarioServicio->id!!}");
    });



     $(".chng").change(function() {
        UpdateServicioInfo('registro_step1', 'optional')
            });

    $(function() {
            var tooltips = $("[title]").tooltip({
            position: {
            my: "left top",
                    at: "right+5 top-5"
            }
            });
            });


</script>




</div>



</div>
<script>
  $(function() {

      $('.datepicker').datepicker({dateFormat: 'yy/mm/dd'});
  });
  </script>

  <!-- Modal FOTOGRAFIA-->
<div class="modal fade" id="foto" tabindex="-1" role="dialog">


  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div id="testboxForm" class="foto">
                  <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">{{trans('front/responsive.agregarfoto')}}</h3>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="{{trans('front/responsive.cerrar')}}">
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <div class="modal-body">
          <div class="rowerrorM"> </div>
    {!! Form::open(['url' => route('upload-post'), 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" id="id_catalogo_fotografia" name="id_catalogo_fotografia" value="1">
          <input type="hidden" id="id_usuario_servicio" name="id_usuario_servicio" value="{!!$usuarioServicio->id!!}">
          <input type="hidden" id="id_auxiliar" name="id_auxiliar" value="{!!$usuarioServicio->id!!}">

          <div class="form-group">
               <div class="dz-message">

                </div>

                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>

                <div class="dropzone-previews" id="dropzonePreview"></div>

                <h4 style="text-align: center;color:#428bca;">Arrastra las imágenes aquí (Formato: jpg, tamaño max: 6Mb)
                    <span class="glyphicon glyphicon-hand-down"></span></h4>
          </div>

      </div>
      {!! Form::close() !!}
      <div class="modal-footer">
          <button type="button" id="nextbtn" class="btn btn-secondary" data-dismiss="modal" >{{trans('front/responsive.finalizar')}}</button>
          <!--<button type="button" id="nextbtn" class="btn btn-secondary" data-dismiss="modal"
                  onclick="GetDataAjaxImagenesRes('{!!$usuarioServicio->id!!}');" >{{trans('front/responsive.finalizar')}}</button>-->
         <!--<a class="btn btn-secondary" id="nextbtn"  href="#">Finalizar</a> -->
      </div>

        </div>

    </div>
  </div>
</div>


  <!-- Dropzone Preview Template -->
<div id="preview-template" style="display: none;">

    <div class="dz-preview dz-file-preview">
        <div class="dz-image"><img data-dz-thumbnail=""></div>

        <div class="dz-details">
            <div class="dz-size"><span data-dz-size=""></span></div>
            <div class="dz-filename"><span data-dz-name=""></span></div>
        </div>
        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
        <div class="dz-error-message"><span data-dz-errormessage=""></span></div>

        <div class="dz-success-mark">
            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                <title>Check</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                </g>
            </svg>
        </div>

        <div class="dz-error-mark">
            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                <title>error</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                        <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                    </g>
                </g>
            </svg>
        </div>

    </div>
</div>

<!--{!! HTML::style('/packages/bootstrap/css/bootstrap.min.css') !!}
{!! HTML::style('/assets/css/style.css') !!}-->
{!! HTML::style('/packages/dropzone/dropzone.css') !!}
<!-- End Dropzone Preview Template -->
{!! HTML::script('/packages/dropzone/dropzone.js') !!}
{!! HTML::script('/assets/js/dropzone-config.js') !!}


<script>
  $.ajaxSetup({
  headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
  });



$("#nextbtn").click(function() {
  $("#flag_image").val('1');

});
</script>



   <?php $header = "/img/portada_face_iwanatrip_04.jpg";?>
  <script>

jQuery(document).ready(function ($) {
   $(".page-title-container.style3").css('backgroundImage','url({!!$header!!})');
   $(".col-xs-12.col-md-12.res").css('padding','0');



});

</script>




@stop


