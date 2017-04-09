
@extends('admin.layout')

@section('title') Successstory @stop

@section('main')

<h1 class="page-title"><center>Successful story</center></h1>


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


@if($successstory)
<section class="container">
    <img src="{{$successstory->profile_photo}}" alt="{{$successstory->name}}" width="100%" class="img-responsive">
    <h1 class="page-title"><center>{{$successstory->name}}</center></h1>
    <table class="table table-bordered table-striped table-actions">
        <tdead>
            <tr>
                <td width="200">Title</td>
                <td>Details</td>
            </tr>
        </tdead>
        <tbody>
                
                <tr>
                    <td>Alias</td>
                    <td>{{$successstory->alias}}</td>
                </tr>
                
                <tr>
                    <td>Designation</td>
                    <td>{{$successstory->designation}}</td>
                </tr>
                
                <tr>
                    <td>Profile link</td>
                    <td>{{$successstory->profile_link}}</td>
                </tr>
                
                <tr>
                    <td>Skills</td>
                    <td>{{$successstory->skills}}</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$successstory->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$successstory->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Successstories', $successstory->id, '<span class=\'fa fa-edit\'></span> edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Successstories', $successstory->id, '<span class=\'fa fa-times\'></span> Delete', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>
@else

    <h3>No data found.</h3>

@endif

@stop
        