@extends('admin.layout')

@section('title') Skillchild @stop

@section('main')

<h1><center>Skillchildren @if($skillchilds) : {{$skillchilds->total()}} @endif</center></h1>

<section class="col-xs-12">
    
    {!! Form::open(['class'=>'form', 'method' =>'post', 'url'=> action('Skillchildren@searchIndex')]) !!} 
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('skillitem_id', 'Skillitem: ') !!}
                {!! Form::select('skillitem_id', \App\Skillitem::lists('name', 'id'), old('skillitem_id') , ['class'=>'form-control select2']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            {!! Form::submit('search', ['class'=>'btn btn-info']) !!}
        </div>
        
        {!! Form::close() !!}
        
    
    <hr>
</section>

<section class="col-sm-11">
@if($errors->any())

    <h4>Please check:</h4>
    
    <ul>
        @foreach($errors->all() as $error)
        
            <li>{{$error}}</li>
        
        @endforeach
    </ul>
    <hr>
    
@endif
</section>

<section class="col-sm-11">
    <h2>
        <a class="btn btn-warning pull-right" href="{{action('Skillitems@skillchildsCreate', $skillitem->id)}}">Create new skillchild</a>
        <br>
    </h2>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th>Id</th>
				<th>Name</th>
				<th>Language</th>
				<th>Skillitem</th>
				<th>Created at</th>
				<th>Updated at</th>
                <th>Show</th>
                <th>Modify</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($skillchilds)
                @foreach($skillchilds as $skillchild)
                    <tr>
						<td>{{$skillchild->id}}</td>
						<td>{{$skillchild->name}}</td>
						<td>@if($skillchild->language) {{$skillchild->language->name}} @endif</td>
						<td>@if($skillchild->skillitem) {{$skillchild->skillitem->name}} @endif</td>
						<td>{{$skillchild->created_at}}</td>
						<td>{{$skillchild->updated_at}}</td>
                        <td>
                            <a href="{{action('Skillchildren@show', $skillchild->id)}}" class="btn btn-default btn-sm btn-rounded" title="Edit role"><span class="fa fa-pencil"></span></a>
                        </td>
                        <td>
                            <a href="{{action('Skillchildren@edit', $skillchild['id'])}}" class="btn btn-default btn-sm btn-rounded" title="Edit role"><span class="fa fa-pencil"></span></a>
                        </td>
                        <td>
                            {!! Form::open(['method'=>'delete', 'url'=> action('Skillchildren@destroy', $skillchild->id) ]) !!}
                            {!! Form::hidden('id', $skillchild->id ) !!}
                            <button href="{{action('Skillchildren@edit',[$skillchild->id])}}" class="btn btn-danger btn-sm btn-rounded" title="Delete skillchild ">
                                <span class="fa fa-times"></span>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $skillchilds->render() !!}
</section>

@stop
        