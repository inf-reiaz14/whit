
@extends('admin.layout')

@section('title') Intern @stop

@section('main')

<h1><center>Interns @if($interns) : {{$interns->total()}} @endif</center></h1>

<section class="col-sm-10 col-sm-offset-1">
    
    {!! Form::open(['class'=>'form ', 'method' =>'post', 'url'=> action('Interns@searchIndex')]) !!} 
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('email', 'Email: ') !!}
                {!! Form::text('email', old('email') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('phone', 'Phone: ') !!}
                {!! Form::text('phone', old('phone') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('country_id', 'Country: ') !!}
                {!! Form::select('country_id', \App\Country::lists('name', 'id'), old('country_id') , ['class'=>'form-control select2']) !!}
            </div>
        </div>
            
        <div class="col-sm-12">
            {!! Form::submit('search', ['class'=>'btn btn-info push-up-20']) !!}
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
    
    <a href="{{action('Interns@create')}}" class="push-down-5 btn btn-default pull-right btn-lg blue-border blue-text">Add new</a>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text">Country</th>
				<th class="blue-bg white-text">Image photo</th>
				<th class="blue-bg white-text">Status</th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($interns)
                @foreach($interns as $intern)
                    <tr>
						<td>{{$intern->id}}</td>
						<td>{{$intern->name}}</td>
						<td>@if($intern->country) {{$intern->country->name}} @endif</td>
						<td><center><a href="{{$intern->image_photo}}" class="btn btn-default btn-xs"><img src="{{$intern->image_photo}}" width="100" height="70" ></a></center></td>
						<td>@if($intern->status == 0)New @elseif($intern->status == 1)Approved @endif</td>
                        <td>
                            {!! views('Interns', $intern->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            {!! edits('Interns', $intern['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Interns', $intern['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $interns->render() !!}
</section>


@stop
        