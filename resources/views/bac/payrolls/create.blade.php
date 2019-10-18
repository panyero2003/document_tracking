@extends('layouts.top_bac');

@section('content')

<div class="col-sm-10">

<div class="container">
<div class="row">
<div class="well">Create Payroll</div>
        @include('includes.form_errors')


    </div>

<div class="col-sm-6">
 

{!!Form::open(['method'=>'post', 'action'=>['BACPayrollController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

        <div class ="form-group">
            {!! form::label('dep_id','Dept. Name') !!}
            {!! form::select('dep_id', $departments, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacprno','PR No') !!}
            {!! form::text('bacprno', null, ['class'=>'form-control']) !!}
            </div>


            <div class ="form-group">
            {!! form::label('bacrecdate','BAC Rec Date') !!}
            {!! form::date('bacrecdate', null, ['class'=>'form-control']) !!}
            </div>

            
            
            <div class ="form-group">
            {!! form::label('bacreldate','BAC Rel Date') !!}
            {!! form::date('bacreldate', null, ['class'=>'form-control']) !!}
            </div>

            
            <input type="hidden" id="bacrecdate" name="bacrecdate" value="<?php echo date('H:i:s M d, Y'); ?>">
    
        <div class ="form-group">
            {!! form::submit('Save Database', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('department.index') }}">Back To PR</a>
        </div>

    </div>
</div>
 

</div>

@stop
