<!-- =========================
   MOBILE MENU
============================== -->
<aside id="mobile-menu" class="mobile-menu">
		
	<!-- === SLIDE MENU === -->	
	<ul id="left-menu" class="left-menu">	
		
		@if(Route::getCurrentRoute()->getPath() != '/')<li class="active"><a href="{{route('home')}}">HOME</a></li>@endif
		<li><a href="{{action('StaticPageController@aboutUs')}}">COMPANY</a></li>
		<li><a href="{{action('StaticPageController@support')}}">SUPPORT</a></li>
		<li><a href="{{action('StaticPageController@pressReleases')}}">PRESS</a></li>
		<li><a href="#contact-area">CONTACT</a></li>
		@if(auth()->user())
		<li><a href="{{ route('dashboard') }}">MY ACCOUNT</a></li>
		@else
		<li><a href="{{ route('login') }}">LOGIN</a></li>
		@endif

	</ul>
	
</aside>
<!-- =========================
   END MOBILE MENU
============================== -->
