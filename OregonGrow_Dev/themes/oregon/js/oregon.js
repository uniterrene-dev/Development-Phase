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

	//product gallery slide options
	/*$('.bxslider').bxSlider({
	  minSlides: 4,
	  maxSlides: 4,
	  moveSlides: 1,
	  slideWidth: 205,
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
			};

			var settings2 = {
				minSlides: 3,
				maxSlides: 3,
				moveSlides: 1,
				slideWidth: 220,
				slideMargin: 2,
				infiniteLoop: false,
				hideControlOnEnd: true,
				responsive: true,
				touchEnabled: true,
				pager: false,
				controls: true,
				nextText: 'Next',
				prevText: 'Prev',
			};
			return ($(window).width()<640) ? settings1 : settings2;
		}

		var SB_Slider;

		function SB_Script() {
			SB_Slider.reloadSlider(settings());
		}

		var SB_Slider = $('.bxslider').bxSlider(settings());
		$(window).resize(SB_Script);

		//single product banner zoom
		$('#ex3').zoom({ 
			on:'click',
			touch: true,
			magnify: 1,
	 
		});

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

});