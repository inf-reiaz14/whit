
@extends('admin.layout')

@section('title') Pressrelease @stop

@section('main')

<h1 class="page-title"><center>Press Release</center></h1>


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


@if($pressrelease)
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
                    <td>{{$pressrelease->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$pressrelease->name}}</td>
                </tr>
                
                <tr>
                    <td>Priority Release</td>
                    <td>{{yn($pressrelease->priority_release)}}</td>
                </tr>
                
                <tr>
                    <td>Banner image</td>
                    <td><a href="{{$pressrelease->banner_photo}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr>
                    <td>Short description</td>
                    <td>{{$pressrelease->short_description}}</td>
                </tr>
                
                <tr>
                    <td>Details</td>
                    <td>{!! $pressrelease->details !!}</td>
                </tr>
                
                <tr>
                    <td>Live link</td>
                    <td>{{$pressrelease->live_link}}</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$pressrelease->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$pressrelease->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Pressreleases', $pressrelease->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Pressreleases', $pressrelease->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        