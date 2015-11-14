/*--------------------------------------------------------------
    EXECUTA SASS
--------------------------------------------------------------*/
// plugins
'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

// tasks
gulp.task('sass', function () {
  gulp.src('../assets/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('../assets/css/'));
});
