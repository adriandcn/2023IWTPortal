<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach($usuarioServicioCache as $servicio)
@if($servicio->nombre_servicio_eng!="")

    <url>
        @if($servicio->id_catalogo_servicio==11)

		<?php              $nombre=htmlspecialchars(html_entity_decode(nl2br(e($servicio->nombre_servicio_eng))));
                                $nombre = str_replace(' ', '-', $nombre);
                                $nombre = str_replace('/', '-', $nombre);
                                $nombre = str_replace('?', '-', $nombre);
                                $nombre = str_replace("'", '-', $nombre);
                            ?>

        <loc>https://iwannatrip.com/trip/{!!$nombre!!}/{{$servicio->id}}</loc>
        @else
			@if($servicio->nombre_servicio!="")

			 <?php              $nombre=htmlspecialchars(html_entity_decode(nl2br(e($servicio->nombre_servicio_eng))));
                                $nombre = str_replace(' ', '-', $nombre);
                                $nombre = str_replace('/', '-', $nombre);
                                $nombre = str_replace('?', '-', $nombre);
                                $nombre = str_replace("'", '-', $nombre);
                            ?>

		<loc>https://iwannatrip.com/detalle/{!!$nombre!!}/{!!$servicio->id!!}</loc>

		@endif



	  @endif
        <lastmod>{{ gmdate(DateTime::W3C, strtotime($servicio->updated_at)) }}</lastmod>
        <changefreq>daily</changefreq>
       <priority>1.0</priority>
    </url>
@endif
@endforeach
</urlset>

