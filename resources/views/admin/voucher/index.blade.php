@extends('layouts.top_budget')

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
                    
                   
                    <!-- <td><a href="{{route('vouchers.edit', $voucher->id)}}">{{$voucher->contractor}}</a></td> -->
                    <td>{{$voucher->claimant}}</td>
                    <td>{{$voucher->pboobrno}}</td>
                    <td>{{$voucher->obramt}}</td>
                    <td>{{$voucher->payee}}</td>
                    <td>{{$voucher->pbodate}}</td>
                    <td>{{$voucher->pbo_status ? $voucher->pbo_status->name : ''}}</td>
                    <td>{{$voucher->pboreldate}}</td> 
                    <td>{{$voucher->pboreleasedreason}}</td> 
                                     
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $vouchers->render() !!}

@stop

