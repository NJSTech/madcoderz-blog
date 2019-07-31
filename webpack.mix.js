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
            'node_modules/owl.carousel/dist/assets/owl.theme.default.min.css',
            'node_modules/metismenu/dist/metisMenu.min.css',
            'node_modules/sweetalert2/dist/sweetalert2.min.css',
            'node_modules/select2/dist/css/select2.min.css',
      ],'public/css/all.css')
      .styles('resources/sass/custom.css', 'public/css/custom.css')
      .styles('resources/sass/admin-style.css', 'public/css/admin-style.css')
      .js('resources/js/app.js','public/js/app.js')
      .js([
            'node_modules/owl.carousel/dist/owl.carousel.min.js', 
            'node_modules/imagesloaded/imagesloaded.pkgd.js', 
            'node_modules/jquery-slimscroll/jquery.slimscroll.min.js', 
            'node_modules/metismenu/dist/metisMenu.min.js',
            'node_modules/sweetalert2/dist/sweetalert2.min.js', 
            'node_modules/select2/dist/js/select2.min.js',
      ],'public/js/all.js')
      
      .js([
            'resources/js/custom.js',
            'resources/js/home.js',
            'resources/js/comment.js'
      ],'public/js/custom.js')
      .js([
            'resources/js/admin-script.js',
            'resources/js/dashboard.js',
            'resources/js/category.js',
            'resources/js/tag.js',
            'resources/js/post-destroy.js'
      ],'public/js/admin-script.js')
      .js('resources/js/post.js','public/js/post.js');
