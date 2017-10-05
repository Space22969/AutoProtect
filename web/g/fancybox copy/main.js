"use strict";

$(document).ready(function() {
	
	
	$('.slider').slick();
	$('.fancyimg').fancybox(); 
	
	
    $('#blogLink').on('click', function(e) {
		e.preventDefault();
		var $link = $(e.currentTarget);
		console.log($link.attr('href').substr(1));
		var blockOffset = $('[name="' + $link.attr('href').substr(1) + '"]').offset();
		$('html,body').animate({scrollTop: blockOffset.top} ,500);
		return false;
	});
	
	$('#peopleLink').on('click', function(e) {
		e.preventDefault();
		var $link = $(e.currentTarget);
		console.log($link.attr('href').substr(1));
		var blockOffset = $('[name="' + $link.attr('href').substr(1) + '"]').offset();
		$('html,body').animate({scrollTop: blockOffset.top} ,700);
		return false;
	});
	
	$('#naturalLink').on('click', function(e) {
		e.preventDefault();
		var $link = $(e.currentTarget);
		console.log($link.attr('href').substr(1));
		var blockOffset = $('[name="' + $link.attr('href').substr(1) + '"]').offset();
		$('html,body').animate({scrollTop: blockOffset.top} ,700);
		return false;
	});
	
	$('#aboutmeLink').on('click', function(e) {
		e.preventDefault();
		var $link = $(e.currentTarget);
		console.log($link.attr('href').substr(1));
		var blockOffset = $('[name="' + $link.attr('href').substr(1) + '"]').offset();
		$('html,body').animate({scrollTop: blockOffset.top} ,700);
		return false;
	});		 
	
	$(window).scroll(function() {
	if($(this).scrollTop() != 0) {
	$('#toTop').fadeIn();
	} else {
	$('#toTop').fadeOut();
	}
	}); 
	$('#toTop').click(function() {
	$('body,html').animate({scrollTop:0},1000);
	});
	
});
