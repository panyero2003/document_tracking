@extends('layouts.top_budget');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Budget Edit Payroll</strong>
</div>

{!! Form::model($payrolls, ['method'=>'PATCH', 'action'=>['PayrollBudgetController@update', $payrolls->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

             <div class ="form-group">
            {!! form::label('dep_id','Department Name') !!}
            {!! form::select('dep_id', $depts, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">

                    {!! form::label('pboobrno','PBO OBR') !!}
                    {!! form::text('pboobrno', null, ['class'=>'form-control' ]) !!}
            </div>

            <div class ="form-group">
                    {!! form::label('payee','Payee.') !!}
                    {!! form::text('payee', null, ['class'=>'form-control' ]) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbodate','Record Date') !!}
            {!! form::date('pbodate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
                    {!! form::label('pboacctcode','Account Code') !!}
                    {!! form::text('pboacctcode', null, ['class'=>'form-control' ]) !!}
            </div>

             <div class ="form-group">
            {!! form::label('pboparticulars','Particulars') !!}
            {!! form::textarea('pboparticulars', null, ['class'=>'form-control']) !!}
            </div>


            <div class ="form-group">
            {!! form::label('pboreldate','Released Date') !!}
            {!! form::date('pboreldate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbostatus_id','Status') !!}
            {!! form::select('pbostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

             <div class ="form-group">
            {!! form::label('pboreleasedreason','Remarks') !!}
            {!! form::textarea('pboreleasedreason', null, ['class'=>'form-control']) !!}
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
