@extends('layouts.top_bac')

@section('content')

    <h1>List BAC Purchase Request</h1>

    {!! Form::button('Add Purchase Request ', [
        'onClick' => "parent.location='" . url('/bac_prses/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
        ]) 
    !!}

    {!! Form::open(['route' => 'bacs.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <th>Record Date</th>
            <th>Transaction Details</th>
            <th>Amount</th>
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
                    
                    <td><a href="{{route('bac_prses.edit', $pr->id)}}">{{$pr->department ? $pr->department->depname : 'Uncategorized'}}</a></td>
                    <td>{{$pr->bacprno}}</td>
                    <td>{{$pr->bacrecdate}}</td>
                                       
                    <td>{{$pr->obrpart}}</td>
                    <td>{{number_format($pr->obramt,2)}}</td>
                    <td>{{$pr->bac_status ? $pr->bac_status->name : ''}}</td>
                    <td>{{$pr->bacdatereleased}}</td>
                    <td>{{$pr->bacreleasedreason}}</td>
                    <td>
            @if ($pr->is_released_bac == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PRBACController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released_bac" value="0">
              
              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PRBACController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released_bac" value="1">

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

