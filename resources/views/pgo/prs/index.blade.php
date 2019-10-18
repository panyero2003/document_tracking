@extends('layouts.top_pgo')

@section('content')

    <h1>PGO Purchase Request</h1>

    {!! Form::open(['route' => 'pgo_pgo.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <th>OBR No</th>
            <th>PR No</th>
            <th>Record Date</th>
            <th>Status</th>
            <th>Released Date</th>
            
            <th>Remarks</th>
            
           
        </tr>
        </thead>
        <tbody>

        @if($prs)

            @foreach($prs as $pr)


                <tr>
                    <td>{{$pr->id}}</td>
                    
                    <td><a href="{{route('pgo_pgo.edit', $pr->id)}}">{{$pr->department ? $pr->department->depname : ''}}</a></td>
                   
                    <td>{{$pr->bacprno}}</td>
                    <td>{{$pr->pboobrno}}</td>
                    <td>{{$pr->pgorecdate}}</td>
                    <td>{{$pr->pgo_status ? $pr->pgo_status->name : ''}}</td>
                    <td>{{$pr->pgoreldate}}</td>
                    
                    <td>{{$pr->pgoreleasedreason}}</td>
                    <td>
                      
            @if ($pr->is_released_pgo == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PGOPurchaseRequestController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released_pgo" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PGOPurchaseRequestController@update',$pr->id]]) !!}
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

{!! $prs->render() !!}
    

@stop

