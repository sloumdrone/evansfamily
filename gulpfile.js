// Defining requirements
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var merge2 = require('merge2');
var ignore = require('gulp-ignore');
var rimraf = require('gulp-rimraf');
var clone = require('gulp-clone');
var merge = require('gulp-merge');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var del = require('del');
var cleanCSS = require('gulp-clean-css');
var gulpSequence = require('gulp-sequence');
var replace = require('gulp-replace');
var autoprefixer = require('gulp-autoprefixer');
var babel = require('gulp-babel');

// Configuration file to keep your code DRY
var cfg = require('./gulpconfig.json');
var paths = cfg.paths;

// Run:
// gulp sass + cssnano + rename
// Prepare the min.css for production (with 2 pipes to be sure that "theme.css" == "theme.min.css")
gulp.task('scss-for-prod', function () {
    var source = gulp.src(paths.sass + '/*.scss')
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(sass())
        .pipe(autoprefixer('last 2 versions'));

    var pipe1 = source.pipe(clone())
        .pipe(gulp.dest(paths.css))
        .pipe(rename('custom-editor-style.css'));

    var pipe2 = source.pipe(clone())
        .pipe(cssnano())
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(paths.css))
        .pipe(browserSync.stream());
    return merge(pipe1, pipe2);
});

// Run:
// gulp sass
// Compiles SCSS files in CSS
gulp.task('sass', function () {
    var stream = gulp.src(paths.sass + '/*.scss')
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(sass({ errLogToConsole: true }))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest(paths.css))
        .pipe(rename('custom-editor-style.css'));
    return stream;
});


// Run:
// gulp cssnano
// Minifies CSS files
gulp.task('cssnano', function () {
    return gulp.src(paths.css + '/theme.css')
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(cssnano({ discardComments: { removeAll: true } }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(paths.css));
});

gulp.task('minifycss', function () {
    return gulp.src(paths.css + '/theme.css')
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(cleanCSS({ compatibility: '*' }))
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(paths.css));
});

gulp.task('cleancss', function () {
    return gulp.src(paths.css + '/*.min.css', { read: false }) // Much faster
        .pipe(ignore('theme.css'))
        .pipe(rimraf());
});

gulp.task('styles', function (callback) {
    gulpSequence('scss-for-prod')(callback);
});

// Run: 
// gulp scripts. 
// Uglifies and concat all JS files into one
gulp.task('scripts', function () {
    var scripts = [

        // Start - All BS4 stuff
        paths.dev + '/js/bootstrap4/bootstrap.js',

        // End - All BS4 stuff

        paths.dev + '/js/skip-link-focus-fix.js'
    ];
    // grab all the custom scripts
    var customScripts = paths.dev + '/js/custom/*.js';
    gulp.src(scripts)
        .pipe(concat('theme.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(paths.js));

    gulp.src(scripts)
        .pipe(concat('theme.js'))
        .pipe(gulp.dest(paths.js));

    // bundle minify and babelize custom scripts
    gulp.src(customScripts)
        .pipe(concat('custom.min.js'))
        .pipe(babel({ presets: ['env'] }))
        .pipe(uglify())
        .pipe(gulp.dest(paths.js))
        .pipe(browserSync.stream());
});

// Run:	
// gulp watcher	
// Starts watcher. Watcher runs gulp sass task on changes	
gulp.task('watcher', function () {
    gulp.watch(paths.sass + '/**/*.scss', ['styles']);
    gulp.watch([paths.dev + '/js/**/*.js', 'js/**/*.js', '!js/theme.js', '!js/theme.min.js'], ['scripts']);
});

// Run:	
// gulp browser-sync	
// Starts browser-sync task for starting the server.	
gulp.task('browser-sync', function () {
    browserSync.init(cfg.browserSyncWatchFiles, cfg.browserSyncOptions);
});

// Run:	
// gulp watch-bs	
// Starts watcher with browser-sync. Browser-sync reloads page automatically on your browser	
gulp.task('watch', ['browser-sync', 'watcher', 'scripts'], function () {
});
