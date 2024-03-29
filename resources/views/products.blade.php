<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<style>
 /* alert success for session */
 .alert-success {
  background-color: #f33f3f;
    background-color: #28a745;
    color: #ffffff;
    padding: 10px;
    width: 40%;
    height: 9%;
    z-index: 8;
    border: 4px solid #e9ff0b;
    --tw-translate-x: 50%;
    transform: translate(140%, -930%);
    text-align: center;
    position: absolute;
      }
      div.header-text{
        position: relative;
      }

/* ======================== */
.page-item .page-link{
    width: 44px;
    height: 44px;
    display: inline-block;
    line-height: 22px;
    border: 1px solid #eee;
    font-size: 15px;
    font-weight: 700;
    color: #121212;
    transition: all .3s;
}

.page-item.active span.page-link {
    z-index: 1;
    color: #fff;
    background-color: #f33f3f;
    border-color: #f33f3f !important;
}
.page-link:hover{
  color: #fff;
  background-color: #f33f3f;
  border-color: #f33f3f !important;
  transition: all .3s;
}
/* Cart style */
form.cart{
  display: flex;
  justify-content: space-between;
}
 /* =================== cart style ================= */

  header span.cart-count {
    background-color: #e93e3e;
    width: 34px;
    display: inline-block;
    margin: 3px;
    border-radius: 5px;
    height: 25px;
    color: #ffffff;
    font-weight: bold;
    }
</style>
    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> --}}
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav" style="margin-left:26%">
              <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('allproducts') }}">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>



              <li class="nav-item">
                    @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                              <a class="nav-link" href="{{ url('showcart') }}">Cart <span class='cart-count'>{{ $count }}</span></a>
                            </li>
                                <x-app-layout>
                                </x-app-layout>
                            @else
                            <li> <a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                                @if (Route::has('register'))
                                <li> <a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                    @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>


    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel" style="display: block;">
        {{-- <div class="banner-item-01"style="display: block;">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div> --}}
        </div>
        <div class="banner-item-02"style="display: none;">
          <div class="text-content">
            <h4>Flash Deals</h4
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03"style="display: none;">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
                {{-- product add to cart messages ------------------}}
                @if (session()->has('message'))

                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{-- {{ session()->get('message') }} --}}
                {{ session('message') }}
                            </div>
                @endif
    </div>
    <!-- Banner Ends Here -->



@include('user.product')


    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }

    </script>
<script src="assets/js/bootstrap.min.js"></script>

  </body>

</html>
