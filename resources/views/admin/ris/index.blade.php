@extends('layouts.admin')

@section('content')

    <h1>Requisition and Issue Slip</h1>

  
    {!! Form::button('Add Requisition and Issue Slip ', [
        'onClick' => "parent.location='" . url('/requisition/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
!!}

      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Department</th>
            
            <th>RIS No.</th>

            <th>PGSO Date</th>
            <th>PGSO Status</th>
            <th>PGSO DateTime</th>
            <th>PGSO Release Date</th>
            
           
        </tr>
        </thead>
        <tbody>

        @if($requisitions)

            @foreach($requisitions as $requisition)


                <tr>
                    <td>{{$requisition->id}}</td>
                    
                    <td><a href="{{route('requisition.edit', $requisition->id)}}">{{$requisition->department ? $requisition->department->depname : 'Uncategorized'}}</a></td>
                    <td>{{$requisition->pgsorisno}}</td>
                    <td>{{$requisition->pgsodate}}</td>
                    <td>{{$requisition->status ? $requisition->status->name : 'Uncategorized'}}</td>
                    <td>{{$requisition->pgsostatusdatetime}}</td>
                    <td>{{$requisition->pgsoreldate}}</td>
                                     
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $requisitions->render() !!}

@stop

