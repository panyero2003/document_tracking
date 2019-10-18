@extends('layouts.top_admin')

@section('content')

    <h1>Claimant Records</h1>

  {!! Form::open(['route' => 'claimant.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

        <div class="input-group">

            {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search..']) !!}
         
            <span class="input-group-btn">
                <button class="btn btn-success" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </span>
        </div>
    

    {!! Form::button('Add Claimant', [
        'onClick' => "parent.location='" . url('/claimant/create') . "'", 'class'=>'btn btn-success',
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
            <th>Type</th>

            <th>Claim No</th>
            <th>Contact No</th>
            <th>Mobile No</th>
            <th>Agency</th>
            
            <th>Client Category</th>
        </tr>
        </thead>
        <tbody>

        @if($claimants)

            @foreach($claimants as $claimant)


                <tr>
                    <td>{{$claimant->id}}</td>
                    
                    <td><a href="{{route('claimant.edit', $claimant->id)}}">{{$claimant->claimantname}}</a></td>
                    <td>{{$claimant->address}}</td>
                    <td>{{$claimant->claimanttype}}</td>
                    <td>{{$claimant->claimantno}}</td>
                    <td>{{$claimant->contactno}}</td>
                    <td>{{$claimant->mobileno}}</td>
                    <td>{{$claimant->agencyname}}</td>
                    <td>{{$claimant->categoryclient ? $claimant->categoryclient->name : 'Uncategorized'}}</td>
                 
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $claimants->render() !!}

@stop

