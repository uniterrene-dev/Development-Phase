jQuery(document).ready(function($){

	//alert('testing');
	//jQuery('#tab-highlights').css("display","block");
	//jQuery('#tab-features').css("display","block");
	//jQuery('#tab-specifications').css("display","block");
	//jQuery('#tab-gallerys').css("display","block");
	//jQuery('#tab-accessories').css("display","block");
	//jQuery('#tab-other_models').css("display","block");
	//var avl = jQuery( "span.avl" ).html();
	//jQuery( ".note" ).append( avl );
	//$('.button.product_type_simple.add_to_cart_button.ajax_add_to_cart').text('cart');

	//product gallery slide divs
	$(".thumbnails").addClass("bxslider");

	

	//calculate number of images
	$('.bxslider').find(function() {
	   var x = $('.size-shop_thumbnail', this).length;
	   //alert(x);
	   if( x <= 3 ){
	   	$( ".bx-controls" ).hide();
	   }
	});

	//product gallery slide options
	/*$('.bxslider').bxSlider({
	  minSlides: 1,
	  maxSlides: 3,
	  moveSlides: 1,
	  slideWidth: 180,
	  slideMargin: 2,
	  infiniteLoop: false,
	  hideControlOnEnd: true,
	  responsive: true,
	  touchEnabled: true,
	  pager: false,
	  controls: true,
	  nextText: 'Next',
	  prevText: 'Prev',
	});*/

	//product slider with breakpoints
	var settings = function() {
			var settings1 = {
				minSlides: 1,
				maxSlides: 1,
				moveSlides: 1,
				slideWidth: 83,
				slideMargin: 0,
				infiniteLoop: false,
				hideControlOnEnd: true,
				responsive: true,
				touchEnabled: true,
				pager: false,
				controls: true,
				nextText: 'Next',
				prevText: 'Prev',
				controls: true,				
			};

			var settings2 = {
				minSlides: 3,
				maxSlides: 3,
				moveSlides: 1,
				slideWidth: 83,
				slideMargin: 0,
				infiniteLoop: false,
				hideControlOnEnd: true,
				responsive: true,
				touchEnabled: true,
				pager: false,
				controls: true,
				nextText: 'Next',
				prevText: 'Prev',
				controls: true,
			};
			return ($(window).width()<640) ? settings1 : settings2;
		}

		var SB_Slider;

		function SB_Script() {
			var SB_Slider;
			SB_Slider.reloadSlider(settings());
		}

		var SB_Slider = $('.bxslider').bxSlider(settings());
		$(window).resize(SB_Script);

	


		//product tabs as menu
      	/*$('.tabs-subrata li.res_menu a').hover(function(e){
			//alert('cc');
		 	e.preventDefault();
		 	$('.tabs-subrata li').css({'display':'block'});
		});*/		

		// $(window).load(function(){
		// 	if ($(window).width() <= 980) {
		// 		$(".tabs-subrata li a").bind('click', function(){
		// 	        $(".tabs-subrata li").css({'display':'block'});
		// 	    });
		// 	    $(".tabs-subrata li a").click(function(){
		// 	        $(".tabs-subrata li").css({'display':'none'});
		// 	    });
		// 	}
		// });


		//tab click smooth effect
		/*$('.wc-tabs li a').on('click', function(e){
	  	  	//alert('sfds');
	        e.preventDefault();
	        var divAtr = $(this).attr('href');
	        var secOffset= $(divAtr).offset().top;
	        //alert(secOffset);
	        var secOffsetExact=secOffset-90;
	        $('html,body').animate({
	           scrollTop:secOffsetExact
	        },2000); 
	  	});*/


		//on scroll stick section
		/*$(window).scroll(function(){
		  var sticky = $('.tabbar');
		  scroll = $(window).scrollTop();

		      var bar = $('.woocommerce-tabs').offset().top;
		      //var shortBar=bar+150;

		  	if (scroll >= bar){
		   		sticky.addClass('fix-div');
			}else {
		  		sticky.removeClass('fix-div'); 
		  	}
		});*/


	 $('.tabbar .res_menu a').on('click', function(e){
	 	e.preventDefault();
	 	//var arrow=$(this).children('i').attr('class');
	 	//alert(arrow);

	 	$('.tabbar .tabs-subrata').toggleClass('hide_show');
	 	$(this).children('i').toggleClass("fa-angle-down fa-angle-up");

	 });

	 $('.tabs-subrata li a').on('click', function(){
       $('.tabbar .tabs-subrata').removeClass('hide_show');
	 });	

	 //onclick change main image
	$('.woocommerce-main-image').removeAttr('href');
	$('.thumbnails .zoom').click(function(e){
      	e.preventDefault();
     
      	var photo_fullsize =  $(this).find('img').attr('src').replace('-180x180','');

		$('.woocommerce-main-image img').attr('src', photo_fullsize);
		$('.woocommerce-main-image img').attr('srcset', '');		
    });

    //for drop down menu   
    $(document).on('click','#slidx-shadow',function(){
    	$('#slidx-shadow').hide();
    	$('#slidx-button').css({'right':'0%'});
    	$('.slidx-menu').css({'right':'-100%'}).removeClass('slidx-open');

    });

     $(document).on('click','#slidx-button',function(){
     	$(this).toggleClass('forMenuBtn');
     	$('.slidex-wrap').fadeToggle('slow');
     	// $('.slidex-wrap').toggleClass('forOpacity');
    	$('.slidx-menu').toggleClass('slidx-open');
    });

   	$(document).on('click', '.slidex-wrap', function(){
   			//$(this).toggleClass('forOpacity');
   			$(this).fadeToggle('slow')
    	$('#slidx-button').toggleClass('forMenuBtn');
    	$('.slidx-menu').toggleClass('slidx-open');
   	})

    // $('#slidex-wrap').bind('click',function(){
    // 	$(this).toggleClass('forOpacity');
    // 	alert();
    // 	$('.slidx-menu').toggleClass('slidx-open');
    // });


    //for smooth scroll on anchor tags
    $("a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
if($(hash).length == 0) {
//alert('it doesnt exist');
var siteurl=$(this).attr('href');
window.location.href = siteurl;
}else{
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
window.location.hash = hash;
	 
      }); 
	  }
    } // End if
  });

});