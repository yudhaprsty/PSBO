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
    <th class="t-head">Alamat Pengiriman</th>
    <th class="t-head">Status Pesanan</th>
    <th class="t-head">Purchase</th>
    </tr>

  @foreach($wishlist as $wishlist)
  @php($product = \App\Produk::find($wishlist->id_product))
    <tr class="cross">
    <td class="t-data">
      <div class="women">
        <h6><a href="single.html">{{$product->nama_produk}}</a></h6>
      </div>
     </td>
    <td class="t-data">{{$product->harga_produk}}</td>
    <td class="t-data">
      <div class="quantity">
        <div class="t-data">1</div>
      </div>
    </td>

    <td class="t-data">
      <div class="quantity">
        <div class="t-data">Direktorat Kemahasiswaan IPB
        	Jl. Dramaga Raya harus bahagia, Bogor, Jawa Barat 30128
        	Phone: (0321) 359590
        	Email: ditmawa@apps.ipb.ac.id</div>
      </div>
    </td>

      <td class="t-data">
        <div class="quantity">
          @if($wishlist->status_pesanan==0)
          <div class="t-data">Belum Dibaya</div>
          @else
          @if($wishlist->status_pesanan==1)
          <div class="t-data">Sudah Dibayar</div>
          @else
          @if($wishlist->status_pesanan==2)
          <div class="t-data">Sedang Dikirim</div>
          @else
          @if($wishlist->status_pesanan==3)
          <div class="t-data">Sudah Diterima</div>
          @endif
          @endif
          @endif
          @endif
        </div>
      </td>

    <td><a class=" btn btn-danger my-cart-btn my-cart-b" href="/order/{{$wishlist->id}}">Konfirmasi Pesanan</a></td>
    </tr>
      @endforeach
</table>
   </div>
   </div>
  	<!--//work-experience-->
@endsection
