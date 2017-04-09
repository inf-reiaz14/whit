
@extends('admin.layout')

@section('title') Create new Sector @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Sectors</center></h1>


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

<h3>Create Sector</h3>


{!! Form::open( ['url'=> action('Sectors@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('icon', 'Icon: ') !!}
            {!! Form::text('icon', old('icon') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('heading', 'Heading: ') !!}
            {!! Form::text('heading', old('heading') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('details', 'Details: ') !!}
            {!! Form::textarea('details', old('details') , ['class'=>'form-control']) !!}
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
        {!! Form::submit('Save Sector', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        