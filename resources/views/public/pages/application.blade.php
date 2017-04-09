@extends('public.layouts.layout2')
@section('title')@if(\App\Setting::find(1)){{\App\Setting::find(1)->application_name}}@else Application name @endif- Ceative solutions. @stop
@section('main')

<?php include_once("analyticstracking.php") ?>
<!-- =========================
    MAIN CONTENT
============================== -->
<main class="section dark-blue-bg body-fix" id="main">
	
	@if($application)
	<!-- =========================
		ROW 1 | Intro banner
	============================== -->
	<div class="pix_row scrollreveal row product-top dark-blue-bg">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="product-banner">
				<img @if(strlen($application->banner_photo) > 0)src="{{url($application->banner_photo)}}" alt="WebHawks IT Product" @endif  class="img-responsive banner">
			    <img src="{{url($application->logo_photo)}}" alt="WebHawks IT Product" class="product-logo"></img>
			    
			</div>
		</div>
    </div>
	<!-- =========================
		END ROW 1
	============================== -->
    
	
	
	<!-- =========================
		ROW 2 | WHAT IS
	============================== -->
	
	<section class="row what-is dark-blue-bg">
		<div class="container">
			
			<div class="col-xs-12">
				<h1 class="gray-texts">What is {{$application->name}}</h1>
				<p class="gray-texts">
					{!! $application->what_is !!}
				</p>
			</div>
			
		</div>
	</section>
	
	<!-- =========================
		ROW 2 | END WHAT IS
	============================== -->
	
	
	<!-- =========================
		ROW 2 | DETAILS
	============================== -->
	
	<section class="row product-details">
		<div class="container">
			
			<div class="col-xs-12">
				
				{!! $application->details !!}
				
			</div>
			
			<div class="col-xs-12 product-links">
				@if($application->application_link)
				<a href="{{ action('Prototype@prototype',$application->id) }}" class="btn transparent-bg dark-Grey-text pull-right">Prototype</a>
				@endif

			</div>
			
		</div>
	</section>
	
	<!-- =========================
		ROW 2 | END DETAILS
	============================== -->
	
	@endif
@stop
        