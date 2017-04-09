
@extends('admin.layout')

@section('title') Create new Contact @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Contacts</center></h1>


@if($errors->any())
<section class="row panel-body">
    <h4>Please check:</h4>
    
    <ul>
        @foreach($errors->all() as $error)
        
            <li>{{$error}}</li>
        
        @endforeach
    </ul>
    <hr>
</section>    
@endif


<section class="col-sm-6 col-sm-offset-3">

<h3>Create Contact</h3>


{!! Form::open( ['url'=> action('Contacts@store'), 'enctype'=>'multipart/form-data' ]) !!}

    
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', old('name') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('icon', 'Icon: ') !!}
            {!! Form::text('icon', old('icon') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('address_line_1', 'Address line 1: ') !!}
            {!! Form::text('address_line_1', old('address_line_1') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('address_line_2', 'Address line 2: ') !!}
            {!! Form::text('address_line_2', old('address_line_2') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('address_line_3', 'Address line 3: ') !!}
            {!! Form::text('address_line_3', old('address_line_3') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('email', 'Email: ') !!}
            {!! Form::text('email', old('email') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('contact_no', 'Contact no: ') !!}
            {!! Form::text('contact_no', old('contact_no') , ['class'=>'form-control']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('background_photos', 'Background photo: ') !!}
            {!! Form::file('background_photos', ['class'=>'form-control file']) !!}
        </div>
            
        <div class="form-group">
            {!! Form::label('country_id', 'Country: ') !!}
            {!! Form::select('country_id', \App\Country::lists('name', 'id'), old('country_id') , ['class'=>'form-control select2']) !!}
        </div>
            
    <div class="form-group">
        {!! Form::submit('Save Contact', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        