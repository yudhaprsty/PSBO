@extends('layouts.master')

@section('header')
  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <ul class="nav navbar-nav ">
      <li><a href="/wishlist" class="hyper "><span>Home</span></a></li>

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
		<h3 >Wishlist</h3>
		<h4><a href="index.html">Home</a><label>/</label>Wishlist</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">
		<div class="container">
	 <div class="spec ">
				<h3>Wishlist</h3>
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
      <!-- <div class="t-data">1</div> -->
								<div class="quantity-select">
									<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span class="span-1">1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
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
