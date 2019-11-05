const mix = require('laravel-mix');

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
 mix.styles([
   'resources/sass/plantilla/font-awesome.min.css',
   'resources/sass/plantilla/simple-line-icons.min.css',
   'resources/sass/plantilla/style.css'
 ], 'public/css/plantilla.css');
 mix.scripts([
   'resources/js/plantilla/jquery.min.js',
   'resources/js/plantilla/popper.min.js',
   'resources/js/plantilla/bootstrap.min.js',
   'resources/js/plantilla/pace.min.js',
   'resources/js/plantilla/Chart.min.js',
   'resources/js/plantilla/template.js',
   'resources/js/plantilla/sweetalert2.all.min.js'
], 'public/js/plantilla.js')

.js(['resources/js/app.js'],'public/js/app.js');
//mix.js('resources/js/app.js', 'public/js/app.js');
