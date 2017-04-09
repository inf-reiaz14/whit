
@extends('admin.layout')

@section('title') Tmsslide @stop

@section('main')

<h1><center>Tms Slides @if($tmsslides) : {{$tmsslides->total()}} @endif</center></h1>

 <section class="col-md-10 col-md-offset-1 push-down-20">
    
    <h4 class="page-title btn-info">Create New</h4>
 
    {!! Form::open( ['url'=> action('Tmsslides@store'), 'class'=> 'form', 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('meta_tag', 'Meta tag: ') !!}
                {!! Form::text('meta_tag', old('meta_tag') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('meta_description', 'Meta description: ') !!}
                {!! Form::text('meta_description', old('meta_description') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::submit('Save slide', ['class'=>'form-control btn btn-info push-up-25']) !!}
            </div> 
        </div>

{!! Form::close() !!}

</section>

<section class="col-md-10 col-md-offset-1 push-down-20">
    
    <h4 class="page-title btn-info">List of All:</h4>
    
    <div class="col-xs-12">
        
        <ul class="list-group">
        
    @if($tmsslides)
        @foreach($tmsslides as $tmsslide)
            <li class="list-group-item">
                <ul class="list-inline">
					<li>{{$tmsslide->id}}</li>
					<li>{{$tmsslide->name}}</li>
					<li>{{$tmsslide->meta_tag}}</li>
					<li>{{$tmsslide->meta_description}}</li>  
                    <li class="pull-right">
                            <a class="btn btn-default btn-xs" data-toggle="collapse" data-target="#editme{{$tmsslide->id}}"><i class="fa fa-pencil"></i></a>
                            <span class="btn btn-link btn-xs">
                                {!! deletes('Tmsslides', $tmsslide['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-xs']) !!}
                            </span>
                    </li>
                </ul>
                <ul class="list-inline collapse" id="editme{{$tmsslide->id}}">
                    
                {!! Form::open( ['class'=> 'form form-inline','method'=>'patch', 'url'=> action('Tmsslides@update', $tmsslide->id), 'enctype'=>'multipart/form-data' ]) !!}
                
                    
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
                        {!! Form::submit('Update this slide', ['class'=>'form-control btn btn-info']) !!}
                    </div>
                
                {!! Form::close() !!}

                
        
                </ul>
                <div class="row collapse" id="openme{{$tmsslide->id}}">
                </div>
            </li>
        @endforeach
    @endif
                
            <ul>
    </div>
</section>


@if($errors->any())
<section class="col-sm-10 col-sm-offset-1 panel-body">
    <h4>Please check:</h4>
    
    <ul>
        @foreach($errors->all() as $error)
        
            <li>{{$error}}</li>
        
        @endforeach
    </ul>
    <hr>
</section>  
@endif

@stop
        