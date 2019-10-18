@extends('layouts.top_admin')

@section('content')



    <h3><strong>User's Account</strong></h3>
  
    <!-- {!! Form::button('Add Purchase Request ', [
        'onClick' => "parent.location='" . url('/purchase_request/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
    !!} -->


  
        {!! Form::open(['route' => 'user_account.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
           
        </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)


                <tr>
                    <td>{{$user->id}}</td>
                    
                    <td><a href="{{route('user_account.edit', $user->id)}}">{{$user->first_name}}</a></td>
                    <td><a href="{{route('user_account.edit', $user->id)}}">{{$user->last_name}}</a></td>
                    <td>{{$user->email}}</td>
                    
                  
        </tr>
      @endforeach
    @endif
        </tbody>
    </table>

{!! $users->render() !!}
    

@stop

