
@extends('admin.layout')

@section('title') Intern @stop

@section('main')

<h1 class="page-title"><center>Intern</center></h1>


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


@if($intern)
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
                    <td>{{$intern->id}}</td>
                </tr>
                
                <tr>
                    <td>Name</td>
                    <td>{{$intern->name}}</td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td>{{$intern->email}}</td>
                </tr>
                
                <tr>
                    <td>Phone</td>
                    <td>{{$intern->phone}}</td>
                </tr>
                
                <tr>
                    <td>Country</td>
                    <td>@if($intern->country) {{$intern->country->name}} @endif</td>
                </tr>
                
                <tr>
                    <td>Image photo</td>
                    <td><a href="{{$intern->image_photo}}" class="btn btn-default btn-rounded btn-xs"><span class="fa fa-download"></span></a></td>
                </tr>
                
                <tr>
                    <td>Prefetch</td>
                    <td>{{$intern->prefetch}}</td>
                </tr>
                
                <tr>
                    <td>Dob date</td>
                    <td>{{$intern->dob_date}}</td>
                </tr>
                
                <tr>
                    <td>About me</td>
                    <td>{{$intern->about_me}}</td>
                </tr>
                
                <tr>
                    <td>Family details</td>
                    <td>{{$intern->family_details}}</td>
                </tr>
                
                <tr>
                    <td>Education background</td>
                    <td>{{$intern->education_background}}</td>
                </tr>
                
                <tr>
                    <td>Aim in life en</td>
                    <td>{{$intern->aim_in_life_en}}</td>
                </tr>
                
                <tr>
                    <td>Aim in life native</td>
                    <td>{{$intern->aim_in_life_native}}</td>
                </tr>
                
                <tr>
                    <td>Why interested in carereer travel en</td>
                    <td>{{$intern->why_interested_in_carereer_travel_en}}</td>
                </tr>
                
                <tr>
                    <td>Why interested in carereer travel native</td>
                    <td>{{$intern->why_interested_in_carereer_travel_native}}</td>
                </tr>
                
                <tr>
                    <td>Internship duration</td>
                    <td>{{$intern->internship_duration}}</td>
                </tr>
                
                <tr>
                    <td>Internship at department</td>
                    <td>{{$intern->internship_at_department}}</td>
                </tr>
                
                <tr>
                    <td>Google plus link</td>
                    <td>{{$intern->google_plus_link}}</td>
                </tr>
                
                <tr>
                    <td>Skype link</td>
                    <td>{{$intern->skype_link}}</td>
                </tr>
                
                <tr>
                    <td>Linkedin link</td>
                    <td>{{$intern->linkedin_link}}</td>
                </tr>
                
                <tr>
                    <td>Twitter link</td>
                    <td>{{$intern->twitter_link}}</td>
                </tr>
                
                <tr>
                    <td>Facebook link</td>
                    <td>{{$intern->facebook_link}}</td>
                </tr>
                
                <tr>
                    <td>Webhawksit link</td>
                    <td>{{$intern->webhawksit_link}}</td>
                </tr>
                
                <tr>
                    <td>Status</td>
                    <td>@if($intern->status == 0)New @elseif($intern->status == 1)Approved @endif</td>
                </tr>
                
                <tr>
                    <td>Created at</td>
                    <td>{{$intern->created_at}}</td>
                </tr>
                
                <tr>
                    <td>Updated at</td>
                    <td>{{$intern->updated_at}}</td>
                </tr>
                
            <tr>
                <td>
                    {!! edits('Interns', $intern->id, 'edit', ['class'=>'btn btn-warning btn-rounded']) !!}
                            
                </td>
                <td>
                    {!! deletes('Interns', $intern->id, '<span class=\'fa fa-times\'></span>', ['class'=>'btn btn-danger btn-rounded']) !!}
                </td>
            </tr>
        </tbody>
    </table>
</section>

@else

    <h3>No data found.</h3>

@endif

@stop
        