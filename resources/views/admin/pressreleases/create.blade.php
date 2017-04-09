
@extends('admin.layout')

@section('title') Create new Press Release @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Pressreleases</center></h1>


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

<h3>Create Press Release</h3>


{!! Form::open( ['url'=> action('Pressreleases@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('priority_release', 'Priority Release: ') !!}
            {!! Form::select('priority_release', ['0'=> 'No', '1'=> 'Yes'], old('priority_release') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('banner_photos', 'Banner photo: ') !!}
            {!! Form::file('banner_photos', ['class'=>'form-control file']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('short_description', 'Short description: ') !!}
            {!! Form::textarea('short_description', old('short_description') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('details', 'Details: ') !!}
            {!! Form::textarea('details', old('details') , ['class'=>'form-control summernote']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('live_link', 'Live link: ') !!}
            {!! Form::text('live_link', old('live_link') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('live_date', 'Live Date: ') !!}
            {!! Form::text('live_date', old('live_date') , ['class'=>'form-control datepicker']) !!}
        </div>
            
    <div class="form-group">
        {!! Form::submit('Save Press Release', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        