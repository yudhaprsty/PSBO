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

@section('banner')
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
				 <a href="/home"><img class="first-slide" src="images/bbaa1.jpg" alt="First slide" ></a>

			</div>
			<div class="item">
				<a href="/home"> <img class="second-slide " src="images/ba1.jpg" alt="Second slide"></a>

			</div>
			<div class="item">
				 <a href="/home"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>

			</div>
		</div>

	</div><!-- /.carousel --><br>

  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
  <script src="js/jquery.vide.min.js"></script>
  <!--//-->
@endsection

@section('content')
  <!--content-->
  <div class="content-top ">
  <div class="container ">

    <div class="spec ">
      <h3>New Products</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>

    <div class="tab-head ">
      <div class=" tab-content tab-content-t ">
        <div class=" con-w3l">

					@foreach ($produks as $produks)
          <div class="col-md-3 m-wthree">
            <div class="col-m" style="margin-bottom: 30px">
              <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
								<img src="/images/produk/{{ $produks -> gambar_produk }}" class="img-responsive" alt="" style="width: 180px; height: 180px;">
                <div class="offer"><p><span>Offer</span></p></div>
              </a>

              <div class="mid-1">
                <div class="women">
                  <h6><a href="single.html">{{ $produks->nama_produk}} </a></h6>
                </div>
                <div class="mid-2">
									<p >Rp. <em class="item_price">{{$produks -> harga_produk}}</em></p>
                    <div class="block">
                    <div class="starbox small ghosting"> </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
								<div class="add">
									 <a href="{{ route('add',['id'=>$produks->id])}}" class="btn btn-danger my-cart-btn my-cart-b">Buy</a>
								</div>
              </div>
            </div>
          </div>
					@endforeach
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--//content-->

  <!--content-->
  <div class="content-mid">
  <div class="container">

    <div class="col-md-4 m-w3ls">
      <div class="col-md1 ">
        <a href="kitchen.html">
          <img src="images/co1.jpg" class="img-responsive img" alt="">
          <div class="big-sa">
            <h6>New Collections</h6>
            <h3>Season<span>ing </span></h3>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 m-w3ls1">
      <div class="col-md ">
        <a href="hold.html">
          <img src="images/co.jpg" class="img-responsive img" alt="">
          <div class="big-sale">
            <div class="big-sale1">
              <h3>Big <span>Sale</span></h3>
              <p>It is a long established fact that a reader </p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 m-w3ls">
      <div class="col-md2 ">
        <a href="kitchen.html">
          <img src="images/co2.jpg" class="img-responsive img1" alt="">
          <div class="big-sale2">
            <h3>Cooking <span>Oil</span></h3>
            <p>It is a long established fact that a reader </p>
          </div>
        </a>
      </div>
      <div class="col-md3 ">
        <a href="hold.html">
          <img src="images/co3.jpg" class="img-responsive img1" alt="">
          <div class="big-sale3">
            <h3>Vegeta<span>bles</span></h3>
            <p>It is a long established fact that a reader </p>
          </div>
        </a>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  </div>
  <!--//content-->
@endsection

@section('product')
<!-- product -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-info">

  	<div class="modal-header">
  		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	</div>

  	<div class="modal-body modal-spa">
  			<div class="col-md-5 span-2">
  						<div class="item">
  							<img src="images/of.png" class="img-responsive" alt="">
  						</div>
  			</div>

  			<div class="col-md-7 span-1 ">
  				<h3>Moong(1 kg)</h3>
  				<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  				<div class="price_single">
  				  <span class="reducedfrom "><del>$2.00</del>$1.50</span>

  				 <div class="clearfix"></div>
  				</div>
  				<h4 class="quick">Quick Overview:</h4>
  				<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  				 <div class="add-to">
  					   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
  					</div>
  			</div>

  		  <div class="clearfix"> </div>

  		</div>
  	</div>
  </div>
</div>
<!-- //product -->
@endsection
