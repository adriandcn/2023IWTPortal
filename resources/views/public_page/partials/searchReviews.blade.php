@section('contentReviews')

     <!-- Main Style -->
     <link id="main-style" rel="stylesheet" href="{{asset('public_components/css/style.css')}}" >

    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
    <style>
    .checked {
        color: orange;
    }
    </style>     

    @if(($reviewsAgrupamientos!=null))
        @if(!empty($reviewsAgrupamientos))
        <div class="section-info" id="target-reviews">
            <div class="tab-container">
                <ul class="tabs">
                    <li class="active"><a href="#tab3-3" data-toggle="tab">Reviews</a></li>
                </ul>
                <div id="tab3-3" class="tab-content panel entry-content in active">
                    <div class="tab-pane">
                        <div id="comments">
                            <?php $contadorReviews = count($reviewsAgrupamientos);?>
                            <h3> <?php echo $contadorReviews; ?> Reviews {!!$nombre_agrupamiento!!} </h3>
                            @foreach($reviewsAgrupamientos as $reviews)
                                <ol class="commentlist">
                                    <li class="comment">
                                        <div class="comment-content" style="width: 100%;margin-left: 0px;">
                                            <div class="tooltip_templates">
                                                <span id="tooltip_content_{{$reviews->id}}">
                                                    <?php $Resumencalificacion = "";?>
                                                    @foreach ($reviews->resumen_views as $resumen)
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
                                            <h5 class="comment-author-name"><a href="#">{!! $reviews->nombre_reviewer !!}</a></h5> <br>
                                            {{-- <span style="cursor: pointer" data-toggle="tooltip" class="star-rating">
                                                <span data-stars="{!!($reviews->total)/count($reviews->resumen_views)!!}"></span>
                                                <div class="tooltip" data-tooltip-content="#tooltip_content_{{$reviews->id}}"></div>
                                            </span>                         --}}

                                            <?php 
                                                $rating = ($reviews->total)/count($reviews->resumen_views);
                                            ?>
                                            @if ($rating >= 1 && $rating < 2)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star" style="color:#d4dde5;"></span>
                                                <span class="fa fa-star" style="color:#d4dde5;"></span>
                                                <span class="fa fa-star" style="color:#d4dde5;"></span>
                                                <span class="fa fa-star" style="color:#d4dde5;"></span>
                                            @elseif ($rating >= 2 && $rating < 3)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star" style="color:#d4dde5;"></span>
                                                <span class="fa fa-star" style="color:#d4dde5;"></span>
                                                <span class="fa fa-star" style="color:#d4dde5;"></span>
                                            @elseif ($rating >= 3 && $rating < 4)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star" style="color:#d4dde5;"></span>
                                                <span class="fa fa-star" style="color:#d4dde5;"></span>                                                
                                            @elseif ($rating >= 4 && $rating < 5)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star" style="color:#d4dde5;"></span>
                                            @elseif ($rating == 5)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>                                                
                                            @endif                                            

                                            <span style="color: #ff9000;font-size: 10px;">({{ ($reviews->total)/count($reviews->resumen_views) }})</span>
                                            <?php   $d = strtotime($reviews->created_at);
                                                    $fecha = date("d M, Y ", $d); ?>                                                                
                                            <span class="comment-date"> <?php echo $fecha; ?></span>
                                            <div class="description">
                                                <p class="moreReview">{!! $reviews->text_review !!}</p>                                                                    
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="post-pagination" style="margin-top: 0px;margin-bottom: 0px; padding-top: 0px;">
                <div class="text-center">
                    <br>            
                    <a id="target" class="btn style4 hover-blue morelinkReviewSection" onclick="ajaxRenderSection();">{{(session('locale') == 'es' )?"Ver mas Reviews.":"See more Reviews"}}</a>            
                </div>
            </div>              

        </div>                     
        @endif     
    @endif    
        
    <script>    
            /*****************************************************************/
            /* INICIOSHOW MORE / LESS REVIEWS    
            /*****************************************************************/
            sjq(document).ready(function($) {
                var showChar = 70; // How many characters are shown by default
                var ellipsestext = "";
                var moretext = " Show more >";
                var lesstext = " < Show less";
                $('.moreReview').each(function() {
                    var content = $(this).html();
                    if (content.length > showChar) {
                        var c = content.substr(0, showChar);
                        var h = content.substr(showChar, content.length - showChar);
                        var html =`${c} <span class="moreellipses"> ${ellipsestext} &nbsp;</span><span class="morecontentReview"> ${h}</span> <span><a href="" class="morelinkReview" style="text-decoration: none;color: #ff6600;">${moretext}</a></span>`;
                        $(this).html(html);
                    }
                });
        
                $(".morecontentReview").css("display", "none");
                
                $(".morelinkReview").click(function() {
                    if ($(this).hasClass("less")) {
                        $(this).removeClass("less");
                        $(this).html(moretext);
                    } else {
                        $(this).addClass("less");
                        $(this).html(lesstext);
                    }
                    $(this).parent().prev().toggle();
                    $(this).prev().toggle();
                    return false;
                });
            });
            /*****************************************************************/
            /* FIN SHOW MORE / LESS REVIEWS    
            /*****************************************************************/        
        </script>     
@endsection