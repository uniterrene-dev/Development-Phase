//casting from js 
jQuery('.casting-tab-name').click(function(e) {	
	jQuery('.casting-tab-details').hide();
    var ids = jQuery(this).attr('data-href');
	jQuery(ids).show();
});


// ***** vip accordion ***** // 
(function($) {
    $('.accordion > li:eq(0) a').addClass('active');
	
	if ( $( '.accordion > li:eq(0) a' ).hasClass( "active" ) ) {
	$('.accordian-active p').show();
	}
	//$('.accordian-active h6').show();
    $('.accordion a').click(function(j) {
		//alert();
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('accordion-panel').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('accordion-panel.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
})(jQuery);
// ***** vip accordion end***** // 