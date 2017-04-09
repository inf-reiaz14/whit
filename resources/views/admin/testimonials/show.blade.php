
@extends('admin.layout')

@section('title') Testimonial @stop

@section('main')

<h1 class="page-title"><center>Testimonial</center></h1>


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


@if($testimonial)
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
                    <td>{{$testimonial->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$testimonial->name}}</td>
                </tr>
                
                <tr>
                    <td>Designation</td>
                    <td>{{$testimonial->designation}}</td>
                </tr>
                
                <tr>
                    <td>Image photo</td>
                    <td><a href="{{$testimonial->image_photo}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr>
                    <td>Details</td>
                    <td>{{$testimonial->details}}</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$testimonial->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$testimonial->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Testimonials', $testimonial->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Testimonials', $testimonial->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        