var gulp = require('gulp');
var watch = require('gulp-watch');
var fs = require('fs');
var sass = require('gulp-sass');
var svgSprite = require('gulp-svg-sprite');

// SASS

gulp.task('sass', function () {
    return gulp.src('./sass/*.scss')
      .pipe(sass({
          outputStyle: 'compressed'
      }).on('error', sass.logError))
      .pipe(gulp.dest('./css'));
  });




  gulp.task('svg', function(){
    let stream = gulp.src('./svg-icons/*.svg')
    .pipe(svgSprite({
      mode: {
        symbol: {
          dest: '.',
          bust: false,
          sprite: 'icon-sprite.svg'
        }
      }
    }))
    .pipe(gulp.dest('./images'));

    return stream
  });

  gulp.task('default', [ 'sass' ]);

//gulp.watch('./sass/*.scss', ['sass']);
