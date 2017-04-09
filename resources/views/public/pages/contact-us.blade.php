@extends('public.layouts.layout2')
@section('title')@if(\App\Setting::find(1)){{\App\Setting::find(1)->application_name}}@else Application name @endif- Contact us. @stop
@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAHDFaUVFTKqrrUtBXubJbrUxKKq-t8Fw&amp;callback=initMap" async="" defer=""></script>
@stop
@section('main')
<?php include_once("analyticstracking.php") ?>
<!-- =========================
    MAIN CONTENT
============================== -->
<main class="section body-fix" id="main">
   
   <!-- === CONTACTS MAP === -->
	<div class="pix_row row contacts">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="contact-map"></div>
	</div>
	
	<div class="pix_row row contact-info">
		
		<!-- === CONTACTS INFO === -->
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<h3 class="contact-title">SAY HELLO!</h3>
			<p class="contact-subtitle">Lorem ipsum dolor sit amet consecta<br>
			adipisicing elit sed do eiusmod. </p>
			<p>Office # 380 <br>
			DownHill Street, Los Angeles <br>
			LA 33026</p>
			<p>+1 (092) 123-456-7890<br>
			hello@galliope.com</p>
			<hr class="post-divider">
		</div>
		
		<!-- === CONTACTS FORM === -->
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<div class="contact-form">
				<form name="contact-form" id="contact-form" method="POST" action="{{action('StaticPageController@postContact')}}">
					<div class="contact-form-item contact-form-item-1 col-md-4 col-sm-4 col-xs-12">
						<label for="username">NAME</label>
						<input data-validation="length" data-validation-length="min4" type="text" id="username" name="username" placeholder="" />
					</div>
					<div class="contact-form-item contact-form-item-2 col-md-4 col-sm-4 col-xs-12">
						<label for="email">E-MAIL</label>
						<input data-validation="email" type="text" id="email" name="email" placeholder="" />
					</div>
					<div class="contact-form-item contact-form-item-3 col-md-4 col-sm-4 col-xs-12">
						<label for="subject">SUBJECT</label>
						<input data-validation="length" data-validation-length="min4" type="text" id="subject" name="subject" placeholder="" />
					</div>
					<div class="contact-form-item col-md-12 col-sm-12 col-xs-12">
						<label for="comment">MESSAGE</label>
						<textarea data-validation="length" data-validation-length="min10" name="comment" id="comment" placeholder=""></textarea>
					</div>
					<div class="contact-form-item col-md-12 col-sm-12 col-xs-12">
						<button id="submit" class="btn btn-info">SUBMIT</button>
					</div>
				</form>
				<div class="send-result"></div>
			</div>
		</div>
		
	</div>
	
</main>
<!-- =========================
	END MAIN CONTENT
============================== -->

@stop