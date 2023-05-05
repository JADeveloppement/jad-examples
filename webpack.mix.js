let mix = require('laravel-mix');

require ('mix-tailwindcss');
require('browser-sync');

mix.js('resources/js/app.js', 'public/js')
.js('resources/js/app_index.js', 'public/js')
.sass('resources/scss/app.scss', 'public/css')
.sass('resources/scss/app_index.scss', 'public/css')
.tailwind('./tailwind.config.js')
.browserSync({
    proxy: 'localhost:8000',
    notify: false
 });
