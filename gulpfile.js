var gulp = require("gulp"),
	browserify = require("browserify"),
	source = require("vinyl-source-stream"),
	markdown = require("gulp-markdown"),
	rename = require("gulp-rename"),
	notify = require("gulp-notify"),
	sass = require("gulp-sass");
connect = require('gulp-connect-php'),



// Markdown
gulp.task("markdown", function () {
	return gulp.src("src/sections/*.md")
		.pipe(markdown())
		.pipe(rename({extname: ".php"}))
		.pipe(gulp.dest("dist/sections"))
		.pipe(notify("Finished Markdown"));
});



// CSS
gulp.task("sass", function() {
	return gulp.src("src/scss/*.scss")
		.pipe(sass())
		.pipe(rename("main.built.css"))
		.pipe(gulp.dest("dist/built"))
		.pipe(notify("Finished Sass"));
});

gulp.task("scss", ["sass"]);
gulp.task("css", ["sass"]);



// Javascript
gulp.task("browserify", function() {
    return browserify("src/js/index.js")
		.bundle()
		.pipe(source("main.built.js"))
		.pipe(gulp.dest("dist/built"))
		.pipe(notify("Finished Browserify"));
});

gulp.task("js", ["browserify"]);



// Local Server
gulp.task("server", function() {
	connect.server({
		port: "9000"
	});
});



// Default
gulp.task("default", ["browserify", "sass", "markdown"]);

gulp.task("watch", ["default"], function() {
    gulp.watch("src/js/*.js", ["browserify"]);
    gulp.watch("src/scss/*.scss", ["sass"]);
    gulp.watch("src/sections/*.md", ["markdown"]);
});
