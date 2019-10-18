@extends('layouts.top_budget');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Budget Edit Purchase Request</strong>
</div>



<div class="col-sm-12">


{!! Form::model($prs, ['method'=>'PATCH', 'action'=>['BudgetPRsController@update', $prs->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('dep_id','Department Name') !!}
            {!! form::select('dep_id', $dept, null, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacprno','Purchase Request No.') !!}
            {!! form::text('bacprno', null, ['class'=>'form-control', 'disabled' => 'disabled' ]) !!}
            </div>


            <div class ="form-group">
            {!! form::label('bacrecdate','BAC Record Date') !!}
            {!! form::date('bacrecdate', null, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('bacstatus_id','BAC Status') !!}
            {!! form::select('bacstatus_id', $status, null, ['class'=>'form-control', 'disabled' => 'disabled']) !!}
            </div>

            

            <!-- <div class ="form-group">
            {!! form::label('bacreleaseddate','BAC Release Date') !!}
            {!! form::datetime('bacreleaseddate', null, ['class'=>'form-control']) !!}
            </div> -->

            
            

            <div class ="form-group">
            {!! form::label('obrpart','Transaction Details') !!}
            {!! form::textarea('obrpart', null, ['class'=>'form-control']) !!}
            </div>

            

            <div class ="form-group">
            {!! form::label('obramt','Amount') !!}
            {!! form::text('obramt', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboobrno','OBR No.') !!}
            {!! form::text('pboobrno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pdorecdate','Record Date') !!}
            {!! form::date('pdorecdate', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pbostatus_id','Status') !!}
            {!! form::select('pbostatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('pboreldate','Release Date') !!}
            {!! form::date('pboreldate', null, ['class'=>'form-control']) !!}
            </div>

           
            <div class ="form-group">
            {!! form::label('pboreleasedreason','Remarks') !!}
            {!! form::textarea('pboreleasedreason', null, ['class'=>'form-control']) !!}
            </div>

            

          <div class ="form-group">
            {!! form::label('pbosource_id','Source of Fund') !!}
            {!! form::select('pbosource_id', $source, null, ['class'=>'form-control']) !!}
            </div>

            <input type="hidden" name="bacreleaseddate" value="{{ $prs->bacreleaseddate }}">
            

        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

    <!-- <div class="col-sm-4">
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
