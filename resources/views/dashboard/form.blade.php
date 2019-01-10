<?php

/*
|--------------------------------------------------------------------------
| Configuration
|--------------------------------------------------------------------------
*/

use Omnipay\Omnipay as Gateway;

$gateway = Gateway::create('PayPal_Rest');
if (method_exists($gateway, 'setDeveloperMode')) {
  $gateway->setDeveloperMode(true);
} else {
  $gateway->setTestMode(true);
}
$gateway->setClientId($merchant['paypal_client_id']);
$gateway->setSecret($merchant['paypal_secret']);
$gateway->setToken($merchant['paypal_token']);

// echo '<pre>'; print_r(get_class_methods($gateway)); echo '</pre>';
echo '<pre>'; print_r($gateway->getParameters()); echo '</pre>';
// echo '<pre>'; print_r($gateway); echo '</pre>';


// $formData = array('number' => '4242424242424242', 'expiryMonth' => '6', 'expiryYear' => '2030', 'cvv' => '123');
// $response = $gateway->purchase(array('amount' => '10.00', 'currency' => 'USD', 'card' => $formData))->send();
//
// if ($response->isRedirect()) {
//     // redirect to offsite payment gateway
//     $response->redirect();
// } elseif ($response->isSuccessful()) {
//     // payment was successful: update database
//     echo '<pre>'; print_r($response); echo '</pre>';
// } else {
//     // payment failed: display message to customer
//     echo '<pre>'; print_r('Sorry, there was an error processing your payment. Please try again later.'); echo '</pre>';
//     echo '<pre>'; print_r($response->getMessage()); echo '</pre>';
// }
