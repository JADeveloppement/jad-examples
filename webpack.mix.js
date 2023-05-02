let mix = require('laravel-mix');

require ('mix-tailwindcss');

mix.js('resources/js/app.js', 'public/js')
.sass('resources/scss/app.scss', 'public/css').tailwind('./tailwind.config.js');
