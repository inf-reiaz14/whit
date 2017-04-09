@if(count($studies) > 0)
<div class="slick" data-slick='{"autoplay": true, "arrows": true, "nextArrow": "<a type=\"button\" class=\"next-case-study btn\"><i class=\"fa fa-angle-right\"></i></a>", "prevArrow" : "<a type=\"button\" class=\"prev-case-study btn\"><i class=\"fa fa-angle-left\"></i></a>", "autoplaySpeed": 6000, "slidesToShow": 1, "pauseOnHover": false, "fade": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 4000 }'>
    @foreach($studies as $study)
	<div class="case-study-slide">
		<img src="{{$study->study_photo}}" alt="{{$study->name}}">
	</div>
	@endforeach
</div>
@endif