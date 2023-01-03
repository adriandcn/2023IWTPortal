<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd
    http://www.w3.org/1999/xhtml http://www.w3.org/2002/08/xhtml/xhtml1-strict.xsd"
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xhtml="http://www.w3.org/1999/xhtml">


@foreach($usuarioServicioCache as $servicio)
    @if($servicio->nombre_servicio!="" && $servicio->estado_servicio_usuario==1)
    <url>
        @if($servicio->id_catalogo_servicio==11)

                <?php              $nombre=htmlspecialchars(html_entity_decode(nl2br(e($servicio->nombre_servicio))));
                                        $nombre = str_replace(' ', '-', $nombre);
                                        $nombre = str_replace('/', '-', $nombre);
                                        $nombre = str_replace('?', '-', $nombre);
                                        $nombre = str_replace("'", '-', $nombre);
                                    ?>

                <loc>https://iwannatrip.com/es/itinerario/{!!$nombre!!}/{{$servicio->id}}</loc>
        @else

			 <?php              $nombre=htmlspecialchars(html_entity_decode(nl2br(e($servicio->nombre_servicio))));
                                $nombre = str_replace(' ', '-', $nombre);
                                $nombre = str_replace('/', '-', $nombre);
                                $nombre = str_replace('?', '-', $nombre);
                                $nombre = str_replace("'", '-', $nombre);
                                $nombre = str_replace("#", '-', $nombre);

                            ?>

		        <loc>https://iwannatrip.com/es/{!!$nombre!!}/{!!$servicio->id!!}</loc>

		@endif


        <lastmod>{{ gmdate(DateTime::W3C, strtotime($servicio->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>

       <priority>1.0</priority>
    </url>

 @if($servicio->nombre_servicio_eng!="" &&  $servicio->estado_servicio_usuario==1)
    <url>
    @if($servicio->id_catalogo_servicio==11)

            <?php              $nombre=htmlspecialchars(html_entity_decode(nl2br(e($servicio->nombre_servicio_eng))));
                                    $nombre = str_replace(' ', '-', $nombre);
                                    $nombre = str_replace('/', '-', $nombre);
                                    $nombre = str_replace('?', '-', $nombre);
                                    $nombre = str_replace("'", '-', $nombre);


                                ?>

            <loc>https://iwannatrip.com/en/itinerary/{!!$nombre!!}/{{$servicio->id}}</loc>
    @else



			 <?php


                                $nombreCanonicalEng=htmlspecialchars(html_entity_decode(nl2br(e($servicio->nombre_servicio_eng))));
                                $nombreCanonicalEng = str_replace(' ', '-', $nombreCanonicalEng);
                                $nombreCanonicalEng = str_replace('/', '-', $nombreCanonicalEng);
                                $nombreCanonicalEng = str_replace('?', '-', $nombreCanonicalEng);
                                $nombreCanonicalEng = str_replace("'", '-', $nombreCanonicalEng);
                                $nombreCanonicalEng = str_replace("#", '-', $nombreCanonicalEng);
                            ?>


        <loc>https://iwannatrip.com/en/{!!$nombreCanonicalEng!!}/{!!$servicio->id!!}</loc>




    @endif


        <lastmod>{{ gmdate(DateTime::W3C, strtotime($servicio->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
       <priority>1.0</priority>
    </url>
    @endif
@endif
@endforeach
</urlset>

