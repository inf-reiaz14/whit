
@extends('admin.layout')

@section('title') Language @stop

@section('main')

<h1 class="page-title"><center>Language</center></h1>


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


@if($language)
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
                    <td>{{$language->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$language->name}}</td>
                </tr>
                
                <tr>
                    <td>Fullname</td>
                    <td>{{$language->fullname}}</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$language->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$language->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Languages', $language->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Languages', $language->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        