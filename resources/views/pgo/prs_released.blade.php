@extends('layouts.top_accounting')

@section('content')

    <h1>Released PGO Purchase Request</h1>

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
            <th>OBR No</th>
            <th>Acc. Record Date</th>

            <!-- <th>Acc. Status</th> -->
            <!-- <th>Acc. Release Date</th> -->
            
        </tr>
        </thead>
        <tbody>

        @if($prs)

            @foreach($prs as $pr)


                <tr>
                    <td>{{$pr->id}}</td>
                    
                    <td><a href="{{route('purchase_request.edit', $pr->id)}}">{{$pr->department ? $pr->department->depname : 'Uncategorized'}}</a></td>
                    <td>{{$pr->bacprno}}</td>
                    <td>{{$pr->pboobrno}}</td>
                    <td>{{$pr->accrecdate}}</td>
                    <td>{{$pr->status ? $pr->status->name : 'Uncategorized'}}</td>
                    <td>{{$pr->accremarks}}</td>
                    <td>{{$pr->accreldate}}</td>
                    
                    
        </tr>
      @endforeach
    @endif
            

        </tbody>
    </table>

{!! $prs->render() !!}
    

@stop

