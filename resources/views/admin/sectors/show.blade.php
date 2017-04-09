
@extends('admin.layout')

@section('title') Sector @stop

@section('main')

<h1 class="page-title"><center>Sector</center></h1>


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


@if($sector)
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
                    <td>{{$sector->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$sector->name}}</td>
                </tr>
                
                <tr>
                    <td>Icon</td>
                    <td>{{$sector->icon}}</td>
                </tr>
                
                <tr>
                    <td>Heading</td>
                    <td>{{$sector->heading}}</td>
                </tr>
                
                <tr>
                    <td>Details</td>
                    <td>{{$sector->details}}</td>
                </tr>
                
                <tr>
                    <td>Meta tag</td>
                    <td>{{$sector->meta_tag}}</td>
                </tr>
                
                <tr>
                    <td>Meta description</td>
                    <td>{{$sector->meta_description}}</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$sector->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$sector->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Sectors', $sector->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Sectors', $sector->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        