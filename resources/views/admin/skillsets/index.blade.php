
@extends('admin.layout')

@section('title') Skillset @stop

@section('main')

<h1><center>Skillsets @if($skillsets) : {{$skillsets->total()}} @endif</center></h1>

<section class="col-sm-10 col-sm-offset-1">
    
    {!! Form::open(['class'=>'form', 'method' =>'post', 'url'=> action('Skillsets@searchIndex')]) !!} 
        
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('icon', 'Icon: ') !!}
                {!! Form::text('icon', old('icon') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('class_name', 'Class name: ') !!}
                {!! Form::text('class_name', old('class_name') , ['class'=>'form-control']) !!}
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


<section class="col-sm-10 col-sm-offset-1 push-up-20">
    
    <a href="{{action('Skillsets@create')}}" class="btn btn-default pull-right btn-lg blue-border blue-text push-down-5">Add new</a>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text">Icon</th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($skillsets)
                @foreach($skillsets as $skillset)
                    <tr>
						<td>{{$skillset->id}}</td>
						<td>{{$skillset->name}}</td>
						<td>{{$skillset->icon}}</td>
                        <td>
                            {!! views('Skillsets', $skillset->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            {!! edits('Skillsets', $skillset['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Skillsets', $skillset['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $skillsets->render() !!}
</section>

@stop
        