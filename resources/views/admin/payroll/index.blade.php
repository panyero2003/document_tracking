@extends('layouts.top_budget')

@section('content')

    <h1>Payroll</h1>

  
    {!! Form::button('Add Payroll ', [
        'onClick' => "parent.location='" . url('/payrolls/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
!!}

      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Department</th>
            <th>Claimant</th>
            <th>PBO OBR No</th>
            <th>Payee</th>
            <th>PBO Date</th>
            <th>PBO Status</th>
            
           
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

                    <td>{{$payroll->statuss ? $payroll->statuss->name : 'Uncategorized'}}</a></td>  
                                     
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $payrolls->render() !!}

@stop

