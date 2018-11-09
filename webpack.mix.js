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
mix.js([
        'resources/assets/js/app.js',
        'resources/assets/js/jquery.js',
        'resources/assets/js/jquery.easing.js',
        'resources/assets/js/stylish-portfolio.js',
        'resources/assets/js/home.js',
        'resources/assets/js/viewportchecker.js'
    ], 'public/js/app.js')
    .styles([
        'public/css/all.css',
        'resources/assets/css/animate.css',
        'resources/assets/css/all.css',
        'resources/assets/css/simple-line-icons.css',
        'resources/assets/css/stylish-portfolio.css'
    ], 'public/css/app.css');
// mix.sass('resources/assets/sass/app.scss', 'css/all.css');
