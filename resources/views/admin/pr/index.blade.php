@extends('layouts.admin')

@section('content')

    <h1>Purchase Request</h1>

    <!-- <button type="button" class="btn btn-success">Add Department</button><br> -->
    {!! Form::button('Add Purchase Request', [
        'onClick' => "parent.location='" . url('/purchase_request/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
!!}

      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Department</th>
            <th>BAC PR No</th>
            <th>BAC Record Date</th>

            <th>BAC Status</th>
            <th>BAC Release Date</th>
            <th>Budget OBR No</th>
            <th>Budget Record Date</th>
            <th>Budget Source</th>
        </tr>
        </thead>
        <tbody>

        @if($prs)

            @foreach($prs as $pr)


                <tr>
                    <td>{{$pr->id}}</td>
                    
                    <td><a href="{{route('purchase_request.edit', $pr->id)}}">{{$pr->department ? $pr->department->depname : 'Uncategorized'}}</a></td>
                    <td>{{$pr->bacprno}}</td>
                    <td>{{$pr->bacrecdate}}</td>
                    <td>{{$pr->statuss ? $pr->statuss->name : 'Uncategorized'}}</td>
                    <td>{{$pr->bacreldate}}</td>
                    <td>{{$pr->pboobrno}}</td>
                    <td>{{$pr->pdorecdate}}</td>
                    <td>{{$pr->source ? $pr->source->name : 'No connections'}}</td>
                    
                <td>
            @if ($pr->is_released == 1)
              {!! Form::open(['method'=>'PATCH','action'=>['PurchaseRequestController@update',$pr->id]]) !!}
              <input type="hidden" name="is_released" value="0">

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
          <td>
            {!! Form::open(['method'=>'DELETE','action'=>['PurchaseRequestController@destroy',$pr->id]]) !!}
            <div class='form-group'>
                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
            </div>

        {!! Form::close() !!}
          </td>

        </tr>
      @endforeach
    @endif
        </tbody>
    </table>

{!! $prs->render() !!} 
    

@stop

