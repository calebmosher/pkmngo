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

	var newSection = e.target.getAttribute("href"),
		$ul = $(e.target).parents("ul"),
		isMobile = $("nav").css("overflow") === "visible"

	if (isMobile) {
		$ul.slideUp(200);
	}

	$("html, body").animate({
        scrollTop: $(newSection).offset().top
    }, 600, function() {
    	window.location.hash = newSection;
    	isMobile && $("html, body").animate({scrollTop: $(document).scrollTop() - 60}, 300);
    });
});

$("nav .menu").click(function(e) {
	var $ul = $("nav > ul");

	if ($ul.css("display") === "none") {
		$ul.slideDown(200);
		return;
	}
	$ul.slideUp(200);
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
