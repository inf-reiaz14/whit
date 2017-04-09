
@extends('admin.layout')

@section('title') Create new Skillset @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Skillsets</center></h1>


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

<h3>Create Skillset</h3>


{!! Form::open( ['url'=> action('Skillsets@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('icon', 'Icon: ') !!}
            {!! Form::text('icon', old('icon') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('class_name', 'Class name: ') !!}
            {!! Form::text('class_name', old('class_name') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('language_id', 'Language: ') !!}
            {!! Form::select('language_id', \App\Language::lists('name', 'id'), old('language_id') , ['class'=>'form-control select2']) !!}
        </div>
            
    <div class="form-group">
        {!! Form::submit('Save Skillset', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        