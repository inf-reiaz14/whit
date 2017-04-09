
@extends('admin.layout')

@section('title') Contact @stop

@section('main')

<h1 class="page-title"><center>Contact</center></h1>


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


@if($contact)
<section class="row panel-body">
    <table class="table table-bordered table-striped table-actions">
        <tdead>
            <tr>
                <td width="200">Title</td>
                <td>Details</td>
            </tr>
        </tdead>
        <tbody>
                <tr>
                    <td>Id</td>
                    <td>{{$contact->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$contact->name}}</td>
                </tr>
                
                <tr>
                    <td>Icon</td>
                    <td>{{$contact->icon}}</td>
                </tr>
                
                <tr>
                    <td>Address line 1</td>
                    <td>{{$contact->address_line_1}}</td>
                </tr>
                
                <tr>
                    <td>Address line 2</td>
                    <td>{{$contact->address_line_2}}</td>
                </tr>
                
                <tr>
                    <td>Address line 3</td>
                    <td>{{$contact->address_line_3}}</td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td>{{$contact->email}}</td>
                </tr>
                
                <tr>
                    <td>Contact no</td>
                    <td>{{$contact->contact_no}}</td>
                </tr>
                
                <tr>
                    <td>Background photo</td>
                    <td><a href="{{$contact->background_photo}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr>
                    <td>Country</td>
                    <td>@if($contact->country) {{$contact->country->name}} @endif</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$contact->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$contact->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Contacts', $contact->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Contacts', $contact->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        