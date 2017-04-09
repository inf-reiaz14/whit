@extends('public.layouts.layout2')

@section('title')

	@if($skillItemDetail)
		{{ $skillItemDetail->details->name }}
	@else
		programmer in bangladesh
	@endif
	
@stop

@section('meta')
	@if($skillItemDetail)
		<meta name="description" content="{{ $skillItemDetail->meta_description }}">
		<meta name="keywords" content="{{ $skillItemDetail->meta_tag  }}">
	@endif
@stop

@section('main')

<!-- =========================
    MAIN CONTENT
============================== -->

<main class="section dark-blue-bg body-fix" id="main">
	
	<!-- ========================= ROW 1 | Intro banner	============================== -->
	
	<div class="pix_row scrollreveal row product-top dark-blue-bg">
		
		<div class="col-xs-12">
			<div class="product-banner">
				
				@if($skillItemDetail)
					<img src="@if($skillItemDetail){{$skillItemDetail->details->banner_photo}}@endif" alt="WebHawks IT - Skill item" class="img-responsive banner">
				<h1 class="heading white-text text-capitalize"> <?php $rawPhoneNumber = $skillItemDetail->link; $phoneChunks = explode("-", $rawPhoneNumber); for($i = 0; $i < count($phoneChunks); $i++){ $h =  $phoneChunks[$i]." "; echo $h; } ?> </h1>
				    
								    
				    <div id="skill-item-page-btn" class="row">
						<div class="col-sm-2 trs-bg">
							<a href="{{ URL::to('/') }}" class="btn-font btn-default transparent-bg blue-text blue-border f-s-20 push-up-20 schedule-home">Home</a>
						</div>
						<div class="col-sm-3 trs-bg">
							<a href="{{ URL::to('/') }}" class="btn-font btn-default transparent-bg blue-text blue-border f-s-20 push-up-20 schedule-home">MORE SKILLS</a>
						</div>
						<div class="col-sm-7 trs-bg">
							<center>
								<a id="contact-area-popup" href="#" data-toggle="modal" data-target="#my-modal" class="btn-font btn-default transparent-bg blue-text blue-border f-s-20 push-up-20 schedule-meeting">Schedule Meeting With Talent Acquisition Manager</a>
							</center>
						</div>
					</div>
					
			    @else
				    <img src="{{url('/public/img/press/background.png')}}" class="img-responsive banner">
				    <h1 class="heading">Sorry! This Skill detail could not be found.</h1>
			    @endif
			</div>
		</div>
		
    </div>
	<!-- =========================
		END ROW 1
	============================== -->
    
	<!-- =========================
		ROW 2 | PRESS RELEASE DETAILS
	============================== -->
	
	<section class="row dark-blue-bg">
		<div class="container">
			@if($skillItemDetail)
			
				<div class="col-xs-12 push-up-20 push-down-20">
					{!! $skillItemDetail->details->details !!} 
				</div>
				
			@endif
			
		</div>
	</section>
	
	
	
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

	
@stop
        