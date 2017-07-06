;(function($){

	var num = 1; //number of pixels before modifying styles

	$(window).bind('scroll', function () {
	    if ($(window).scrollTop() <= 50) {
			$('header').show();
	        $('.header-fixed').css("top", "-"+$(window).scrollTop()+"px");
	    } else {
			$('.header-fixed').css("top", "0");
			$('header').hide();
		}
	});

})(jQuery);
