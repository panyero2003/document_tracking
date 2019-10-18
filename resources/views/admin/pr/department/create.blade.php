@extends('layouts.admin');

@section('content')
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
<div class="col-sm-10">


<div class="row">

        @include('includes.form_errors')


    </div>

<div class="col-sm-6">
 <h2>Create Department</h2>

{!!Form::open(['method'=>'post', 'action'=>['DepartmentController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

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
                {!! form::label('address','Address') !!}
                {!! form::textarea('address', null, ['class'=>'form-control', 'rows'=>3]) !!}
            </div>

        <div class ="form-group">
            {!! form::submit('Create Department', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('department.index') }}">Back To Department</a>
        </div>

    </div>
</div>
    

</div>

@stop
