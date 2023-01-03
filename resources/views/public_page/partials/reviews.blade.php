@section('review')
<link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('/public_components/components/owl-carousel/owl.transitions.css')}}" media="screen" />
<link rel="stylesheet" href="{{ asset('public_components/css/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('public_components/components/tooltipster-master/dist/css/tooltipster.bundle.min.css')}}">
<link rel="stylesheet" href="{{ asset('public_components/components/tooltipster-master/dist/css/tooltipster-sideTip-light.min.css')}}">
<script type="text/javascript" src="{{ asset('/public_components/js/jquery-2.1.3.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/public_components/components/OwlCarousel2/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/public_components/js/bootstrap.min.js')}}"></script>
<!-- Tooltips -->
<script type="text/javascript" src="{{ asset('public_components/components/tooltipster-master/dist/js/tooltipster.bundle.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.tooltip').tooltipster({
            theme: 'tooltipster-light'
        });
    });
</script>
<style type="text/css">
    .tooltip_templates { display: none; }
    .tooltip{
        z-index: 1030;
        visibility: visible;
        font-size: 13px;
        line-height: 2.4;
        opacity: 1;
        filter: alpha(opacity=0);
        position: absolute;
        top: -12px;
        height: 28px;
        width: 100%;
    }
    .progressContent {
        width: 200px;
        background-color: #d4d4d4;
        margin-bottom: 5px;
    }
    .barProg {
        width: 10%;
        height: 21px;
        background-color: #ff6600;
    }
</style>
<style>
/***********************************/
/*        AVATAR DEL NOMBRE        */
/**********************************/
.avatar-me-wrapper {
  min-height: 48px;
  overflow: hidden;
  padding-left: 58px;
  position: relative;
}

.avatar-me {
/*  background-color: #e74c3c;*/
  background-color: #ff6600;
  color: #fff;
  display: block;
  height: 48px;
  left: 0;
  overflow: hidden;
  padding: 0 10px;
  position: absolute;
  text-align: center;
  text-overflow: ellipsis;
  text-transform: uppercase;
  top: 0;
  white-space: nowrap;
  width: 48px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.user-name {
    color:transparent;
}

.avatar-me {
  line-height: 48px;
  font-size: 18px;
  font-weight: 300;
  padding-top:10px;
}
</style>
@if(count($reviews)==0)
<script>
    $('.moreReviews').css("display", "none");
</script>
@endif


@foreach($reviews as $rev)
    <?php
        $nombre = $rev->nombre_reviewer;
        $email = $rev->email_reviewer;
        $idReview = $rev->id;
        $imageArray = [];
        $imageArray = $rev->images;
    ?>

    <li class="comment">
        <div class="author-img">
            <div class="avatar-me-wrapper">
                <?php $nameSplit = explode(' ', $nombre); ?>
                <span class="avatar-me">{!! (count($nameSplit) > 1) ? $nameSplit[0][0] . $nameSplit[1][0] : $nameSplit[0][0]; !!}</span>
                <span class="user-name">{!!$nombre!!}</span>
            </div>
        </div>
        <div class="comment-content">
            @if($nombre!="")
            <h5 class="comment-author-name"><a style="cursor: pointer">{!!$nombre!!}</a></h5>
            @elseif($email)
            <h5 class="comment-author-name"><a style="cursor: pointer">{!!$email!!}</a></h5>
            @endif
            <?php $date = date_create($rev->created_at); ?>
            <span class="comment-date">{!!date_format($date, 'j F ')!!}</span>
            <div class="tooltip_templates">
                <span id="tooltip_content_{{$idReview}}">
                    <?php $Resumencalificacion = "";?>
                    @foreach ($rev->resumen_views as $resumen)
                    <div>
                        <?php
                            if (session('locale') == 'es') {
                                $nameReview = $resumen->tipo_review;
                            } else {
                                $nameReview = $resumen->tipo_review_eng;
                            }
                        ?>
                        {{$nameReview}} : {{$resumen->calificacion}}
                        <div class="progressContent">
                          <div class="barProg" style="width: {{intval($resumen->calificacion)*100/5}}%"></div>
                        </div>
                    </div>
                    @endforeach
                </span>
            </div>
            <span style="cursor: pointer" data-toggle="tooltip" class="star-rating">
                <span data-stars="{!!($rev->total)/count($rev->resumen_views)!!}"></span>
                <div class="tooltip" data-tooltip-content="#tooltip_content_{{$idReview}}"></div>
            </span>
            <div class="owl-carousel review__carousel" style="max-width: 500px;" data-items="4">
                    @foreach ($imageArray as $imageReview)
                        <div style="background: url('{{ asset('/images/icon/') . '/' . $imageReview->filename}}'); width: 123px;
                    height: 100px;
                    background-position: center;
                    background-size: 110%;
                    cursor: pointer;" onclick="showFullImage('{{ asset("/images/fullsize/")}}/{{$imageReview->filename}}')"></div>
                    @endforeach
            </div>
            <div class="description">
                <p>{!!$rev->text_review!!}</p>
            </div>
        </div>
    </li>

@endforeach

<script>

    $('.btn-write-review').on('click', function () {
        $('.var_comment').css("display", "none");
    });

    $(".btn-back-reviews").click(function () {
        $('.var_comment').css("display", "block");

    });
    // star rating
    $(".star-rating").each(function () {
        var stars = $(this).children("span").data("stars");
        if (stars) {
            $(this).children("span").css("width", stars * 2 * 10 + "%");
        }
    });

</script>
<script type="text/javascript">
    $(function(){
        $(".review__carousel").each(function(){
            $(this).owlCarousel({
                loop:false,
                margin:10,
                nav:false,
                autoWidth:true,
                items:3
            });
          });
        // $(".fullImageReview").each(function(){
        //     $(this).click(function(){
        //         console.log('show modal');
        //     })
        // });
    });
    function showFullImage (url) {
        $("#imgFull").css("background", 'url(' + url + ')');
        $("#imgFull").css("background-repeat", 'no-repeat');
        $("#imgFull").css("background-size", 'contain');
        $("#imgFull").css("height", '-webkit-fill-available');
        $("#imgFull").css("background-position", 'center');
        $(".modal-dialog").css("width", '100%');
        $('#form-img-full').modal('show');
    }
</script>
@endsection