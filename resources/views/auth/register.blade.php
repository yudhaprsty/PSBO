@extends('layouts.master')

@section('header')
  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <ul class="nav navbar-nav ">
      <li><a href="/home" class="hyper"><span>Home</span></a></li>
      <li><a href="/seeds" class="hyper"><span>Seeds</span></a></li>
      <li><a href="/tools" class="hyper"><span>Tools</span></a></li>
      <li><a href="/plants" class="hyper"><span>Plants</span></a></li>
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

          <div class="key">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required>
            @if ($errors->has('username'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
            <div class="clearfix"></div>
          </div>

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
            <input type="password" name="password_confirmation" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required>
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
