@extends('layouts.app_user')

@section('content')


<div class="container">
    
    <h1>Search Records</h1>


  {!! Form::open(['route' => 'accounting_vouchers_users.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

  
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

                @if($voucher->is_active == 1)

                {!! Form::open(['method'=>'PATCH', 'action'=>['AccountingController@update', $voucher->id]]) !!}
          {{ csrf_field() }}

        
          <input type="hidden" name="is_active" value = "0">

          <div class ="form-group">
          {!! form::submit('Disapproved', ['class'=>'btn btn-info']) !!}
          </div>

         {{ Form::close() }}

          @else

          {!! Form::open(['method'=>'PATCH', 'action'=>['AccountingController@update', $voucher->id]]) !!}
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
</div>
{!! $vouchers->render() !!}

@stop

