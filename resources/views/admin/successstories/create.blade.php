
@extends('admin.layout')

@section('title') Create new Successstory @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Successful Stories</center></h1>


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


<section class="col-md-6 col-md-offset-3">

<h1 class="page-title"><center>Create New Successful Story</center></h1>


{!! Form::open( ['url'=> action('Successstories@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group col-sm-6">
            {!! Form::text('name', old('name') , ['class'=>'form-control', 'placeholder'=>'Name']) !!}
        </div>
            
        <div class="form-group col-sm-6">
            {!! Form::text('alias', old('alias') , ['class'=>'form-control', 'placeholder'=>'Alias']) !!}
        </div>
            
        <div class="form-group col-sm-6">
            {!! Form::text('designation', old('designation') , ['class'=>'form-control', 'placeholder'=>'Designation']) !!}
        </div>
            
        <div class="form-group col-sm-6">
            {!! Form::text('profile_link', old('profile_link') , ['class'=>'form-control', 'placeholder'=>'Profile link']) !!}
        </div>
            
        <div class="form-group col-xs-12">
            {!! Form::textarea('skills', old('skills') , ['class'=>'form-control', 'placeholder'=>'Skills']) !!}
        </div>
            
        <div class="form-group col-xs-12">
            {!! Form::file('profile_photos', ['class'=>'form-control file']) !!}
        </div>
            
    <div class="form-group col-xs-12">
        {!! Form::submit('Save Successstory', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        