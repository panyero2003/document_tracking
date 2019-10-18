@extends('layouts.admin');

@section('content')

<div class="col-sm-10">


<div class="row">

        @include('includes.form_errors')


    </div>

<div class="col-sm-6">
 <h2>Create Department</h2>

{!!Form::open(['method'=>'post', 'action'=>['DepartmentController@store','files'=>true  ]]) !!}
        {!! csrf_field() !!}

            <div class ="form-group">
            {!! form::label('depname','Department Name') !!}
            {!! form::text('depname', null, ['class'=>'form-control']) !!}
            </div>

           

        <div class ="form-group">
            {!! form::submit('Create Department', ['class'=>'btn btn-primary']) !!}
       

               <a class="btn btn-warning"  href="{{ route('department.index') }}">Back To  Department</a>
        </div>

    </div>
</div>
    

</div>

@stop
