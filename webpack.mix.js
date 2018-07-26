let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/vendor/jquery-1.12.4.min.js')
   .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js')
   .copy('node_modules/jquery.stellar/jquery.stellar.js', 'public/js/jquery.stellar.min.js')
   .copy('node_modules/magnific-popup/dist/jquery.magnific-popup.min.js', 'public/js/magnific.min.js')
   .copy('node_modules/venobox/venobox/venobox.min.js', 'public/js/venobox.min.js')
   .copy('node_modules/bootstrap-validator/dist/validator.min.js', 'public/js/form-validator.min.js');

if (mix.inProduction()) {
    mix.version();
}
