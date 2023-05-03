let mix = require('laravel-mix');

require ('mix-tailwindcss');
require('browser-sync');

mix.js('resources/js/app.js', 'public/js')
.sass('resources/scss/app.scss', 'public/css').tailwind('./tailwind.config.js')
.browserSync({
    proxy: 'localhost:8000',
    notify: false
 });;
