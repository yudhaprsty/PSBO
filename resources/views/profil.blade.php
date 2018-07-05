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
  <!-- Banner -->
  <div class="banner-top">
    <div class="container">
      <h3>Profile</h3>
      <h4><a href="/home">Home</a><label>/</label>Profile</h4>
      <div class="clearfix"> </div>
    </div>
  </div>
  <!-- //Banner -->

  <!-- Profil -->
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
          <img alt="User Pic" src="/images/user/{{ Auth::user()->image }}" id="profile-image1" class="img-thumbnail" style="width: 250px; height: 250px;">
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
              <p><span class="glyphicon glyphicon-user one" style="width:40px;"></span>{{ Auth::user()->username }}</p>
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
  <!-- //Profil -->

  <br>
  <br>
  <br>
  <br>

  <!--Banner-->
  <div class="banner-top">
    <div class="container">
      <h3>My Product</h3>
      <div class="add2">
        <a href="/add" class="btn btn-danger my-cart-btn my-cart-mz ">Add Product</a>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <!-- //Banner -->

  <!-- My Product -->
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
            @if($product->variant == "Seeds")
						<div class="col-md-3 m-wthree">
							<div class="col-m">
								<a href="/product/{{ $product -> id }}" data-toggle="modal" data-target="#myModal1" class="offer-img">
									<img src="/images/product/{{ $product -> image }}" class="img-responsive" alt="" style="width: 200px; height: 200px;">
									<div class="offer"><p><span>Offer</span></p></div>
								</a>
								<div class="mid-1">
									<div class="women">
										<h6><a href="/product/{{ $product->id }}">{{ $product -> name }}</a></h6>
									</div>
									<div class="mid-2">
										<p >Rp. <em class="item_price">{{ $product -> price }}</em></p>
										  <div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="add">
                     <a href="/product/{{ $product -> id }}/edit" class="btn btn-danger my-cart-btn my-cart-b">Edit</a>
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
            @endif
            @endforeach

						<div class="clearfix"></div>
					 </div>
				</div>

        <div class="tab-pane text-style" id="tab2">
          <div class=" con-w3l">

            @foreach ($products as $product)
            @if($product->variant == "Tools")
						<div class="col-md-3 m-wthree">
							<div class="col-m">
								<a href="/product/{{ $product -> id }}" data-toggle="modal" data-target="#myModal1" class="offer-img">
									<img src="/images/product/{{ $product -> image }}" class="img-responsive" alt="" style="width: 200px; height: 200px;">
									<div class="offer"><p><span>Offer</span></p></div>
								</a>
								<div class="mid-1">
									<div class="women">
										<h6><a href="/product/{{ $product->id }}">{{ $product -> name }}</a></h6>
									</div>
									<div class="mid-2">
										<p >Rp. <em class="item_price">{{ $product -> price }}</em></p>
										  <div class="block">
											<div class="starbox small ghosting"> </div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="add">
                     <a href="/product/{{ $product -> id }}/edit" class="btn btn-danger my-cart-btn my-cart-b">Edit</a>
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
            @endif
            @endforeach

            <div class="clearfix"></div>
          </div>
        </div>

        <div class="tab-pane text-style" id="tab3">
          <div class=" con-w3l">

            @foreach ($products as $product)
            @if($product->variant == "Plants")
            <div class="col-md-3 m-wthree">
              <div class="col-m">
                <a href="/product/{{ $product -> id }}" data-toggle="modal" data-target="#myModal1" class="offer-img">
                  <img src="/images/product/{{ $product -> image }}" class="img-responsive" alt="" style="width: 200px; height: 200px;">
                  <div class="offer"><p><span>Offer</span></p></div>
                </a>
                <div class="mid-1">
                  <div class="women">
                    <h6><a href="/product/{{ $product->id }}">{{ $product -> name }}</a></h6>
                  </div>
                  <div class="mid-2">
                    <p >Rp. <em class="item_price">{{ $product -> price }}</em></p>
                      <div class="block">
                      <div class="starbox small ghosting"> </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="add">
                     <a href="/product/{{ $product -> id }}/edit" class="btn btn-danger my-cart-btn my-cart-b">Edit</a>
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
            @endif
            @endforeach

            <div class="clearfix"></div>
          </div>
        </div>

			</div>
		</div>
	</div>
  <!-- //My Product -->
  <br>
  <br>
  <br>
@endsection
