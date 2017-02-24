(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
	});
	
})(jQuery, this);

	
	
	jQuery(document).ready(function($){
		setTimeout(function(){
			$('.collapsed-image').attr("src","http://hokip.at.wptest.us/wp-content/uploads/2016/12/Pc-Bubble1.png");
		},2700);
	});
	
	jQuery(document).ready(function($){
		setTimeout(function(){
			$('.collapsed-image').attr("src","http://hokip.at.wptest.us/wp-content/uploads/2016/12/Pc-Bubble1.png");
		},3700);
	});
	
	jQuery(document).ready(function($){
		setTimeout(function(){
			$('.collapsed-image').attr("src","http://hokip.at.wptest.us/wp-content/uploads/2016/12/Pc-Bubble1.png");
		},4700);
	});
	
	jQuery(document).ready(function($){
		setTimeout(function(){
			$('.collapsed-image').attr("src","http://hokip.at.wptest.us/wp-content/uploads/2016/12/Pc-Bubble1.png");
		},5700);
	});
	
	jQuery(document).ready(function($){
		setTimeout(function(){
			$('.collapsed-image').attr("src","http://hokip.at.wptest.us/wp-content/uploads/2016/12/Pc-Bubble1.png");
		},6700);
	});
	
	jQuery(document).ready(function($){
	      $('input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="time"], input[type="week"]').each(function() {
		var el = this, type = $(el).attr('type');
		if ($(el).val() == '') $(el).attr('type', 'text');
		$(el).focus(function() {
		  $(el).attr('type', type);
		  el.click();
		});
		$(el).blur(function() {
		  if ($(el).val() == '') $(el).attr('type', 'text');
		});
	      });
	});



	jQuery(document).ready(function($){
		$('.spoiler-trigger').click(function() {
			$("body, html").animate({
				scrollTop: $('.panel-collapse.in').position().top
			});
		});
	});
