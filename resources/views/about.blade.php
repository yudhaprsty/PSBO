@extends('layouts.master')

@section('header')
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
      <ul class="nav navbar-nav ">
        <li><a href="/home" class="hyper "><span>Home</span></a></li>
        <li><a href="/seeds" class="hyper "><span>Seeds</span></a></li>
        <li><a href="/tools" class="hyper "><span>Tools</span></a></li>
        <li><a href="/plants" class="hyper "><span>Plants</span></a></li>
        <li class="active"><a href="/about" class="hyper"><span>About Us</span></a></li>
      </ul>
    </div>
@endsection

@section('content')
  <div class="banner-top">
  	<div class="container">
  		<h3 >About</h3>
  		<h4><a href="index.html">Home</a><label>/</label>About</h4>
  		<div class="clearfix"> </div>
  	</div>
  </div>

  <div class="about-w3 ">

    <!--about-->
		<div class="container">
	    <div  class="about">

        <div class="spec ">
			    <h3>About</h3>
			    <div class="ser-t">
				    <b></b>
				    <span><i></i></span>
				    <b class="line"></b>
			    </div>
		    </div>

  			<div class="col-md-4 about-right">
  			  <img class="img-responsive" src="images/ab.jpg" alt="">
  			</div>

  			<div class="col-md-4 about-left">
  				<p> Hyposhop merupakan aplikasi berbasis web yang menyediakan layanan jual-beli online alat-alat yang diperlukan untuk tanaman Hidroponik dan bibit tanaman Hidroponik</p>
  			</div>

  			<div class="col-md-4 about-right">
  			  <img class="img-responsive" src="images/ab1.jpg" alt="">
  			</div>

		    <div class="clearfix"> </div>
	    </div>
    </div>
  	<!--//about-->

  </div>
@endsection
