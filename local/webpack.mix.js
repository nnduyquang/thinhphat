const {mix} = require('laravel-mix');
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
    ], '../js/core.frontend.js')
    .sass('resources/assets/sass/frontend.scss', '../../css/frontend.css').options({processCssUrls: false})
    .styles('resources/assets/js/scripts.js', '../js/scripts.js')
    .copy([
        'bower_components/bootstrap/fonts/**',
        'bower_components/font-awesome/fonts/**'
    ], '../fonts')
    .styles([
        'bower_components/nivo-slider/nivo-slider.css',
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
    .styles([
        'resources/assets/sass/be.common.scss',
        'resources/assets/sass/be.category.scss',
        'resources/assets/sass/be.product.scss',
    ], '../css/backend.css')
    .styles([
        'resources/assets/js/ulti.js',
        'resources/assets/js/be.category.js',
        'resources/assets/js/be.product.js',
        'resources/assets/js/be.page.js',
        'resources/assets/js/be.catalogue.js',
    ], '../js/backend.js')
    .styles([
        'resources/assets/js/ulti.js',
        'resources/assets/js/login.js',
    ], '../js/login.js')
    .styles([
        'resources/assets/sass/be.login.scss',
    ], '../css/login.css')
// CKEDITOR CHỈ CHẠY ĐOẠN NÀY 1 LẦN
// ===================
.copy('bower_components/ckeditor/adapters', '../js/ckeditor/adapters',false)
.copy('bower_components/ckeditor/lang', '../js/ckeditor/lang',false)
.copy('bower_components/ckeditor/skins', '../js/ckeditor/skins',false)
.copy([
    'bower_components/ckeditor/ckeditor.js',
    'bower_components/ckeditor/config.js',
    'bower_components/ckeditor/contents.css',
    'bower_components/ckeditor/styles.js'
], '../js/ckeditor',false)
.copy('bower_components/ckeditor/plugins', '../js/ckeditor/plugins',false)
////////////////////////////////////////////////////////////////////////////////////////////////
