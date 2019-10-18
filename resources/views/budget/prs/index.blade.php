@extends('layouts.top_budget')

@section('content')



    <h1>List Budget Purchase Request</h1>
  
    <!-- {!! Form::button('Add Purchase Request ', [
        'onClick' => "parent.location='" . url('/purchase_request/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
    !!} -->


  
        {!! Form::open(['route' => 'budget_prs.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
           
            <th>Budget OBR No</th>
            
            <th>Budget Released Date</th>
            <th>Source of Fund</th>
            <th>Status</th>
            
            <th>Action Taken</th>
        </tr>
        </thead>
        <tbody>

        @if($prs)

            @foreach($prs as $pr)


                <tr>
                    <td>{{$pr->id}}</td>
                    
                    <td><a href="{{route('bud_prequest.edit', $pr->id)}}">{{$pr->department ? $pr->department->depname : ''}}</a></td>
                    <td>{{$pr->bacprno}}</td>
                    <td>{{number_format($pr->obramt,2)}}</td>
                    
                    <td>{{$pr->pboobrno}}</td>
                    
                    <td>{{$pr->pboreldate}}</td>
                    <td>{{$pr->source ? $pr->source->name : ''}}</td>
                    <td>{{$pr->status ? $pr->status->name : ''}}</td>
                    
                    
                 <td>
            @if ($pr->is_released == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PurchaseRequestController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released" value="0">
              <input type="hidden" id="pboreldate" name="pboreldate" value="<?php echo date('Y-m-d H:i:s'); ?>">

              <div class='form-group'>
                  {!! Form::submit('Un-approve',['class'=>'btn btn-success']) !!}
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

