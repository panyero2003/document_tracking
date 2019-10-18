@extends('layouts.top_treas');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>PTO Edit Purchase Request</strong>
</div>



<div class="col-sm-10">


{!! Form::model($prs, ['method'=>'PATCH', 'action'=>['TreasPRsController@update', $prs->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('dep_id','Dept. Name') !!}
            {!! form::select('dep_id', $dept, null, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacprno','PR No') !!}
            {!! form::text('bacprno', null, ['class'=>'form-control', 'disabled' => 'disabled'])!!}
            </div>


            <div class ="form-group">
            {!! form::label('ptotorecdate','Record Date') !!}
            {!! form::date('ptotorecdate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('ptostatus_id','Status') !!}
            {!! form::select('ptostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('ptoreleasedreason','Remarks') !!}
            {!! form::textarea('ptoreleasedreason', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('ptoreldate','Released Date') !!}
            {!! form::date('ptoreldate', null, ['class'=>'form-control']) !!}
            </div>

        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

<!--     <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['PurchaseRequestController@destroy', $prs->id]]) !!}
        {{ csrf_field() }}


            {!! form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}

 -->
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
