var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');
//var htmlmin 	= require('gulp-htmlmin');

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy: "http://localhost:301/bikeshopstatic.git/trunk/"
    });

    gulp.watch("scss/*.scss", ['sass']);
    gulp.watch("*.php").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("css"))
        .pipe(browserSync.stream());
});





 
/*gulp.task('minify', function() {
  return gulp.src(['src/*.html', 'src/*.php'])
    .pipe(htmlmin({
        collapseWhitespace: true,
        ignoreCustomFragments: [ /<%[\s\S]*?%>/, /<\?[=|php]?[\s\S]*?\?>/ ]
      }))
    .pipe(gulp.dest('dist'));
});*/

gulp.task('default', ['serve']);