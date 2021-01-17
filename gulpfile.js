'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
sass.compiler = require('node-sass');
 
gulp.task('sass', function () {
  return gulp.src('./styles/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cssmin())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./public/styles/css'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./styles/sass/**/*.scss', gulp.series('sass'));
});