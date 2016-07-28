var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.styles([
        // '../../../node_modules/bootstrap/dist/css/bootstrap.css',
        // '../../../node_modules/bootstrap-material-design/dist/css/bootstrap-material-design.css',
        // '../../../node_modules/bootstrap-material-design/dist/css/ripples.css',
        // '../../../css/demo.css',
        // '../../../node_modules/material-design-lite/dist/material.css'
        '../css/bootstrap.min.css',
        '../css/material-kit.css',
        '../css/material.css',
        '../css/demo.css'
    ], 'public/css/styles.css');

    // mix.sass('app.scss');
    mix.scripts([
        // '../../../node_modules/jquery/dist/jquery.js',
        // '../../../node_modules/bootstrap/dist/js/bootstrap.js',
        // '../../../node_modules/bootstrap-material-design/dist/js/material.js'
        '../js/jquery.min.js',
        '../js/bootstrap.min.js',
        '../js/material.min.js',
        '../css/material.min.js',
        '../js/nouislider.min.js',
        '../js/bootstrap-datepicker.js',
        '../js/material-kit.js'
    ], 'public/js/scripts.js');

    mix.browserify('main.js');

    elixir(function(mix) {
        mix.browserSync({
            proxy: 'localhost:8000'
        });
    });

});
