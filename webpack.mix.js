const mix = require('laravel-mix');
const dashboard_prefix = 'dashboard';

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js');
// mix.sass('resources/sass/app.scss', 'public/css');
// mix.js('resources/js/app.js', 'public/js').sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/'+ dashboard_prefix +'/admin.js', 'public/vendor/'+ dashboard_prefix +'/js');
// mix.sass('resources/sass/'+ dashboard_prefix +'/admin.scss', 'public/vendor/'+ dashboard_prefix +'/css');
// mix.js('resources/js/'+ dashboard_prefix +'/admin.js', 'public/vendor/'+ dashboard_prefix +'/js').sass('resources/sass/'+ dashboard_prefix +'/admin.scss', 'public/vendor/'+ dashboard_prefix +'/css');
