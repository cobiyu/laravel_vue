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

mix.js('resources/assets/js/service/app.js', 'public/js/service')
   .sass('resources/assets/sass/service/app.scss', 'public/css/service');

mix.js('resources/assets/js/myinfo/app.js', 'public/js/myinfo')
    .sass('resources/assets/sass/myinfo/app.scss', 'public/css/myinfo');

mix.browserSync('localhost:8000');
