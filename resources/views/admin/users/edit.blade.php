@extends('layouts.admin');



@section('content')

    <h1>Edit Users</h1>

    <div class="row">


    <div class="col-sm-3">
        <img height = "400%" src="/codehacking/public/images/{{$users->photo ? $users->photo->file : 'http://placehold.it/400X400'}}" alt="" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-9">


    {!! Form::model($users, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $users->id], 'files'=>true ]) !!}
    {{ csrf_field() }}


   <div class ="form-group">
        {!! form::label('name','Name') !!}
        {!! form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class ="form-group">
        {!! form::label('email','Email') !!}
        {!! form::email('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class ="form-group">
        {!! form::label('role_id','Role') !!}
        {!! form::select('role_id', $roles, null, ['class'=>'form-control']) !!}

    </div>

    <div class ="form-group">
        {!! form::label('is_active','Status') !!}
        {!! form::select('is_active', array(1=>'active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
    </div>

    <div class ="form-group">
        {!! form::label('photo_id','File') !!}
        {!! form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>

    <div class ="form-group">
        {!! form::label('password','Password') !!}
        {!! form::password('password',  ['class'=>'form-control']) !!}
    </div>


    <div class ="form-group">

        {!! form::submit('Update User', ['class'=>'btn btn-primary col-sm-3']) !!}

    </div>

        {!! Form::close() !!}

    <div class="col-sm-6">
        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $users->id]]) !!}
        {{ csrf_field() }}


            {!! form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-6']) !!}



    </div>
    </div>

    </div>

    </div>

    <div class="row">

        @include('includes.form_errors')

    </div>




@stop
