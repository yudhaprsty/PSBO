@extends('layouts.master')

@section('header')
  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <ul class="nav navbar-nav ">
      <li><a href="/home" class="hyper "><span>Home</span></a></li>
      <li><a href="/seeds" class="hyper "><span>Seeds</span></a></li>
      <li><a href="/tools" class="hyper "><span>Tools</span></a></li>
      <li><a href="/plants" class="hyper "><span>Plants</span></a></li>
      <li><a href="/about" class="hyper"><span>About Us</span></a></li>
      </ul>
  </div>
@endsection

@section('content')
  <!-- Banner -->
  <div class="banner-top">
  	<div class="container">
  		<h3 >Cart</h3>
  		<h4><a href="index.html">Home</a><label>/</label>Cart</h4>
  		<div class="clearfix"> </div>
  	</div>
  </div>
  <!-- //Banner -->

	<!-- Cart -->
	<div class="check-out">
    <div class="container">
      <div class="spec ">
				<h3>Cart</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
      <table class="table ">
  		  <tr>
    			<th class="t-head head-it" style="text-align:center">Products</th>
    			<th class="t-head" style="text-align:center">Price</th>
    		  <th class="t-head" style="text-align:center">Quantity</th>
    			<th class="t-head" style="text-align:center">Purchase</th>
  		  </tr>

        @foreach($wishlist as $wishlist)
          @php($product = \App\Product::find($wishlist -> id_product))
          @if($wishlist->status == NULL and $wishlist->id_customer == Auth::User()->id)
    		  <tr class="cross">
      			<td class="ring-in t-data" align="center">
      				<a href="single.html" class="at-in">
      					<img src="/images/product/{{ $product -> image }}" height="100" width="100" class="img-responsive" alt="">
      				</a>
              <div class="sed">
        				<h5>{{ $product -> name }}</h5>
        			</div>
      			</td>
        		<td class="t-data" align="center">{{ $product -> price }}</td>
            <td class="t-data" align="center">1</td>
      			<td class="t-data t-w3l" align="center"><a class=" add-1" href="/checkout/{{ $wishlist -> id }}">Checkout</a>
              <br><br>
               <form method="POST" action="{{ route('delete.wishlist', $wishlist) }}" >
               {{ csrf_field() }}
               {{ method_field('DELETE') }}
               <button type="submit" class="add-1">Delete</button>
               </form>
            </td>
    		  </tr>
          @endif
        @endforeach

	    </table>
		 </div>
	 </div>
   <!-- //Cart -->
@endsection
