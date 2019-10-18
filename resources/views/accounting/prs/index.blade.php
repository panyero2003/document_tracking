@extends('layouts.top_accounting')

@section('content')

    <h1>Accounting Purchase Request</h1>

    {!! Form::open(['route' => 'acc_prequest.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <th>Department/Contractor</th>
            <th>PR No</th>
            <th>OBR No</th>
            <th>Record Date</th>         
            <th>Status</th>
            <th>Release Date</th>
            <th>Remarks</th>
            
        </tr>
        </thead>
        <tbody>

        @if($prs)

            @foreach($prs as $pr)


                <tr>
                    <td>{{$pr->id}}</td>
                    
                    <td><a href="{{route('acc_prequest.edit', $pr->id)}}">{{$pr->department ? $pr->department->depname : 'Uncategorized'}}</a></td>
                    <td>{{$pr->bacprno}}</td>
                    <td>{{$pr->pboobrno}}</td>
                    <td>{{$pr->pacctorecdate}}</td>
                    <td>{{$pr->acstatus ? $pr->acstatus->name : ''}}</td>
                     <td>{{$pr->pacctoreldate}}</td>
                     <td>{{$pr->pacctoreleasedreason}}</td>
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

