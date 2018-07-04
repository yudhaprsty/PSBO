@extends('layouts.master')

@section('title', 'Edit Product')

@section('content')
     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Edit Product</h3>
		<h4><a href="/home">Home</a><label>/</label><a href="/profil">Profil</a><label>/</label>Edit Product</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Edit Product</h3>
					<form action="/produk/{{$produk->id}}" method="post">
            {!! csrf_field() !!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="key">
							<!-- <i class="fa fa-user" aria-hidden="true"></i> -->
							<input  type="text" value="{{$produk->nama_produk}}" name="nama_produk" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
							<input  type="text" value="{{$produk->harga_produk}}" name="harga_produk" required="">
							<div class="clearfix"></div>
						</div>
            <div class="key">
							<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
							<input  type="text" value="{{$produk->deskripsi_produk}}" name="deskripsi_produk" required="">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
							<input  type="text" value="{{$produk->varian}}" name="varian" required="">
							<div class="clearfix"></div>
						</div>

            <!-- <div>
							<input  type="file" name="{{$produk->gambar_produk}}" required autofocus>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</div> -->
            <br>
						<tr>
						<input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="submit" value="Edit">
						</tr>

					</form>
				</div>

			</div>
		</div>
  @endsection
