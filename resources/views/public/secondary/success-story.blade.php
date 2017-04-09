<div class="row slick" data-slick='{"autoplay": true, "arrows": true, "nextArrow": "<a type=\"button\" class=\"next-success-story btn\"><i class=\"fa fa-angle-right\"></i></a>", "prevArrow" : "<a type=\"button\" class=\"prev-success-story btn\"><i class=\"fa fa-angle-left\"></i></a>", "autoplaySpeed": 15000, "slidesToShow": 1, "centerMode": true, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 3000 }'>
	@if($successfulStories)
	@foreach($successfulStories as $successfullStory)
	<div class="pix-item-owl successful-stories">
		<div class="col-xs-12">
			<div class="col-xs-5 heroes">
				<img source="{{$successfullStory['profile_photo']}}" alt="{{$successfullStory['name']}}" class="img-responsive">
			</div>
			<div class="col-xs-7 success-details">
				<h4>
					Talent {{$successfullStory['name']}}
					<meta name="name" content="{{$successfullStory['name']}}, {{$successfullStory['designation']}}, WebHawks IT" />
					<meta name="description" content="{{$successfullStory['skills']}}" />
				</h4>
				<h6 class="dark-Grey-text">{{$successfullStory['designation']}}</h6>
				
				<small class="dark-Grey-text">team call me</small>
				<br>
				<q class="dark-Grey-text">{{$successfullStory['alias']}}</q>
				<br>
				<p class="skills dark-Grey-text">Skills: <span>{{$successfullStory['skills']}}</span></p>
				<a href="{{$successfullStory['profile_link']}}" class="portfolio-link blue-bg" target="_blank">
					<img source="/public/img/settings/favicon2.png" alt="portfolio of {{$successfullStory['name']}}" class="img-responsive">
				</a>
			</div>
		</div>
	</div>
	@endforeach
	@endif
</div>
