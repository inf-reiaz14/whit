@extends('public.layouts.layout2')
@section('title')@if(\App\Setting::find(1)){{\App\Setting::find(1)->application_name}}@else Application name @endif @stop

@section('meta')
<meta name="title" Content="IT development team, IT support, IT programmer, Design, Digital Marketing, Back Office " />
	<meta name="keywords" Content=" @if( count($tmsslides_h2) > 0) @foreach( $tmsslides_h2 as $tmsslides_h ){{ $tmsslides_h->meta_tag.',' }} @endforeach @endif " />
	<meta name="description" Content=" @if( count($tmsslides_h2) > 0) @foreach( $tmsslides_h2 as $tmsslides_h ){{ $tmsslides_h->meta_description }} @endforeach @endif " />
@stop


@section('js')
	
		
	<script type="application/ld+json">
		{
		  "@context": "http://www.webhawksit.com/",
		  "@type": "http://www.basis.org.bd/index.php/members_area/member_detail/1155",
		  "url": "http://www.webhawksit.com/",
		  "contactPoint": [{
		    "@type": "http://webhawksit.com/#contact-area",
		    "telephone": "+88-02-58070348",
		    "contactType": "IT Service"
		  }]
		}
	</script>
	
@stop

@section('main')
<?php include_once("analyticstracking.php") ?>
<style type="text/css">
     .iti-flag {background-image: url("/public/flags.png");}
</style>

<!-- =========================
    MAIN CONTENT
============================== -->
<main class="section dark-blue-bg body-fix" id="main">
	
	<!-- =========================
		ROW 1 | Intro banner
	============================== -->

		<div id="myCarousel" class="carousel slide my_carosel_top" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">

				<div class="item active">
					<img src="/public/slider/6.jpg" alt="Chania" width="100%">
					<div class="carousel-caption slide-1">
						<div class="content">
							<h3>“power of teamwork”</h3>
							<h3 class="text-2">devOps + trained professionals</h3>
						</div>
						<a href="" class="">GET STARTED</a>
					</div>
				</div>

				<div class="item">
					<img src="/public/slider/1.jpg" alt="Chania" width="100%">
					<div class="carousel-caption slide-1">
						<div class="content">
							<h3>“power of teamwork”</h3>
							<h3 class="text-2">devOps + trained professionals</h3>
						</div>
						<a href="" class="">GET STARTED</a>
					</div>
				</div>

				<div class="item">
					<img src="/public/slider/2.jpg" alt="Chania" width="100%">
					<div class="carousel-caption slide-1">
						<div class="content">
							<h3>“power of teamwork”</h3>
							<h3 class="text-2">devOps + trained professionals</h3>
						</div>
						<a href="" class="">GET STARTED</a>
					</div>
				</div>

				<div class="item">
					<img src="/public/slider/3.jpg" alt="Chania" width="100%">
					<div class="carousel-caption slide-1">
						<div class="content">
							<h3>“power of teamwork”</h3>
							<h3 class="text-2">devOps + trained professionals</h3>
						</div>
						<a href="" class="">GET STARTED</a>
					</div>
				</div>

				<div class="item">
					<img src="/public/slider/4.jpg" alt="Chania" width="100%">
					<div class="carousel-caption slide-1">
						<div class="content">
							<h3>“power of teamwork”</h3>
							<h3 class="text-2">devOps + trained professionals</h3>
						</div>
						<a href="" class="">GET STARTED</a>
					</div>
				</div>

				<div class="item">
					<img src="http://localhost/public/slider/5.jpg" alt="Chania" width="100%">
					<div class="carousel-caption slide-1">
						<div class="content">
							<h3>“power of teamwork”</h3>
							<h3 class="text-2">devOps + trained professionals</h3>
						</div>
						<a href="" class="">GET STARTED</a>
					</div>
				</div>

			</div>


		</div>

	<!-- =========================
		END ROW 1
	============================== -->
    
	
    
	
	<!-- =========================
		ROW 2 | Career and Interns
	============================== -->
    <div class="homepage-tms">
		<div class="container">
			<div class="row r_bg_color">
				<div class="col-md-6 text-center">
					<div class="img_section">
						<img src="/public/img/reiaz/teamsourcing.png" alt="">
					</div>
					<div class="content_section">
						<a href="" class="week_trial">
							click for a week trial
						</a>
						<a href="" class="skills_btn">
							CLICK FOR SKILLS
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tms_content text-right">
						Local CTO & PM Support
					</div>
					<p class="text-right tms_text">The WebHawks IT flagship service, TeamSourcing, enables clients in the developed world to hire top tier
						engineering talent for a fraction of the cost throughout Southeast Asia. These staff works closely with
						your local team on your time zone.
					</p>
					<a href="" class="btn_get">GET STARTED</a>
				</div>
			</div>
		</div>
	</div>

	<div class="homepage-tms1">
		<div class="container">
			<div class="row">
				<div class="row m_t_b r_bg_color1">
					<div class="col-md-6">
						<div class="tms_content">
							Appoint local CTO + dev-ops + Team
						</div>
						<p class="text-left tms_text">
							WebHawks IT can quickly assemble project strike teams to tackle common technical projects:  From web portals, to mobile applications to testing teams to documentation.  We leverage the latest thinking in modern agile methodologies, dev-ops best practices, and the power of continuous delivery to ensure effective communication and consistent, timely, reliable results.


						</p>
						<a href="" class="btn_get1">GET STARTED</a>
					</div>
					<div class="col-md-6 text-center">
						<div class="img_section">
							<img src="/public/img/reiaz/LocalSourcing.png" alt="">
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="homepage-tms">
		<div class="container">
			<div class="row r_bg_color">
				<div class="col-md-6 text-center">
					<div class="img_section">
						<img src="/public/img/reiaz/ps.png" alt="">
					</div>

				</div>
				<div class="col-md-6">
					<div class="tms_content  text-right">
						dedicated CTO + IT dev team
					</div>
					<p class="text-right tms_text">For partners with clients who could benefit from both TeamSourcing & LocalSourcing, there is PartnerSourcing.  Partnerships are limited to specific geographies and industries, as well as by the site and breadth of any given partner’s business relationships.
					</p>
					<a href="" class="btn_get2">GET STARTED</a>
				</div>
			</div>
		</div>
	</div>

	<div class="homepage-tms1">
		<div class="container">
			<div class="row">
				<div class="row m_t_b r_bg_color1">
					<div class="col-md-6">
						<div class="tms_content">
							PM+ dev-ops + team
						</div>
						<p class="text-left tms_text">
							Leveraging experience crafting digital solutions for clients around the globe, the WebHawks Labs R&D team is hard at work cobbling together next-generation ERP solutions.  Be sure to let us know if you would like to learn more!
						</p>
						<a href="" class="btn_get3">GET STARTED</a>
					</div>
					<div class="col-md-6 text-center">
						<div class="img_section">
							<img src="/public/img/reiaz/ls.png" alt="">
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- =========================
		END ROW 2
	============================== -->
    
    <!-- =========================
		Case Study
	============================== -->

	<div class="casestudy">
		<h2 class="light-Grey-text big-heading margin-top-hadding">
			<center>
				CASE STUDY
			</center>
		</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="myCarousel1" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators indicators_item">
							<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel1" data-slide-to="1"></li>
							<li data-target="#myCarousel1" data-slide-to="2"></li>
							<li data-target="#myCarousel1" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">

							<div class="item active">
								<div class="content_case">
									<h1>Case Study-1</h1>
									<h3 class="text-2">Study topic and research result</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
									</p>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
									</p>
								</div>
							</div>
							<div class="item">
								<div class="content_case">
									<h1>Case Study-2</h1>
									<h3 class="text-2">Study topic and research result</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
									</p>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
									</p>
								</div>
							</div>
							<div class="item">
								<div class="content_case">
									<h1>Case Study-3</h1>
									<h3 class="text-2">Study topic and research result</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
									</p>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
									</p>
								</div>
							</div>
							<div class="item">
								<div class="content_case">
									<h1>Case Study-3</h1>
									<h3 class="text-2">Study topic and research result</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
									</p>
									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
									</p>
								</div>
							</div>

						</div>


					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- =========================
		Case Study
	============================== -->
    	
	<!-- =========================
		ROW 8 | TESTIMONIAL
	============================== -->
	
	<div class="scrollreveal row testimonial">
		<h2 class="light-Grey-text big-heading margin-top-hadding">
			<center>
				Testimonials
			</center>
		</h2>
		<div class="container" second-source="/second/testimonials" second-delay="2000">
			<p class="text-muted"><i>Loading Testimonials...</i></p>
		</div>
	</div>
	
	
	<!-- =========================
		END ROW 8 | TESTIMONIAL
	============================== -->


    <!-- =========================
		owl carasol
	============================== -->

	<div class="casestudy">
		<h2 class="light-Grey-text big-heading margin-top-hadding">
			<center>
				Our experience working with the companies
			</center>
		</h2>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 transparent-bg contact-list-holder1">
					<ul id="img_icon_slide" class="nav nav-tabs nav-justified owl-carousel enable-owl-carousel verticale-owl-controls contact-list"
						data-wow-delay="0.7s"
						data-navigation="true" 
						data-pagination="false"
						data-single-item="false"
						data-auto-play="false"
						data-transition-style="false"
						data-main-text-animation="false" 
						data-min600="2" 
						data-min800="3" 
						data-min1200="4">
						
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>

					</ul>
				</div>
			</div>
		</div>
	</div>

    <!-- =========================
		owl carasol
	============================== -->
    

    <!-- =========================
		slider 2
	============================== -->
    
	

		<h2 class="light-Grey-text big-heading margin-top-hadding">
			<center>
				Our experience working with the companies
			</center>
		</h2>

		<div id="myCarousel2" class="carousel slide" data-ride="carousel">
			
			<!-- Indicators -->

			<ol class="carousel-indicators carousel-indicators1">
				<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel2" data-slide-to="1"></li>
				<li data-target="#myCarousel2" data-slide-to="2"></li>
				<li data-target="#myCarousel2" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">

				<div class="item active">
					<img src="/public/img/reiaz/slide_2.png" alt="Chania" width="100%">
				</div>

				<div class="item">
					<img src="/public/img/reiaz/slide_2.png" alt="Chania" width="100%">
				</div>

				<div class="item">
					<img src="/public/img/reiaz/slide_2.png" alt="Chania" width="100%">
				</div>

				<div class="item">
					<img src="/public/img/reiaz/slide_2.png" alt="Chania" width="100%">
				</div>

			</div>


		</div>


    <!-- =========================
		slider 2
	============================== -->
    



	<!-- =========================
		ROW 6 | IT SKILL SET
	============================== -->
	
	
	<div class="pix_row scrollreveal row it-skills" id="teamSourceTarget">	
		<div class="container" second-source="/second/it-skills" second-delay="1500">
			<p class="text-muted"><i>Loading IT Skill Sets...</i></p>
		</div>
	</div>
	
	<!-- =========================
		END ROW 6
	============================== -->
    
    
	<!-- =========================
		ROW 4 | Applications
	============================== -->
	
    <div class="row dark-blue-bg1 homepage-applications" id="LIS">	
		<div class="container">
			
			<div class="col-xs-12 transparent-bg">
				<h2 id="TMS_section" class="light-Grey-text1 big-heading margin-top-hadding">
					<center>The LiSourcing Application developed by WebHawks IT</center>
				</h2>
			</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 transparent-bg contact-list-holder1">
					<ul id="img_icon_slide" class="nav nav-tabs nav-justified owl-carousel enable-owl-carousel verticale-owl-controls contact-list"
						data-wow-delay="0.7s"
						data-navigation="true" 
						data-pagination="false"
						data-single-item="false"
						data-auto-play="false"
						data-transition-style="false"
						data-main-text-animation="false" 
						data-min600="2" 
						data-min800="3" 
						data-min1200="4">
						
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
							<li class="">
								<img src="/public/img/reiaz/company/ab.png" alt="">
							</li>
						
					</ul>
				</div>
			</div>
		</div>

			<div class="col-xs-12 transparent-bg">
				<div class="brand-wrap ">
					@if($applications)
						@foreach($applications as $application)
						<div class="brand-box team-box" data-toggle="tooltip" data-placement="top" title="{{$application->name}}">
							<a href="{{action('StaticPageController@application', $application->id)}}" target="_blank"><img class="team-box-img" align="top" data-src="{{$application->logo_photo}}"  alt="WebHawks IT - {{$application->name}}"/></a>
							<meta name="name" content="{{$application->meta_tag}}" />
							<meta name="description" content="{{$application->meta_description}}" />
						</div>
						@endforeach
					@endif
				</div>
			</div>
			
									
						
			<div class="col-xs-12 transparent-bg btn-popups">
				<center>
					<a id="contact-area-popup" href="#" data-toggle="modal" data-target="#my-modal" class="btn btn-font btn-default transparent-bg blue-text blue-border push-up-20 f-s-30 btn-popup">Schedule meeting with sales</a>
				</center>
			</div>

			
			
					
		</div>
	</div>
	
	<!-- =========================
		END ROW 4
	============================== -->
	






	<!-- =======================================
		ROW 9 | WE WORK TOGETHER
	============================================ -->
	
		<div class="row">
		<div class="col-xs-12 transparent-bg">
			<div class="scrollreveal row case-study hidden-xs" >
				<h2 class="light-Grey-text big-heading margin-top-hadding">
					<center>
						OUR TEAM
					</center>
				</h2>
			</div>
		</div>
	</div>
	
	<div id="advisors" class="scrollreveal row work-together" second-source="/second/work-together" second-delay="2500">
		<p class="text-muted"><i>Loading Advisors...</i></p>
		<div class="row height-600"></div>
	</div>
	
	
	<!-- =========================
		END ROW 9
	============================== -->
	
	


	
	
	<div class="row adviser-modals" >
		@if($advisors->first())
			@foreach($advisors->get() as $advisor1)
				<div class="modal fade group1" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="advisor-{{$advisor1->id}}">
					<div class="modal-dialog" role="document">
						<div class="modal-content transparent-bg">
							<div class="modal-header">
								<h4 class="modal-title white-text big-heading" id="gridSystemModalLabel">WE WORK TOGETHER</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-xs-2 col-sm-4 adviser-img">
										<img src="{{$advisor1->image_photo}}" alt="WebHawks IT - {{$advisor1->name}}" class="img-responsive">
									</div>
									<div class="col-xs-5 col-sm-4 adviser-name">
										<h2 class="blue-text resize">{{$advisor1->name}}</h2>
										<h3 class="blue-text resize">{{$advisor1->designation}}</h3>
										<small class="blue-text">from {{$advisor1->location}}</small>
										<p>
											{{$advisor1->i_am}}
											@if(strlen($advisor1->residence) > 0)
											<br>
											Residence: {{$advisor1->residence}}
											@endif
											<br>
											{{$advisor1->email}}
										</p>
										<p class="advisor-links">
											<a class="" @if($advisor1->google_plus_link) href="{{$advisor1->google_plus_link}}" target="_blank" @endif><img src="/public/img/applications/gplus.png" alt="Advisor's Google Plus Profile"></a>
											<a class="" @if($advisor1->skype_link) href="{{$advisor1->skype_link}}" target="_blank" @endif><img src="/public/img/applications/skype.png" alt="Advisor's Skype"></a>
											<a class="" @if($advisor1->linkedin_link) href="{{$advisor1->linkedin_link}}" target="_blank" @endif><img src="/public/img/applications/linkedin.png" alt="Advisor's Linkedin Profile"></a>
											<a class="hidden" @if($advisor1->twitter_link) href="{{$advisor1->twitter_link}}" target="_blank" @endif><img src="/public/img/applications/twitter.png" alt="Advisor's Twitter"></a>
											<a class="hidden" @if($advisor1->facebook_link) href="{{$advisor1->facebook_link}}" target="_blank" @endif><img src="/public/img/applications/fb.png" alt="Advisor's Facebook Page"></a>
											<!--<a href="{{action('StaticPageController@adviser', $advisor1->id)}}" target="_blank"><img src="/public/img/applications/whit.png" alt="Advisor's WebHawks IT page"></a>-->
										</p>
									</div>
									<div class="col-xs-6  col-sm-4 adviser-brief justify">
										<p>
											{{$advisor1->summary}}
										</p>
										<p class="text-center"><a class="blue-text" href="{{action('StaticPageController@adviser', $advisor1->id)}}" target="_blank">Read Further...</a></p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 text-center margin-top-10">
								<button type="button" class="push-up-20 btn btn-default transparent-bg blue-text blue-border" data-dismiss="modal">Close</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			@endforeach
		@endif
				<div class="modal fade group1" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="adviser-upal">
					<div class="modal-dialog" role="document">
						<div class="modal-content transparent-bg">
							<div class="modal-header">
								<h4 class="modal-title white-text big-heading" id="gridSystemModalLabel">WE WORK TOGETHER</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-xs-2 col-sm-4 adviser-img">
										<img src="/public/img/advisers/upal.jpg" alt="Upal Mohammed" class="img-responsive">
									</div>
									<div class="col-xs-6 col-sm-8 adviser-name">
										<h2 class="blue-text resize">Upal Mohammed</h2>
										<h3 class="blue-text resize">Founder & CEO, WebHawks IT</h3>
										<small class="blue-text">from Dhaka, Bangladesh</small>
										<p>
											I am CEO at WebHawks IT
											<br>
											Residence: WebHawks IT, Dhaka, Bangladesh.
											<br>
											upalism@webhawksit.com
										</p>
										<p class="advisor-links">
											<a class="" href="#" target="_blank" ><img src="/public/img/applications/gplus.png" alt="Advisor's Google Plus Profile"></a>
											<a class="" href="#" target="_blank" ><img src="/public/img/applications/skype.png" alt="Advisor's Skype"></a>
											<a class="" href="#" target="_blank" ><img src="/public/img/applications/linkedin.png" alt="Advisor's Linkedin Profile"></a>
											<a class="hidden" href="#" target="_blank" ><img src="/public/img/applications/twitter.png" alt="Advisor's Twitter"></a>
											<a class="hidden" href="#" target="_blank" ><img src="/public/img/applications/fb.png" alt="Advisor's Facebook Page"></a>
										</p>
									</div>
									<div class="col-xs-5 col-sm-4 adviser-brief justify">
										<p class="text-center hidden"><a class="blue-text" href="about-us#love-and-faith" target="_blank">Read Further...</a></p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 text-center margin-top-10">
								<button type="button" class="push-up-20 btn btn-default transparent-bg blue-text blue-border" data-dismiss="modal">Close</button>
							</div>
							<!--<div class="modal-footer col-xs-6 text-center">-->
							<!--	<button type="button" class="push-up-20 btn btn-default transparent-bg blue-text blue-border" data-dismiss="modal">Close</button>-->
							<!--</div>-->
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

	</div>
	





<div class="modal fade" tabindex="-1" role="dialog" id="my-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Talent Acquisition Manager</h4>
      </div>
      <div class="modal-body">
		
		{!! Form::open([ 'url'=> action('StaticPageController@postTalentAcquisitionRequest'), 'method'=> 'POST', 'id'=> 'talent' ]) !!}
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="name" class="form-control" name="name"  placeholder="Name">
		  </div>
		  
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" placeholder="E-mail">
		  </div>
		  
		  <div class="form-group">
		    <label for="country">Country</label>
		    <select id="countries_timezones1" name="country" class="form-control custom-from crs-country bfh-countries" data-country="US" data-region-id="one"></select>
		  </div>
			
		  <div class="form-group">
		    <label for="City">City</label>
		    <select class="form-control" name="city" id="one"></select>
		  </div>
		  
		  <div class="form-group">
		    <label for="phone">Phone Number</label>
		    <input type="tel" id="phone" name="phone" class="form-control">
		  </div>
		  
		  <div class="form-group">
		    <label for="skype">Skype</label>
		    <input type="skype" class="form-control" name="skype" placeholder="Skype ID">
		  </div>
			
		  <div class="form-group">
		    <label for="City">Timezone </label>
		    <select class="form-control bfh-timezones" name="timezone"  data-country="countries_timezones1"  id="one">
		      <option value="-12.0">(GMT -12:00) Eniwetok, Kwajalein</option>
		      <option value="-11.0">(GMT -11:00) Midway Island, Samoa</option>
		      <option value="-10.0">(GMT -10:00) Hawaii</option>
		      <option value="-9.0">(GMT -9:00) Alaska</option>
		      <option value="-8.0">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
		      <option value="-7.0">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
		      <option value="-6.0">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
		      <option value="-5.0">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
		      <option value="-4.0">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
		      <option value="-3.5">(GMT -3:30) Newfoundland</option>
		      <option value="-3.0">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
		      <option value="-2.0">(GMT -2:00) Mid-Atlantic</option>
		      <option value="-1.0">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
		      <option value="0.0">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
		      <option value="1.0">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
		      <option value="2.0">(GMT +2:00) Kaliningrad, South Africa</option>
		      <option value="3.0">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
		      <option value="3.5">(GMT +3:30) Tehran</option>
		      <option value="4.0">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
		      <option value="4.5">(GMT +4:30) Kabul</option>
		      <option value="5.0">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
		      <option value="5.5">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
		      <option value="5.75">(GMT +5:45) Kathmandu</option>
		      <option value="6.0">(GMT +6:00) Almaty, Dhaka, Colombo</option>
		      <option value="7.0">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
		      <option value="8.0">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
		      <option value="9.0">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
		      <option value="9.5">(GMT +9:30) Adelaide, Darwin</option>
		      <option value="10.0">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
		      <option value="11.0">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
		      <option value="12.0">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
		    </select>
		  </div>
		  
		  <div class="form-group">
		    <label for="description">Description</label>
		    <textarea class="form-control" rows="6" name="description" placeholder="Simple Description ....."></textarea>
		  </div>
		  
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </div>
      
		{!! Form::close() !!}
      	
      </div>

	
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

	
@stop
        