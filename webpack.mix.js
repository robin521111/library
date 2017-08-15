const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
 
mix.js('resources/assets/js/app.js', 'public/js')
mix.js('resources/assets/js/vue.js','public/js/')
mix.sass('resources/assets/sass/app.scss', 'public/css')
<<<<<<< HEAD
mix.js('resources/assets/js/chart.js', 'public/js/')
mix.js('resources/assets/js/easing.js','public/js/')
mix.js('resources/assets/js/circles.js','public/js/')
mix.js('resources/assets/js/move-top.js','public/js/')
mix.styles(['vendor/kartik-v/bootstrap-fileinput/css/fileinput-rtl.min.css','vendor/kartik-v/bootstrap-fileinput/css/fileinput.min.css'],'public/css/all.css')
mix.js('vendor/kartik-v/bootstrap-fileinput/js/fileinput.min.js','public/js/')
mix.js('vendor/kartik-v/bootstrap-fileinput/js/plugins/piexif.min.js','public/js/')
mix.js('vendor/kartik-v/bootstrap-fileinput/js/plugins/purify.min.js','public/js/')
mix.js('vendor/kartik-v/bootstrap-fileinput/js/plugins/sortable.min.js','public/js/')

// mix.styles([
//     'resources/assets/css/all.css',
//     'resources/assets/css/style.css',
// ], 'public/css/app.css')
=======
mix.js('resources/assets/js/canvasChat.js','public/js')
mix.js('resources/assets/js/vue.js','public/js')
>>>>>>> origin/master
