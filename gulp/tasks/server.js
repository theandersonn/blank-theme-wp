/*--------------------------------------------------------------
    EXECUTA BROWSER-SYNC
--------------------------------------------------------------*/
var gulp = require('gulp');
var browserSync = require('browser-sync');

gulp.task('server', function() {
    browserSync.init({
        proxy: 'localhost:80/local-dev/'
    });

    gulp.watch('../**/*').on('change', browserSync.reload);
});