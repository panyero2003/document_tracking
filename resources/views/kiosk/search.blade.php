@extends('layouts.admin');

@section('content')

<div class="col-sm-10">

<div class="container">
<div class="row">
<div class="well">Create Purchase Request</div>

@include('includes.form_errors')


    </div>

<div class="col-sm-6">
 
<!--  -->
<!-- {!!Form::open(['method'=>'post', 'action'=>['PurchaseRequestController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!} -->

            

            <div class ="form-group">
            {!! form::label('bacprno','PR No') !!}
            {!! form::text('bacprno', null, ['class'=>'form-control']) !!}
            </div>


            
    
       <!--  <div class ="form-group">
            {!! form::submit('Add PR', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('department.index') }}">Back To PR</a>
        </div>
 -->
    </div>
</div>
 

</div>

@stop
