
<ul class="x-navigation x-navigation-horizontal active"> <li><a>|</a></li></ul>

<ul class="x-navigation x-navigation-horizontal fixed active">
    <li class="xn-logo">
        <a href="{{route('home')}}">@if($app){{$app->name}} @endif</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    

    <!-- POWER OFF -->
    <li class="xn-icon-button pull-right last">
        <a href="#"><span class="fa fa-power-off"></span></a>
        <ul class="xn-drop-left animated zoomIn">
            @if(auth()->user())
            <li><a href="{{route('dashboard')}}"><span class="fa fa-sign-in"></span> Dashboard</a></li>
            <li><a href="{{action('AccessController@logout')}}"><span class="fa fa-sign-out"></span> Logout</a></li>
            @else
           <!-- <li><a href="{{route('signup')}}"><span class="fa fa-book"></span> Signup</a></li> -->
            <!-- <li><a href="{{route('login')}}"><span class="fa fa-sign-in"></span> Login</a></li> -->
            @endif
            <li><a href="{{action('StaticPageController@contact')}}"><span class="fa fa-phone"></span> Contact us</a></li>
            <li><a href="{{action('StaticPageController@page', 'about-us')}}"><span class="fa fa-paw"></span> About us</a></li>
        </ul>                        
    </li> 
    <!-- END POWER OFF -->    
    
</ul>

        