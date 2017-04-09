<!DOCTYPE html>
<html lang="en" class="nicescroll">
    <head>        
        <!-- META SECTION -->
        <title>@yield('title')</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="WebHawks IT, Core team. Team Manager - Md Ashiqul Islam. Email: ashique19@gmail.com. Phone: +880-178-563-6359">
        <link rel="dns-prefetch" href="//code.jquery.com" />
        <link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com">
        <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
        <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
        <link rel="dns-prefetch" href="//googleads.g.doubleclick.net">
        <link rel="dns-prefetch" href="//www.google.com">
        <link rel="dns-prefetch" href="//d2ny3614h1j67q.cloudfront.net">
        <link rel="dns-prefetch" href="//connect.facebook.net">
        <link rel="dns-prefetch" href="//www.googletagmanager.com">
        <link rel="dns-prefetch" href="//static.ak.facebook.com">
        <link rel="dns-prefetch" href="//s-static.ak.facebook.com">
        <link rel="dns-prefetch" href="//www.google-analytics.com">
        <link rel="dns-prefetch" href="//www.facebook.com">
        <link rel="dns-prefetch" href="//www.googleadservices.com">
        <link rel="dns-prefetch" href="//cm.g.doubleclick.net">
        <link rel="dns-prefetch" href="//googleads.g.doubleclick.net">
        <link rel="dns-prefetch" href="//www.google.com">
        @yield('meta')
        
        @if(\App\Setting::find(1))
        <link rel="shortcut icon" type="image/png" href="{{\App\Setting::find(1)->icon_photo}}"/>
        @endif
        <!-- END META SECTION -->
        
    <!-- CSS INCLUDE -->
        
        <?php
        
            $helper     = new \App\Http\Controllers\Helpers;
            $settings   = $helper->public_page_settings;
            $app        = \App\Setting::first();
            
        ?>
        
        @if(count($settings['css']) > 0)
            @foreach($settings['css'] as $css)
                <link rel="stylesheet" type="text/css" href="{{ asset($css) }}" media="all" />
            @endforeach
        @endif

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        @yield('css')
    <!-- EOF CSS INCLUDE -->         

     <!-- EOF CSS INCLUDE -->                               

        <link rel="stylesheet" href="{{asset('/public/css/reiaz.css')}}">
        <link rel="stylesheet" href="{{asset('/public/css/reiaz/style.css')}}">
        <link rel="stylesheet" href="{{asset('/public/css/reiaz/style_fonts.css')}}">

    <!-- START SCRIPTS -->                         


    <!-- START SCRIPTS -->
        
        @if(count($settings['js']) > 0)
            @foreach($settings['js'] as $js)
                <script type="text/javascript" src="{{asset($js)}}"></script>
            @endforeach
        @endif
        
        
        @yield('js')
        <!-- END TEMPLATE -->

    <script>

           $(document).ready(function() {

               $(".messages").click(function(event){
                 event.preventDefault();
                 $(".con_bg").hide();
                });
           });

    </script>

    <!-- END SCRIPTS --> 


    </head>
    <body class="dark-blue-bg">
        
        <!-- Loader -->
        <aside id="page-preloader"><span class="spinner"></span></aside>
        <!-- Loader end -->
        <article class="mainbody">
            
            @include('public.navs.topbar2')
            @yield('main')
            @include('public.footers.footer2')
            @include('public.navs.mobile-menu')
            
            <!-- =========================
               BLACK OVERLAY
            ============================== -->
            <div class="black-overlay" id="black-overlay"></div>
            <!-- =========================
               END BLACK OVERLAY
            ============================== -->
            
            </article>
            
            
            <!-- =========================
            	SCRIPTS
            ============================== -->
            
    </body>
    
</html>

        