<div class="team-wrap owl-carousel enable-owl-carousel verticale-owl-controls" data-wow-delay="0.7s" data-navigation="false" 
data-pagination="false" data-single-item="false" data-auto-play="true" data-transition-style="false" 
data-main-text-animation="false" data-min600="2" data-min800="3" data-min1200="3">
	
	@if($interns)
		@foreach($interns as $intern)
		<div class="team-box">
			<div class="team-box-img"><img source="{{$intern->image_photo}}" width="100%" height="357" alt="{{$intern->name}}" meta-name="{{$intern->name}}" meta-description="IT Internship, Bangladesh, {{$intern->name}}, @if($intern->country){{$intern->country->name}} @endif" /></div>
			<div class="intern-info">
				<center class="white-text">
					{{$intern->name}}
					<meta name="name" content="{{$intern->name}}, IT Internship, Bangladesh" />
					<meta name="description" content="IT Internship, Bangladesh, {{$intern->name}}, @if($intern->country){{$intern->country->name}} @endif" />
				</center>
				<center class="white-text">@if($intern->country){{$intern->country->name}} @endif</center>
			</div>
			<a href="{{action('StaticPageController@interns')}}" target="_blank" class="intern-link blue-text"><i class="icon-details"></i></a>
		</div>
		@endforeach
	@endif
	
</div>