<!doctype html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>DBP | ITN</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/itn.png') }}" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/themefisher-font/style.css') }}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/animate/animate.css') }}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick-theme.css') }}">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body id="body">
        <!-- Start Top Header Bar -->
        <section class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <div class="contact-number">
                            <i class="tf-ion-ios-telephone"></i>
                            <span>+628 - 2282323700</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <!-- Site Logo -->
                        <div class="logo text-center">
                            <a href="/">
                                <!-- replace logo here -->
                                <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
                                        font-family="AustinBold, Austin" font-weight="bold">
                                        <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                            <text id="AVIATO">
                                                <tspan x="150.94" y="325">I T N</tspan>
                                            </text>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <!-- Cart -->
                        <ul class="top-menu text-right list-inline">
                        @auth
                            <li class="dropdown dropdown-slide">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
                                    role="button" aria-haspopup="true" aria-expanded="false">Welcome, {{ auth()->user()->name }} <span
                                        class="tf-ion-ios-arrow-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/dashboard"><i class="tf-ion-home"> Dashboard</a></i></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit"><i class="tf-ion-log-out"> Logout</i></button>
                                        </form>
                                    </li>
                                </ul>
                            </li><!-- / Dashbaord -->

                        @else
                            <li class="dropdown cart-nav dropdown-slide">
                                <a href="/login"><i class="tf-ion-log-in"></i> Login</a>
                            </li><!-- / Login -->

                            <li class="dropdown search dropdown-slide">
                                <a href="/register"><i class="tf-ion-ios-android-persons"></i> Register</a>
                            </li><!-- / Register -->

                        @endauth
                        </ul><!-- / .nav .navbar-nav .navbar-right -->
                    </div>
                </div>
            </div>
        </section><!-- End Top Header Bar -->

        <div class="container">
            <div class="row">
                @yield('isi')
            </div>
	    </div>

        <footer class="footer section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="social-media">
                            <li>
                                <a href="https://www.facebook.com/itnlampung/">
                                    <i class="tf-ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/itn.net.id/">
                                    <i class="tf-ion-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/itnlampung">
                                    <i class="tf-ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UC3Z-YOokt8ekey5ZblBoOxg">
                                    <i class="tf-ion-social-youtube"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="footer-menu text-uppercase">
                            <li>
                                <a href="/">HOME</a>
                            </li>
                            <li>
                                <a href="/contact">CONTACT</a>
                            </li>
                            <li>
                                <a href="/about">ABOUT</a>
                            </li>
                            <li>
                                <a href="/posts">FIND JOB</a>
                            </li>
                        </ul>
                        <p class="copyright-text">Copyright &copy;2022, Developed by <a href="/">Ahmad Dwi</a></p>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>
