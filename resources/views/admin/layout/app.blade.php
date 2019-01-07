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
    <link rel="stylesheet" href="{{ asset('vendor/admin/css/admin.css') }}">
  </head>
  <body>
    <div class="backdrop"></div>

    @stack('after_open_body')

    @section('content')@show

    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('vendor/admin/js/admin.js') }}"></script>

    @stack('before_close_body')
  </body>
</html>
