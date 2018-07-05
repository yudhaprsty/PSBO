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
<!-- contact -->
  <div class="check-out">
    <div class="container">
      <div class="spec ">
        <h3>Sales History</h3>
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
            <th class="t-head">Shipping Address</th>
            <th class="t-head">Order Status</th>
            <th class="t-head">Change Status</th>
            <th class="t-head"></th>
          </tr>
        @foreach($products as $product)
        @if($product->id_user == Auth::User()->id)
        <!-- for -->
          <tr class="cross">
            <td class="t-data">
              <div class="women">
                <h6><a href="single.html">{{ \App\Product::find($product->id_product)->name}}</a></h6>
              </div>
             </td>
            <td class="t-data">{{$product->price}}</td>
            <td class="t-data">
              <div class="quantity">
                <div class="t-data">1</div>
              </div>
            </td>
            <td class="t-data">
                <div class="t-data">Direktorat Kemahasiswaan IPB
                	Jl. Dramaga Raya harus bahagia, Bogor, Jawa Barat 30128
                	Phone: (0321) 359590
                	Email: ditmawa@apps.ipb.ac.id</div>
            </td>
            <td class="t-data">
              <div class="quantity">
                @if($product->status==0)
                <div class="t-data">Unpaid</div>
                @else
                @if($product->status==1)
                <div class="t-data">Paid</div>
                @else
                @if($product->status==2)
                <div class="t-data">Sent</div>
                @else
                @if($product->status==3)
                <div class="t-data">Received</div>
                @endif
                @endif
                @endif
                @endif
              </div>
            </td>
            <td class="t-data">
              <form method="POST" action="{{ route('changeStatus',$product -> id )}}">
                <select id="status" name="status" class="form-control" required="true">
                  <option disabled selected>-- Change Status --</option>
                    <option value="1">Paid</option>
                    <option value="2">Sent</option>
                </select>
                </td>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <td class="t-data"> <input class="btn btn-danger my-cart-btn my-cart-b" type="submit" name="submit" value="change"> </td>
              </form>
          </tr>
            <!-- endforeach -->
          @endif
          @endforeach
      </table>
    </div>
   </div>
  	<!--//work-experience-->
@endsection
