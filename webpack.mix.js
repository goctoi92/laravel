const mix = require('laravel-mix');
var dirJs = 'resources/js/';
var dirScss = 'resources/sass/';
var dirOutJs = 'public/js/';
var dirOutScss = 'public/css/';


mix.copyDirectory('resources/assets/images', 'public/images');

mix.js(dirJs + 'app.js', dirOutJs)
    .sass(dirScss + 'app.scss', dirOutScss);

mix.js(dirJs + 'page/index.page.js', dirOutJs + 'application')
    .sass(dirScss + 'page/index.scss', dirOutScss + 'application');
