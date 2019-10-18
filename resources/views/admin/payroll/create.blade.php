@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="container">
<div class="row">
<div class="well">Create Payroll Records</div>
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
            {!! form::label('claimant_id','Claimant') !!}
            {!! form::select('claimant_id', $claimants, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboobrno','PBO No') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('payee','Payee') !!}
            {!! form::text('payee', null, ['class'=>'form-control']) !!}
            </div>

            
            <div class ="form-group">
            {!! form::label('pbodate','PBO Date') !!}
            {!! form::date('pbodate', null, ['class'=>'form-control']) !!}
            </div>

            

    
        <div class ="form-group">
            {!! form::submit('Add Payrolls', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('payrolls.index') }}">Payroll List</a>
        </div>

    </div>
</div>
 

</div>

@stop
