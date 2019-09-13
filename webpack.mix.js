const mix = require('laravel-mix');
var dirJs = 'resources/js/';
var dirScss = 'resources/sass/';
var dirOutJs = 'public/js/';
var dirOutScss = 'public/css/';



mix.copyDirectory('resources/assets/images', 'public/images');
mix.copyDirectory('resources/assets/fonts', 'public/fonts');
mix.copyDirectory('resources/js/jquery-3.2.1.min.js', 'public/js');
mix.copyDirectory('resources/js/animsition.min.js', 'public/js');


/* -------------CAU HINH CHO APPLICATION------------------ */

mix.react(dirJs + 'app.js', dirOutJs)
    .sass(dirScss + 'app.scss', dirOutScss);

mix.js(dirJs + 'page/index.page.js', dirOutJs + 'application')
    .sass(dirScss + 'page/index.scss', dirOutScss + 'application');

/* -------------END CAU HINH CHO APPLICATION------------------ */


/* -------------CAU HINH CHO ADMIN------------------ */

mix.js(dirJs + 'admin/main.js', dirOutJs + 'admin')
    .js(dirJs + 'admin/myscript.js', dirOutJs + 'admin')
    .sass(dirScss + 'admin/theme.scss', dirOutScss + 'admin');

/* -------------END CAU HINH CHO ADMIN------------------ */