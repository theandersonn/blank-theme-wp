/*--------------------------------------------------------------
    TASK DEFAULT
--------------------------------------------------------------*/
// plugins
var gulp = require('gulp');

gulp.task('default', ['sass', 'concatcss', 'cssmin', 'concatjs', 'jsmin'], function(){
    gulp.watch('../assets/sass/**/*.scss', ['sass']);
    gulp.watch('../assets/css/*.css', ['concatcss']);
    gulp.watch('../assets/css/*.css', ['cssmin']);
	gulp.watch('../assets/js/*.js', ['concatjs']);
	gulp.watch('../assets/js/*.js', ['jsmin']);
});