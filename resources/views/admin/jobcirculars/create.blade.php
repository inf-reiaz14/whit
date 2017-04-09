
@extends('admin.layout')

@section('title') Create new Jobcircular @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Jobcirculars</center></h1>


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

<h3>Create Jobcircular</h3>


{!! Form::open( ['url'=> action('Jobcirculars@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('country_id', 'Country: ') !!}
            {!! Form::select('country_id', \App\Country::lists('name', 'id'), old('country_id') , ['class'=>'form-control select2']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('skills', 'Skills: ') !!}
            {!! Form::text('skills', old('skills') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('category', 'Category: ') !!}
            {!! Form::text('category', old('category') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('location', 'Location: ') !!}
            {!! Form::text('location', old('location') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('job_details_link', 'Job details: ') !!}
            {!! Form::textarea('job_details_link', old('job_details_link') , ['class'=>'form-control summernote']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('application_link', 'Application link: ') !!}
            {!! Form::text('application_link', "http://teamsourcing.com.bd/open-candidate-account" , ['class'=>'form-control']) !!}
        </div>
            
    <div class="form-group">
        {!! Form::submit('Save Jobcircular', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        