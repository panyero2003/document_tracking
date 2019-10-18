@extends('layouts.admin');



@section('content')

<h1>Create Users</h1>

{!! Form::open(['method'=>'post', 'action'=>'AdminUsersController@store', 'files'=>true   ]) !!}
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
        {!! form::select('role_id', [''=>'Choose from list'] + $roles, null, ['class'=>'form-control']) !!}

     </div>

<div class ="form-group">
    {!! form::label('is_active','Status') !!}
    {!! form::select('is_active', array(1=>'active', 0=>'Not Active'), 0, ['class'=>'form-control']) !!}
 </div>

    <div class ="form-group">
        {!! form::label('photo_id','Photo') !!}
        {!! form::file('photo_id', null, ['class'=>'form-control']) !!}
     </div>


    <div class ="form-group">
        {!! form::label('password','Password') !!}
        {!! form::password('password',  ['class'=>'form-control']) !!}
     </div>


    <div class ="form-group">

    {!! form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>


    @include('includes.form_errors')



@stop
