var nonPrintableChars = [8, 16, 17, 18, 19, 20, 27, 33, 34, 35, 36, 37, 38, 39, 40, 44, 45, 46, 91, 92, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 144, 145];

$(function() {
	$(".arrow-image").on("click", function() {
		$(".arrow-image").off("click");
		$(".section").addClass("transitioning");

		$(".steps").one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
			$(".section").addClass("transitioning-half-done").removeClass("transitioning");

			$(".type-your-resolution").one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function() {
				$(".section").addClass("transitioning-done").removeClass("transitioning-half-done");
				$(".type-your-resolution").focus();

				$(".arrow-image").on("click", function() {
					$(".form-submit").submit();
				});
			});
		});
	});

	$(".type-your-resolution").on("keydown", function(e) {
		if (e.keyCode == 13 || e.keyCode == 9) {
			e.preventDefault();
		} else if (nonPrintableChars.indexOf(e.keyCode) == -1) {
			var text = $(this).val();   
			if (text.length >= 100) {
				e.preventDefault();
			}
        }
	});
});