@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Create Claimant</strong>
</div>



<div class="col-sm-6">


{!! Form::model($depts, ['method'=>'PATCH', 'action'=>['DepartmentController@update', $depts->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('depname','Name') !!}
            {!! form::text('depname', null, ['class'=>'form-control']) !!}
            </div>

            
        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

   <!--  <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['ClaimantController@destroy', $depts->id]]) !!}
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
