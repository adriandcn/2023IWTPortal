@section('cercanos')
<div class="TopPlace">

        <!-Obtiene los cercanos a la parroquia->
        @if(count($parroquia)>0 || $parroquia!=null)

            @foreach ($parroquia as $catpr)

                <?php
                    if(session('locale') == 'en' && $catpr->nombre_servicio_eng!=''){
                        $tituloIdioma=$catpr->nombre_servicio_eng;
                    }else{
                        $tituloIdioma=$catpr->nombre_servicio;
                    }

                    $nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                    $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                    $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                    $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                    $nombreCanonical = str_replace("'", '-', $nombreCanonical);
                    $nombreCanonical = str_replace("#", '-', $nombreCanonical);
                ?>


        <div class="iso-item filter-all filter-website ">
            <article class="post">

                @if(session('locale')=='en')
                <a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catpr->id_usuario_servicio!!}" onclick=""
                    class="product-image">
                    @else
                    <a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catpr->id_usuario_servicio!!}"
                        onclick="" class="product-image">
                        @endif

                        <?php
					 		 $file = asset('images/iconMobile/'.$catpr->filename);
								if (!file_exists($file)) {
									$file =  url(env('AWS_PUBLIC_URL').'images/icon/'.$catpr->filename);
									}
					?>


                        <img src="{!! url(env('AWS_PUBLIC_URL').'images/icon/'.$catpr->filename) !!}">



                        <span class="image-extras"></span>
                    </a>
                    <div class="portfolio-content">

                        @if(session('locale')=='en')
                        <h5 class="portfolio-title"><a
                                href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catpr->id_usuario_servicio!!}"
                                onclick="$('.container').LoadingOverlay('show');">{!!$nombreCanonical!!}</a></h5>

                        @else
                        <h5 class="portfolio-title"><a
                                href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catpr->id_usuario_servicio!!}"
                                onclick="$('.container').LoadingOverlay('show');">{!!$nombreCanonical!!}</a></h5>

                        @endif

                        <span class="product-price" style=" color: #eb3b50;
                          float: left;
                          font-size: 1.3333em;
                          font-weight: 600;
                          margin-right: 8px;"><span class="currency-symbol">

                                @if(isset($catpr->nombre))
                            </span>{{$catpr->nombre}}</span>
                        @endif





                        <span class="product-price"><span class="currency-symbol">


                                @if(isset($catpr->catalogo_nombre))
                            </span>{!!$catpr->catalogo_nombre!!}</span>
                        @endif


                        <br>

                        @if(isset($catpr->distancia))
                        <span class="product-price"><span class="currency-symbol">


                            </span> A <b> {!!$catpr->distancia!!} </b> KM</span>

                        @endif
                    </div>
            </article>
        </div>



        @endforeach
        @endif





        <!-Obtiene los eventos cercanos a la parroquia->
            @if($evntParroquia!=null)
            @if(count($evntParroquia)>0 )
            @foreach ($evntParroquia as $catrr)





            <?php
     if(session('locale') == 'en' && $catrr->nombre_servicio_eng!=''){
		$tituloIdioma=$catrr->nombre_servicio_eng;

		}
	 else{
		$tituloIdioma=$catrr->nombre_servicio;

	}

	$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);
?>



            <div class="iso-item filter-all filter-website ">
                <article class="post">


                    @if(session('locale') == 'en')
                    <a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catrr->id_usuario_servicio!!}"
                        onclick="$('.categorias1').LoadingOverlay('show');" class="product-image">
                        @else
                        <a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catrr->id_usuario_servicio!!}"
                            onclick="$('.categorias1').LoadingOverlay('show');" class="product-image">
                            @endif

                            <?php
					 		    $file = asset('images/iconMobile/'.$catrr->filename);
								if (!file_exists($file)) {
									$file =  url(env('AWS_PUBLIC_URL').'images/icon/'.$catrr->filename);
								}
					        ?>

                            <img src="{!! url(env('AWS_PUBLIC_URL').'images/icon/'.$catrr->filename) !!}" alt="{!!$catrr->nombre_servicio!!}">


                            <span class="image-extras"></span>
                        </a>
                        <div class="portfolio-content">

                            @if(session('locale') == 'en')

                            <h5 class="portfolio-title"><a
                                    href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catrr->id_usuario_servicio!!}"
                                    onclick="$('.container').LoadingOverlay('show');">{!!$catrr->nombre_evento!!}</a>
                            </h5>

                            @else
                            <h5 class="portfolio-title"><a
                                    href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catrr->id_usuario_servicio!!}"
                                    onclick="$('.container').LoadingOverlay('show');">{!!$catrr->nombre_evento!!}</a>
                            </h5>

                            @endif


                            <span class="product-price" style=" color: #eb3b50;
                          float: left;
                          font-size: 1.3333em;
                          font-weight: 600;
                          margin-right: 8px;"><span class="currency-symbol">


                                    @if(isset($catrr->nombre))
                                </span>{{$catrr->nombre}}</span>
                            @endif

                            <br>
                            <br>


                            <span class="product-price"><span class="currency-symbol"></span>Event</span>


                        </div>
                </article>
            </div>



            @endforeach
            @endif
            @endif




            <!-Obtiene las promociones cercanos a la parroquia->
                @if( $prmoParroquia!=null)
                @if(count($prmoParroquia)>0 )
                @foreach ($prmoParroquia as $catprom)


                <?php
     if(session('locale') == 'en' && $catprom->nombre_servicio_eng!=''){
		$tituloIdioma=$catprom->nombre_servicio_eng;

		}
	 else{
		$tituloIdioma=$catprom->nombre_servicio;

	}

	$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);
?>


                <div class="iso-item filter-all filter-website ">
                    <article class="post">

                        @if(session('locale') == 'en')
                        <a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catprom->id_usuario_servicio!!}"
                            onclick="$('.categorias1').LoadingOverlay('show');" class="product-image">
                            @else
                            <a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catprom->id_usuario_servicio!!}"
                                onclick="$('.categorias1').LoadingOverlay('show');" class="product-image">
                                @endif
                                <?php
					 		 $file = asset('images/iconMobile/'.$catprom->filename);
								if (!file_exists($file)) {
									$file =  url(env('AWS_PUBLIC_URL').'images/icon/'.$catprom->filename);
									}
					?>


                                {{-- <img src="{{ $file}}" alt="{!!$catprom->nombre_servicio!!}"> --}}
                                <img src="{!! url(env('AWS_PUBLIC_URL').'images/icon/'.$catprom->filename) !!}">



                                <span class="image-extras"></span>
                            </a>
                            <div class="portfolio-content">

                                @if(session('locale') == 'en')
                                <h5 class="portfolio-title"><a
                                        href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catprom->id_usuario_servicio!!}"
                                        onclick="$('.container').LoadingOverlay('show');">{!!$catprom->nombre_promocion!!}</a>
                                </h5>

                                @else
                                <h5 class="portfolio-title"><a
                                        href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catprom->id_usuario_servicio!!}"
                                        onclick="$('.container').LoadingOverlay('show');">{!!$catprom->nombre_promocion!!}</a>
                                </h5>

                                @endif



                                <span class="product-price" style=" color: #eb3b50;
                          float: left;
                          font-size: 1.3333em;
                          font-weight: 600;
                          margin-right: 8px;"><span class="currency-symbol">


                                        @if(isset($catprom->nombre))
                                    </span>{{$catprom->nombre}}</span>
                                @endif

                                <br>
                                <br>


                                <span class="product-price"><span class="currency-symbol">

                                        @if(isset($catprom->catalogo_nombre))
                                    </span>{!!$catprom->catalogo_nombre!!}</span>
                                @endif



                            </div>
                    </article>
                </div>



                @endforeach
                @endif

                @endif









                <!-Obtiene las lugares cercanos al canton->
                    @if( $canton!=null)
                    @if(count($canton)>0 )
                    @foreach ($canton as $caton)



                    <?php
     if(session('locale') == 'en' && $caton->nombre_servicio_eng!=''){
		$tituloIdioma=$caton->nombre_servicio_eng;

		}
	 else{
		$tituloIdioma=$caton->nombre_servicio;

	}

	$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);
?>


                    <div class="iso-item filter-all filter-website ">
                        <article class="post">

                            @if(session('locale') == 'en')
                            <a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$caton->id_usuario_servicio!!}"
                                onclick="$('.categorias1').LoadingOverlay('show');" class="product-image">
                                @else
                                <a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$caton->id_usuario_servicio!!}"
                                    onclick="$('.categorias1').LoadingOverlay('show');" class="product-image">
                                    @endif

                                    <?php
					 		 $file = asset('images/iconMobile/'.$caton->filename);
								if (!file_exists($file)) {
									$file =  url(env('AWS_PUBLIC_URL').'images/icon/'.$caton->filename);
									}
					?>


                                    {{-- <img src="{{ $file}}" alt="{!!$caton->nombre_servicio!!}"> --}}
                                    <img src="{!! url(env('AWS_PUBLIC_URL').'images/icon/'.$caton->filename) !!}">



                                    <span class="image-extras"></span>
                                </a>
                                <div class="portfolio-content">

                                    @if(session('locale') == 'en')
                                    <h5 class="portfolio-title"><a
                                            href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$caton->id_usuario_servicio!!}"
                                            onclick="$('.container').LoadingOverlay('show');">{!!$caton->nombre_servicio_eng!!}</a>
                                    </h5>
                                    @else
                                    <h5 class="portfolio-title"><a
                                            href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$caton->id_usuario_servicio!!}"
                                            onclick="$('.container').LoadingOverlay('show');">{!!$caton->nombre_servicio!!}</a>
                                    </h5>
                                    @endif


                                    <span class="product-price" style=" color: #eb3b50;
                          float: left;
                          font-size: 1.3333em;
                          font-weight: 600;
                          margin-right: 8px;"><span class="currency-symbol">


                                            @if(isset($caton->nombre))
                                        </span>{{$caton->nombre}}</span>
                                    @endif

                                    <br>
                                    <br>


                                    <span class="product-price"><span class="currency-symbol">


                                            @if(isset($caton->catalogo_nombre))
                                        </span>{!!$caton->catalogo_nombre!!}</span>
                                    @endif


                                    <br>
                                    @if(isset($caton->distancia))
                                    <span class="product-price"><span class="currency-symbol">


                                        </span> A <b> {!!$caton->distancia!!} </b> KM</span>

                                    @endif

                                </div>
                        </article>
                    </div>



                    @endforeach
                    @endif
                    @endif








                    <!-Obtiene las eventos cercanos al canton->
                        @if( $evntCanton!=null)
                        @if(count($evntCanton)>0 )
                        @foreach ($evntCanton as $catevc)




                        <?php
     if(session('locale') == 'en' && $catevc->nombre_servicio_eng!=''){
		$tituloIdioma=$catevc->nombre_servicio_eng;

		}
	 else{
		$tituloIdioma=$catevc->nombre_servicio;

	}

	$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);
?>


                        <div class="iso-item filter-all filter-website ">
                            <article class="post">

                                @if(session('locale') == 'en')
                                <a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catevc->id_usuario_servicio!!}"
                                    onclick="$('.categorias1').LoadingOverlay('show');" class="product-image">
                                    @else
                                    <a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catevc->id_usuario_servicio!!}"
                                        onclick="$('.categorias1').LoadingOverlay('show');" class="product-image">

                                        @endif
                                        <?php
					 		 $file = asset('images/iconMobile/'.$catevc->filename);
								if (!file_exists($file)) {
									$file =  url(env('AWS_PUBLIC_URL').'images/icon/'.$catevc->filename);
									}
					?>


                                        {{-- <img src="{{ $file}}" alt="{!!$catevc->nombre_servicio!!}"> --}}
                                        <img src="{!! url(env('AWS_PUBLIC_URL').'images/icon/'.$catevc->filename) !!}">



                                        <span class="image-extras"></span>
                                    </a>
                                    <div class="portfolio-content">

                                        @if(session('locale') == 'en')
                                        <h5 class="portfolio-title"><a
                                                href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catevc->id_usuario_servicio!!}"
                                                onclick="$('.container').LoadingOverlay('show');">{!!$catevc->nombre_evento!!}</a>
                                        </h5>

                                        @else

                                        <h5 class="portfolio-title"><a
                                                href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catevc->id_usuario_servicio!!}"
                                                onclick="$('.container').LoadingOverlay('show');">{!!$catevc->nombre_evento!!}</a>
                                        </h5>
                                        @endif


                                        <span class="product-price" style=" color: #eb3b50;
                          float: left;
                          font-size: 1.3333em;
                          font-weight: 600;
                          margin-right: 8px;"><span class="currency-symbol">

                                                @if(isset($catevc->nombre))
                                            </span>{{$catevc->nombre}}</span>
                                        @endif

                                        <br>
                                        <br>


                                        <span class="product-price"><span class="currency-symbol">

                                                @if(isset($catevc->catalogo_nombre))
                                            </span>{!!$catevc->catalogo_nombre!!}</span>
                                        @endif


                                    </div>
                            </article>
                        </div>



                        @endforeach
                        @endif
                        @endif


                        <!-Obtiene las promociones cercanos al canton->
                            @if( $prmoCanton!=null)
                            @if(count($prmoCanton)>0 )
                            @foreach ($prmoCanton as $catproc)




                            <?php
     if(session('locale') == 'en' && $catproc->nombre_servicio_eng!=''){
		$tituloIdioma=$catproc->nombre_servicio_eng;

		}
	 else{
		$tituloIdioma=$catproc->nombre_servicio;

	}

	$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);
?>



                            <div class="iso-item filter-all filter-website ">
                                <article class="post">
                                    @if(session('locale') == 'en' )
                                    <a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catproc->id_usuario_servicio!!}"
                                        onclick="$('.categorias1').LoadingOverlay('show');" class="product-image">
                                        @else
                                        <a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catproc->id_usuario_servicio!!}"
                                            onclick="$('.categorias1').LoadingOverlay('show');" class="product-image">
                                            @endif

                                            <?php
					 		 $file = asset('images/iconMobile/'.$catproc->filename);
								if (!file_exists($file)) {
									$file =  url(env('AWS_PUBLIC_URL').'images/icon/'.$catproc->filename);
									}
					?>


                                            {{-- <img src="{{ $file}}" alt="{!!$catproc->nombre_servicio!!}"> --}}
                                            <img src="{!! url(env('AWS_PUBLIC_URL').'images/icon/'.$catproc->filename) !!}">


                                            <span class="image-extras"></span>
                                        </a>
                                        <div class="portfolio-content">
                                            @if(session('locale') == 'en' )

                                            <h5 class="portfolio-title"><a
                                                    href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catproc->id_usuario_servicio!!}"
                                                    onclick="$('.container').LoadingOverlay('show');">{!!$catproc->nombre_promocion!!}</a>
                                            </h5>

                                            @else
                                            <h5 class="portfolio-title"><a
                                                    href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catproc->id_usuario_servicio!!}"
                                                    onclick="$('.container').LoadingOverlay('show');">{!!$catproc->nombre_promocion!!}</a>
                                            </h5>

                                            @endif


                                            <span class="product-price" style=" color: #eb3b50;
                          float: left;
                          font-size: 1.3333em;
                          font-weight: 600;
                          margin-right: 8px;"><span class="currency-symbol">

                                                    @if(isset($catproc->nombre))
                                                </span>{{$catproc->nombre}}</span>
                                            @endif

                                            <br>
                                            <br>


                                            <span class="product-price"><span class="currency-symbol">

                                                    @if(isset($catproc->catalogo_nombre))
                                                </span>{!!$catproc->catalogo_nombre!!}</span>
                                            @endif


                                        </div>
                                </article>
                            </div>



                            @endforeach
                            @endif
                            @endif



                            <!-Obtiene las lugares cercanos al provincia->
                                @if( $provincias!=null)
                                @if(count($provincias)>0 )
                                @foreach ($provincias as $catprv)



                                <?php
     if(session('locale') == 'en' && $catprv->nombre_servicio_eng!=''){
		$tituloIdioma=$catprv->nombre_servicio_eng;

		}
	 else{
		$tituloIdioma=$catprv->nombre_servicio;

	}

	$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);
?>


                                <div class="iso-item filter-all filter-website ">
                                    <article class="post">

                                        @if(session('locale') == 'en')
                                        <a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catprv->id_usuario_servicio!!}"
                                            onclick="$('.categorias1').LoadingOverlay('show');" class="product-image">
                                            @else
                                            <a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catprv->id_usuario_servicio!!}"
                                                onclick="$('.categorias1').LoadingOverlay('show');"
                                                class="product-image">
                                                @endif

                                                <?php
					 		 $file = asset('images/iconMobile/'.$catprv->filename);
								if (!file_exists($file)) {
									$file =  url(env('AWS_PUBLIC_URL').'images/icon/'.$catprv->filename);
									}
					?>


                                                {{-- <img src="{{ $file}}" alt="{!!$catprv->nombre_servicio!!}"> --}}
                                                <img src="{!! url(env('AWS_PUBLIC_URL').'images/icon/'.$catprv->filename) !!}">


                                                <span class="image-extras"></span>
                                            </a>
                                            <div class="portfolio-content">

                                                @if(session('locale') == 'en')
                                                <h5 class="portfolio-title"><a
                                                        href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catprv->id_usuario_servicio!!}"
                                                        onclick="$('.container').LoadingOverlay('show');">{!!$catprv->nombre_servicio_eng!!}</a>
                                                </h5>

                                                @else

                                                <h5 class="portfolio-title"><a
                                                        href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catprv->id_usuario_servicio!!}"
                                                        onclick="$('.container').LoadingOverlay('show');">{!!$catprv->nombre_servicio!!}</a>
                                                </h5>

                                                @endif


                                                <span class="product-price" style=" color: #eb3b50;
                          float: left;
                          font-size: 1.3333em;
                          font-weight: 600;
                          margin-right: 8px;"><span class="currency-symbol">

                                                        @if(isset($catprv->nombre))
                                                    </span>{{$catprv->nombre}}</span>
                                                @endif

                                                <br>
                                                <br>


                                                <span class="product-price"><span class="currency-symbol">

                                                        @if(isset($catprv->catalogo_nombre))
                                                    </span>{!!$catprv->catalogo_nombre!!}</span>
                                                @endif

                                                <br>
                                                @if(isset($catprv->distancia))
                                                <span class="product-price"><span class="currency-symbol">


                                                    </span> A <b> {!!$catprv->distancia!!} </b> KM</span>

                                                @endif

                                            </div>
                                    </article>
                                </div>



                                @endforeach
                                @endif
                                @endif







                                <!-Obtiene las eventos cercanos al provincia->
                                    @if( $evntProvincia!=null)
                                    @if(count($evntProvincia)>0 )
                                    @foreach ($evntProvincia as $catep)


                                    <?php
     if(session('locale') == 'en' && $catep->nombre_servicio_eng!=''){
		$tituloIdioma=$catep->nombre_servicio_eng;

		}
	 else{
		$tituloIdioma=$catep->nombre_servicio;

	}

	$nombreCanonical=htmlspecialchars(html_entity_decode(nl2br(e($tituloIdioma))));
                                $nombreCanonical = str_replace(' ', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('/', '-', $nombreCanonical);
                                $nombreCanonical = str_replace('?', '-', $nombreCanonical);
                                $nombreCanonical = str_replace("'", '-', $nombreCanonical);
								$nombreCanonical = str_replace("#", '-', $nombreCanonical);
?>




                                    <div class="iso-item filter-all filter-website ">
                                        <article class="post">

                                            @if(session('locale') == 'en')
                                            <a href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catep->id_usuario_servicio!!}"
                                                onclick="$('.categorias1').LoadingOverlay('show');"
                                                class="product-image">

                                                @else
                                                <a href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catep->id_usuario_servicio!!}"
                                                    onclick="$('.categorias1').LoadingOverlay('show');"
                                                    class="product-image">

                                                    @endif


                                                    <?php
					 		 $file = asset('images/iconMobile/'.$catep->filename);
								if (!file_exists($file)) {
									$file =  url(env('AWS_PUBLIC_URL').'images/icon/'.$catep->filename);
									}
					?>


                                                    {{-- <img src="{{ $file}}" alt="{!!$catep->nombre_servicio!!}"> --}}
                                                    <img src="{!! url(env('AWS_PUBLIC_URL').'images/icon/'.$catep->filename) !!}">


                                                    <span class="image-extras"></span>
                                                </a>
                                                <div class="portfolio-content">

                                                    @if(session('locale') == 'en')
                                                    <h5 class="portfolio-title"><a
                                                            href="{!!asset('/en')!!}/{!!$nombreCanonical!!}/{!!$catep->id_usuario_servicio!!}"
                                                            onclick="$('.container').LoadingOverlay('show');">{!!$catep->nombre_evento!!}</a>
                                                    </h5>

                                                    @else
                                                    <h5 class="portfolio-title"><a
                                                            href="{!!asset('/detalle')!!}/{!!$nombreCanonical!!}/{!!$catep->id_usuario_servicio!!}"
                                                            onclick="$('.container').LoadingOverlay('show');">{!!$catep->nombre_evento!!}</a>
                                                    </h5>
                                                    @endif


                                                    <span class="product-price" style=" color: #eb3b50;
                          float: left;
                          font-size: 1.3333em;
                          font-weight: 600;
                          margin-right: 8px;"><span class="currency-symbol"></span>Eventos</span>

                                                    <br>
                                                    <br>


                                                    <span class="product-price"><span class="currency-symbol">

                                                            @if(isset($catep->catalogo_nombre))
                                                        </span>{!!$catep->catalogo_nombre!!}</span>
                                                    @endif


                                                </div>
                                        </article>
                                    </div>



                                    @endforeach
                                    @endif
                                    @endif


</div>
@endsection