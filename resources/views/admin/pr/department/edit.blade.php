@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Create Department</strong>
</div>



<div class="col-sm-6">


{!! Form::model($dept, ['method'=>'PATCH', 'action'=>['DepartmentController@update', $dept->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('depname','Name') !!}
            {!! form::text('depname', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('depcode','Code') !!}
            {!! form::text('depcode', null, ['class'=>'form-control']) !!}
            </div>


            <div class ="form-group">
            {!! form::label('depacro','Acronym') !!}
            {!! form::text('depacro', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('dephead','Head') !!}
            {!! form::text('dephead', null, ['class'=>'form-control']) !!}
            </div>

            
</div>
<div class="col-sm-6">

            <div class ="form-group">
            {!! form::label('depheademailadd','Email.') !!}
            {!! form::text('depheademailadd', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('mobileno','Mobile No.') !!}
            {!! form::text('mobileno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('contactno','Contact No.') !!}
            {!! form::text('contactno', null, ['class'=>'form-control']) !!}
            </div>

            

        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

    </div>

        {!! Form::close() !!}

    <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['DepartmentController@destroy', $dept->id]]) !!}
        {{ csrf_field() }}


            {!! form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}

         <!--    <a class="btn btn-danger col-sm-8" href="{{route('department.index',  $dept->id)}}">Delete</a>  -->


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
