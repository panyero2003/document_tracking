@extends('layouts.top_pgo')

@section('content')

    <h1>Released PGO Payroll</h1>

  
    
    {!! Form::open(['route' => 'payrolls.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <th>PBO OBR No</th>
            <th>Payee</th>
            <th>Record Date</th>
            <th>Status</th>
            <th>Release Date</th>
            
           
        </tr>
        </thead>
        <tbody>

        @if($payrolls)

            @foreach($payrolls as $payroll)


                <tr>
                    <td>{{$payroll->id}}</td>
                    
                    <td><a href="">{{$payroll->department ? $payroll->department->depname : 'Uncategorized'}}</a></td>                                    
                    <!-- <td>{{$payroll->claimant ? $payroll->claimant->claimantname : 'Uncategorized'}}</a></td> -->

                    <td>{{$payroll->pboobrno}}</td>

                    <td>{{$payroll->payee}}</td>

                    <td>{{$payroll->pgodate}}</td>

                    <td>{{$payroll->pgo_status ? $payroll->pgo_status->name : 'No Connections'}}</td>

                    <td>{{$payroll->pgoreldate}}</td>
                                     
                    
                <td>
                      
            @if ($payroll->is_released_pgo == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PGOPayrollController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released_pgo" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PGOPayrollController@update',$payroll->id]]) !!}
              <input type="hidden" name="is_released_pgo" value="1">

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

