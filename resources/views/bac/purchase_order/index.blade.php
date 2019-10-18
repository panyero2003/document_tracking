@extends('layouts.top_bac')

@section('content')

    <h1>BAC Purchase Order</h1>

    {!! Form::button('Add Purchase Orders ', [
        'onClick' => "parent.location='" . url('/bac_purchase_order/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
        ]) 
    !!}

    {!! Form::open(['route' => 'bacs_pos.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <th>BAC PR No</th>
           
            <th>PR No.</th>
            <th>Amount</th>
            
        </tr>
        </thead>
        <tbody>

        @if($purchase_orders)

            @foreach($purchase_orders as $purchase_order)


                <tr>
                    <td>{{$purchase_order->id}}</td>
                    <td><a href="{{route('bac_purchase_order.edit', $purchase_order->id)}}">{{$purchase_order->supplier}}</a></td>
                    <td>{{$purchase_order->ponumber}}</td>
                    <td>{{$purchase_order->bacprno}}</td>
                    <td>{{$purchase_order->obramt}}</td>
                    
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $purchase_orders->render() !!}
    

@stop

