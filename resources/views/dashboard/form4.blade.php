<?php

/*
|--------------------------------------------------------------------------
| Configuration
|--------------------------------------------------------------------------
*/

// $result = $gateway->customer()->create([
//   'email' => 'admin@reproduction-galleries.com',
//   'firstName' => 'John',
//   'lastName' => 'Doe',
//   'phone' => '+13025044218',
// ]);
// if (!$result->success) {
//   echo '<pre>'; print_r($result->message); echo '</pre>';
// } else {
//   $customer = $result->customer;
//   $result = $gateway->paymentMethodNonce()->create();
//   echo '<pre>'; print_r($result); echo '</pre>';
// }
?>

<div id="paypal-button-container"></div>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="https://js.braintreegateway.com/web/3.26.0/js/client.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.26.0/js/paypal-checkout.min.js"></script>
<script>
// Helper functions
function getElements(el) {
  return Array.prototype.slice.call(document.querySelectorAll(el));
}

function hideElement(el) {
  document.body.querySelector(el).style.display = 'none';
}

function showElement(el) {
  document.body.querySelector(el).style.display = 'block';
}

// Listen for changes to the radio fields
// getElements('input[name=payment-option]').forEach(function(el) {
//   el.addEventListener('change', function(event) {
//     // If PayPal is selected, show the PayPal button
//     if (event.target.value === 'paypal') {
//       hideElement('#card-button-container');
//       showElement('#paypal-button-container');
//     }
//
//     // If Card is selected, show the standard continue button
//     if (event.target.value === 'card') {
//       showElement('#card-button-container');
//       hideElement('#paypal-button-container');
//     }
//   });
// });

// Hide Non-PayPal button by default
// hideElement('#card-button-container');


// Render the PayPal button
paypal.Button.render({
  // Set your environment
  env: '{{ $appenv }}',
  // Pass in the Braintree SDK
  braintree: braintree,
  // Pass in your Braintree authorization key
  client: {
    sandbox: '{{ $merchant['token_key'] }}',
    production: '',
  },
  // Set button style
  style: {
    label: 'buynow',
    size:  'large',
    shape: 'rect',
    color: 'silver',
    tagline: false,
    layout: 'horizontal',
    fundingicons: true,
  },
  funding: {
    allowed: [
      paypal.FUNDING.CARD,
    ],
    disallowed: [
      paypal.FUNDING.CREDIT,
    ],
  },
  // Wait for the PayPal button to be clicked
  payment: function(data, actions) {
    // Make a call to create the payment
    return actions.payment.create({
      payment: {
        transactions: [
          {
            amount: {
              total: '0.01',
              currency: 'USD',
            },
          },
        ],
      },
      experience: {
        input_fields: {
          no_shipping: 0,
        },
      },
    });
  },
  // Wait for the payment to be authorized by the customer
  onAuthorize: function(data, actions) {
    return actions.payment.tokenize().then(function(data) {
      console.log('Braintree nonce:', data.nonce);
    });
  },
}, '#paypal-button-container');
</script>


{{-- <script src="https://js.braintreegateway.com/web/3.41.0/js/client.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.41.0/js/hosted-fields.min.js"></script>
<script>
braintree.client.create({
  authorization: '{{ $clientToken }}'
}, function (clientErr, clientInstance) {
  if (clientErr) {
    console.log();
    return;
  }

  console.log(clientErr);
  console.log(clientInstance);
});
</script> --}}


{{--
braintree.client.create(...) --------> Client ─┐
                         ┌─────────────────────┤
braintree.paypal.create(...) --------> PayPal  │
                               ┌───────────────┘
braintree.hostedFields.create(...) --> HostedFields
--}}
