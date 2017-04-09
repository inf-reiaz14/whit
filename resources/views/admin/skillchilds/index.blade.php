
@extends('admin.layout')

@section('title') Skillchild @stop

@section('main')

<h1><center>Skillchildren @if($skillchilds) : {{$skillchilds->total()}} @endif</center></h1>

<section class="col-sm-10 col-sm-offset-1">
    
    {!! Form::open(['class'=>'form', 'method' =>'post', 'url'=> action('Skillchildren@searchIndex')]) !!} 
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
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
    
    <a href="{{action('Skillchildren@create')}}" class="btn btn-default pull-right btn-lg blue-border blue-text push-down-5">Add new</a>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text">Banner photo</th>
				<th class="blue-bg white-text">Language</th>
				<th class="blue-bg white-text">Skillitem</th>
				<th class="blue-bg white-text">Created at</th>
				<th class="blue-bg white-text">Updated at</th>
				<th class="blue-bg white-text" width="50">Apps</th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($skillchilds)
                @foreach($skillchilds as $skillchild)
                    <tr>
						<td>{{$skillchild->id}}</td>
						<td>{{$skillchild->name}}</td>
						<td><center><a href="{{$skillchild->banner_photo}}" class="btn btn-default btn-xs"><img src="{{$skillchild->banner_photo}}" width="100" height="70" ></a></center></td>
						<td>@if($skillchild->language) {{$skillchild->language->name}} @endif</td>
						<td>@if($skillchild->skillitem) {{$skillchild->skillitem->name}} @endif</td>
						<td>{{$skillchild->created_at}}</td>
						<td>{{$skillchild->updated_at}}</td>
						<td><a href="{{action('Frameworks@frameworksBySkillchild', $skillchild->id)}}" class="btn btn-primary btn-rounded"><i class="fa fa-film"></i></a></td>
                        <td>
                            {!! views('Skillchildren', $skillchild->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            {!! edits('Skillchildren', $skillchild['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Skillchildren', $skillchild['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $skillchilds->render() !!}
</section>


@stop
        