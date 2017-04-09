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
    
    <div class="carear_img_top">
        <img src="/public/css/reiaz/CareerPage.jpg" alt="">
    </div>

    <!-- middel text section  -->
        <div class="career">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center carear_text">
                            <h1>Career</h1>
                            <p>We have vacant position for the following professionals</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row my_box">
                    <div class="col-sm-8 col-xs-12 ">
                        <div class="text-left text_custom">
                            <h1>Job Title</h1>
                            <h3>Last Date of apply: 15-05-2017</h3>
                            
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 

                            </p>

                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="btn_cus_grup">
                            <a href="#" class="button_cus complete_clolr">Complete Description</a>
                            <br>
                            <a href="#" class="button_cus apply_clolr">Apply Online</a>
                        </div>
                    </div>
                </div>

                <div class="row my_box">
                    <div class="col-sm-8 col-xs-12 ">
                        <div class="text-left text_custom">
                            <h1>Job Title</h1>
                            <h3>Last Date of apply: 15-05-2017</h3>
                            
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 

                            </p>

                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="btn_cus_grup">
                            <a href="#" class="button_cus complete_clolr">Complete Description</a>
                            <br>
                            <a href="#" class="button_cus apply_clolr">Apply Online</a>
                        </div>
                    </div>
                </div>


                <div class="row my_box">
                    <div class="col-sm-8 col-xs-12 ">
                        <div class="text-left text_custom">
                            <h1>Job Title</h1>
                            <h3>Last Date of apply: 15-05-2017</h3>
                            
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 

                            </p>

                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="btn_cus_grup">
                            <a href="#" class="button_cus complete_clolr">Complete Description</a>
                            <br>
                            <a href="#" class="button_cus apply_clolr">Apply Online</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    <!-- middel text section  -->
    <!-- =========================
        END ROW 4
    ============================== -->
    

@stop
