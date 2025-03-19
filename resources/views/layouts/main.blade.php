<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>World Environment Journal</title>
    <meta name="keywords" content="World, Environment, Journal, unical, University, Sciences, Paper" />
    <meta name="description" content="World Environment Journal, journal website," />

    <!-- Favicons -->
    <link href="{{ asset('assets/images/wejlogo.png')}}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/mainstyle.css')}}" rel="stylesheet">
    <style>
      .myStyle {
        display: none
      }
      .hide {
        display: none
      }
      </style>

  </head>
  <body>
      
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('home')}}"><img src="{{ asset('assets/images/wejlogo.png')}}" alt="" style="max-width:15%" class="img-fluid"></a>
        
      <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link  active" href="{{ route('home') }}">Home</a></li>
            <li class="dropdown"><a href="#"><span>Publish with us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('editorial') }}">Editorial Team</a></li>
              <li><a href="{{ route('journal.submission') }}"><span>Submit a paper</span></a>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Explore our content</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a class="nav-link" href="{{ route('about') }}">About WEJ</a></li>
              <li><a href="{{ route('publication') }}">View Publication</a></li>
            </ul>
          </li>
            <li><a class="nav-link scrollto" href="{{ route('home') }}#contact">Contact</a></li>
            @if(auth()->check())
                <li>
                    <a href="{{ route('dash')}}" class="nav-link">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('logout')}}" class="nav-link">Logout</a>
                </li>
            @else
                <li>
                    <a href="{{ route('register')}}" class="nav-link">Register</a>
                </li>
                <li>
                    <a href="{{ route('login')}}" class="nav-link">Login</a>
                </li>
            @endif
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

      @yield('content')


<!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="footer-info">
                <a href="{{route('home')}}"><img src="{{ asset('assets/images/wejlogo.png')}}" alt="" style="max-width:15%" class="img-fluid"></a>
                <p>
                  UNICAL,<br>
                  Calabar, CRS<br><br>
                  <strong>Email:</strong> info@wej-unical.com<br>
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('editorial') }}">Editorial</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('publication') }}">Publication</a>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ route('journal.submission') }}">Submission</a>

              </ul>
            </div>

            <div class="col-lg-5 col-md-6 footer-newsletter">
              <h4>Our Newsletter</h4>
              <p>Subscribe to our Newsletter to stay connected and updated</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
                <!--<p style="margin-top: 10px">Sponsored by: <img src="{{ asset('assets/images/tetf.png')}}" class="img-fluid" style="max-width:30%;" alt=""></p>-->

            </div>

          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
      <div class="copyright">
          &copy; Copyright <strong>W<span>E</span>J</strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bigstacktech.com/">Bigstack Technologies</a>
        </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

  </body>

</html>
