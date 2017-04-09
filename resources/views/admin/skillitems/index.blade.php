
@extends('admin.layout')

@section('title') Skillitem @stop

@section('main')

<h1><center>Skillitems @if($skillitems) : {{$skillitems->total()}} @endif</center></h1>

<section class="col-sm-10 col-sm-offset-1">
    
    {!! Form::open(['class'=>'form', 'method' =>'post', 'url'=> action('Skillitems@searchIndex')]) !!} 
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
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
                {!! Form::label('meta_tag', 'Meta tag: ') !!}
                {!! Form::text('meta_tag', old('meta_tag') , ['class'=>'form-control']) !!}
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

<section class="col-sm-10 col-sm-offset-1">
    
    <a href="{{action('Skillitems@create')}}" class="push-down-5 btn btn-default pull-right btn-lg blue-border blue-text">Add new</a>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text">Skillset</th>
                <th class="blue-bg white-text" width="50">Skill item</th>
                <th class="blue-bg white-text" width="50">Page</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($skillitems)
                @foreach($skillitems as $skillitem)
                    <tr>
						<td>{{$skillitem->id}}</td>
						<td>{{$skillitem->name}}</td>
						<td>@if($skillitem->skillset) {{$skillitem->skillset->name}} @endif</td>
                        <td>
                            {!! views('Skillitems', $skillitem->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            <a href="{{action('Skillitems@detail', $skillitem->id)}}" class="btn btn-success btn-rounded" target="_blank"><span class="fa fa-expand"></span></a>
                        </td>
                        <td>
                            {!! edits('Skillitems', $skillitem['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Skillitems', $skillitem['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $skillitems->render() !!}
</section>


@stop
        