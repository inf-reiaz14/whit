@extends('public.layouts.layout2')
@section('title')@if(\App\Setting::find(1)){{\App\Setting::find(1)->application_name}}@else Application name @endif @stop

@section('meta')
<meta name="title" Content="IT development team, IT support, IT programmer, Design, Digital Marketing, Back Office " />
	<meta name="keywords" Content=" @if( count($tmsslides_h2) > 0) @foreach( $tmsslides_h2 as $tmsslides_h ){{ $tmsslides_h->meta_tag.',' }} @endforeach @endif " />
	<meta name="description" Content=" @if( count($tmsslides_h2) > 0) @foreach( $tmsslides_h2 as $tmsslides_h ){{ $tmsslides_h->meta_description }} @endforeach @endif " />
@stop

@section('css')
    <style>
        .owl-theme .owl-controls .owl-buttons div {
            margin: 0px 0px;
            border: 0px solid transparent !important; 
        }
        
    </style>
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
                    <div class="col-xs-12 ">

    <div class="text-left text_custom">
        <div id="owl-demo1" class="owl-carousel owl-theme">
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
          <div class="item"><img style="height: 200px !important;" src="/public/img/reiaz/company/ab.png" alt=""></div>
        </div>
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
