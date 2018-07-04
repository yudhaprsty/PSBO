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
<div class="banner-top">
	<div class="container">
		<h3 >Cart</h3>
		<h4><a href="index.html">Home</a><label>/</label>Cart</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">
		<div class="container">
	 <div class="spec ">
				<h3>Cart</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cross').fadeOut('slow', function(c){
							$('.cross').remove();
						});
						});
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cross1').fadeOut('slow', function(c){
							$('.cross1').remove();
						});
						});
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cross2').fadeOut('slow', function(c){
							$('.cross2').remove();
						});
						});
					});
			   </script>
 <table class="table ">
		  <tr>
			<th class="t-head head-it ">Products</th>
			<th class="t-head">Price</th>
		<th class="t-head">Quantity</th>

			<th class="t-head">Purchase</th>
		  </tr>

    @foreach($wishlist as $wishlist)
      @php($produk = \App\Produk::find($wishlist->id_product))
		  <tr class="cross">
			<td class="ring-in t-data">
				<a href="single.html" class="at-in">
					<img src="/images/produk/{{ $produk -> gambar_produk }}" height="100" width="100" class="img-responsive" alt="">
				</a>
      <div class="sed">
				<h5>{{$produk->nama_produk}}</h5>
			</div>
				<div class="clearfix"> </div>
				<div class="close1"> <i class="fa fa-times" aria-hidden="true"></i></div>
			 </td>
			<td class="t-data">{{$produk->harga_produk}}</td>
			<td class="t-data"><div class="quantity">
      <div class="t-data">1</div>
								<!-- <div class="quantity-select">
									<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span class="span-1">1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div> -->
							</div>

			</td>

			<td class="t-data t-w3l"><a class=" add-1" href="/checkout/{{$wishlist->id}}">Checkout</a></td>

		  </tr>
        @endforeach
	</table>
		 </div>
		 </div>

	<!--quantity-->
			<script>
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
			</script>
			<!--quantity-->
@endsection
