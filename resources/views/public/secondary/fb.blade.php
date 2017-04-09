<ul class="owl-carousel enable-owl-carousel" data-wow-delay="0.7s" data-navigation="false" 
data-pagination="false" data-single-item="false" data-auto-play="true" data-transition-style="false" 
data-main-text-animation="false" data-min600="3" data-min800="4" data-min1200="5">

@if($fb_photos)
    @foreach($fb_photos as $photo)
    <a href="#"><img src="https://graph.facebook.com/v2.5/{{$photo}}/picture?access_token={{$token}}" alt="" class="img-responsive"></a>
    @endforeach
@endif

</ul>