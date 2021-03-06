'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
 
sass.compiler = require('node-sass');
 
var browserSync = require('browser-sync').create();


gulp.task('serve', function() {
  browserSync.init({
    proxy: "http://otima.ideia",
    https: false
});

gulp.watch('./sass/**/*.sass', gulp.series('sass'));
gulp.watch('*.php').on('change',browserSync.reload);
gulp.watch('js/**/*.js').on('change',browserSync.reload);
});


gulp.task('sass', function () {
  console.log('Sass file changed');
  return gulp.src('./sass/**/*.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});
 
