
@extends('admin.layout')

@section('title') Edit Sectors @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Sector</center></h1>


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

{!! Form::open( ['method'=>'patch', 'url'=> action('Sectors@update', $sector->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $sector->name , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('icon', 'Icon: ') !!}
                {!! Form::text('icon', $sector->icon , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('heading', 'Heading: ') !!}
                {!! Form::text('heading', $sector->heading , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('details', 'Details: ') !!}
                {!! Form::textarea('details', $sector->details , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('meta_tag', 'Meta tag: ') !!}
                {!! Form::text('meta_tag', $sector->meta_tag , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('meta_description', 'Meta description: ') !!}
                {!! Form::text('meta_description', $sector->meta_description , ['class'=>'form-control']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Sector', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        