
@extends('admin.layout')

@section('title') Skillitempage @stop

@section('main')

<h1 class="page-title"><center>Skillitempage</center></h1>


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


@if($skillitempage)
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
                    <td>{{$skillitempage->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$skillitempage->name}}</td>
                </tr>
                
                <tr>
                    <td>Banner photo</td>
                    <td><a href="{{$skillitempage->banner_photo}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr>
                    <td>Details</td>
                    <td>{!! $skillitempage->details !!}</td>
                </tr>
                
                <tr>
                    <td>Skillitem</td>
                    <td>@if($skillitempage->skillitem) {{$skillitempage->skillitem->name}} @endif</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$skillitempage->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$skillitempage->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Skillitempages', $skillitempage->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Skillitempages', $skillitempage->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        