@extends('layouts.master')

@section('header')
	<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		<ul class="nav navbar-nav ">
			<li><a href="/" class="hyper "><span>Home</span></a></li>

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

			<li class=" active"><a href="/About Us" class="hyper"><span>About Us</span></a></li>
		</ul>
	</div>
@endsection

@section('content')
  <div class="banner-top">
  	<div class="container">
  		<h3 >About</h3>
  		<h4><a href="index.html">Home</a><label>/</label>About</h4>
  		<div class="clearfix"> </div>
  	</div>
  </div>

  <div class="about-w3 ">

    <!--about-->
		<div class="container">
	    <div  class="about">

        <div class="spec ">
			    <h3>About</h3>
			    <div class="ser-t">
				    <b></b>
				    <span><i></i></span>
				    <b class="line"></b>
			    </div>
		    </div>

  			<div class="col-md-4 about-right">
  			  <img class="img-responsive" src="images/ab.jpg" alt="">
  			</div>

  			<div class="col-md-4 about-left">
  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet sem sit amet dolor luctus pellentesque. Pellentesque eleifend tellus at interdum elementum. Nam egestas molestie elit. Vivamus sed accumsan quam, a mollis magna. Nam aliquet eros eget sapien consequat tincidunt at vel nibh. Duis ut turpis mi. Duis nec scelerisque urna, sit amet varius arcu. Aliquam aliquet sapien quis mauris semper suscipit. Maecenas pharetra dapibus posuere. Praesent odio sem.  </p>
  			</div>

  			<div class="col-md-4 about-right">
  			  <img class="img-responsive" src="images/ab1.jpg" alt="">
  			</div>

		    <div class="clearfix"> </div>
	    </div>
    </div>
  	<!--//about-->

  </div>
@endsection
