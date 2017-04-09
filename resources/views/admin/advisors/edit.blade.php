
@extends('admin.layout')

@section('title') Edit Advisors @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Advisor</center></h1>


@if($errors->any())
<section class="col-sm-6 col-sm-offset-3">
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

{!! Form::open( ['method'=>'patch', 'url'=> action('Advisors@update', $advisor->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $advisor->name , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('designation', 'Designation: ') !!}
                {!! Form::text('designation', $advisor->designation , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group hidden">
                <label for="banner_photos">Banner photo: <span class="badge badge-primary"><input type="checkbox" value="1" name="banner_photo_delete" /> remove</span></label>
                {!! Form::file('banner_photos' , ['class'=>'form-control file']) !!}
            </div>
                
            <div class="form-group">
                <label for="image_photos">Profile image: <span class="badge badge-primary hidden"><input type="checkbox" value="1" name="image_photo_delete" /> remove previously uploaded image (if any)</span></label>
                {!! Form::file('image_photos' , ['class'=>'form-control file']) !!}
            </div>
                
            <div class="form-group hidden">
                {!! Form::label('display_group', 'Display group: ') !!}
                {!! Form::select('display_group', [1=>'Top Row', 2=>'Mid Left Row', 3=>'Mid Right Row', 4=>'Bottom Row'], $advisor->display_group , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('location', 'Location: ') !!}
                {!! Form::text('location', $advisor->location , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('residence', 'Current Residence: ') !!}
                {!! Form::text('residence', $advisor->residence , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('country_id', 'Country: ') !!}
                {!! Form::select('country_id', \App\Country::lists('name', 'id'), $advisor->country_id , ['class'=>'form-control select2']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('i_am', 'I am: ') !!}
                {!! Form::textarea('i_am', $advisor->i_am , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('email', 'Email: ') !!}
                {!! Form::text('email', $advisor->email , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('summary', 'Summary: ') !!}
                {!! Form::textarea('summary', $advisor->summary , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('about_professionalism', 'Myself in Details: ') !!}
                {!! Form::textarea('about_professionalism', $advisor->about_professionalism , ['class'=>'form-control summernote']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('google_plus_link', 'Google plus link: ') !!}
                <small class="badge badge-warning">will be visible to public</small>
                {!! Form::text('google_plus_link', $advisor->google_plus_link , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('skype_link', 'Skype link: ') !!}
                <small class="badge badge-warning">will be visible to public</small>
                {!! Form::text('skype_link', $advisor->skype_link , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('linkedin_link', 'Linkedin link: ') !!}
                <small class="badge badge-warning">will be visible to public</small>
                {!! Form::text('linkedin_link', $advisor->linkedin_link , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('twitter_link', 'Twitter link: ') !!}
                <small class="badge badge-warning">will be visible to public</small>
                {!! Form::text('twitter_link', $advisor->twitter_link , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('facebook_link', 'Facebook link: ') !!}
                <small class="badge badge-warning">will be visible to public</small>
                {!! Form::text('facebook_link', $advisor->facebook_link , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group hidden">
                {!! Form::label('webhawksit_link', 'Webhawksit link: ') !!}
                <small class="badge badge-warning">will be visible to public</small>
                {!! Form::text('webhawksit_link', $advisor->webhawksit_link , ['class'=>'form-control']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Advisor', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        