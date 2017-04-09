@extends('public.layouts.layout2')
@section('title')@if(\App\Setting::find(1)){{\App\Setting::find(1)->application_name}}@else Application name @endif- Ceative solutions. @stop

@section('meta')
<meta name="title" Content="IT development team, IT support, IT programmer, Design, Digital Marketing, Back Office " />
<meta name="description" Content="IT team sourcing Bangladesh, IT support team Bangladesh, IT programming support team Bangladesh, IT design team Bangladesh, SEO Alanytics team  Bangladesh, Back office support team Bangladesh" />
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
	<div class="pix_row scrollreveal row hometop-banner">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hometop-banner">
			<div class="custom_04 hometop-banner">
				
				<div class="pix_row  row">
		
					<!-- === MAIN MENU === -->
					<div class="container">
						<div class="col-sm-5 transparent-bg"></div>
						<div class="col-sm-7 transparent-bg">
							<div class="slide-menu2">
								<nav> 
									
									<!-- === MENU ITEMS === -->					
									<ul class="hamepage-banner-menu2">
										<li><a href="{{action('StaticPageController@aboutUs')}}">Company</a></li>
										<li><a href="{{action('StaticPageController@support')}}">Support</a></li>
										<li><a href="{{action('StaticPageController@pressReleases')}}">Press</a></li>
										<li><a href="http://test-monerkotha.webhawksittesting.com/" target="_blank">Blog</a></li>
										<li><a href="#contact-area">Contact</a></li>
									
									</ul>
								</nav>
							</div>
						</div>
					</div>
					
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
	
	<div class="pix_row scrollreveal row dark-blue-bg stories">
		<div class="container">
			
			<div class="col-sm-5 success-ground">
				
				<div class="col-xs-12 success-stories">
					<div class="pix-item y1">
						
						<h2 class="blue-text italic success-story"><i>Successful Stories</i></h2>
						
						<div class="row" second-source="/second/success-story" second-delay="500">
							<p class="text-muted"><i>Loading Success Stories...</i></p>
						</div>
						
					</div>
					
				</div>
				
				<div class="col-xs-12 homepage-job-circulars">
					<div class="pix-item y1">
						
						<div class="pix-item-wrap" second-source="/second/job-circulars" second-delay="500">
							<p class="text-muted"><i>Loading Job Circulars...</i></p>
						</div>
						
					</div>
					
				</div>
				
			</div>
			<div class="col-sm-7 homepage-teamsourcing">
				<div class="col-xs-12">
					<center>
						<img src="#" data-src="/public/img/settings/teamsourcing-logo.png" alt="We are providing highly skilled IT professional TeamSourcing services to" class="img-responsive teamsourcing-logo"/>
					</center>
				</div>
				<div class="col-xs-12 teamsourcing-slides">
					<div class="pix-item y1">
						<div class="pix-item-wrap">
							
							<div class="pix-item-owl tms-slide" >
								<span class="row h2s slick" data-slick='{"vertical": true, "verticalSwiping": true, "autoplay": true, "autoplaySpeed": 5000, "slidesToShow": 1, "centerMode": false, "adaptiveHeight": true, "pauseOnHover": false, "speed": 1500 }' progress-bar-1='true'>
									@if($tmsslides_h2->count() > 0)
										@foreach($tmsslides_h2 as $tmsslide)
										<h2 class="blue-text">
											{{$tmsslide->name}}
											<meta name="name" content="{{$tmsslide->meta_name}}" />
											<meta name="description" content="{{$tmsslide->meta_description}}" />
										</h2>
										@endforeach
									@endif
								</span>
								<span class="row h4s slick" data-slick='{"vertical": true, "verticalSwiping": true, "autoplay": true, "autoplaySpeed": 5000, "slidesToShow": 1, "centerMode": false, "pauseOnHover": false, "speed": 1500}'>
									@if($tmsslides_h4->count() > 0)
										@foreach($tmsslides_h4 as $tmsslide)
										<h4 class="light-Grey-text">
											{{$tmsslide->name}}
											<meta name="name" content="{{$tmsslide->meta_name}}" />
											<meta name="description" content="{{$tmsslide->meta_description}}" />
										</h4>
										@endforeach
									@endif
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="progress-bar-1 light-grey-bg"><span class="bar"></span></div>
					<h2>
						<center>
							<a href="#contact-area" class="blue-text" data-toggle="tooltip" data-placement="top" title="Message Us">
								<i class="icon-mail"><span class="hidden">Contact Us</span></i>
							</a>
						</center>
					</h2>
				</div>
			</div>

			<div class="col-xs-12 transparent-bg">
				<h2 class="dark-Grey-text big-heading">
					<center>THE INTERN</center>
				</h2>
			</div>
			
			<div class="col-xs-12 transparent-bg intern-area">
				
				<div class="col-sm-9 transparent-bg intern-list" second-source="/second/interns" second-delay="1000">
					<p class="text-muted"><i>Loading Intern List...</i></p>
				</div>
				
				<div class="col-sm-3 blue-bg intern-contact">
					<div class="pix-item y1 transparent-bg">
						<div class="pix-item-wrap">
							<center>
								<h2 class="white-text">YOU</h2>
								<h6 class="white-text">Can be here</h6>
								<a href="{{action('StaticPageController@internshipApply')}}" target="_blank" class="btn btn-default transparent-bg white-text tms-contact-us">
									Apply for Internship
									<meta name="name" content="Internship application Bangladesh " />
									<meta name="description" content="Apply for the Internship in Bangladesh " />
								</a>
							</center>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<!-- =========================
		END ROW 3
	============================== -->
    
	
	<!-- =========================
		ROW 4 | Applications
	============================== -->
	
    <div class="row dark-blue-bg homepage-applications">	
		<div class="container">
			
			<div class="col-xs-12 transparent-bg">
				<h2 class="dark-Grey-text big-heading">
					<center>Applications developed by US</center>
				</h2>
				<h6 class="dark-Grey-text">
					<center>
						<i>We are empowering small and medium enterprizes Bangladesh</i>
					</center>
				</h6>
			</div>
			
			<div class="col-xs-12 transparent-bg">
				<div class="brand-wrap ">
					@if($applications)
						@foreach($applications as $application)
						<div class="brand-box team-box">
							<a href="{{action('StaticPageController@application', $application->id)}}" target="_blank"><img class="team-box-img" data-src="{{$application->logo_photo}}"  alt="WebHawks IT - {{$application->name}}"/></a>
							<meta name="name" content="{{$application->meta_tag}}" />
							<meta name="description" content="{{$application->meta_description}}" />
						</div>
						@endforeach
					@endif
				</div>
			</div>
			
			<div class="col-xs-10 transparent-bg global-market">
				
				<center>
					<span class="dark-Grey-text">Why our applications are up in global market</span>
				</center>
				
				<div class="col-xs-12 col-sm-4 transparent-bg">
					<div class="global-market-items dark-Grey-text transparent-bg">
						<i class="icon-costEffective"></i>
						<h3><center>COST<br>EFFECTIVE</center></h3>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-4 transparent-bg">
					<div class="global-market-items dark-Grey-text transparent-bg">
						<i class="icon-CustomLayout"></i>
						<h3><center>CUSTOM<br>LAYOUT</center></h3>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-4 transparent-bg">
					<div class="global-market-items dark-Grey-text transparent-bg">
						<i class="icon-technicalSupport"></i>
						<h3><center>TECHNICAL<br>SUPPORT</center></h3>
					</div>
				</div>
				
			</div>
					
		</div>
	</div>
	<!-- =========================
		END ROW 4
	============================== -->
	
	
	
	<!-- ================================
		ROW 5 | TeamSourcing Services
	===================================== -->
	
	<div class="pix_row scrollreveal row teamsourcing-services">	
		<div class="container">
		
			<h2 class="dark-Grey-text">
				<center>
					We are providing highly skilled IT professional <br>TeamSourcing services to
				</center>
			</h2>
			
			<div class="col-xs-12 transparent-bg teamsourcing-services-list">
				
				@if($sectors)
				
				<div class="col-xs-6 col-sm-3 transparent-bg teamsourcing-services-item light">
					<center class="background">
						<i class="{{$sectors[0]['icon']}} light-Grey-text"></i>
						<h4 class="light-Grey-text">
							{{$sectors[0]['name']}} 
							<meta name="name" content="{{$sectors[0]['meta_tag']}}" />
							<meta name="description" content="{{$sectors[0]['meta_description']}}" />
						</h4>
					</center>
					<center class="foreground white-text">
						<div class="holder">
							<center>
								<i class="{{$sectors[0]['icon']}}"></i>
								<h3 class="light-Grey-text">
									{{$sectors[0]['heading']}}
								</h3>
								<p>
									{{$sectors[0]['details']}} <a href="#contact-area" class="blue-text">Contact Us</a>
								</p>
							</center>
						</div>
					</center>
				</div>
				<div class="col-xs-6 col-sm-3 transparent-bg teamsourcing-services-item deep">
					<center class="background">
						<i class="{{$sectors[1]['icon']}} light-Grey-text"></i>
						<h4 class="light-Grey-text">
							{{$sectors[1]['name']}}
							<meta name="name" content="{{$sectors[1]['meta_tag']}}" />
							<meta name="description" content="{{$sectors[1]['meta_description']}}" />
						</h4>
					</center>
					<center class="foreground white-text">
						<div class="holder">
							<center>
								<i class="{{$sectors[1]['icon']}}"></i>
								<h3 class="light-Grey-text">
									{{$sectors[1]['heading']}}
								</h3>
								<p>
									{{$sectors[1]['details']}} <a href="#contact-area" class="blue-text">Contact Us</a>
								</p>
							</center>
						</div>
					</center>
				</div>
				<div class="col-xs-6 col-sm-3 transparent-bg teamsourcing-services-item light xs-pull-right">
					<center class="background">
						<i class="{{$sectors[2]['icon']}} light-Grey-text"></i>
						<h4 class="light-Grey-text">
							{{$sectors[2]['name']}}
							<meta name="name" content="{{$sectors[2]['meta_tag']}}" />
							<meta name="description" content="{{$sectors[2]['meta_description']}}" />
						</h4>
					</center>
					<center class="foreground white-text">
						<div class="holder">
							<center>
								<i class="{{$sectors[2]['icon']}}"></i>
								<h3 class="light-Grey-text">
									{{$sectors[2]['heading']}}
								</h3>
								<p>
									{{$sectors[2]['details']}} <a href="#contact-area" class="blue-text">Contact Us</a>
								</p>
							</center>
						</div>
					</center>
				</div>
				<div class="col-xs-6 col-sm-3 transparent-bg teamsourcing-services-item deep xs-pull-left">
					<center class="background">
						<i class="{{$sectors[3]['icon']}} light-Grey-text"></i>
						<h4 class="light-Grey-text">
							{{$sectors[3]['name']}}
							<meta name="name" content="{{$sectors[3]['meta_tag']}}" />
							<meta name="description" content="{{$sectors[3]['meta_description']}}" />
						</h4>
					</center>
					<center class="foreground white-text">
						<div class="holder">
							<center>
								<i class="{{$sectors[3]['icon']}}"></i>
								<h3 class="light-Grey-text">
									{{$sectors[3]['heading']}}
								</h3>
								<p>
									{{$sectors[3]['details']}} <a href="#contact-area" class="blue-text">Contact Us</a>
								</p>
							</center>
						</div>
					</center>
				</div>
				<div class="col-xs-6 col-sm-3 transparent-bg teamsourcing-services-item deep xs-pull-right">
					<center class="background">
						<i class="{{$sectors[4]['icon']}} light-Grey-text"></i>
						<h4 class="light-Grey-text">
							{{$sectors[4]['name']}}
							<meta name="name" content="{{$sectors[4]['meta_tag']}}" />
							<meta name="description" content="{{$sectors[4]['meta_description']}}" />
						</h4>
					</center>
					<center class="foreground white-text">
						<div class="holder">
							<center>
								<i class="{{$sectors[4]['icon']}}"></i>
								<h3 class="light-Grey-text">
									{{$sectors[4]['heading']}}
								</h3>
								<p>
									{{$sectors[4]['details']}} <a href="#contact-area" class="blue-text">Contact Us</a>
								</p>
							</center>
						</div>
					</center>
				</div>
				<div class="col-xs-6 col-sm-3 transparent-bg teamsourcing-services-item light xs-pull-left">
					<center class="background">
						<i class="{{$sectors[5]['icon']}} light-Grey-text"></i>
						<h4 class="light-Grey-text">
							{{$sectors[5]['name']}}
							<meta name="name" content="{{$sectors[5]['meta_tag']}}" />
							<meta name="description" content="{{$sectors[5]['meta_description']}}" />
						</h4>
					</center>
					<center class="foreground white-text">
						<div class="holder">
							<center>
								<i class="{{$sectors[5]['icon']}}"></i>
								<h3 class="light-Grey-text">
									{{$sectors[5]['heading']}}
								</h3>
								<p>
									{{$sectors[5]['details']}} <a href="#contact-area" class="blue-text">Contact Us</a>
								</p>
							</center>
						</div>
					</center>
				</div>
				<div class="col-xs-6 col-sm-3 transparent-bg teamsourcing-services-item deep xs-pull-left">
					<center class="background">
						<i class="{{$sectors[6]['icon']}} light-Grey-text"></i>
						<h4 class="light-Grey-text">
							{{$sectors[6]['name']}}
							<meta name="name" content="{{$sectors[6]['meta_tag']}}" />
							<meta name="description" content="{{$sectors[6]['meta_description']}}" />
						</h4>
					</center>
					<center class="foreground white-text">
						<div class="holder">
							<center>
								<i class="{{$sectors[6]['icon']}}"></i>
								<h3 class="light-Grey-text">
									{{$sectors[6]['heading']}}
								</h3>
								<p>
									{{$sectors[6]['details']}} <a href="#contact-area" class="blue-text">Contact Us</a>
								</p>
							</center>
						</div>
					</center>
				</div>
				<div class="col-xs-6 col-sm-3 transparent-bg teamsourcing-services-item light xs-pull-right">
					<center class="background">
						<i class="{{$sectors[7]['icon']}} light-Grey-text"></i>
						<h4 class="light-Grey-text">
							{{$sectors[7]['name']}}
							<meta name="name" content="{{$sectors[7]['meta_tag']}}" />
							<meta name="description" content="{{$sectors[7]['meta_description']}}" />
						</h4>
					</center>
					<center class="foreground white-text">
						<div class="holder">
							<center>
								<i class="{{$sectors[7]['icon']}}"></i>
								<h3 class="light-Grey-text">
									{{$sectors[7]['heading']}}
								</h3>
								<p class="text-center">
									{{$sectors[7]['details']}} <a href="#contact-area" class="blue-text">Contact Us</a>
								</p>
							</center>
						</div>
					</center>
				</div>
				
				@endif
				
			</div>
		
		</div>
	</div>
	
	<!-- ================================
		END ROW 5
	===================================== -->
	
	
	<!-- =========================
		ROW 6 | IT SKILL SET
	============================== -->
	
	
	<div class="pix_row scrollreveal row it-skills">	
		<div class="container" second-source="/second/it-skills" second-delay="1500">
			<p class="text-muted"><i>Loading IT Skill Sets...</i></p>
		</div>
	</div>
	
	<!-- =========================
		END ROW 6
	============================== -->
	
	
	
	<!-- =========================
		ROW 7 | TESTIMONIAL
	============================== -->
	
	<div class="scrollreveal row testimonial">
		<div class="container" second-source="/second/testimonials" second-delay="2000">
			<p class="text-muted"><i>Loading Testimonials...</i></p>
		</div>
	</div>
	
	
	<!-- =========================
		END ROW 7
	============================== -->
	
	
	
	<!-- =======================================
		ROW 8 | WE WORK TOGETHER
	============================================ -->
	
	
	<div id="advisors" class="scrollreveal row work-together" second-source="/second/work-together" second-delay="2500">
		<p class="text-muted"><i>Loading Advisors...</i></p>
		<div class="row height-600"></div>
	</div>
	
	
	<!-- =========================
		END ROW 8
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
									<div class="col-xs-5 col-sm-4 adviser-img">
										<img src="{{$advisor1->image_photo}}" alt="WebHawks IT - {{$advisor1->name}}" class="img-responsive">
									</div>
									<div class="col-xs-7 col-sm-4 adviser-name">
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
											<a @if($advisor1->google_plus_link) href="{{$advisor1->google_plus_link}}" target="_blank" @endif><img src="/public/img/applications/gplus.png" alt="Advisor's Google Plus Profile"></a>
											<a @if($advisor1->skype_link) href="{{$advisor1->skype_link}}" target="_blank" @endif><img src="/public/img/applications/skype.png" alt="Advisor's Skype"></a>
											<a @if($advisor1->linkedin_link) href="{{$advisor1->linkedin_link}}" target="_blank" @endif><img src="/public/img/applications/linkedin.png" alt="Advisor's Linkedin Profile"></a>
											<a @if($advisor1->twitter_link) href="{{$advisor1->twitter_link}}" target="_blank" @endif><img src="/public/img/applications/twitter.png" alt="Advisor's Twitter"></a>
											<a @if($advisor1->facebook_link) href="{{$advisor1->facebook_link}}" target="_blank" @endif><img src="/public/img/applications/fb.png" alt="Advisor's Facebook Page"></a>
											<!--<a href="{{action('StaticPageController@adviser', $advisor1->id)}}" target="_blank"><img src="/public/img/applications/whit.png" alt="Advisor's WebHawks IT page"></a>-->
										</p>
									</div>
									<div class="col-xs-12 col-sm-4 adviser-brief justify">
										<p>
											{{$advisor1->summary}}
										</p>
										<p class="text-right"><a class="blue-text" href="{{action('StaticPageController@adviser', $advisor1->id)}}" target="_blank">Read Further...</a></p>
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
									<div class="col-xs-5 col-sm-4 adviser-img">
										<img src="/public/img/image/20160530013619_lg.jpg" alt="Upal Mohammed" class="img-responsive">
									</div>
									<div class="col-xs-7 col-sm-4 adviser-name">
										<h2 class="blue-text resize">Upal Mohammed</h2>
										<h3 class="blue-text resize">Founder & CEO, WebHawks IT</h3>
										<small class="blue-text">from Dhaka, Bangladesh</small>
										<p>
											I am CEO at WebHawks IT
											<br>
											Residene: WebHawks IT, Dhaka, Bangladesh.
											<br>
											upalism@webhawksit.com
										</p>
										<p class="advisor-links">
											<a href="#" target="_blank" ><img src="/public/img/applications/gplus.png" alt="Advisor's Google Plus Profile"></a>
											<a href="#" target="_blank" ><img src="/public/img/applications/skype.png" alt="Advisor's Skype"></a>
											<a href="#" target="_blank" ><img src="/public/img/applications/linkedin.png" alt="Advisor's Linkedin Profile"></a>
											<a href="#" target="_blank" ><img src="/public/img/applications/twitter.png" alt="Advisor's Twitter"></a>
											<a href="#" target="_blank" ><img src="/public/img/applications/fb.png" alt="Advisor's Facebook Page"></a>
											<!--<a href="{{action('StaticPageController@adviser', $advisor1->id)}}" target="_blank"><img src="/public/img/applications/whit.png" alt="Advisor's WebHawks IT page"></a>-->
										</p>
									</div>
									<div class="col-xs-12 col-sm-4 adviser-brief justify">
										<p>
											I lead the Technical team at Twitter, Sanfrancisco. I am acting as senior advisor at WebHawks IT, Bangladesh.
										</p>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="push-up-20 btn btn-default transparent-bg blue-text blue-border" data-dismiss="modal">Close</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

	</div>
	
	

@stop
        