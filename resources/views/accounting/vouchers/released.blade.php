@extends('layouts.top_accounting')

@section('content')

    <h1>Released Accounting Vouchers</h1>

     

  {!! Form::open(['route' => 'treasurer_vouchers.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
           <!--  <th>Claimant</th> -->
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
                    <!-- <td>{{$voucher->claimant}}</td> -->
                    <td>{{$voucher->pboobrno}}</td>
                    <td>{{$voucher->obramt}}</td>
                    <td>{{$voucher->payee}}</td>
                    <td>{{$voucher->pacctodate}}</td>
                    <td>{{$voucher->accounting_status ? $voucher->accounting_status->name : ''}}</td>
                    <td>{{$voucher->pacctoreldate}}</td> 
                    <td>{{$voucher->pacctoreleasedreason}}</td>             
                    <td>
            @if ($voucher->is_released_account == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['AccountingController@update',$voucher->id]]) !!}
              <input type="hidden" name="is_released_account" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['AccountingController@update',$voucher->id]]) !!}
              <input type="hidden" name="is_released_account" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif
          </td>
          

        </tr>
      @endforeach
    @endif
        </tbody>
    </table>

{!! $vouchers->render() !!}
    

@stop

