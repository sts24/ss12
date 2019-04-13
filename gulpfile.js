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


//   // Basic configuration example
//   config = {
//     mode: {
//       symbol: true
//     }
//   };


//   gulp.task('svg', function(){
//     let stream = gulp.src('**/*.svg', { cwd: './icons/' })
//     .pipe(svgSprite(config))
//     .pipe(gulp.dest('out'));

//     return stream
//   });

  gulp.task('default', [ 'sass' ]);

//gulp.watch('./sass/*.scss', ['sass']);
