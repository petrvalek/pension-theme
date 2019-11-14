const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');

var paths = {
  styles: {
    assets: "./assets/scss/**/*",
    src: "./assets/scss/admin-styles.scss",
    dest: "./"
  }
};

var sassOptions = {
  outputStyle: "compressed"
};

function style() {
  return gulp
    .src(paths.styles.src)
    .pipe(sass(sassOptions))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(
      rename({
        suffix: ".min"
      })
    )
    .pipe(gulp.dest(paths.styles.dest))
}

exports.style = style;

gulp.task("default", style);
