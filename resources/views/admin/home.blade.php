@extends('admin.layout.app')

@section('content')
  <!-- .header -->
  <header class="header">
    <div class="topbar">
      <div class="container px-0">
        <div class="row justify-content-between align-items-center">
          <div class="col-auto">
            <a class="btn btn-default" data-toggle="offcanvas" data-target="#offcanvas-menu" href="#">
              <i class="fa fa-bars"></i>
            </a>
          </div>
          <div class="col text-center text-md-left">
            xxx
          </div>
          <div class="col-auto">
            <a class="btn btn-default" href="#">
              <i class="fa fa-user"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- / .header -->
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
