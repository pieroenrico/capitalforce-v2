var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir.config.assetsPath = 'themes/capital-force/assets/';
elixir.config.publicPath = 'themes/capital-force/assets/dist/';

elixir(function(mix){

    mix.sass('styles.scss');

    mix.scripts([
        'app.js'
    ]);

    mix.livereload([
        'themes/capital-force/assets/dist/css/styles.css',
        'themes/capital-force/pages/*.htm',
        'themes/capital-force/partials/*.htm',
        'themes/capital-force/assets/dist/js/*.js'
    ]);

});
