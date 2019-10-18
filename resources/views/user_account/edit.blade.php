@extends('layouts.top_admin');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <h3><strong>Edit User's Account</strong></h3>
</div>



<div class="col-sm-12">


{!! Form::model($users, ['method'=>'PATCH', 'action'=>['AccountUserController@update', $users->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('first_name','First Name') !!}
            {!! form::text('first_name', null, ['class'=>'form-control']) !!}
            </div>
            
            <div class ="form-group">
            {!! form::label('last_name','Last Name') !!}
            {!! form::text('last_name', null, ['class'=>'form-control']) !!}
            </div>
            
            <div class ="form-group">
            {!! form::label('email','Email') !!}
            {!! form::email('email', null, ['class'=>'form-control']) !!}
            </div>

            
        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

 <div class="col-sm-6"> 
<a class="btn btn-warning"  href="{{ URL::previous() }}">Back </a>
</div>
    </div>
    </div>

    </div>

    </div>

    <div class="row">

        @include('includes.form_errors')

    </div>

</div>

@stop
