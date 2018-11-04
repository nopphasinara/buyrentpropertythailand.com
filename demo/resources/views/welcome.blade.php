<!doctype html>
<html lang="{{ str_slug(app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Hello, world!</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('vendor/zoomjs/css/zoom.css') }}" crossorigin="anonymous">
  </head>
  <body>

    <!-- #header-section -->
    <header id="header-section">

      <!-- .topbar-style-1 -->
      <div class="topbar-style-1 topbar bg-secondary">
        <!-- .container-fluid -->
        <div class="container-fluid px-0">
          <div class="row d-flex flex-row justify-content-md-between align-items-center no-gutters">
            <div class="left-panel panel col mr-auto">
              <!-- .menu-topbar -->
              <div class="menu-topbar btn-group" role="group" aria-label="Menu Topbar">
                <a class="btn btn-outline-warning btn-hilight" href="#" role="button">Menu</a>
                <a class="btn btn-secondary" href="#" role="button">Menu</a>
                <a class="btn btn-secondary" href="#" role="button">Menu</a>
              </div>
              <!-- / .menu-topbar -->
            </div>

            <div class="right-panel panel col-auto">
              <!-- .tools-topbar -->
              <div class="tools-topbar btn-group" role="group" aria-label="Tools Topbar">
                <a class="btn btn-primary" href="#" role="button">Sign In / Register <i class="fa fa-lg fa-user"></i></a>
              </div>
              <!-- / .tools-topbar -->
            </div>
          </div>
        </div>
        <!-- / .container-fluid -->
      </div>
      <!-- / .topbar-style-1 -->

      <!-- .header-style-1 -->
      <div class="header-style-1 header bg-dark text-light">
        <!-- .container -->
        <div class="container-fluid">
          <div class="row d-flex flex-row justify-content-md-between align-items-center">
            <div class="logo-header col-auto px-0 bg-white">
              <a class="d-flex align-items-center px-4" href="{{ url('/') }}">
                <img src="https://buyrentpropertythailand.com/wp-content/uploads/2018/09/wwwbrpt-logo.png" alt="Logo">
              </a>
            </div>
            <div class="col">
              xxx
            </div>
            <div class="col-auto">
              Search <i class="fa fa-lg fa-search"></i>
            </div>
          </div>
        </div>
        <!-- / .container -->
      </div>
      <!-- / .header-style-1 -->

    </header>
    <!-- / #header-section -->

    <!-- #main-section -->
    <main id="main-section">

      <!-- #content-top-section -->
      <div id="content-top-section">
        <div class="h1">
          .h1
        </div>
        <div class="display-1">
          .display-1
        </div>
        <p class="lead">
          .lead
        </p>
      </div>
      <!-- / #content-top-section -->

      <!-- #content-section -->
      <div id="content-section">
        content-section
      </div>
      <!-- / #content-section -->

      <!-- #content-bottom-section -->
      <div id="content-bottom-section">
        content-bottom-section
      </div>
      <!-- / #content-bottom-section -->

    </main>
    <!-- / #main-section -->

    <!-- #footer-section -->
    <footer id="footer-section">
      footer-section
    </footer>
    <!-- / #footer-section -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/holderjs/holder.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/zoomjs/js/zoom.js') }}" crossorigin="anonymous"></script>
  </body>
</html>
