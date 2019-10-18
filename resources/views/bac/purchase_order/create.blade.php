@extends('layouts.top_bac');

@section('content')

<div class="col-sm-10">

<div class="container">
<div class="row">

<div class="well">BAC Create Purchase Order</div>
        
@include('includes.form_errors')


    </div>

<div class="col-sm-6">
 

{!!Form::open(['method'=>'post', 'action'=>['BACPurchaseOrderController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

        <div class ="form-group">
            {!! form::label('supplier','Supplier') !!}
            {!! form::text('supplier', null, ['class'=>'form-control']) !!}
            </div>

           <div class ="form-group">
            {!! form::label('bac_cat','Category(Altenative Mode/Public Bidding)') !!}
            {!! form::text('bac_cat', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacprno','PR No') !!}
            {!! form::text('bacprno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bac_noticeofaward','Notice of Award') !!}
            {!! form::date('bac_noticeofaward', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bac_contract','Contract Agreement.') !!}
            {!! form::date('bac_contract', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bac_noticetoproceed','Notice to Proceed') !!}
            {!! form::date('bac_noticetoproceed', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacponumber','BAC Purchase Order No.') !!}
            {!! form::text('bacponumber', null, ['class'=>'form-control']) !!}
            </div>


            <div class ="form-group">
            {!! form::label('bacrecdate','BAC Rec Date') !!}
            {!! form::date('bacrecdate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('obramt','Amount') !!}
            {!! form::text('obramt', null, ['class'=>'form-control']) !!}
            </div>


                       
             <!-- <input type="hidden" id="bacrecdate" name="bacrecdate" value="<?php echo date('Y-m-d H:i:s'); ?>"> -->
    
        <div class ="form-group">
            {!! form::submit('Save Database', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('bac_purchase_order.index') }}">Back To Purchase Order</a>
        </div>

    </div>
</div>
 

</div>

@stop
