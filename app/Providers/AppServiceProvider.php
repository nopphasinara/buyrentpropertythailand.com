<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Braintree\Base as Braintree;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('*', function ($view) {
          $appenv = 'sandbox';
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
              'customer' => [
                'email' => 'admin@reproduction-galleries.com',
                'firstName' => 'John',
                'lastName' => 'Doe',
                'phone' => '+13025044218',
              ],
              'paypal_account' => 'admin-facilitator@reproduction-galleries.com',
              'paypal_client_id' => 'Aa4j99CP5SiKq8VEWl1bHCBLGi0Pwk3ulfaX1JXn_DoKGBVSYX4TNqKfk8TmNR4YJ7aCIvMF7u8yunrX',
              'paypal_secret' => 'EACaMsHpHDgICSVJUxRgAhlVq_uD4ej7QmlZn2EynfmvtIpaynq7pUHTC_LZovgGPuz000gDWB9GM2w3',
              'paypal_token' => 'access_token$sandbox$gr5vnghxztmgnz7w$a184e06be3fdfb452ff5c8e0579b6ef9',
            ],
          ];

          $merchant = $environment[$appenv];

          $config = new \Braintree\Configuration([
            'environment' => $appenv,
            'merchantId' => $merchant['id'],
            'publicKey' => $merchant['public_key'],
            'privateKey' => $merchant['private_key'],
          ]);
          $config->timeout(60);

          $gateway = new \Braintree_Gateway($config);

          $clientToken = $gateway->clientToken()->generate();

          return $view->with([
            'appenv' => $appenv,
            'environment' => $environment,
            'merchant' => $merchant,
            'gateway' => $gateway,
            'clientToken' => $clientToken,
          ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
