
@extends('admin.layout')

@section('title') Casestudy @stop

@section('main')

<h1><center>Case Studies @if($casestudies) : {{$casestudies->total()}} @endif</center></h1>


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
    
    <a href="{{action('Casestudies@create')}}" class="btn btn-default pull-right btn-lg blue-border blue-text push-down-5">Add new</a>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text text-center">Slide Image</th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($casestudies)
                @foreach($casestudies as $casestudy)
                    <tr>
						<td>{{$casestudy->id}}</td>
						<td>{{$casestudy->name}}</td>
						<td><center><a href="{{$casestudy->study_photo}}" class="btn btn-default btn-xs"><img src="{{$casestudy->study_photo}}" width="100" height="70" ></a></center></td>
                        <td>
                            {!! views('Casestudies', $casestudy->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            {!! edits('Casestudies', $casestudy['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Casestudies', $casestudy['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $casestudies->render() !!}
</section>


@stop
        