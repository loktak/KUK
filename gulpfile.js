const gulp = require('gulp');
var sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
var browserSync = require('browser-sync').create();
const del = require('del');
sass.compiler = require('node-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var flatten = require('gulp-flatten');


//функция сборки style.scss в фаил Css
function styles() {
  //поиск файла style.scss в папке sass
  return gulp.src('./app/sass/style.scss')
    // вывод сообщения об ошибке если что-то пошло не так
    .pipe(sass().on('error', sass.logError))
    // применение префиксов к файлу css
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 2 versions'],
      cascade: false
    }))
    //сжимание файлы style.css
    .pipe(cleanCSS({
      level: 2
    }))
    // выбор папки куда будет загружаться собранный фаил style.css
    .pipe(gulp.dest('./dist/css'))
    // автообновление
    .pipe(browserSync.stream());
}

//функция преобразоания js файла
function jsOptimizer () {
  // поиск файла script.js
  return gulp.src('./app/js/script.js')
  //конечный файл
  .pipe(gulp.dest('./dist/js'))
  //автообноление
  .pipe(browserSync.stream());
}

//функция очистки папки dist/css
function cleanStyles() {
  // очистка папки dist/css
  return del('dist/css/style.css')
}

function cleanScripts() {
  // очистка папки dist/js
  return del('dist/js/*')
}

//сборка всех изображений в папке dist
function pictures () {
  return gulp.src('./app/sass/**/img/*.{gif,jpg,png,svg}')
  .pipe(flatten())
  .pipe(gulp.dest('./dist/img'));
}

//просмотр файлов
function watch () {
  browserSync.init({
    server: {
        baseDir: "./dist"
    }
});

//следит за scss
gulp.watch('./app/sass/**/*.scss', styles)
//следит за скриптами
gulp.watch('./app/js/**/*.js', jsOptimizer)
// запускает синхронизацию при изменении HTML
gulp.watch("dist/*.html").on('change', browserSync.reload);
}

// таск сборка файлов sass в css
gulp.task('sass', styles);

//таcк сборка js
gulp.task('jsMin', jsOptimizer);

gulp.task('image', pictures);

//таск очистки папок Css и js
gulp.task('clean', gulp.series(cleanScripts, cleanStyles));
//таск на отслеживания изменений
gulp.task('watch', watch);

//очистка папок и запись css и скриптов
gulp.task('build', gulp.series('clean', gulp.parallel(styles, jsOptimizer)));

gulp.task('run', gulp.series('build', 'watch'));