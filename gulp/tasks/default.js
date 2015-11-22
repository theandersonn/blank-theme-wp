/*--------------------------------------------------------------
    TASK DEFAULT
--------------------------------------------------------------*/
// plugins
var gulp = require('gulp');

gulp.task('default', ['sass', 'cssmin', 'concatjs', 'jsmin'], function(){
    gulp.watch('../assets/sass/**/*.scss', ['sass']);
    gulp.watch('../assets/css/*.css', ['cssmin']);
	gulp.watch('../assets/js/*.js', ['concatjs']);
	gulp.watch('../assets/js/*.js', ['jsmin']);
});