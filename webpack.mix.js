const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js([
        'node_modules/admin-lte/plugins/jquery-ui/jquery-ui.js',
        'node_modules/admin-lte/plugins/chart.js/Chart.min.js',
        'node_modules/admin-lte/plugins/sparklines/sparkline.js',
        'node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js',
    ],'public/js/vendor.js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles(['node_modules/admin-lte/plugins/fontawesome-free/css/all.css',
          'node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css',
          'node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
          'node_modules/admin-lte/plugins/jqvmap/jqvmap.min.css',
          'node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
          'node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css',
          'node_modules/admin-lte/plugins/summernote/summernote-bs4.css',
    ],'public/css/plugins.css')
    .copy('node_modules/admin-lte/plugins/fontawesome-free/webfonts','public/webfonts')
    .copy('node_modules/admin-lte/dist/img','public/img')
    .browserSync('http://adminlte-generator.test/');

