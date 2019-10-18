@extends('layouts.top_pgo')

@section('content')



    <h1>Released PGO Purchase Order </h1>
  
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
            <th>PGO OBR No</th>
            <th>PGO Record Date</th>
            <th>PGO Released Date</th>
            <th>Source of Fund</th>
            <!-- <th>Action Taken</th> -->
        </tr>
        </thead>
        <tbody>

        @if($purchase_orders)

            @foreach($purchase_orders as $purchase_order)


                <tr>
                    <td>{{$purchase_order->id}}</td>
                    
                    <td>{{$purchase_order->supplier}}</td>
                    <td>{{$purchase_order->prnumber}}</td>
                    <td>{{number_format($purchase_order->obramt,2)}}</td>
                    <td>{{$purchase_order->pboobrno}}</td>
                    <td>{{$purchase_order->pdorecdate}}</td>
                    <td>{{$purchase_order->pboreldate}}</td>
                    <td>{{$purchase_order->source ? $purchase_order->source->name : 'No connections'}}</td>
                    
              
        </tr>
      @endforeach
    @endif
        </tbody>
    </table>

{!! $purchase_orders->render() !!}
    

@stop

