/**
 * A Plesk extension that adds a terminal icon to the user's control panel for
 *    web-based SSH access via Shell in a Box.
 *
 * Implements:
 *      1. SASS to CSS conversion, autoprefixing, and minification
 *      2. Uglifies and combines JS files.
 *      3. Watches files for changes in CSS or JS.
 *      4. Corrects the line endings {@link https://www.npmjs.com/package/gulp-line-ending-corrector}.
 *
 * @author Daniel M. Hendricks
 * @since 1.0.0
 */

var gulp      = require('gulp');
var sass      = require('gulp-sass');
var rename    = require('gulp-rename');
var prefix    = require('gulp-autoprefixer');
var minifycss = require('gulp-uglifycss');
var uglify    = require('gulp-uglify');
var concat    = require('gulp-concat');
var lineec    = require('gulp-line-ending-corrector');
var notify    = require('gulp-notify');

var base_name = 'global';

// Browsers for which you want to enable autoprefixing.
const AUTOPREFIXER_BROWSERS = [ 'last 2 version', '> 1%', 'ie >= 9', 'ie_mob >= 10', 'ff >= 30', 'chrome >= 34', 'safari >= 7', 'opera >= 23', 'ios >= 7', 'android >= 4', 'bb >= 10' ];

// Compile SASS
function styles() {

  return gulp.src( [ './src/scss/terminal-icon.scss' ] )
    .pipe( sass({
      outputStyle: 'expanded',
      errLogToConsole: true,
      precision: 10
    }))
    .on( 'error', console.error.bind( console ) )
    .pipe( prefix( AUTOPREFIXER_BROWSERS ) )
    .pipe( rename( {
      basename: base_name,
    }))
    .pipe( minifycss( { maxLineLen: 10 } ) )
    .pipe( lineec() )
    .pipe( gulp.dest('./htdocs') )
    .pipe( notify( { message: 'TASK: "styles" completed.', onLast: true } ) );

}

// Uglify JS
function scripts() {

  return gulp.src( './src/js/*.js' )
    .pipe( concat( base_name + '.js' ) )
    .pipe( rename( {
      basename: base_name,
    }))
    .pipe( lineec() )
    .pipe( gulp.dest( './htdocs' ) )
    .pipe( notify( { message: 'TASK: "scripts" completed.', onLast: true } ) );

}

// Run tasks on start
var build = gulp.series( gulp.parallel( styles, scripts ) );
build();

// Watches for file changes and runs specified tasks.
gulp.task( 'default', function() {

  gulp.watch( './src/scss/*.scss', styles );
  gulp.watch( './src/js/*.js', scripts );

});
