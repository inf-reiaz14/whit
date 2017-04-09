
@extends('admin.layout')

@section('title') Edit Applications @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Application</center></h1>


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


<section class="col-sm-8 col-sm-offset-2">

{!! Form::open( ['method'=>'patch', 'url'=> action('Applications@update', $application->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $application->name , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                <label for="logo_photos">Logo photo: <span class="badge badge-primary"><input type="checkbox" value="1" name="logo_photo_delete" /> remove</span></label>
                {!! Form::file('logo_photos' , ['class'=>'form-control file']) !!}
            </div>
                
            <div class="form-group">
                <label for="banner_photos">Banner photo: <span class="badge badge-primary"><input type="checkbox" value="1" name="banner_photo_delete" /> remove</span></label>
                {!! Form::file('banner_photos' , ['class'=>'form-control file']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('what_is', 'What is: ') !!}
                {!! Form::textarea('what_is', $application->what_is , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('details', 'Details: ') !!}
                {!! Form::textarea('details', $application->details , ['class'=>'form-control summernote']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('meta_tag', 'Meta tag: ') !!}
                {!! Form::text('meta_tag', $application->meta_tag , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('meta_description', 'Meta description: ') !!}
                {!! Form::text('meta_description', $application->meta_description , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                <label for="manual_files">Manual file: <span class="badge badge-primary"><input type="checkbox" value="1" name="manual_file_delete" /> remove</span></label>
                {!! Form::file('manual_files' , ['class'=>'form-control file']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('application_link', 'Application link: ') !!}
                {!! Form::text('application_link', $application->application_link , ['class'=>'form-control']) !!}
            </div>
                
                
            <div class="form-group">
                {!! Form::label('prototype_pc', 'Prototype Pc: ') !!}
                {!! Form::text('prototype_pc', $application->prototype_pc , ['class'=>'form-control']) !!}
            </div>
                
                
            <div class="form-group">
                {!! Form::label('prototype_tab', 'Prototype Tab: ') !!}
                {!! Form::text('prototype_tab',$application->prototype_tab, ['class'=>'form-control']) !!}
            </div>
                
                
            <div class="form-group">
                {!! Form::label('prototype_mobile', 'Prototype Mobile: ') !!}
                {!! Form::text('prototype_mobile', $application->prototype_mobile, ['class'=>'form-control']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Application', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        