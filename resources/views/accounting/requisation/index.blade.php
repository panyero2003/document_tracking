@extends('layouts.top_accounting')

@section('content')

    <h1>Requisition Request</h1>

  {!! Form::open(['route' => 'accounting_vouchers.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

        <div class="input-group">

            {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search..']) !!}
         
            <span class="input-group-btn">
                <button class="btn btn-success" type="submit">
                    <i class="glyphicon glyphicon-search"></i><b>Search</b>
                </button>
            </span>
        </div>
  {!! Form::close() !!}
    

      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Department</th>
            
            <th>PGSO Res No.</th>

            <th>Date</th>
            <th>Status</th>
            <th>Date Time</th>
            <th>Release Date</th>
            <th>Action Taken</th>
            
           
        </tr>
        </thead>
        <tbody>

        @if($reqs)

            @foreach($reqs as $req)


                <tr>
                    <td>{{$req->id}}</td>
                    
                    <td><a href="">{{$req->department ? $req->department->depname : 'Uncategorized'}}</a></td>

                    
                   <td>{{$req->pgsorisno}}</td>
                    <td>{{$req->pgsostatus_id}}</td>
                    <td>{{$req->pgsostatus_id}}</td>
                    <td>{{$req->pgsostatusdatetime}}</td>
                    <td>{{$req->pgsoreldate}}</td>
                                     
                     <td>
            @if ($req->is_released_account == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['RequisitionController@update',$req->id]]) !!}
              <input type="hidden" name="is_released_account" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['RequisitionController@update',$req->id]]) !!}
              <input type="hidden" name="is_released_account" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif
          <!-- </td>
          <td>
            {!! Form::open(['method'=>'DELETE','action'=>['PRAccountController@destroy',$req->id]]) !!}
            <div class='form-group'>
                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
            </div> -->

        {!! Form::close() !!}
          </td>

        </tr>
      @endforeach
    @endif

        </tbody>
    </table>

{!! $reqs->render() !!}

@stop

