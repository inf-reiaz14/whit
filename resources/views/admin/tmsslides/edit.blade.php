
@extends('admin.layout')

@section('title') Edit Tmsslides @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Tmsslide</center></h1>


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

{!! Form::open( ['method'=>'patch', 'url'=> action('Tmsslides@update', $tmsslide->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $tmsslide->name , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('meta_tag', 'Meta tag: ') !!}
                {!! Form::text('meta_tag', $tmsslide->meta_tag , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('meta_description', 'Meta description: ') !!}
                {!! Form::text('meta_description', $tmsslide->meta_description , ['class'=>'form-control']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Tmsslide', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        