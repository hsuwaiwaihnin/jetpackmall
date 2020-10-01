<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JetPackMall</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">

    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend1/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend1/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('frontend1/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend1/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend1/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('frontend1/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('frontend1/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend1/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('frontend1/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('frontend1/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend1/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend1/css/style.css')}}">
  </head>
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">JetpackMall</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="{{route('frontside/promotion')}}" class="nav-link">Promotion</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
              
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                @foreach($data[0] as $subcategory)
                  @php
                    $id=$subcategory->id;
                    $name=$subcategory->name;
                  @endphp
              	<a class="dropdown-item" href="{{route('frontside/subcategory',$id)}}">{{$name}}</a>
                @endforeach
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brands</a>
              
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                @foreach($data[2] as $brand)
                  @php
                    $id=$brand->id;
                    $name=$brand->name;
                  @endphp
                <a class="dropdown-item" href="{{route('frontside/brand',$id)}}">{{$name}}</a>
                @endforeach
              </div>
            </li>
	          
            @guest
            <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth::user()->name}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:void(0)">Profile</a>
                <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                @csrf
                </form>
              </div>
            </li>
            @endif
	          <li class="nav-item cta cta-colored"><a href="{{route('cart')}}" class="nav-link"><span class="icon-shopping_cart shoppingcartNoti" id="{{-- checkoutBtn --}}"></span></a></li>

	        </ul>
	      </div>
	    </div>
	</nav>
    <!-- END nav -->

    <section>
    	{{$slot}}
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('frontend1/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend1/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('frontend1/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend1/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend1/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontend1/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend1/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('frontend1/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend1/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend1/js/aos.js')}}"></script>
  <script src="{{asset('frontend1/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('frontend1/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('frontend1/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('frontend1/js/google-map.js')}}"></script>
  <script src="{{asset('frontend1/js/main.js')}}"></script>
  <script src="{{asset('shoppingcart.js')}}"></script>
    
  </body>
</html>