@extends('public.layouts.layout2')
@section('title')@if(\App\Setting::find(1)){{\App\Setting::find(1)->application_name}}@else Application name @endif- Cookie policy. @stop
@section('main')

<?php include_once("analyticstracking.php") ?>
<!-- =========================
    MAIN CONTENT
============================== -->
<main class="section dark-blue-bg body-fix" id="main">
	
	<!-- =========================
		ROW 1 | Intro banner
	============================== -->
	<div class="pix_row scrollreveal row support-top dark-blue-bg">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="custom_04 support-banner">
				
			    <h1 class="white-text">Cookie Policy of WebHawks IT</h1>
			    
			</div>
		</div>
    </div>
	<!-- =========================
		END ROW 1
	============================== -->
    
	
	
	<!-- =========================
		ROW 2 | COOKIE POLICY
	============================== -->
	
	<section class="row privacy">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 gray-texts justify">
			
			<h2 class="gray-texts push-up-20 push-down-20">WebHawks IT follows simple cookie policy</h2>
			
			<h4>What Are Cookies</h4>
			<p>
				As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or 'break' certain elements of the sites functionality.
			</p>
			<p>
				For more general information on cookies see the Wikipedia article on HTTP Cookies...
			</p>
			
			<h4>
				How We Use Cookies
			</h4>
			<p>
				We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use.
			</p>
			
			<h4>
				Disabling Cookies
			</h4>
			<p>
				You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites that you visit. Disabling cookies will usually result in also disabling certain functionality and features of the this site. Therefore it is recommended that you do not disable cookies.
			</p>
			
			<h4>
				The Cookies We Set
			</h4>
			<p>
				When you submit data to through a form such as those found on contact pages or comment forms cookies may be set to remember your user details for future correspondence.
			</p>
			<p>
				In order to provide you with a great experience on this site we provide the functionality to set your preferences for how this site runs when you use it. In order to remember your preferences we need to set cookies so that this information can be called whenever you interact with a page is affected by your preferences.
			</p>
			
			<h4>
				Third Party Cookies
			</h4>
			<p>
				In some special cases we also use cookies provided by trusted third parties. The following section details which third party cookies you might encounter through this site.
			</p>
			<p>
				This site uses Google Analytics which is one of the most widespread and trusted analytics solution on the web for helping us to understand how you use the site and ways that we can improve your experience. These cookies may track things such as how long you spend on the site and the pages that you visit so we can continue to produce engaging content.
			</p>
			<p>
				For more information on Google Analytics cookies, see the official Google Analytics page.
			</p>
			<p>
				Third party analytics are used to track and measure usage of this site so that we can continue to produce engaging content. These cookies may track things such as how long you spend on the site or pages you visit which helps us to understand how we can improve the site for you.
			</p>
			<p>
				From time to time we test new features and make subtle changes to the way that the site is delivered. When we are still testing new features these cookies may be used to ensure that you receive a consistent experience whilst on the site whilst ensuring we understand which optimisations our users appreciate the most.
			</p>
			<p>
				As we sell products it's important for us to understand statistics about how many of the visitors to our site actually make a purchase and as such this is the kind of data that these cookies will track. This is important to you as it means that we can accurately make business predictions that allow us to monitor our advertising and product costs to ensure the best possible price.
			</p>
			<p>
				We also use social media buttons and/or plugins on this site that allow you to connect with your social network in various ways. For these to work the following social media sites including; Facebook, Google Plus, Twitter, will set cookies through our site which may be used to enhance your profile on their site or contribute to the data they hold for various purposes outlined in their respective privacy policies.
			</p>
			
			<h4>
				More Information
			</h4>
			<p>
				Hopefully that has clarified things for you and as was previously mentioned if there is something that you aren't sure whether you need or not it's usually safer to leave cookies enabled in case it does interact with one of the features you use on our site. However if you are still looking for more information then you can contact us through one of our preferred contact methods.
				<br>
				Email: <a class="white-text" href="mailto:info@webhawksit.com.bd">info@webhawksit.com.bd</a>
			</p>
						
		</div>
	</section>
	
	
	<!-- =========================
		ROW 2 | END COOKIE POLICY
	============================== -->
	
	
	
@stop
        