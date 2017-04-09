
@extends('admin.layout')

@section('title') Advisor @stop

@section('main')

<h1><center>Directors @if($advisors) : {{$advisors->total()}} @endif</center></h1>


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
    
    <a href="{{action('Directors@create')}}" class="btn btn-default pull-right btn-lg blue-border blue-text push-down-5">Add new</a>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text">Profile Image</th>
				<th class="blue-bg white-text">Country</th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($advisors)
                @foreach($advisors as $advisor)
                    <tr>
						<td>{{$advisor->id}}</td>
						<td>{{$advisor->name}}</td>
						<td><center><a href="{{$advisor->image_photo}}" class="btn btn-default btn-xs"><img src="{{$advisor->image_photo}}" width="100" height="70" ></a></center></td>
						<td>{{$advisor->email}}</td>
                        <td>
                            <a href="{{action('Directors@show', $advisor->id)}}" class="btn btn-success btn-rounded"><span class="fa fa-expand"></span></a>
                        </td>
                        <td>
                            <a href="{{action('Directors@edit', $advisor['id'])}}" class="btn btn-warning btn-rounded"><span class="fa fa-pencil"></span></a>
                        </td>
                        <td>
                            {!! Form::open(['url'=> action('Directors@destroy', $advisor['id']), 'method'=> 'DELETE']) !!}
                            {!! Form::hidden('id', $advisor['id']) !!}
                            <button class="btn btn-danger btn-rounded" type="submit"><span class="fa fa-times"></span></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $advisors->render() !!}
</section>


@stop
        