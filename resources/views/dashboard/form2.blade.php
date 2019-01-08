<?php

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
$customer = $gateway->customer()->create();
$clientToken = $gateway->clientToken()->generate();

// $result = $gateway->paymentMethodNonce()->create('PAYMENT_METHOD_TOKEN');

?>

<script src="https://js.braintreegateway.com/web/3.41.0/js/client.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.41.0/js/three-d-secure.min.js"></script>
<script>
var threeDSecure;

braintree.client.create({
  // Use the generated client token to instantiate the Braintree client.
  authorization: '<?php echo $clientToken; ?>'
}, function (clientErr, clientInstance) {
  if (clientErr) {
    // Handle error in client creation
    return;
  }

  console.log(clientInstance);

  braintree.threeDSecure.create({
    client: clientInstance
  }, function (threeDSecureErr, threeDSecureInstance) {
    if (threeDSecureErr) {
      // Handle error in 3D Secure component creation
      return;
    }

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
      if (err) {
        // Handle error
        return;
      }

      // Submit response.nonce to server
      console.log(response);
    });

    console.log(threeDSecure);
  });
});
</script>
