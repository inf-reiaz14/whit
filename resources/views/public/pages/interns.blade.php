@extends('public.layouts.layout2')
@section('title')@if(\App\Setting::find(1)){{\App\Setting::find(1)->application_name}}@else Application name @endif- Ceative solutions. @stop
@section('main')

<?php include_once("analyticstracking.php") ?>
<!-- =========================
    MAIN CONTENT
============================== -->
<main class="section dark-blue-bg body-fix" id="main">
	
	<!-- =========================
		ROW 1 | Intro banner
	============================== -->
	<div class="pix_row scrollreveal row intern-top dark-blue-bg">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="custom_04 intern-banner">
				
			    <h1 class="white-text">We Always <br><span class="smaller-h1">Think for future</span></h1>
			    
			</div>
		</div>
		<center class="col-xs-12">
			<h1 class="white-text intern-heading"><center>OUR INTERNS</center></h1>
		</center>
    </div>
	<!-- =========================
		END ROW 1
	============================== -->
    
	
	
	<!-- =========================
		ROW 2 | INTERNS
	============================== -->
	
	<section class="row intern-page-interns">
		<div class="container">
			
			@if($interns)
				@foreach($interns as $intern)
				<div class="col-xs-12 col-sm-4">
					<div class="intern-page-intern">
						<center class="dark-Grey-text">
							<img src="{{$intern->image_photo}}" alt="{{$intern->name}}" class="intern-img">
							<h3 class="light-Gray-text">{{$intern->name}}</h3>
							<small class="light-Gray-text">From {{$intern->prefetch}}, @if($intern->country){{$intern->country->name}} @endif</small>
							<h4><i class="fa fa-quote-left"></i></h4>
						</center>
						<p class="justify dark-Grey-text">
							{{$intern->about_me}}
						</p>
						<p class="dark-Grey-text">
							Intern for {{$intern->internship_duration}}
							<br>
							@ {{$intern->internship_at_department}}
						</p>
					<!--	<p class="social-links">
							<a target="_blank" href="{{$intern->google_plus_link}}"><img src="/public/img/applications/gplus.png" alt="{{$intern->name}} social"></a>
							<a target="_blank" href="{{$intern->skype_link}}"><img src="/public/img/applications/skype.png" alt="{{$intern->name}} social"></a>
							<a target="_blank" href="{{$intern->linkedin_link}}"><img src="/public/img/applications/linkedin.png" alt="{{$intern->name}} social"></a>
							<a target="_blank" href="{{$intern->twitter_link}}"><img src="/public/img/applications/twitter.png" alt="{{$intern->name}} social"></a>
							<a target="_blank" href="{{$intern->facebook_link}}"><img src="/public/img/applications/fb.png" alt="{{$intern->name}} social"></a>
							<a target="_blank" href="{{$intern->webhawksit_link}}"><img src="/public/img/applications/whit.png" alt="{{$intern->name}} social"></a>
						</p> -->
					</div>
				</div>
				@endforeach
				<div class="col-xs-12">{!! $interns->render() !!}</div>
				
			@endif
			
		</div>
	</section>
	
	<!-- =========================
		ROW 2 | END INTERNS
	============================== -->
	
	
@stop
        