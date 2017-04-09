@extends('public.layouts.layout2')
@section('title')@if(\App\Setting::find(1)){{\App\Setting::find(1)->application_name}}@else Application name @endif- Press Release. @stop
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
				<img src="{{url('/public/img/press/background.png')}}" alt="WebHawks IT - Press Releases" class="img-responsive banner">
			    <h1 class="heading">Press and News</h1>
			    
			</div>
		</div>
		
    </div>
	<!-- =========================
		END ROW 1
	============================== -->
    
	
	
	<!-- =========================
		ROW 2 | PRESS RELEASES
	============================== -->
	
	<section class="row dark-blue-bg push-down-50">
		<div class="container">
			@if(count($pressReleases) > 0)
				@foreach($pressReleases as $press)
				<div class="col-xs-12 press-release-item">
					<div class="col-sm-3 no-padding">
						<img src="{{url($press->banner_photo)}}" alt="{{$press->name}}" class="img-responsive">
					</div>
					<div class="col-sm-9">
					
						<h4 class="grays-text">{{ $press->name }}</h4>
					
						<p class="justify grays-text" style="color: #868787 !important;">
							{{ $press->short_description }}
						</p>
						<p>
							<a href="{{action('StaticPageController@singlePressRelease', $press->id)}}" class="btn transparent-bg grays-text white-border">Read Press Release</a>
							<a href="@if(strlen($press->live_link) > 0){{$press->live_link}} @else # @endif" target="_blank" class="btn transparent-bg grays-text white-border">Live</a>
							
	<span class="pull-right grays-text">Date: {{ date('M j, Y', strtotime($press->live_date))}}</span>
						</p>
					</div>
				</div>
				@endforeach
				
				<div class="col-xs-12">
					{!! $pressReleases->render() !!}
				</div>
				
			@endif
			
		</div>
	</section>
	
	<!-- =========================
		ROW 2 | END PRESS RELEASES
	============================== -->
	
	
@stop
        