// JavaScript Document
'use strict';

$(function () {
  
  // ------------------------------------------------------- //
  //   Bootstrap Open & Close Navbar Menu
  // ------------------------------------------------------ //
  var navbarCollapse = $('.navbar-collapse');
  
  if (!navbarCollapse.hasClass('show')) {
    $('.nav-link').on('click', function() {
      navbarCollapse.collapse('hide');
    });
  }
  
  // ------------------------------------------------------- //
  //   Bootstrap Fixed Smooth Scroll
  // ------------------------------------------------------ //
	$('a[href^="#"]' + 'a:not(".carousel-control-prev")' + 'a:not(".carousel-control-next")').click(function() {
		var speed = 800;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
  
  // ------------------------------------------------------- //
  //   Add class
  // ------------------------------------------------------ //
	var windows = $(window);
	var screenSize = windows.width();
	var sticky = $('.fixed-top-nav');

	windows.on('scroll', function () {
		var scroll = windows.scrollTop();
		var headerHeight = window.innerHeight;

		if (screenSize >= 320) {
			if (scroll < headerHeight) {
				sticky.removeClass('is-display');
			} else {
				sticky.addClass('is-display');
      }
		}

    });
  
  // ------------------------------------------------------- //
  //   Page Back to TOP
  // ------------------------------------------------------ //
	$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });
  
});