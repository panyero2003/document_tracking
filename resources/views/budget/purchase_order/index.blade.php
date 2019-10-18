@extends('layouts.top_budget')

@section('content')



    <h1>List of Budget Purchase Orders</h1>
  
    <!-- {!! Form::button('Add Purchase Request ', [
        'onClick' => "parent.location='" . url('/purchase_request/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
    !!} -->


  
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
            <th>Amount</th>        
            <th>Budget OBR No</th>
            <th>Budget Record Date</th>
            <th>Source of Fund</th>
            <th>Action Taken</th>
        </tr>
        </thead>
        <tbody>

        @if($purchase_orders)

            @foreach($purchase_orders as $purchase_order)


                <tr>
                    <td>{{$purchase_order->id}}</td>
                    
                    <td><a href="{{route('bud_purchase_order.edit', $purchase_order->id)}}">
                    {{$purchase_order->supplier}}</td>
                    <td>{{$purchase_order->ponumber}}</td>
                    <td>{{$purchase_order->obramt}}</td>
                    <td>{{number_format($purchase_order->bacobramt,2)}}</td>
                    <td>{{$purchase_order->pdrecdate}}</td>
                    <!-- <td>{{$purchase_order->pborecdate}}</td> -->
                                       
                 <td>
            @if ($purchase_order->is_released == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['BudgetPurchaseOrderController@update',$purchase_order->id]]) !!}
              <input type="hidden" name="is_released" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['BudgetPurchaseOrderController@update',$purchase_order->id]]) !!}
              <input type="hidden" name="is_released" value="1">

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

