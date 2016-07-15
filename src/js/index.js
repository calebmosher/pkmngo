/**
 * Main Script
 * (c) 2016 PkmnGo.Tips
 */

var $ = require("jquery");



/* ---------------------------------------- *\
 * Event Handlers
\* ---------------------------------------- */

$("a[href='#how-do-i']").click(function(e) {
	e.preventDefault();
});
$("a[href^='#']").click(function(e) {
	e.preventDefault();

	var newSection = e.target.getAttribute("href");

	$("html, body").animate({
        scrollTop: $(newSection).offset().top
    }, 600, function() {
    	window.location.hash = newSection;
    });
});
