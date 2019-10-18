@extends('layouts.top_budget');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Edit Vouchers</strong>
</div>



<div class="col-sm-6">


{!! Form::model($vouchers, ['method'=>'PATCH', 'action'=>['VoucherController@update', $vouchers->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('contractor','Contractor') !!}
            {!! form::text('contractor', null, ['class'=>'form-control']) !!}
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
            {!! form::label('pbodate','Record Date') !!}
            {!! form::date('pbodate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbostatus_id','Status') !!}
            {!! form::select('pbostatus_id', $status, null, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboreldate','Released Date') !!}
            {!! form::date('pboreldate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboreleasedreason','Remarks') !!}
            {!! form::textarea('boreleasedreason', null, ['class'=>'form-control']) !!}
            </div>

            
            

        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

    <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['VoucherController@destroy', $vouchers->id]]) !!}
        {{ csrf_field() }}


            {!! form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}


 <div class="col-sm-6"> 
<a class="btn btn-warning"  href="{{ route('vouchers.index') }}">Back </a>
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
