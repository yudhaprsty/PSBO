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
