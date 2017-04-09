
<!DOCTYPE html>
<html lang="en" class="nicescroll">
    <head>        
        <!-- META SECTION -->
        <title>@yield('title')</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="Md Ashiqul Islam; Email: ashique19@gmail.com; Phone: +880-178-563-6359">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
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
                <link rel="stylesheet" type="text/css" id="theme" href="{{ asset($css) }}"/>
            @endforeach
        @endif
        
        @yield('css')
    <!-- EOF CSS INCLUDE -->                               


    <!-- START SCRIPTS -->
        
        @if(count($settings['js']) > 0)
            @foreach($settings['js'] as $js)
                <script type="text/javascript" src="{{asset($js)}}"></script>
            @endforeach
        @endif
        
        
        @yield('js')
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 


    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container page-navigation-top">            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <!--@ include('public.navs.sidebar')-->
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                                  
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                    
                    <div class="row">
                        <div class="col-md-12">
                            @include('public.navs.topbar')
                            @yield('main')
                            @include('public.footers.footer')
                        </div>
                    </div>
                
                </div>
                <!-- PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->




    </body>
</html>

        