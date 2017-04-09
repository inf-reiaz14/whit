<!DOCTYPE html>

<html>
    <head>
        <title>WebHawksIT</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--<link href="landingpage.css" rel="stylesheet" type="text/css">-->
        <style>
            body{background-image: url("public/back.jpg");	height: 100%;overflow-x: hidden;}
            .leftpadding{padding-left: 0%;}
            .padding-top{padding-top: 10%;padding-bottom: 10%;}
            .padding{	padding-top: 20%;padding-bottom: 10%;}
            .padding>.leftpadding{	font-size: 25px;}
            .leftpadding{	color: #0080C5;}
            .col-sm-3{	width: auto;font-weight: bold;}
            .footer { bottom: 0; width: 100%; height: 60px; background-color: #f5f5f5;	position: fixed;margin-right: auto;	margin-left: auto;}
            .btn-custom { border: 8px solid transparent; border-radius: 0px !important; height: 45px;  width: 130px;}
            .btn-custom:hover{border: 8px solid #286090;}
            .padding-top-15{padding-top: 1%;}
            .scall-class{ transition: all .2s ease-in-out; }
            .scall-class:hover{ transform: scale(1.2);}
            .img-style{margin-left: 10px;height: 150px; padding-bottom: 20px; margin-left: 30%;}
            .m-l{margin-left: 38%;}
            .m-l-40{ margin-left: 15%; }
            .p-b-20{padding-bottom: 20px;}
            .m-r-3{ margin-right: 3%;  }
            .fixt-hight-img{ height: 40px;width: 40px; }
                        
            .img-responsive.fixt-hight-img {display: inline;padding-right: 10px;}
            @media screen and (max-width: 699px){
                .scall-class { margin-bottom: 50px; }
                .m-l{margin-left: 40%;}
                .m-l-40 { margin-left: 13%;}
                .m-r-3{ margin-right: -1%;  }
            }
        </style>

     </head>
    <body>
<?php include_once("analyticstracking.php") ?>
    	<div class="container">
  			<div class="row padding-top">
  			
  			
  			    <div class="col-xs-12 text-center">
  			    
  			        @if( strlen( $application->prototype_tab ) > 0 )
  			        <iframe width="100%" height="680" src="{{ $application->prototype_tab }}" frameborder="0" allowfullscreen></iframe>
  			        @else
  			        <h4>Prototype will be live soon!</h4>
  			        @endif
  			        
  			    </div>
  			
			</div>
    	</div>
  		<div class="footer padding-top-15">
  			<div class="container">
  				<div class="row">
  					<div class="col-xs-8">
              			<div class="">
            			    <a href="{{ action('Prototype@mobile',$application->id) }}"><img src="{{ URL::to('public/mobile.png')}}" class="img-responsive  fixt-hight-img "/></a>
            				<a href="{{ action('Prototype@tab',$application->id) }}"><img src="{{ URL::to('public/tablet.png')}}" class="img-responsive  fixt-hight-img"/></a>
            				<a href="{{ action('Prototype@pc',$application->id) }}"><img src="{{ URL::to('public/desktop.png')}}" class="img-responsive fixt-hight-img"/></a>
            			</div>
  					    
  					</div>
  					<div class="col-xs-4">
  						<a href="{{ URL::to('/') }}"  class="btn btn-primary pull-right btn-custom">Visit Website</a>
  					</div>
  				</div>
  			</div>
  		</div>

    </body>
</html>
