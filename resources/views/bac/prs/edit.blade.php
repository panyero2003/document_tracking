@extends('layouts.top_bac');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>BAC Edit Purchase Request</strong>
</div>



<div class="col-sm-10">


{!! Form::model($prs, ['method'=>'PATCH', 'action'=>['BACPRsController@update', $prs->id], 'files'=>true ]) !!}
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
            {!! form::date('bacrecdate',  null, ['class'=>'form-control']) !!}           

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
            {!! form::label('bacstatus_id','Status') !!}
            {!! form::select('bacstatus_id', $status, null, ['class'=>'form-control']) !!}
            </div>


            <div class ="form-group">
            {!! form::label('bacdatereleased','Released Date') !!}
            {!! form::date('bacdatereleased',  null, ['class'=>'form-control']) !!}      

            
            <div class ="form-group">
            {!! form::label('bacreleasedreason','Remarks') !!}
            {!! form::textarea('bacreleasedreason', null, ['class'=>'form-control']) !!}
            </div>

 <input type="hidden" name="bacreleaseddate" value="{{ $prs->bacreleaseddate }}">

        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

   <!--  <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['BACPRsController@destroy', $prs->id]]) !!}
        {{ csrf_field() }}


            {!! form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!} -->


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
