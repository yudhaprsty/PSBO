@extends('layouts.master')

@section('header')
<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
  <ul class="nav navbar-nav ">
    <li><a href="/home" class="hyper "><span>Home</span></a></li>
    <li><a href="/seeds" class="hyper "><span>Seeds</span></a></li>
    <li><a href="/tools" class="hyper "><span>Tools</span></a></li>
    <li class="active"><a href="/plants" class="hyper "><span>Plants</span></a></li>
    <li><a href="/about" class="hyper"><span>About Us</span></a></li>
  </ul>
</div>
@endsection

@section('content')
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="care.html"><img class="first-slide" src="images/ba2.jpg" alt="First slide"></a>

        </div>
        <div class="item">
          <a href="care.html"><img class="second-slide " src="images/ba1.jpg" alt="Second slide"></a>

        </div>
        <div class="item">
         <a href="hold.html"> <img class="third-slide " src="images/bbaa1.jpg" alt="Third slide"></a>

        </div>
      </div>

    </div><!-- /.carousel -->

<!--content-->
		<div class="product">
		<div class="container">
		<div class="spec ">
				<h3>Products</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>

      @foreach ($products as $product)
      @if($product->variant == "Plants")
      <div class="col-md-3 m-wthree">
        <div class="col-m" style="margin-bottom: 30px">
          <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
            <img src="/images/product/{{ $product -> image }}" class="img-responsive" alt="" style="width: 180px; height: 180px;">
            <div class="offer"><p><span>Offer</span></p></div>
          </a>
          <div class="mid-1">
            <div class="women">
              <h6><a href="single.html">{{ $product -> name }} </a></h6>
            </div>
            <div class="mid-2">
              <p >Rp. <em class="item_price">{{ $product -> price }}</em></p>
                <div class="block">
                <div class="starbox small ghosting"> </div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="add">
               <a href="/add/{{ $product -> id }}" class="btn btn-danger my-cart-btn my-cart-b">Buy</a>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach

		</div>
	</div>
@endsection
