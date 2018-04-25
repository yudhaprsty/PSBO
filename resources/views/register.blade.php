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

      <li><a href="/About Us" class="hyper"><span>About Us</span></a></li>
    </ul>
  </div>
@endsection

@section('content')
  <div class="banner-top">
    <div class="container">
      <h3 >Register</h3>
      <h4><a href="index.html">Home</a><label>/</label>Register</h4>
      <div class="clearfix"> </div>
    </div>
  </div>

<!--Register-->
  <div class="login">

    <div class="main-agileits">
      <div class="form-w3agile form1">
        <h3>Register</h3>
        <form action="#" method="post">

          <div class="key">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input  type="text" value="Username" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
            <div class="clearfix"></div>
          </div>

          <div class="key">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
            <div class="clearfix"></div>
          </div>

          <div class="key">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
            <div class="clearfix"></div>
          </div>

          <div class="key">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input  type="password" value="Confirm Password" name="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
            <div class="clearfix"></div>
          </div>

          <input type="submit" value="Submit">
        </form>
      </div>
    </div>

  </div>
  <!--//Register-->
@endsection
