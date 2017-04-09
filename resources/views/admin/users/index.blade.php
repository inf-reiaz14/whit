@extends('admin.layout')

@section('main')

<h3>Users</h3>


@if($errors->any())

    <h4>Please check:</h4>
    
    @foreach($errors as $error)
    
        <li>{{$error}}</li>
    
    @endforeach
    
    <hr>
    
@endif



<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>View</th>
            <th>Modify</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @if($users)
            @foreach($users as $user)
                
                <tr>
                    <td>{{$user->name}}</td>
                    <td>@if($user->roles){{$user->roles->name}} @endif</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->contact}}</td>
                    <td><a href="{{action('Users@show', $user->id)}}" class="btn btn-info"><i class="fa fa-expand"></i></a></td>
                    <td>
                        <a href="{{action('Users@edit', $user->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                    </td>
                    <td>
                        {!! Form::open(['url'=>action('Users@destroy', $user->id), 'method'=>'DELETE']) !!}
                        {!! Form::hidden('id',$user->id) !!}
                        <button class="btn btn-info"> <i class="fa fa-trash-o"></i> </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

@stop