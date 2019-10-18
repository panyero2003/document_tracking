@extends('layout.app')

@section('contents')

<div class="container">
	<div class="row">

		@if(count($users)> 0)

			@foreach($users as $user)

			{{ $user->lastname}}

			{{ $user->email}}
	</div>

</div>

@endsection