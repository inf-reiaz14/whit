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
				
			    <h1 class="white-text">Move the Student <br><span class="smaller-h1">Move the World</span></h1>
			    
			</div>
		</div>
		<center class="col-xs-12">
			<h2 class="dark-Grey-text intern-heading"><center>Apply for Internship</center></h2>
		</center>
    </div>
	<!-- =========================
		END ROW 1
	============================== -->
    
    
	<!-- =========================
		ROW 2 | INTERNS
	============================== -->
	
	<section class="row intern-page-interns white-bg">
		<div class="container">
			
			@if($errors->any())
				@if($errors->has('success'))
				<div class="modal fade open-on-startup" id="internship-success" tabindex="-1" role="dialog">
				  <div class="modal-dialog modal-md">
				    <div class="modal-content panel-body">
				      <h1 class="blue-bg white-text text-center no-margin pull-10">SUCCESS!</h1>
				      <h3 class="dark-Grey-text blue-bg text-center no-margin pull-10">We have received your application.</h3>
				      <h4 class="white-text light-grey-bg text-center no-margin pull-10">One of our managers will review your application and get back to you accordingly.</h3>
				      <small class="text-muted">click outside the box to close</small>
				    </div>
				  </div>
				</div>
				@else
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
				@endif
			@endif
			
			{!! Form::open(['url'=> action('Interns@internApplicationStore'), 'method'=>'post' ]) !!}
			
			<div class="col-xs-12">
				{!! Form::label('name', 'Full Name', ['class'=> 'dark-Grey-text push-up-10']) !!}
				{!! Form::text('name', old('name'), ['class'=>'form-control blue-thin-border', 'required'=> 'required']) !!}
			</div>
			
			<div class="col-xs-12">
				{!! Form::label('dob_date', 'Date of Birth', ['class'=> 'dark-Grey-text push-up-10']) !!}
				{!! Form::text('dob_date', old('dob_date'), ['class'=>'form-control blue-thin-border datepicker', 'required'=> 'required']) !!}
			</div>
			
			<div class="col-sm-6">
				{!! Form::label('email', 'Email', ['class'=> 'dark-Grey-text push-up-10']) !!}
				{!! Form::text('email', old('email'), ['class'=>'form-control blue-thin-border', 'required'=> 'required']) !!}
			</div>
			
			<div class="col-sm-6">
				{!! Form::label('phone', 'Phone', ['class'=> 'dark-Grey-text push-up-10']) !!}
				{!! Form::text('phone', old('phone'), ['class'=>'form-control blue-thin-border', 'required'=> 'required']) !!}
			</div>
			
			<div class="col-sm-6">
				{!! Form::label('prefetch', 'State/Prefecture/District', ['class'=> 'dark-Grey-text push-up-10']) !!}
				{!! Form::text('prefetch', old('prefetch'), ['class'=>'form-control blue-thin-border', 'required'=> 'required']) !!}
			</div>
			
			<div class="col-sm-6">
				{!! Form::label('country_id', 'Country', ['class'=> 'dark-Grey-text push-up-10']) !!}
				{!! Form::select('country_id', \App\Country::lists('name','id'), old('country_id'), ['class'=>'form-control blue-thin-border square-border', 'required'=> 'required']) !!}
			</div>
			
			<div class="col-xs-12">
				{!! Form::label('family_details', 'Family Member Details', ['class'=> 'dark-Grey-text push-up-10']) !!}
				{!! Form::textarea('family_details', old('family_details'), ['class'=>'form-control blue-thin-border', 'required'=> 'required']) !!}
			</div>
			
			<div class="col-xs-12">
				{!! Form::label('education_background', 'Education Background', ['class'=> 'dark-Grey-text push-up-10']) !!}
				{!! Form::textarea('education_background', old('education_background'), ['class'=>'form-control blue-thin-border', 'required'=> 'required']) !!}
			</div>
			
			<div class="col-xs-12">
				<label for="aim_in_life" class="no-padding push-up-10 dark-Grey-text col-xs-12">Aim in Life: <small>1000 words in English and in your Native Language</small></label>
				
				<div class="col-sm-6">
					{!! Form::textarea('aim_in_life_en', old('aim_in_life_en'), ['class'=>'row form-control blue-thin-border', 'placeholder'=>'English', 'required'=> 'required']) !!}
				</div>
				
				<div class="col-sm-6">
					{!! Form::textarea('aim_in_life_native', old('aim_in_life_native'), ['class'=>'row form-control blue-thin-border pull-right', 'placeholder'=>'Native language', 'required'=> 'required']) !!}
				</div>
				
			</div>
			
			<div class="col-xs-12">
				<label for="why_interested_in_carereer_travel" class="no-padding push-up-10 dark-Grey-text col-xs-12"> Why you are interested in career/travel to BD: <small>500 words in English and in your Native Language</small></label>
				
				<div class="col-sm-6">
					{!! Form::textarea('why_interested_in_carereer_travel_en', old('why_interested_in_carereer_travel_en'), ['class'=>'row form-control blue-thin-border', 'placeholder'=>'English', 'required'=> 'required']) !!}
				</div>
				
				<div class="col-sm-6">
					{!! Form::textarea('why_interested_in_carereer_travel_native', old('why_interested_in_carereer_travel_native'), ['class'=>'row form-control blue-thin-border pull-right', 'placeholder'=>'Native Language', 'required'=> 'required']) !!}
				</div>
				
			</div>
			
			
			<div class="col-xs-12">
				{!! Form::submit('Send', ['class'=> 'btn btn-lg white-bg blue-thin-border blue-text push-up-10 push-down-10 pull-right']) !!}
			</div>
			
			{!! Form::close() !!}
			
		</div>
	</section>
	
	<!-- =========================
		ROW 2 | END INTERNS
	============================== -->
	
	
@stop
        