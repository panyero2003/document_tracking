@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="container">
<div class="row">
<div class="well">Create Purchase Request</div>
        @include('includes.form_errors')


    </div>

<div class="col-sm-6">
 

{!!Form::open(['method'=>'post', 'action'=>['PurchaseRequestController@store','files'=>true  ]]) !!}
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
            {!! form::label('bacstatus_id','BAC Status') !!}
            {!! form::select('bacstatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            
            <div class ="form-group">
            {!! form::label('bacreldate','BAC Rel Date') !!}
            {!! form::date('bacreldate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboobrno','Mobile No.') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pdorecdate','PBO Rec Date') !!}
            {!! form::date('pdorecdate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
                {!! form::label('pbosource_id','PBO Source') !!}
                {!! form::select('pbosource_id', $sources, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('obrpart','Transaction Details') !!}
            {!! form::textarea('obrpart', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
                {!! form::label('obrtranstype_id','Transaction Type') !!}
                {!! form::select('obrtranstype_id', $transactions, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('obramt','Amount') !!}
            {!! form::text('obramt', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbostatus_id','PBO Status') !!}
            {!! form::select('pbostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbostatusdatetime','PBO Status Date') !!}
            {!! form::date('pbostatusdatetime', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboreldate','PBO Release Date') !!}
            {!! form::date('pboreldate', null, ['class'=>'form-control']) !!}
            </div>

    
        <div class ="form-group">
            {!! form::submit('Add PR', ['class'=>'btn btn-primary']) !!}
            
            
            <a class="btn btn-warning"  href="{{ URL::previous() }}">Back </a>
           <!--  </div>

               <a class="btn btn-warning"  href="{{ route('department.index') }}">Back To PR</a> -->
        </div>

    </div>
</div>
 

</div>

@stop
