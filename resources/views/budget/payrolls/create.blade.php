@extends('layouts.top_budget');

@section('content')

<div class="col-sm-10">

<div class="container">
   <div class="panel panel-default">


        @include('includes.form_errors')


    </div>

<div class="col-sm-6">
 

{!!Form::open(['method'=>'post', 'action'=>['PayrollController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

            <div class ="form-group">
            {!! form::label('dep_id','Dept. Name') !!}
            {!! form::select('dep_id', $departments, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacprno','Budget No') !!}
            {!! form::text('bacprno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('payee','Payee') !!}
            {!! form::text('payee', null, ['class'=>'form-control']) !!}
            </div>


            <!-- <div class ="form-group">
            {!! form::label('bacrecdate','BAC Rec Date') !!}
            {!! form::date('bacrecdate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacstatus_id','BAC Status') !!}
            {!! form::select('bacstatus_id', $status, null, ['class'=>'form-control']) !!}
            </div> -->

            
            <!-- <div class ="form-group">
            {!! form::label('pborecdate','Record Date') !!}
            {!! form::date('pborecdate', null, ['class'=>'form-control']) !!}
            </div> -->

            <div class ="form-group">
            {!! form::label('pboobrno','OBR No.') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboacctcode','Account Code') !!}
            {!! form::text('pboacctcode', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbodate','Record Date') !!}
            {!! form::date('pbodate', null, ['class'=>'form-control']) !!}
            </div>

            <!-- div class ="form-group">
                {!! form::label('pbosource_id','PBO Source') !!}
                {!! form::select('pbosource_id', $sources, null, ['class'=>'form-control']) !!}
            </div> -->

            <div class ="form-group">
            {!! form::label('pboparticulars','Particulars') !!}
            {!! form::textarea('pboparticulars', null, ['class'=>'form-control']) !!}
            </div>

            
            <div class ="form-group">
            {!! form::label('obramt','Amount') !!}
            {!! form::text('obramt', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbostatus_id','Status') !!}
            {!! form::select('pbostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboreldate', 'Release Date') !!}
            {!! form::date('pboreldate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboreleasedreason','Remarks') !!}
            {!! form::textarea('pboreleasedreason', null, ['class'=>'form-control']) !!}
            </div>

    
        <div class ="form-group">
            {!! form::submit('Add Payroll', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('department.index') }}">Back To Payroll</a>
        </div>

    </div>
</div>
 

</div>

@stop
