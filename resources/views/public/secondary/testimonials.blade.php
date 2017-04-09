<div class="col-xs-12">
    <div class="team-wrap owl-carousel enable-owl-carousel verticale-owl-controls" data-wow-delay="2.2s" data-navigation="true" 
    data-pagination="false" data-single-item="true" data-auto-play="true" data-transition-style="fade" 
    data-main-text-animation="false" data-min600="1" data-min800="1" data-min1200="1">
    
    @if($testimonials)
    	@foreach($testimonials as $testimonial)
    	<div class="testimonial-item white-border">
    		<div class="col-xs-6 col-sm-5 transparent-bg">
    			<img source="{{$testimonial->image_photo}}" alt="{{$testimonial->name}}" class="img-responsive testimonial-img">
    		</div>
    		<div class="col-xs-6 col-sm-7 transparent-bg">
    			<h3 class="pull-right light-Grey-text name"><i>{{$testimonial->name}}</i>
    				<meta name="name" content="{{$testimonial->name}} IT development in Bangladesh" />
    			</h3>
    			<center class="light-Grey-text designation"><i>{{$testimonial->designation}}</i></center>
    		</div>
    		<div class="col-xs-12 transparent-bg light-Grey-text">
    			<q class="testimonial-quote">
    				{{$testimonial->details}}
    			</q>
    		</div>
    	</div>	
    	@endforeach
    @endif
    
    </div>
</div>