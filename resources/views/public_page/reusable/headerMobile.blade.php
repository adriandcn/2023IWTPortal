<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="{{asset('/')}}">
				<img src="{{asset('/img')}}/index-logo.png" style="height:60px;!important" width="150" height="41" alt="" class="logo_normal">
				<img src="{{asset('/img')}}/index-logo.png" style="height:60px;!important" width="150" height="41" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
            <!--<li><a href="cart-1.html" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li>
        <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
        -->
            <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
            <li class="mini-search">
                                    <div id="lang">
                                        <a href="{!! url('language') !!}"><img width="32" height="32" alt="en" src="{!! asset('img/' . (session('locale') == 'es' ? 'english' : 'espanol') . '-flag.png') !!}"></a>
                                    </div>
                                </li>
			
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
			
			<li>
                                  
								
									  {!! Form::open(['url' => route('min-search'),  'method' => 'get', 'id'=>'min-search']) !!}
									

										<div class="input-group">
										<input class ="form-control" style="width: 300px;
												padding: .45rem; !important;" type="text" id="s" name="s" value="" placeholder=" {{(session('locale') == 'es' )?'Buscar por...':'Search for...'}}">
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">
												<i class="fa fa-search"></i>
												</button>
											</span>
											</div>
									  {!! Form::close() !!}
								 
							  </li>
				<li><span><a href="#0">Ecuador</a></span>
					<ul>
				
										<li><a href="{!!asset('/region?region=1')!!}">{{ trans('publico/labels.label13')}}</a></li>
                                        <li><a href="{!!asset('/region?region=2')!!}">{{ trans('publico/labels.label14')}}</a></li>
                                        <li><a href="{!!asset('/region?region=3')!!}">{{ trans('publico/labels.label15')}}</a></li>
                                        <li><a href="{!!asset('/region?region=4')!!}">{{ trans('publico/labels.label16')}}</a></li>
										
										
					</ul>
				</li>


			
								
								<li><span><a href="#0">{{(session('locale') == 'es' )?"Ferry Galápagos":"Ferry Galapagos"}}</a></span></li>
				<li><span><a href="#0">{{(session('locale') == 'es' )?"Tips de viaje":"Travel advice"}}</a></span>
					<ul>
						
						<li><a href="{!!asset('/es/itinerario/La-ruta-Mochilera-en-Ecuador/1122')!!}">Ruta Mochilera</a></li>
						<li><a href="{!!asset('/es/itinerario/Lo-mejor-de-Ecuador/1173')!!}">Lo mejor del Ecuador</a></li>
						<li><a href="{!!asset('/es/itinerario/Galápagos/1170')!!}">Galápagos</a></li>
						<li><a href="{!!asset('/es/itinerario/Sol y Surf en Ecuador/1172')!!}">Sol & Surf</a></li>
						<li><a href="{!!asset('/es/itinerario/Adrenalina y biodiversidad en la Amazonía Ecuatoriana/1171')!!}">Adrenalina & Biodiversidad</a></li>

						
				
					</ul>
				</li>
			
				
				<li><span><a href="#0">{{(session('locale') == 'es' )?"Aventuras":"Adventures"}}</a></span>
					<ul>
						
                    	<li> <a href="{!!asset('/DayTripsVolcanes')!!}" >{{(session('locale') == 'es' )?"Visita los Volcanes":"Highlands deals"}}</a></li>
                    	<li>  <a href="{!!asset('/DayTrips')!!}">{{(session('locale') == 'es' )?"Ofertas de viaje":"Trip deals"}}</a></li>
						
					</ul>
				</li>

				<li><span><a href="#0">{{(session('locale') == 'es' )?"Página":"Page"}} </a></span>
					<ul>
					<li><a href="{!!asset('/services')!!}">{{ trans('publico/labels.label97')}}</a></li>
                                        <li><a href="{!!asset('/InvitacionOperadores')!!}">{{ trans('publico/labels.label98')}}</a></li>
                                        <li><a href="{!!asset('/steps')!!}">Cómo?</a></li>
					</ul>
				</li>
				
				
			</ul>
		</nav>


