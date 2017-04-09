
@extends('admin.layout')

@section('title') Edit Skillsets @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Skillset</center></h1>


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

{!! Form::open( ['method'=>'patch', 'url'=> action('Skillsets@update', $skillset->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $skillset->name , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('icon', 'Icon: ') !!}
                {!! Form::text('icon', $skillset->icon , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('class_name', 'Class name: ') !!}
                {!! Form::text('class_name', $skillset->class_name , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('language_id', 'Language: ') !!}
                {!! Form::select('language_id', \App\Language::lists('name', 'id'), $skillset->language_id , ['class'=>'form-control select2']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Skillset', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        