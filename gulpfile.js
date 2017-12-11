const gulp        = require('gulp');
const browserSync = require('browser-sync').create();
const sass        = require('gulp-sass');

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
    server: "./src",
});

    gulp.watch("src/**/*.scss", ['sass']);
    gulp.watch("src/**/*").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src('src/**/*.scss', { base: './' })
        .pipe(sass())
        .pipe(gulp.dest('.'))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);
