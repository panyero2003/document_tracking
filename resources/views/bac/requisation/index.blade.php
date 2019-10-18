@extends('layouts.top_bac')

@section('content')

    <h1>Vouchers</h1>

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

                @if($req->is_active == 1)

                {!! Form::open(['method'=>'PATCH', 'action'=>['AccountingController@update', $req->id]]) !!}
          {{ csrf_field() }}

        
          <input type="hidden" name="is_active" value = "0">

          <div class ="form-group">
          {!! form::submit('Disapproved', ['class'=>'btn btn-info']) !!}
          </div>

         {{ Form::close() }}

          @else

          {!! Form::open(['method'=>'PATCH', 'action'=>['AccountingController@update', $req->id]]) !!}
          {{ csrf_field() }}

        
          <input type="hidden" name="is_active" value = "1">

          <div class ="form-group">
          {!! form::submit('Approved', ['class'=>'btn btn-success']) !!}
          </div>

        {{ Form::close() }}

          
          @endif

              </td>
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $reqs->render() !!}

@stop

