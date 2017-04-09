
@extends('admin.layout')

@section('title') Advisor @stop

@section('main')

<h1><center>Advisors @if($advisors) : {{$advisors->total()}} @endif</center></h1>

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
    
    <a href="{{action('Advisors@create')}}" class="btn btn-default pull-right btn-lg blue-border blue-text push-down-5">Add new</a>
    
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
                            {!! views('Advisors', $advisor->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            {!! edits('Advisors', $advisor['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Advisors', $advisor['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $advisors->render() !!}
</section>


@stop
        