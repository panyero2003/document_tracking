@extends('layouts.top_budget');

@section('content')

<div class="col-sm-10">

<div class="container">
<div class="row">
<div class="well">Create Vouchers Records</div>
        @include('includes.form_errors')


    </div>

<div class="col-sm-10">
 

{!!Form::open(['method'=>'post', 'action'=>['VoucherController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

            <!-- <div class ="form-group">
            {!! form::label('dep_id','Dept. Name') !!}
            {!! form::select('dep_id', $departments, null, ['class'=>'form-control']) !!}
            </div> -->

            <div class ="form-group">
            {!! form::label('dep_id','Department/Contractor') !!}
            {!! form::text('dep_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('claimant_id','Claimant') !!}
            {!! form::text('claimant_id', null, ['class'=>'form-control']) !!}
            </div>

            <!-- <div class ="form-group">
            {!! form::label('const_id','Contractor') !!}
            {!! form::select('const_id', $contractors, null, ['class'=>'form-control']) !!}
            </div> -->


            <!-- <div class ="form-group">
            {!! form::label('claimant_id','Claimant') !!}
            {!! form::select('claimant_id', $claimants, null, ['class'=>'form-control']) !!}
            </div> -->

            <div class ="form-group">
            {!! form::label('pboobrno','Budget Office OBR No') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control']) !!}
            </div>

            <!-- <div class ="form-group">
            {!! form::label('payee','Payee') !!}
            {!! form::text('payee', null, ['class'=>'form-control']) !!}
            </div> -->

            
            <div class ="form-group">
            {!! form::label('pbodate','Budget Office Record Date') !!}
            {!! form::date('pbodate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboacctcode','Account Code') !!}
            {!! form::text('pboacctcode', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbosource_id','Source of Fund') !!}
            {!! form::select('pbosource_id', $source, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('obrpart','Particulars') !!}
            {!! form::text('obrpart', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('obramt','Amount') !!}
            {!! form::text('obramt', null, ['class'=>'form-control']) !!}
            </div>


            <div class ="form-group">
            {!! form::label('pbostatus_id','PBO Status') !!}
            {!! form::select('pbostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboreldate','PBO Release Date') !!}
            {!! form::date('pboreldate', null, ['class'=>'form-control']) !!}
            </div>

    
        <div class ="form-group">
            {!! form::submit('Add Vouchers', ['class'=>'btn btn-success']) !!}
       

               <a class="btn btn-warning"  href="{{ route('vouchers.index') }}">Vouchers List</a>
        </div>

    </div>
</div>
 

</div>

@stop
