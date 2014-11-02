// Currently active item
var current_item = 0;

// Fadeout time settings
var section_hide_time = 1300;
var section_show_time = 1300;

// Initialization
jQuery(document).ready(function($) {

	// Switch section
	$("a", '.mainmenu').click(function() 
	{
		if( ! $(this).hasClass('active') ) { 
			current_item = this;
			// closes all visible divs of the section
			$('.section:visible').fadeOut( section_hide_time, function() { 
				$('a', '.navbar').removeClass( 'active' );  
				$(current_item).addClass( 'active' );
				var new_section = $( $(current_item).attr('href') );
				new_section.fadeIn( section_show_time );
			} );
		}
		return false;
	});		
});