@extends('layouts.top_pgo')

@section('content')

    <h1>PGO Purchase Request</h1>

    {!! Form::open(['route' => 'purchase_request.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <th>PGO Status</th>
            <th>PGO Release Date</th>
           
        </tr>
        </thead>
        <tbody>

        @if($prs)

            @foreach($prs as $pr)


                <tr>
                    <td>{{$pr->id}}</td>
                    
                    <td><a href="">{{$pr->department ? $pr->department->depname : 'Uncategorized'}}</a></td>
                    <!-- <td><a href="{{route('purchase_request.edit', $pr->id)}}">{{$pr->department ? $pr->department->depname : 'Uncategorized'}}</a></td> -->
                    <td>{{$pr->bacprno}}</td>
                    
                    <td>{{$pr->source ? $pr->source->name : 'No connections'}}</td>
                    <td>{{$pr->pgoreldate}}</td>
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
          <!-- </td>
          <td>
            {!! Form::open(['method'=>'DELETE','action'=>['PRAccountController@destroy',$pr->id]]) !!}
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

{!! $prs->render() !!}
    

@stop

