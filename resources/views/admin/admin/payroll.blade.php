@extends('layouts.top_admin')

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

                    <td>
            @if ($payroll->is_released_account == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PayrollController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released_account" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PayrollController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released_account" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif

            </td>
          <td>
            {!! Form::open(['method'=>'DELETE','action'=>['PayrollController@update',$payroll->id]]) !!}
                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
            </div>

        {!! Form::close() !!}
          </td>
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

