@extends('layouts.app')

@section('content')

   
	
	<div class="container">
  		
  		

  {!! Form::open(['route' => 'accounting_vouchers.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

<div class="row">
        
       
            {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search..']) !!}
          
        <div class="input-group">
<div class="col-md-6">
            <span class="input-group-btn"> -->
                <button class="btn btn-success" type="submit">
                    <i class="glyphicon glyphicon-search"></i><b>Search</b>
                </button>
            </span>
        </div>

    </div>
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

        @if($pos)

            @foreach($pos as $po)


                <tr>
                    <td>{{$po->id}}</td>
                    <td>{{$po->claimant}}</td>
                    <td>{{$po->pboobrno}}</td>
                    <td>{{$po->pboobrno}}</td>
                    <td>{{$po->payee}}</td>
                    <td>{{$po->pbodate}}</td>
                                     
                     <!--  <td>
            @if ($po->is_released == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['VoucherBudgetController@update',$po->id]]) !!}
              <input type="hidden" name="is_released" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['VoucherBudgetController@update',$po->id]]) !!}
              <input type="hidden" name="is_released" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif
          </td>
          

        {!! Form::close() !!}
          </td> -->

        </tr>
      @endforeach
    @endif
        </tbody>
    </table>

{!! $pos->render() !!}

<div class="col-sm-6"> 
<a class="btn btn-warning"  href="{{ URL('kiosk_user') }}">Back </a>
</div>

@stop

