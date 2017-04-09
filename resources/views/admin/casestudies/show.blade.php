
@extends('admin.layout')

@section('title') Casestudy @stop

@section('main')

<h1 class="page-title"><center>Case Study</center></h1>


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


@if($casestudy)
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
                    <td>{{$casestudy->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$casestudy->name}}</td>
                </tr>
                
                <tr>
                    <td>Slide Image</td>
                    <td><a href="{{$casestudy->study_photo}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$casestudy->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$casestudy->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Casestudies', $casestudy->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Casestudies', $casestudy->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        