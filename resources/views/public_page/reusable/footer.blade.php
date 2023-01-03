         <div class="footer-wrapper">
                    <div class="container">
                        <div class="row add-clearfix same-height">
                            <div class="col-sm-6 col-md-3">
                                <h5 class="section-title box">General</h5>
                                <!--<div id="latestOperatosHtml"></div>-->
                                <ul class="arrow useful-links">
                                    <li><a href="{!!asset('/')!!}">{{(session('locale') == 'es' )?"Inicio":"Home"}}</a></li>
                                    <li><a href="{!!asset('/AboutUs')!!}">{{(session('locale') == 'es' )?"Nuestra historia":"Our history"}}</a></li>
                                    <li><a href="{!!asset('/Mision')!!}" >{{(session('locale') == 'es' )?"Nuestra misión":"Our mision"}}</a></li>
                                    <li><a href="{!!asset('/faqt')!!}" >{{(session('locale') == 'es' )?"Preguntas frecuentes":"FAQ"}}</a></li>
                                    <li><a href="{!!asset('/contactos')!!}" >{{(session('locale') == 'es' )?"Operadores turísticos":"Tour operators"}}</a></li>
                                    <li><a href="{!!asset('/contactos')!!}" >{{(session('locale') == 'es' )?"Empleo en IWT":"Employee in IWT"}}</a></li>

                                </ul>

                            </div>
                            <div class="col-sm-6 col-md-3">
                                <h5 class="section-title box">{{(session('locale') == 'es' )?"Etiquetas recomendadas":"Popular Tags"}}</h5>
                                <div class="tags">
                                    <a href="https://iwannatrip.com/Search?s=GalApagos" class="tag">{{(session('locale') == 'es' )?"Galápagos":"Galapagos"}}</a>
                                    <a href="https://iwannatrip.com/Search?s=Centro HistOrico" class="tag">{{(session('locale') == 'es' )?"Centro Histórico":"Old Town"}}</a>
                                    <a href="https://iwannatrip.com/Search?s=BaNos" class="tag">Baños</a>
                                    <a href="https://iwannatrip.com/Search?s=Quilotoa" class="tag">Quilotoa</a>
                                    <a href="https://iwannatrip.com/Search?s=Montañita" class="tag">Montañita</a>
                                    <a href="https://iwannatrip.com/Search?s=Cuenca" class="tag">Cuenca</a>
                                    <a href="https://iwannatrip.com/Search?s=Otavalo" class="tag">Otavalo</a>
                                    <a href="https://iwannatrip.com/Search?s=Mindo" class="tag">Mindo</a>
                                    <a href="https://iwannatrip.com/Search?s=Frailes" class="tag">Frailes</a>
                                    <a href="https://iwannatrip.com/Search?s=Parque Nacional Cajas" class="tag">{{(session('locale') == 'es' )?"Parque Nacional Cajas":"Cajas National Park"}}</a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <h5 class="section-title box">{{(session('locale') == 'es' )?"Enlaces útiles":"Useful Links"}}</h5>
                                <ul class="arrow useful-links">
                                    <li><a href="http://www.turismo.gob.ec/" target="_blank">Ministerio de Turismo</a></li>
                                    <li><a href="http://www.ministeriointerior.gob.ec/" target="_blank">Ministerio del Interior</a></li>
                                    <li><a href="http://www.policiaecuador.gob.ec/" target="_blank">Policía Nacional</a></li>
                                    <li><a href="http://www.ecu911.gob.ec/" target="_blank">Seguridad ECU911</a></li>
                                    <li><a href="http://www.cruzroja.org.ec/" target="_blank">Cruz Roja</a></li>

                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <h5 class="section-title box">{{ trans('publico/labels.label17')}}</h5>
                                <p>{{ trans('welcome/index.pDescription')}}</p>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/iwanaTrip-1631331070450595/?fref=ts&ref=br_tf" class="social-icon"><i class="fa fa-twitter has-circle" data-toggle="tooltip" data-placement="top" title="Twitter"></i></a>
                                    <a href="https://www.facebook.com/iwanaTrip-1631331070450595/?fref=ts&ref=br_tf" class="social-icon"><i class="fa fa-facebook has-circle" data-toggle="tooltip" data-placement="top" title="Facebook"></i></a>
                                    <a href="https://plus.google.com/u/0/102986765977333228915" class="social-icon"><i class="fa fa-google-plus has-circle" data-toggle="tooltip" data-placement="top" title="GooglePlus"></i></a>
                                    <a href="https://www.linkedin.com/in/iwanatrip-group-a537b4130/" class="social-icon"><i class="fa fa-linkedin has-circle" data-toggle="tooltip" data-placement="top" title="LinkedIn"></i></a>
                                    <a href="https://www.facebook.com/iwanaTrip-1631331070450595/?fref=ts&ref=br_tf" class="social-icon"><i class="fa fa-skype has-circle" data-toggle="tooltip" data-placement="top" title="Skype"></i></a>
                                    <a href="https://www.facebook.com/iwanaTrip-1631331070450595/?fref=ts&ref=br_tf" class="social-icon"><i class="fa fa-dribbble has-circle" data-toggle="tooltip" data-placement="top" title="Dribbble"></i></a>
                                    <a href="https://www.facebook.com/iwanaTrip-1631331070450595/?fref=ts&ref=br_tf" class="social-icon"><i class="fa fa-tumblr has-circle" data-toggle="tooltip" data-placement="top" title="Tumblr"></i></a>
                                </div>


                                    <a class="btn btn-sm style4" href="{!!asset('/contactos')!!}">{{ trans('publico/labels.label5')}}</a>


                                <a href="#" class="back-to-top"><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-area">
                    <div class="container">
                        <div class="copyright-area">
                            <nav class="secondary-menu">
                                <ul class="nav nav-pills">
                                    <li><a href="#" onclick="window.location.href = '{!!asset('/')!!}'">{{ trans('publico/labels.label1')}}</a></li>
                                    <li>

                                    @if(session('statut')!='visitor')
                            <a href="{!!asset('/myProfileOp')!!}" >{!!session('user_name')!!}</a>


                            @else
                                    <a href="#" onclick="window.open('{!!asset('/login')!!}','_blank')">{{ trans('publico/labels.label6')}}</a>
                                    @endif



                                </li>

                                                <li><a href="{!!asset('/ServiciosOperadores')!!}">{{ trans('publico/labels.label97')}}</a></li>
                                                <li><a href="{!!asset('/InvitacionOperadores')!!}">{{ trans('publico/labels.label98')}}</a></li>
                                                <li><a href="{!!asset('/steps')!!}">Cómo?</a></li>
                                                <li><a href="{!!asset('/TermsConditions')!!}" >{{ trans('publico/labels.label80')}}</a></li>

                                <li>{!! link_to('auth/logout', trans('front/site.logout')) !!}</li>

                                </ul>
                            </nav>
                            <div class="copyright">
                                &copy; 2022 iWaNatrip <em>by</em> <a href="https://iwannatrip.com"> iWaNaTrip Group</a>
                            </div>
                        </div>
                    </div>
                </div>
