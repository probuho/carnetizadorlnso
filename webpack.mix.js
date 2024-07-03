const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css')
   .sass('public/scss/style.scss', 'public/css')
   .sass('public/scss/bootstrap/scss/bootstrap.scss', 'public/css');
//    .options({
//        processCssUrls: false
//    });

// Otras configuraciones de Laravel Mix...
