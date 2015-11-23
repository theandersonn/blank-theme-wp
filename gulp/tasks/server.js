/*--------------------------------------------------------------
    EXECUTA BROWSER-SYNC
--------------------------------------------------------------*/
var gulp = require('gulp');
var browserSync = require('browser-sync');

gulp.task('server', function() {
    browserSync.init({
		proxy: 'projeto.dev/' //Configure de acordo com o seu projeto
    });

    gulp.watch('../**/*').on('change', browserSync.reload);
});