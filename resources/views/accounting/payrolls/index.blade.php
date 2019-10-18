@extends('layouts.top_accounting')

@section('content')

    <h1>List of Accounting Payroll</h1>

  
    <!-- {!! Form::button('Add Payroll ', [
        'onClick' => "parent.location='" . url('/payrolls/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
!!} -->

      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Department</th>
            <!-- <th>Claimant</th> -->
            <th>PBO OBR No</th>
            <th>Payee</th>
            <th>Record Date</th>
            <th>Status</th>
            <th>Release Date</th>
            <th>Remarks</th>
            
           
        </tr>
        </thead>
        <tbody>

        @if($payrolls)

            @foreach($payrolls as $payroll)


                <tr>
                    <td>{{$payroll->id}}</td>
                    
                    <td><a href="{{route('account_payroll.edit', $payroll->id)}}">{{$payroll->department ? $payroll->department->depname : ''}}</a></td>  
                    <td>{{$payroll->pboobrno}}</td>
                    <td>{{$payroll->payee}}</td>
                    <td>{{$payroll->pacctodate}}</td>
                    <td>{{$payroll->acc_status ? $payroll->acc_status->name : ''}}</td>
                    <td>{{$payroll->pacctoreldate}}</td>
                    <td>{{$payroll->pacctoreleasedreason}}</td>
                     

                    <td>
            @if ($payroll->is_released_account == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PayrollAccountingController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released_account" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-Approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PayrollAccountingController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released_account" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif
          <!-- </td>
          <td>
            {!! Form::open(['method'=>'DELETE','action'=>['PRAccountController@destroy',$payroll->id]]) !!}
            <div class='form-group'>
                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
            </div> -->

        {!! Form::close() !!}
          </td>

        </tr>
      @endforeach
    @endif
                                     
             

        </tbody>
    </table>

{!! $payrolls->render() !!}

@stop

