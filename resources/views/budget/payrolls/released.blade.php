@extends('layouts.top_budget')

@section('content')

    <h1>Released Budget Payroll</h1>

  
    
      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Department</th>
            <th>Claimant</th>
            <th>PBO OBR No</th>
            <th>Payee</th>
            <th>Budget Record Date</th>
            <th>Released Date</th>
            <th>Action</th>
            
           
        </tr>
        </thead>
        <tbody>

        @if($payrolls)

            @foreach($payrolls as $payroll)


                <tr>
                    <td>{{$payroll->id}}</td>
                    
                    <td><a href="">{{$payroll->department ? $payroll->department->depname : 'Uncategorized'}}</a></td>                                    
                    <td>{{$payroll->claimant ? $payroll->claimant->claimantname : 'Uncategorized'}}</a></td>

                    <td>{{$payroll->pboobrno}}</td>

                    <td>{{$payroll->payee}}</td>

                    <td>{{$payroll->pbodate}}</td>

                    <td>{{$payroll->pboreldate}}</td>

                    <td>
            @if ($payroll->is_released == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PayrollController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-Approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PayrollController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif
          </td>

                    <!-- <td>{{$payroll->statuss ? $payroll->statuss->name : 'Uncategorized'}}</td> -->
                                     
                    
                <!-- <td>
            @if ($payroll->is_released == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PayrollController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PayrollController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif
          </td> -->
          <!-- <td>
            {!! Form::open(['method'=>'DELETE','action'=>['PayrollController@destroy',$payroll->id]]) !!}
            <div class='form-group'>
                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
            </div>

        {!! Form::close() !!}
          </td> -->

        </tr>
      @endforeach
    @endif

        </tbody>
    </table>

{!! $payrolls->render() !!}

@stop

