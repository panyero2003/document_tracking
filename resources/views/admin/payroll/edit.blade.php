@extends('layouts.top_budget');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Edit Payroll</strong>
</div>



<div class="col-sm-6">


{!! Form::model($payrolls, ['method'=>'PATCH', 'action'=>['PayrollController@update', $payrolls->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('dep_id','Dept. Name') !!}
            {!! form::select('dep_id', $departments, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('claimant_id','Claimant') !!}
            {!! form::select('claimant_id', $claimants, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboobrno','PBO No') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('payee','Payee') !!}
            {!! form::text('payee', null, ['class'=>'form-control']) !!}
            </div>

            
            <div class ="form-group">
            {!! form::label('pbodate','PBO Date') !!}
            {!! form::date('pbodate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbostatus_id','PBO Status') !!}
            {!! form::select('pbostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            
            

        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

    <!-- <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['PayrollController@destroy',$payrolls->id]]) !!}
        {{ csrf_field() }}
 -->

            <!-- {!! form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!} -->


 <div class="col-sm-6"> 
<a class="btn btn-warning"  href="{{ route('payrolls.index') }}">Back </a>
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
