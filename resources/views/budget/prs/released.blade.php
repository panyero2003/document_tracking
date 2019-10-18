@extends('layouts.top_budget')

@section('content')



    <h1>Released Budget Purchase Request </h1>
  
    <!-- {!! Form::button('Add Purchase Request ', [
        'onClick' => "parent.location='" . url('/purchase_request/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
    !!} -->


  
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
            <th>Amount</th>
            <!-- <th>PBO Status</th> -->
            <!-- <th>Released</th> -->
            <!-- <th>BAC Release Date</th> -->
            <th>Budget OBR No</th>
            <th>Budget Record Date</th>
            <th>Budget Released Date</th>
            <th>Source of Fund</th>
            <!-- <th>Action Taken</th> -->
        </tr>
        </thead>
        <tbody>

        @if($prs)

            @foreach($prs as $pr)


                <tr>
                    <td>{{$pr->id}}</td>
                    
                    <td><a href="{{route('bud_prequest.edit', $pr->id)}}">{{$pr->department ? $pr->department->depname : 'Uncategorized'}}</a></td>
                    <td>{{$pr->bacprno}}</td>
                    <td>{{number_format($pr->obramt,2)}}</td>
                   
                    <td>{{$pr->pboobrno}}</td>
                    <td>{{$pr->pdorecdate}}</td>
                    <td>{{$pr->pboreldate}}</td>
                    <td>{{$pr->source ? $pr->source->name : 'No Sources'}}</td>


                    
                 <td>
            @if ($pr->is_released == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PurchaseRequestController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released" value="0">

              <div class='form-group'>
                  {!! Form::submit('Un-Approve',['class'=>'btn btn-success']) !!}
              </div>

          {!! Form::close() !!}
            @else
              {!! Form::open(['method'=>'PATCH','action'=>['PurchaseRequestController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released" value="1">

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

