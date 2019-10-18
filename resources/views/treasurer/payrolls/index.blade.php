@extends('layouts.top_treas')

@section('content')

    <h1>List of Treasurer Payroll</h1>

  
    
    {!! Form::open(['route' => 'treasurer_payroll.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <!-- <th>PR NO.</th> -->
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
                    
                    <td><a href="{{route('treasurer_payroll.edit', $payroll->id)}}">{{$payroll->department ? $payroll->department->depname : ''}}</a></td>                                    
                    <!-- <td>{{$payroll->claimant ? $payroll->claimant->claimantname : 'Uncategorized'}}</a></td> -->
                    <!-- <td>{{$payroll->bacprno}}</td> -->
                    <td>{{$payroll->pboobrno}}</td>
                    <td>{{$payroll->payee}}</td>
                    <td>{{$payroll->ptodate}}</td>
                    <td>{{$payroll->pto_status ? $payroll->pto_status->name : ''}}</td>
                    <td>{{$payroll->ptoreldate}}</td>
                    <td>{{$payroll->ptoreleasedreason}}</td>
                                     
                    
                <td>
                      
            @if ($payroll->is_released_treas == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['TreasPayrollController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released_treas" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['TreasPayrollController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released_treas" value="1">

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

{!! $payrolls->render() !!}

@stop

