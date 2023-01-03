@section('galleryList')
      <style>
      /* clearfix because of floats */
      .gallery-container:before,
      .gallery-container:after {
        content: "";
        display: table;
      }
      .gallery-container:after {
        clear: both;
      }
      .item {
        float: left;
        margin-bottom: 15px;
        transition: all .2s ease-in-out;
      }
      .item img {
        max-width: 100%;
        max-height: 100%;
        vertical-align: bottom;
      }
      .first-item {
        clear: both;
      }
      /* remove margin bottom on last row */
      .last-row, .last-row ~ .item {
        margin-bottom: 0;
      }
      .item:hover {
        transform: scale(1.5);
      }
    </style>
      <div class="gallery-container">
        @if(isset($images))
          @foreach($images as $image)
            <div class="item">
              <div>
                <button class="btn style1" type="button" style="position: absolute; padding: 0 15px;" onclick="removeImage('{{ $image->id_gallery }}')">
                    <i class="fa fa-remove"></i>
                </button>
                <img src="{{$image->icon_path}}" width="220" height="200" style="cursor: pointer;" onclick="setFullImage('{{ $image->icon_path }}')" data-toggle="modal" data-target="#form-img-full"/>
                <p>
                  {{ 
                    ($image->descripcion != null)?str_limit($image->descripcion,60):'' 
                  }}
                </p>
              </div>
            </div>
          @endforeach
        @endif
      </div>
      <script type="text/javascript" src="{{ asset('public_components/js/jquery-2.1.3.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('/public_components/components/rowGrid/jquery.row-grid.js')}}"></script>
      <script type="text/javascript">
        $(".gallery-container").rowGrid({itemSelector: ".item", minMargin: 10, maxMargin: 25, firstItemClass: "first-item", lastItemClass: "last-item"});
      </script>
      <script type="text/javascript">
         var removeImage = function($id){
            var url = '{!! asset("/removeGallery") !!}';
            $.ajax({
                type: 'GET',
                url: url,
                data: {id_gallery: $id },
                success: function(data) {
                    getGallery();
                },
                error: function(e) {
                    alert('No se pudo eliminar la imagen');
                }
            });
        }
      </script>
@endsection