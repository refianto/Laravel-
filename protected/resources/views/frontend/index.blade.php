<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="{{url('assets/frontend')}}/img/favicon.png" type="image/png" />
    <title>Edustage Education</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/frontend')}}/css/bootstrap.css" />
    <link rel="stylesheet" href="{{url('assets/frontend')}}/css/flaticon.css" />
    <link rel="stylesheet" href="{{url('assets/frontend')}}/css/themify-icons.css" />
    <link rel="stylesheet" href="{{url('assets/frontend')}}/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{url('assets/frontend')}}/vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="{{url('assets/frontend')}}/css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="#"
              ><img src="{{url('assets/frontend')}}/img/logo.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/shop">Shop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/reward">Reward</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================ End Home Banner Area =================-->

    <!--================Blog Area =================-->
    @yield('content')
    <!--================Blog Area =================-->

     <!--================ Start footer Area  =================-->
    <footer class="align-bottom footer" style="background-color: black; padding: 35px 20px;">
      <div class="col-md-10 mx-auto">
        test
      </div>
    </footer>
          <!--================ End footer Area  =================-->
      
          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="{{url('assets/frontend')}}/js/jquery-3.2.1.min.js"></script>
          <script src="{{url('assets/frontend')}}/js/popper.js"></script>
          <script src="{{url('assets/frontend')}}/js/bootstrap.min.js"></script>
          <script src="{{url('assets/frontend')}}/vendors/nice-select/js/jquery.nice-select.min.js"></script>
          <script src="{{url('assets/frontend')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
          <script src="{{url('assets/frontend')}}/js/owl-carousel-thumb.min.js"></script>
          <script src="{{url('assets/frontend')}}/js/jquery.ajaxchimp.min.js"></script>
          <script src="{{url('assets/frontend')}}/js/mail-script.js"></script>
          <!--gmaps Js-->
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
          <script src="{{url('assets/frontend')}}/js/gmaps.min.js"></script>
          <script src="{{url('assets/frontend')}}/js/theme.js"></script>
        </body>
      </html>