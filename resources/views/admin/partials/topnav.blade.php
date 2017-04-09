
<?php
    $parent_navs    = session('topnav_parent');
    $child_navs     = json_decode(json_encode(session('topnav_child')), true);
?>

<!-- START X-NAVIGATION VERTICAL -->
    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
        <!-- TOGGLE NAVIGATION -->
        <li class="xn-logo">
            <a href="{{route('home')}}"></a>
        </li>
        <!-- END TOGGLE NAVIGATION -->
        
        <!-- TOP NAVIGATION -->
        <li class="pull-right signout">
            <a href="{{action('AccessController@logout')}}">
                <i class="fa fa-sign-out"></i>
            </a> 
        </li>
        @if($parent_navs)
            @foreach($parent_navs as $nav)
                @if(array_search($nav->id, array_column($child_navs,'parent')) > -1)
                    <li class="xn-openable">
                        <a href="#"><span class="{{$nav->icon}}"></span> <span class="xn-text">{{$nav->name}}</span></a>
                        <ul>
                            @foreach($child_navs as $child)
                                @if($child['parent'] == $nav->id)
                                    <li><a href="{{url($child['route'])}}"><span class="{{$child['icon']}}"></span>{{$child['name']}}</a></li>
                                @endif
                            @endforeach                        
                        </ul>
                    </li>
                @else
                
                    <li class="active">
                        <a href="{{$nav->route}}"><span class="{{$nav->icon}}"></span> <span class="xn-text">{{$nav->name}}</span></a>                        
                    </li>
                
                @endif
            @endforeach
        @endif
        <!-- TOP NAVIGATION ENDS HERE -->
        
        <!-- SIGN OUT -->
        <!--<li class="xn-icon-button pull-right">-->
        <!--    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        -->
        <!--</li> -->
        <!-- END SIGN OUT -->
        
        <!--MY PROFILE-->
        <li class="xn-openable nav-profile pull-right">
            <a href="#"><img src="@if(auth()->user()){{auth()->user()->user_photo}} @else @endif" > @if(auth()->user()){{auth()->user()->name}} @endif</a>
            <ul>                            
                <li>
                    <a href="{{action('MyProfile@show')}}">My Profile</a>
                </li>
                <li>
                    <a href="{{action('MyProfile@changePassword')}}">Change Password</a>
                </li>
            </ul>
        </li>
        <!--MY PROFILE ENDS HERE-->
        
        <li class="pull-right">
            <a href="{{route('dashboard')}}" class="btn btn-info white-border dashboard">Dashboard</a>
        </li>
        
        
    </ul>
    <!-- END X-NAVIGATION VERTICAL -->  