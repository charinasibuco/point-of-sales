let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .combine([
        'resources/assets/vendors/jquery-3.2.1.slim.min.js',
        'resources/assets/vendors/popper.min.js',
        'resources/assets/vendors/bootstrap-v4.0.0-beta/js/bootstrap.min.js',
    ], 'public/js/vendors.js')

	.combine([
        'resources/assets/vendors/bootstrap-v4.0.0-beta/css/bootstrap.min.css',
    ], 'public/css/vendors.css')
   .sass('resources/assets/sass/app.scss', 'public/css')

   .copyDirectory('resources/assets/img', 'public/img')
   .version();
