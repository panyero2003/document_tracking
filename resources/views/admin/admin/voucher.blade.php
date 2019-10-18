@extends('layouts.top_admin')

@section('content')

    <h1>Vouchers</h1>

  
    {!! Form::button('Add Vouchers Record ', [
        'onClick' => "parent.location='" . url('/vouchers/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
!!}

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
            
           
        </tr>
        </thead>
        <tbody>

        @if($vouchers)

            @foreach($vouchers as $voucher)


                <tr>
                    <td>{{$voucher->id}}</td>
                    
                    <td><a href="{{route('vouchers.edit', $voucher->id)}}">{{$voucher->department ? $voucher->department->depname : 'Uncategorized'}}</a></td>

                    <td>{{$voucher->contractor ? $voucher->contractor->constname : 'Uncategorized'}}</a></td>
                    
                    <td>{{$voucher->claimant ? $voucher->claimant->claimantname : 'Uncategorized'}}</a></td>
                    <td>{{$voucher->pboobrno}}</td>
                    <td>{{$voucher->payee}}</td>
                    <td>{{$voucher->pbodate}}</td>

                    <td>
                      
            @if ($voucher->is_released_account == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['VoucherController@update', $voucher->id]]) !!}
              <input type="hidden" name="is_released_account" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['VoucherController@update', $voucher->id]]) !!}
              <input type="hidden" name="is_released_account" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif

            </td>
          <td>
            {!! Form::open(['method'=>'DELETE','action'=>['VoucherController@update', $voucher->id]]) !!}
                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
            </div>

        {!! Form::close() !!}
          </td>
                                     
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $vouchers->render() !!}

@stop

