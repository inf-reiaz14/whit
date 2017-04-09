
@extends('admin.layout')

@section('title') Framework @stop

@section('main')

<h1 class="page-title"><center>Framework</center></h1>


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


@if($framework)
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
                    <td>{{$framework->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$framework->name}}</td>
                </tr>
                
                <tr>
                    <td>Link</td>
                    <td>{{$framework->link}}</td>
                </tr>
                
                <tr>
                    <td>Banner image</td>
                    <td><a href="{{$framework->banner_photo}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr>
                    <td>Description</td>
                    <td>{!! $framework->description !!}</td>
                </tr>
                
                <tr>
                    <td>Skillchild</td>
                    <td>@if($framework->skillchild) {{$framework->skillchild->name}} @endif</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$framework->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$framework->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Frameworks', $framework->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Frameworks', $framework->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        