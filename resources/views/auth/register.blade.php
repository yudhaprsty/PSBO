@extends('layouts.master')

@section('header')
  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <ul class="nav navbar-nav ">
      <li><a href="/home" class="hyper "><span>Home</span></a></li>

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

      <li><a href="/about" class="hyper"><span>About Us</span></a></li>
    </ul>
  </div>
@endsection

@section('content')
  <div class="banner-top">
    <div class="container">
      <h3>Register</h3>
      <h4><a href="/home">Home</a><label>/</label>Register</h4>
      <div class="clearfix"> </div>
    </div>
  </div>

  <!--Register-->
  <div class="login">

    <div class="main-agileits">
      <div class="form-w3agile form1">
        <h3>Register</h3>
        <form action="/register" method="post">

          @csrf

          <div class="key">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required autofocus>
            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            <div class="clearfix"></div>
          </div>

          <!-- <div class="key">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required>
            @if ($errors->has('username'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
            <div class="clearfix"></div>
          </div> -->

          <div class="key">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <div class="clearfix"></div>
          </div>

          <div class="key">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="clearfix"></div>
          </div>

          <div class="key">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password_confirmation" value="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required>
            <div class="clearfix"></div>
          </div>

          <div class="key">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <input  type="text" value="Phone" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
            <div class="clearfix"></div>
          </div>

          <div class="key">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <input  type="text" value="Address" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="">
            <div class="clearfix"></div>
          </div>

          <input type="submit" value="Submit">
        </form>
      </div>
    </div>

  </div>
  <!--//Register-->
@endsection
