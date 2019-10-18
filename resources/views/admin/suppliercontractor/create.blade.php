@extends('layouts.admin');

@section('content')

<div class="col-sm-10">


<div class="row">

        @include('includes.form_errors')


    </div>

<div class="col-sm-6">
 <h2>Add Supplier/Contractor</h2>

{!!Form::open(['method'=>'post', 'action'=>['SupplierContractorController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

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
            {!! form::submit('Create Contractor', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('contractor.index') }}">Back To Contractor</a>
        </div>

    </div>
</div>
    

</div>

@stop
