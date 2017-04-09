
@extends('admin.layout')

@section('title') Create new Tmsslide @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Tmsslides</center></h1>


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

<h3>Create Tmsslide</h3>


{!! Form::open( ['url'=> action('Tmsslides@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('meta_tag', 'Meta tag: ') !!}
            {!! Form::text('meta_tag', old('meta_tag') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('meta_description', 'Meta description: ') !!}
            {!! Form::text('meta_description', old('meta_description') , ['class'=>'form-control']) !!}
        </div>
            
    <div class="form-group">
        {!! Form::submit('Save Tmsslide', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        