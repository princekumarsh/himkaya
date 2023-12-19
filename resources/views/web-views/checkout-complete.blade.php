@extends('layouts.front-end.app')
@section('css_section')
 	<!-- #firstline{
 	font-family:Snell Roundhand, cursive;
 	margin: 24px;
	 } -->
@stop
@section('content')

<div class="container">
	<div style="background-color: #f7f8fa94;margin: 10%;height: auto;box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;">
		 <h3 style="font-family:Snell Roundhand,cursive;padding-left:70px;padding-top:70px;">Your order has been placed successfully!</h5>
		 <h1 class="text-center"><i class="fa fa-check-circle" style="font-size:70px;color: green;"></i></h1>
		 <h3 style="margin-left:70px">Hello, John</h3>
		 <h4 style="font-weight:200;padding:0px 70px">You order has been confirmed and will be shipped according to the method you selected!</h3>	
		 <div style="display:flex;justify-content: space-between;margin-left:5%;margin-right: 5%;">
		 	<button class="btn btn-primary mt-4 mb-4">Go to shopping</button>
		 	<button class="btn btn-secondary mb-4 mt-4" onclick="window.location.href='{{route('account-oder')}}'">Check orders</button>
		 </div>
	</div>
</div>

@stop