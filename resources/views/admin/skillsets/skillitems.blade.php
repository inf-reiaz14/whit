@extends('admin.layout')

@section('title') Skillitem @stop

@section('main')

<h1><center>Skillitems @if($skillitems) : {{$skillitems->total()}} @endif</center></h1>

<section class="col-xs-12">
    
    {!! Form::open(['class'=>'form', 'method' =>'post', 'url'=> action('Skillitems@searchIndex')]) !!} 
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('language_id', 'Language: ') !!}
                {!! Form::select('language_id', \App\Language::lists('name', 'id'), old('language_id') , ['class'=>'form-control select2']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('skillset_id', 'Skillset: ') !!}
                {!! Form::select('skillset_id', \App\Skillset::lists('name', 'id'), old('skillset_id') , ['class'=>'form-control select2']) !!}
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

        <div class="col-sm-3">
            {!! Form::submit('search', ['class'=>'btn btn-info push-up-25']) !!}
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
        <a class="btn btn-warning pull-right" href="{{action('Skillsets@skillitemsCreate', $skillset->id)}}">Create new skillitem</a>
        <br>
    </h2>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th>Id</th>
				<th>Name</th>
				<th>Language</th>
				<th>Skillset</th>
				<th>Created at</th>
				<th>Updated at</th>
                <th>Show</th>
                <th>Modify</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($skillitems)
                @foreach($skillitems as $skillitem)
                    <tr>
						<td>{{$skillitem->id}}</td>
						<td>{{$skillitem->name}}</td>
						<td>@if($skillitem->language) {{$skillitem->language->name}} @endif</td>
						<td>@if($skillitem->skillset) {{$skillitem->skillset->name}} @endif</td>
						<td>{{$skillitem->created_at}}</td>
						<td>{{$skillitem->updated_at}}</td>
                        <td>
                            <a href="{{action('Skillitems@show', $skillitem->id)}}" class="btn btn-default btn-sm btn-rounded" title="Edit role"><span class="fa fa-pencil"></span></a>
                        </td>
                        <td>
                            <a href="{{action('Skillitems@edit', $skillitem['id'])}}" class="btn btn-default btn-sm btn-rounded" title="Edit role"><span class="fa fa-pencil"></span></a>
                        </td>
                        <td>
                            {!! Form::open(['method'=>'delete', 'url'=> action('Skillitems@destroy', $skillitem->id) ]) !!}
                            {!! Form::hidden('id', $skillitem->id ) !!}
                            <button href="{{action('Skillitems@edit',[$skillitem->id])}}" class="btn btn-danger btn-sm btn-rounded" title="Delete skillitem ">
                                <span class="fa fa-times"></span>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $skillitems->render() !!}
</section>

@stop
        