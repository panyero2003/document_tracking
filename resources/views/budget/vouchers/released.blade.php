@extends('layouts.top_budget')

@section('content')

    <h1>Released Budget Vouchers</h1>

    


  {!! Form::open(['route' => 'vouchers.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <th>Department/Contractor</th>
            <th>Claimant</th>
            <th>OBR No</th>
            <th>Amount</th>
            <th>Payee</th>
            <th>Record Date</th>
            <th>Status</th>
            <th>Released Date</th>
            <th>Remarks</th>
            
           
        </tr>
        </thead>
        <tbody>

        @if($vouchers)

            @foreach($vouchers as $voucher)


                <tr>
                    <td>{{$voucher->id}}</td>
                    
                   
                    <td><a href="">{{$voucher->contractor}}</a></td>
                    <td>{{$voucher->claimant}}</td>
                    <td>{{$voucher->pboobrno}}</td>
                    <td>{{$voucher->obramt}}</td>
                    <td>{{$voucher->payee}}</td>
                    <td>{{$voucher->pbodate}}</td>
                    <td>{{$voucher->pbo_status ? $voucher->pbo_status->name : ''}}</td>
                    <td>{{$voucher->pboreldate}}</td> 
                    <td>{{$voucher->pboreleasedreason}}</td> 
                                     
                    
                                     
                      <td>
            @if ($voucher->is_released == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['BudgetVoucherController@update',$voucher->id]]) !!}
              <input type="hidden" name="is_released" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['BudgetVoucherController@update',$voucher->id]]) !!}
              <input type="hidden" name="is_released" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif
          </td>
          <!-- <td>
            {!! Form::open(['method'=>'DELETE','action'=>['VoucherController@destroy',$voucher->id]]) !!}
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

