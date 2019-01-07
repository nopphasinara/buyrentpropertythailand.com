@extends(''. config('custom.dashboard_prefix') .'.layout.app')

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



@include(''. config('custom.dashboard_prefix') .'.form')


  <?php

  /* function progressCallback($resource, $download_size = 0, $downloaded = 0, $upload_size = 0, $uploaded = 0) {
    if (version_compare(PHP_VERSION, '5.5.0') < 0) {
        $uploaded = $upload_size;
        $upload_size = $downloaded;
        $downloaded = $download_size;
        $download_size = $resource;
    }

    // echo '<pre>'; print_r(func_get_args()); echo '</pre>';
  }

  $token = 'sk_test_WGSq3oDTzfowzdvTsKXO9AM5';
  // $url = 'https://api.stripe.com/v1/orders';
  // $url = 'https://api.stripe.com/v1/charges';
  // $url = 'https://api.stripe.com/v1/payment_intents/pi_1DptP7DXmFDLZDU7NVdw3RS8';
  $url = 'https://api.stripe.com/v1/payment_intents';
  $site_url = 'https://www.reproduction-galleries.com/';
  $receipt_email = 'info@reproduction-galleries.com';
  $params = [
    // 'success_url' => $site_url . 'success/',
    // 'cancel_url' => $site_url . 'cancel/',
    'allowed_source_types' => [
      'card',
    ],
    'amount' => 1000,
    'currency' => 'usd',
    'description' => 'Red Fish #345678',
    // 'items' => [
    //   [
    //     'type' => 'sku',
    //     'parent' => 'sku_EIUctLgJERiPUb',
    //     'quantity' => 2,
    //   ],
    // ],
    // 'shipping' => [
    //   'name' => 'John Doe',
    //   'address' => [
    //     'line1' => '1234 Street',
    //     'city' => 'San Francisco',
    //     'state' => 'CA',
    //     'postal_code' => '94107',
    //     'country' => 'US',
    //   ],
    // ],
    // 'email' => $receipt_email,
  ];

  $options = [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($params),
    CURLOPT_HTTPHEADER => [
      'Connection: keep-alive',
      'Keep-Alive: 300',
      // 'Content-Type: application/json',
      'charset="utf-8"',
      'Cache-Control: no-cache',
      'Pragma: no-cache',
      'Content-length: '. strlen(http_build_query($params)) .'',
      'Authorization: Bearer '. $token .'',
    ],
    CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
    CURLOPT_TIMEOUT => 60,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_PROGRESSFUNCTION => 'progressCallback',
    CURLOPT_NOPROGRESS => false,
    CURLOPT_ENCODING => 'gzip,deflate',
    CURLOPT_AUTOREFERER => true,
    CURLOPT_BUFFERSIZE => 16,
  ];

  $ch = curl_init();
  curl_setopt_array($ch, $options);
  $res = curl_exec($ch);
  $info = curl_getinfo($ch);
  // echo '<pre>'; print_r($info); echo '</pre>';
  $errno = curl_errno($ch);
  $error = '';
  if ($errno) {
    $error = curl_error($ch);
    echo '<pre>'; print_r($errno); echo '</pre>';
    echo '<pre>'; print_r($error); echo '</pre>';
  } else {
    if ($res && is_string($res)) {
      $data = json_decode($res, true);
    }
    echo '<pre>'; print_r($data); echo '</pre>';
    // echo '<pre>'; print_r($res); echo '</pre>';
    // echo '<pre>'; print_r($ch); echo '</pre>';
  }
  curl_close($ch); */
  ?>
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
