@extends('admin.layout')

@section('title') Language @stop

@section('main')

<h1><center>Languages @if($languages) : {{$languages->total()}} @endif</center></h1>

<section class="col-xs-12">
    
    {!! Form::open(['class'=>'form form-inline', 'method' =>'post', 'url'=> action('Languages@searchIndex')]) !!} 
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('fullname', 'Fullname: ') !!}
            {!! Form::text('fullname', old('fullname') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('from', 'From: ') !!}
            {!! Form::text('from', old('from') , ['class'=>'form-control datepicker']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('to', 'To: ') !!}
            {!! Form::text('to', old('to') , ['class'=>'form-control datepicker']) !!}
        </div>

        {!! Form::submit('search', ['class'=>'btn btn-info']) !!}
        
    {!! Form::close() !!}
    
    <hr>
</section>

<section class="col-sm-11">
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

<section class="col-sm-11">
    <h2>
        <a class="btn btn-warning pull-right" href="{{action('Skillsets@languagesCreate', $skillset->id)}}">Create new language</a>
        <br>
    </h2>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th>Id</th>
				<th>Name</th>
				<th>Fullname</th>
				<th>Created at</th>
				<th>Updated at</th>
                <th>Show</th>
                <th>Modify</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($languages)
                @foreach($languages as $language)
                    <tr>
						<td>{{$language->id}}</td>
						<td>{{$language->name}}</td>
						<td>{{$language->fullname}}</td>
						<td>{{$language->created_at}}</td>
						<td>{{$language->updated_at}}</td>
                        <td>
                            <a href="{{action('Languages@show', $language->id)}}" class="btn btn-default btn-sm btn-rounded" title="Edit role"><span class="fa fa-pencil"></span></a>
                        </td>
                        <td>
                            <a href="{{action('Languages@edit', $language['id'])}}" class="btn btn-default btn-sm btn-rounded" title="Edit role"><span class="fa fa-pencil"></span></a>
                        </td>
                        <td>
                            {!! Form::open(['method'=>'delete', 'url'=> action('Languages@destroy', $language->id) ]) !!}
                            {!! Form::hidden('id', $language->id ) !!}
                            <button href="{{action('Languages@edit',[$language->id])}}" class="btn btn-danger btn-sm btn-rounded" title="Delete language ">
                                <span class="fa fa-times"></span>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $languages->render() !!}
</section>

@stop
        