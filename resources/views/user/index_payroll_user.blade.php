@extends('layouts.app_user')

@section('content')

<div class="container">

    <h1>Search Purchase Request</h1>

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
                    <td>{{$pr->status ? $pr->status->name : 'Uncategorized'}}</td>
                    <td>{{$pr->bacreldate}}</td>
                    <td>{{$pr->pboobrno}}</td>
                    <td>{{$pr->pdorecdate}}</td>
                    <td>{{$pr->source ? $pr->source->name : 'No connections'}}</td>
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $prs->render() !!}
    

@stop

