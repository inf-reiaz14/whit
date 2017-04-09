
@extends('admin.layout')

@section('title') Framework @stop

@section('main')

<h1><center>Frameworks @if($frameworks) : {{$frameworks->total()}} @endif</center></h1>

<section class="col-sm-10 col-sm-offset-1">
    
    {!! Form::open(['class'=>'form', 'method' =>'post', 'url'=> action('Frameworks@searchIndex')]) !!} 
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('link', 'Link: ') !!}
                {!! Form::text('link', old('link') , ['class'=>'form-control']) !!}
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
    
    <a href="{{action('Frameworks@create')}}" class="btn btn-default pull-right btn-lg blue-border blue-text push-down-5">Add new</a>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text">Banner photo</th>
				<th class="blue-bg white-text">Skillchild</th>
				<th class="blue-bg white-text">Created at</th>
				<th class="blue-bg white-text">Updated at</th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($frameworks)
                @foreach($frameworks as $framework)
                    <tr>
						<td>{{$framework->id}}</td>
						<td>{{$framework->name}}</td>
						<td><center><a href="{{$framework->banner_photo}}" class="btn btn-default btn-xs"><img src="{{$framework->banner_photo}}" width="100" height="70" ></a></center></td>
						<td>@if($framework->skillchild) {{$framework->skillchild->name}} @endif</td>
						<td>{{$framework->created_at}}</td>
						<td>{{$framework->updated_at}}</td>
                        <td>
                            {!! views('Frameworks', $framework->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            {!! edits('Frameworks', $framework['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Frameworks', $framework['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $frameworks->render() !!}
</section>


@stop
        