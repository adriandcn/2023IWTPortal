   <div class="heading-box col-md-10 col-lg-8">
                                    @if(session('device')=='mobile')
                                    <h2 class="box-title"><em class="skin-color">iWaNaTrip  </em><em >Travel Advice</em> <em>Ecuador  </em></h2> @else
                                    <h2 class="box-title"><em class="skin-color">iWaNaTrip  </em>Travel Advice <em class="skin-color">Ecuador  </em></h2> @endif
                                </div>
                                <div class="theme-features">
                                    <div class="overflow-hidden">
                                        <div class="row same-height">

                                            @if(session('device')=='mobile')


                                           <div class="col-sm-6 ">
                                            <div class="image-box row">
                                                    <div class="col-sms-4 col-sm-4 image-container fixed">

                                                        <a href="https://iwannatrip.com/trip/Ruta-Mochilera/1122">
                                                            <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/1122imgmaparuta01xl.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="col-sms-8 col-sm-8 details">
                                                        @if(session('locale') == 'es' )
														   <a href="https://iwannatrip.com/trip/Ruta-Mochilera/1122"><h3 class="title">Ruta Mochilera</h3></a>
															<?php $str = "Tu mochila y un presupuesto de 20 dólares por día te llevarán a explorar los diferentes mundos que ofrece Ecuador sin viajar grandes distancias. Descubre los fríos paisajes de los Andes para luego adentrarte a la calurosa puerta de la Amazonía y terminar con una relajante surf y exquisita comida en la playa." ?>
                                                            <p>{!!$str!!}</p>

													@else
															<a href="https://iwannatrip.com/trip/Ruta-Mochilera/1122"><h3 class="title">The route of the backpacker in Ecuador</h3></a>
															<?php $str = "Your backpack and a $20 a day budget will take you to explore the different worlds that Ecuador offers without traveling long distances. Discover the cold landscapes of the Andes mountains and its fascinating culture, then penetrate into the green gate of the Amazonia and end up your trip with relaxing surf and an exquisite meal at the beach." ?>
                                                            <p>{!!$str!!}</p>
													@endif


                                                    </div>
                                                </div>
												  <div id="mapas ">
                                                <div class="col-sm-6">
                                                    <div class="image-box row animated">
                                                        <div class="col-sms-4 col-sm-4 image-container fixed">
                                                            <a href="https://iwannatrip.com/trip/Galapagos/1170">
                                                                <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/1170imgmaparuta03xl.jpg')}}" alt=""></a>
                                                        </div>
                                                        <div class="col-sms-8 col-sm-8 details">
                                                            <?php $str20 = "Galápagos" ?>
                                                                <a href="https://iwannatrip.com/trip/Galapagos/1170">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                @if(session('locale') == 'es' )
																	    <?php $str2 = "Es el paraíso en la Tierra. Imagina la belleza de una isla del Pacífico con aguas cristalinas color turquesa y paisajes alucinantes con la pequeña peculiaridad que están infestada de grandiosos animales por donde vayas. Comúnmente se cree que es muy caro viajar a las islas. Sin embargo, no es del todo cierto." ?>
																		<p>{!!$str2!!}</p>
									                              @else
																		<?php $str = "Galapagos Islands are the Eden garden on Earth. Imagine a beautiful pacific island, with turquoise crystal waters and astonishing volcanic landscapes. Walking among playful sea lions, idle marine iguanas and fearless giant turtles are certainly a dream come true for nature lovers. Undoubtedly,  what it makes these islands so unique is that they are bursting with incredible endemic wildlife. " ?>
										                                <p>{!!$str!!}</p>
																@endif

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="image-box row animated">
                                                        <div class="col-sms-4 col-sm-4 image-container fixed">
                                                            <a href="https://iwannatrip.com/trip/Adrenalina-Amazonia/1171">
                                                                <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/1171touraventura.jpg')}}" alt=""></a>
                                                        </div>
                                                        <div class="col-sms-8 col-sm-8 details">
                                                            @if(session('locale') == 'es' )
                                                            <?php $str20 = "Adrenalína- Amazonía" ?>
                                                                <a href="https://iwannatrip.com/trip/Adrenalina-Amazonia/1171">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "La Amazonía de Ecuador es una de las más biodiversas del planeta. Mientras caminas por senderos, exploras cavernas o simplemente navegas en uno de los cientos de ríos, apreciar la gran cantidad de animales y plantas. De la misma forma, sus espectaculares vistas y cascadas te pondrán en contacto con la naturaleza en su máximo esplendor. " ?>
                                                                    <p>{!!$str2!!}</p>
														@else
																	<?php $str20 = "Adrenaline and biodiversity in the Ecuadorian Amazonia" ?>
                                                                <a href="https://iwannatrip.com/trip/Adrenalina-Amazonia/1171">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "The Ecuadorian Amazonia is one of the most biodiverse areas in the planet. It´s a total luxury to walk its paths, explore its caverns or simply sail one of the hundreds of rivers that flow through the jungle. You will also be able to connect with the spectacular flora and fauna that inhabits this unique place. Rest assure that it´s an experience that will remain in your memory for a life time." ?>
                                                                    <p>{!!$str2!!}</p>
														@endif


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="image-box row animated">
                                                        <div class="col-sms-4 col-sm-4 image-container fixed">
                                                            <a href="https://iwannatrip.com/trip/Sol-Arena-Ecuador/1172">
                                                                <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/1172imgmaparuta04xl.jpg')}}" alt=""></a>
                                                        </div>
                                                        <div class="col-sms-8 col-sm-8 details">
                                                            @if(session('locale') == 'es' )
                                                            <?php $str20 = "Sol y Surf Ecuador" ?>
                                                                <a href="https://iwannatrip.com/trip/Sol-Arena-Ecuador/1172">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "Las playas Ecuatorianas ofrecen una gran diversidad de sitios para tomar el sol, surfear, ir de fiesta, hermosos paisajes, la sabrosa comida marinera, pesca o simplemente relajarse y disfrutar del clima de playa. Lo característico del agua es que tiene una elevada temperatura entre 25 a 27 grados centígrados durante todo el año, lo que lo hace perfecto para un baño o surfear.  " ?>
                                                                    <p>{!!$str2!!}</p>
																	@else

																	  <?php $str20 = "Surf and Sun in Ecuador" ?>
                                                                <a href="https://iwannatrip.com/trip/Sol-Arena-Ecuador/1172">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "The Ecuadorian coastline offer a wide variety of places to sunbathing, surfing, fishing, parting and savoring a tasty food surrounded by the most beautiful landscapes. Blessed with a pleasant beach climate and a water temperature of 25ºC to 27ºC all year long, Ecuador is a sensational destination for those ones looking for a surf and beach trip on a low budget. " ?>
                                                                    <p>{!!$str2!!}</p>


															@endif

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="image-box row animated">
                                                        <div class="col-sms-4 col-sm-4 image-container fixed">
                                                            <a href="https://iwannatrip.com/trip/Lo-Mejor-Del-Ecuador/1173">
                                                                <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/1173imgmaparuta05xl.jpg')}}" alt=""></a>
                                                        </div>
                                                        <div class="col-sms-8 col-sm-8 details">
                                                            @if(session('locale') == 'es' )
                                                            <?php $str20 = "Lo mejor del Ecuador" ?>
                                                                <a href="https://iwannatrip.com/trip/Lo-Mejor-Del-Ecuador/1173">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "Lo mejor de Ecuador se encuentra en probar un poquito de cada región. Siente el frío los espectaculares paisajes de las montañas. Vive la naturaleza y la biodiversidad al máximo en la Amazonía. Relájate y aprende surf en las calurosas playas para finalmente ver la magnificencia del paraíso en la Tierra: Las Islas Galápagos.  " ?>
                                                                    <p>{!!$str2!!}</p>
																	@else
																	  <?php $str20 = "The best of Ecuador" ?>
                                                                <a href="https://iwannatrip.com/trip/Lo-Mejor-Del-Ecuador/1173">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "Making the most of your visit to Ecuador is about savoring the best of each region. Feel the cold landscapes of the Andes mountains. Live the nature and be fascinated by the Amazonia’s biodiversity. Relax or learn surf in the hot beaches of the West Coast. Finally, witness the beauty of the Eden garden on Hearth: The Galapagos Islands. All this is possible to happen in Ecuador, an unknown yet incredible small corner of the world." ?>
                                                                    <p>{!!$str2!!}</p>

																	@endif


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @else



                                            <div class="col-sm-6">
                                                <div class="image-box row ">
                                                    <div class="col-sms-4 col-sm-4 image-container fixed">

                                                        <a href="https://iwannatrip.com/trip/Ruta-Mochilera/1122">
                                                            <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/1122imgmaparuta01xl.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="col-sms-8 col-sm-8 details">
                                                          @if(session('locale') == 'es' )
														   <a href="https://iwannatrip.com/trip/Ruta-Mochilera/1122"><h3 class="title">Ruta Mochilera</h3></a>
															<?php $str = "Tu mochila y un presupuesto de 20 dólares por día te llevarán a explorar los diferentes mundos que ofrece Ecuador sin viajar grandes distancias. Descubre los fríos paisajes de los Andes para luego adentrarte a la calurosa puerta de la Amazonía y terminar con una relajante surf y exquisita comida en la playa." ?>
                                                            <p>{!!$str!!}</p>

													@else
															<a href="https://iwannatrip.com/trip/Ruta-Mochilera/1122"><h3 class="title">The route of the backpacker in Ecuador</h3></a>
															<?php $str = "Your backpack and a $20 a day budget will take you to explore the different worlds that Ecuador offers without traveling long distances. Discover the cold landscapes of the Andes mountains and its fascinating culture, then penetrate into the green gate of the Amazonia and end up your trip with relaxing surf and an exquisite meal at the beach." ?>
                                                            <p>{!!$str!!}</p>
													@endif

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="image-box row ">
                                                    <div class="col-sms-4 col-sm-4 image-container fixed">
                                                        <a href="https://iwannatrip.com/trip/Galapagos/1170">
                                                            <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/1170imgmaparuta03xl.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="col-sms-8 col-sm-8 details">
                                                        <?php $str20 = "Galápagos" ?>
                                                            <a href="https://iwannatrip.com/trip/Galapagos/1170">
                                                                <h3 class="title">{!!$str20!!}</h3></a>
                                                            @if(session('locale') == 'es' )
																	    <?php $str2 = "Es el paraíso en la Tierra. Imagina la belleza de una isla del Pacífico con aguas cristalinas color turquesa y paisajes alucinantes con la pequeña peculiaridad que están infestada de grandiosos animales por donde vayas. Comúnmente se cree que es muy caro viajar a las islas. Sin embargo, no es del todo cierto." ?>
																		<p>{!!$str2!!}</p>
									                              @else
																		<?php $str = "Galapagos Islands are the Eden garden on Earth. Imagine a beautiful pacific island, with turquoise crystal waters and astonishing volcanic landscapes. Walking among playful sea lions, idle marine iguanas and fearless giant turtles are certainly a dream come true for nature lovers. Undoubtedly,  what it makes these islands so unique is that they are bursting with incredible endemic wildlife. " ?>
										                                <p>{!!$str!!}</p>
																@endif

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="image-box row ">
                                                    <div class="col-sms-4 col-sm-4 image-container fixed">
                                                        <a href="https://iwannatrip.com/trip/Adrenalina-Amazonia/1171">
                                                            <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/1171touraventura.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="col-sms-8 col-sm-8 details">
                                                        @if(session('locale') == 'es' )
                                                            <?php $str20 = "Adrenalína- Amazonía" ?>
                                                                <a href="https://iwannatrip.com/trip/Adrenalina-Amazonia/1171">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "La Amazonía de Ecuador es una de las más biodiversas del planeta. Mientras caminas por senderos, exploras cavernas o simplemente navegas en uno de los cientos de ríos, apreciar la gran cantidad de animales y plantas. De la misma forma, sus espectaculares vistas y cascadas te pondrán en contacto con la naturaleza en su máximo esplendor. " ?>
                                                                    <p>{!!$str2!!}</p>
														@else
																	<?php $str20 = "Adrenaline and biodiversity in the Ecuadorian Amazonia" ?>
                                                                <a href="https://iwannatrip.com/trip/Adrenalina-Amazonia/1171">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "The Ecuadorian Amazonia is one of the most biodiverse areas in the planet. It´s a total luxury to walk its paths, explore its caverns or simply sail one of the hundreds of rivers that flow through the jungle. You will also be able to connect with the spectacular flora and fauna that inhabits this unique place. Rest assure that it´s an experience that will remain in your memory for a life time." ?>
                                                                    <p>{!!$str2!!}</p>
														@endif

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="image-box row ">
                                                    <div class="col-sms-4 col-sm-4 image-container fixed">
                                                        <a href="https://iwannatrip.com/trip/Sol-Arena-Ecuador/1172">
                                                            <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/1172imgmaparuta04xl.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="col-sms-8 col-sm-8 details">

															@if(session('locale') == 'es' )
                                                            <?php $str20 = "Sol y Surf Ecuador" ?>
                                                                <a href="https://iwannatrip.com/trip/Sol-Arena-Ecuador/1172">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "Las playas Ecuatorianas ofrecen una gran diversidad de sitios para tomar el sol, surfear, ir de fiesta, hermosos paisajes, la sabrosa comida marinera, pesca o simplemente relajarse y disfrutar del clima de playa. Lo característico del agua es que tiene una elevada temperatura entre 25 a 27 grados centígrados durante todo el año, lo que lo hace perfecto para un baño o surfear.  " ?>
                                                                    <p>{!!$str2!!}</p>
																	@else

																	  <?php $str20 = "Surf and Sun in Ecuador" ?>
                                                                <a href="https://iwannatrip.com/trip/Sol-Arena-Ecuador/1172">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "The Ecuadorian coastline offer a wide variety of places to sunbathing, surfing, fishing, parting and savoring a tasty food surrounded by the most beautiful landscapes. Blessed with a pleasant beach climate and a water temperature of 25ºC to 27ºC all year long, Ecuador is a sensational destination for those ones looking for a surf and beach trip on a low budget. " ?>
                                                                    <p>{!!$str2!!}</p>


															@endif

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="image-box row ">
                                                    <div class="col-sms-4 col-sm-4 image-container fixed">
                                                        <a href="https://iwannatrip.com/trip/Lo-Mejor-Del-Ecuador/1173">
                                                            <img src="{{ url(env('AWS_PUBLIC_URL').'images/icon/1173imgmaparuta05xl.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="col-sms-8 col-sm-8 details">
                                                        @if(session('locale') == 'es' )
                                                            <?php $str20 = "Lo mejor del Ecuador" ?>
                                                                <a href="https://iwannatrip.com/trip/Lo-Mejor-Del-Ecuador/1173">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "Lo mejor de Ecuador se encuentra en probar un poquito de cada región. Siente el frío los espectaculares paisajes de las montañas. Vive la naturaleza y la biodiversidad al máximo en la Amazonía. Relájate y aprende surf en las calurosas playas para finalmente ver la magnificencia del paraíso en la Tierra: Las Islas Galápagos.  " ?>
                                                                    <p>{!!$str2!!}</p>
																	@else
																	  <?php $str20 = "The best of Ecuador" ?>
                                                                <a href="https://iwannatrip.com/trip/Lo-Mejor-Del-Ecuador/1173">
                                                                    <h3 class="title">{!!$str20!!}</h3></a>
                                                                <?php $str2 = "Making the most of your visit to Ecuador is about savoring the best of each region. Feel the cold landscapes of the Andes mountains. Live the nature and be fascinated by the Amazonia’s biodiversity. Relax or learn surf in the hot beaches of the West Coast. Finally, witness the beauty of the Eden garden on Hearth: The Galapagos Islands. All this is possible to happen in Ecuador, an unknown yet incredible small corner of the world." ?>
                                                                    <p>{!!$str2!!}</p>

																	@endif

                                                    </div>
                                                </div>
                                            </div>

                                            @endif

                                        </div>
                                    </div>
                                </div>