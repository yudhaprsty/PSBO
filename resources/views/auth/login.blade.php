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
      <h3 >Login</h3>
      <h4><a href="/home">Home</a><label>/</label>Login</h4>
      <div class="clearfix"> </div>
    </div>
  </div>

  <!--login-->
  <div class="login">

    <div class="main-agileits">
      <div class="form-w3agile">
        <h3>Login</h3>
        <form action="/login" method="post">

					@csrf

          <div class="key">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}" required="">
						@if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <div class="clearfix"></div>
          </div>

          <div class="key">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" required="">
						@if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <div class="clearfix"></div>
          </div>

					<div class="form-group row">
              <div class="col-md-6 offset-md-4">
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                      </label>
                  </div>
              </div>
          </div>

          <input type="submit" value="Login">
        </form>
      </div>

      <div class="forg">
				<a class="btn btn-link" href="{{ route('password.request') }}">
						{{ __('Forgot Your Password?') }}
				</a>
        <a href="/register" class="forg-right">Register</a>
        <div class="clearfix"></div>
      </div>
    </div>

  </div>
  <!--//Login--->
@endsection
