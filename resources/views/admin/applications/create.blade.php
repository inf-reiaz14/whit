
@extends('admin.layout')

@section('title') Create new Application @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Applications</center></h1>


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

<h3>Create Application</h3>


{!! Form::open( ['url'=> action('Applications@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('logo_photos', 'Logo photo: ') !!}
            {!! Form::file('logo_photos', ['class'=>'form-control file']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('banner_photos', 'Banner photo: ') !!}
            {!! Form::file('banner_photos', ['class'=>'form-control file']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('what_is', 'What is: ') !!}
            {!! Form::textarea('what_is', old('what_is') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('details', 'Details: ') !!}
            {!! Form::textarea('details', old('details') , ['class'=>'form-control summernote']) !!}
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
            {!! Form::label('manual_files', 'Manual file: ') !!}
            {!! Form::file('manual_files', ['class'=>'form-control file']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('application_link', 'Application link: ') !!}
            {!! Form::text('application_link', old('application_link') , ['class'=>'form-control']) !!}
        </div>
            
            
        <div class="form-group">
            {!! Form::label('prototype_pc', 'Prototype Pc: ') !!}
            {!! Form::text('prototype_pc', old('prototype_pc') , ['class'=>'form-control']) !!}
        </div>
            
            
        <div class="form-group">
            {!! Form::label('prototype_tab', 'Prototype Tab: ') !!}
            {!! Form::text('prototype_tab', old('prototype_tab') , ['class'=>'form-control']) !!}
        </div>
            
            
        <div class="form-group">
            {!! Form::label('prototype_mobile', 'Prototype Mobile: ') !!}
            {!! Form::text('prototype_mobile', old('prototype_mobile') , ['class'=>'form-control']) !!}
        </div>
            
    <div class="form-group">
        {!! Form::submit('Save Application', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        