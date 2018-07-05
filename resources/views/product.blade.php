@extends('layouts.master')

@section('header')
	<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		<ul class="nav navbar-nav ">
			<li><a href="/home" class="hyper "><span>Home</span></a></li>

			<li class="dropdown ">
				<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Seeds<b class="caret"></b></span></a>
				<ul class="dropdown-menu multi">
					<div class="row">

						<div class="col-sm-3">
							<ul class="multi-column-dropdown">
								<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Water & Beverages</a></li>
								<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruits & Vegetables</a></li>
								<li><a href="kitchen.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Staples</a></li>
								<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Branded Food</a></li>
							</ul>
						</div>

						<div class="col-sm-3 w3l">
							<a href="kitchen.html"><img src="images/me.png" class="img-responsive" alt=""></a>
						</div>

						<div class="clearfix"></div>

					</div>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Tools<b class="caret"></b></span></a>
				<ul class="dropdown-menu multi">
					<div class="row">

						<div class="col-sm-3">
							<ul class="multi-column-dropdown">
								<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Ayurvedic </a></li>
								<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Baby Care</a></li>
								<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
								<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Purfumes</a></li>
							</ul>
						</div>

						<div class="col-sm-3 w3l">
							<a href="care.html"><img src="images/me1.png" class="img-responsive" alt=""></a>
						</div>

						<div class="clearfix"></div>

					</div>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Plants<b class="caret"></b></span></a>
				<ul class="dropdown-menu multi">
					<div class="row">

						<div class="col-sm-3">
							<ul class="multi-column-dropdown">
								<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cleaning Accessories</a></li>
								<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
								<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
								<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>
							</ul>
						</div>

						<div class="col-sm-3 w3l">
							<a href="hold.html"><img src="images/me2.png" class="img-responsive" alt=""></a>
						</div>

						<div class="clearfix"></div>

					</div>
				</ul>
			</li>

			<li><a href="/about" class="hyper"><span>About Us</span></a></li>
		</ul>
	</div>
@endsection

@section('content')
	<div class="banner-top">
		<div class="container">
			<h3>Product</h3>
			<h4><a href="index.html">Home</a><label>/</label>Product</h4>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="single">
		<div class="container">
			<div class="single-top-main">

				@foreach ($product as $product)
	   		<div class="col-md-5 single-top">
	   			<div class="single-w3agile">

						<div id="picture-frame">
							<img src="/images/product/{{ $product -> image }}" data-src="images/si-1.jpg" alt="" class="img-responsive"/>
						</div>
						<script src="js/jquery.zoomtoo.js"></script>
						<script>
							$(function() {
								$("#picture-frame").zoomToo({
									magnify: 1
								});
							});
						</script>

					</div>
				</div>
				<div class="col-md-7 single-top-left ">
					<div class="single-right">
						<h3>{{$product -> name}}</h3>
						<div class="pr-single">
						  <p>Rp. <em class="reduced ">{{$product -> price}}</em></p>
						</div>
						<div class="block block-w3">
							<div class="starbox small ghosting"> </div>
						</div>
						<p class="in-pa">{{$product -> description}}</p>
						<div class="add add-3">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="Wheat" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/si.jpg">Add to Cart</button>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
		   	<div class="clearfix"> </div>
				@endforeach

	   	</div>
		</div>
	</div>
	<br>
	<br>
@endsection
