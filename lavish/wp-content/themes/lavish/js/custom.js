//casting from js 
jQuery('.casting-tab-name').click(function(e) {	
	jQuery('.casting-tab-details').hide();
    var ids = jQuery(this).attr('data-href');
	jQuery(ids).show();
});

 
//casting from js end //

