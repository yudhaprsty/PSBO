@extends('layouts.master')

@section('header')
	<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		<ul class="nav navbar-nav ">
			<li class="active"><a href="/home" class="hyper "><span>Home</span></a></li>
			<li><a href="/seeds" class="hyper "><span>Seeds</span></a></li>
			<li><a href="/tools" class="hyper "><span>Tools</span></a></li>
			<li><a href="/plants" class="hyper "><span>Plants</span></a></li>
			<li class=""><a href="/about" class="hyper"><span>About Us</span></a></li>
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
