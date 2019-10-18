@extends('layouts.top_admin')

@section('content')

    <h1>Suppliers/Contractors Records</h1>

    {!! Form::open(['route' => 'contractor.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

        <div class="input-group">

            {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search..']) !!}
         
            <span class="input-group-btn">
                <button class="btn btn-success" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </span>
        </div>
  
    {!! Form::button('Add Contractor/Supplier', [
        'onClick' => "parent.location='" . url('/contractor/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
!!}

{!! Form::close() !!}

      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact No</th>
            <th>Mobile No</th>
            <th>Liason Name</th>
            
            <th>Tax ID</th>
        </tr>
        </thead>
        <tbody>

        @if($contractors)

            @foreach($contractors as $contractor)


                <tr>
                    <td>{{$contractor->id}}</td>
                    <td><a href="{{route('contractor.edit', $contractor->id)}}">{{$contractor->constname}}</a></td>
                    <td>{{$contractor->address}}</td>
                    <td>{{$contractor->contactno}}</td>
                    <td>{{$contractor->mobileno}}</td>
                    <td>{{$contractor->liasonname}}</td>
                    <td>{{$contractor->taxid}}</td>
                 
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $contractors->render() !!}

@stop

