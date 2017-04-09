
@extends('admin.layout')

@section('title') Jobcircular @stop

@section('main')

<h1 class="page-title"><center>Jobcircular</center></h1>


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


@if($jobcircular)
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
                    <td>{{$jobcircular->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$jobcircular->name}}</td>
                </tr>
                
                <tr>
                    <td>Country</td>
                    <td>@if($jobcircular->country) {{$jobcircular->country->name}} @endif</td>
                </tr>
                
                <tr>
                    <td>Skills</td>
                    <td>{{$jobcircular->skills}}</td>
                </tr>
                
                <tr>
                    <td>Category</td>
                    <td>{{$jobcircular->category}}</td>
                </tr>
                
                <tr>
                    <td>Location</td>
                    <td>{{$jobcircular->location}}</td>
                </tr>
                
                <tr>
                    <td>Job details</td>
                    <td>{!! $jobcircular->job_details_link !!}</td>
                </tr>
                
                <tr>
                    <td>Application link</td>
                    <td>{{$jobcircular->application_link}}</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$jobcircular->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$jobcircular->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Jobcirculars', $jobcircular->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Jobcirculars', $jobcircular->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        