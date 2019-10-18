@extends('layouts.user_web')

@section('content')
    
   <br><br>

      <form class="example" action="{{ route('user_search_voucher_result') }}" method = "GET" role="search" >
        		
  		<input type="text" placeholder="Type Voucher Number to Search.." name="term" required>
  		<!-- <button type="submit"><i class="fa fa-search"></i></button> -->
  		<button type="submit" class="btn btn-success">Search</button>
  	 </form>
    
  <div class="footer navbar-fixed-bottom">

    <div class="container">

        <div align="center" class="text-warning">
            
        <hr />

             © 2019 Copyright: Provincial Government of Northern Samar - Management Information System Office (MISO).
            <!-- <p>Email Address: <a href="mailto:panyero2003@yahoo.com">panyero2003@yahoo.com</a>.</p> -->
        </div>
    </div>
    <br>
</div> 
@endsection