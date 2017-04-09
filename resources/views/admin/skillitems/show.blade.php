
@extends('admin.layout')

@section('title') Skillitem @stop

@section('main')

<h1 class="page-title"><center>Skill Item</center></h1>


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


@if($skillitem)
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
                    <td>{{$skillitem->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$skillitem->name}}</td>
                </tr>
                
                <tr>
                    <td>Language</td>
                    <td>@if($skillitem->language) {{$skillitem->language->name}} @endif</td>
                </tr>
                
                <tr>
                    <td>Skillset</td>
                    <td>@if($skillitem->skillset) {{$skillitem->skillset->name}} @endif</td>
                </tr>
                
                <tr>
                    <td>Meta tag</td>
                    <td>{{$skillitem->meta_tag}}</td>
                </tr>
                
                <tr>
                    <td>Meta description</td>
                    <td>{{$skillitem->meta_description}}</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$skillitem->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$skillitem->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Skillitems', $skillitem->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
            
                        <a href="{{action('Skillitems@skillchilds', $skillitem->id)}}" class="btn btn-info btn-sm">Skill Children</a>
                        <a href="{{action('Skillitems@skillchildsCreate', $skillitem->id)}}" class="btn btn-info btn-sm">add skill Child</a>
                                        
                </td>
                <td>
                    {!! deletes('Skillitems', $skillitem->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        