const mix = require('laravel-mix');

mix
    .sass('resource/css/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js')
