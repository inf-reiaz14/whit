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
	<!--<section class="row adviser-intro" @if($adviser->banner_photo) style="background-image: url('{{url($adviser->banner_photo)}}')" @endif >-->
	<section class="row adviser-intro">
		
		<div class="container">
			<div class="intro-block col-xs-12 transparent-bg">
				<aside class="col-xs-6">
					<img src="{{url($adviser->image_photo)}}" alt="{{$adviser->name}}" class="adviser-thumb">
					<span class="favicon"><img src="/public/img/settings/favicon2.png" ></span>
				</aside>
				<article class="col-xs-6 adviser-details">
					<h1 class="big-heading white-text">Hello!</h1>
					<h2 class="blue-text"><small class="blue-text">I `m</small> {{$adviser->name}}</h2>
					<h3 class="blue-text">{{$adviser->designation}}</h3>
					<h6 class="blue-text">From {{$adviser->location}}</h6>
					<div class="row advisers-social">
						<p class="pull-10">
							<a class="" target="_blank" href="{{url($adviser->google_plus_link)}}"><i class="fa fa-google-plus"></i></a>
							<a class="" target="_blank" href="skype:{{url($adviser->skype_link)}}"><i class="fa fa-skype"></i></a>
							<a class="" target="_blank" href="{{url($adviser->linkedin_link)}}"><i class="fa fa-linkedin"></i></a>
							<a class="hidden" target="_blank" href="{{url($adviser->twitter_link)}}"><i class="fa fa-twitter"></i></a>
							<a class="hidden" target="_blank" href="{{url($adviser->facebook_link)}}"><i class="fa fa-facebook"></i></a>
						</p>
					</div>
				</article>
			</div>
			
			<summary class="col-xs-12 col-sm-10 col-sm-offset-1">
				<h3 class="white-text">{{$adviser->name}}</h3>
				<p class="white-text">
					{{$adviser->summary}}
				</p>
			</summary>
			
		</div>
	</section>
	
	<section class="row background-2">
		
		<div class="container">
			
			<center>
				<h2>
					<p class="white-text quote">
						<i class="fa fa-quote-left"></i> Myself in detail
					</p>
				</h2>
			</center>
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 white-text professionalism justify">
				{!! $adviser->about_professionalism !!}
			</div>
			
		</div>
		
			
	</section>
	<!-- =========================
		END ROW 1
	============================== -->
	
    
	
	
@stop
        