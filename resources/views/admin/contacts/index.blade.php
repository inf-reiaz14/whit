
@extends('admin.layout')

@section('title') Contact @stop

@section('main')

<h1><center>Contacts @if($contacts) : {{$contacts->total()}} @endif</center></h1>

<section class="col-sm-10 col-sm-offset-1">
    
    {!! Form::open(['class'=>'form', 'method' =>'post', 'url'=> action('Contacts@searchIndex')]) !!} 
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
                {!! Form::label('contact_no', 'Contact no: ') !!}
                {!! Form::text('contact_no', old('contact_no') , ['class'=>'form-control']) !!}
            </div>
        </div>
            
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('country_id', 'Country: ') !!}
                {!! Form::select('country_id', \App\Country::lists('name', 'id'), old('country_id') , ['class'=>'form-control select2']) !!}
            </div>
        </div>

        <div class="col-sm-12">
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
    
    <a href="{{action('Contacts@create')}}" class="btn btn-default pull-right btn-lg blue-border blue-text">Add new</a>
    
    <table class="table table-responsive">
        <thead>
            <tr>
				<th class="blue-bg white-text">Id</th>
				<th class="blue-bg white-text">Name</th>
				<th class="blue-bg white-text">Email</th>
				<th class="blue-bg white-text">Contact no</th>
				<th class="blue-bg white-text">Background photo</th>
                <th class="blue-bg white-text" width="50">Show</th>
                <th class="blue-bg white-text" width="50">Modify</th>
                <th class="blue-bg white-text" width="50">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($contacts)
                @foreach($contacts as $contact)
                    <tr>
						<td>{{$contact->id}}</td>
						<td>{{$contact->name}}</td>
						<td>{{$contact->email}}</td>
						<td>{{$contact->contact_no}}</td>
						<td><center><a href="{{$contact->background_photo}}" class="btn btn-default btn-xs"><img src="{{$contact->background_photo}}" width="100" height="70" ></a></center></td>
                        <td>
                            {!! views('Contacts', $contact->id, '<span class=\'fa fa-expand\'></span>', ['class'=>'btn btn-success btn-rounded']) !!}
                        </td>
                        <td>
                            {!! edits('Contacts', $contact['id'], '<span class=\'fa fa-pencil\'></span>', ['class'=>'btn btn-warning btn-rounded']) !!}
                        </td>
                        <td>
                            {!! deletes('Contacts', $contact['id'], '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {!! $contacts->render() !!}
</section>

@stop
        