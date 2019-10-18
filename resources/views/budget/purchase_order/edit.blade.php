@extends('layouts.top_budget');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Budget Edit Purchase Order</strong>
</div>



<div class="col-sm-12">


{!! Form::model($purchase_orders, ['method'=>'PATCH', 'action'=>['BudgetPurchaseOrderController@update', $purchase_orders->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            

            <div class ="form-group">
            {!! form::label('supplier','Supplier') !!}
            {!! form::text('supplier', null, ['class'=>'form-control', 'disabled' => 'disabled' ]) !!}
            </div>


            <div class ="form-group">
            {!! form::label('bacrecdate','BAC Record Date') !!}
            {!! form::date('bacrecdate', null, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
            </div>

          

            <div class ="form-group">
            {!! form::label('bacreldate','BAC Release Date') !!}
            {!! form::date('bacreldate', null, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
            </div>

            
            

            <!-- <div class ="form-group">
            {!! form::label('obrpart','Transaction Details') !!}
            {!! form::textarea('obrpart', null, ['class'=>'form-control']) !!}
            </div>
 -->
            

            <div class ="form-group">
            {!! form::label('obramt','Amount') !!}
            {!! form::text('obramt', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboobrno','Budget Office OBR No.') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pdorecdate','Budget Office Record Date') !!}
            {!! form::date('pdorecdate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboreldate','Budget Office Release Date') !!}
            {!! form::date('pboreldate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('accorecdate','Accounting Office Record Date') !!}
            {!! form::date('accorecdate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboreldate','Budget Office Release Date') !!}
            {!! form::date('pboreldate', null, ['class'=>'form-control']) !!}
            </div>

            

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
