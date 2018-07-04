@extends('layouts.master')

@section('title', 'Produk')

@section('content')
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3>Checkout</h3>
	</div>
</div>

<!--login-->
<!-- info row -->

	<div class="login">

		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Checkout</h3>
					<div class="add">
					<a href="single.html" >
						<img src="/images/produk/{{ $produk -> gambar_produk }}" height="150" width="150" class="btn btn-danger my-cart-btn my-cart-b" alt="">
					</a></div>
					<br>
<br>
<strong>Nama Produk</strong><span style="padding-left:20px;"> : {{$produk->nama_produk}}</span>
<br>
<strong>Price</strong><span style="padding-left:82px;"> : Rp. {{$produk->harga_produk}}</span>
<br>
<strong>Quantity</strong><span style="padding-left:54px;"> : 1</span>
<br>
<strong>No. Rek</strong><span style="padding-left:62px;"> : 0897-0213-9876-4567</span>
<br><br><br>
<style>
.city {
    background-color: tomato;
    color: white;
    padding: 8px;
}
</style>
<h4><strong>TOTAL</strong> </h4><br><h2 class="city"> Rp. {{$produk->harga_produk}} </h2></span>
<br><br>
<strong>Alamat Pengiriman </strong><span style="padding-left:22px;"> :
<span style="padding-left:60px;"></span><p>	Direktorat Kemahasiswaan IPB
	Jl. Dramaga Raya harus bahagia, Bogor, Jawa Barat 30128
	Phone: (0321) 359590
	Email: ditmawa@apps.ipb.ac.id</p>
<br><br>
	<div class="add">
		 <a href="/checkout/{{$wishlist->id}}/status" class="btn btn-danger my-cart-btn my-cart-b">Ya</a>
		 <a href="/wishlist" class="btn btn-danger my-cart-btn my-cart-b">Tidak</a>
	</div>
				</div>
			</div>
		</div>
@stop
