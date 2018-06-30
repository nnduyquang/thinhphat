const {mix} = require('laravel-mix');
const webpack = require('webpack');

//...
plugins: [
    new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery'
    }),
],
//...
mix.styles([
    //JS DÙNG CHUNG CHO FRONEND VÀ BACKEND
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
], '../js/core.common.js')
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
    ], '../css/core.common.css')
    //FRONTEND
    .styles([
        'bower_components/nivo-slider/jquery.nivo.slider.pack.js',
        'bower_components/owl.carousel/dist/owl.carousel.js',
    ], '../js/core.frontend.js')
    .sass('resources/assets/sass/frontend.scss', '../../css/frontend.css').options({processCssUrls: false})
    .styles('resources/assets/js/scripts.js', '../js/scripts.js')
    .copy([
        'bower_components/bootstrap/fonts/**',
        'bower_components/font-awesome/fonts/**'
    ], '../fonts')
    .styles([
        'bower_components/nivo-slider/nivo-slider.css',
        'bower_components/owl.carousel/dist/assets/owl.carousel.css',
        'bower_components/owl.carousel/dist/assets/owl.theme.default.css',
    ], '../css/core.frontend.css')
    .copy([
        'bower_components/nivo-slider/themes',
    ], '../css/themes', false)
    // =============================================================
    // BACKEND
    .styles([
        'bower_components/Ionicons/css/ionicons.min.css',
        'bower_components/admin-lte/dist/css/AdminLTE.min.css',
        'bower_components/admin-lte/dist/css/skins/skin-blue.min.css',
        'bower_components/bootstrap-toggle/css/bootstrap-toggle.min.css',
    ], '../css/core.backend.css')
    .styles([
        'bower_components/admin-lte/dist/js/adminlte.min.js',
        'bower_components/bootstrap-toggle/js/bootstrap-toggle.min.js',

    ], '../js/core.backend.js')
    .sass('resources/assets/sass/backend.scss', '../../css/backend.css').options({processCssUrls: false})
    .styles([
        'resources/assets/js/be.common.js',
        'resources/assets/js/be.page.js',
        'resources/assets/js/be.post.js',
        'resources/assets/js/be.menu.js',
        'resources/assets/js/be.categoryproduct.js',
    ], '../js/backend.js')
    .styles([
        'resources/assets/js/ulti.js',
    ], '../js/ulti.js')
    .styles([
        'resources/assets/js/login1.js',
    ], '../js/login.js')
    .styles([
        'resources/assets/sass/login1.scss',
    ], '../css/login.css')
    // .copy([
    //     'bower_components/font-awesome/web-fonts-with-css/webfonts/**'
    // ], '../webfonts')

