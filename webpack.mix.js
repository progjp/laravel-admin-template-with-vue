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

// Home Page
mix.js('resources/assets/js/admin/pages/home.js', 'public/js/admin');

// Posts Page
mix.js('resources/assets/js/admin/pages/table.js', 'public/js/admin');

// Forms Page
mix.js('resources/assets/js/admin/pages/form.js', 'public/js/admin');

// CSS
mix.sass('resources/assets/sass/admin/style.scss', 'public/css/admin');
