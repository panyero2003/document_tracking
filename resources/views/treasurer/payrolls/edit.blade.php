@extends('layouts.top_accounting');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Treasurer Edit Payroll</strong>
</div>



<div class="col-sm-10">


{!! Form::model($payrolls, ['method'=>'PATCH', 'action'=>['TreasurerPayrollController@update', $payrolls->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('dep_id','Dept. Name') !!}
            {!! form::select('dep_id', $dept, null, ['class'=>'form-control','disabled'=>'disabled']) !!}
            </div>

           <div class ="form-group">
            {!! form::label('pboobrno','PBO OBR No.') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control','disabled'=>'disabled']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('payee','Payee.') !!}
            {!! form::text('payee', null, ['class'=>'form-control','disabled'=>'disabled']) !!}
            </div>

            
            <div class ="form-group">
            {!! form::label('ptodate','Record Date') !!}
            {!! form::date('ptodate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('ptostatus_id','Status') !!}
            {!! form::select('ptostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            


            <div class ="form-group">
            {!! form::label('ptoreldate','Release Date') !!}
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
