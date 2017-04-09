
@extends('admin.layout')

@section('title') Skillchild @stop

@section('main')

<h1 class="page-title"><center>Skillchild</center></h1>


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


@if($skillchild)
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
                    <td>{{$skillchild->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$skillchild->name}}</td>
                </tr>
                
                <tr>
                    <td>Banner photo</td>
                    <td><a href="{{$skillchild->banner_photo}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr>
                    <td>Link</td>
                    <td>{{$skillchild->link}}</td>
                </tr>
                
                <tr>
                    <td>Description</td>
                    <td>{!! $skillchild->description !!}</td>
                </tr>
                
                <tr>
                    <td>Language</td>
                    <td>@if($skillchild->language) {{$skillchild->language->name}} @endif</td>
                </tr>
                
                <tr>
                    <td>Skillitem</td>
                    <td>@if($skillchild->skillitem) {{$skillchild->skillitem->name}} @endif</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$skillchild->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$skillchild->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Skillchildren', $skillchild->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Skillchildren', $skillchild->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        