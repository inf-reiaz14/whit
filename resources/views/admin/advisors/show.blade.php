
@extends('admin.layout')

@section('title') Advisor @stop

@section('main')

<h1 class="page-title"><center>Advisor</center></h1>


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


@if($advisor)
<section class="row panel-body">
    
    <img src="{{$advisor->image_photo}}" class="img-thumbnail">
    
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
                    <td>{{$advisor->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$advisor->name}}</td>
                </tr>
                
                <tr>
                    <td>Designation</td>
                    <td>{{$advisor->designation}}</td>
                </tr>
                
                <tr class="hidden">
                    <td>Banner photo</td>
                    <td><a href="{{$advisor->banner_photo}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr class="hidden">
                    <td>Display group</td>
                    <td>{{$advisor->display_group}}</td>
                </tr>
                
                <tr>
                    <td>Location</td>
                    <td>{{$advisor->location}}</td>
                </tr>
                
                <tr>
                    <td>Current Residence</td>
                    <td>{{$advisor->residence}}</td>
                </tr>
                
                <tr>
                    <td>Country</td>
                    <td>@if($advisor->country) {{$advisor->country->name}} @endif</td>
                </tr>
                
                <tr>
                    <td>I am</td>
                    <td>{{$advisor->i_am}}</td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td>{{$advisor->email}}</td>
                </tr>
                
                <tr>
                    <td>Summary</td>
                    <td>{{$advisor->summary}}</td>
                </tr>
                
                <tr>
                    <td>Myself in Details</td>
                    <td>{!! $advisor->about_professionalism !!}</td>
                </tr>
                
                <tr>
                    <td>Google plus link</td>
                    <td>{{$advisor->google_plus_link}}</td>
                </tr>
                
                <tr>
                    <td>Skype link</td>
                    <td>{{$advisor->skype_link}}</td>
                </tr>
                
                <tr>
                    <td>Linkedin link</td>
                    <td>{{$advisor->linkedin_link}}</td>
                </tr>
                
                <tr>
                    <td>Twitter link</td>
                    <td>{{$advisor->twitter_link}}</td>
                </tr>
                
                <tr>
                    <td>Facebook link</td>
                    <td>{{$advisor->facebook_link}}</td>
                </tr>
                
                <tr>
                    <td>Webhawksit link</td>
                    <td>{{$advisor->webhawksit_link}}</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$advisor->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$advisor->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Advisors', $advisor->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Advisors', $advisor->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        