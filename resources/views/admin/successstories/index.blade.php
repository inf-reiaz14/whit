
@extends('admin.layout')

@section('title') Success story @stop

@section('main')

<h1><center>Successful Stories @if($successstories) : {{$successstories->total()}} @endif</center></h1>

<section class="col-sm-10 col-sm-offset-1 panel-body">
    
    {!! Form::open(['class'=>'form', 'method' =>'post', 'url'=> action('Successstories@searchIndex')]) !!} 
        
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
            </div>
        </div>
                
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('alias', 'Alias: ') !!}
                {!! Form::text('alias', old('alias') , ['class'=>'form-control']) !!}
            </div>
        </div>
                
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('designation', 'Designation: ') !!}
                {!! Form::text('designation', old('designation') , ['class'=>'form-control']) !!}
            </div>
        </div>
                
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('profile_link', 'Profile link: ') !!}
                {!! Form::text('profile_link', old('profile_link') , ['class'=>'form-control']) !!}
            </div>
        </div>
                
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('skills', 'Skills: ') !!}
                {!! Form::text('skills', old('skills') , ['class'=>'form-control']) !!}
            </div>
        </div>
                
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('from', 'From: ') !!}
                {!! Form::text('from', old('from') , ['class'=>'form-control datepicker']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('to', 'To: ') !!}
                {!! Form::text('to', old('to') , ['class'=>'form-control datepicker']) !!}
            </div>
        </div>
    
        <div class="col-sm-3">
            {!! Form::submit('search', ['class'=>'btn btn-info push-up-25']) !!}
        </div>
        
    {!! Form::close() !!}
    
    <hr>
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

<section class="col-sm-10 col-sm-offset-1 panel-body">
    
    <a href="{{action('Successstories@create')}}" class="btn btn-default pull-right btn-lg blue-border blue-text">Add new</a>

    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text">Alias</th>
				<th class="blue-bg white-text">Designation</th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($successstories)
                @foreach($successstories as $successstory)
                    <tr>
						<td><img src="{{$successstory->profile_photo}}" width="120" > <strong>{{$successstory->name}}</strong></td>
						<td>{{$successstory->alias}}</td>
						<td>{{$successstory->designation}}</td>
                        <td>
                            {!! views('Successstories', $successstory->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded', 'title'=> 'show']) !!}
                        </td>
                        <td>
                            {!! edits('Successstories', $successstory['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded', 'title'=> 'edit']) !!}
                        </td>
                        <td>
                            {!! deletes('Successstories', $successstory['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded', 'title'=> 'delete']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $successstories->render() !!}
</section>

@stop
        