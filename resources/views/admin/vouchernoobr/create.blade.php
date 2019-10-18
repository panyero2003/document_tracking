@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="container">
<div class="row">
<div class="well">Create Vouchers No OBR Records</div>
        @include('includes.form_errors')


    </div>

<div class="col-sm-6">
 

{!!Form::open(['method'=>'post', 'action'=>['VoucherNoOBRController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

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
            {!! form::label('dvno','Voucher No') !!}
            {!! form::text('dvno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('payee','Payee') !!}
            {!! form::text('payee', null, ['class'=>'form-control']) !!}
            </div>

            
            <div class ="form-group">
            {!! form::label('pacctorecdate','PBO Date') !!}
            {!! form::date('pacctorecdate', null, ['class'=>'form-control']) !!}
            </div>

            

    
        <div class ="form-group">
            {!! form::submit('Add Vouchers', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('vouchers.index') }}">Vouchers List</a>
        </div>

    </div>
</div>
 

</div>

@stop
