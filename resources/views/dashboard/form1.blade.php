<?php

$environment = [
  'production' => [
    'id' => '',
    'public_key' => '',
    'private_key' => '',
  ],
  'sandbox' => [
    'id' => 'y93fbxntv6b7qmss',
    'public_key' => 'byyf2v7xjq38vxyn',
    'private_key' => '1ac1efd1d2fabdb331fd32d5eed16634',
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

echo '<pre>'; print_r($gateway->paymentMethodNonce()->create(''. $clientToken .'')); echo '</pre>';

?>

<!-- Load the Client component. -->
<script src="https://js.braintreegateway.com/web/3.41.0/js/client.min.js"></script>

<!-- Load the 3D Secure component. -->
<script src="https://js.braintreegateway.com/web/3.41.0/js/three-d-secure.min.js"></script>

<script>
var threeDSecure;

braintree.client.create({
// Use the generated client token to instantiate the Braintree client.
authorization: '{{ $clientToken }}'
}, function (clientErr, clientInstance) {
if (clientErr) {
  // Handle error in client creation
  return;
}

braintree.threeDSecure.create({
  client: clientInstance
}, function (threeDSecureErr, threeDSecureInstance) {
  if (threeDSecureErr) {
    // Handle error in 3D Secure component creation
    return;
  }

  console.log(clientInstance.getConfiguration());

  threeDSecure = threeDSecureInstance;

  var my3DSContainer = document.createElement('div');

  threeDSecure.verifyCard({
    amount: '500.00',
    nonce: NONCE_FROM_INTEGRATION,
    addFrame: function (err, iframe) {
      // Set up your UI and add the iframe.
      my3DSContainer.appendChild(iframe);
      document.body.appendChild(my3DSContainer);
    },
    removeFrame: function () {
      // Remove UI that you added in addFrame.
      document.body.removeChild(my3DSContainer);
    }
  }, function (err, response) {
    // Send response.nonce to use in your transaction
  });
});
});
</script>
<?php

// echo '<pre>'; print_r($clientToken); echo '</pre>';
//
// $result = $gateway->transaction()->sale([
//   'amount' => '10.00',
//   'paymentMethodNonce' => $clientToken,
//   'options' => [
//     'submitForSettlement' => True,
//   ],
// ]);
//
// echo '<pre>'; print_r($result); echo '</pre>';

/*
$result = $gateway->transaction()->sale([
  'amount' => '100.00',
  'orderId' => 'order id',
  'merchantAccountId' => 'a_merchant_account_id',
  'paymentMethodNonce' => nonceFromTheClient,
  'customer' => [
    'firstName' => 'Drew',
    'lastName' => 'Smith',
    'company' => 'Braintree',
    'phone' => '312-555-1234',
    'fax' => '312-555-1235',
    'website' => 'http://www.example.com',
    'email' => 'drew@example.com'
  ],
  'billing' => [
    'firstName' => 'Paul',
    'lastName' => 'Smith',
    'company' => 'Braintree',
    'streetAddress' => '1 E Main St',
    'extendedAddress' => 'Suite 403',
    'locality' => 'Chicago',
    'region' => 'IL',
    'postalCode' => '60622',
    'countryCodeAlpha2' => 'US'
  ],
  'shipping' => [
    'firstName' => 'Jen',
    'lastName' => 'Smith',
    'company' => 'Braintree',
    'streetAddress' => '1 E 1st St',
    'extendedAddress' => 'Suite 403',
    'locality' => 'Bartlett',
    'region' => 'IL',
    'postalCode' => '60103',
    'countryCodeAlpha2' => 'US'
  ],
  'options' => [
    'submitForSettlement' => true
  ],
  'deviceData' => $_POST['device_data']
]);


$result = $gateway->paymentMethod()->create([
    'customerId' => '12345',
    'paymentMethodNonce' => nonceFromTheClient,
    'options' => [
        'verifyCard' => true
    ],
    'deviceData' => $_POST['device_data']
]);


$result->transaction->riskData->id
# "1SG23YHM4BT5"
$result->transaction->riskData->decision
# "Decline"
$result->transaction->riskData->deviceDataCaptured
# True
*/

// $nonceFromTheClient = $_POST["payment_method_nonce"]
// $result = $gateway->transaction()->sale([
//   'amount' => '10.00',
//   'merchantAccountId' => '',
//   'paymentMethodNonce' => $nonceFromTheClient,
//   'options' => [
//     'verifyCard' => true,
//     'verificationMerchantAccountId' => '',
//     'submitForSettlement' => True,
//   ],
//   'customFields' => [
//     'custom_field_one' => 'custom value',
//     'custom_field_two' => 'another custom value',
//   ],
//   'descriptor' => [
//     'name' => 'company*my product',
//     'phone' => '3125551212',
//     'url' => 'company.com',
//   ],
// ]);
// $result->transaction->processorResponseCode
// $result->transaction->processorResponseText
// if ($result->success) {
//   $verification = $result->creditCardVerification;
//   $verification->status;
//   // "processor_declined", "gateway_rejected"
//
//   $verification->gatewayRejectionReason;
//   // "cvv"
//
//   $verification->processorResponseType;
//   // "soft_declined"
//
//   $verification->processorResponseCode;
//   // "2000"
//
//   $verification->processorResponseText;
//   // "Do Not Honor"
//
//   $result->transaction->type;
//   echo '<pre>'; print_r($result->transaction->customFields['custom_field_one']); echo '</pre>';
//   echo '<pre>'; print_r($result->transaction->customFields['custom_field_two']); echo '</pre>';
//   echo '<pre>'; print_r($result->transaction->descriptor->name); echo '</pre>';
//   echo '<pre>'; print_r($result->transaction->descriptor->phone); echo '</pre>';
// } else {
//
// }

// $res = $gateway->paymentMethodNonce()->create(''. $clientToken .'');
// $nonce = $res->paymentMethodNonce->nonce;

// echo '<pre>'; print_r($nounce); echo '</pre>';
// echo '<pre>'; print_r($res); echo '</pre>';
// echo '<pre>'; print_r($clientToken); echo '</pre>';
// echo '<pre>'; print_r($gateway); echo '</pre>';



?>



{{-- <form method="post" id="payment-form" action="{{ url(config('custom.dashboard_prefix') . '/checkout/') }}">
  <section>
    <label for="amount">
      <span class="input-label">Amount</span>
      <div class="input-wrapper amount-wrapper">
        <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="10">
      </div>
    </label>

    <div class="bt-drop-in-wrapper">
      <div id="bt-dropin"></div>
    </div>
  </section>

  <input id="nonce" name="payment_method_nonce" type="hidden" />
  <button class="button" type="submit"><span>Test Transaction</span></button>
</form>

<script src="https://js.braintreegateway.com/web/dropin/1.14.1/js/dropin.min.js"></script>
<script>
var form = document.querySelector('#payment-form');
var client_token = '{{ $clientToken }}';
braintree.dropin.create({
  authorization: client_token,
  selector: '#bt-dropin',
  paypal: {
    flow: 'vault',
  },
}, function (createErr, instance) {
  if (createErr) {
    console.log('Create Error', createErr);
    return;
  }
  form.addEventListener('submit', function (event) {
    event.preventDefault();
    instance.requestPaymentMethod(function (err, payload) {
      if (err) {
        console.log('Request Payment Method Error', err);
        return;
      }
      // Add the nonce to the form and submit
      document.querySelector('#nonce').value = payload.nonce;
      form.submit();
    });
  });
});
</script> --}}


{{-- <form action="/" id="my-sample-form">
  <input type="hidden" name="payment_method_nonce">
  <label for="card-number">Card Number</label>
  <div id="card-number"></div>

  <label for="cvv">CVV</label>
  <div id="cvv"></div>

  <label for="expiration-date">Expiration Date</label>
  <div id="expiration-date"></div>

  <input id="my-submit" type="submit" value="Pay" disabled/>
</form>

<script src="https://js.braintreegateway.com/web/3.41.0/js/client.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.41.0/js/data-collector.min.js"></script>
<script>
braintree.client.create({
  authorization: '{{ $clientToken }}'
}, function (err, clientInstance) {
  // Creation of any other components...

  braintree.dataCollector.create({
    client: clientInstance,
    kount: true,
    paypal: true,
  }, function (err, dataCollectorInstance) {
    if (err) {
      // Handle error in creation of data collector
      return;
    }
    // At this point, you should access the dataCollectorInstance.deviceData value and provide it
    // to your server, e.g. by injecting it into your form as a hidden input.
    var deviceData = dataCollectorInstance.deviceData;

    var form = document.getElementById('my-sample-form');
    var deviceDataInput = form['device_data'];

    if (deviceDataInput == null) {
      deviceDataInput = document.createElement('input');
      deviceDataInput.name = 'device_data';
      deviceDataInput.type = 'hidden';
      form.appendChild(deviceDataInput);
    }

    deviceDataInput.value = deviceData;
  });
});
</script> --}}

{{-- <script src="https://js.braintreegateway.com/web/dropin/1.14.1/js/dropin.min.js"></script>
<div id="dropin-container"></div>
<button id="submit-button">Request payment method</button>
<script>
var button = document.querySelector('#submit-button');

braintree.dropin.create({
  authorization: '{{ $clientToken }}',
  container: '#dropin-container',
}, function (createErr, instance) {
  button.addEventListener('click', function () {
    instance.requestPaymentMethod(function (err, payload) {
      // Submit payload.nonce to your server
    });
  });
});
</script> --}}

<?php

// merchant=250104517416
// dynamic=1
// currency=USD
// return-url=https%3A%2F%2Fwww.reproduction-galleries.com%2Fthankyou.php
// return-type=link
// style=default5c3432ab5b140
// tpl=default
// prod=asd%3Bdsa
// tangible=1%3B0
// price=1000%3B200
// type=product%3Bproduct
// qty=1%3B1
// signature=a0eeed64f61bf69f8845763413c76fda9b9ac6d5d6d2d5908cf23754666be5fb

// https://secure.2checkout.com/checkout/buy?merchant=250104517416&dynamic=1&currency=USD&return-url=https%3A%2F%2Fwww.reproduction-galleries.com%2Fthankyou.php&return-type=link&style=default5c3432ab5b140&tpl=default&prod=asd%3Bdsa&tangible=1%3B0&price=1000%3B200&type=product%3Bproduct&qty=1%3B1&signature=a0eeed64f61bf69f8845763413c76fda9b9ac6d5d6d2d5908cf23754666be5fb

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
