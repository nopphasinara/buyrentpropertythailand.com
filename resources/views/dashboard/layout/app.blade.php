<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hello, world!</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('vendor/'. config('custom.dashboard_prefix') .'/css/admin.css') }}">
  </head>
  <body>
    @stack('after_open_body')

    @stack('before_content')

    @section('content')
    @show

    @push('after_content')
      <div class="backdrop"></div>
    @endpush

    @stack('after_content')

    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('vendor/'. config('custom.dashboard_prefix') .'/js/admin.js') }}"></script>

    @stack('before_close_body')
  </body>
</html>
