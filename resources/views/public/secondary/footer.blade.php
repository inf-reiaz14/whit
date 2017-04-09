<div class="col-xs-12 tab-content transparent-bg">
				
	@if($contacts)
		@foreach($contacts as $contact)
		<div id="contact{{$contact->id}}" class="tab-pane fade @if($contacts->first()->id == $contact->id) in active @endif">
			<div class="row contact-item blue-text">
				<img source="{{$contact->background_photo}}" alt="@if($contact->country){{$contact->country->name}}@endif" class="img-responsive country-bg">
				<center>
					<div class="con_bg">
						<i class="con_bg_i {{$contact->icon}}"></i>
						<h2>@if($contact->country){{$contact->country->name}}@endif</h2>
						<address>
							@if($contact->address_line_1){{$contact->address_line_1}}<br>@endif
							@if($contact->address_line_2){{$contact->address_line_2}}<br>@endif
							@if($contact->address_line_3){{$contact->address_line_3}}<br>@endif
						</address>
						<p class="email pull-10 no-margin">
							<i class="icon-mail"></i>
							<br>
							<a href="mailto:{{$contact->email}}" class="blue-text">{{$contact->email}}</a>
						</p>
						<p class="phone pull-10 no-margin">
							<i class="icon-cell"></i>
							<br>
							<a href="phone:{{$contact->contact_no}}" class="blue-text">{{$contact->contact_no}}</a>
						</p>
						<p class="contact-links pull-10 no-margin">
							<a href="#" class="messages btn btn-default transparent-bg blue-text blue-border" data-toggle="modal" data-target="#contact_modal{{$contact->id}}">Message us</a>
							<a href="#" class="btn btn-default transparent-bg blue-text blue-border">Get direction</a>
						</p>
						
					</div>
				</center>
				
				<div class="modal fade contact-form-holder" tabindex="-1" role="dialog" id="contact_modal{{$contact->id}}">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="blue-text blue-border">&times;</span></button>
							<h4 class="modal-title blue-text contact-modal-heading">
								<center>
									<i class="{{$contact->icon}}"></i>
									<br>
									@if($contact->country){{$contact->country->name}}@endif
								</center>
							</h4>
						</div>
					<div class="modal-body">
						{!! Form::open(['url'=> action('StaticPageController@postContact'), 'method'=> 'post' ]) !!}
							<input name="name" type="text" class="form-control transparent-bg light-Grey-text blue-border" placeholder="name">
							<input name="email" type="email" class="form-control transparent-bg light-Grey-text blue-border" placeholder="email">
							<textarea name="message" id="" cols="30" rows="10" class="form-control transparent-bg light-Grey-text blue-border" placeholder="message"></textarea>
							<button class="btn btn-default transparent-bg blue-text blue-border pull-right">Send</button>
						{!! Form::close() !!}
					</div>
				</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				
				
			</div>
		</div>
		@endforeach
	@endif
	
</div>


<div class="col-xs-12 transparent-bg contact-list-holder">

	<ul class="nav nav-tabs nav-justified owl-carousel enable-owl-carousel verticale-owl-controls contact-list"
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
		
		@if($contacts)
			@foreach($contacts as $contact)
			<li class="country"><a class="transparent-bg blue-text"><center data-toggle="tab" href="#contact{{$contact->id}}"><i class="{{$contact->icon}}"></i><br>@if($contact->country){{$contact->country->name}}@endif</center></a></li>
			@endforeach
		@endif

	</ul>

</div>


<script>
	

	$(".messages").click(function(event){
		  event.preventDefault();
		  $(".con_bg").hide();
		  $(".contact-list-holder").hide();
	});
	

	$(".close").click(function(event){
		  event.preventDefault();
		  $(".con_bg").show();
		  $(".contact-list-holder").show();
	});



</script>