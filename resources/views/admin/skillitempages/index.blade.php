
@extends('admin.layout')

@section('title') Skillitempage @stop

@section('main')

<h1><center>Skillitempages @if($skillitempages) : {{$skillitempages->total()}} @endif</center></h1>

<section class="col-sm-10 col-sm-offset-1">
    
    {!! Form::open(['class'=>'form', 'method' =>'post', 'url'=> action('Skillitempages@searchIndex')]) !!} 
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('details', 'Details: ') !!}
                {!! Form::text('details', old('details') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('skillitem_id', 'Skillitem: ') !!}
                {!! Form::select('skillitem_id', \App\Skillitem::lists('name', 'id'), old('skillitem_id') , ['class'=>'form-control select2']) !!}
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
        
        <div class="col-xs-12">
            {!! Form::submit('search', ['class'=>'btn btn-info push-up-5']) !!}
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
    
    <a href="{{action('Skillitempages@create')}}" class="btn btn-default pull-right btn-lg blue-border blue-text push-down-5">Add new</a>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text">Skillitem</th>
				<th class="blue-bg white-text">Created at</th>
				<th class="blue-bg white-text">Updated at</th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($skillitempages)
                @foreach($skillitempages as $skillitempage)
                    <tr>
						<td>{{$skillitempage->id}}</td>
						<td>{{$skillitempage->name}}</td>
						<td>@if($skillitempage->skillitem) {{$skillitempage->skillitem->name}} @endif</td>
						<td>{{$skillitempage->created_at}}</td>
						<td>{{$skillitempage->updated_at}}</td>
                        <td>
                            {!! views('Skillitempages', $skillitempage->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            {!! edits('Skillitempages', $skillitempage['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Skillitempages', $skillitempage['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $skillitempages->render() !!}
</section>


@stop
        