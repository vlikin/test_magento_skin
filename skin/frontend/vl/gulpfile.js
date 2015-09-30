'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

var pathes = {
    'default': {
        'sass': './default/sass/**/*.sass',
        'css': './default/css'
    }
};

gulp.task('sass:default', function () {
    gulp.src(pathes.default.sass)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(pathes.default.css));
});

gulp.task('sass:watch', function () {
    gulp.watch(pathes.default.sass, ['sass:default']);
});