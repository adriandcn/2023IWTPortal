@section('latestServices')
<ul class="recent-posts">
    @foreach($latestServicesList as $service)
        <li>
            <a href="{!! asset('/detalle')!!}/{{$service->nombre_servicio}}/{{$service->id}}" class="post-author-avatar">
                      </a>
            
<?php
$nombreevpro = str_replace(' ', '-', $service->nombre_servicio);
$nombreevpro = str_replace('/', '-', $nombreevpro);
$nombreevpro = str_replace('?', '', $nombreevpro);
$nombreevpro = str_replace("'", '', $nombreevpro);
?>
            <div class="post-content">
				<a href="{!! asset('/detalle')!!}/{!!htmlspecialchars(html_entity_decode(nl2br(e($nombreevpro))))!!}/{{$service->id}}" class="post-title">
                    {{($service->nombre_servicio != "")?$service->nombre_servicio:''}}
                </a>
                <p class="post-meta">{{Carbon\Carbon::parse($service->created_at)->formatLocalized('%A %d %B %Y')}}</p>
            </div>
        </li>
    @endforeach
</ul>
@endsection