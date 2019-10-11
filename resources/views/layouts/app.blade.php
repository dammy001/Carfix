<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link href="./images/logo2.png" rel="shortcut icon">
     <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/font-awesome.css" rel="stylesheet">
    <link href="./css/owl.carousel.css" rel="stylesheet">
    <link href="./css/animate.min.css" rel="stylesheet">
    <link href="./css/bootsnav.css" rel="stylesheet">
    <link href="./css/jquery.fancybox.css" rel="stylesheet">
    <link href="./css/product-tab.css" rel="stylesheet">
    <link href="./css/settings.css" rel="stylesheet">
    <link href="./css/reset.css" rel="stylesheet" >
    <link href="./css/hero_slider.css" rel="stylesheet">
    <link href="./css/style1.css" rel="stylesheet">

    <link rel="stylesheet" href="./fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="./css/style.css">
    {{-- @include('partials.head') --}}
</head>
<body>

    <!-- Loader -->
   <div id="loader-wrapper">
        <div id="loader">
        <div class="logo-loader"><img src="images/logo.png" alt="image"></div>

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
          <form method="POST" action="{{ url('/search') }}">
                @csrf
              <input type="search" class="form-control" name="q" placeholder="Type Here For Search...." required/>
              <button type="submit" class="btn_default cd-btn">Search</button>
              </form>
          </div>
          <!--Search-->

        <nav class="navbar navbar-default navbar-sticky bootsnav" style="background:black; color:white;">
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
            <a class="navbar-brand" href="{{ url('/') }}"><img src="images/logo-white-footer.png" class="logo" alt=""> </a> </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
              <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="{{ url('/')}}">Home</a></li>
                {{-- <li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
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



                  </ul>
                </li> --}}
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                  <ul class="dropdown-menu">
                    <li><a href="services-1.html">Services Style One</a></li>
                    <li><a href="services-2.html">Services Style Two</a></li>
                    <li><a href="services-3.html">Services Style Three</a></li>
                    <li><a href="services-details.html">Services Details</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('/gallery')}}">Gallery</a></li>

                <li><a href="{{ route('blog')}}">Blog</a></li>
            <li><a href="{{ route('appointment') }}">Appointment</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>

                @guest
                <li><a href="{{route('login')}}">Login</a></li>
                  @else
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome {{Auth::user()->name}}</a>
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

    <div class="section">

        @yield('content')

    </div>


    @include('partials.js')

</body>
</html>
