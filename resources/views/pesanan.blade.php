@extends('layouts.master')

@section('header')
  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <ul class="nav navbar-nav ">
      <li><a href="/home" class="hyper "><span>Home</span></a></li>
      <li><a href="/seeds" class="hyper "><span>Seeds</span></a></li>
      <li><a href="/tools" class="hyper "><span>Tools</span></a></li>
      <li><a href="/plants" class="hyper "><span>Plants</span></a></li>
      <li class=""><a href="/about" class="hyper"><span>About Us</span></a></li>
    </ul>
  </div>
@endsection

@section('content')
<!-- contact -->
  <div class="check-out">
  <div class="container">
 <div class="spec ">
      <h3>Status Pesanan</h3>
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
    <th class="t-head">Shipping Address</th>
    <th class="t-head">Order Status</th>
    <th class="t-head">Change Status</th>
    <th class="t-head"></th>
    </tr>
  @foreach($products as $product)
  <!-- for -->
    <tr class="cross">
    <td class="t-data">
      <div class="women">
        <h6><a href="single.html">{{ \App\Produk::find($product->id_product)->nama_produk}}</a></h6>
      </div>
     </td>
    <td class="t-data">{{$product->price}}</td>
    <td class="t-data">
      <div class="quantity">
        <div class="t-data">1</div>
      </div>
    </td>

    <td class="t-data">
        <div class="t-data">Direktorat Kemahasiswaan IPB
        	Jl. Dramaga Raya harus bahagia, Bogor, Jawa Barat 30128
        	Phone: (0321) 359590
        	Email: ditmawa@apps.ipb.ac.id</div>
    </td>

    <td class="t-data">
      <div class="quantity">
        @if($product->status_pesanan==0)
        <div class="t-data">Belum Dibayar</div>
        @else
        @if($product->status_pesanan==1)
        <div class="t-data">Sudah Dibayar</div>
        @else
        @if($product->status_pesanan==2)
        <div class="t-data">Sedang Dikirim</div>
        @else
        @if($product->status_pesanan==3)
        <div class="t-data">Sudah Diterima</div>
        @endif
        @endif
        @endif
        @endif
      </div>
    </td>

      <td class="t-data">
            <form method="POST" action="{{route('ubah_status',$product->id)}}">
            <select id="status" name="status" class="form-control" required="true">
              <option disabled selected>-- Ubah Status --</option>
                <option value="1">Sudah Dibayar</option>
                <option value="2">Sedang Dikirim</option>
            </select>
      </td>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <td class="t-data"> <input class="btn btn-danger my-cart-btn my-cart-b" type="submit" name="submit" value="ubah"> </td>
    </form>
    </tr>
      <!-- endforeach -->
    @endforeach
</table>
   </div>
   </div>
  	<!--//work-experience-->
@endsection
