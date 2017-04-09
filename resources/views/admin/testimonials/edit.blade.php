
@extends('admin.layout')

@section('title') Edit Testimonials @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Testimonial</center></h1>


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

{!! Form::open( ['method'=>'patch', 'url'=> action('Testimonials@update', $testimonial->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $testimonial->name , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('designation', 'Designation: ') !!}
                {!! Form::text('designation', $testimonial->designation , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                <label for="image_photos">Image photo: <span class="badge badge-primary"><input type="checkbox" value="1" name="image_photo_delete" /> remove</span></label>
                {!! Form::file('image_photos' , ['class'=>'form-control file']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('details', 'Details: ') !!}
                {!! Form::text('details', $testimonial->details , ['class'=>'form-control']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Testimonial', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        