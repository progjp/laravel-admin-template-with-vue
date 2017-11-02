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

/**
 * Admin CSS and JS
 */
mix.js('resources/assets/js/admin/default-scripts.js', 'public/js/admin');

mix.sass('resources/assets/sass/admin/style.scss', 'public/css/admin');
