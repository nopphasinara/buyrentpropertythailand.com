<?php
session_start();

$environment = [
  'production' => [
    'id' => '',
    'public_key' => '',
    'private_key' => '',
    'token_key' => '',
  ],
  'sandbox' => [
    'id' => 'y93fbxntv6b7qmss',
    'public_key' => 'byyf2v7xjq38vxyn',
    'private_key' => '1ac1efd1d2fabdb331fd32d5eed16634',
    'token_key' => 'sandbox_w7r7pjw4_y93fbxntv6b7qmss',
  ],
];
$merchant = $environment['sandbox'];

$config = new Braintree\Configuration([
  'environment' => 'sandbox',
  'merchantId' => $merchant['id'],
  'publicKey' => $merchant['public_key'],
  'privateKey' => $merchant['private_key'],
]);
$config->timeout(60);
$gateway = new Braintree_Gateway($config);
$clientToken = $gateway->clientToken()->generate();


$order_number = 'OR-'. strtoupper(substr(md5(time()), 0, 13)) .'';
$url = 'https://api.sandbox.paypal.com/v1/payments/payment';
$site_url = 'https://www.reproduction-galleries.com/';
$receipt_email = 'info@reproduction-galleries.com';
$params = [
  'intent' => 'sale',
  'payer' => [
    'payment_method' => 'credit_card',
    'payer_info' => [
      'email' => 'admin@reproduction-galleries.com',
      'first_name' => 'John',
      'middle_name' => '',
      'last_name' => 'Doe',
      'country_code' => 'USA',
      'billing_address' => [
        // 'recipient_name' => '',
        // 'phone' => '',
        // 'line1' => '',
        // 'line2' => '',
        // 'city' => '',
        // 'state' => '',
        // 'country_code' => '',
        // 'postal_code' => '',
      ],
    ],
  ],
  'transactions' => [
    'payee' => [
      'merchant_id' => $merchant['id'],
    ],
    // 'custom' => '',
    'reference_id' => $order_number,
    'invoice_number' => $order_number,
    'payment_options' => [
      'allowed_payment_method' => 'INSTANT_FUNDING_SOURCE',
    ],
    'item_list' => [
      'items' => [
        [
          'sku' => '28636',
          'name' => 'The Dance First Version By Henri Matisse',
          'description' => 'White Color Gallery Wrap Border Option 53 x 80 cm (20.9 x 31.5")',
          'quantity' => '1',
          'price' => '30.00',
          'currency' => 'USD',
          // 'tax' => '',
        ],
        [
          'sku' => '31742',
          'name' => 'The Dance Second Version By Henri Matisse',
          'description' => 'No Gallery Wrap Border Option 80 x 53 cm (31.5 x 20.9")',
          'quantity' => '1',
          'price' => '20.00',
          'currency' => 'USD',
          // 'tax' => '',
        ],
      ],
      'shipping_address' => [
        'recipient_name' => 'John Doe',
        'phone' => '+1302-504-4218',
        'line1' => '19C Trolley Square',
        'line2' => '',
        'city' => 'Wilmington',
        'state' => 'DE',
        'country_code' => 'USA',
        'postal_code' => '19806',
      ],
    ],
    'amount' => [
      'total' => '50.00',
      'currentcy' => 'USD',
      'details' => [
        'subtotal' => '50.00',
        // 'tax' => '0.00',
        'shipping' => '0.00',
        // 'handling_fee' => '0.00',
        // 'shipping_discount' => '0.00',
        // 'insurance' => '0.00',
      ],
    ],
    'description' => 'Your reference number for this order is: '. $order_number .'',
    'note_to_payee' => 'Venmo, Google Pay and Apple Pay will not be automatically vaulted on the client.',
    // 'notify_url' => '',
    // 'order_url' => '',
  ],
  'note_to_payer' => 'Your Basket contents are stored here for 30+ days so you can return anytime.',
  /* Required for PayPal account payments */
  'redirect_urls' => [
    // 'return_url' => '',
    // 'cancel_url' => '',
  ],
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
    'Authorization: Bearer access_token$sandbox$gr5vnghxztmgnz7w$a184e06be3fdfb452ff5c8e0579b6ef9',
  ],
  CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
  CURLOPT_TIMEOUT => 60,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_NOPROGRESS => true,
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
curl_close($ch);
