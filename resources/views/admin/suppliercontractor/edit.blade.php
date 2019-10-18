@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="row">
<div class="alert alert-success">
  <strong>Edit Liason</strong>
</div>



<div class="col-sm-6">


{!! Form::model($contractors, ['method'=>'PATCH', 'action'=>['SupplierContractorController@update', $contractors->id], 'files'=>true ]) !!}
    {{ csrf_field() }}

            <div class ="form-group">
            {!! form::label('constname','Name') !!}
            {!! form::text('constname', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('address','Address') !!}
            {!! form::text('address', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('contactno','Contact No.') !!}
            {!! form::text('contactno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('mobileno','Mobile No.') !!}
            {!! form::text('mobileno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('liasonname','Liason Name') !!}
            {!! form::text('liasonname', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('taxid','Tax ID') !!}
            {!! form::text('taxid', null, ['class'=>'form-control']) !!}
            </div>

            

        <div class ="form-group">

        {!! form::submit('Update ', ['class'=>'btn btn-primary col-sm-2']) !!}

   

        {!! Form::close() !!}

    <!-- <div class="col-sm-4">
        {!! Form::open(['method'=>'DELETE', 'action'=>['SupplierContractorController@destroy', $contractors->id]]) !!}
        {{ csrf_field() }}
</div> -->

           <!--  {!! form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!} -->

         


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
