jQuery(document).ready(function($){

	$(".blog-top-main-box").addClass("countPost");

	var n = $( ".countPost" ).length;
	//alert(n);    

	$( ".countPost" ).last().after( '<div class="sb"><a href="#" id="loadMore"><span>Load More</span> Posts <i class="fa fa-refresh" aria-hidden="true"></i></a></div>' );

    if( n == 4 ){
        //alert('hello');
        $(".sb").addClass("loadhide");
    }

    $(".countPost").slice(0, 4).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".countPost:hidden").slice(0, 4).fadeIn(2000);
        if ($(".countPost:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });

});