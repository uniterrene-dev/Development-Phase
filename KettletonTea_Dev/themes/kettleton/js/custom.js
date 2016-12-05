jQuery(document).ready(function($){
	var windowWidth = $(window).width();
	if(windowWidth <= 768){
		$('.overlayinner .content h1 br').remove();
	}
	var headerHeight = $('header').outerHeight(true);
	//alert(headerHeight);
	$('#forResponsiveMenu').css({'top':headerHeight+'px'});

	$('.responsiveMenu a').bind('click',function(){
		$('#forResponsiveMenu').slideToggle();
	});


	$('.searchLi').bind('mouseenter',function(){
		$('.searchDiv').fadeIn();
		$('.searchLi a').addClass('clicked');
	});
	$('.search_btn').bind('click',function(){
		$('.searchDiv').fadeOut();
		$('.searchLi a').removeClass('clicked');
	});


// popup
$('.closePop').bind('click',function(){
$('.popupSec').fadeOut();
});

$('.part').bind('click',function(){

	//alert();
	var src = $(this).find('img').attr('src');
	$('.popupSec').fadeIn();
	var leftPopHeight = $('.popLeft').outerHeight(true);
	$('.popright').css({'height':leftPopHeight+'px'});
	$('.popLeft img').attr('src',src);
});
	


});


