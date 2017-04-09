
@extends('admin.layout')

@section('title') Edit Casestudies @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Case Study</center></h1>


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

{!! Form::open( ['method'=>'patch', 'url'=> action('Casestudies@update', $casestudy->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $casestudy->name , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                <label for="study_photos">Replace Slide Image:</label>
                {!! Form::file('study_photos' , ['class'=>'form-control file']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Slide', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        