@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Edit Requisition and Issue Slip</strong>
</div>



<div class="col-sm-6">


{!! Form::model($requisitions, ['method'=>'PATCH', 'action'=>['RequisitionController@update', $requisitions->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('dep_id','Department') !!}
            {!! form::select('dep_id', $department, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pgsorisno','PR No') !!}
            {!! form::text('pgsorisno', null, ['class'=>'form-control']) !!}
            </div>


            <div class ="form-group">
            {!! form::label('pgsodate','PGSO Date') !!}
            {!! form::date('pgsodate', null, ['class'=>'form-control']) !!}
            </div>

           <div class ="form-group">
            {!! form::label('pgsostatus_id','PGSO Status') !!}
            {!! form::select('pgsostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bpgsostatusdatetime','BAC Status') !!}
            {!! form::date('pgsostatusdatetime', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pgsoreldate','PGO Release Date') !!}
            {!! form::date('pgsoreldate', null, ['class'=>'form-control']) !!}
            </div>
            
            

        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

    <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['RequisitionController@destroy', $requisitions->id]]) !!}
        {{ csrf_field() }}


            {!! form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}


 <div class="col-sm-6"> 
<a class="btn btn-warning"  href="{{ route('requisition.index') }}">Back </a>
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
