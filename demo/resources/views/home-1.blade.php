<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="{{ env('APP_AUTHOR') }}">
  <title>Blog Template for Bootstrap</title>

  <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

  <!-- #headerSection -->
  <header id="headerSection">
    <!-- .header-body -->
    <div class="header-body">
      <!-- .container -->
      <div class="container">
        <div class="row no-gutters justify-content-between align-items-center">
          <div class="col-auto order-2 order-md-first">
            <a href="{{ url('/') }}">
              <img src="{{ env('APP_LOGO') }}" alt="{{ env('APP_NAME') }}">
            </a>
          </div>
          <div class="col-auto ml-md-auto order-first order-md-2 d-md-none">
            <a class="btn btn-default" data-toggle="offcanvas" data-target="#menuMainOffcanvas" href="#">
              <i class="fa fa-fw fa-lg fa-bars"></i>
            </a>
          </div>
          <div class="col-auto order-last d-md-none">
            <a class="btn btn-default" data-toggle="modal" data-target="#modalUserLogin" href="#">
              <i class="fa fa-fw fa-lg fa-user-alt"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- / .container -->
    </div>
    <!-- / .header-body -->

    <!-- .header-bottom -->
    <div class="header-bottom">
      <!-- #menuMain -->
      <div id="menuMain">
        <div class="container">
          <div class="d-flex flex-column flex-md-row align-items-center">
            <div class="box-left">
              <div class="offcanvas-collapse" id="menuMainOffcanvas">
                <div class="offcanvas-header d-flex d-md-none">
                  <div class="flex-grow-1 offcanvas-title">
                    <i class="fa fa-fw fa-lg fa-bars mr-2"></i>NAVIGATION
                  </div>
                  <div class="ml-auto">
                    <a class="offcanvas-btn-close" data-toggle="offcanvas" data-target="#menuMainOffcanvas" href="#"><i class="fa fa-fw fa-lg fa-times"></i></a>
                  </div>
                </div>
                <div class="offcanvas-body p-md-0">
                  <div class="d-flex flex-column flex-md-row">
                    <div class="menu-item">
                      <a class="btn active" href="#">Home</a>
                    </div>
                    <div class="menu-item">
                      <a class="btn" href="#">Link</a>
                    </div>
                    <div class="menu-item">
                      <a class="btn" href="#">Link</a>
                    </div>
                    <div class="menu-item">
                      <a class="btn" href="#">Link</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="box-right ml-md-auto d-none d-md-block">
              <div class="d-flex flex-row">
                <div>
                  <a class="btn-user-signin btn mr-md-2" href="#">Sign-In / Register</a>
                </div>
                <div>
                  <a class="btn-create-listing btn btn-secondary" href="#">Create Listing</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / #menuMain -->
    </div>
    <!-- / .header-bottom -->

    <!-- Modal -->
    <div class="modal fade" id="modalUserLogin" tabindex="-1" role="dialog" aria-labelledby="modalUserLoginTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalUserLoginTitle">Modal title</h5>
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

  </header>
  <!-- / #headerSection -->

  {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="menuMain">
    <div class="offcanvas-collapse navbar-collapse" id="menuOffcanvas">
      <div class="container px-0">
        <div class="row no-gutters justify-content-between align-items-stretch">
          <div class="col">
            <h5 class="offcanvas-title bg-success text-white px-3 py-3">Main Menu</h5>
          </div>
          <div class="col-auto">
            <a class="offcanvas-btn-close btn btn-success d-flex align-items-center" data-toggle="offcanvas" data-target="#menuOffcanvas" href="#"><i class="fa fa-fw fa-lg fa-times"></i></a>
          </div>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Notifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Switch account</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav> --}}

  <div class="nav-scroller bg-white shadow-sm">
    <nav class="nav nav-underline">
      <a class="nav-link active" href="#">Dashboard</a>
      <a class="nav-link" href="#">
        Friends
        <span class="badge badge-pill bg-light align-text-bottom">27</span>
      </a>
      <a class="nav-link" href="#">Explore</a>
      <a class="nav-link" href="#">Suggestions</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a>
    </nav>
  </div>

  <main role="main">

    <div id="carouselHomepage" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselHomepage" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHomepage" data-slide-to="1"></li>
        <li data-target="#carouselHomepage" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselHomepage" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselHomepage" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('vendor/holderjs/holder.min.js') }}"></script>
</body>
</html>
