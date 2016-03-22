var gulp = require('gulp');
var codeception = require('gulp-codeception');
var notify = require('gulp-notify');

gulp.task('test', function() {
    gulp.src('tests/*.php')
        .pipe(codeception('', {notify:true, clear: true}))
        .on('error', notify.onError({
            title : 'Result',
            message :'Failed',
            icon : __dirname+'/error.png'
        }))
        .pipe(notify(
            {
                title :'Result',
                message: 'Success',
                icon : __dirname+'/success.png'
            }
        ));
});

gulp.task('watch', function (){
    gulp.watch(['tests/*.php', 'app/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);