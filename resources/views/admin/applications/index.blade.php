
@extends('admin.layout')

@section('title') Application @stop

@section('main')

<h1><center>Applications @if($applications) : {{$applications->total()}} @endif</center></h1>

<section class="col-sm-10 col-sm-offset-1">
    
    {!! Form::open(['class'=>'form', 'method' =>'post', 'url'=> action('Applications@searchIndex')]) !!} 
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
            </div>
        </div>
        
        <div class="col-sm-3">            
            <div class="form-group">
                {!! Form::label('what_is', 'What is: ') !!}
                {!! Form::text('what_is', old('what_is') , ['class'=>'form-control']) !!}
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

<section class="col-sm-10 col-sm-offset-1">
    
    <a href="{{action('Applications@create')}}" class="push-down-5 btn btn-default pull-right btn-lg blue-border blue-text">Add new</a>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text"><center>Logo</center></th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($applications)
                @foreach($applications as $application)
                    <tr>
						<td>{{$application->id}}</td>
						<td>{{$application->name}}</td>
						<td><center><a href="{{$application->logo_photo}}" class="btn btn-default btn-xs"><img src="{{$application->logo_photo}}" width="100" height="70" ></a></center></td>
                        <td>
                            {!! views('Applications', $application->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            {!! edits('Applications', $application['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Applications', $application['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $applications->render() !!}
</section>


@stop
        