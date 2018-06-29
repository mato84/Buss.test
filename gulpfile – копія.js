var gulp = require("gulp");
var sass = require("gulp-sass");
var cleanCSS = require("gulp-clean-css");
var uglify = require('gulp-uglify');
var pump = require('pump');
var gutil = require("gulp-util");
var rename = require("gulp-rename");
var imagemin = require('gulp-imagemin');
var runSequence = require("run-sequence");




gulp.task('copy', function() {
    gulp.src(['adm_pan/**/*', '!adm_pan/**/config.php'])
        .pipe(gulp.dest('public_html/adm_pan'))

    gulp.src(['catalog/**/*' , '!catalog/view/javascript/**/*.js', '!catalog/view/theme/panbus/stylesheet/**/*'])
        .pipe(gulp.dest('public_html/catalog'))    

    gulp.src(['system/**/*' , '!system/storage/cache/*'])
        .pipe(gulp.dest('public_html/system'))  

    gulp.src(['index.php', 'php.ini', 'robots.txt', 'robots-m.txt'])
        .pipe(gulp.dest('public_html'))  
});

gulp.task("sass", function() {
    return gulp.src("src/scss/*.scss")
    .pipe(sass())
    .pipe(gulp.dest("public_html/catalog/view/theme/panbus/stylesheet"))
    .pipe(browserSync.reload({
        stream: true
    }));
});


gulp.task("css", function () {
    return gulp.src("catalog/view/theme/panbus/stylesheet/*.css")
    .pipe(cleanCSS({compatibility: 'ie8'}))
    // .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest("public_html/catalog/view/theme/panbus/stylesheet"))
    .pipe(browserSync.reload({
        stream: true
    }));
});

gulp.task('js', function (cb) {
  pump([
        gulp.src('catalog/view/javascript/**/*.js'),
        uglify(),
        gulp.dest('public_html/catalog/view/javascript')
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
        .pipe(gulp.dest('public_html/image'))

});

gulp.task('build', function (callback) {
    runSequence('copy', ['js','css'], 'img' ,callback);
});

