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
//my own edit of the original gulp file setup
// elixir(function(mix) {
//     mix.sass('app.scss', 'public/assets/css');
//
//
// });
elixir(function(mix){
  var bootstrapPath = 'node_modules/bootstrap-sass/assets';
  var jqueryPath = 'node_modules/jquery/dist';

    mix.sass('app.scss')
    .browserSync({
      proxy:'afyafitness.dev'
    })
    .scripts(['main.js'])
    .copy(bootstrapPath + '/fonts', 'public/fonts')
    .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js')
    .copy(jqueryPath + 'jquery.min.js', 'public/js');
});
