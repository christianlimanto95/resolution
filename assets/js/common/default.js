$(function() {
    $(window).on("resize", function() {
        if (vw < 1025) {
			isMobile = true;
			if (vw >= 768) {
				isTablet = true;
			} else {
				isTablet = false;
			}
		} else {
			isMobile = false;
		}
    });
});