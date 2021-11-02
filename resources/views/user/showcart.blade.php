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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
    position: fixed;
    bottom: 20px;
    right: 10px;
    /* margin-right: 10%; */
    /* ========== */
    background: #00ff1e;
    top: 1.2rem;
    position: fixed;
    height: 2.5rem;
    font-size: 18px;
    width: 380px;
    /* z-index: 0; */
    /* flex-basis: 0; */
    transform: translate(0%, 140%);
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

    /* ==========Cart show ================ */
    .cart-container{
        padding:100px;
    }
    .cart-container .frow-cart{
        background-color: gray;
        padding: 10px;
        color:white;
    }
    .cart-container .row-cart{
        padding: 20px;
        color:white;
        background-color: #000000;
    }
</style>
    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
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
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.html">Our Products</a>
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
<div align="center" class="cart-container">
  @if (session()->has('message'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session('message') }}
      </div>
      @endif
    <table>
        
        <tr>
            <td class="frow-cart">Product Name</td>
            <td class="frow-cart">Quantity</td>
            <td class="frow-cart">Price</td>
            <td class="frow-cart">Action</td>
          </tr>
        @foreach ($cart as $carts)

        <tr>
            <td class="row-cart">{{ $carts->product_title }}</td>
            <td class="row-cart">{{ $carts->quantity }}</td>
            <td class="row-cart">{{ $carts->price }}</td>
            <td class="row-cart">
              <a href="{{ url('deletecart',$carts->id) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
      
        @endforeach

    </table>

</div>


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


  </body>

</html>
