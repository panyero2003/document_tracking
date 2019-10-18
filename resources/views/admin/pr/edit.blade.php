@extends('layouts.top_accounting');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Edit Purchase Request</strong>
</div>



<div class="col-sm-6">


{!! Form::model($prs, ['method'=>'PATCH', 'action'=>['PurchaseRequestController@update', $prs->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('dep_id','Dept. Name') !!}
            {!! form::select('dep_id', $dept, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacprno','PR No') !!}
            {!! form::text('bacprno', null, ['class'=>'form-control']) !!}
            </div>


            <div class ="form-group">
            {!! form::label('bacrecdate','BAC Record Date') !!}
            {!! form::date('bacrecdate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacstatus_id','BAC Status') !!}
            {!! form::select('bacstatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            
<!-- </div>
<div class="col-sm-6"> -->

            <div class ="form-group">
            {!! form::label('bacreldate','BAC Release Date') !!}
            {!! form::date('bacreldate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboobrno','PBO OBR No.') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pdorecdate','PBO Record Date') !!}
            {!! form::date('pdorecdate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbosource_id','Source of Fund') !!}
            {!! form::select('pbosource_id', $source, null, ['class'=>'form-control']) !!}
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

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

    <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['PurchaseRequestController@destroy', $prs->id]]) !!}
        {{ csrf_field() }}


            {!! form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}


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
