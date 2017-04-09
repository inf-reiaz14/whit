
@extends('admin.layout')

@section('title') Create new Skillitempage @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Skillitempages</center></h1>


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

<h3>Create Skillitempage</h3>


{!! Form::open( ['url'=> action('Skillitempages@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('link_input', 'Link: ') !!}
            {!! Form::text('link_input', old('link_input') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('banner_photos', 'Banner photo: ') !!}
            {!! Form::file('banner_photos', ['class'=>'form-control file']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('details', 'Details: ') !!}
            {!! Form::textarea('details', old('details') , ['class'=>'form-control summernote']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('skillitem_id', 'Skillitem: ') !!}
            {!! Form::select('skillitem_id', \App\Skillitem::lists('name', 'id'), session('skillitem') , ['class'=>'form-control select2']) !!}
        </div>
            
    <div class="form-group">
        {!! Form::submit('Save Skillitempage', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        