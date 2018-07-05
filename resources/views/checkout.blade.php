@extends('layouts.master')

@section('header')
  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <ul class="nav navbar-nav ">
      <li><a href="/home" class="hyper "><span>Home</span></a></li>
      <li><a href="/seeds" class="hyper "><span>Seeds</span></a></li>
      <li><a href="/tools" class="hyper "><span>Tools</span></a></li>
      <li><a href="/plants" class="hyper "><span>Plants</span></a></li>
      <li><a href="/about" class="hyper"><span>About Us</span></a></li>
      </ul>
  </div>
@endsection

@section('content')
	<!--//banner-->
	<div class="banner-top">
		<div class="container">
			<h3>Checkout</h3>
		</div>
	</div>
	<!-- //Banner -->

	<!-- Checkout -->
	<div class="login">
		<div class="main-agileits">
			<div class="form-w3agile">
				<h3>Checkout</h3>
				<div class="add">
					<a href="single.html" >
						<img src="/images/product/{{ $product -> image }}" height="150" width="150" class="btn btn-danger my-cart-btn my-cart-b" alt="">
					</a>
				</div>
				<br>
				<br>
				<strong>Name Of Product</strong><span style="padding-left:20px;"> : {{ $product -> name }}</span>
				<br>
				<strong>Price</strong><span style="padding-left:82px;"> : Rp. {{ $product -> price }}</span>
				<br>
				<strong>Quantity</strong><span style="padding-left:54px;"> : 1 </span>
				<br>
				<strong>Rekening Number</strong><span style="padding-left:62px;"> : 0897-0213-9876-4567 a/n HypoShop</span>
				<br><br><br>
				<style>
				.city {
				    background-color: tomato;
				    color: white;
				    padding: 8px;
				}
				</style>
				<h4><strong>TOTAL</strong> </h4><br><h2 class="city"> Rp. {{ $product -> price }} </h2></span>
				<br><br>
				<strong> Alamat Pengiriman </strong><span style="padding-left:22px;"> :
				<span style="padding-left:60px;"></span><p> {{ $product -> address }} </p>
				<br><br>
				<div class="add">
					 <a href="/checkout/{{ $wishlist->id }}/status" class="btn btn-danger my-cart-btn my-cart-b">Yes</a>
					 <a href="/wishlist" class="btn btn-danger my-cart-btn my-cart-b">No</a>
				</div>
			</div>
		</div>
	</div>
@endsection
