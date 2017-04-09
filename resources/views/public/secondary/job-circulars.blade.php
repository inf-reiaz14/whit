<div class="owl-carousel enable-owl-carousel verticale-owl-controls" data-wow-delay="2.2s" data-navigation="true" 
data-pagination="false" data-single-item="true" data-auto-play="true" data-transition-style="fade" 
data-main-text-animation="true" data-min600="1" data-min800="1" data-min1200="1" effect="fade">
	@if($jobcirculars)
	@foreach($jobcirculars as $jobcircular)
	<div class="pix-item-owl">
		<h2>
			{{$jobcircular->name}}, @if($jobcircular->country) {{$jobcircular->country->name}} @endif
			<meta name="name" content="{{$jobcircular->skills}}" />
			<meta name="description" content="{{$jobcircular->name}}, @if($jobcircular->country) {{$jobcircular->country->name}} @endif" />
		</h2>
		<p><i class="icon-skill"></i> {{$jobcircular->skills}}</p>
		<p><i class="icon-catagory"></i> {{$jobcircular->category}}</p>
		<p><i class="icon-location"></i> {{$jobcircular->location}}</p>
		
		<ul class="homepage-job-links">
			<li class="pull-right"><a href="{{$jobcircular->application_link}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Apply"><i class="icon-postCV white-text"></i></a></li>
			<li class="pull-right"><a href="{{ action('StaticPageController@jobDetails', $jobcircular->id) }}" target="_blank" data-toggle="tooltip" data-placement="top" title="Job Detail"><i class="icon-details white-text"></i></a></li>
		</ul>
	</div>
	@endforeach
	@endif
</div>