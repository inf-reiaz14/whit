@extends('admin.layout')
@section('title')@if(\App\Setting::find(1)){{\App\Setting::find(1)->application_name}}@else Application name @endif- Login is easy. @stop
@section('main')

<section class="row">
    
    <div class="login-container">
        
        <div class="login-box animated fadeInDown">
            
            <div class="login-body accordion">
                
                <h1><img src="/public/img/settings/logo.png" alt="" class="img-responsive"></h1>
                @if($errors->any())
                    <div class="col-xs-12">
                        <hr>
                        <h3>
                            <ul class="container">
                                @foreach($errors->all() as $error)
                                
                                    <li>{{$error}}</li>
                                
                                @endforeach
                            </ul>
                        </h3>
                    </div>
                @endif
                <form action="{{action('AccessController@postLogin')}}" class="form-horizontal" method="post">
                    {!! csrf_field() !!}
                
                <div class="form-group">
                    <div class="col-xs-12">                                            
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}" autofocus />
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-xs-12">                                            
                            <input type="password" class="form-control" placeholder="Password" name="password" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <center>
                            <button class="btn blue-text white-bg blue-border"><i class="fa fa-unlock-alt"></i> Log In</button>
                        </center>
                    </div>
                </div>
                </form>
            </div>
            <div class="login-footer">
                <div class="col-xs-12">
                    <center>
                        <a href="#" class="mb-control blue-text" data-box="#forgot_password">Forgot password</a>
                    <center>
                </div>                   
            </div>
            
        </div>
        
    </div>
    
    <div class="message-box message-box-info animated fadeIn" id="forgot_password">
        <div class="mb-container">
            <div class="mb-middle">
                {!! Form::open(['method'=>'post', 'url'=>action('AccessController@forgotPassword'), 'class'=>'form', 'role'=>'form']) !!}
                <div class="mb-title"><span class="fa fa-info"></span>Retrieve password</div>
                <div class="mb-content">
                    {!! Form::email('recovery_email',null, ['class'=>'form-control', 'placeholder'=>'Enter your email address', 'required'=>'']) !!}
                </div>
                <div class="mb-footer">
                    {!! Form::submit('Submit', ['class'=>'btn btn-default btn-lg pull-right']) !!} &nbsp;
                    <span class="btn btn-default btn-lg pull-right mb-control-close">Close</span>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
        
</section>
    
@stop
