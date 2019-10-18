@extends('layouts.admin');

@section('content')

<div class="col-sm-10">


<div class="row">

        @include('includes.form_errors')


    </div>

<div class="col-sm-6">
 <h2>Create Claimant</h2>

{!!Form::open(['method'=>'post', 'action'=>['ClaimantController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

            <div class ="form-group">
            {!! form::label('claimantname','Claimant Name') !!}
            {!! form::text('claimantname', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('address','Address') !!}
            {!! form::text('address', null, ['class'=>'form-control']) !!}
            </div>


            <div class ="form-group">
            {!! form::label('claimanttype','Claimant Type') !!}
            {!! form::text('claimanttype', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('claimantno','Claimant No.') !!}
            {!! form::text('claimantno', null, ['class'=>'form-control']) !!}
            </div>

            
</div>
<div class="col-sm-6">

            <div class ="form-group">
            {!! form::label('contactno','Contact No.') !!}
            {!! form::text('contactno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('mobileno','Mobile No.') !!}
            {!! form::text('mobileno', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
            {!! form::label('agencyname','Agency') !!}
            {!! form::text('agencyname', null, ['class'=>'form-control']) !!}
            </div>

            <div class ="form-group">
                {!! form::label('categoryclient_id','Client Category') !!}
                 {!! form::select('categoryclient_id', $categories, null, ['class'=>'form-control']) !!}
            </div>

        <div class ="form-group">
            {!! form::submit('Create Claimant', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('claimant.index') }}">Back To Claimant</a>
        </div>

    </div>
</div>
    

</div>

@stop
