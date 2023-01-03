<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="{{asset('/img')}}/index-logo.png" width="60" height="60" alt="iwanatrip"></p>
					<p>{{ trans('welcome/index.pDescription')}}</p>
					<div class="follow_us">
						<ul>
							<li>Follow us</li>
							<li><a href="https://www.facebook.com/iwanaTrip-1631331070450595/?fref=ts&ref=br_tf"><i class="ti-facebook"></i></a></li>
							<li><a href="https://www.facebook.com/iwanaTrip-1631331070450595/?fref=ts&ref=br_tf"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="https://www.facebook.com/iwanaTrip-1631331070450595/?fref=ts&ref=br_tf"><i class="ti-google"></i></a></li>
							<li><a href="https://www.facebook.com/iwanaTrip-1631331070450595/?fref=ts&ref=br_tf"><i class="ti-pinterest"></i></a></li>
							<li><a href="https://www.facebook.com/iwanaTrip-1631331070450595/?fref=ts&ref=br_tf"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Useful links</h5>
					<ul class="links">
					<li><a href="{!!asset('/')!!}">{{(session('locale') == 'es' )?"Inicio":"Home"}}</a></li>
                                    <li><a href="{!!asset('/AboutUs')!!}">{{(session('locale') == 'es' )?"Nuestra historia":"Our history"}}</a></li>
                                    <li><a href="{!!asset('/Mision')!!}" >{{(session('locale') == 'es' )?"Nuestra misión":"Our mision"}}</a></li>
                                    <li><a href="{!!asset('/faqt')!!}" >{{(session('locale') == 'es' )?"Preguntas frecuentes":"FAQ"}}</a></li>
                                    <li><a href="{!!asset('/contactos')!!}" >{{(session('locale') == 'es' )?"Operadores turísticos":"Tour operators"}}</a></li>
                                    <li><a href="{!!asset('/contactos')!!}" >{{(session('locale') == 'es' )?"Empleo en IWT":"Employee in IWT"}}</a></li>


					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Contact with Us</h5>
					<ul class="contacts">

						<li><a href="mailto:info@iwannatrip.com"><i class="ti-email"></i> info@iwannatrip.com</a></li>
					</ul>

				</div>
			</div>
			<!--/row-->

			<div class="row">
				<div class="col-lg-6">
					<ul id="footer-selector">
						<li>
							<div class="styled-select" id="currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
								</select>
							</div>
						</li>
						<li><img src="{{asset('/MobileDetails/img/cards_all.svg')}}" alt=""></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul id="additional_links">
						<li><a href="{!!asset('/TermsConditions')!!}">Terms and conditions</a></li>
						<li><a href="{!!asset('/TermsConditions')!!}">Privacy</a></li>
						<li><span>© 2022 iWaNaTrip Group</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>