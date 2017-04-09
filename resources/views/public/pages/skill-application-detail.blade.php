@extends('public.layouts.layout2')
@section('title')@if(\App\Setting::find(1)){{\App\Setting::find(1)->application_name}}@else Application name @endif- Skill item. @stop

@section('meta')
	<meta name="title" Content="IT development team, IT support, IT programmer, Design, Digital Marketing, Back Office " />
	<meta name="keywords" Content=" @if( count($tmsslides_h2) > 0) @foreach( $tmsslides_h2 as $tmsslides_h ){{ $tmsslides_h->meta_tag.',' }} @endforeach @endif " />
	<meta name="description" Content=" @if( count($tmsslides_h2) > 0) @foreach( $tmsslides_h2 as $tmsslides_h ){{ $tmsslides_h->meta_description }} @endforeach @endif " />
@stop


@section('main')

<?php include_once("analyticstracking.php") ?>
<!-- =========================
    MAIN CONTENT
============================== -->
<main class="section dark-blue-bg body-fix" id="main">
	
	<!-- =========================
		ROW 1 | Intro banner
	============================== -->
	<div class="pix_row scrollreveal row product-top dark-blue-bg">
		
		<div class="col-xs-12">
			<div class="product-banner">
				@if($skillapp)
					<img src="{{url($skillapp->banner_photo)}}" alt="WebHawks IT - Skill item" class="img-responsive banner">
				    <h1 class="heading white-text">{{$skillapp->name}}</h1>
			    @else
				    <img src="{{url('/public/img/press/background.png')}}" class="img-responsive banner">
				    <h1 class="heading">Sorry! This Skill detail could not be found.</h1>
			    @endif
			</div>
		</div>
		
    </div>
	<!-- =========================
		END ROW 1
	============================== -->
    
	
	
	<!-- =========================
		ROW 2 | PRESS RELEASE DETAILS
	============================== -->
	
	<section class="row dark-blue-bg">
		<div class="container">
			@if($skillapp)
			
				<div class="col-xs-12 push-up-20 push-down-20">
					{!! $skillapp->description !!}
				</div>
				
			@endif
			
		</div>
	</section>
	
	<!-- =========================
		ROW 2 | END DETAILS
	============================== -->
	
@stop
        