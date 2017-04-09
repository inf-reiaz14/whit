
@extends('admin.layout')

@section('title') Skillset @stop

@section('main')

<h1 class="page-title"><center>Skillset</center></h1>


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


@if($skillset)
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
                    <td>{{$skillset->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$skillset->name}}</td>
                </tr>
                
                <tr>
                    <td>Icon</td>
                    <td>{{$skillset->icon}}</td>
                </tr>
                
                <tr>
                    <td>Class name</td>
                    <td>{{$skillset->class_name}}</td>
                </tr>
                
                <tr>
                    <td>Language</td>
                    <td>@if($skillset->language) {{$skillset->language->name}} @endif</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$skillset->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$skillset->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Skillsets', $skillset->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
            
                        <a href="{{action('Skillsets@skillitems', $skillset->id)}}" class="btn btn-info btn-sm">skillitems</a>
                        <a href="{{action('Skillsets@skillitemsCreate', $skillset->id)}}" class="btn btn-info btn-sm">add skillitems</a>
                        
                        <a href="{{action('Skillsets@languages', $skillset->id)}}" class="btn btn-info btn-sm">languages</a>
                        <a href="{{action('Skillsets@languagesCreate', $skillset->id)}}" class="btn btn-info btn-sm">add languages</a>
                                        
                </td>
                <td>
                    {!! deletes('Skillsets', $skillset->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        