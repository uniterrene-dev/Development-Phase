$(document).ready(function(){
	console.log($('#header').height());
	$('.responsiveMenu').bind('click',function(){
		$('.menuForResponsive').stop().slideToggle();
	});
	$(window).scroll(function(){
		if($(this).width() > 769){
		var scrollPos = $(this).scrollTop();
		var logo = 100,
			logoWidth = logo - scrollPos/15;
		var menuPad = 30,
			menuWidth = menuPad - scrollPos/10;		
		$('.logo').find('img').css({'width':logoWidth+'%'});
		$('div.menu ul').css({'padding': menuWidth+'px 10px','margin-top':'10px'});
		$('.chat-icon').css({'padding': menuWidth+'px 0px','margin-top':'10px'});
		//$('#header').addClass('headerBorder');
		console.log($('#header').height());
		if($('#header').height() == 65){
			$('#header').addClass('headerBorder');
		}else{
			$('#header').removeClass('headerBorder');
		}
		var headerHeight = $('#header').height();
	$('.menuForResponsive').css({'top':headerHeight+'px'});
	}
	});

	var headerHeight = $('#header').height();
	$('.menuForResponsive').css({'top':headerHeight+'px'});





var slide = $("div.slider").children("ul");
var images = $("div.slider").find("div.image");
var currentPosition = 1;
var WidthOfImages = images.width();
var totalImages = images.length;
var totalWidth = totalImages * WidthOfImages;

$("div.button").on("click", function() {

  var direction = $(this).data("dir");

  if (direction == "next") {
    currentPosition = currentPosition + 1;
    if (currentPosition <= totalImages) {
      slide.animate({
        "margin-left": "-=" + WidthOfImages
      });
    } else {
      currentPosition = 1;
      slide.animate({
        "margin-left": "0"
      });
    }
  } else if (direction == "prev") {
    currentPosition = currentPosition - 1;

    if (currentPosition > 0) {
      slide.animate({
        "margin-left": "+=" + WidthOfImages
      });
    } else if (currentPosition == 0) {
      currentPosition = totalImages;

      slide.animate({
        "margin-left": "-" + (totalWidth - WidthOfImages)
      });
    }

  }

});
















});