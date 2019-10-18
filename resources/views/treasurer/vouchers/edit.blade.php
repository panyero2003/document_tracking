@extends('layouts.top_treas');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Edit Voucher</strong>
</div>



<div class="col-sm-10">


{!! Form::model($vouchers, ['method'=>'PATCH', 'action'=>['TreasurerController@update', $vouchers->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

           <div class ="form-group">
            {!! form::label('contractor','Contractor/Department') !!}
            {!! form::text('contractor', null, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
            </div>

            
            <div class ="form-group">
            {!! form::label('pboobrno','OBR No') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('payee','Payee') !!}
            {!! form::text('payee', null, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('obramt','Amount') !!}
            {!! form::text('obramt', null, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('ptodate', 'Record Date') !!}
            {!! form::date('ptodate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('ptostatus_id','Status') !!}
            {!! form::select('ptostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('ptoreldate', 'Released Date') !!}
            {!! form::date('ptoreldate', null, ['class'=>'form-control']) !!}
            </div>

            
            <div class ="form-group">
            {!! form::label('ptoreleasedreason','Remarks') !!}
            {!! form::textarea('ptoreleasedreason', null, ['class'=>'form-control']) !!}
            </div>
            

        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

            <!-- <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['ClaimantController@destroy', $vouchers->id]]) !!}
        {{ csrf_field() }}


            {!! form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}

         
</div> -->

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
