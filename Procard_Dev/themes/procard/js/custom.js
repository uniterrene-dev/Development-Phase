jQuery(document).ready(function($){
//video page
$(".gallerySec #main:last-child").css("border-bottom", "none"); 

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



	$("#flexiselDemo3").flexisel({

        visibleItems: 4,

        itemsToScroll: 1,         

        autoPlay: {

            enable: true,

            interval: 5000,

            pauseOnHover: true

        }        

    });



	$("#flexiselDemo1").flexisel({

        visibleItems: 5,

        itemsToScroll: 1,         

        autoPlay: {

            enable: true,

            interval: 5000,

            pauseOnHover: true

        }        

    });



	//2nd child for more articles

    $(".articleContent .content1:nth-child(2)").addClass("content2");



    // popup

	/*$('.closePop').bind('click',function(){

	$('.popupSec').fadeOut();

	});
*/


	/*$('.part').bind('click',function(){

		//alert();

		var src = $(this).find('img').attr('src');

		$('.popupSec').fadeIn();

		var leftPopHeight = $('.popLeft').outerHeight(true);

		$('.popright').css({'height':leftPopHeight+'px'});

		$('.popLeft img').attr('src',src);

	});*/

	//for fancybox
	//$('.fancybox').fancybox();

	//video gallery
	(function() {

     
      var $window = $(window),
          flexslider = { vars:{} };

    
      function getGridSize() {
        return (window.innerWidth < 480) ? 1 :
               (window.innerWidth < 900) ? 2 : 3;
      }

     /* $(function() {
        SyntaxHighlighter.all();
      });*/

      $window.load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          animationSpeed: 400,
          animationLoop: false,
          itemWidth: 210,
          itemMargin: 20,
          minItems: getGridSize(), // use function to pull in initial value
          maxItems: getGridSize(), // use function to pull in initial value
          start: function(slider){
            $('body').removeClass('loading');
            flexslider = slider;
          }
        });
      });

      // check grid size on resize event
      $window.resize(function() {
        var gridSize = getGridSize();

        flexslider.vars.minItems = gridSize;
        flexslider.vars.maxItems = gridSize;
      });
    }());



});

// ================= Search top ========================== //

jQuery(function () {
    jQuery('a[href="#search2"]').on('click', function(event) {
        event.preventDefault();
        jQuery('#search2').addClass('open');
        jQuery('#search2 > form > input[type="search"]').focus();
    });
    
    jQuery('#search2, #search2 button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            jQuery(this).removeClass('open');
        }
    });
    
    
});

// ================= Search top End ========================== //