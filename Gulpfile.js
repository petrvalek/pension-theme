var gulp = require("gulp"),
  sass = require("gulp-sass"),
  cssmin = require("gulp-cssmin"),
  prefix = require("gulp-autoprefixer"),
  plumber = require("gulp-plumber"),
  deporder = require("gulp-deporder"),
  concat = require("gulp-concat"),
  stripdebug = require("gulp-strip-debug"),
  uglify = require("gulp-uglify");
rename = require("gulp-rename");

var browserSync = require("browser-sync").create();

var sassOptions = {
  outputStyle: "expanded"
};

var paths = {
  styles: {
    assets: "./assets/scss/**/*",
    src: "./assets/scss/stylesheet.scss",
    dest: "./"
  },
  scripts: {
    src: ["./assets/js/**/*.js"],
    build: "./",
    filename: "bundle.min.js"
  },
  adminStyles: {
    assets: "./admin/assets/scss/**/*",
    src: "./admin/assets/scss/admin-styles.scss",
    dest: "./admin/"
  },
  editorStyles: {
    assets: "./assets/scss/**/*",
    src: "./assets/scss/editor.scss",
    dest: "./inc/editor"
  }
};

function reload() {
  browserSync.reload();
}

function watch() {
  browserSync.init({
    proxy: "upaniberty.test",
    port: 8080,
    open: false,
    notify: false
  });
  gulp.watch(paths.styles.assets, style);
  gulp.watch(paths.adminStyles.assets, admin_style);
  gulp.watch(paths.editorStyles.assets, editor_style);
  gulp.watch(paths.scripts.src, scripts, reload);
  gulp.watch("**/*.php", reload);
}
function style() {
  return gulp
    .src(paths.styles.src)
    .pipe(plumber())
    .pipe(sass(sassOptions))
    .pipe(prefix())
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(cssmin())
    .pipe(
      rename({
        suffix: ".min"
      })
    )
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

function admin_style() {
  return gulp
    .src(paths.adminStyles.src)
    .pipe(plumber())
    .pipe(sass(sassOptions))
    .pipe(prefix())
    .pipe(gulp.dest(paths.adminStyles.dest))
    .pipe(cssmin())
    .pipe(
      rename({
        suffix: ".min"
      })
    )
    .pipe(gulp.dest(paths.adminStyles.dest))
    .pipe(browserSync.stream());
}

function editor_style() {
  return gulp
    .src(paths.editorStyles.src)
    .pipe(plumber())
    .pipe(sass(sassOptions))
    .pipe(prefix())
    .pipe(gulp.dest(paths.editorStyles.dest))
    .pipe(cssmin())
    .pipe(
      rename({
        suffix: ".min"
      })
    )
    .pipe(gulp.dest(paths.editorStyles.dest))
    .pipe(browserSync.stream());
}

function scripts() {
  return gulp
    .src(paths.scripts.src)
    .pipe(deporder())
    .pipe(concat(paths.scripts.filename))
    .pipe(stripdebug())
    .pipe(uglify())
    .pipe(gulp.dest(paths.scripts.build));
}

exports.watch = watch;
exports.style = style;
exports.scripts = scripts;
exports.admin_style = admin_style;
exports.editor_style = editor_style;

var build = gulp.parallel(style, watch, scripts, admin_style, editor_style);

gulp.task("build", build);

gulp.task("default", build);
