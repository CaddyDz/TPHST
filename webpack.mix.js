let mix = require('laravel-mix');

if (mix.inProduction()) {
    mix.js('resources/assets/js/app.js', 'public/js')
       .styles([
            'resources/assets/css/app.css',
            'resources/assets/css/responsive.css',
            'resources/assets/vendor/css/flaticon.css',
            'resources/assets/vendor/css/icon.css',
         ], 'public/css/app.min.css').version();
} else {
    mix.js('resources/assets/js/app.js', 'public/js')
       .styles([
            'resources/assets/css/app.css',
            'resources/assets/vendor/css/flaticon.css',
            'resources/assets/vendor/css/icon.css',
         ], 'public/css/app.css')
         .copy(
             'resources/assets/css/responsive.css', 'public/css/responsive.css'
            );
}
