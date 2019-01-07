
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });


$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function (evt) {
    evt.preventDefault();
    evt.stopPropagation();

    var self = $(this);
    var data_target = get_target(self);
    if (data_target) {
      $('.backdrop').toggleClass('show');
      $(data_target).toggleClass('open');
    }
  });

  $('.backdrop').on('click', function (evt) {
    evt.preventDefault();
    evt.stopPropagation();

    var self = $(this);
    $(self).toggleClass('show');
    $('.offcanvas.open').toggleClass('open');
  });

  /* $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas').toggleClass('open');
  }); */

  var nua = navigator.userAgent;
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1);
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%');
  }
});
