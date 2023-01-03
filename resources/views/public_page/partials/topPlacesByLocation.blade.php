@section('topPlaces')
	@foreach ($data as $cat)
		<?php
            $nombre = str_replace(' ', '-', $cat->nombre_servicio);
            $nombre = str_replace('/', '-', $nombre);
            $length = 17;
            //Primero eliminamos las etiquetas html y luego cortamos el string
            $stringDisplay = substr(strip_tags( $nombre), 0, $length);
            //Si el texto es mayor que la longitud se agrega puntos suspensivos
            if (strlen(strip_tags( $nombre)) > $length)
            $stringDisplay .= ' ...';
        ?>
		<div>
		<div class="Instagram-card">
            <div class="Instagram-card-image" style="max-height: 150px !important; min-height: 150px !important;">
                <a href="{!!asset('/detalle')!!}/{!!$nombre!!}/{!!$cat->id_usuario_servicio!!}">
                    <img src= "{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$cat->filename)}}" height=600px/>
                </a>
            </div>
            <div class="Instagram-card-content-tour">
              <p class="Likes">
                <a href="{!!asset('/detalle')!!}/{!!$nombre!!}/{!!$cat->id_usuario_servicio!!}">
                    {!!$stringDisplay!!}
                </a>
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
	    </div>
   @endforeach
@endsection