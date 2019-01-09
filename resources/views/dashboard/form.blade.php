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
$clientToken = $gateway->clientToken()->generate();
// $customer = $gateway->customer()->create();

// $result = $gateway->paymentMethodNonce()->create('PAYMENT_METHOD_TOKEN');

?>


<form action="/" id="my-sample-form" method="post">
  <input type="text" id="payment_method_nonce" name="payment_method_nonce" value="">
  <input type="text" id="deviceData" name="deviceData" value="">

  <label for="card-number">Card Number</label>
  <div id="card-number"></div>

  <label for="cvv">CVV</label>
  <div id="cvv"></div>

  <label for="expiration-date">Expiration Date</label>
  <div id="expiration-date"></div>

  <input type="submit" value="Pay" disabled />
</form>

<script src="https://js.braintreegateway.com/web/3.41.0/js/client.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.41.0/js/hosted-fields.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.41.0/js/data-collector.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.41.0/js/payment-request.min.js"></script>
<script>
var form = document.querySelector('#my-sample-form');
var submit = document.querySelector('input[type="submit"]');
var myDeviceData;

braintree.client.create({
  authorization: '<?php echo $clientToken; ?>'
}, function (clientErr, clientInstance) {
  if (clientErr) {
    console.error(clientErr);
    return;
  }

  // clientInstance.request({
  //   endpoint: 'payment_methods/credit_cards',
  //   method: 'post',
  //   data: {
  //     creditCard: {
  //       number: '4111111111111111',
  //       expirationDate: '10/20',
  //       cvv: '123',
  //       billingAddress: {
  //         postalCode: '12345'
  //       }
  //     }
  //   }
  // }, function (err, response) {
  //   // Send response.creditCards[0].nonce to your server
  //   console.log(response);
  // });

  braintree.dataCollector.create({
    client: clientInstance,
    paypal: true,
  }, function (err, dataCollectorInstance) {
    if (err) {
      // Handle error
      return;
    }
    myDeviceData = dataCollectorInstance.deviceData;
  });

  // This example shows Hosted Fields, but you can also use this
  // client instance to create additional components here, such as
  // PayPal or Data Collector.

  braintree.paymentRequest.create({
    client: clientInstance,
    enabledPaymentMethods: {
      basicCard: true,
      googlePay: false,
    },
  }, function (createErr, paymentRequestInstance) {
    paymentRequestInstance.tokenize({
      details: {
        total: {
          label: 'Price',
          amount: {
            currency: 'USD',
            value: '100.00'
          }
        }
      }
    }).then(function (payload) {
      // send payload.nonce to server

      // examine the raw response (with card details removed for security) from the payment request
      console.log(payload.details.rawPaymentResponse);
    }).catch(function (err) {
      if (err.code === 'PAYMENT_REQUEST_CANCELED') {
        // payment request was canceled by user
      } else {
        // an error occurred while processing
      }
    });

    console.log(paymentRequestInstance);
    // paymentRequestInstance.on('shippingAddressChange', function (event) {
    //   console.log(event.target.shippingAddress);
    // });
  });

  braintree.hostedFields.create({
    client: clientInstance,
    fields: {
      number: {
        selector: '#card-number',
        // placeholder: '4111 1111 1111 1111',
      },
      cvv: {
        selector: '#cvv',
        // placeholder: '123',
      },
      expirationDate: {
        selector: '#expiration-date',
        placeholder: 'MM/YYYY',
      },
    },
  }, function (hostedFieldsErr, hostedFieldsInstance) {
    if (hostedFieldsErr) {
      console.error(hostedFieldsErr);
      return;
    }

    submit.removeAttribute('disabled');

    hostedFieldsInstance.on('inputSubmitRequest', function () {
      submit.click();
    });

    form.addEventListener('submit', function (event) {
      event.preventDefault();

      hostedFieldsInstance.tokenize({
        cardholderName: 'First Last',
        billingAddress: {
          firstName: 'First',
          lastName: 'Last',
          company: 'Company',
          streetAddress: '123 Street',
          extendedAddress: 'Unit 1',
          countryCodeAlpha3: 'USA',
        },
        options: {
          validate: true,
          verifyCard: true,
        }
      }, function (tokenizeErr, payload) {
        if (tokenizeErr) {
          switch (tokenizeErr.code) {
            case 'HOSTED_FIELDS_FIELDS_EMPTY':
              // occurs when none of the fields are filled in
              console.error('All fields are empty! Please fill out the form.');
              break;
            case 'HOSTED_FIELDS_FIELDS_INVALID':
              // occurs when certain fields do not pass client side validation
              console.error('Some fields are invalid:', tokenizeErr.details.invalidFieldKeys);

              // you can also programtically access the field containers for the invalid fields
              tokenizeErr.details.invalidFields.forEach(function (fieldContainer) {
                fieldContainer.className = 'invalid';
              });
              break;
            case 'HOSTED_FIELDS_TOKENIZATION_FAIL_ON_DUPLICATE':
              // occurs when:
              //   * the client token used for client authorization was generated
              //     with a customer ID and the fail on duplicate payment method
              //     option is set to true
              //   * the card being tokenized has previously been vaulted (with any customer)
              // See: https://developers.braintreepayments.com/reference/request/client-token/generate/#options.fail_on_duplicate_payment_method
              console.error('This payment method already exists in your vault.');
              break;
            case 'HOSTED_FIELDS_TOKENIZATION_CVV_VERIFICATION_FAILED':
              // occurs when:
              //   * the client token used for client authorization was generated
              //     with a customer ID and the verify card option is set to true
              //     and you have credit card verification turned on in the Braintree
              //     control panel
              //   * the cvv does not pass verfication (https://developers.braintreepayments.com/reference/general/testing/#avs-and-cvv/cid-responses)
              // See: https://developers.braintreepayments.com/reference/request/client-token/generate/#options.verify_card
              console.error('CVV did not pass verification');
              break;
            case 'HOSTED_FIELDS_FAILED_TOKENIZATION':
              // occurs for any other tokenization error on the server
              console.error('Tokenization failed server side. Is the card valid?');
              break;
            case 'HOSTED_FIELDS_TOKENIZATION_NETWORK_ERROR':
              // occurs when the Braintree gateway cannot be contacted
              console.error('Network error occurred when tokenizing.');
              break;
            default:
              console.error('Something bad happened!', tokenizeErr);
          }
        } else {
          console.log('Got nonce:', payload.nonce);
          form['payment_method_nonce'].value = payload.nonce;
          form['deviceData'].value = myDeviceData;
        }
      });
    }, false);
  });
});
</script>
