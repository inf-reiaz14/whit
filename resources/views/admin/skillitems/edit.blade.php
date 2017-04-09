
@extends('admin.layout')

@section('title') Edit Skillitems @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Skillitem</center></h1>


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

{!! Form::open( ['method'=>'patch', 'url'=> action('Skillitems@update', $skillitem->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $skillitem->name , ['class'=>'form-control']) !!}
            </div>
                
            
            <div class="form-group">
                {!! Form::label('link', 'Link: ') !!}
                {!! Form::text('link', $skillitem->link , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('language_id', 'Language: ') !!}
                {!! Form::select('language_id', \App\Language::lists('name', 'id'), $skillitem->language_id , ['class'=>'form-control select2']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('skillset_id', 'Skillset: ') !!}
                {!! Form::select('skillset_id', \App\Skillset::lists('name', 'id'), $skillitem->skillset_id , ['class'=>'form-control select2']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('meta_tag', 'Meta tag: ') !!}
                {!! Form::text('meta_tag', $skillitem->meta_tag , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('meta_description', 'Meta description: ') !!}
                {!! Form::text('meta_description', $skillitem->meta_description , ['class'=>'form-control']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Skillitem', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        