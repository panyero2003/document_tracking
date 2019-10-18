@extends('layouts.top_pgso')

@section('content')

    <h1>PGSO Vouchers</h1>

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
            
            <th>Contractor.</th>

            <th>Claimant</th>
            <th>PBO OBR No</th>
            <th>Payee</th>
            <th>PBO Date</th>
            <th>Action Taken</th>
            
           
        </tr>
        </thead>
        <tbody>

        @if($vouchers)

            @foreach($vouchers as $voucher)


                <tr>
                    <td>{{$voucher->id}}</td>
                    
                    <td><a href="">{{$voucher->department ? $voucher->department->depname : 'Uncategorized'}}</a></td>

                    <td>{{$voucher->contractor ? $voucher->contractor->constname : 'Uncategorized'}}</a></td>
                    
                    <td>{{$voucher->claimant ? $voucher->claimant->claimantname : 'Uncategorized'}}</a></td>
                    <td>{{$voucher->pboobrno}}</td>
                    <td>{{$voucher->payee}}</td>
                    <td>{{$voucher->pbodate}}</td>
                                     
                     <td>
            @if ($voucher->is_released_pgso == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PGSOVoucherController@update',$voucher->id]]) !!}
              <input type="hidden" name="is_released_pgso" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PGSOVoucherController@update',$voucher->id]]) !!}
              <input type="hidden" name="is_released_pgso" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif
          <!-- </td>
          <td>
            {!! Form::open(['method'=>'DELETE','action'=>['PayrollController@destroy',$voucher->id]]) !!}
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

{!! $vouchers->render() !!}

@stop

