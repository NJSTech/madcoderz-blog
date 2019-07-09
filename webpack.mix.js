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

mix.sass('resources/sass/app.scss', 'public/css/app.css')
      .combine([
            'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
            'node_modules/owl.carousel/dist/assets/owl.theme.default.min.css'
      ],'public/css/all.css')
       .styles('resources/sass/custom.css', 'public/css/custom.css')
       .js('resources/js/app.js','public/js/app.js')
      .js([
            'node_modules/owl.carousel/dist/owl.carousel.min.js', 
            'node_modules/imagesloaded/imagesloaded.pkgd.js' 
      ],'public/js/all.js')
      .js([
            'resources/js/custom.js',
            'resources/js/home.js'
      ],'public/js/custom.js');
