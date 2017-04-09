
@extends('admin.layout')

@section('title') Create new Advisor @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Advisors</center></h1>


@if($errors->any())
<section class="row panel-body">
    <h4>Please check:</h4>
    
    <ul>
        @foreach($errors->all() as $error)
        
            <li>{{$error}}</li>
        
        @endforeach
    </ul>
    <hr>
</section>    
@endif


<section class="col-sm-6 col-sm-offset-3">

<h3>Create Advisor</h3>


{!! Form::open( ['url'=> action('Advisors@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control', 'placeholder'=> 'Enter your full name']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('designation', 'Designation: ') !!}
            {!! Form::text('designation', old('designation') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group hidden">
            {!! Form::label('banner_photos', 'Banner photo: ') !!}
            {!! Form::file('banner_photos', ['class'=>'form-control file']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('image_photos', 'Profile Image: ') !!}
            {!! Form::file('image_photos', ['class'=>'form-control file', 'title'=> 'Will be displayed at Website']) !!}
        </div>
            
        <div class="form-group hidden">
            {!! Form::label('display_group', 'Display group: ') !!}
            {!! Form::select('display_group', [1=>'Top Row', 2=>'Mid Left Row', 3=>'Mid Right Row', 4=>'Bottom Row'], old('display_group') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('location', 'Location: ') !!}
            {!! Form::text('location', old('location') , ['class'=>'form-control', 'placeholder'=> 'e.g. Buffalo, NY']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('residence', 'Current Residence: ') !!}
            {!! Form::text('residence', old('residence') , ['class'=>'form-control', 'placeholder'=> 'e.g. Buffalo, NY']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('country_id', 'Country: ') !!}
            {!! Form::select('country_id', \App\Country::lists('name', 'id'), old('country_id') , ['class'=>'form-control select2']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('i_am', 'I am: ') !!}
            {!! Form::textarea('i_am', old('i_am') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('email', 'Email: ') !!}
            {!! Form::text('email', old('email') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('summary', 'Summary: ') !!}
            {!! Form::textarea('summary', old('summary') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('about_professionalism', 'Myself in Details: ') !!}
            {!! Form::textarea('about_professionalism', old('about_professionalism') , ['class'=>'form-control summernote']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('google_plus_link', 'Google plus link: ') !!}
            <small class="badge badge-warning">will be visible to public</small>
            {!! Form::text('google_plus_link', old('google_plus_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('skype_link', 'Skype link: ') !!}
            <small class="badge badge-warning">will be visible to public</small>
            {!! Form::text('skype_link', old('skype_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('linkedin_link', 'Linkedin link: ') !!}
            <small class="badge badge-warning">will be visible to public</small>
            {!! Form::text('linkedin_link', old('linkedin_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('twitter_link', 'Twitter link: ') !!}
            <small class="badge badge-warning">will be visible to public</small>
            {!! Form::text('twitter_link', old('twitter_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('facebook_link', 'Facebook link: ') !!}
            <small class="badge badge-warning">will be visible to public</small>
            {!! Form::text('facebook_link', old('facebook_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group hidden">
            {!! Form::label('webhawksit_link', 'Webhawksit link: ') !!}
            <small class="badge badge-warning">will be visible to public</small>
            {!! Form::text('webhawksit_link', old('webhawksit_link') , ['class'=>'form-control']) !!}
        </div>
            
    <div class="form-group">
        {!! Form::submit('Save Advisor', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        