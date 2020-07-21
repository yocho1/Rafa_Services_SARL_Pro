const gulp = require('gulp');
const sass = require('gulp-sass');


gulp.task('sass', function() {
    return gulp.src('sass/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('css/style.css'));
});

gulp.task('default', function() {
    gulp.watch('css/style.scss', ['sass']);
});

gulp.task('default', gulp.series(['sass']));
