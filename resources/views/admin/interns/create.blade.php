
@extends('admin.layout')

@section('title') Create new Intern @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Interns</center></h1>


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

<h3>Create Intern</h3>


{!! Form::open( ['url'=> action('Interns@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('email', 'Email: ') !!}
            {!! Form::text('email', old('email') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('phone', 'Phone: ') !!}
            {!! Form::text('phone', old('phone') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('country_id', 'Country: ') !!}
            {!! Form::select('country_id', \App\Country::lists('name', 'id'), old('country_id') , ['class'=>'form-control select2']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('image_photos', 'Image photo: ') !!}
            {!! Form::file('image_photos', ['class'=>'form-control file']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('prefetch', 'Prefetch: ') !!}
            {!! Form::text('prefetch', old('prefetch') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('dob_date', 'Dob date: ') !!}
            {!! Form::text('dob_date', old('dob_date') , ['class'=>'form-control datepicker']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('about_me', 'About me: ') !!}
            {!! Form::text('about_me', old('about_me') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('family_details', 'Family details: ') !!}
            {!! Form::text('family_details', old('family_details') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('education_background', 'Education background: ') !!}
            {!! Form::text('education_background', old('education_background') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('aim_in_life_en', 'Aim in life en: ') !!}
            {!! Form::text('aim_in_life_en', old('aim_in_life_en') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('aim_in_life_native', 'Aim in life native: ') !!}
            {!! Form::text('aim_in_life_native', old('aim_in_life_native') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('why_interested_in_carereer_travel_en', 'Why interested in carereer travel en: ') !!}
            {!! Form::text('why_interested_in_carereer_travel_en', old('why_interested_in_carereer_travel_en') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('why_interested_in_carereer_travel_native', 'Why interested in carereer travel native: ') !!}
            {!! Form::text('why_interested_in_carereer_travel_native', old('why_interested_in_carereer_travel_native') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('internship_duration', 'Internship duration: ') !!}
            {!! Form::text('internship_duration', old('internship_duration') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('internship_at_department', 'Internship at department: ') !!}
            {!! Form::text('internship_at_department', old('internship_at_department') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('google_plus_link', 'Google plus link: ') !!}
            {!! Form::text('google_plus_link', old('google_plus_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('skype_link', 'Skype link: ') !!}
            {!! Form::text('skype_link', old('skype_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('linkedin_link', 'Linkedin link: ') !!}
            {!! Form::text('linkedin_link', old('linkedin_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('twitter_link', 'Twitter link: ') !!}
            {!! Form::text('twitter_link', old('twitter_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('facebook_link', 'Facebook link: ') !!}
            {!! Form::text('facebook_link', old('facebook_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('webhawksit_link', 'Webhawksit link: ') !!}
            {!! Form::text('webhawksit_link', old('webhawksit_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('status', 'Status: ') !!}
            {!! Form::select('status', [0=>'new', 1=> 'Approved'], old('status') , ['class'=>'form-control']) !!}
        </div>
            
    <div class="form-group">
        {!! Form::submit('Save Intern', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        