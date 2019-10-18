@extends('layouts.top_budget')

@section('content')

    <h1>List of Budget Payroll</h1>

  
    {!! Form::button('Add Payroll ', [
        'onClick' => "parent.location='" . url('/payrolls/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
!!}

{!! Form::open(['route' => 'budget_payrolls.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <!-- <th>Claimant</th> -->
            <th>Particulars</th>
            <th>OBR No</th>
            <th>Payee</th>
            <th>Record Date</th>
            <th>Status</th>
            <th>Released Date</th>
            <th>Remarks</th>
            
            
           
        </tr>
        </thead>
        <tbody>

        @if($payrolls)

            @foreach($payrolls as $payroll)


                <tr>
                    <td>{{$payroll->id}}</td>
                    
                    <td><a href="{{route('budget_payrolls.edit', $payroll->id)}}">{{$payroll->department ? $payroll->department->depname : ''}}</a></td>                                    
                    <!-- <td>{{$payroll->claimant ? $payroll->claimant->claimantname : 'Uncategorized'}}</a></td> -->
                    <td>{{$payroll->pboparticulars}}</td>
                    <td>{{$payroll->pboobrno}}</td>

                    <td>{{$payroll->payee}}</td>

                    <td>{{$payroll->pbodate}}</td>

                    <td>{{$payroll->statuss ? $payroll->statuss->name : ''}}</td>

                    <td>{{$payroll->pboreldate}}</td>

                    <td>{{$payroll->pboreleasedreason}}</td>
                                     
                    
                <td>
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
          </td>
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

