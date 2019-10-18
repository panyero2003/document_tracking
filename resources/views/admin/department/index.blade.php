@extends('layouts.top_admin')

@section('content')

    <h1>Departments</h1>

  {!! Form::open(['route' => 'department.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

        <div class="input-group">

            {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search..']) !!}
         
            <span class="input-group-btn">
                <button class="btn btn-success" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </span>
        </div>
    

    {!! Form::button('Add Department', [
        'onClick' => "parent.location='" . url('/department/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
    !!}

{!! Form::close() !!}

      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            
        </tr>
        </thead>
        <tbody>

        @if($depts)

            @foreach($depts as $dept)


                <tr>
                    <td>{{$dept->id}}</td>
                    
                    <td><a href="{{route('department.edit', $dept->id)}}">{{$dept->depname}}</a></td>
                   
                    
                 
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $depts->render() !!}

@stop

