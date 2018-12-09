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
      <!-- .header-mobile -->
      <div class="header-mobile header d-md-none">
        <div class="container">
          <div class="row justify-content-between align-items-center py-3 bg-light">
            <div class="col-auto">
              <a class="btn btn-default-outline" data-toggle="collapse" data-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation" role="button">
                <i class="fa fa-fw fa-lg fa-bars"></i>
              </a>
            </div>
            <div class="col-auto">
              <a href="{{ url('/') }}">
                <img src="{{ env('APP_LOGO') }}" alt="{{ env('APP_NAME') }}">
              </a>
            </div>
            <div class="col-auto">
              <a class="btn btn-default-outline" data-toggle="modal" data-target="#modalMobileUserLogin" href="#modalMobileUserLogin" role="button">
                <i class="fa fa-fw fa-lg fa-user"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="collapse accordion bg-secondary" id="mobileMenu">
          <a class="btn btn-block text-left" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" href="#collapseOne">
            Collapsible Group Item #1
          </a>
          <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#mobileMenu">
            <ul class="navbar-nav mr-auto my-0">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
          </div>
          <a class="btn btn-block text-left" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" href="#collapseTwo">
            Collapsible Group Item #2
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#mobileMenu">
            <ul class="navbar-nav mr-auto my-0">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <div class="accordion" id="accordionExample2">
                  <a class="btn btn-block text-left" role="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4" href="#collapse4">
                    Collapsible Group Item #4
                  </a>
                  <div id="collapse4" class="collapse bg-light" aria-labelledby="heading4" data-parent="#accordionExample2">
                    <ul class="navbar-nav mr-auto my-0">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
          </div>
          <a class="btn btn-block text-left" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" href="#collapseThree">
            Collapsible Group Item #3
          </a>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#mobileMenu">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="modal fade" id="modalMobileUserLogin" tabindex="-1" role="dialog" aria-labelledby="modalMobileUserLoginTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalMobileUserLoginTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / .header-mobile -->

      <div id="homepageSlide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#homepageSlide" data-slide-to="0" class="active"></li>
          <li data-target="#homepageSlide" data-slide-to="1"></li>
          <li data-target="#homepageSlide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&bg=777&fg=555&text=First slide" src="..." alt="slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&bg=666&fg=444&text=Second slide" src="..." alt="slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&bg=555&fg=333&text=Third slide" src="..." alt="slide">
          </div>
        </div>
        <a class="carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <!-- / #header-section -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/holderjs/holder.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/zoomjs/js/zoom.js') }}" crossorigin="anonymous"></script>
  </body>
</html>
