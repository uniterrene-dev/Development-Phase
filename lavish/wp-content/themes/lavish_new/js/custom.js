//casting from js 
jQuery('.casting-tab-name').click(function(e) {	
	jQuery('.casting-tab-details').hide();
    var ids = jQuery(this).attr('data-href');
	jQuery(ids).show();
});


// ***** vip accordion ***** // 
(function($) {
    $('.accordion > li:eq(0) .accordion-tab').addClass('active');
	
	if ( $( '.accordion > li:eq(0) .accordion-tab' ).hasClass( "active" ) ) {
	//$('.accordian-active p').show();
	$('.accordian-active.accordion-panel').show();
	}
    $('.accordion .accordion-tab').click(function(j) {
		//alert();
		/*if ( $( '.accordion > li:eq(0) .accordion-tab' ).hasClass( "active" ) ) {
		$('.accordion').find('.accordion-panel.active').removeClass('active');	
		}*/
		
        var dropDown = $(this).closest('li').find('.accordion-panel');

        $(this).closest('.accordion').find('.accordion-panel').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('.accordion-tab.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
})(jQuery);
// ***** vip accordion end***** // 