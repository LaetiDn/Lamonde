let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.setPublicPath('dist')

mix.js('assets/js/app.js', 'dist/js/theme.min.js')
mix.sass('assets/sass/style.scss', 'dist/css/theme.css')

//mix.sass('assets/sass/woocommerce.scss', 'dist/css');

mix.browserSync({
    proxy: 'http://localhost',
    files: [
        "dist/css/theme.css",
        "dist/js/app.js",
        //"dist/css/woocommerce.css",
    ]
})

// Autoprefixer
// Exemple d'ajout de autoprefixer dans webpack.mix : https://laravel-mix.com/docs/5.0/css-preprocessors
// mix.sass('assets/sass/style.scss', 'dist/css/theme.css')
//    .options({
//         autoprefixer: {
//             options: {
//                 browsers: [
//                     'last 6 versions',
//                 ]
//             }
//         }
//    });
// La bonne pratique est maintenant de le mettre dans package.json : https://github.com/browserslist/browserslist#readme