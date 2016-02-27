var gulp   = require('gulp'),
  plumber  = require('gulp-plumber'),
  concat   = require('gulp-concat'),
  rename   = require('gulp-rename'),
  uglify   = require('gulp-uglify'),
  stylus   = require('gulp-stylus'),
  less     = require('gulp-less'),
  jeet     = require('jeet'),
  rupture  = require('rupture'),
  prefixer = require('autoprefixer-stylus'),
  nib      = require('nib'),
  p        = require('./package.json');


//////////////////////////////////////////////////
// PATHS
//////////////////////////////////////////////////

var paths = {
  dist: 'assets/dist',
  js: 'assets/js/*.js',
  app_less: 'assets/css/app.less',
  less: 'assets/css/*.less',
  app_styl: 'assets/css/app.styl',
  styl: 'assets/css/*.styl',
  styl_subs: 'assets/css/*/*.styl'
};


//////////////////////////////////////////////////
// TASKS
//////////////////////////////////////////////////

gulp.task('build-js', function(){
  return gulp.src(paths.js)
    .pipe(plumber())
    .pipe(concat(p.name+'.all.js'))
    .pipe(gulp.dest(paths.dist))
    .pipe(rename(p.name+'.all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(paths.dist));
});

gulp.task('css', ['build-js'], function () {
  gulp.src(paths.app_less)
    .pipe(plumber())
    .pipe(less())
    .pipe(gulp.dest(paths.dist));
});

gulp.task('stylus', ['stylus-dev'], function(){
  gulp.src(paths.app_styl)
    .pipe(plumber())
    .pipe(rename({
      prefix: p.name,
      basename: ".all",
      suffix: ".min"
    }))
    .pipe(stylus({
      use:[nib(), prefixer(), jeet(), rupture()],
      compress: true,
      "include css": true
    }))
    .pipe(gulp.dest(paths.dist));
});

gulp.task('stylus-dev', function(){
  gulp.src('assets/css/app.styl')
    .pipe(plumber())
    .pipe(rename({
      prefix: p.name,
      basename: ".all"
    }))
    .pipe(stylus({
      use:[nib(), prefixer(), jeet(), rupture()],
      compress: false,
      "include css": true
    }))
    .pipe(gulp.dest(paths.dist));
});

gulp.task('watch', function() {
  gulp.watch(paths.js, ['build-js']);
  gulp.watch(paths.styl, ['stylus', 'stylus-dev']);
  gulp.watch(paths.styl_subs, ['stylus', 'stylus-dev']);
  gulp.watch(paths.less, ['css']);
});

gulp.task('default', ['build-js', 'stylus-dev', 'stylus', 'css', 'watch']);