@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Edit Vouchers No OBR</strong>
</div>



<div class="col-sm-6">


{!! Form::model($vnoobrs, ['method'=>'PATCH', 'action'=>['VoucherNoOBRController@update', $vnoobrs->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

   
            <div class ="form-group">
            {!! form::label('dep_id','Dept. Name') !!}
            {!! form::select('dep_id', $departments, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('const_id','Contractor') !!}
            {!! form::select('const_id', $contractors, null, ['class'=>'form-control']) !!}
            </div>


            <div class ="form-group">
            {!! form::label('claimant_id','Claimant') !!}
            {!! form::select('claimant_id', $claimants, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('dvno','Account No.') !!}
            {!! form::text('dvno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('payee','Payee') !!}
            {!! form::text('payee', null, ['class'=>'form-control']) !!}
            </div>

            
            <div class ="form-group">
            {!! form::label('pacctorecdate','Account Date') !!}
            {!! form::date('pacctorecdate', null, ['class'=>'form-control']) !!}
            </div>

            
            

        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

    <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['VoucherNoOBRController@destroy', $vnoobrs->id]]) !!}
        {{ csrf_field() }}


            {!! form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}


 <div class="col-sm-6"> 
<a class="btn btn-warning"  href="{{ route('vnoobrs.index') }}">Back </a>
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
