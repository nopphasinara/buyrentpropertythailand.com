@extends(''. config('custom.dashboard_prefix') .'.layout.app')
@section('content')
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
    'paypal' => [
      'client_id' => 'Aa4j99CP5SiKq8VEWl1bHCBLGi0Pwk3ulfaX1JXn_DoKGBVSYX4TNqKfk8TmNR4YJ7aCIvMF7u8yunrX',
    ],
  ],
];

$appEnv = 'sandbox';

$merchant = $environment[''. $appEnv .''];

$config = new Braintree\Configuration([
  'environment' => ''. $appEnv .'',
  'merchantId' => $merchant['id'],
  'publicKey' => $merchant['public_key'],
  'privateKey' => $merchant['private_key'],
]);
$config->timeout(60);

$gateway = new Braintree_Gateway($config);

$clientToken = $gateway->clientToken()->generate();

/*

use Omnipay\Omnipay;

$gateway = Omnipay::create('Stripe');
$gateway->setApiKey('sk_test_EtqkkBa5ZhdHXgWJsQHqCOY5');
$formData = array('number' => '4242424242424242', 'expiryMonth' => '6', 'expiryYear' => '2030', 'cvv' => '123');
$response = $gateway->purchase(array('amount' => '10', 'currency' => 'USD', 'card' => $formData))->send();

if ($response->isRedirect()) {
    // redirect to offsite payment gateway
    $response->redirect();
} elseif ($response->isSuccessful()) {
    // payment was successful: update database
    print_r($response);
} else {
    // payment failed: display message to customer
    echo $response->getMessage();
}

*/
?>


<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
paypal.Button.render({
  env: 'sandbox',
  client: {
    sandbox: '<?php echo $merchant['paypal']['client_id']; ?>'
  },
  payment: function() {
    var env    = this.props.env;
    var client = this.props.client;
    return paypal.rest.payment.create(env, client, {
      transactions: [
        {
          amount: {
            total: '1.00',
            currency: 'USD',
          },
        },
      ],
    });
  },
  commit: true,
  onAuthorize: function(data, actions) {
    // Optional: display a confirmation page here
    console.log('confirmed');

    return actions.payment.execute().then(function() {
      // Show a success page to the buyer
      console.log('success');
    });
  }
}, '#paypal-button');
</script>


<!-- <form id="my-sample-form" action="/" method="post">
  <div class="container">
    <div class="row">
      <div class="form-group col-12">
        <label for="card-number">Card Number</label>
        <div class="form-control" id="card-number"></div>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-6">
        <label for="expiration-date">Expiration Date</label>
        <div class="form-control" id="expiration-date"></div>
      </div>
      <div class="form-group col-6">
        <label for="cvv">CVV</label>
        <div class="form-control" id="cvv"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <button class="btn btn-primary btn-lg" type="submit">
          Checkout now
        </button>
      </div>
    </div>
  </div>
</form>

<script src="https://js.braintreegateway.com/web/3.41.0/js/client.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.41.0/js/hosted-fields.min.js"></script>
<script>
var form = document.querySelector('#my-sample-form');
var submitButton = document.querySelector('button[type="submit"]');

braintree.client.create({
  authorization: '{{ $clientToken }}'
}, function (clientErr, clientInstance) {
  if (clientErr) {
    console.error(clientErr);
    return;
  }

  // This example shows Hosted Fields, but you can also use this
  // client instance to create additional components here, such as
  // PayPal or Data Collector.

  braintree.hostedFields.create({
    client: clientInstance,
    fields: {
      number: {
        label: 'Card number',
        selector: '#card-number',
        placeholder: ''
      },
      cvv: {
        label: 'Secure code',
        selector: '#cvv',
        placeholder: 'CVV'
        },
      expirationDate: {
        label: 'Expiration date',
        selector: '#expiration-date',
        placeholder: 'MM/YYYY'
      }
    }
  }, function (hostedFieldsErr, hostedFieldsInstance) {
    if (hostedFieldsErr) {
      console.error(hostedFieldsErr);
      return;
    }

    var cvvLabel = document.querySelector('label[for="cvv"]');

    hostedFieldsInstance.on('cardTypeChange', function (event) {
      // var cvvText;
      //
      // if (event.cards.length === 1) {
      //   cvvText = event.cards[0].code.name;
      // } else {
      //   cvvText = 'CVV';
      // }
      //
      // cvvLabel.innerHTML = cvvText;
      hostedFieldsInstance.setAttribute({
        field: 'cvv',
        attribute: 'value',
        value: ''
      });
    });

    submitButton.removeAttribute('disabled');

    form.addEventListener('submit', function (event) {
      event.preventDefault();

      var state = hostedFieldsInstance.getState();
      var formValid = Object.keys(state.fields).every(function (key) {
        return state.fields[key].isValid;
      });

      if (formValid) {
        // Tokenize Hosted Fields
        hostedFieldsInstance.tokenize({
          // cardholderName: 'First Last',
          billingAddress: {
            firstName: 'First',
            lastName: 'Last',
            company: 'Company',
            streetAddress: '123 Street',
            extendedAddress: 'Unit 1',
            countryCodeAlpha3: 'USA',
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
            var inputNonce = document.createElement('input');
            inputNonce.setAttribute('type', 'hidden');
            inputNonce.setAttribute('name', 'payment_method_nonce');
            inputNonce.setAttribute('value', payload.nonce);

            form.appendChild(inputNonce);

            console.log('Got nonce:', payload.nonce);
          }
        });
      } else {
        // Let the customer know their fields are invalid
        console.log('Fields invalid');
      }
    }, false);
  });
});
</script> -->


<!-- <div id="paypal-button"></div>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>
    paypal.Button.render({
        env: 'production', // Optional: specify 'sandbox' environment
        client: {
            sandbox:    'AWi18rxt26-hrueMoPZ0tpGEOJnNT4QkiMQst9pYgaQNAfS1FLFxkxQuiaqRBj1vV5PmgHX_jA_c1ncL',
            production: 'AVZhosFzrnZ5Mf3tiOxAD0M6NHv8pcB2IFNHAfp_h69mmbd-LElFYkJUSII3Y0FPbm7S7lxBuqWImLbl'
        },
        payment: function() {
            var env    = this.props.env;
            var client = this.props.client;
            return paypal.rest.payment.create(env, client, {
                transactions: [
                    {
                        amount: { total: '1', currency: 'USD' }
                    }
                ]
            });
        },
        commit: true, // Optional: show a 'Pay Now' button in the checkout flow
        onAuthorize: function(data, actions) {
            // Optional: display a confirmation page here
            return actions.payment.execute().then(function() {
                // Show a success page to the buyer
            });
        }
    }, '#paypal-button');
</script> -->


<!-- <div id="paypal-button"></div>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>
    paypal.Button.render({
        env: 'sandbox', // Optional: specify 'sandbox' environment
        client: {
            sandbox:    'AWi18rxt26-hrueMoPZ0tpGEOJnNT4QkiMQst9pYgaQNAfS1FLFxkxQuiaqRBj1vV5PmgHX_jA_c1ncL',
            production: '<insert production client id>'
        },
        payment: function() {
            var env    = this.props.env;
            var client = this.props.client;
            return paypal.rest.payment.create(env, client, {
                transactions: [
                    {
                        amount: { total: '1', currency: 'USD' }
                    }
                ]
            });
        },
        commit: true, // Optional: show a 'Pay Now' button in the checkout flow
        onAuthorize: function(data, actions) {
            // Optional: display a confirmation page here
            return actions.payment.execute().then(function() {
                // Show a success page to the buyer
            });
        }
    }, '#paypal-button');
</script> -->


<!-- <form id="payment-form" action="/charge" method="post" autocomplete="off">
  <div class="container">
    <div class="row">
      <div class="form-group col-12">
        <label for="card-element">Card number</label>
        <div class="form-control" id="card-element"></div>
        <div class="alert alert-danger d-none" id="card-errors" role="alert"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <button class="btn btn-primary btn-lg">
          Checkout now
        </button>
      </div>
    </div>
  </div>
</form>

<script src="https://js.stripe.com/v3/"></script>
<script>
var stripe = Stripe('pk_test_vUPBLGvWxRhi6ZXPibttjJIM');

var elements = stripe.elements();
var card = elements.create('card', {
  style: {
    base: {
      color: '#32325d',
      lineHeight: '18px',
      fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
      fontSmoothing: 'antialiased',
      fontSize: '16px',
      '::placeholder': {
        color: '#aab7c4'
      }
    },
    invalid: {
      color: '#fa755a',
      iconColor: '#fa755a'
    }
  },
});

card.mount('#card-element');
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

var form = document.getElementById('payment-form');

form.addEventListener('submit', function(event) {
  var errorElement = document.getElementById('card-errors');
  errorElement.classList.add('d-none');

  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      errorElement.textContent = result.error.message;
      errorElement.classList.remove('d-none');
      console.log(result);
    } else {
      stripeTokenHandler(result.token);
      errorElement.classList.add('d-none');
      console.log(result);
    }
  });
});

function stripeTokenHandler(token)
{
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');

  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);

  console.log(token.id);

  form.appendChild(hiddenInput);
  form.submit();
}
</script> -->
@endsection
