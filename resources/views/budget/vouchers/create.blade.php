@extends('layouts.top_budget');

@section('content')

<div class="col-sm-8">

<div class="container">
<div class="row">

<div class="well">Create Vouchers</div>
        
@include('includes.form_errors')


</div>

<div class="col-sm-8">

{!!Form::open(['method'=>'post', 'action'=>['VoucherBudgetController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

            <div class ="form-group">
            {!! form::label('contractor','Contractor/Department') !!}
            {!! form::text('contractor', null, ['class'=>'form-control']) !!}
            </div>

            
            <div class ="form-group">
            {!! form::label('pboobrno','OBR No') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('payee','Payee') !!}
            {!! form::text('payee', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('obramt','Amount') !!}
            {!! form::text('obramt', null, ['class'=>'form-control']) !!}
            </div>

           
            <div class ="form-group">
            {!! form::label('pbodate', 'Record Date') !!}
            {!! form::date('pbodate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbostatus_id','Status') !!}
            {!! form::select('pbostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            

            
            

        <div class ="form-group">
            {!! form::submit('Create Vouchers', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('bud_vouchers') }}">Back To Vouchers</a>
        </div>

    </div>
</div>
    

</div>

@stop
