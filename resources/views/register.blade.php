@extends('layouts.master')

@section('title', 'Register')

@section('konten')
     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="index.html">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>
					<form action="/registerme" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="key">
							<input  type="text" value="Username" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
            <div class="key">
							<input  type="text" value="Phone" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<tr>
            <td>
              <select name="kategori" class="form-control">
                <option value="1">Pembeli</option>
                <option value="2">Penjual</option>
              </select>
            </td>
          </tr>
				<br>
						<input type="submit" value="Submit">
					</form>
				</div>

			</div>
		</div>
  @stop
