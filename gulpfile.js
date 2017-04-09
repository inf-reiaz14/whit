var elixir = require('laravel-elixir');
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');

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
    mix.sass([
        'flaticons.scss',  
        'animate.scss',  
        'simple-line-icons.scss',  
        'slider-pro.min.scss',
        'isotope.scss',
        'magnific-popup.scss',
        'yamm.scss',
        'owl.carousel.scss',
        'owl.theme.scss',
        'owl.transitions.scss',
        'theme.scss',
        'responsive.scss',
        'debugging.scss',  
        'style.scss',
        'custom2.scss',
        'responsive.sass',
        'whit-backend.sass'
    ]);
});


elixir(function(mix) {
    mix.scripts([
        'jquery.lazyloadxt.min.js',
        'modernizr.custom.js',
        'azexo_reveals.min.js',
        'azexo_transitions.min.js',
        'easejs.js',
        'tweenjs.js',
        'jquery.sliderPro.min.js',
        'jquery.isotope.min.js',
        'owl.carousel.min.js',
        'jquery.shuffleLetters.js',
        'jquery.tickertype.js',
        'scrollreveal.min.js',
        'waypoints.min.js',
        'jquery.magnific-popup.js',
        'metisMenu.min.js',
        'jquery.form-validator.min.js',
        'classie.js',
        'cssua.min.js',
        'theme-custom.js',
        'custom.front.js',
    ]);
});
