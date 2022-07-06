const mix = require("laravel-mix");
const webpackConfig = require("./webpack.config");

mix.js("resources/js/app.js", "public/js")
    .webpackConfig(webpackConfig).sass("resources/sass/app.scss", "public/css")
    .version()
    .sourceMaps();
