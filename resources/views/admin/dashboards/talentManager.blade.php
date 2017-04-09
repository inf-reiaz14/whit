@extends('admin.layout')

@section('main')
<section class="container">
    
    <h1 class="admin-heading">
        <center>Welcome to WebHawks IT</center>
    </h1>
    
    <section class="row thumbs">
        
        <div class="col-xs-6 col-sm-4 col-md-3">
            <a href="{{action('Successstories@index')}}" class="thumb blue-border white-bg blue-text">
                <center>
                    <i class="fa fa-rocket"></i>
                    <h4>Success Stories</h4>
                </center>
            </a>
        </div>
        
        <div class="col-xs-6 col-sm-4 col-md-3">
            <a href="{{action('Jobcirculars@index')}}" class="thumb blue-border white-bg blue-text">
                <center>
                    <i class="fa fa-lightbulb-o"></i>
                    <h4>job circulars</h4>
                </center>
            </a>
        </div>
        
        <div class="col-xs-6 col-sm-4 col-md-3">
            <a href="{{action('Interns@index')}}" class="thumb blue-border white-bg blue-text">
                <center>
                    <i class="fa fa-street-view"></i>
                    <h4>Intern</h4>
                </center>
            </a>
        </div>
        
        <div class="col-xs-6 col-sm-4 col-md-3">
            <a href="{{action('Testimonials@index')}}" class="thumb blue-border white-bg blue-text">
                <center>
                    <i class="fa fa-thumbs-up"></i>
                    <h4>Testimonial</h4>
                </center>
            </a>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
            <a href="{{action('Contacts@index')}}" class="thumb blue-border white-bg blue-text">
                <center>
                    <i class="fa fa-map-signs"></i>
                    <h4>Contacts</h4>
                </center>
            </a>
        </div>
        
        <div class="col-xs-6 col-sm-4 col-md-3">
            <a href="{{action('Pressreleases@index')}}" class="thumb blue-border white-bg blue-text">
                <center>
                    <i class="fa fa-newspaper-o"></i>
                    <h4>Press Release</h4>
                </center>
            </a>
        </div>
        
        <div class="col-xs-6 col-sm-4 col-md-3">
            <a href="{{action('Casestudies@index')}}" class="thumb blue-border white-bg blue-text">
                <center>
                    <i class="fa fa-steam"></i>
                    <h4>Case Study</h4>
                </center>
            </a>
        </div>
        
    </section>
    
    
</section>

@stop