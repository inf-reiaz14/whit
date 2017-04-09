
@extends('admin.layout')

@section('title') Create new Casestudy @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Case Studies</center></h1>


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

<h3>Create new slide</h3>


{!! Form::open( ['url'=> action('Casestudies@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('study_photos', 'Slide Image: ') !!}
            {!! Form::file('study_photos', ['class'=>'form-control file']) !!}
        </div>
            
    <div class="form-group">
        {!! Form::submit('Save Slide', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        