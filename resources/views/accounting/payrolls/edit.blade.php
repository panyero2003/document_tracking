@extends('layouts.top_accounting');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Accounting Edit Payroll</strong>
</div>



<div class="col-sm-10">


{!! Form::model($payrolls, ['method'=>'PATCH', 'action'=>['PayrollAccountingController@update', $payrolls->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('dep_id','Dept. Name') !!}
            {!! form::select('dep_id', $dept, null, ['class'=>'form-control']) !!}
            </div>

             <!-- <div class ="form-group">
            {!! form::label('claimant_id','Claimant Name') !!}
            {!! form::select('claimant_id', $claimant, null, ['class'=>'form-control']) !!}
           
            </div> -->


            <div class ="form-group">
            {!! form::label('pboobrno','PBO OBR No.') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control']) !!}
            </div>

            
            <div class ="form-group">
            {!! form::label('pacctodate','Record Date') !!}
            {!! form::date('pacctodate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pacctostatus_id','Status') !!}
            {!! form::select('pacctostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            


            <div class ="form-group">
            {!! form::label('pacctoreldate','Release Date') !!}
            {!! form::date('pacctoreldate', null, ['class'=>'form-control']) !!}
            </div>

             <div class ="form-group">
            {!! form::label('pacctoreleasedreason','Remarks') !!}
            {!! form::textarea('pacctoreleasedreason', null, ['class'=>'form-control']) !!}
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
