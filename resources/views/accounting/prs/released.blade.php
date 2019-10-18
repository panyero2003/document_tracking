@extends('layouts.top_accounting')

@section('content')

    <h1>Released Accounting Purchase Request</h1>

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
            <th>PR No</th>
            <th>OBR No</th>
            <th>Acc. Record Date</th>
            <<th>Acc. Status</th>
            <th>Acc. Release Date</th>
            <th>Action</th>
            
        </tr>
        </thead>
        <tbody>

        @if($prs)

            @foreach($prs as $pr)


                <tr>
                    <td>{{$pr->id}}</td>
                    
                    <td><a href="">{{$pr->department ? $pr->department->depname : 'Uncategorized'}}</a></td>
                    <td>{{$pr->bacprno}}</td>
                    <td>{{$pr->pboobrno}}</td>
                    <td>{{$pr->pacctorecdate}}</td>
                    <td>{{$pr->status ? $pr->status->name : 'Uncategorized'}}</td>
                    <td>{{$pr->pacctoreldate}}</td>
                    
                    
                    <!-- <td>{{$pr->pdorecdate}}</td> -->
                    <!-- <td>{{$pr->source ? $pr->source->name : 'No connections'}}</td> -->
                    <td>
            @if ($pr->is_released_account == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PRAccountingController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released_account" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PRAccountingController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released_account" value="1">

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

{!! $prs->render() !!}
    

@stop

