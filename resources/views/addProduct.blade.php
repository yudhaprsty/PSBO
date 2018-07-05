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
      <h3>Add Product</h3>
      <h4><a href="/home">Home</a><label>/</label>Add Product</h4>
      <div class="clearfix"> </div>
    </div>
  </div>

  <!--Register-->
  <div class="login">

    <div class="main-agileits">
      <div class="form-w3agile form1">
        <h3>Add Product</h3>
        <form action="/add" method="post" enctype="multipart/form-data">

          @csrf

          <div class="key">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required autofocus>
            <div class="clearfix"></div>
          </div>

          <div class="key">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="description" value="Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Description';}" required>
            <div class="clearfix"></div>
          </div>

          <div class="key">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="text" name="price" value="Price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Price';}" required>
            <div class="clearfix"></div>
          </div>

          <tr>
            <td>
              <select name="variant" class="form-control">
                <option value="Seeds">Seeds</option>
                <option value="Tools">Tools</option>
                <option value="Plants">Plants</option>
              </select>
            </td>
          </tr>
          <br>

          <div>
							<input  type="file" name="image" required autofocus>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
          <br>

          <input type="submit" value="Submit">
        </form>
      </div>
    </div>

  </div>
  <!--//Register-->
@endsection
