
@extends('admin.layout')

@section('title') Edit Pressreleases @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Press Release</center></h1>


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

{!! Form::open( ['method'=>'patch', 'url'=> action('Pressreleases@update', $pressrelease->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $pressrelease->name , ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('priority_release', 'Priority Release: ') !!}
                {!! Form::select('priority_release', ['0'=> 'No', '1'=> 'Yes'], $pressrelease->priority_release , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                <label for="banner_photos">Banner photo: <span class="badge badge-primary"><input type="checkbox" value="1" name="banner_photo_delete" /> remove</span></label>
                {!! Form::file('banner_photos' , ['class'=>'form-control file']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('short_description', 'Short description: ') !!}
                {!! Form::textarea('short_description', $pressrelease->short_description , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('details', 'Details: ') !!}
                {!! Form::textarea('details', $pressrelease->details , ['class'=>'form-control summernote']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('live_link', 'Live link: ') !!}
                {!! Form::text('live_link', $pressrelease->live_link , ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('live_date', 'Live Date: ') !!}
                {!! Form::text('live_date', old('live_date') , ['class'=>'form-control datepicker']) !!}
            </div>
                
                
    <div class="form-group">
        {!! Form::submit('Update Press Release', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        