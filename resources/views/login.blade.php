@extends('layouts.master')

@section('title', 'Login')

@section('konten')
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Login</h3>
		<h4><a href="index.html">Home</a><label>/</label>Login</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

	<div class="login">

		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Login</h3>
					<form action="/loginme" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="key">
							<input  type="text" value="Username" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" required="">
							<div class="clearfix"></div>
						</div>

						<input type="submit" value="Login">
					</form>
				</div>
				<div class="forg">
					<a href="#" class="forg-left">Forgot Password</a>
					<a href="register" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
	@stop
