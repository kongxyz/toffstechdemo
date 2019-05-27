"use strict";

const gulp = require("gulp");
const browsersync = require('browser-sync').create();
const minifycss = require("gulp-clean-css");
const minifyjs = require("gulp-uglify");
const rename = require("gulp-rename");
// const sass = require("gulp-sass");
const imagemin = require("gulp-imagemin");
const newer = require("gulp-newer");


// BrowserSync
function browserSync(done) {
	browsersync.init({
	    browser: "chrome.exe",
	    proxy: "localhost:8080/toffstech.com/"
  	});
	done();
}

// BrowserSync Reload
function browserSyncReload(done) {
	browsersync.reload();
	done();
}

// Optimize Images
function images() {
	return gulp
		.src("assets/images/*")
		.pipe(newer("build/img"))
		.pipe(
			imagemin([
				imagemin.gifsicle({ interlaced: true }),
				imagemin.jpegtran({ progressive: true }),
				imagemin.optipng({ optimizationLevel: 5 }),
				imagemin.svgo({
					plugins: [
						{removeViewBox: false},
						{collapseGroups: true}
					]
				})
			])
		)
		.pipe(gulp.dest("build/img"));
}

// CSS Task
function css() {
	return gulp
		.src("assets/css/all.css")
		//.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		//.pipe(gulp.dest("assets/css"))
		.pipe(rename({ suffix: ".min" }))
		.pipe(minifycss())
		.pipe(gulp.dest("build/css"))
		.pipe(browsersync.stream());
}

// Script Task
function script() {
	return gulp
		.src("assets/js/all.js")
		.pipe(minifyjs())
		.pipe(rename({ suffix: ".min" }))
		.pipe(gulp.dest("build/js"))
		.pipe(browsersync.stream());
}

// Watch Files
function watchFiles() {
	//gulp.watch("assets/css/all.scss", css);
	gulp.watch("assets/css/all.css", css);
	gulp.watch("assets/js/all.js", script);
	gulp.watch(["*.php", "components/*.php"], browserSyncReload);
	gulp.watch("assets/images/*", images);
}

// define complex tasks
const js = script;
//const build = gulp.parallel(watchFiles, browserSync, gulp.series(clean, gulp.parallel(css, images, js)));
const build = gulp.parallel(watchFiles, browserSync, gulp.parallel(css, images, js));

// export tasks
exports.default = build;
exports.images = images;
exports.css = css;
exports.js = js;
//exports.clean = clean;