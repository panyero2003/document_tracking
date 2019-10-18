@extends('layouts.blog-post-1')

@section('content')

    <h1>Are you sure you want to delete department?</h1>


      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Acronym</th>

            <th>Head</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Contact No</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>

        @if($depts)

            @foreach($depts as $dept)


                <tr>
                    <td>{{$dept->id}}</td>
                    
                    <td>{{$dept->depname}}</a></td>
                    <td>{{$dept->depcode}}</td>
                    <td>{{$dept->depacro}}</td>
                    <td>{{$dept->dephead}}</td>
                    <td>{{$dept->mobileno}}</td>
                    <td>{{$dept->depheademailadd}}</td>
                    <td>{{$dept->contactno}}</td>
                    <td>{{$dept->address}}</td>

                    {!! Form::open(['method'=>'DELETE', 'action'=>['DepartmentController@destroy', $dept->id]]) !!}
                    {{ csrf_field() }}

        
              <div class ="form-group">
              {!! form::submit('Delete', ['class'=>'btn btn-danger']) !!}
              </div>
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $depts->render() !!}
    

@stop

