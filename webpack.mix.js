// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'js/app.js')
    .postCss('src/app.css', 'style.css', [
        require('tailwindcss'),
        require('autoprefixer'),
      ]);