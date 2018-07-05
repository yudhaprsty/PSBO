@extends('layouts.master')

@section('header')
  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <ul class="nav navbar-nav ">
      <li class=""><a href="/home" class="hyper "><span>Home</span></a></li>
      <li><a href="/seeds" class="hyper "><span>Seeds</span></a></li>
      <li><a href="/tools" class="hyper "><span>Tools</span></a></li>
      <li><a href="/plants" class="hyper "><span>Plants</span></a></li>
      <li class=""><a href="/about" class="hyper"><span>About Us</span></a></li>
      </ul>
  </div>
@endsection

@section('content')
<!-- contact -->
  <div class="check-out">
  <div class="container">
 <div class="spec ">
      <h3>My Order</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
  </div>
<table class="table ">
    <tr>
    <th class="t-head head-it ">Products</th>
    <th class="t-head">Price</th>
    <th class="t-head">Quantity</th>
    <th class="t-head">Shipping Adrress</th>
    <th class="t-head">Order Status</th>
    <th class="t-head"></th>
    </tr>

  @foreach($wishlist as $wishlist)
  @php($product = \App\Product::find($wishlist -> id_product))
  @if($wishlist->id_customer == Auth::User()->id)
    <tr class="cross">
    <td class="t-data">
      <div class="women">
        <h6><a href="product/{{ $product -> id }}">{{ $product -> name }}</a></h6>
      </div>
    </td>

    <td class="t-data">{{ $product -> price }}</td>

    <td class="t-data">
      <div class="quantity">
        <div class="t-data">1</div>
      </div>
    </td>

    <td class="t-data">
      <div class="quantity">
        <div class="t-data">{{ Auth::User()->address }}</div>
      </div>
    </td>

      <td class="t-data">
        <div class="quantity">
          @if($wishlist-> status==0)
          <div class="t-data">Unpaid</div>
          @else
          @if($wishlist->status==1)
          <div class="t-data">Paid</div>
          @else
          @if($wishlist->status==2)
          <div class="t-data">Sent</div>
          @else
          @if($wishlist->status==3)
          <div class="t-data">received</div>
          @endif
          @endif
          @endif
          @endif
        </div>
      </td>

    <td class="t-data"><a class=" btn btn-danger my-cart-btn my-cart-b" href="/order/{{$wishlist->id}}">confirmation</a></td>
    </tr>
    @endif
      @endforeach
</table>
   </div>
   </div>
  	<!--//work-experience-->
@endsection
