<footer class="footer col-xs-12">
    <section class="col-sm-4">
        <div class="panel-body list-group list-group-contacts">
            <h4 class="text-title theme-text">Important links</h4>
            <a href="{{action('StaticPageController@page', 'about-us')}}" class="list-group-item btn btn-info white-text">About us</a>
            <a href="{{action('StaticPageController@contact')}}" class="list-group-item btn btn-info white-text">Contact us</a>
            <a href="{{action('StaticPageController@page', 'privacy-policy')}}" class="list-group-item btn btn-info white-text">Privacy policy</a>
            <a href="{{action('StaticPageController@page', 'terms-of-service')}}" class="list-group-item btn btn-info white-text">Terms of Service</a>
        </div>
    </section>
    <section class="col-sm-4">
        <div class="panel-body contact-info">
            <h3 class="text-title theme-text">We are here</h3>
            @if($app)
                <p class="white-text">Address: {{$app->address}}</p>
                <p class="white-text">City: {{$app->city}}</p>
                <p class="white-text">Country: {{$app->country}}</p>
                <p class="white-text">Postcode: {{$app->postcode}}</p>
            @endif
        </div>
    </section>
    <section class="col-sm-4">
        <section class="panel-body gallery">
            <h3 class="text-title theme-text">Contact us</h3>
            @if($app)
                <p class="white-text">Call us at: {{$app->helpline}}</p>
                <p class="white-text">Email us at: {{$app->helpmail}}</p>
                <a href="{{$app->facebook}}" target="_blank" class="gallery-item social-icon btn-info"><i class="fa fa-facebook"></i></a>
                <a href="{{$app->twitter}}" target="_blank" class="gallery-item social-icon btn-info"><i class="fa fa-twitter"></i></a>
                <a href="{{$app->google_plus}}" target="_blank" class="gallery-item social-icon btn-info"><i class="fa fa-google-plus"></i></a>
            @endif
        </section>
    </section>
</footer>