'use strict';

/* Подключение зависимостей
==============================================*/
const
  gulp = require('gulp'),
  plumber = require('gulp-plumber'),
  del = require('del'),
  rename = require('gulp-rename'),
  buffer = require('vinyl-buffer'),
  merge = require('merge-stream'),
  browserSync = require('browser-sync'),
  notify = require('gulp-notify'),
  sourceMaps = require('gulp-sourcemaps'),

  imageMin = require('gulp-imagemin'),
  spriteSmith = require('gulp.spritesmith'),
  svgMin = require('gulp-svgmin'),
  svgSprite = require('gulp-svg-sprite'),
  cheerio = require('gulp-cheerio'),
  replace = require('gulp-replace'),

  sass = require('gulp-sass'),
  csso = require('gulp-csso'),
  postcss = require('gulp-postcss'),
  autoprefixer = require('autoprefixer'),
  mqpacker = require('css-mqpacker'),
    group_media = require('gulp-group-css-media-queries'),
  gulpStylelint = require('gulp-stylelint');

const reload = (done) => {
    browserSync.reload();
    done();
};

/* Получаем настройки проекта
==============================================*/
const
  fred = require('./fred-config.json'),
  src = fred.src;


/* Очистка папки сборки
==============================================*/
gulp.task('clean', () => {
  return del([
    src.imgDest + '/**/*',
    src.dir + 'style.css'
  ], {
    force: true
  });
});


/* Оптимизация изображений
==============================================*/
gulp.task('img:opti', () => {
  return gulp.src(src.imgSrc + '/**/*')
    .pipe(imageMin([
      imageMin.jpegtran({progressive: true}),
      imageMin.optipng({optimizationLevel: 6}),
      imageMin.svgo({
        plugins: [
          {cleanupIDs: false},
          {removeViewBox: false},
          {convertPathData: false},
          {mergePaths: false},
        ],
      })
    ]))
    .pipe(gulp.dest(src.imgDest));
});


/* Создание PNG-спрайта
==============================================*/
gulp.task('sprite:png', () => {
  const spriteData = gulp.src(src.imgSprite + '/*.png').pipe(spriteSmith({
    cssTemplate: 'scss/template-sprite-png.handlebars',
    imgName: 'sprite.png',
    cssName: '_sprite-png.scss',
    imgPath: src.imgDest + '/sprite.png',
    padding: 4
  }));

  const imgStream = spriteData.img
    .pipe(buffer())
    .pipe(imageMin([imageMin.optipng({optimizationLevel: 6})]))
    .pipe(gulp.dest(src.imgDest));

  const cssStream = spriteData.css
    .pipe(gulpStylelint({fix: true}))
    .pipe(gulp.dest(src.scss));

  return merge(imgStream, cssStream);
});


/* Создание SVG-спрайта
==============================================*/
gulp.task('sprite:svg', () => {
  return gulp.src(src.imgSymbols + '/*.svg')
    .pipe(svgMin({
      js2svg: {
        pretty: true
      }
    }))
    .pipe(svgSprite({
      mode: {
        symbol: {
          dest: '.',
          sprite: 'sprite.svg',
          render: {
            scss: {
              template: 'scss/template-sprite-svg.handlebars',
              dest: '../../scss/_sprite-svg.scss',
            }
          }
        }
      }
    }))
    .pipe(cheerio({
      run: function ($) {
        $('svg').attr('style', 'display:none');
        $('[id*=icon-] [fill]').removeAttr('fill');
        $('[id*=icon-]').removeAttr('fill');
      },
      parserOptions: { xmlMode: true }
    }))
    .pipe(replace('&gt;', '>'))
    .pipe(gulp.dest(src.imgDest));
});


/* Компиляция стилевого файла
==============================================*/
gulp.task('style:compile', () => {
  return gulp.src([src.scss + '/*.scss', src.components + '/**/*.scss'])
    .pipe(plumber({
      errorHandler: function(err) {
        notify.onError({
          title: 'Style Error',
          message: 'line ' + err.line + ' in ' + err.file.replace(/^.*[\\\/]/, '')
        })(err);
        this.emit('end');
      }
    }))
    .pipe(sourceMaps.init())
    .pipe(sass({
      outputStyle: 'expanded',
      includePaths: [
        'components',
        require('node-normalize-scss').includePaths,
        'node_modules/susy/sass',
        'node_modules/typi/scss',
        'node_modules/modularscale-sass/stylesheets'
      ]
    }))
      .pipe(group_media())
    .pipe(sourceMaps.write())
    .pipe(postcss([
      autoprefixer(['last 3 version']),
      mqpacker({sort: true})
    ]))
    .pipe(gulp.dest(src.dir))
    .pipe(rename('style.min.css'))
    .pipe(csso())
    .pipe(gulp.dest(src.dir))
    .pipe(browserSync.stream({match: '**/*.css'}));
});


/* Сборка проекта
==============================================*/
gulp.task('build', gulp.series('clean', 'sprite:png', 'sprite:svg', 'img:opti', 'style:compile'));


/* BrowserSync
==============================================*/
gulp.task('serve', gulp.series('style:compile', () => {
  browserSync.init({
    proxy: fred.domain,
    reloadDelay: 500,
    serveStatic: ['./'],
    rewriteRules: [
      {
        match: '/wp-content/themes/' + fred.themeFolder +'/style.min.css',
        replace: '/style.min.css'
      }
    ]
  });

  gulp.watch([src.components + '/**/*.scss', src.scss + '/*.scss'], gulp.series('style:compile'));
  gulp.watch([src.dir + '*.php', src.components + '/**/*.php'], reload);
  gulp.watch(src.js + '/**/*.js', reload);
}));
