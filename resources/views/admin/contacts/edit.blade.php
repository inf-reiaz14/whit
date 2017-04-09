
@extends('admin.layout')

@section('title') Edit Contacts @stop

@section('main')

<h1 class="page-title blue-bg white-text"><center>Modify Contact</center></h1>


@if($errors->any())
<section class="col-sm-6 col-sm-offset-3">
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

{!! Form::open( ['method'=>'patch', 'url'=> action('Contacts@update', $contact->id), 'enctype'=>'multipart/form-data' ]) !!}

    
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', $contact->name , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('icon', 'Icon: ') !!}
                {!! Form::text('icon', $contact->icon , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('address_line_1', 'Address line 1: ') !!}
                {!! Form::text('address_line_1', $contact->address_line_1 , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('address_line_2', 'Address line 2: ') !!}
                {!! Form::text('address_line_2', $contact->address_line_2 , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('address_line_3', 'Address line 3: ') !!}
                {!! Form::text('address_line_3', $contact->address_line_3 , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('email', 'Email: ') !!}
                {!! Form::text('email', $contact->email , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('contact_no', 'Contact no: ') !!}
                {!! Form::text('contact_no', $contact->contact_no , ['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                <label for="background_photos">Background photo: <span class="badge badge-primary"><input type="checkbox" value="1" name="background_photo_delete" /> remove</span></label>
                {!! Form::file('background_photos' , ['class'=>'form-control file']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('country_id', 'Country: ') !!}
                {!! Form::select('country_id', \App\Country::lists('name', 'id'), $contact->country_id , ['class'=>'form-control select2']) !!}
            </div>
                
    <div class="form-group">
        {!! Form::submit('Update Contact', ['class'=>'form-control btn btn-info']) !!}
    </div>

{!! Form::close() !!}


</section>

@stop
        