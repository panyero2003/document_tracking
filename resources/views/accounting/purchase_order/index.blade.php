@extends('layouts.top_accounting')

@section('content')

    <h1>Accounting Purchase Order</h1>

    {!! Form::open(['route' => 'accounting_prs.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <th>Supplier</th>
            <th>PR No</th>
            <th>OBR No</th>
            <th>Record Date</th>
            <th>Released Date</th>
            <th>Status</th>
           
        </tr>
        </thead>
        <tbody>

        @if($purchase_orders)

            @foreach($purchase_orders as $purchase_order)


                <tr>
                    <td>{{$purchase_order->id}}</td>
                    
                    <td>{{$purchase_order->bacprno}}</td>
                    <td>{{$purchase_order->pboobrno}}</td>
                    <td>{{$purchase_order->accrecdate}}</td>
                    
                    <td>{{$purchase_order->accremarks}}</td>
                    <td>{{$purchase_order->accreldate}}</td>
                    <td>{{$purchase_order->status ? $purchase_order->status->name : 'Uncategorized'}}</td>
                    
                    <td>
            @if ($purchase_order->is_released_account == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PRAccountingController@update',$purchase_order->id]]) !!}
              <input type="hidden" name="is_released_account" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PRAccountingController@update',$purchase_order->id]]) !!}
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

{!! $purchase_orders->render() !!}
    

@stop

