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



/* ---------------------------------------- *\
 * Modifiers
\* ---------------------------------------- */

$("a[href^='http']").prop("target", "_blank");

$("table tbody").each(function(i, tbody) {
	$(tbody).find("tr").each(function(i, tr) {
		if (i % 2) return;
		$(tr).addClass("alt-row");
	});
});
