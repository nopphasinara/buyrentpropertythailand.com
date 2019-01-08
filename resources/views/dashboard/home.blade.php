@extends(''. config('custom.dashboard_prefix') .'.layout.app')

@section('content')
  <!-- .header -->
  <header class="header">
    <div class="topbar d-none d-md-block">
      <div class="container px-0">
        <div class="row justify-content-between align-items-center">
          <div class="col">
            Our opening hours: Mon - Fri: 08:00 - 17.00, Sat: 08:00 - 12:00
          </div>
          <div class="col-auto">
            <div class="topbar-users d-flex align-items-stretch">
              <a class="btn btn-link-light bg-primary" href="#">
                Login
              </a>
              <div class="separator-x-primary"></div>
              <a class="btn btn-link-light bg-primary" href="#">
                Create Account
              </a>
            </div>
          </div>
          <div class="col-auto">
            <div class="topbar-socials">
              <span>Follow Us</span>
              <a class="btn btn-facebook-default" href="#">
                <span class="fa-stack">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
              <a class="btn btn-twitter-default" href="#">
                <span class="fa-stack">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
              <a class="btn btn-pinterest-default" href="#">
                <span class="fa-stack">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-pinterest-p fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="header-body">
      <div class="container px-0">
        <div class="row justify-content-between no-gutters">
          <div class="col-auto d-md-none">
            <a class="btn btn-default" data-toggle="offcanvas" data-target="#offcanvas-menu" href="#">
              <i class="fa fa-bars"></i>
            </a>
          </div>
          <div class="col-auto header-logo">
            <a href="#">
              <img src="https://skirtingboardsdirect.com/wp-content/themes/skirting-boards-direct/assets/images/logo.png" alt="xxx">
            </a>
          </div>
          <div class="col-auto">
            <a class="btn btn-default d-md-none" href="#">
              <i class="fa fa-user"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="header-bottom d-none d-md-block">
      xxx
    </div>
  </header>
  <!-- / .header -->


  @include(''. config('custom.dashboard_prefix') .'.form')

@endsection


@push('before_close_body')
  <!-- #offcanvas-menu -->
  <div id="offcanvas-menu" class="offcanvas offcanvas-left">
    <div class="offcanvas-body">
      xxx
    </div>
  </div>
  <!-- / #offcanvas-menu -->
@endpush
