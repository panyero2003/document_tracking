@extends('layouts.top_bac');

@section('content')

<div class="col-sm-10">

<div class="container">
<div class="row">

<div class="well">Create Purchase Request</div>
        
@include('includes.form_errors')


    </div>

<div class="col-sm-6">
 

{!!Form::open(['method'=>'post', 'action'=>['BACPRsController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

        <div class ="form-group">
            {!! form::label('dep_id','Department') !!}
            {!! form::select('dep_id', $departments, null, ['class'=>'form-control']) !!}
            </div>

            <!--  <div class ="form-group">
            {!! form::label('contractor_id','Contractor') !!}
            {!! form::select('contractor_id', $contractors, null, ['class'=>'form-control']) !!}
            </div> -->

            

            <div class ="form-group">
            {!! form::label('bacprno','PR No') !!}
            {!! form::text('bacprno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('obrpart','Transaction Details') !!}
            {!! form::textarea('obrpart', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('obramt','Amount') !!}
            {!! form::text('obramt', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacrecdate','BAC Record Date') !!}
            {!! form::date('bacrecdate',  null, ['class'=>'form-control']) !!}
            </div>

    
        <div class ="form-group">
            {!! form::submit('Save Database', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('bac_prses.index') }}">Back To PR</a>
        </div>

    </div>
</div>
 

</div>

@stop
