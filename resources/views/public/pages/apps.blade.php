<!DOCTYPE html>

<html>
    <head>
        <title>Landing Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--<link href="landingpage.css" rel="stylesheet" type="text/css">-->
        <style>
            body{background-image: url("public/back.jpg");	height: 100%;overflow-x: hidden;}
            .leftpadding{padding-left: 0%;}
            .padding{	padding-top: 20%;padding-bottom: 10%;}
            .padding>.leftpadding{	font-size: 25px;}
            .leftpadding{	color: #0080C5;}
            .col-sm-3{	width: auto;font-weight: bold;}
            .footer { bottom: 0; width: 100%; height: 60px;background-color:#f5f5f5;position:fixed;margin-right:auto;margin-left:auto;margin-bottom:20px;}
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
            .p-t-10{}
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
  			<div class="row padding">
			    <a href=""><div class="col-xs-12 col-sm-4 scall-class leftpadding text-center"><img src="{{ URL::to('public/mobile.png')}}" class="img-responsive img-style m-l p-b-20"/><br> <p class="text-center m-r-3"> Mobile</p></div></a>	
				<a href=""><div class="col-xs-12 col-sm-4 scall-class leftpadding text-center"><img src="{{ URL::to('public/tablet.png')}}" class="img-responsive img-style m-l p-b-20"/><br> <p class="text-center">Tablet</p></div></a>
				<a href=""><div class="col-xs-12 col-sm-4 scall-class leftpadding text-center"><img src="{{ URL::to('public/desktop.png')}}" class="img-responsive img-style m-l p-b-20"/><br> <p class="text-center m-l-40">Desktop</p></div></a>
			</div>
    	</div>
  		<div class="footer padding-top-15">
  			<div class="container">
  				<div class="row">
  					<div class="col-xs-6">
  						<p style="margin-top: 12px;" >all rights reserved by webhawks IT, 2015 </p>
  					</div>
  					<div class="col-xs-6">
  						<a href="{{ URL::to('/')}}"  class="btn btn-primary pull-right btn-custom">Visit Website</a>
  					</div>
  				</div>
  			</div>
  		</div>

    </body>
</html>
