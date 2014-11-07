// used throughout site

(function() {

	var siteAlert = $('#site-alert'),
		isDismissed = '1';

	if (Cookies('site-alert-dismissed') !== isDismissed) {

		siteAlert.show();
	}

	siteAlert.find('.close').on('click', function(e) {

		e.preventDefault();

		siteAlert.slideUp();

		Cookies('site-alert-dismissed', isDismissed, {
			expires: 31557600
		});
	});

})();

//top drawer for tablet menu
(function() {

	function toggleDrawer(openIt) {

		//add class to body (note: this effects the animated menu/close icon
		$('body').toggleClass('drawer_open', openIt);

		if (openIt) {

			$('.menu_label').text('Hide'); //change label on menu icon

			$('#drawerContainer').height($('.top_drawer').outerHeight());

		} else {

			$('#drawerContainer').height(0);

			$('.menu_label').text('More'); //must match original HTML
		}
	}

	$(document).on('replace', function(e, new_path, original_path) {

		if (!$('#drawerContainer').length) {

			$('body').removeClass('drawer_open');
		}
	});

	$(document).on('click', '.topDrawerTrigger', function(e) { //click the button to hide/show
		e.preventDefault();
		toggleDrawer(!$('body').hasClass('drawer_open'));
	});

})();

$(function() {

	// OWL CAROUSEL
	// Defaults have been adjusted on owl.carousel.js from the standard download to avoid repetion and establish global settings.
	// Changed defaults in original JS file: navText, loop, dots, nav

	$('.slider').owlCarousel({
		items: 1
	});

	$('.slider--lazy').owlCarousel({
		items: 1,
		lazyLoad: true
	});

	$('.slider--peep').owlCarousel({
		stagePadding: 50,
		items: 1,
		lazyLoad: true
	});

	$('.slider--fade').owlCarousel({ // good to use as base for other animation options
		items: 1,
		lazyLoad: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn'
	});

	$('.slider--video').owlCarousel({
		items: 1,
		merge: true,
		video: true,
		lazyLoad: true
	});

	$('.slider--auto').owlCarousel({
		items: 1,
		nav: false,
		dots: true,
		autoplay: true,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		smartSpeed: 450
	});

	$('.slider--autoheight').owlCarousel({
		items: 1,
		autoHeight: true
	});

	$('.carousel').owlCarousel({ //for specifc case usage, set responsive options
		items: 4,
		lazyLoad: true,
		margin: 30
	});
});

// Text Accordion, Toggler, Expander whatever the hell you call it
(function(){

	function init_togglees() {
		$('.toggle_wrap .togglee').each(function() {
			if (!$(this).hasClass('default-open')) {
				$(this).hide();
			}
		});
	}

	$(document).on('replace', init_togglees);

	init_togglees();

})();


$(document).on('click', '.toggler', function() {
	if ($(this).parents('.toggle_wrap').length >= 1) {
		var accordian = $(this).parents('.toggle_wrap');
		if ($(this).hasClass('active')) {
			$(accordian).find('.toggler').removeClass('active');
			$(accordian).find('.togglee').slideUp();
		} else {
			$(accordian).find('.toggler').removeClass('active');
			$(accordian).find('.togglee').slideUp();
			$(this).addClass('active');
			$(this).next('.togglee').slideToggle();
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

$(document).on('click', '.toggler', function() {
	if (!$(this).parents('.toggle_wrap').length >= 1) {
		$(this).next('.togglee').slideToggle();
	}
});


//remove items from the cart widget in the top drawer
//based on hover.  So, small laptops with no touch
$(document).on('click', '.removeCartWidget', function(e) {

	$(this).closest('tr').addClass('removing').hide('slow', function() {
		$(this).remove();
		$(window).trigger('resize');
	});

	$(this).closest('li').addClass('removing').slideUp('slow', function() {
		$(this).remove();
	});
});



//Smooth scroll to + scroll to top
function scrollToID(id, speed){
	var offSet = 50;
	var targetOffset = $(id).offset().top - offSet;
	//var mainNav = $('#main-nav');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	//if (mainNav.hasClass("open")) {
		//mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		//mainNav.removeClass("open");
	//}
}
$(function(){
    $(document).on( 'scroll', function(){
       //hide+show 'to top' link — visual controlled via CSS
        if ($(window).scrollTop() > 100) {
            $('.scrollTop').addClass('show');
        } else {
            $('.scrollTop').removeClass('show');
        }
    });
    $('.scrollTop').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow');
	});
	//smooth section scroll to
	$('.scrollLink').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 500);
	});
});

//  Hide, Show submenu (small breakpoint)
$('.sub_nav_mobile > ul').hide();

$(document).on('click', 'li:has(ul)', function() {
	$(this).find('ul').slideToggle('slow');
});

// @todo Fix this
/* Functionality:
	- When a non-active nav item is clicked, any open/active items have their active class removed and submenus hidden immediately (e.g. no fade/slide). The item clicked on gets the active class added and its submenu slides down.
	- An active nav item can be clicked to toggle off the submenu.  When an active nav item is clicked, the submenu slides up and then the active class is removed from the nav item.
	- On the home page, the search nav item is open/active by default.  Other pages, it is not and no items have the active class.

	Markup:
	<div class="nav_item">
		<a href="#" class="smNav_menu">TOP ICON</a>
		<ul class="sub_nav_mobile">
			...
		</ul>
	</div>

	Hint: Use   a[class*='smNav']
*/
$(document).on('click', '.nav_item', function(e) {

	var subNavs, el = $(this);

	if (!$(e.target).parents('.sub_nav_mobile').length) {

		if (el.hasClass('active')) {

			el.removeClass('active');

		} else {

			$('.nav_item').removeClass('active');
			el.addClass('active');
		}

		if (!el.find('.hasSub + ul').length || !el.hasClass('active')) {

			$('.hasSub + ul').hide();
		}
	}
});

$(document).on('click', '[data-cart-action=delete]', function() {

	var el = $(this),
		form = el.closest('form'),
		action = form.attr('action'),
		data = form.serialize(),
		others = $('[data-cart-id="' + el.data('cart-id') + '"]').not(this);

	others.each(function() {
		$(this).attr('data-cart-action', 'none').trigger('click');
	});

	$.post(action, data, function(data) {

		$('[data-cart-value=discount]').text(data.cart_discount);

		$('[data-cart-value=total]').text(data.cart_total);

		$('[data-cart-value=subtotal]').text(data.cart_subtotal);

	}, 'json');
});

// (function(){

// 	function init_ajax_forms() {

// 		$('.ajax_form').each(function(){

// 			$(this).ajaxForm();
// 		});
// 	}

// 	$(document).on('replace', init_ajax_forms);

// 	init_ajax_forms();

// })();

$(document).on('click', '.submit_link', function(){

	$(this).parents('form').get(0).submit();
})
