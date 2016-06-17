var gulp = require('gulp-help')(require('gulp')),
    browserSync = require('browser-sync'),
    del = require('del'),
    $ = require('gulp-load-plugins')(),
    // Assets diretories
    paths = {
      js: './js',
      sass: './scss',
      images: './images',
      php: './**/*.php',
      assets: './assets'
    },
    // Hash options
    hashOptions = {
      algorithm: 'md5',
      hashLength: 10,
      template: '<%= name %>.<%= hash %><%= ext %>'
    };

function addAssetToManifest(stream) {
  return stream
    .pipe($.hash.manifest('asset-hashes.json', true))
    .pipe(gulp.dest('.'))
    .pipe(browserSync.reload({ stream: true }));
}

gulp.task('clean:css', 'Clean CSS assets', function() {
  return del(paths.assets + '/*.css');
});

gulp.task('clean:js', 'Clean JS assets', function() {
  return del(paths.assets + '/*.js');
});

gulp.task('clean', ['clean:css', 'clean:js']);

gulp.task(
  'sass',
  'Compile sass into minified CSS files and copy to assets folder',
  ['clean:css'],
  function() {
    var stream = gulp.src(paths.sass + '/*.scss')
      .pipe($.sass())
      .pipe($.hash(hashOptions))
      .pipe($.csso())
      .pipe(gulp.dest(paths.assets));

    addAssetToManifest(stream);

    return stream;
  }
);

gulp.task(
  'js:app',
  'Include JS files, put hash on file names and copy to assets folder',
  ['clean:js'],
  function() {
    var stream = gulp.src(paths.js + '/*.js')
      .pipe($.include())
      .pipe($.hash(hashOptions))
      .pipe(gulp.dest(paths.assets));

    addAssetToManifest(stream);

    return stream;
  }
);

gulp.task(
  'js',
  'Perform "js:app" and minify JS assets files',
  ['js:app'],
    function() {
    gulp.src(paths.assets + '/*.js')
      .pipe($.uglify())
      .pipe(gulp.dest(paths.assets));
  }
);

gulp.task(
  'serve',
  'Provide a node server with browser sync and rerun tasks when a file changes',
  ['sass', 'js:app'],
  function() {
    browserSync.init([
      paths.assets + '/**/*',
      paths.php
    ], {
      proxy: 'alien-code.dev',
      notify: false
    });

    gulp.watch(paths.sass + '/**/*.scss', ['sass']);
    gulp.watch(paths.js + '/**/*.js', [
      'clean:js',
      'js:app'
    ]);

    gulp.watch(paths.php, function(event) {
      browserSync.reload(event.path);
    });
  }
);

gulp.task('build', ['sass', 'js']);
gulp.task('default', ['build']);
