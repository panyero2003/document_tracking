@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Create Claimant</strong>
</div>



<div class="col-sm-6">


{!! Form::model($claims, ['method'=>'PATCH', 'action'=>['ClaimantController@update', $claims->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('claimantname','Name') !!}
            {!! form::text('claimantname', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('address','Address') !!}
            {!! form::text('address', null, ['class'=>'form-control']) !!}
            </div>


            <div class ="form-group">
            {!! form::label('claimanttype','Type') !!}
            {!! form::text('claimanttype', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('claimantno','Claimant No.') !!}
            {!! form::text('claimantno', null, ['class'=>'form-control']) !!}
            </div>

            
</div>
<div class="col-sm-6">

            <div class ="form-group">
            {!! form::label('contactno','Contact No.') !!}
            {!! form::text('contactno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('mobileno','Mobile No.') !!}
            {!! form::text('mobileno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('agencyname','Agency Name') !!}
            {!! form::text('agencyname', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('categoryclient_id','Category') !!}
            {!! form::select('categoryclient_id', $categories, null, ['class'=>'form-control']) !!}
            </div>

            

        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

    <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['ClaimantController@destroy', $claims->id]]) !!}
        {{ csrf_field() }}


            {!! form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}

         


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
