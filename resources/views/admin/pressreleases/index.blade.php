
@extends('admin.layout')

@section('title') Pressrelease @stop

@section('main')

<h1><center>Pressreleases @if($pressreleases) : {{$pressreleases->total()}} @endif</center></h1>


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
    
    <a href="{{action('Pressreleases@create')}}" class="btn btn-default pull-right btn-lg blue-border blue-text push-down-5">Add new</a>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text">PR</th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($pressreleases)
                @foreach($pressreleases as $pressrelease)
                    <tr>
						<td>{{$pressrelease->id}}</td>
						<td>{{$pressrelease->name}}</td>
						<td>{{($pressrelease->priority_release)}}</td>
                        <td>
                            {!! views('Pressreleases', $pressrelease->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            {!! edits('Pressreleases', $pressrelease['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Pressreleases', $pressrelease['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $pressreleases->render() !!}
</section>


@stop
        