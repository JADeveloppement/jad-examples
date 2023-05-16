const mix = require('laravel-mix');
const path = require("path");

require ('mix-tailwindcss');
require('browser-sync');

mix.js('resources/js/jadeveloppement/app.js', 'public/js/jadeveloppement')
.js('resources/js/jadeveloppement/app_index.js', 'public/js/jadeveloppement')
.js('resources/js/jadeveloppement/app_footer.js', 'public/js/jadeveloppement')
.js('resources/js/jadeveloppement/app_contact.js', 'public/js/jadeveloppement')
.js('resources/js/democrite/app_index.js', 'public/js/democrite')
.js('resources/js/democrite/app_profil.js', 'public/js/democrite')
.js('resources/js/ada/app_index.js', 'public/js/ada')
.js('resources/js/twitch/app_index.js', 'public/js/twitch')
.setPublicPath('public')
.sass('resources/scss/jadeveloppement/global.scss', 'public/css/jadeveloppement')
.sass('resources/scss/jadeveloppement/app.scss', 'public/css/jadeveloppement')
.sass('resources/scss/jadeveloppement/app_index.scss', 'public/css/jadeveloppement')
.sass('resources/scss/jadeveloppement/app_conf.scss', 'public/css/jadeveloppement')
.sass('resources/scss/jadeveloppement/app_contact.scss', 'public/css/jadeveloppement')
.sass('resources/scss/democrite/app_index.scss', 'public/css/democrite')
.sass('resources/scss/democrite/app_profil.scss', 'public/css/democrite')
.sass('resources/scss/ada/app_index.scss', 'public/css/ada')
.sass('resources/scss/twitch/app_index.scss', 'public/css/twitch')
.tailwind('./tailwind.config.js')
.browserSync({
    proxy: 'localhost:8000',
    notify: false
 })
 .webpackConfig({
    resolve: {
        alias: {
            'jquery': path.resolve(__dirname, 'node_modules/jquery/dist/jquery.js')
        }
    }
 });
