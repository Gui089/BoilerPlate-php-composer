const mix = require('laravel-mix');

mix.setPublicPath('public');

mix.css('resources/css/app.css', 'public/styles', [
    require('tailwindcss'),
]);