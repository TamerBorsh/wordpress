/* Responsive Navbar*/
$(function (){
	$(".heading").click(function(){
		$(".navbar ul").slideToggle(200);
	});
});

/*owl-carousel slider*/
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

/*crunchify-top*/
	jQuery(document).ready(function () {
		var offset = 220;
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.crunchify-top').fadeIn(duration);
			} else {
				jQuery('.crunchify-top').fadeOut(duration);
			}
		});
 
		jQuery('.crunchify-top').click(function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
	});