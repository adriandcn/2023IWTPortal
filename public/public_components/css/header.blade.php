<div class="container">
                    <div class="header-inner">
                        @if(session('device')!='mobile')
                        <div class="branding logss"  onclick="location.href='{{asset('/')}}';" >
                            <h2 class="logo" style="background-image: url({{asset('/img')}}/index-logo.png);">
                                <a href="{!!asset('/')!!}">
                                    <img src="{{asset('/img')}}/index-logo.png" alt="iwanatrip"><span></span>
                                </a>
                            </h2>
                        </div>
                        @else
                            <div class="branding" onclick="location.href='{{asset('/')}}';">
                                    <h1 class="logo" style="background-image: url({{asset('/img')}}/index-logo.png);">
                                    <a href="{!!asset('/')!!}">
                                        <img src="{{asset('/img')}}/index-logo.png" alt="iwanatrip"><span></span>
                                    </a>
                                </h1>
                            </div>
                        @endif
                            
                        <nav id="nav">
                            <ul class="header-top-nav">
                                @if(session('device')!='mobile')
                                <li class="mini-search">
                                    <div id="lang">
                                        <a href="{!! url('language') !!}"><img width="32" height="32" alt="en" src="{!! asset('img/' . (session('locale') == 'es' ? 'english' : 'espanol') . '-flag.png') !!}"></a>
                                    </div>
                                </li>
                                @endif
                                <li class="mini-search">
                                    <a href="#"><i class="fa fa-search has-circle"></i></a>
                                    <div class="main-nav-search-form ">
                                        {!! Form::open(['url' => route('min-search'),  'method' => 'get', 'id'=>'min-search']) !!}
                                            <div class="search-box">
                                                <input type="text" id="s" name="s" value="">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        {!! Form::close() !!}
                                    </div>
                                </li>
                                <li class="visible-mobile">
                                    <a href="#mobile-nav-wrapper" data-toggle="collapse"><i class="fa fa-bars has-circle"></i></a>
                                </li>
                            </ul>
                           <ul id="main-nav" class="hidden-mobile">
                            <!--      <li class="menu-item-has-children">
                                    <a href="{!!asset('/')!!}">{{ trans('publico/labels.label1')}}</a>
                                    <ul class="sub-nav">
                                        <li><a href="{!!asset('/AboutUs')!!}">{{ trans('publico/labels.label78')}}</a></li>
                                        <li><a href="{!!asset('/Mision')!!}">{{ trans('publico/labels.label79')}}</a></li>
                                    </ul>
                                </li>-->
                                <li class="menu-item-has-children ">
                                    <a href="#">{{(session('locale') == 'es' )?"Ecuador":"Ecuador"}}</a>
                                    <ul class="sub-nav">
                                        <li><a href="{!!asset('/region?region=1')!!}">{{ trans('publico/labels.label13')}}</a></li>
                                        <li><a href="{!!asset('/region?region=2')!!}">{{ trans('publico/labels.label14')}}</a></li>
                                        <li><a href="{!!asset('/region?region=3')!!}">{{ trans('publico/labels.label15')}}</a></li>
                                        <li><a href="{!!asset('/region?region=4')!!}">{{ trans('publico/labels.label16')}}</a></li>
                                        <li><a href="{!!asset('/trip/La-ruta-Mochilera-en-Ecuador/1122')!!}">{{ trans('publico/labels.label94')}}</a></li>
                                        <!--<li><a href="{!!asset('/tokenDz$rip/10')!!}">{{ trans('publico/labels.label24')}}</a></li>
                                         <li class="menu-item-has-children">
                                            <a href="#">{{ trans('publico/labels.label81')}}</a>
                                            <ul class="sub-nav">
                                                <li><a href="{!!asset('/getRegionDescipcion/1')!!}"><i class="fa"></i><span>{{ trans('publico/labels.label13')}}</span></a></li>
                                                <li><a href="{!!asset('/getRegionDescipcion/2')!!}"><i class="fa "></i><span>{{ trans('publico/labels.label14')}}</span></a></li>
                                                <li><a href="{!!asset('/getRegionDescipcion/3')!!}"><i class="fa "></i><span>{{ trans('publico/labels.label15')}}</span></a></li>
                                                <li><a href="{!!asset('/getRegionDescipcion/4')!!}"><i class="fa "></i><span>{{ trans('publico/labels.label16')}}</span></a></li>
                                                
                                            </ul>
                                        </li> -->
                                        <!--<li class="menu-item-has-children">
                                            <a href="#">{{ trans('publico/labels.label82')}}</a>
                                            <ul class="sub-nav">
                                                <li><a href="{!!asset('/getRegionDescipcion/1')!!}"><i class="fa "></i><span>{{ trans('publico/labels.label83')}}</span></a></li>
                                                <li><a href="{!!asset('/getRegionDescipcion/2')!!}"><i class="fa "></i><span>{{ trans('publico/labels.label84')}}</span></a></li>
                                                <li><a href="{!!asset('/getRegionDescipcion/3')!!}"><i class="fa"></i><span>{{ trans('publico/labels.label85')}}</span></a></li>
                                                <li><a href="{!!asset('/getRegionDescipcion/4')!!}"><i class="fa "></i><span>{{ trans('publico/labels.label86')}}</span></a></li>
                                                
                                            </ul>
                                        </li>-->
                                        <!-- <li class="menu-item-has-children">
                                            <a href="#">{{ trans('publico/labels.label87')}}</a>
                                            <ul class="sub-nav">
                                                <li><a href="{!!asset('/tokenDz$rip/4')!!}"><i class="fa "></i><span>{{ trans('publico/labels.label88')}}</span></a></li>
                                                <li><a href="{!!asset('/tokenDz$rip/1')!!}"><i class="fa "></i><span>{{ trans('publico/labels.label89')}}</span></a></li>
                                                <li><a href="{!!asset('/tokenDz$rip/2')!!}"><i class="fa "></i><span>{{ trans('publico/labels.label90')}}</span></a></li>
                                                
                                            </ul>
                                        </li> -->
                                       
                                    </ul>
                                </li>
								<li class="menu-item-has-children">
									
                                    <a href="#" onclick="window.location.href = '{!!asset('/Ferry-Galapagos')!!}'">{{(session('locale') == 'es' )?"Ferry Galápagos":"Ferry Galapagos"}}</a>
                                </li>
								
									<li class="menu-item-has-children">
									
                                    <a href="#" onclick="window.location.href = '{!!asset('/DayTrips')!!}'">{{(session('locale') == 'es' )?"Day Trips Ecuador":"Day Trips Ecuador"}}</a>
                                </li>
                              <!--  <li class="menu-item-has-children">
                                     <a href="#" onclick="window.location.href = '{!!asset('/register')!!}'">{{ trans('publico/labels.registro')}}</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" onclick="window.location.href = '{!!asset('/services')!!}'">{{ trans('publico/labels.servicios')}}</a>
                                </li>-->
 
								<li class="menu-item-has-children">
                                    @if(session('statut')!='visitor')
                                        <a href="{!!asset('/myProfileOp')!!}" >{!!session('user_name')!!}</a>
                                        <ul class="sub-nav">
                                            <li>
                                                {!! link_to('auth/logout', trans('front/site.logout')) !!}
                                            </li>       
                                            <li> 
                                                {!! link_to('serviciosres', 'Dashboard') !!}
                                            </li>             
                                        </ul>
                                    @else
                                        <a href="#" onclick="window.open('{!!asset('/login')!!}','_blank')">
                                        {{ trans('publico/labels.label6')}}
                                        </a>
                                    @endif
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <script type="text/javascript">
                    function openSubNav(event,idNav,elem){
                            event.preventDefault();
                            var isVisible = $('#' + idNav).is(':visible');
                            if (!isVisible) {
                                $('#' + idNav).show('slow')
                            }else{
                                $('#' + idNav).hide('slow')
                            }
                    };
                </script>
                <!--Mobile-->
                <div class="mobile-nav-wrapper collapse visible-mobile" id="mobile-nav-wrapper">
                    <ul class="mobile-nav">
                        <li class="menu-item-has-children">
                            <span class="open-subnav"></span>
                            <a onclick="openSubNav(event,'movil-nav-home',this)">{{ trans('publico/labels.label1')}}</a>
                            <ul class="sub-nav" id="movil-nav-home">
                                <li><a href="{!!asset('/AboutUs')!!}">{{ trans('publico/labels.label78')}}</a></li>
                                <li><a href="{!!asset('/Mision')!!}">{{ trans('publico/labels.label79')}}</a></li>
                                <li><a href="{!!asset('/TermsConditions')!!}" >{{ trans('publico/labels.label80')}}</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <span class="open-subnav"></span>
                            <a onclick="openSubNav(event,'movil-nav-trips',this)">
                                {{ trans('publico/labels.label2')}}
                            </a>
                            <ul class="sub-nav" id="movil-nav-trips">
                                <!-- <li class="menu-item-has-children">
                                    <span class="open-subnav"></span>
                                    <a href="#">{{ trans('publico/labels.label81')}}</a>
                                    <ul class="sub-nav">
                                        
                                    </ul>
                                </li> -->

                                <li><a href="{!!asset('/getRegionDescipcion/1')!!}">{{ trans('publico/labels.label13')}}</a></li>
                                <li><a href="{!!asset('/getRegionDescipcion/2')!!}">{{ trans('publico/labels.label14')}}</a></li>
                                <li><a href="{!!asset('/getRegionDescipcion/3')!!}">{{ trans('publico/labels.label15')}}</a></li>
                                <li><a href="{!!asset('/getRegionDescipcion/4')!!}">{{ trans('publico/labels.label16')}}</a></li>
                                <li><a href="{!!asset('/trip/La-ruta-Mochilera-en-Ecuador/1122')!!}">{{ trans('publico/labels.label94')}}</a></li>
                               <!-- <li><a href="{!!asset('/tokenDz$rip/10')!!}">{{ trans('publico/labels.label24')}}</a></li>

                                 <li class="menu-item-has-children">
                                    <span class="open-subnav"></span>
                                    <a href="#">{{ trans('publico/labels.label82')}}</a>
                                    <ul class="sub-nav">
                                        <li><a href="{!!asset('/getRegionDescipcion/1')!!}">{{ trans('publico/labels.label83')}}</a></li>
                                        <li><a href="{!!asset('/getRegionDescipcion/2')!!}">{{ trans('publico/labels.label84')}}</a></li>
                                        <li><a href="{!!asset('/getRegionDescipcion/3')!!}">{{ trans('publico/labels.label85')}}</a></li>
                                        <li><a href="{!!asset('/getRegionDescipcion/4')!!}">{{ trans('publico/labels.label86')}}</a></li>
                                        
                                    </ul>
                                </li> -->
                                <!-- <li class="menu-item-has-children">
                                    <span class="open-subnav"></span>
                                    <a href="#">{{ trans('publico/labels.label87')}}</a>
                                    <ul class="sub-nav">
                                        <li><a href="{!!asset('/tokenDz$rip/4')!!}">{{ trans('publico/labels.label88')}}</a></li>
                                        <li><a href="{!!asset('/tokenDz$rip/1')!!}">{{ trans('publico/labels.label89')}}</a></li>
                                        <li><a href="{!!asset('/tokenDz$rip/2')!!}">{{ trans('publico/labels.label90')}}</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <span class="open-subnav"></span>
                            <a href="#">{{ trans('publico/labels.label95')}}</a>
                            <ul class="sub-nav">
                                <li class="menu-item-has-children">
                                    <span class="open-subnav"></span>
                                    <a href="#">{{ trans('publico/labels.label96')}}</a>
                                    <ul class="sub-nav">
                                        <li><a href="{!!asset('/ServiciosOperadores')!!}">{{ trans('publico/labels.label97')}}</a></li>
                                        <li><a href="{!!asset('/InvitacionOperadores')!!}">{{ trans('publico/labels.label98')}}</a></li>
                                        <li><a href="{!!asset('/steps')!!}">Cómo?</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <span class="open-subnav"></span>
                            <a href="#">{{ trans('publico/labels.label5')}}</a>
                            <ul class="sub-nav">
                                <li class="menu-item-has-children">
                                    <span class="open-subnav"></span>
                                    <a href="#">{{ trans('publico/labels.label99')}}</a>
                                    <ul class="sub-nav">
                                        <li><a href="{!!asset('/contactos')!!}">{{ trans('publico/labels.label99')}}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                          <li class="menu-item-has-children">
                            <span class="open-subnav"></span>
                            <a onclick="openSubNav(event,'movil-nav-contact',this)">{{ trans('publico/labels.label129')}}</a>
                            <ul class="sub-nav" id="'movil-nav-contact'">
                                <li class="menu-item-has-children">
                                    <div id="lang">
                                        <a href="{!! url('language') !!}"><img width="32" height="32" alt="en" src="{!! asset('img/' . (session('locale') == 'es' ? 'english' : 'espanol') . '-flag.png') !!}"></a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            @if(session('statut')!='visitor')
                            <a href="{!!asset('/myProfileOp')!!}">{!!session('user_name')!!}</a>
                            <ul class="sub-nav" id="movil-nav-lang">
                                <li> 
                                    {!! link_to('auth/logout', trans('front/site.logout')) !!}
                                </li>             
                            </ul>
                            @else
                                <a href="#" onclick="window.location.href = '{!!asset('/login')!!}'">
                                    {{ trans('publico/labels.label6')}}
                                </a>
                            @endif  
                        </li>
					    <li class="menu-item-has-children">
                            <span class="open-subnav"></span>
                            <a href="#" onclick="window.location.href = '{!!asset('/tourList')!!}'">{{ trans('publico/labels.booking')}}</a>
                        </li>
                        <li class="menu-item-has-children">
                                    <a href="#" onclick="window.location.href = '{!!asset('/services')!!}'">{{ trans('publico/labels.servicios')}}</a>
                                </li>
                        <li class="menu-item-has-children">
                            <span class="open-subnav"></span>
                            <a href="#" onclick="window.location.href = '{!!asset('/register')!!}'">{{ trans('publico/labels.registro')}}</a>
                        </li>                   
                    </ul>
                </div>
        
         
        