@extends('layouts.top_bac');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>BAC Edit Purchase Order</strong>
</div>



<div class="col-sm-6">


{!! Form::model($purchase_orders, ['method'=>'PATCH', 'action'=>['BACPurchaseOrderController@update', $purchase_orders->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

           
           <div class ="form-group">
            {!! form::label('supplier','Supplier') !!}
            {!! form::text('supplier', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacprno','Category(Shopping/Bidding)') !!}
            {!! form::text('bacprno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacprno','PR No') !!}
            {!! form::text('bacprno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('ponumber','Notice of Award') !!}
            {!! form::date('ponumber', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('ponumber','Contract Agreement.') !!}
            {!! form::date('ponumber', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('ponumber','Notice to Proceed') !!}
            {!! form::date('ponumber', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('ponumber','BAC Purchase Order No.') !!}
            {!! form::date('ponumber', null, ['class'=>'form-control']) !!}
            </div>

            


            <div class ="form-group">
            {!! form::label('bacrecdate','BAC Record Date') !!}
            <!-- {!! form::date('bacrecdate', null, ['class'=>'form-control']) !!} -->
            <!--  {!! form::text('bacrecdate',  null, ['class'=>'form-control', 'disabled' => 'disabled']) !!} -->
             {!! form::date('bacrecdate',  null, ['class'=>'form-control']) !!}

            </div>

            

            <div class ="form-group">
            {!! form::label('obramt','Amount') !!}
            {!! form::text('obramt', null, ['class'=>'form-control']) !!}
            </div>

           


            <!-- <div class ="form-group">
            {!! form::label('bacreldate','BAC Release Date') !!}
            {!! form::date('bacreldate', null, ['class'=>'form-control']) !!}
            </div> -->

                        
<input type="hidden" name="bacreldate" value="<?php echo date("Y-m-d G:H:s"); ?>"> 

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
