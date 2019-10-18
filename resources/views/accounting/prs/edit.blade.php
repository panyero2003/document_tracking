@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Accounting Edit Purchase Request</strong>
</div>



<div class="col-sm-10">


{!! Form::model($prs, ['method'=>'PATCH', 'action'=>['PRAccountingController@update', $prs->id], 'files'=>true ]) !!}
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
            {!! form::label('pacctorecdate','Record Date') !!}
            {!! form::date('pacctorecdate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pacctostatus_id','Status') !!}
            {!! form::select('pacctostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

                        
            <div class ="form-group">
            {!! form::label('pacctoreleasedreason','Remarks') !!}
            {!! form::textarea('pacctoreleasedreason', null, ['class'=>'form-control']) !!}
            </div>

             <div class ="form-group">
            {!! form::label('pacctoreldate','Released Date') !!}
            {!! form::date('pacctoreldate', null, ['class'=>'form-control']) !!}
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
