
@extends('admin.layout')

@section('title') Edit Jobcirculars @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Jobcircular</center></h1>


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

{!! Form::open( ['method'=>'patch', 'url'=> action('Jobcirculars@update', $jobcircular->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $jobcircular->name , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('country_id', 'Country: ') !!}
                {!! Form::select('country_id', \App\Country::lists('name', 'id'), $jobcircular->country_id , ['class'=>'form-control select2']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('skills', 'Skills: ') !!}
                {!! Form::text('skills', $jobcircular->skills , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('category', 'Category: ') !!}
                {!! Form::text('category', $jobcircular->category , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('location', 'Location: ') !!}
                {!! Form::text('location', $jobcircular->location , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('job_details_link', 'Job details: ') !!}
                {!! Form::textarea('job_details_link', $jobcircular->job_details_link , ['class'=>'form-control summernote']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('application_link', 'Application link: ') !!}
                {!! Form::text('application_link', $jobcircular->application_link , ['class'=>'form-control']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Jobcircular', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        