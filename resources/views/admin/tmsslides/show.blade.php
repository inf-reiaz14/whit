
@extends('admin.layout')

@section('title') Tmsslide @stop

@section('main')

<h1 class="page-title"><center>Tmsslide</center></h1>


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


@if($tmsslide)
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
                    <td>{{$tmsslide->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$tmsslide->name}}</td>
                </tr>
                
                <tr>
                    <td>Meta tag</td>
                    <td>{{$tmsslide->meta_tag}}</td>
                </tr>
                
                <tr>
                    <td>Meta description</td>
                    <td>{{$tmsslide->meta_description}}</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$tmsslide->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$tmsslide->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Tmsslides', $tmsslide->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Tmsslides', $tmsslide->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        