@extends('layouts.master')

@section('title', 'Produk')

@section('content')
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3>Produk</h3>
	</div>
</div>


		<div class="single">
			<div class="container">
						<div class="single-top-main">
				@foreach ($product as $product)
	   		<div class="col-md-5 single-top">
	   		<div class="single-w3agile">
				<div id="picture-frame">
							<img src="/images/produk/{{ $product -> gambar_produk }}" alt="" class="img-responsive"/>
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
				<h3>{{ $product -> nama_produk }}</h3>


				 <div class="pr-single">
				  <p class="reduced ">Rp. {{$product->harga_produk}}</p>
				</div>
				<div class="block block-w3">
					<div class="starbox small ghosting"> </div>
				</div>
				<p class="in-pa"> {{$product->deskripsi_produk}} </p>

				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>
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
@stop
