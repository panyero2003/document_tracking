@extends('layouts.top_bac')

@section('content')

    <h1>Payroll</h1>

  
    {!! Form::button('Add Payroll ', [
        'onClick' => "parent.location='" . url('/bac_payrollss/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
    !!}

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
            <th>Department</th>
            <th>Claimant</th>
            <th>PBO OBR No</th>
            <th>Payee</th>
            <th>PBO Date</th>
            
           
        </tr>
        </thead>
        <tbody>

        @if($payrolls)

            @foreach($payrolls as $payroll)


                <tr>
                    <td>{{$payroll->id}}</td>
                    
                    <td><a href="{{route('payrolls.edit', $payroll->id)}}">{{$payroll->department ? $payroll->department->depname : 'Uncategorized'}}</a></td>                                    
                    <td>{{$payroll->claimant ? $payroll->claimant->claimantname : 'Uncategorized'}}</a></td>

                    <td>{{$payroll->pboobrno}}</td>

                    <td>{{$payroll->payee}}</td>

                    <td>{{$payroll->pbodate}}</td>
                                     
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $payrolls->render() !!}

@stop

