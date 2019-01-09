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
?><html>
<head>
  <meta charset="UTF-8">
  <title>BraintreePHPExample</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
  <form action="/" id="my-sample-form" method="post" autocomplete="off">
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
          <label for="cvv">Secure code CVV</label>
          <div class="form-control" id="cvv"></div>
        </div>
      </div>
    </div>





    <input class="btn btn-primary btn-lg" type="submit" value="Pay" disabled>
  </form>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  <script src="https://js.braintreegateway.com/web/3.41.0/js/client.min.js"></script>
  <script src="https://js.braintreegateway.com/web/3.41.0/js/hosted-fields.min.js"></script>
  <script>
  var form = document.querySelector('#my-sample-form');
  var submit = document.querySelector('input[type="submit"]');

  braintree.client.create({
    authorization: '<?php echo $clientToken; ?>'
  }, function (clientErr, clientInstance) {
    if (clientErr) {
      console.error(clientErr);
      return;
    }

    // You can also use this client instance to create additional components
    // here, such as PayPal or Data Collector.

    braintree.hostedFields.create({
      client: clientInstance,
      fields: {
        number: {
          selector: '#card-number',
          placeholder: '4111 1111 1111 1111'
        },
        cvv: {
          selector: '#cvv',
          placeholder: '123'
        },
        expirationDate: {
          selector: '#expiration-date',
          placeholder: '10/2019'
        }
      }
    }, function (hostedFieldsErr, hostedFieldsInstance) {
      if (hostedFieldsErr) {
        console.error(hostedFieldsErr);
        return;
      }

      hostedFieldsInstance.on('empty', function (event) {
        console.log(event.emittedBy, 'is now empty');
        return;
      });

      hostedFieldsInstance.on('validityChange', function (event) {
        var field = event.fields[event.emittedBy];

        if (field.isValid) {
          console.log(event.emittedBy, 'is fully valid');
        } else if (field.isPotentiallyValid) {
          console.log(event.emittedBy, 'is potentially valid');
        } else {
          console.log(event.emittedBy, 'is not valid');
        }
      });


      hostedFieldsInstance.on('cardTypeChange', function (event) {
        if (event.cards.length === 1) {
          console.log(event.cards[0].type);
        } else {
          console.log('Type of card not yet known');
        }
      });

      hostedFieldsInstance.on('inputSubmitRequest', function () {
        event.preventDefault();
        submit.removeAttribute('disabled');

        submit.click();
      });

      submit.removeAttribute('disabled');

      form.addEventListener('submit', function (event) {
        event.preventDefault();

        var state = hostedFieldsInstance.getState();
        var formValid = Object.keys(state.fields).every(function (key) {
          return state.fields[key].isValid;
        });

        if (formValid) {
          hostedFieldsInstance.tokenize(function (tokenizeErr, payload) {
            if (tokenizeErr) {
              console.error(tokenizeErr);
              return;
            }

            // If this was a real integration, this is where you would
            // send the nonce to your server.
            console.log('Got a nonce: ' + payload.nonce);
          });
        } else {
          // Let the customer know their fields are invalid
          console.log('One or more of your fields are invalid');
        }
      }, false);
    });
  });
  </script>
</body>
</html>
