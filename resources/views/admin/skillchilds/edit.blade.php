
@extends('admin.layout')

@section('title') Edit Skillchildren @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Skillchild</center></h1>


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

{!! Form::open( ['method'=>'patch', 'url'=> action('Skillchildren@update', $skillchild->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $skillchild->name , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                <label for="banner_photos">Banner photo: <span class="badge badge-primary"><input type="checkbox" value="1" name="banner_photo_delete" /> remove</span></label>
                {!! Form::file('banner_photos' , ['class'=>'form-control file']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('link', 'Link: ') !!}
                {!! Form::text('link', $skillchild->link , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('description', 'Description: ') !!}
                {!! Form::textarea('description', $skillchild->description , ['class'=>'form-control summernote']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('language_id', 'Language: ') !!}
                {!! Form::select('language_id', \App\Language::lists('name', 'id'), $skillchild->language_id , ['class'=>'form-control select2']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('skillitem_id', 'Skillitem: ') !!}
                {!! Form::select('skillitem_id', \App\Skillitem::lists('name', 'id'), $skillchild->skillitem_id , ['class'=>'form-control select2']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Skillchild', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        