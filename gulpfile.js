var gulp = require("gulp");
var sass = require("gulp-sass");
var cleanCSS = require("gulp-clean-css");
var uglify = require('gulp-uglify');
var pump = require('pump');
var browserSync = require("browser-sync");
var gutil = require("gulp-util");
var ftp = require("gulp-ftp");
var rename = require("gulp-rename");
var imagemin = require('gulp-imagemin');
var runSequence = require("run-sequence");
var requireDir  = require('require-dir');
requireDir('./tasks', {recurse: true});


gulp.task('copy', function() {
    gulp.src(['adm_pan/**/*', '!adm_pan/**/config.php'])
        .pipe(gulp.dest('dist/adm_pan'))

    gulp.src(['catalog/**/*' , '!catalog/view/javascript/**/*.js', '!catalog/view/theme/panbus/stylesheet/**/*'])
        .pipe(gulp.dest('dist/catalog'))    

    gulp.src(['system/**/*' , '!system/storage/cache/*'])
        .pipe(gulp.dest('dist/system'))  

    gulp.src(['index.php', 'php.ini', 'robots.txt'])
        .pipe(gulp.dest('dist'))  
});

gulp.task("sass", function() {
    return gulp.src("src/scss/*.scss")
    .pipe(sass())
    .pipe(gulp.dest("dist/catalog/view/theme/panbus/stylesheet"))
    .pipe(browserSync.reload({
        stream: true
    }));
});


gulp.task("css", function () {
    return gulp.src("catalog/view/theme/panbus/stylesheet/*.css")
    .pipe(cleanCSS({compatibility: 'ie8'}))
    // .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest("dist/catalog/view/theme/panbus/stylesheet"))
    .pipe(browserSync.reload({
        stream: true
    }));
});


// gulp.task('js', function () {
//     return gulp.src('catalog/view/javascript/*.js')
//     .pipe(uglify())
//     // .pipe(rename({ suffix: '.min' }))
//     .pipe(gulp.dest('dist/catalog/view/javascript'))

// });

gulp.task('js', function (cb) {
  pump([
        gulp.src('catalog/view/javascript/**/*.js'),
        uglify(),
        gulp.dest('dist/catalog/view/javascript')
    ],
    cb
  );
});

gulp.task('img', function () {
    gulp.src(['image/**/*', '!image/cache/**/*'])
        .pipe(imagemin([
            imagemin.gifsicle({interlaced: true}),
            imagemin.jpegtran({progressive: true}),
            imagemin.optipng({optimizationLevel: 5}),
            imagemin.svgo({
                plugins: [
                    {removeViewBox: true},
                    {cleanupIDs: false}
                ]
            })
        ]))
        .pipe(gulp.dest('dist/image'))

});

gulp.task("watch", [ "browser", "sass" ], function() {
    gulp.watch('src/scss/*.scss', [ "sass" ]);
    gulp.watch('catalog/view/theme/panbus/stylesheet/*.css', browserSync.reload);
    gulp.watch('catalog/view/theme/**/*.tpl', browserSync.reload);
    gulp.watch('catalog/**/*.php', browserSync.reload);
});


gulp.task("browser", function() {
    browserSync({
        proxy: "Buss.test",
        browser: "chrome",
    });
});


gulp.task('build', function (callback) {
    runSequence('copy', ['js','css'], 'img' ,callback);
});

