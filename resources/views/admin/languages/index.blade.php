
@extends('admin.layout')

@section('title') Language @stop

@section('main')

<h1><center>Languages @if($languages) : {{$languages->total()}} @endif</center></h1>

<section class="col-sm-10 col-sm-offset-1">
    
    {!! Form::open(['class'=>'form', 'method' =>'post', 'url'=> action('Languages@searchIndex')]) !!} 
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
            </div> 
        </div>
        
         <div class="col-sm-3">   
            <div class="form-group">
                {!! Form::label('fullname', 'Fullname: ') !!}
                {!! Form::text('fullname', old('fullname') , ['class'=>'form-control']) !!}
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

        {!! Form::submit('search', ['class'=>'btn btn-info']) !!}
        
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


<section class="col-sm-10 col-sm-offset-1">

    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text">Fullname</th>
				<th class="blue-bg white-text">Created at</th>
				<th class="blue-bg white-text">Updated at</th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
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
                            {!! views('Languages', $language->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            {!! edits('Languages', $language['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Languages', $language['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $languages->render() !!}
</section>

@stop
        