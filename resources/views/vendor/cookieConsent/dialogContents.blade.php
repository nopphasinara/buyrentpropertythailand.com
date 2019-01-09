<div class="position-absolute fixed-bottom opacity-3-warning js-cookie-consent cookie-consent">

    <div class="container-fluid">
      <div class="row d-flex align-items-center py-3">
        <div class="col">
          <span class="cookie-consent__message">
              {!! trans('cookieConsent::texts.message') !!}
          </span>
        </div>
        <div class="col-auto">
          <button class="btn btn-success js-cookie-consent-agree cookie-consent__agree">
              {{ trans('cookieConsent::texts.agree') }}
          </button>
        </div>
      </div>
    </div>

</div>
