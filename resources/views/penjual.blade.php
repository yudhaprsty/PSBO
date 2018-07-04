<!DOCTYPE html>
<html>
<head>
<title>Home Penjual</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					}
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">

			<div class="logo">
				<h1 ><a href="awal"><b>T<br>H<br>E</b>Hypo Shop<span>The Best Supermarket</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="wishlist.html" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
          @guest
              <li><a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i>{{ __('Login') }}</a></li>
              <li><a href="{{ route('register') }}"><i class="fa fa-arrow-right" aria-hidden="true"></i>{{ __('Register') }}</a></li>
					<!-- <li><a href="login" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li> -->
					<!-- <li><a href="register" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li> -->
          @else
                  <li>
                  <a href="#"><i class="fa fa-user" aria-hidden="true"></i>
                      {{ Auth::user()->name }}
                  </a>
                </li>

                    <li><a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                       <i class="fa fa-arrow-right" aria-hidden="true"></i>
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>

          @endguest
					<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				</ul>
			</div>
				</div>
</div>

<!--banner-->
<div class="banner-top">
<div class="container">
<h3 >Bang Jek</h3>
<div class="add2">
  <a href="add" class="btn btn-danger my-cart-btn my-cart-mz ">Tambah Produk</a>
</div>
<div class="clearfix"> </div>
</div>
</div>

<!--content-->
<!-- <div class="content-top "> -->
	<div class="container ">
		<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					  <li class="active"><a href="#tab1" data-toggle="tab">Staples</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">Snacks</a></li>
					  <li class=""><a href="#tab3" data-toggle="tab">Fruits & Vegetables</a></li>
					  <li class=""><a href="#tab4" data-toggle="tab">Breakfast & Cereal</a></li>
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
										<img src="images/of.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="produk">Moong</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$2.00</label><em class="item_price">$1.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b ">Edit</button>
										   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Delete</button>
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
                       <button class="btn btn-danger my-cart-btn my-cart-b ">Edit</button>
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Sunflower Oil" data-summary="summary 2" data-price="9.00" data-quantity="1" data-image="images/of1.png">Delete</button>
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
                        <button class="btn btn-danger my-cart-btn my-cart-b ">Edit</button>
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Delete</button>
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
                        <button class="btn btn-danger my-cart-btn my-cart-b ">Edit</button>
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Soya Chunks" data-summary="summary 4" data-price="3.50" data-quantity="1" data-image="images/of3.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						 </div>
					</div>
					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
										<img src="images/of4.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Lays</a>(100 g)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$1.00</label><em class="item_price">$0.70</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="images/of4.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
										<img src="images/of5.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Kurkure</a>(100 g)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$1.00</label><em class="item_price">$0.70</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="images/of5.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
										<img src="images/of6.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Popcorn</a>(250 g)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$2.00</label><em class="item_price">$1.00</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="Popcorn" data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="images/of6.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
										<img src="images/of7.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Nuts</a>(250 g)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$4.00</label><em class="item_price">$3.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Nuts" data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="images/of7.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						 </div>
					</div>
					<div class="tab-pane  text-style" id="tab3">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
										<img src="images/of8.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Banana</a>(6 pcs)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$2.00</label><em class="item_price">$1.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="Banana" data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="images/of8.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
										<img src="images/of9.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Onion</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$1.00</label><em class="item_price">$0.70</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="10" data-name="Onion" data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="images/of9.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
										<img src="images/of10.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html"> Bitter Gourd</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$2.00</label><em class="item_price">$1.00</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="images/of10.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
										<img src="images/of11.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Apples</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$4.00</label><em class="item_price">$3.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="12" data-name="Apples" data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="images/of11.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						 </div>
					</div>
					<div class="tab-pane text-style" id="tab4">
							<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
										<img src="images/of12.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Honey</a>(500 g)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$7.00</label><em class="item_price">$6.00</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="13" data-name="Honey" data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="images/of12.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m ">
									<a href="#" data-toggle="modal" data-target="#myModal14" class="offer-img">
										<img src="images/of13.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Chocos</a>(250 g)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$5.00</label><em class="item_price">$4.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="14" data-name="Chocos" data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="images/of13.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m ">
									<a href="#" data-toggle="modal" data-target="#myModal15" class="offer-img">
										<img src="images/of14.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Oats</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$4.00</label><em class="item_price">$3.50</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="15" data-name="Oats" data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="images/of14.png">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal16" class="offer-img">
										<img src="images/of15.png" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Bread</a>(500 g)</h6>
										</div>
										<div class="mid-2">
											<p ><label>$1.00</label><em class="item_price">$0.80</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="images/of15.png">Delete</button>
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
	<!-- </div> -->
	</div>
<br>
  <!--footer-->
  <div class="footer">
  	<div class="container">
  		<div class="col-md-3 footer-grid">
  			<h3>About Us</h3>
  			<p>Nam libero tempore, cum soluta nobis est eligendi
  				optio cumque nihil impedit quo minus id quod maxime
  				placeat facere possimus.</p>
  		</div>
  		<div class="col-md-3 footer-grid ">
  			<h3>Menu</h3>
  			<ul>
  				<li><a href="">Home</a></li>
  				<li><a href="kitchen.html">Kitchen</a></li>
  				<li><a href="care.html">Personal Care</a></li>
  				<li><a href="hold.html">Household</a></li>
  				<li><a href="codes.html">Short Codes</a></li>
  				<li><a href="contact.html">Contact</a></li>
  			</ul>
  		</div>
  		<div class="col-md-3 footer-grid ">
  			<h3>Customer Services</h3>
  			<ul>
  				<li><a href="shipping.html">Shipping</a></li>
  				<li><a href="terms.html">Terms & Conditions</a></li>
  				<li><a href="faqs.html">Faqs</a></li>
  				<li><a href="contact.html">Contact</a></li>
  				<li><a href="offer.html">Online Shopping</a></li>

  			</ul>
  		</div>
  		<div class="col-md-3 footer-grid">
  			<h3>My Account</h3>
  			<ul>
  				<li><a href="login.html">Login</a></li>
  				<li><a href="register.html">Register</a></li>
  				<li><a href="wishlist.html">Wishlist</a></li>

  			</ul>
  		</div>
  		<div class="clearfix"></div>
  			<div class="footer-bottom">
  				<h2 ><a href="awal"><b>T<br>H<br>E</b>Hypo Shop<span>The Best Supermarket</span></a></h2>
  				<p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
  				<ul class="social-fo">
  					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
  					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
  					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
  				</ul>
  				<div class=" address">
  					<div class="col-md-4 fo-grid1">
  							<p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
  					</div>
  					<div class="col-md-4 fo-grid1">
  							<p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>
  					</div>
  					<div class="col-md-4 fo-grid1">
  						<p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
  					</div>
  					<div class="clearfix"></div>

  					</div>
  			</div>
  		<div class="copy-right">
  			<p> &copy; 2016 Big store. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
  		</div>
  	</div>
  </div>
  <!-- //footer-->

  <!-- smooth scrolling -->
  	<script type="text/javascript">
  		$(document).ready(function() {
  		/*
  			var defaults = {
  			containerID: 'toTop', // fading element id
  			containerHoverID: 'toTopHover', // fading element hover id
  			scrollSpeed: 1200,
  			easingType: 'linear'
  			};
  		*/
  		$().UItoTop({ easingType: 'easeOutQuart' });
  		});
  	</script>
  	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  <!-- //smooth scrolling -->
  <!-- for bootstrap working -->
  		<script src="js/bootstrap.js"></script>
  <!-- //for bootstrap working -->
  <script type='text/javascript' src="js/jquery.mycart.js"></script>
    <script type="text/javascript">
    $(function () {

      var goToCartIcon = function($addTocartBtn){
        var $cartIcon = $(".my-cart-icon");
        var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
        $addTocartBtn.prepend($image);
        var position = $cartIcon.position();
        $image.animate({
          top: position.top,
          left: position.left
        }, 500 , "linear", function() {
          $image.remove();
        });
      }

      $('.my-cart-btn').myCart({
        classCartIcon: 'my-cart-icon',
        classCartBadge: 'my-cart-badge',
        affixCartIcon: true,
        checkoutCart: function(products) {
          $.each(products, function(){
            console.log(this);
          });
        },
        clickOnAddToCart: function($addTocart){
          goToCartIcon($addTocart);
        },
        getDiscountPrice: function(products) {
          var total = 0;
          $.each(products, function(){
            total += this.quantity * this.price;
          });
          return total * 1;
        }
      });

    });
    </script>


  				<!-- product -->
  			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of4.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Lays(100 g)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$1.00</del>$0.70</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="images/of4.png">Delete</button>
  										</div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- product -->
  			<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of5.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Kurkure(100 g)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$1.00</del>$0.70</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="images/of5.png">Delete</button>
  									 </div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- product -->
  			<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of6.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Popcorn(250 g)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$2.00</del>$1.00</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="7" data-name="Popcorn" data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="images/of6.png">Delete</button>
  										</div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- product -->
  			<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of7.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Nuts(250 g)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$4.00</del>$3.50</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="8" data-name="Nuts" data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="images/of7.png">Delete</button>
  										</div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- product -->
  			<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of8.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Banana(6 pcs)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$2.00</del>$1.50</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="9" data-name="Banana" data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="images/of8.png">Delete</button>
  										</div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- product -->
  			<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of9.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Onion(1 kg)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$1.00</del>$0.70</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="10" data-name="Onion" data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="images/of9.png">Delete</button>
  										</div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- product -->
  			<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of10.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Bitter Gourd(1 kg)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$2.00</del>$1.00</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="images/of10.png">Delete</button>
  										</div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- product -->
  			<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of11.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Apples(1 kg)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$4.00</del>$3.50</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="12" data-name="Apples" data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="images/of11.png">Delete</button>
  										</div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- product -->
  			<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of12.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Honey(500 g)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$7.00</del>$6.00</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="13" data-name="Honey" data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="images/of12.png">Delete</button>
  										</div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- product -->
  			<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of13.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Chocos(250 g)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$5.00</del>$4.50</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="14" data-name="Chocos" data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="images/of13.png">Delete</button>
  										</div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- product -->
  			<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of14.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Oats(1 kg)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$4.00</del>$3.50</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="15" data-name="Oats" data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="images/of14.png">Delete</button>
  										</div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<!-- product -->
  			<div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
  					<div class="modal-content modal-info">
  						<div class="modal-header">
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						</div>
  						<div class="modal-body modal-spa">
  								<div class="col-md-5 span-2">
  											<div class="item">
  												<img src="images/of15.png" class="img-responsive" alt="">
  											</div>
  								</div>
  								<div class="col-md-7 span-1 ">
  									<h3>Bread(500 g)</h3>
  									<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
  									<div class="price_single">
  									  <span class="reducedfrom "><del>$1.00</del>$0.80</span>

  									 <div class="clearfix"></div>
  									</div>
  									<h4 class="quick">Quick Overview:</h4>
  									<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
  									 <div class="add-to">
  										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="images/of15.png">Delete</button>
  										</div>
  								</div>
  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  </body>
  </html>
