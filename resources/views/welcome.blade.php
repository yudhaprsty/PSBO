@extends('layouts.master')

@section('header')
	<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		<ul class="nav navbar-nav ">
			<li class="active"><a href="/" class="hyper "><span>Home</span></a></li>

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

			<li><a href="/About Us" class="hyper"><span>About Us</span></a></li>
		</ul>
	</div>
@endsection

@section('banner')
  <!---->
  <div data-vide-bg="video/video">
      <div class="container">
    		<div class="banner-info">
    			<h3>It is a long established fact that a reader will be distracted by
    			the readable </h3>
    			<div class="search-form">
    				<form action="#" method="post">
    					<input type="text" placeholder="Search..." name="Search...">
    					<input type="submit" value=" " >
    				</form>
    			</div>
    		</div>
      </div>
  </div>

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

					<div class="col-md-3 m-wthree">
						<div class="col-m">
							<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
								<img src="images/of.png" class="img-responsive" alt="">
								<div class="offer"><p><span>Offer</span></p></div>
							</a>

							<div class="mid-1">
								<div class="women">
									<h6><a href="single.html">Moong</a>(1 kg)</h6>
								</div>
								<div class="mid-2">
									<p ><label>$2.00</label><em class="item_price">$1.50</em></p>
									  <div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="add">
								   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 m-wthree">
						<div class="col-m">
							<a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
								<img src="images/of1.png" class="img-responsive" alt="">
								<div class="offer"><p><span>Offer</span></p></div>
							</a>

							<div class="mid-1">
								<div class="women">
									<h6><a href="single.html">Sunflower Oil</a>(5 kg)</h6>
								</div>
								<div class="mid-2">
									<p ><label>$10.00</label><em class="item_price">$9.00</em></p>
									  <div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="clearfix"></div>
								</div>
										<div class="add">
								   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Sunflower Oil" data-summary="summary 2" data-price="9.00" data-quantity="1" data-image="images/of1.png">Add to Cart</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 m-wthree">
						<div class="col-m">
							<a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
								<img src="images/of2.png" class="img-responsive" alt="">
								<div class="offer"><p><span>Offer</span></p></div>
							</a>

							<div class="mid-1">
								<div class="women">
									<h6><a href="single.html">Kabuli Chana</a>(1 kg)</h6>
								</div>
								<div class="mid-2">
									<p ><label>$3.00</label><em class="item_price">$2.00</em></p>
									  <div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="clearfix"></div>
								</div>
									<div class="add">
								   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 m-wthree">
						<div class="col-m">
							<a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
								<img src="images/of3.png" class="img-responsive" alt="">
								<div class="offer"><p><span>Offer</span></p></div>
							</a>

							<div class="mid-1">
								<div class="women">
									<h6><a href="single.html">Soya Chunks</a>(1 kg)</h6>
								</div>
								<div class="mid-2">
									<p ><label>$4.00</label><em class="item_price">$3.50</em></p>
									  <div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="clearfix"></div>
								</div>
									<div class="add">
								   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Soya Chunks" data-summary="summary 4" data-price="3.50" data-quantity="1" data-image="images/of3.png">Add to Cart</button>
								</div>
							</div>
						</div>
					</div>

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
