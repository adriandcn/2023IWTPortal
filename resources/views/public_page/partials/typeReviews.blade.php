@section('typeReview')
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{ asset('public_components/css/style.css')}}">
	@foreach ($tipoReviews as $rev)
     <input type="hidden" name="id_tipo_review[]" id="review_score" value="{!!$rev->id!!}">
        <div class="form-group">
        @if(session('locale') == 'es' )
            <label>{!!$rev->tipo_review!!}</label>
        @else
            <label>{!!$rev->tipo_review_eng!!}</label>
        @endif
        <input type="number" class="input-text full-width" name="review_score[]">
            <!-- <span class="input-star-rating">
                <input type="radio" value="5" name="review_score_{!!$rev->id!!}">
                <input type="radio" value="4" name="review_score_{!!$rev->id!!}">
                <input type="radio" value="3" name="review_score_{!!$rev->id!!}">
                <input type="radio" value="2" name="review_score_{!!$rev->id!!}">
                <input type="radio" value="1" name="review_score_{!!$rev->id!!}">
            </span> -->
        </div>
     @endforeach
@endsection