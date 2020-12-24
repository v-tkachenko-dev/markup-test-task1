const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js('resources/js/app.js', 'public/js')
  .sass('resources/css/app.scss', 'public/css', [])
  .copy('resources/js/bs-stepper.min.js', 'public/js')
  .copy('resources/css/bs-stepper.min.css', 'public/css')
  // .browserSync({
  //     proxy: 'http://localhost:8080/',
  //     files: [
  //         'public/**/*',
  //     ]
  // })
  ;
