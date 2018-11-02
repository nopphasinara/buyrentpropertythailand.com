<!doctype html>
<html lang="{{ str_slug(app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Hello, world!</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" crossorigin="anonymous">
  </head>
  <body>

    <!-- #header-section -->
    <header id="header-section">

      <!-- .topbar -->
      <div class="topbar">
        <!-- .container -->
        <div class="container">
          <div class="d-flex flex-row justify-content-md-between">
            <div class="col-auto">
              .col-auto
            </div>
            <div class="col-auto">
              .col-auto
            </div>
          </div>
        </div>
        <!-- / .container -->
      </div>
      <!-- / .topbar -->

      <!-- .header-style-1 -->
      <div class="header-style-1 header">
        .header-style-1
      </div>
      <!-- / .header-style-1 -->

      <!-- .header-style-2 -->
      <div class="header-style-2 header">
        .header-style-2
      </div>
      <!-- / .header-style-2 -->

      <!-- .header-style-3 -->
      <div class="header-style-3 header">
        .header-style-3
      </div>
      <!-- / .header-style-3 -->

      <!-- .header-style-4 -->
      <div class="header-style-4 header">
        .header-style-4
      </div>
      <!-- / .header-style-4 -->

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

    <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/vendor/holderjs/holder.min.js') }}" crossorigin="anonymous"></script>
  </body>
</html>
