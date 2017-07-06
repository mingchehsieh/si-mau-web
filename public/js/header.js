;(function($){

	var num = 1; //number of pixels before modifying styles

	$(window).bind('scroll', function () {
	    if ($(window).scrollTop() > 50) {
	        $('.header-fixed').css("top", "-50px");
	    } else {
			$('.header-fixed').css("top", "0");
		}
	});

})(jQuery);
