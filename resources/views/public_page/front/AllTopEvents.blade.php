@section('topEvent')
    <div class="post-pagination" id="ocultar">
        <!-- SECCION DE EVENTOS -->
        <div class="blog-posts layout-timeline layout-fullwidth">
            <div class="timeline-author text-center" >
                <img src="{{ asset('img/eventos.jpg')}}" alt="">
            </div>
            <div class="iso-container iso-col-2 style-masonry has-column-width">
                @foreach($eventos as $event)
                <div class="iso-item">
                    <article class="post post-masonry">
                        <div class="post-date" style="width: 100% !important;font-weight: 600 !important; font-size: 0.8333em !important;
                                                        background: #ff6600 !important; line-height: 28px;display: inline-block;color: #fff !important;
                                                        position: absolute !important;top: 0 !important;
                                                        z-index: 9 !important;visibility: visible !important; text-transform: uppercase !important; ">
                                        <?php $d=strtotime($event->fecha_ingreso);
                                              echo date("d-m-Y h:ia", $d); ?></div>
                        <div class="post-action">
                            <a href="{{ asset('/detalle/'.$event->nombre_servicio.'/'.$event->id)}}"  onclick="$('.woocommerce').LoadingOverlay('show')">
                            <table style="width: 100% !important;">
                                <tr>
                                    <td style="padding: 0 !important;width:30%">
                                        @if(empty($event->foto))
                                            <img class="thumbnail" src="/images/no-image-available.png" alt="" style="width: 100% !important;padding: 0 !important;">
                                        @else
                                            <img class="thumbnail" src="{{ url(env('AWS_PUBLIC_URL').'images/icon/'.$event->foto[0]->filename)}}" alt="" style="width: 100% !important;height: auto !important;padding: 0 !important;margin-top: 2px !Important;">
                                        @endif
                                    </td>

                                    <td style="width:70%;padding-left: 20px !important;">
                                        <h3 class="entry-title" style="margin-bottom: -2px !important;">{!! $event->nombre_servicio!!}</h3>
                                            <?php $ini = strtotime($event->fecha_ingreso);
                                                  $inicio =  date("h:ia", $ini); ?>
                                            <?php $fn = strtotime($event->fecha_fin);
                                                  $fin =  date("h:i:sa", $fn); ?>
                                            <?php $fechaini = strtotime($event->fecha_ingreso);
                                                  $fechaInicio = date("d-m-Y", $fechaini); ?>
                                        <p style="font-weight: 400 !important;margin-bottom: -3px !important;"> Lugar:
                                                                                                            @if(!empty($event->canton))
                                                                                                                {!! $event->canton[0]->nombre !!} /
                                                                                                            @endif
                                                                                                                {!! $event->direccion_servicio!!} </p>
                                        <p style="font-weight: 400 !important;margin-bottom: -3px !important;"> Fecha Inicio: {!! $fechaInicio !!} </p>
                                        <p style="font-weight: 400 !important;margin-bottom: -3px !important;"> Hora Inicio: {!! $inicio!!} </p>
                                        <p style="font-weight: 400 !important;margin-bottom: -3px !important;font-weight: bold !important;">
                                                                            @if(!empty($event->tipoEvento))
                                                                                {!! $event->tipoEvento[0]->nombre_catalogo_eventos !!}
                                                                            @endif
                                        </p>
                                        <p style="font-weight: 400 !important;margin-bottom: -3px !important;"> Precio:
                                                @if($event->precio_desde == 0)
                                                <span class="product-price box" style="color:#FF6600;font-size:1em !important;"> FREE </span>
                                                @else
                                                    <span class="product-price box" style="color:#FF6600;font-size:1em !important;"> ${!! $event->precio_desde!!} </span>
                                                @endif
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            </a>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
