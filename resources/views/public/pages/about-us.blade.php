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
	<div class="pix_row scrollreveal row aboutus-top dark-blue-bg">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="custom_04 aboutus-banner">
				
			    <h1 class="white-text">
			    	<span class="pull-left push-down-20">Successful people</span>
			    	<br>
			    	<span class="pull-right push-up-20">Powerful teamwork</span>
			    </h1>
			    
			</div>
		</div>
		<div class="fb-slider" second-source="/second/fb" second-delay="500">
			<p class="text-muted"><i>Loading WebHawks IT Facebook albums...</i></p>
		</div>
    </div>
	<!-- =========================
		END ROW 1
	============================== -->
    
	
	<!-- =========================
		ROW 2 | The Company
	============================== -->
	
	<section class="row the-company">
		
		<div class="container transparent-bg gray-texts">
		
			<h2 class="company-heading gray-texts">The Company</h2>
			
			<p class="company-text">
				WebHawks IT started its journey in 2011 and since then we have been experimenting with our business models as well as developing project based IT product/services for clients locally and abroad. 
			</p>
			<p class="company-text">
				In 2015, we officially incorporated in Bangladesh; in the same year we introduced our TeamSourcing IT service business model in Japan and USA. Our TeamSourcing business model complements the traditional IT outsourcing model that allows clients to access dedicated team and higher profit margin.
			</p>
			<p class="company-text">
				Most of our IT services are produced and delivered from Bangladesh to cancel ‘the’ clients around the globe: Japan; USA; Canada; Hong Kong; Germany and Australia.
			</p>
			
			<div class="col-xs-12 company-graphs">
				
				<div class="col-xs-3 graph-item item1">
					
					<ul class="graph">
						<li class="graph-column-1">
							<h3 class="light-Grey-text">Global Expansion</h3>
							<p class="dark-Grey-bg white-text">Six countries</p>
						</li>
						<li class="blue-bg white-text graph-column-2">
							<p>Ten countries</p>
						</li>
					</ul>
					<p class="gray-texts">2015-2017</p>
				</div>
				<div class="col-xs-3 graph-item item1">
					
					<ul class="graph">
						<li class="graph-column-1">
							<h3 class="light-Grey-text">Our Products</h3>
							<p class="dark-Grey-bg white-text">Seventeen</p>
						</li>
						<li class="blue-bg white-text graph-column-2">
							<p>Twenty Five</p>
						</li>
					</ul>
					<p class="gray-texts">2015-2017</p>
				</div>
				<div class="col-xs-3 graph-item item1">
					
					<ul class="graph">
						<li class="graph-column-1">
							<h3 class="light-Grey-text">Our IT Heroes</h3>
							<p class="dark-Grey-bg white-text">35+ fulltime</p>
						</li>
						<li class="blue-bg white-text graph-column-2">
							<p>400+ fulltime</p>
						</li>
					</ul>
					<p class="gray-texts">2015-2017</p>
				</div>
				<div class="col-xs-3 graph-item item1">
					
					<ul class="graph">
						<li class="graph-column-1">
							<h3 class="light-Grey-text">Our sales rep</h3>
							<p class="dark-Grey-bg white-text">Three</p>
						</li>
						<li class="blue-bg white-text graph-column-2">
							<p>Fiften</p>
						</li>
					</ul>
					<p class="gray-texts">2015-2017</p>
				</div>
				
			</div>
		
		</div>
		
	</section>
	
	<!-- =========================
		END ROW 2
	============================== -->
    
	<!-- =========================
		ROW 3 | Love and Faith
	============================== -->
	
	<section class="row love-faith white-bg" id="love-and-faith">
		<div class="container">
			
			<center>
				<h2 class="big-heading blue-text">Love & Faith</h2>
				<p class="col-sm-8 col-sm-offset-2 love-faith-text">
					We love what we do, dedicate our time and effort honestly towards making a big impact together. We have faith in the power of Teamwork, we work together, we appreciate together; we share our success together.

				</p>
			</center>
			
			<div class="col-xs-12 rows row1">
				<div class="col-xs-12 col-sm-6">
					<h2 class="blue-text">Vision</h2>
					<p class="blue-text margin-button-fix">
						Life long assistant! Learning by assisting is our culture & that`s how we manage our risks and make decisions to make an impact together. We love, we have faith, we decide, we make an impact as a team.
						<br>
						<br>
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 xs-pull-left">
					<img src="/public/img/company/Vision.jpg" alt="WebHawks IT Image" class="img-responsive">
				</div>
			</div>
			<div class="col-xs-12 rows row2">
				<div class="col-xs-12 col-sm-6 xs-pull-left">
					<img src="/public/img/company/Freedom.jpg" alt="WebHawks IT Image" class="img-responsive">
				</div>
				<div class="col-xs-12 col-sm-6">
					<h2>Freedom</h2>
					<p>
						Respect for uniqueness!
We assist our team to find their core strengths, we encourage crazy ideas & support each other in  experimenting. We participate in and encourage unique thoughts.
  
					</p>
				</div>
			</div>
			<div class="col-xs-12 rows row3">
				<div class="col-xs-12 col-sm-6">
					<h2 class="orange-Grey-text">Focus</h2>
					<p class="orange-Grey-text">
						We focus on our core strength: the youth of the country which is the fundamental part of our business model -the power behind WebHawks IT TeamSourcing. We are committed to invest in skill development and nurture this natural resource to turn it into a competitive advantage as our long-term business strategy.
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 xs-pull-left">
					<img src="/public/img/company/Focus.jpg" alt="WebHawks IT Image" class="img-responsive">
				</div>
			</div>
			<div class="col-xs-12 rows row4">
				<div class="col-xs-12 col-sm-6 xs-pull-left">
					<img src="/public/img/company/Funployment.jpg" alt="WebHawks IT Image" class="img-responsive">
				</div>
				<div class="col-xs-12 col-sm-6">
					<h2>Funployment</h2>
					<p>
						We are very serious about having fun inside the office, and being as  relaxed and comfortable as we can inside the box! We are devoted to establishing a five star level working experience for our talents: benefit package; work place hospitality; lifetime employment and retirement package. 
					</p>
				</div>
			</div>
			<div class="col-xs-12 rows row5">
				<div class="col-xs-12 col-sm-6">
					<h2>Passion</h2>
					<p>
						A self made professional a life long assistant; a decision maker; a consistently stubborn character who loves to take responsibility as a leader and to pass the same philosophy to  successors; we practice it, it`s a relay race !
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 xs-pull-right">
					<img src="/public/img/company/Passion.jpg" alt="WebHawks IT Image" class="img-responsive">
				</div>
			</div>
			
		</div>
	</section>
	
	<!-- =========================
		END ROW 3
	============================== -->
    
	
	<!-- =========================
		ROW 4 | FUTURE
	============================== -->
	
	<section class="row future">
		<div class="container">
			
			<center>
				<h2 class="gray-texts big-heading">We are ready! Future is tomorrow</h2>
				<p class="gray-texts mid-para justify">
					2.5% of the world’s population lives in Bangladesh in approximately 55 thousand square kilometers. Surprisingly, the average age of the population is 25 – 27 years. Besides having an economic growth average of 6% every year; the economy is emerging very fast.
					<br>
					<br>
					The youth needs to be aligned as a competitive advantage and we believe our business model has tremendous scope to scale our IT service in different sectors of IT development and maintenance for small and big enterprise.
					<br>
					<br>
					Bangladesh, one of the most densely populated countries produces thousands of IT graduates each year. As a result, the local job market is very competitive; moreover, skilled professionals face challenges in terms of job environment, and opportunity to grow. In WebHawks IT, we focus on the career growth of our talents and on the creation of more opportunities for them to work in a global market.  
					<br>
					<br>
					Committing good quality services, WebHawks IT confirms its local presence to communicate with the clients in different countries time to time. In addition, we arrange a full time Country Manager to satisfy our client’s day to day communication.
				</p>
			</center>
			
		</div>
	</section>
	
	<!-- =========================
		END ROW 4
	============================== -->
	


@stop
        