<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{ asset('components/images/iogo.png')}}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>macro</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('components/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="{{ asset('components/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('components/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('components/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

<div class="hero_area">
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            macro
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
         
              <li class="nav-item">
                <a class="nav-link" href="/product">Products</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            @if(Auth::user())
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <span>
                  Logout
              </span>
          </a>
          
          <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
              @csrf
          </form>

            @else
            <a href="/login">
              <span>
                Login
              </span>
            @endif  
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>

          </div>
        </div>
      </nav>
    </header>



@yield('conn')



    <section class="info_section long_section">

        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +972567013418
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : mohemmad.jawareesh@gmail.com
              </span>
            </a>
      
          </div>

          <div class="info_top ">
            <div class="row ">
              <div class="col-sm-6 col-md-4 col-lg-3">

              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
         
              </div>
              <div class="col-md-4">
                <div class="info_form">
                  <h4>
                  </h4>
                 
                  <div class="social_box">
                   
                    <a href="https://www.instagram.com/mohammad.jawareesh/">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end info_section -->


      <!-- footer section -->
      <footer class="footer_section">
        <div class="container">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="">Mohammad Jawareesh</a>
          </p>
        </div>
      </footer>
      <script src="{{ asset('components/js/jquery-3.4.1.min.js')}}"></script>
      <script src="{{ asset('components/js/bootstrap.js')}}"></script>
      <script src="{{ asset('components/js/custom.js')}}"></script>

    </body>

    </html>
