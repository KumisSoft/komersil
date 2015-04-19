var gulp = require('gulp');
var jade = require('gulp-jade');
var elixir = require('laravel-elixir');

var buildPath = 'build';

elixir(function (mix) {

    mix.sass('app.scss')
        .styles([
            'app.css'
        ], null, 'public/css')
        .version('public/css/all.css');

    mix.scripts([
        'bower_components/foundation/js/foundation.js'
    ], null, 'resources/')
        .version('public/js/all.js');
});


gulp.task('jade', function () {
    var YOUR_LOCALS = {};

    gulp.src('resources/jade/**/*.jade')
        .pipe(jade({
            locals: YOUR_LOCALS
        }))
        .pipe(gulp.dest('resources/views2'))
});
