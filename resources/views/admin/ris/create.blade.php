@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="container">
<div class="row">
<div class="well"><strong>Create Requisition and Issue Slip</strong></div>
        @include('includes.form_errors')


    </div>

<div class="col-sm-6">
 

{!!Form::open(['method'=>'post', 'action'=>['RequisitionController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

            <div class ="form-group">
            {!! form::label('dep_id','Dept. Name') !!}
            {!! form::select('dep_id', $departments, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pgsorisno','RIS No') !!}
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
            {!! form::label('pgsostatusdatetime','PGSO Status Date') !!}
            {!! form::date('pgsostatusdatetime', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pgsoreldate','PGSO Release Date') !!}
            {!! form::date('pgsoreldate', null, ['class'=>'form-control']) !!}
            </div>

            
    
        <div class ="form-group">
            {!! form::submit('Add RIS', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('department.index') }}">Back To RIS</a>
        </div>

    </div>
</div>
 

</div>

@stop
