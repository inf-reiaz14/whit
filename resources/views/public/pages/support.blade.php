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
	<div class="pix_row scrollreveal row support-top dark-blue-bg">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="custom_04 support-banner">
				
			    <h1 class="white-text">
			    	<span class="pull-left push-down-20">Successful people</span>
			    	<br>
			    	<span class="pull-right push-up-20">Powerful teamwork</span>
			    </h1>
			    
			</div>
		</div>
		<div class="fb-slider">
			<ul class="owl-carousel enable-owl-carousel" data-wow-delay="0.7s" data-navigation="false" 
							data-pagination="false" data-single-item="false" data-auto-play="true" data-transition-style="false" 
							data-main-text-animation="false" data-min600="3" data-min800="4" data-min1200="5">
					
					<a href="#"><img src="/public/img/support/serverImage/1.jpg" alt="WebHawks IT Server Images" class="img-responsive"></a>
					<a href="#"><img src="/public/img/support/serverImage/2.jpg" alt="WebHawks IT Server Images" class="img-responsive"></a>
					<a href="#"><img src="/public/img/support/serverImage/3.jpg" alt="WebHawks IT Server Images" class="img-responsive"></a>
					<a href="#"><img src="/public/img/support/serverImage/4.jpg" alt="WebHawks IT Server Images" class="img-responsive"></a>
					<a href="#"><img src="/public/img/support/serverImage/5.jpg" alt="WebHawks IT Server Images" class="img-responsive"></a>
					<a href="#"><img src="/public/img/support/serverImage/6.jpg" alt="WebHawks IT Server Images" class="img-responsive"></a>
					<a href="#"><img src="/public/img/support/serverImage/7.jpg" alt="WebHawks IT Server Images" class="img-responsive"></a>
				
			</ul>
		</div>
    </div>
	<!-- =========================
		END ROW 1
	============================== -->
    
	
	
	<!-- =========================
		ROW 2 | NETWORK DATA SECURITY
	============================== -->
	
	<section class="row network-data-security">
		<div class="container">
			
			<h2 class="grays-text">Network Data Security</h2>
			<ul class="grays-text">
				<li>
					<h4 title="Click to Expand" data-toggle="collapse" role="button" href="#link1" aria-expanded="false" aria-controls="link1">Uninterrupted internet bandwidth</h4>
					<p class="collapse" id="link1">
						WebHawks IT ensures excellent quality, high capacity, and low latency Internet connectivity. The internet connectivity here will ensure fast and seamless access to the public network for each TeamSourcing client. Our infrastructure is linked with dedicated high speed internet connectivity with redundant and self-healing IP architecture. 
					</p>
				</li>
				<li>
					<h4 title="Click to Expand" data-toggle="collapse" role="button" href="#link2" aria-expanded="false" aria-controls="#link2">Unified Threat Management Server (UTM)</h4>
					<div class="col-xs-12 no-padding collapse" id="link2">
						<p>
							We deliver unparalleled protection, ease of use and performance with Next Generation Network Security platform to protect against sophisticated Cyber Threats through Fortinet UTM system. Some of the key features are given below:
						</p>
						<ul>
							<li>One platform for end-to-end security across entire network</li>
							<li>
								Optimized for internal segmentation, perimeter, data center, distributed and cloud deployments
							</li>
							<li>
								Industry tested and validated for superior security effectiveness (NSS Labs “Recommended” NGFW and NGIPS solutions)
							</li>
							<li>Integrated high port density for maximum flexibility</li>
						</ul>
					</div>
				</li>
				<li>
					<h4 title="Click to Expand" data-toggle="collapse" role="button" href="#link3" aria-expanded="false" aria-controls="link3">End Point Protection (EPO)</h4>
					<p class="collapse" id="link3">
						To keep the network clean and protect the endpoints (computers, smartphones, tablets, and fileservers) against emerging threats we use endpoint antivirus for WebHawks IT & TeamSourcing clients. The endpoint antivirus supports wide variety of OS (Windows, Linux, Mac, iOS, Android etc.)
					</p>
				</li>
				<li>
					<h4 title="Click to Expand" data-toggle="collapse" role="button" href="#link4" aria-expanded="false" aria-controls="link4">Backup and Recovery</h4>
					<p class="collapse" id="link4">
						We currently facilitate both cold and warm backup solution for our team, furthermore on demand back up service is available to protect the data based on the client’s requirement.  
					</p>
				</li>
				<li>
					<h4 title="Click to Expand" data-toggle="collapse" role="button" href="#link5" aria-expanded="false" aria-controls="link5">Virtualization</h4>
					<p class="collapse" id="link5">
						To create an efficient, responsive IT environment WebHawks IT has adopted the cutting edge technology by virtualizing the entire data center. Currently on process to have its own private cloud WebHawks IT team is capable of providing dedicated virtual servers and offer support to it according to the client needs.
					</p>
				</li>
				<li>
					<h4 title="Click to Expand" data-toggle="collapse" role="button" href="#link6" aria-expanded="false" aria-controls="link6">Power Supply & Generator</h4>
					<p class="collapse" id="link6">
						In WebHawks IT, central power supply is connected to three-phase electricity supply from the public grid. Furthermore, securing the stability we use an UPS (APC) & generator (FG Wilson) as on demand power backup purpose.
					</p>
				</li>
				<li>
					<h4 title="Click to Expand" data-toggle="collapse" role="button" href="#link7" aria-expanded="false" aria-controls="link7">Dedicated File Server</h4>
					<p class="collapse" id="link7">
						We provide secure and segregated private network & file server service to highest level of data security for each of our TeamSourcing clients. 
					</p>
				</li>
				<li>
					<h4 title="Click to Expand" data-toggle="collapse" role="button" href="#link8" aria-expanded="false" aria-controls="link8">Private Work Station</h4>
					<p class="collapse" id="link8">
						Our flexible workstation design allows us to modify our workstation many different sizes according to the clients’ privacy requirement. 
					</p>
				</li>
				
			</ul>
			
		</div>
	</section>
	
	<section class="row network-data-security-img">
		<img src="/public/img/support/driver.jpg" alt="WebHawks IT Server" class="img-responsive">
	</section>
	
	<!-- =========================
		ROW 2 | END NETWORK DATA SECURITY
	============================== -->
	
	
	<!-- =========================
		ROW 3 | TRANSPORT AND LEISURE
	============================== -->
	
	<section class="row transport-and-leisure">
		<div class="container white-text">
			
			<h2>Transport</h2>
			
			<h4>Chauffeur</h4>
			<p>
				We provide private transportation services to our overseas clients with experienced and trained chauffeurs that can communicate in English. In addition, 24/7-dedicated transport services during emergencies are always on standby for airport pick up and drop off. 
			</p>
			
		</div>
	</section>
	
	<!-- =========================
		ROW 3 | END TRANSPORT AND LEISURE
	============================== -->
	
	<!-- =========================
		ROW 4 | BEAUTIFUL BANGLADESH
	============================== -->
	
	<section class="pix_row row beautiful-bangladesh">
		<h2 class="italic white-text"><center>Beautiful Bangladesh</center></h2>
		
		<div class="row">
			<div class="col-xs-12 col-sm-3 gallery">
				<ul class="row slick" data-slick='{"autoplay": true, "autoplaySpeed": 7000, "slidesToShow": 1, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 5000, "arrows": false}'>
						
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/320/1.jpg" alt="Bandarban" class="img-responsive"><span class="cover">SightSeeing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/320/2.jpg" alt="Sylhet" class="img-responsive"><span class="cover">SightSeeing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/320/3.jpg" alt="Sylhet" class="img-responsive"><span class="cover">SightSeeing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/320/4.jpg" alt="Bandarban" class="img-responsive"><span class="cover">Mountain Hiking</span></a>
						
						
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 gallery">
				<ul class="row slick" data-slick='{"autoplay": true, "autoplaySpeed": 4000, "slidesToShow": 1, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 5000, "arrows": false}'>
						
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/426/1.jpg" alt="bandarban" class="img-responsive"><span class="cover">SightSeeing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/426/2.jpg" alt="Sundorban" class="img-responsive"><span class="cover">Fishing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/426/3.jpg" alt="Kuakata" class="img-responsive"><span class="cover">SightSeeing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/426/4.jpg" alt="Dhaka" class="img-responsive"><span class="cover">River Cruising</span></a>

						
				</ul>
			</div>
			<div class="col-xs-12 col-sm-5 gallery">
				<ul class="row slick" data-slick='{"autoplay": true, "autoplaySpeed": 7000, "slidesToShow": 1, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 5000, "arrows": false}'>
						
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/533/1.jpg" alt="Cox's Bazar" class="img-responsive"><span class="cover">SightSeeing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/533/2.jpg" alt="Dhaka" class="img-responsive"><span class="cover">Mangrove Forest Visit</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/533/3.jpg" alt="Bandaban" class="img-responsive"><span class="cover">River Cruising</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/533/4.jpg" alt="Bandaban" class="img-responsive"><span class="cover">SightSeeing</span></a>
						
					
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-4 gallery">
				<ul class="row slick" data-slick='{"autoplay": true, "autoplaySpeed": 4000, "slidesToShow": 1, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 5000, "arrows": false}'>
						
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/426/5.jpg" alt="Cox's Bazar" class="img-responsive"><span class="cover">River Cruising</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/426/6.jpg" alt="Sundorban" class="img-responsive"><span class="cover">SightSeeing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/426/7.jpg" alt="Jhenaidah" class="img-responsive"><span class="cover">SightSeeing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/426/8.jpg" alt="Bandorban" class="img-responsive"><span class="cover">SightSeeing</span></a>

						
				</ul>
			</div>
			<div class="col-xs-12 col-sm-5 gallery">
				<ul class="row slick" data-slick='{"autoplay": true, "autoplaySpeed": 7000, "slidesToShow": 1, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 5000, "arrows": false}'>
						
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/533/5.jpg" alt="Dhaka" class="img-responsive"><span class="cover">Golfing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/533/6.jpg" alt="Shundorban" class="img-responsive"><span class="cover">SightSeeing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/533/7.jpg" alt="Dhaka" class="img-responsive"><span class="cover">SightSeeing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/533/1.jpg" alt="Cox's Bazar" class="img-responsive"><span class="cover">SightSeeing</span></a>
						
						
				</ul>
			</div>
			<div class="col-xs-12 col-sm-3 gallery">
				<ul class="row slick" data-slick='{"autoplay": true, "autoplaySpeed": 4000, "slidesToShow": 1, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 5000, "arrows": false}'>
						
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/320/5.jpg" alt="Chittagong" class="img-responsive"><span class="cover">Fishing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/320/6.jpg" alt="Dhaka" class="img-responsive"><span class="cover">City Tour</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/320/7.jpg" alt="Bogalake" class="img-responsive"><span class="cover">SightSeeing</span></a>
						
						
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 gallery">
				<ul class="row slick" data-slick='{"autoplay": true, "autoplaySpeed": 7000, "slidesToShow": 1, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 5000, "arrows": false}'>
						
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/639/1.jpg" alt="Kuakata" class="img-responsive"><span class="cover">Mangrove Forest Visit</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/639/2.jpg" alt="Sundorban" class="img-responsive"><span class="cover">Beach Visit</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/639/3.jpg" alt="Dhaka" class="img-responsive"><span class="cover">City Tour</span></a>
					
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 gallery">
				<ul class="row slick" data-slick='{"autoplay": true, "autoplaySpeed": 10000, "slidesToShow": 1, "centerPadding": 0, "pauseOnHover": true, "fade": true, "centerMode": true, "adaptiveHeight": true, "accessibility": false, "infinit": true, "speed": 5000, "arrows": false}'>
						
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/639/4.jpg" alt="Dhaka" class="img-responsive"><span class="cover">River Cruising</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/639/5.jpg" alt="Kuakata" class="img-responsive"><span class="cover">Surfing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/639/6.jpg" alt="Sundorban" class="img-responsive"><span class="cover">SightSeeing</span></a>
						<a href="#"><img src="/public/img/support/beautiful-bangladesh/639/7.jpg" alt="Sundorban" class="img-responsive"><span class="cover">Surfing</span></a>
					
				</ul>
			</div>
		</div>
	</section>
	
	<!-- =========================
		ROW 4 | BEAUTIFUL BANGLADESH
	============================== -->
	
	<!-- =========================
		ROW 5 | LEISURE ACTIVITIES
	============================== -->
	
	<section class="row leisure-activities">
		<div class="container">
			
			<h2 class="gray-texts">Leisure Activities</h2>
			<p class="gray-texts">
				Our active leisure team can arrange, assist and guide leisure activities during the stay of our clients’ management team, engineers and staff. The country is full of natural beauty: green landscape, rivers, mountains & hills, the world’s longest unbroken beach, coral islands and many more.  
			</p>
			<div class="row text-center">
				<img src="/public/img/support/accomodation/leasure icons.png" alt="WebHawks IT Image" class="img-responsive">
			</div>
			
		</div>
	</section>
	
	<section class="leisure-activities-img row white-bg">
		<img src="/public/img/support/accomodation/1.jpg" alt="Leisure activities" class="img-responsive col-xs-12 col-sm-4">
		<img src="/public/img/support/accomodation/2.png" alt="Leisure activities" class="img-responsive col-xs-12 col-sm-4">
		<img src="/public/img/support/accomodation/3.png" alt="Leisure activities" class="img-responsive col-xs-12 col-sm-4">
	</section>
	
	<!-- =========================================
		ROW 5 | END LEISURE ACTIVITIES
	============================================== -->
	
	
	<!-- =========================================
		ROW 6 | ACCOMODATION
	============================================== -->
	
	<section class="row accommodation">
		<article class="col-xs-12 col-sm-7">
			
			<div class="details">
				<h2><span class="grays-text dark-blue-bg"> Accomodation </span></h2>
				<p class="white-text">
					For training, project launch, project planning, team kick-start; we believe the physical interaction between the team members is very important to develop a bond. Therefore, we facilitate short and long-term world class fully furnished accommodation facilities with a janitor, catering, laundry, and assistance services at 1/3 the cost of 5 star hotels.
				</p>
			</div>
			
		</article>
		<aside class="col-xs-12 col-sm-5">
			<div class="row gallery">
				<ul class="owl-carousel enable-owl-carousel" data-wow-delay="0.7s" data-navigation="false" 
							data-pagination="false" data-single-item="true" data-auto-play="true" data-transition-style="false" 
							data-main-text-animation="false" data-min600="1" data-min800="1" data-min1200="1">
					
						<a href="#"><img src="/public/img/support/beautiful-bangladesh_02.jpg" alt="WebHawks IT Image" class="img-responsive"></a>
					
				</ul>
			</div>
			<div class="row gallery">
				<ul class="owl-carousel enable-owl-carousel" data-wow-delay="0.7s" data-navigation="false" 
							data-pagination="false" data-single-item="true" data-auto-play="true" data-transition-style="false" 
							data-main-text-animation="false" data-min600="1" data-min800="1" data-min1200="1">
					
						<a href="#"><img src="/public/img/support/beautiful-bangladesh_03.jpg" alt="WebHakws IT Image" class="img-responsive"></a>
					
				</ul>
			</div>
			<div class="row gallery">
				<ul class="owl-carousel enable-owl-carousel" data-wow-delay="0.7s" data-navigation="false" 
							data-pagination="false" data-single-item="true" data-auto-play="true" data-transition-style="false" 
							data-main-text-animation="false" data-min600="1" data-min800="1" data-min1200="1">
					
						<a href="#"><img src="/public/img/support/beautiful-bangladesh_05.jpg" alt="WebHakws IT Image" class="img-responsive"></a>
					
				</ul>
			</div>
		</aside>
	</section>
	
	<!-- =========================================
		ROW 6 | END ACCOMODATION
	============================================== -->
	
	
	<!-- =========================================
		ROW 6 | CATERRING
	============================================== -->
	
	<section class="row catering-img">
		<img src="/public/img/support/cattering.jpg" alt="WebHawks IT Image" class="img-responsive">
	</section>
	
	<section class="row catering">
		<div class="container">
			<h2 class="white-text">Catering</h2>
			<p class="white-text">
				We developed our kitchen service based on the needs for health & and convenience for our employees and clients from overseas.  
			</p>
		</div>
	</section>
	
	<section class="row catering-slides">
				
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/thai.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>Thai Cuisine</summary>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/spanish.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>Spanish Cuisine</summary>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/maxican.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>Mexican Cuisine</summary>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/japanese.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>Japanese Cuisine</summary>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/italian.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>Italian Cuisine</summary>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/south-indian.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>South-Indian (vegetarian) Cuisine</summary>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/indian.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>Indian Cuisine</summary>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/bangali.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>Bengali Cuisine</summary>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/see-food.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>Seafood</summary>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/fast-food.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>Fast Food</summary>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/grill.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>Grill & BBQ</summary>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 slide">
					<img src="/public/img/support/food-menu/juice.jpg" alt="WebHawks IT Image" class="img-reponsive">
					<summary>Fresh Juice</summary>
				</div>
			
	</section>
	
	<!-- =========================================
		ROW 6 | END CATTERING
	============================================== -->
	
	<!-- =========================================
		ROW 6 | MEDICAL
	============================================== -->
	
	<section class="row medical">
		<div class="container">
			<h2 class="dark-Grey-text">Medical Emergency</h2>
			<p>
				For unexpected medical emergencies, we have medical assistance support service in Bangladesh and also abroad (Singapore and Bangkok).  
			</p>
		</div>
	</section>
	
	<!-- =========================================
		ROW 6 | END MEDICAL
	============================================== -->
	
	
	
@stop
        