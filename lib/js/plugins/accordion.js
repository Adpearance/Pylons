(function(){

	function init_accordion() {
		$('.accordion .content').each(function() {
			if (!$(this).hasClass('default-open')) {
				$(this).hide();
			}
		});
	}

	$(document).on('replace', init_accordion);

	init_accordion();

})();


$(document).on('click', '.accordion-title', function() {
	if ($(this).parents('.accordion').length >= 1) {
		var accordian = $(this).parents('.accordion');
		if ($(this).hasClass('active')) {
			$(accordian).find('.accordion-title').removeClass('active');
			$(accordian).find('.content').slideUp();
		} else {
			$(accordian).find('.accordion-title').removeClass('active');
			$(accordian).find('.content').slideUp();
			$(this).addClass('active');
			$(this).next('.content').slideToggle();
		}
	} else {
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).addClass('active');
		}
	}
	return false;
});

$(document).on('click', '.accordion-title', function() {
	if (!$(this).parents('.accordion').length >= 1) {
		$(this).next('.content').slideToggle();
	}
});
