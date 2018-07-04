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
  <div class="banner-top">
    <div class="container">
      <h3>Profile</h3>
      <h4><a href="/home">Home</a><label>/</label>Profile</h4>
      <div class="clearfix"> </div>
    </div>
  </div>
  <br>
  <div class="container">
    <br>
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-body">

          <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
          @if(Auth::user()->image == NULL)
          <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-thumbnail">
          @else
          <img alt="User Pic" src="/images/user/{{ Auth::user()->image }}" id="profile-image1" class="img-thumbnail">
          @endif
          <br>
          <br>
            <form action="/profil" method="post" enctype="multipart/form-data">
              <input  type="file"  class="btn btn-default" name="image" >
              <br>
              <input type="submit" class="btn btn-default" value="Upload">
              <!-- <input type="submit" class="btn btn-default" value="Edit Profile"> -->
              @csrf
            </form>
          </div>

          <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
            <div class="container" >
              <h2>{{ Auth::user()->name }}</h2>
            </div>
            <hr>
            <ul class="" >
              <!-- <p><span class="glyphicon glyphicon-user one" style="width:40px;"></span>{{ Auth::user()->name }}</p> -->
              <p><span class="glyphicon glyphicon-envelope" style="width:40px;"></span>{{ Auth::user()->email }}</P>
              <p><span class="glyphicon glyphicon-phone" style="width:40px;"></span>0{{ Auth::user()->phone }}</P>
              <p><span class="glyphicon glyphicon-pencil" style="width:40px;"></span>{{ Auth::user()->address }}</P>
            </ul>
            <hr>
          </div>

        </div>
        <br>
      </div>
    </div>
  </div>

<br>
<br>
<br>
<br>
  <!--banner-->
  <div class="banner-top">
  <div class="container">
  <h3>My Product</h3>
  <div class="add2">
    <a href="/add" class="btn btn-danger my-cart-btn my-cart-mz ">Add Product</a>
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
  					  <li class="active"><a href="#tab1" data-toggle="tab">Seeds</a></li>
  					  <li class=""><a href="#tab2" data-toggle="tab">Tools</a></li>
  					  <li class=""><a href="#tab3" data-toggle="tab">Plants</a></li>
  					</ul>
  				</nav>
  				<div class=" tab-content tab-content-t ">
  					<div class="tab-pane active text-style" id="tab1">
  						<div class=" con-w3l">
                @foreach ($products as $product)
  							<div class="col-md-3 m-wthree">
  								<div class="col-m">
  									<a href="/produk/{{$product->id}}" data-toggle="modal" data-target="#myModal1" class="offer-img">
  										<img src="/images/produk/{{ $product -> gambar_produk }}" class="img-responsive" alt="">
  										<div class="offer"><p><span>Offer</span></p></div>
  									</a>
  									<div class="mid-1">
  										<div class="women">
  											<h6><a href="/produk/{{$product->id}}">{{$product -> nama_produk}}</a></h6>
  										</div>
  										<div class="mid-2">
  											<p >Rp. <em class="item_price">{{$product -> harga_produk}}</em></p>
  											  <div class="block">
  												<div class="starbox small ghosting"> </div>
  											</div>
  											<div class="clearfix"></div>
  										</div>
  										<div class="add">
                         <a href="/produk/{{$product->id}}/edit" class="btn btn-danger my-cart-btn my-cart-b">Edit</a>
                      </div></br>
                      <div class="add">
                         <form method="POST" action="{{ route('delete.product', $product) }}" >
                         {{ csrf_field() }}
                         {{ method_field('DELETE') }}
  										   <button type="submit" class="btn btn-danger my-cart-btn my-cart-b">Delete</button>
                         </form>
  										</div>

  									</div>
  								</div>
  							</div>
                @endforeach

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
  										   <button class="btn btn-danger my-cart-btn my-cart-b" >Delete</button>
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
  <br>
  <br>
  <br>
@endsection
