
@extends('admin.layout')

@section('title') Application @stop

@section('main')

<h1 class="page-title"><center>Application</center></h1>


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


@if($application)
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
                    <td>{{$application->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$application->name}}</td>
                </tr>
                
                <tr>
                    <td>Logo</td>
                    <td><a href="{{$application->logo_photo}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr>
                    <td>Banner</td>
                    <td><a href="{{$application->banner_photo}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr>
                    <td>What is</td>
                    <td>{{$application->what_is}}</td>
                </tr>
                
                <tr>
                    <td>Details</td>
                    <td>{{$application->details}}</td>
                </tr>
                
                <tr>
                    <td>Meta tag</td>
                    <td>{{$application->meta_tag}}</td>
                </tr>
                
                <tr>
                    <td>Meta description</td>
                    <td>{{$application->meta_description}}</td>
                </tr>
                
                <tr>
                    <td>Manual file</td>
                    <td><a href="{{$application->manual_file}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr>
                    <td>Application link</td>
                    <td>{{$application->application_link}}</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$application->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$application->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Applications', $application->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Applications', $application->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        