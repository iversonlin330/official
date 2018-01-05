var elixir = require('laravel-elixir');

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
    //mix.sass('app.scss');
    mix.copy('bower_components/bootstrap/dist/fonts', 'public/assets/fonts');
    mix.copy('bower_components/font-awesome/fonts', 'public/assets/fonts');
    mix.styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.css',
        'bower_components/datatables.net-bs/css/datatables.bootstrap.min.css',
        'resources/css/sb-admin-2.css',
    ], 'public/assets/stylesheets/styles.css', './');
    mix.scripts([
        'bower_components/jquery/dist/jquery.min.js',
        'bower_components/bootstrap/dist/js/bootstrap.js',
		'bower_components/metisMenu/dist/metisMenu.js',
        'bower_components/datatables.net/js/jquery.datatables.min.js',
        'bower_components/datatables.net-bs/js/datatables.bootstrap.min.js',
		'resources/js/sb-admin-2.js',
    ], 'public/assets/scripts/frontend.js', './');
});
