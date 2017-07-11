jQuery(function() {
	if(jQuery(document).scrollTop()<100) {
		jQuery(".navbar").addClass("large-nav");
	} else {
		jQuery(".navbar").removeClass("large-nav");
	}
});




jQuery(document).on("scroll", function() {

	if(jQuery(document).scrollTop()<100) {
		jQuery(".navbar").addClass("large-nav");
	} else {
		jQuery(".navbar").removeClass("large-nav");
	}

});
