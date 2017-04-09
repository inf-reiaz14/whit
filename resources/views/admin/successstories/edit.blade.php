
@extends('admin.layout')

@section('title') Modify Successful Story @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Successful Story</center></h1>

<section class="row panel-body">
@if($errors->any())

    <h4>Please check:</h4>
    
    <ul>
        @foreach($errors->all() as $error)
        
            <li>{{$error}}</li>
        
        @endforeach
    </ul>
    <hr>
    
@endif
</section>

<section class="col-md-6 col-md-offset-3">

{!! Form::open( ['method'=>'patch', 'url'=> action('Successstories@update', $successstory->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group col-sm-6">
                {!! Form::text('name', $successstory->name , ['class'=>'form-control', 'placeholder'=> 'Name']) !!}
            </div>
                
            <div class="form-group col-sm-6">
                {!! Form::text('alias', $successstory->alias , ['class'=>'form-control', 'placeholder'=> 'Alias']) !!}
            </div>
                
            <div class="form-group col-sm-6">
                {!! Form::text('designation', $successstory->designation , ['class'=>'form-control', 'placeholder'=> 'Designation']) !!}
            </div>
                
            <div class="form-group col-sm-6">
                {!! Form::text('profile_link', $successstory->profile_link , ['class'=>'form-control', 'placeholder'=> 'Profile link']) !!}
            </div>
                
            <div class="form-group col-sm-12">
                {!! Form::textarea('skills', $successstory->skills , ['class'=>'form-control', 'placeholder'=> 'Skills']) !!}
            </div>
                
            <div class="form-group col-sm-12">
                <label for="profile_photos">Profile photo: <span class="badge badge-primary"><input type="checkbox" value="1" name="profile_photo_delete" /> remove</span></label>
                {!! Form::file('profile_photos' , ['class'=>'form-control file']) !!}
            </div>
                
    <div class="form-group col-xs-12">
        {!! Form::submit('Update Successful Story', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        