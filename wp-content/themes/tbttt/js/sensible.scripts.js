jQuery(function($){
	
	$(window).load(function() {
  		$('.flexslider').flexslider({
    		animation: "fade",
			controlNav: false
  		});
	});	
	
	$(document).ready(function() {
		$('.toggle-menu').jPushMenu();
	});
	
});