@extends('layouts.user_web')

@section('content')
    
    {!! Form::open(['route' => 'budget_prs.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}

   <!-- <form class="example" action="action_page.php"> -->
  		<input type="text" placeholder="Type Purchase Request Number to Search.." name="search">
  		<button type="submit"><i class="fa fa-search"></i></button>
  		
   {!! Form::close() !!}
   
@endsection