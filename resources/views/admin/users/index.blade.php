@extends('layouts.admin')


@section('content')

  @if(Session::has('deleted_user'))

    <h3>{{session('deleted_user')}}</h3>


    @endif

<h1>Users</h1>

    <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
              <th>Photo</th>
            <th>Name</th>

            <th>Email</th>
              <th>Role</th>
              <th>Actime</th>
              <th>Created</th>
              <th>Updated</th>
          </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)


          <tr>
            <td>{{$user->id}}</td>
              <td><img height="50" src="/codehacking/public/images/{{$user->photo ? $user->photo->file : 'No user photo'}}" alt=""></td>
              <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
              <td>{{$user->role->name}}</td>
              <td>{{$user->is_active==1 ? 'Active' : 'Not Active'}}</td>
              <td>{{$user->created_at->diffForHumans()}}</td>
              <td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>


           @endforeach
        @endif

        </tbody>
      </table>


@stop