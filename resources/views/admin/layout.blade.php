<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>@yield('title')</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
    <!-- CSS INCLUDE -->
        <?php
            $helper = new \App\Http\Controllers\Helpers;
            $settings = $helper->admin_page_settings;
        ?>
        
        @if(count($settings['css']) > 0)
            @foreach($settings['css'] as $css)
                <link rel="stylesheet" type="text/css" href="{{$css}}"/>
            @endforeach
        @endif
        
        @yield('css')
    <!-- EOF CSS INCLUDE -->                               


    <!-- START SCRIPTS -->
        
        @if(count($settings['js']) > 0)
            @foreach($settings['js'] as $js)
                <script type="text/javascript" src="{{$js}}"></script>
            @endforeach
        @endif
        
        
        @yield('js')
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 


    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!--@ include('admin.partials.sidebar')-->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                @if(auth()->user())
                    @include('admin.partials.topnav')
                @endif
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                        
                    @yield('main')
                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->
                
            </div>            
            <!-- END PAGE CONTENT -->
            
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="{{action('AccessController@logout')}}" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="message-box animated fadeIn" data-sound="alert" id="alert-message">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-globe"></span><strong>Notification</strong></div>
                    <div class="mb-content">
                        <p></p>
                    </div>
                    <div class="mb-footer">
                        <button class="btn btn-info btn-lg pull-right mb-control-close">Got it!</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
        
        <footer class="row gray-bg white-text">
            <p>
                Copyright <i class="fa fa-copyright"></i> {{date('Y')}} All rights reserved WebHawks IT
                <a href="/" target="_blank" class="btn blue-bg white-border white-text pull-right">Visit Website</a>
                <a href="{{action('StaticPageController@privacy')}}" target="_blank" class="btn blue-bg white-border white-text pull-right">Privacy Policy</a>
                <a href="{{action('StaticPageController@cookie')}}" target="_blank" class="btn blue-bg white-border white-text pull-right">Cookie Policy</a>
            </p>
        </footer>
        
    </body>
</html>






