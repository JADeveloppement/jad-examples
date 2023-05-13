let mix = require('laravel-mix');

require ('mix-tailwindcss');
require('browser-sync');

mix.js('resources/js/jadeveloppement/app.js', 'public/js/jadeveloppement')
.js('resources/js/jadeveloppement/app_index.js', 'public/js/jadeveloppement')
.sass('resources/scss/jadeveloppement/global.scss', 'public/css/jadeveloppement')
.sass('resources/scss/jadeveloppement/app.scss', 'public/css/jadeveloppement')
.sass('resources/scss/jadeveloppement/app_index.scss', 'public/css/jadeveloppement')
.sass('resources/scss/jadeveloppement/app_conf.scss', 'public/css/jadeveloppement')
.js('resources/js/jadeveloppement/app_contact.js', 'public/js/jadeveloppement')
.sass('resources/scss/jadeveloppement/app_contact.scss', 'public/css/jadeveloppement')
.js('resources/js/democrite/app_index.js', 'public/js/democrite')
.sass('resources/scss/democrite/app_index.scss', 'public/css/democrite')
.js('resources/js/democrite/app_profil.js', 'public/js/democrite')
.sass('resources/scss/democrite/app_profil.scss', 'public/css/democrite')
.js('resources/js/ada/app_index.js', 'public/js/ada')
.sass('resources/scss/ada/app_index.scss', 'public/css/ada')
.tailwind('./tailwind.config.js')
.browserSync({
    proxy: 'localhost:8000',
    notify: false
 });
