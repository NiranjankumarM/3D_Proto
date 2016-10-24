			jQuery(document).ready(function() {
				jQuery('.toggle-nav').click(function(e) {
					jQuery(this).toggleClass('active_nav');
					jQuery('.nav_menu ul').toggleClass('active_nav');
			 
					e.preventDefault();
				});

				$('.contact').click(function(){
					$('html, body').animate({
						scrollTop: $( $.attr(this, 'href') ).offset().top
					-63}, 500);
					return false;
				});
				});
