<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Carfix | Reset Password</title>
    <link href="../images/logo2.png" rel="shortcut icon">
     <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/bootsnav.css" rel="stylesheet">
    <link href="../css/jquery.fancybox.css" rel="stylesheet">
    <link href="../css/product-tab.css" rel="stylesheet">
    <link href="../css/settings.css" rel="stylesheet">
    <link href="../css/reset.css" rel="stylesheet" >
    <link href="../css/hero_slider.css" rel="stylesheet">
    <link href="../css/style1.css" rel="stylesheet">

    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
    {{-- @include('partials.head') --}}
</head>
<body>

    <!-- Loader -->
   <div id="loader-wrapper">
        <div id="loader">
        <div class="logo-loader"><img src="../images/logo.png" alt="image"></div>

            <div class="cssload-overlay"></div>

            <div class="cssload-cogWheel cssload-one">
                <div class="cssload-cog cssload-one"></div>
                <div class="cssload-cog cssload-two"></div>
                <div class="cssload-cog cssload-three"></div>
                <div class="cssload-cog cssload-four"></div>
                <div class="cssload-cog cssload-five"></div>
                <div class="cssload-center"></div>
                </div>

            <div class="cssload-cogWheel cssload-two">
                <div class="cssload-cog cssload-one"></div>
                <div class="cssload-cog cssload-two"></div>
                <div class="cssload-cog cssload-three"></div>
                <div class="cssload-cog cssload-four"></div>
                <div class="cssload-cog cssload-five"></div>
                <div class="cssload-center"></div>
                </div>

        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
  </div>
    <!--/#Loader-->

      <!--header-->
      <header id="header-3">

          <!--Search-->
          <div id="search">
            <button type="button" class="close">×</button>
            <form>
              <input type="search" value="" placeholder="Type Here For Search...." required/>
              <button type="submit" class="btn_default cd-btn">Search</button>
              </form>
          </div>
          <!--Search-->

        <nav class="navbar navbar-inverse navbar-sticky bootsnav" style="background:black; color:white;">
          <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
              <ul>
                <li class="search_btn"><a href="#"><i class="fa fa-search"></i></a> </li>
              </ul>
            </div>
            <!-- End Atribute Navigation -->

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="../images/logo-white-footer.png" class="logo" alt=""> </a> </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
              <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                  <ul class="dropdown-menu">
                    <li><a href="index.html">Default Home</a>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Auto Repair Homes</a>
                      <ul class="dropdown-menu">
                        <li><a href="index.html">Home Style One</a></li>
                        <li><a href="index-2.html">Home Style Two</a></li>
                        <li><a href="index-3.html">Home Style Three</a></li>
                        <li><a href="index-4.html">Home Style Four</a></li>
                        <li><a href="index-5.html">Home Style Five</a></li>
                      </ul>
                    </li>
                    <li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Auto Cars Homes</a>
                      <ul class="dropdown-menu">
                        <li><a href="index-6.html">Home Style One</a></li>
                        <li><a href="index-7.html">Home Style Two</a></li>
                        <li><a href="index-8.html">Home Style Three</a></li>
                        <li><a href="index-9.html">Home Style Four</a></li>
                        <li class="active"><a href="index-10.html">Home Style Five</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Auto Parts Homes</a>
                      <ul class="dropdown-menu">
                        <li><a href="index-11.html">Home Style One</a></li>
                        <li><a href="index-12.html">Home Style Two</a></li>
                        <li><a href="index-13.html">Home Style Three</a></li>
                        <li><a href="index-14.html">Home Style Four</a></li>
                        <li><a href="index-15.html">Home Style Five</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Page Homes</a>
                      <ul class="dropdown-menu">
                        <li><a href="index-16.html">Home Style One</a></li>
                        <li><a href="index-17.html">Home Style Two</a></li>
                        <li><a href="index-18.html">Home Style Three</a></li>
                        <li><a href="index-19.html">Home Style Four</a></li>
                        <li><a href="index-20.html">Home Style Five</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                  <ul class="dropdown-menu">
                    <li><a href="services-1.html">Services Style One</a></li>
                    <li><a href="services-2.html">Services Style Two</a></li>
                    <li><a href="services-3.html">Services Style Three</a></li>
                    <li><a href="services-details.html">Services Details</a></li>
                  </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
                  <ul class="dropdown-menu">
                    <li><a href="gallery-1.html">Gallery Style One</a></li>
                    <li><a href="gallery-2.html">Gallery Style Two</a> </li>
                  </ul>
                </li>
                <li class="dropdown megamenu-fw"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu megamenu-content" role="menu">
                    <li>
                      <div class="row">
                        <div class="col-menu col-md-2">
                          <h5 class="title">Blogs</h5>
                          <div class="content">
                            <ul class="menu-col">
                              <li><a href="blog-style-1.html">Blog Style One</a></li>
                              <li><a href="blog-style-2.html">Blog Style Two</a></li>
                              <li><a href="blog-style-3.html">Blog Style Three</a></li>
                              <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-menu col-md-2">
                          <h5 class="title">Other Pages</h5>
                          <div class="content">
                            <ul class="menu-col">
                              <li><a href="about-us.html">About Us</a></li>
                              <li><a href="services-1.html">Our Services</a></li>
                              <li><a href="services-details.html">Services Detail</a></li>
                              <li><a href="appointment.html">Appointment</a></li>
                              <li><a href="packages.html">Packages</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-menu col-md-8">
                          <div id="nav_slider" class="owl-carousel">
                            <div class="item">
                              <div class="image"> <img src="images/nav-slider1.jpg" alt="image"> </div>
                              <h4><a href="#.">Reservation Any Tıme</a></h4>
                              <p>Lorem ipsum dolor sit amet, </p>
                            </div>
                            <div class="item">
                              <div class="image"> <img src="images/nav-slider2.jpg" alt="image"> </div>
                              <h4><a href="#.">7/24 Car Support</a></h4>
                              <p>Lorem ipsum dolor sit amet, </p>
                            </div>
                            <div class="item">
                              <div class="image"> <img src="images/nav-slider3.jpg" alt="image"> </div>
                              <h4><a href="#.">Location For Car</a></h4>
                              <p>Lorem ipsum dolor sit amet, </p>
                            </div>
                            <div class="item">
                              <div class="image"> <img src="images/nav-slider1.jpg" alt="image"> </div>
                              <h4><a href="#.">Reservation Any Tıme</a></h4>
                              <p>Lorem ipsum dolor sit amet, </p>
                            </div>
                            <div class="item">
                              <div class="image"> <img src="images/nav-slider2.jpg" alt="image"> </div>
                              <h4><a href="#.">7/24 Car Support</a></h4>
                              <p>Lorem ipsum dolor sit amet, </p>
                            </div>
                            <div class="item">
                              <div class="image"> <img src="images/nav-slider3.jpg" alt="image"> </div>
                              <h4><a href="#.">Location For Car</a></h4>
                              <p>Lorem ipsum dolor sit amet, </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li><a href="appointment.html">Appointment</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
                  <ul class="dropdown-menu">
                    <li><a href="contact-us.html">Contact Style One</a></li>
                    <li><a href="contact-us-2.html">Contact Style Two</a> </li>
                  </ul>
                </li>
                @guest
                <li><a href="{{route('login')}}">Login</a></li>
                  @else
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome {{Auth::user()->email}}</a>
                    <ul class="dropdown-menu">
                    <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </li>
                    </ul>
                  </li>
                  @endguest

              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!--/#header-->

      <br><br>
      <section class="sign-in">
              <div class="container">
                  <div class="signin-content">
                      <div class="signin-image">
                          <figure><img src="../images/signin-image.jpg" alt="sing up image"></figure>

                      </div>

                      <div class="signin-form">
                          <h2 class="form-title">Reset Password</h2>
                          <form method="POST" class="register-form" id="login-form" action="{{ route('password.email') }}">
                              @csrf

                              <div class="form-group">
                                  <label for="Email"><i class="zmdi zmdi-account material-icons-envelope"></i></label>
                                  <input type="text" name="email" id="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus/>

                                  @error('email')
                                      <p style="color:red; font-size: 13px;">
                                          <strong>{{ $message }}</strong>
                                      </p>
                                  @enderror
                              </div>
                              <div class="form-group form-button">
                                  <input type="submit" name="signin" id="signin" class="form-submit" value="Send Password Reset Link"/>
                              </div>

                          </form>

                      </div>
                  </div>
              </div>
          </section>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/modernizr.js"></script>
    <script src="../js/jquery.appear.js"></script>
    <script src="../js/jquery-countTo.js"></script>
    <script src="../js/bootsnav.js"></script>
    <script src="../js/jquery.fancybox.js"></script>
    <script src="../js/parallaxie.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/jquery.typewriter.js"></script>
    <script src="../js/hero_slider.js"></script>
    <script src="../js/themepunch/jquery.themepunch.revolution.min.js"></script>
    <script src="../js/themepunch/jquery.themepunch.tools.min.js"></script>
    <script src="../js/themepunch/themepunch_revolution.extension.layeranimation.min.js"></script>
    <script src="../js/themepunch/themepunch_revolution.extension.navigation.min.js"></script>
    <script src="../js/themepunch/themepunch_revolution.extension.slideanims.min.js"></script>
    <script src="../js/themepunch/themepunch_revolution.extension.video.min.js"></script>
    <script src="../js/themepunch/themepunch_revolution.extension.parallax.min.js"></script>
    <script src="../js/function.js"></script>
      <script src="../vendor/jquery/jquery.min.js"></script>
      <script src="../js/main.js"></script>

</body>
</html>


