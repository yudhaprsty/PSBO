@extends('layouts.master')

@section('title', 'Add Product')

@section('content')
     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Add Product</h3>
		<h4><a href="/home">Home</a><label>/</label><a href="/profil">Profil</a><label>/</label>Add Product</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Tambah produk</h3>
					<form action="/add" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="key">
							<!-- <i class="fa fa-user" aria-hidden="true"></i> -->
							<input  type="text" value="Nama Produk" name="nama_produk"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nama Produk';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
							<input  type="text" value="Harga" name="harga_produk" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Harga';}" required="">
							<div class="clearfix"></div>
						</div>
            <div class="key">
							<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
							<input  type="text" value="Deskripsi Produk" name="deskripsi_produk" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Deskripsi Produk';}" required="">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="clearfix"></div>
						</div>

						<!-- <div class="key">
							<input  type="text" value="Varian" name="varian" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Varian';}" required="">
							<div class="clearfix"></div>
						</div> -->
						<tr>
							<td>
								<select name="varian" class="form-control">
									<option value="Seeds">Seeds</option>
									<option value="Tools">Tools</option>
									<option value="Plants">Plant</option>
								</select>
							<td>
						</tr>
<br>

            <div>
							<input  type="file" name="gambar_produk" required autofocus>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</div>

            <br>

						<input type="submit" value="Add">
					</form>
				</div>

			</div>
		</div>
  @endsection
