@section('topPlaces')
<script type="text/javascript" src="{{ asset('/public_components/js/jquery-2.1.3.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.min.js')}}"></script>
<style type="text/css">
.owl-carousel .owl-nav button.owl-prev,
.owl-carousel .owl-nav button.owl-next,
.owl-carousel button.owl-dot {
    background: none;
    border: none;
    padding: 0 !important;
    font: inherit;
    font-size: 25px;
    margin-right: 20px;
    color: #1b4268;
    font-weight: bold;
}

.owl-nav {
    margin-bottom: 1px;
    border-bottom: 1px solid #d4dde5;
    padding-bottom: 10px;
}
</style>
@if(isset($topPlacesGalapagos))
<h2 class="box-title"><em class="skin-color">{{ trans('welcome/index.label50')}}</em></h2>
<div class="owl-carousel carouselTopGalapagos" >
    @foreach ($topPlacesGalapagos as $cat)

	<?php
     if(session('locale') == 'en' && $cat->nombre_servicio_eng!=''){
		$tituloIdioma=$cat->nombre_servicio_eng;

		}
	 else{
		$tituloIdioma=$cat->nombre_servicio;

	}

	$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);

	?>
    <?php
          $nombre = $nombreCanonical;
            $length = 29;
            //Primero eliminamos las etiquetas html y luego cortamos el string
            $stringDisplay = substr(strip_tags( $nombre), 0, $length);
            //Si el texto es mayor que la longitud se agrega puntos suspensivos
            if (strlen(strip_tags( $nombre)) > $length)
            $stringDisplay .= '...';

        ?>

        <div class="Instagram-card">
            <div class="Instagram-card-image" data-toggle="modal" data-target="#form-img-full" style="max-height: 150px !important; min-height: 150px !important;">



				@if(session('locale') == 'en')
				<a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    <img src= "{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$cat->filename)}}" height=600px/>
                </a>
				@else
				<a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    <img src= "{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$cat->filename)}}" height=600px/>
                </a>
				@endif




            </div>
            <div class="Instagram-card-content-tour">
              <p class="Likes">

				@if(session('locale') == 'en')
				<a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    {{$stringDisplay}}
                </a>
				@else
				<a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    {{$stringDisplay}}
                </a>
				@endif


			  </p>
              <p style="font-size: 14px;">
                <div class="tour-detail">
                    <span class="label-tour-item">{{$cat->nombre}}</span>
                </div>
              </p>
              <p>
                  @if($cat->id_catalogo_servicio==1)
                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/1.png')}}" title="eatDrink" alt="eatDrink">
                     <span class="product-price" ><span class="currency-symbol"></span>Eat & Drink</span>

                @elseif($cat->id_catalogo_servicio==2)
                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/2.png')}}" title="Sleep" alt="Sleep">
                    <span class="product-price" ><span class="currency-symbol"></span>Sleep</span>
                @elseif($cat->id_catalogo_servicio==3)
                    <img src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Tour Operator</span>
                @elseif($cat->id_catalogo_servicio==9)
                    <img style="width:50px"  src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/festividades.png')}}" title="Festividades" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Festividades</span>
                        <?php
                            $date = date_create($cat->fecha_ingreso);
                            $date2 = date_create($cat->fecha_fin);
                         ?>
                    <span class="comment-date" style="color: #EB5D5E">{!!date_format($date, 'j F ')!!}-{!!date_format($date2, 'j F ')!!}</span>
                @else
                    <img src="{{ asset('/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Turism</span>
                @endif
              </p>
              <hr>
            </div>
        </div>
        @endforeach
        <div class="icon-box style-boxed-3 box" style="cursor: pointer;" onclick='goToRegion("{{asset('/region')}}?region=",4)'>
            <div class="icon-container">
                <i class="fa fa-eye"></i>
            </div>
            <div class="box-content">
                <h4 class="box-title"><a href="{{asset('/region')}}?region=4">{{(session('locale') == 'es')?'Ver más ...':'More ..'}}</a></h4>
                <!-- <p>Sed ut perspiciatis unde omnis natus error sit voluptate acantium doloremque laudantium.</p> -->
            </div>
        </div>
    </div>
@endif

@if(isset($topPlacesSierra))
<h2 class="box-title"><em class="skin-color">{{ trans('welcome/index.label49')}}</em></h2>
<div class="owl-carousel carouselTopSierra" >
    @foreach ($topPlacesSierra as $cat)

	<?php
     if(session('locale') == 'en' && $cat->nombre_servicio_eng!=''){
		$tituloIdioma=$cat->nombre_servicio_eng;

		}
	 else{
		$tituloIdioma=$cat->nombre_servicio;

	}

	$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);

	?>

    <?php
            $nombre = $nombreCanonical;
            $nombre = str_replace('/', '-', $nombre);
             $length = 29;
            //Primero eliminamos las etiquetas html y luego cortamos el string
            $stringDisplay = substr(strip_tags( $nombre), 0, $length);
            //Si el texto es mayor que la longitud se agrega puntos suspensivos
            if (strlen(strip_tags( $nombre)) > $length)
            $stringDisplay .= '...';

        ?>
        <div class="Instagram-card">
            <div class="Instagram-card-image" data-toggle="modal" data-target="#form-img-full" style="max-height: 150px !important; min-height: 150px !important;">





				@if(session('locale') == 'en')
				<a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    <img src= "{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$cat->filename)}}" height=600px/>
                </a>
				@else
				<a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    <img src= "{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$cat->filename)}}" height=600px/>
                </a>
				@endif


            </div>
            <div class="Instagram-card-content-tour">
              <p class="Likes">

			  	@if(session('locale') == 'en')
				<a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    {{$stringDisplay}}
                </a>
				@else
				<a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    {{$stringDisplay}}
                </a>
				@endif




              </p>
              <p style="font-size: 14px;">
                <div class="tour-detail">
                    <span class="label-tour-item">{{$cat->nombre}}</span>
                </div>
              </p>
              <p>
                  @if($cat->id_catalogo_servicio==1)
                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/1.png')}}" title="eatDrink" alt="eatDrink">
                     <span class="product-price" ><span class="currency-symbol"></span>Eat & Drink</span>

                @elseif($cat->id_catalogo_servicio==2)
                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/2.png')}}" title="Sleep" alt="Sleep">
                    <span class="product-price" ><span class="currency-symbol"></span>Sleep</span>
                @elseif($cat->id_catalogo_servicio==3)
                    <img src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Tour Operator</span>
                @elseif($cat->id_catalogo_servicio==9)
                    <img style="width:50px"  src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/festividades.png')}}" title="Festividades" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Festividades</span>
                        <?php
                            $date = date_create($cat->fecha_ingreso);
                            $date2 = date_create($cat->fecha_fin);
                         ?>
                    <span class="comment-date" style="color: #EB5D5E">{!!date_format($date, 'j F ')!!}-{!!date_format($date2, 'j F ')!!}</span>
                @else
                    <img src="{{ asset('/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Turism</span>
                @endif
              </p>
              <hr>
            </div>
        </div>
        @endforeach
        <div class="icon-box style-boxed-3 box" style="cursor: pointer;" onclick='goToRegion("{{asset('/region')}}?region=",2)'>
            <div class="icon-container">
                <i class="fa fa-eye"></i>
            </div>
            <div class="box-content">
                <h4 class="box-title"><a href="{{asset('/region')}}?region=2">{{(session('locale') == 'es')?'Ver más ...':'More ..'}}</a></h4>
                <!-- <p>Sed ut perspiciatis unde omnis natus error sit voluptate acantium doloremque laudantium.</p> -->
            </div>
        </div>
    </div>
@endif

@if(isset($topPlacesOriente))
<h2 class="box-title"><em class="skin-color">{{ trans('welcome/index.label51')}}</em></h2>
<div class="owl-carousel carouselTopOriente" >
    @foreach ($topPlacesOriente as $cat)




	<?php
     if(session('locale') == 'en' && $cat->nombre_servicio_eng!=''){
		$tituloIdioma=$cat->nombre_servicio_eng;

		}
	 else{
		$tituloIdioma=$cat->nombre_servicio;

	}

	$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);

	?>


        <?php
            $nombre = $nombreCanonical;
            $nombre = str_replace('/', '-', $nombre);
            $length = 29;
            //Primero eliminamos las etiquetas html y luego cortamos el string
            $stringDisplay = substr(strip_tags( $nombre), 0, $length);
            //Si el texto es mayor que la longitud se agrega puntos suspensivos
            if (strlen(strip_tags( $nombre)) > $length)
            $stringDisplay .= '...';


        ?>
        <div class="Instagram-card">
            <div class="Instagram-card-image" data-toggle="modal" data-target="#form-img-full" style="max-height: 150px !important; min-height: 150px !important;">



				@if(session('locale') == 'en')
				<a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    <img src= "{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$cat->filename)}}" height=600px/>
                </a>

				@else
				<a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    <img src= "{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$cat->filename)}}" height=600px/>
                </a>

				@endif




            </div>
            <div class="Instagram-card-content-tour">
              <p class="Likes">


				@if(session('locale') == 'en')
				<a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    {{$stringDisplay}}
                </a>

				@else
				<a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    {{$stringDisplay}}
                </a>

				@endif



              </p>
              <p style="font-size: 14px;">
                <div class="tour-detail">
                    <span class="label-tour-item">{{$cat->nombre}}</span>
                </div>
              </p>
              <p>
                  @if($cat->id_catalogo_servicio==1)
                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/1.png')}}" title="eatDrink" alt="eatDrink">
                     <span class="product-price" ><span class="currency-symbol"></span>Eat & Drink</span>

                @elseif($cat->id_catalogo_servicio==2)
                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/2.png')}}" title="Sleep" alt="Sleep">
                    <span class="product-price" ><span class="currency-symbol"></span>Sleep</span>
                @elseif($cat->id_catalogo_servicio==3)
                    <img src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Tour Operator</span>
                @elseif($cat->id_catalogo_servicio==9)
                    <img style="width:50px"  src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/festividades.png')}}" title="Festividades" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Festividades</span>
                        <?php
                            $date = date_create($cat->fecha_ingreso);
                            $date2 = date_create($cat->fecha_fin);
                         ?>
                    <span class="comment-date" style="color: #EB5D5E">{!!date_format($date, 'j F ')!!}-{!!date_format($date2, 'j F ')!!}</span>
                @else
                    <img src="{{ asset('/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Turism</span>
                @endif
              </p>
              <hr>
            </div>
        </div>
        @endforeach
        <div class="icon-box style-boxed-3 box" style="cursor: pointer;" onclick='goToRegion("{{asset('/region')}}?region=",3)'>
            <div class="icon-container">
                <i class="fa fa-eye"></i>
            </div>
            <div class="box-content">
                <h4 class="box-title"><a href="{{asset('/region')}}?region=3">{{(session('locale') == 'es')?'Ver más ...':'More ..'}}</a></h4>
                <!-- <p>Sed ut perspiciatis unde omnis natus error sit voluptate acantium doloremque laudantium.</p> -->
            </div>
        </div>
    </div>
@endif
@if(isset($topPlacesCosta))
<h2 class="box-title"><em class="skin-color">{{ trans('welcome/index.label48')}}</em></h2>
<div class="owl-carousel carouselTopCosta" >
    @foreach ($topPlacesCosta as $cat)




	<?php
     if(session('locale') == 'en' && $cat->nombre_servicio_eng!=''){
		$tituloIdioma=$cat->nombre_servicio_eng;

		}
	 else{
		$tituloIdioma=$cat->nombre_servicio;

	}

	$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);

	?>




    <?php
            $nombre = $nombreCanonical;
            $nombre = str_replace('/', '-', $nombre);
            $length = 29;
            //Primero eliminamos las etiquetas html y luego cortamos el string
            $stringDisplay = substr(strip_tags( $nombre), 0, $length);
            //Si el texto es mayor que la longitud se agrega puntos suspensivos
            if (strlen(strip_tags( $nombre)) > $length)
            $stringDisplay .= '...';


        ?>
        <div class="Instagram-card">
            <div class="Instagram-card-image" data-toggle="modal" data-target="#form-img-full" style="max-height: 150px !important; min-height: 150px !important;">

				@if(session('locale') == 'en')
				<a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    <img src= "{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$cat->filename)}}" height=600px/>
                </a>

				@else
				<a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    <img src= "{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$cat->filename)}}" height=600px/>
                </a>

				@endif




            </div>
            <div class="Instagram-card-content-tour">
              <p class="Likes">

				@if(session('locale') == 'en')
				<a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    {{$stringDisplay}}
                </a>

				@else
				<a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$cat->id_usuario_servicio!!}">
                    {{$stringDisplay}}
                </a>
				@endif



              </p>
              <p style="font-size: 14px;">
                <div class="tour-detail">
                    <span class="label-tour-item">{{$cat->nombre}}</span>
                </div>
              </p>
              <p>
                  @if($cat->id_catalogo_servicio==1)
                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/1.png')}}" title="eatDrink" alt="eatDrink">
                     <span class="product-price" ><span class="currency-symbol"></span>Eat & Drink</span>

                @elseif($cat->id_catalogo_servicio==2)
                    <img style="width:40px" src="{{ url(env('AWS_PUBLIC_URL').'images/img/register/2.png')}}" title="Sleep" alt="Sleep">
                    <span class="product-price" ><span class="currency-symbol"></span>Sleep</span>
                @elseif($cat->id_catalogo_servicio==3)
                    <img src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Tour Operator</span>
                @elseif($cat->id_catalogo_servicio==9)
                    <img style="width:50px"  src="{{ url(env('AWS_PUBLIC_URL').'images/img/ic_serv/festividades.png')}}" title="Festividades" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Festividades</span>
                        <?php
                            $date = date_create($cat->fecha_ingreso);
                            $date2 = date_create($cat->fecha_fin);
                         ?>
                    <span class="comment-date" style="color: #EB5D5E">{!!date_format($date, 'j F ')!!}-{!!date_format($date2, 'j F ')!!}</span>
                @else
                    <img src="{{ asset('/img/ic_serv/centro_turistico.png')}}" title="Turismo" alt="turismo">
                    <span class="product-price" ><span class="currency-symbol"></span>Turism</span>
                @endif
              </p>
              <hr>
            </div>
        </div>
        @endforeach
        <div class="icon-box style-boxed-3 box" style="cursor: pointer;" onclick='goToRegion("{{asset('/region')}}?region=",1)'>
            <div class="icon-container">
                <i class="fa fa-eye"></i>
            </div>
            <div class="box-content">
                <h4 class="box-title"><a href="{{asset('/region')}}?region=4">{{(session('locale') == 'es')?'Ver más ...':'More ..'}}</a></h4>
                <!-- <p>Sed ut perspiciatis unde omnis natus error sit voluptate acantium doloremque laudantium.</p> -->
            </div>
        </div>
    </div>
@endif
<script type="text/javascript">

    function startCarousels(){
        var carouselTopIndividual = $('.carouselTopIndividual');
        carouselTopIndividual.owlCarousel({
            stagePadding: 50,
            loop:false,
            margin:10,
            nav:true,
            responsive : {
                0 : {
                    items:1
                },
                480 : {
                    items:2
                },
                768 : {
                    items:4
                }
            }
        });
        var paginaIndividual = 1;
        // carouselTopIndividual.on('changed.owl.carousel', function(event) {
        //     var items     = event.item.count;
        //     var item  = event.item.index;
        //     if (item <= items) {
        //         // carouselTopIndividual.owlCarousel('add', '<div>foo</div>').owlCarousel('update');
        //         items     = event.item.count;
        //         GetDataAjaxTopPlacesLocation("{!!asset('/getTopPlacesByLocation')!!}?page=" + paginaIndividual + '&topId=indiv','.carouselTopIndividual');
        //     }

        // });

        var carouselTopCosta = $('.carouselTopCosta');
        carouselTopCosta.owlCarousel({
            stagePadding: 50,
            loop:false,
            margin:10,
            nav:true,
            responsive : {
                0 : {
                    items:1
                },
                480 : {
                    items:2
                },
                768 : {
                    items:4
                }
            }
        });
        var paginaCosta = 1;
        // carouselTopCosta.on('changed.owl.carousel', function(event) {
        //     var items     = event.item.count;
        //     var item  = event.item.index;
        //     if (item <= items) {
        //         // carouselTopCosta.owlCarousel('add', '<div>foo</div>').owlCarousel('update');
        //         GetDataAjaxTopPlacesLocation("{!!asset('/getTopPlacesByLocation')!!}?page=" + paginaCosta + '&topId=1','.carouselTopCosta');
        //     }
        // });

        var carouselTopSierra = $('.carouselTopSierra');
        carouselTopSierra.owlCarousel({
            stagePadding: 50,
            loop:false,
            margin:10,
            nav:true,
            responsive : {
                0 : {
                    items:1
                },
                480 : {
                    items:2
                },
                768 : {
                    items:4
                }
            }
        });
        var paginaSierra = 1;
        // carouselTopSierra.on('changed.owl.carousel', function(event) {
        //     var items     = event.item.count;
        //     var item  = event.item.index;
        //     if (item <= items) {
        //         // carouselTopSierra.owlCarousel('add', '<div>foo</div>').owlCarousel('update');
        //         GetDataAjaxTopPlacesLocation("{!!asset('/getTopPlacesByLocation')!!}?page=" + paginaSierra + '&topId=2','.carouselTopSierra');
        //     }
        // });

        var carouselTopOriente = $('.carouselTopOriente');
        carouselTopOriente.owlCarousel({
            stagePadding: 50,
            loop:false,
            margin:10,
            nav:true,
            responsive : {
                0 : {
                    items:1
                },
                480 : {
                    items:2
                },
                768 : {
                    items:4
                }
            }
        });
        var paginaOriente = 1;
        // carouselTopOriente.on('changed.owl.carousel', function(event) {
        //     var items     = event.item.count;
        //     var item  = event.item.index;
        //     if (item <= items) {
        //         // carouselTopOriente.owlCarousel('add', '<div>foo</div>').owlCarousel('update');
        //         GetDataAjaxTopPlacesLocation("{!!asset('/getTopPlacesByLocation')!!}?page=" + paginaOriente + '&topId=3','.carouselTopOriente');
        //     }
        // });

        var carouselTopGalapagos = $('.carouselTopGalapagos');
        carouselTopGalapagos.owlCarousel({
            stagePadding: 50,
            loop:false,
            margin:10,
            nav:true,
            responsive : {
                0 : {
                    items:1
                },
                480 : {
                    items:2
                },
                768 : {
                    items:4
                }
            }
        });
        var paginaGalapagos = 1;
        // carouselTopGalapagos.on('changed.owl.carousel', function(event) {
        //     var items     = event.item.count;
        //     var item  = event.item.index;
        //     if (item <= items) {
        //         // carouselTopGalapagos.owlCarousel('add', '<div>foo</div>').owlCarousel('update');
        //         GetDataAjaxTopPlacesLocation("{!!asset('/getTopPlacesByLocation')!!}?page=" + paginaGalapagos + '&topId=4','.carouselTopGalapagos');
        //     }
        // });

        var carouselTypeService = $('.carouselTypeService');
        carouselTypeService.owlCarousel({
            stagePadding: 50,
            loop:false,
            margin:10,
            nav:false,
            responsive : {
                0 : {
                    items:1
                },
                480 : {
                    items:2
                },
                768 : {
                    items:4
                }
            }
        });

        var carouselInstagram = $('.carouselInstagram');
        carouselInstagram.owlCarousel({
            stagePadding: 50,
            loop:false,
            margin:10,
            nav:false,
            autoPlay:false,
            responsive : {
                0 : {
                    items:1
                },
                480 : {
                    items:2
                },
                768 : {
                    items:4
                }
            }
        });
    }

    var goToRegion = function(url,idRegion) {
        window.location.href = url + idRegion;
    }
</script>
@endsection