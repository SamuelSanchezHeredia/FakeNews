const gulp = require('gulp');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const cleanCSS = require('gulp-clean-css');

// Concatenate and minify CSS files
function styles() {
    return gulp.src('assets/css/*.css')
        .pipe(concat('app.css'))
        .pipe(cleanCSS())
        .pipe(gulp.dest('./public/ressources/css'));
}

// Concatenate and minify JavaScript files
function scripts() {
    return gulp.src('assets/js/*.js')
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./public/ressources/js'));
}

// Default task to run 'styles' and 'scripts' in parallel
exports.default = gulp.parallel(styles, scripts);
