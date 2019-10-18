@extends('layouts.top_treas')

@section('content')



    <h1>Treasurer Purchase Request</h1>
  
    <!-- {!! Form::button('Add Purchase Request ', [
        'onClick' => "parent.location='" . url('/purchase_request/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
    !!} -->


  
        {!! Form::open(['route' => 'treasurer_prs.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <th>Amount</th>
            <th>OBR No</th>
            <th>Record Date</th>
            
            <th>Status</th>
            <th>Remarks</th>
            <th>Released Date</th>
        </tr>
        </thead>
        <tbody>

        @if($prs)

            @foreach($prs as $pr)


                <tr>
                    <td>{{$pr->id}}</td>
                    
                    <td><a href="{{route('treasurer_prs.edit', $pr->id)}}">{{$pr->department ? $pr->department->depname : 'Uncategorized'}}</a></td>
                    <td>{{$pr->bacprno}}</td>
                    <td>{{number_format($pr->obramt,2)}}</td>
                    <td>{{$pr->pboobrno}}</td>
                    <td>{{$pr->ptotorecdate}}</td>
                   
                   
                    <td>{{$pr->pto_status ? $pr->pto_status->name : ''}}</td>
                     <td>{{$pr->ptoreleasedreason}}</td>
                     <td>{{$pr->ptoreldate}}</td>
                    
                 <td>
            @if ($pr->is_released_treas == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['TreasPRsController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released_treas" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['TreasPRsController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released_treas" value="1">

              <div class='form-group'>
                  {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
              </div>

          {!! Form::close() !!}
            @endif
          </td>
          <!-- <td>
            {!! Form::open(['method'=>'DELETE','action'=>['PurchaseRequestController@destroy',$pr->id]]) !!}
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

{!! $prs->render() !!}
    

@stop

