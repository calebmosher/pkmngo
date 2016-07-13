var gulp = require("gulp"),
	markdown = require("gulp-markdown"),
    rename = require("gulp-rename");

gulp.task("markdown", function () {
	return gulp.src("src/sections/*.md")
		.pipe(markdown())
		.pipe(rename({extname: ".php"}))
		.pipe(gulp.dest("dist/sections"));
});

gulp.task("app", function() {
	return gulp.src("src/index.php")
		.pipe(gulp.dest("dist"));
});

gulp.task("default", ["app", "markdown"]);
