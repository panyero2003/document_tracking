@extends('layouts.app_user')

@section('content')

<div class="container"><br><br><br><br><br><br>


<div class="col-sm-3" >
  
  <div class="well well-lg" align="center"><a href="{{ url('accounting_vouchers_users') }}">Vouchers</a></div>

</div>



<div class="col-sm-3">
  
  <div class="well well-lg" align="center">
  	<a href="{{ url('user_prs') }}">Purchase Requests</a></div>

</div>

<div class="col-sm-3">
  
  <div class="well well-lg" align="center"><a href="{{ url('accounting_vouchers_users') }}">Obligations</a></div>

</div>

<div class="col-sm-3">
  
  <div class="well well-lg" align="center"><a href="{{ url('accounting_vouchers_users') }}">Others</a></div>

</div>

</div>
@stop