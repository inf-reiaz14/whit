
@extends('admin.layout')

@section('title') Edit Skillitempages @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Skillitempage</center></h1>


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

{!! Form::open( ['method'=>'patch', 'url'=> action('Skillitempages@update', $skillitempage->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $skillitempage->name , ['class'=>'form-control']) !!}
            </div>
        
            <div class="form-group">
                {!! Form::label('link_input', 'Link: ') !!}
                {!! Form::text('link_input', old('link_input') , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                <label for="banner_photos">Banner photo: <span class="badge badge-primary"><input type="checkbox" value="1" name="banner_photo_delete" /> remove</span></label>
                {!! Form::file('banner_photos' , ['class'=>'form-control file']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('details', 'Details: ') !!}
                {!! Form::textarea('details', $skillitempage->details , ['class'=>'form-control summernote']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('skillitem_id', 'Skillitem: ') !!}
                {!! Form::select('skillitem_id', \App\Skillitem::lists('name', 'id'), $skillitempage->skillitem_id , ['class'=>'form-control select2']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Skillitempage', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        