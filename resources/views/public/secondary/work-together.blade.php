<div class="col-xs-12">
	<div class="col-xs-6 col-sm-3 work-items no-margin no-padding first slick" data-slick='{"autoplay": true, "autoplaySpeed": 1500, "slidesToShow": 1, "centerMode": true, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 8000, "arrows": false, "dots": false, "initialSlide": 0 }'>
		@if($advisors->advisors()->first())
			@foreach($advisors->advisors()->get() as $advisor1)
			<div class="col-xs-12 work-item">
				<img source="{{$advisor1->image_photo}}" alt="{{$advisor1->name}}" class="img-responsive">
				<center class="cover">
					<a href="#" data-toggle="modal" data-target="#advisor-{{$advisor1->id}}">
						<img source="{{$advisor1->image_photo}}" alt="{{$advisor1->name}}" class="cover-photo">
						<h3 class="white-text name">{{$advisor1->name}}</h3>
						<h3 class="white-text designation">{{$advisor1->designation}}</h3>
					</a>
				</center>
			</div>
			@endforeach
		@endif
	</div>
	<div class="col-xs-6 col-sm-3 work-items no-margin no-padding first slick" data-slick='{"autoplay": true, "autoplaySpeed": 1500, "slidesToShow": 1, "centerMode": true, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 8000, "arrows": false, "dots": false, "initialSlide": 1 }'>
		@if($advisors->advisors()->first())
			@foreach($advisors->advisors()->get() as $advisor1)
			<div class="col-xs-12 work-item">
				<img source="{{$advisor1->image_photo}}" alt="{{$advisor1->name}}" class="img-responsive">
				<center class="cover">
					<a href="#" data-toggle="modal" data-target="#advisor-{{$advisor1->id}}">
						<img source="{{$advisor1->image_photo}}" alt="{{$advisor1->name}}" class="cover-photo">
						<h3 class="white-text name">{{$advisor1->name}}</h3>
						<h3 class="white-text designation">{{$advisor1->designation}}</h3>
					</a>
				</center>
			</div>
			@endforeach
		@endif
	</div>
	<div class="col-xs-6 col-sm-3 work-items no-margin no-padding first slick" data-slick='{"autoplay": true, "autoplaySpeed": 1500, "slidesToShow": 1, "centerMode": true, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 8000, "arrows": false, "dots": false, "initialSlide": 2 }'>
		@if($advisors->advisors()->first())
			@foreach($advisors->advisors()->get() as $advisor1)
			<div class="col-xs-12 work-item">
				<img source="{{$advisor1->image_photo}}" alt="{{$advisor1->name}}" class="img-responsive">
				<center class="cover">
					<a href="#" data-toggle="modal" data-target="#advisor-{{$advisor1->id}}">
						<img source="{{$advisor1->image_photo}}" alt="{{$advisor1->name}}" class="cover-photo">
						<h3 class="white-text name">{{$advisor1->name}}</h3>
						<h3 class="white-text designation">{{$advisor1->designation}}</h3>
					</a>
				</center>
			</div>
			@endforeach
		@endif
	</div>
	<div class="col-xs-6 col-sm-3 work-items no-margin no-padding first slick" data-slick='{"autoplay": true, "autoplaySpeed": 1500, "slidesToShow": 1, "centerMode": true, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 8000, "arrows": false, "dots": false, "initialSlide": 3 }'>
		@if($advisors->advisors()->first())
			@foreach($advisors->advisors()->get() as $advisor1)
			<div class="col-xs-12 work-item">
				<img source="{{$advisor1->image_photo}}" alt="{{$advisor1->name}}" class="img-responsive">
				<center class="cover">
					<a href="#" data-toggle="modal" data-target="#advisor-{{$advisor1->id}}">
						<img source="{{$advisor1->image_photo}}" alt="{{$advisor1->name}}" class="cover-photo">
						<h3 class="white-text name">{{$advisor1->name}}</h3>
						<h3 class="white-text designation">{{$advisor1->designation}}</h3>
					</a>
				</center>
			</div>
			@endforeach
		@endif
	</div>
</div>

<div class="col-xs-12 work-items second">
	
	<div class="col-xs-12 col-sm-3 work-item">
		<img source="/public/img/advisers/upal.jpg" alt="Upal Mohammed" class="img-responsive"/>
		<center class="cover">
			<a href="#" data-toggle="modal" data-target="#adviser-upal">
				<img source="/public/img/advisers/upal.jpg" alt="Upal Mohammed" class="cover-photo"/>
				<h3 class="white-text name">Upal Mohammed</h3>
				<h3 class="white-text designation">Founder & CEO, WebHawks IT</h3>
			</a>
		</center>
	</div>
	
	<div class="col-xs-12 col-sm-9 work-item-mid">
		<h2 class="light-Grey-text black-text margin-top-10 big-heading" id="h2fontsize">We Impact Together</h2>
		<p class="white-text light-Grey-text margin-left-20 scroller-class justify big-font">
			After ten years working in different multinationals in industries including advertising, 
			automotive, IT and investment banking in Japan and the USA, I have found my destiny
			-- <b> “Connecting Bangladesh Globally”!</b><br>
			
			<span class="col-xs-12 push-up-10"></span>
			
			Bangladesh, is the world`s 8th largest in population with a median age of 24.3 and its university 
			graduates speak English fluently.  This combined with my ten years of working & academic experience
			overseas are the key factors that motivate me to create a platform to connect highly skilled 
			professionals from Bangladesh to the world. <br>
			
			<span class="col-xs-12 push-up-10"></span>
			
			In this big dream, I see my role as an assistant; to support my people and our honorable advisors and 
			directors from four continents of the world to make a big impact together. </p>
		<h3 class="pull-right margin-button-o commongoal"><a href="{{action('StaticPageController@aboutUs')}}#love-and-faith" class="blue-text ourcommongole font-siz1">- Our common goal</a></h3>
	</div>
	
	
	<!--<div class="col-xs-12 col-sm-3 work-item">-->
	<!--	<img source="/public/img/advisers/upal.jpg" alt="Upal Mohammed" class="img-responsive"/>-->
	<!--	<center class="cover">-->
	<!--		<a href="#" data-toggle="modal" data-target="#adviser-upal">-->
	<!--			<img source="/public/img/advisers/upal.jpg" alt="Upal Mohammed" class="cover-photo"/>-->
	<!--			<h3 class="white-text name">Upal Mohammed</h3>-->
	<!--			<h3 class="white-text designation">Founder & CEO, WebHawks IT</h3>-->
	<!--		</a>-->
	<!--	</center>-->
	<!--</div>-->
	
</div>

<div class="col-xs-12">
	<div class="col-xs-6 col-sm-3 work-items no-margin no-padding third slick" data-slick='{"autoplay": true, "autoplaySpeed": 1500, "slidesToShow": 1, "centerMode": true, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 10000, "arrows": false, "dots": false, "initialSlide": 0 }'>
		@if($advisors->directors()->first())
			@foreach($advisors->directors()->get() as $advisor)
			<div class="col-xs-6 col-sm-3 work-item">
				<img source="{{$advisor->image_photo}}" alt="{{$advisor->name}}" class="img-responsive">
				<center class="cover">
					<a href="#" data-toggle="modal" data-target="#advisor-{{$advisor->id}}">
						<img source="{{$advisor->image_photo}}" alt="{{$advisor->name}}" class="cover-photo">
						<h3 class="white-text name">{{$advisor->name}}</h3>
						<h3 class="white-text designation">{{$advisor->designation}}@if($advisor->country), {{$advisor->country->name}} @endif</h3>
					</a>
				</center>
			</div>
			@endforeach
		@endif
	</div>
	<div class="col-xs-6 col-sm-3 work-items no-margin no-padding third slick" data-slick='{"autoplay": true, "autoplaySpeed": 1500, "slidesToShow": 1, "centerMode": true, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 10000, "arrows": false, "dots": false, "initialSlide": 1 }'>
		@if($advisors->directors()->first())
			@foreach($advisors->directors()->get() as $advisor)
			<div class="col-xs-6 col-sm-3 work-item">
				<img source="{{$advisor->image_photo}}" alt="{{$advisor->name}}" class="img-responsive">
				<center class="cover">
					<a href="#" data-toggle="modal" data-target="#advisor-{{$advisor->id}}">
						<img source="{{$advisor->image_photo}}" alt="{{$advisor->name}}" class="cover-photo">
						<h3 class="white-text name">{{$advisor->name}}</h3>
						<h3 class="white-text designation">{{$advisor->designation}}@if($advisor->country), {{$advisor->country->name}} @endif</h3>
					</a>
				</center>
			</div>
			@endforeach
		@endif
	</div>
	<div class="col-xs-6 col-sm-3 work-items no-margin no-padding third slick" data-slick='{"autoplay": true, "autoplaySpeed": 1500, "slidesToShow": 1, "centerMode": true, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 10000, "arrows": false, "dots": false, "initialSlide": 2 }'>
		@if($advisors->directors()->first())
			@foreach($advisors->directors()->get() as $advisor)
			<div class="col-xs-6 col-sm-3 work-item">
				<img source="{{$advisor->image_photo}}" alt="{{$advisor->name}}" class="img-responsive">
				<center class="cover">
					<a href="#" data-toggle="modal" data-target="#advisor-{{$advisor->id}}">
						<img source="{{$advisor->image_photo}}" alt="{{$advisor->name}}" class="cover-photo">
						<h3 class="white-text name">{{$advisor->name}}</h3>
						<h3 class="white-text designation">{{$advisor->designation}}@if($advisor->country), {{$advisor->country->name}} @endif</h3>
					</a>
				</center>
			</div>
			@endforeach
		@endif
	</div>
	<div class="col-xs-6 col-sm-3 work-items no-margin no-padding third slick" data-slick='{"autoplay": true, "autoplaySpeed": 1500, "slidesToShow": 1, "centerMode": true, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 10000, "arrows": false, "dots": false, "initialSlide": 3 }'>
		@if($advisors->directors()->first())
			@foreach($advisors->directors()->get() as $advisor)
			<div class="col-xs-6 col-sm-3 work-item">
				<img source="{{$advisor->image_photo}}" alt="{{$advisor->name}}" class="img-responsive">
				<center class="cover">
					<a href="#" data-toggle="modal" data-target="#advisor-{{$advisor->id}}">
						<img source="{{$advisor->image_photo}}" alt="{{$advisor->name}}" class="cover-photo">
						<h3 class="white-text name">{{$advisor->name}}</h3>
						<h3 class="white-text designation">{{$advisor->designation}}@if($advisor->country), {{$advisor->country->name}} @endif</h3>
					</a>
				</center>
			</div>
			@endforeach
		@endif
	</div>
</div>
