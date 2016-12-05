// JavaScript Document



// steky menu //

    function init() {

        window.addEventListener('scroll', function(e){

			

			if(scrollY>58){

				$(".steky-div").addClass("smaller");

			}

			else{

				 $(".steky-div").removeClass("smaller");

			}

        });

    }

    window.onload = init();





/* banner slider*/

 jQuery(document).ready(function($) {



	//Function to animate slider captions 

	function doAnimations( elems ) {

		//Cache the animationend event in a variable

		var animEndEv = 'webkitAnimationEnd animationend';

		

		elems.each(function () {

			var $this = $(this),

				$animationType = $this.data('animation');

			$this.addClass($animationType).one(animEndEv, function () {

				$this.removeClass($animationType);

			});

		});

	}

	

	//Variables on page load 

	var $myCarousel = $('#banner-slides'),

		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

		

	//Initialize carousel 

	$myCarousel.carousel();

	

	//Animate captions in first slide on page load 

	doAnimations($firstAnimatingElems);

	

	//Pause carousel //

	//$myCarousel.carousel('pause');//

	

	

	//Other slides to be animated on carousel slide event 

	$myCarousel.on('slide.bs.carousel', function (e) {

		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");

		doAnimations($animatingElems);

	});  

	

});

/* banner slider end*/



/*  accordion */



 jQuery(document).ready(function($) {

  $('.collapse.in').prev('.panel-heading').addClass('active');

  $('#accordion, #bs-collapse')

    .on('show.bs.collapse', function(a) {

      $(a.target).prev('.panel-heading').addClass('active');

    })

    .on('hide.bs.collapse', function(a) {

      $(a.target).prev('.panel-heading').removeClass('active');

    });

	

	

	//dropdown menu

	$('.navbar-nav > li.has-child').hover(function(event) {

		// $('ul.child').hide;

		event.stopPropagation();

         $(this).children('ul.sub-menu').slideToggle(300);

    });

	

	

	 $("#flexiselDemo2").flexisel2({

        visibleItems: 1,

        animationSpeed: 1000,

        autoPlay: true,

        autoPlaySpeed: 5000,            

        pauseOnHover: true,

        enableResponsiveBreakpoints: true,

        responsiveBreakpoints: { 

            portrait: { 

                changePoint:480,

                visibleItems: 1

            }, 

            landscape: { 

                changePoint:640,

                visibleItems: 1

            },

            tablet: { 

                changePoint:768,

                visibleItems: 1

            }

        }

    });

	

//$('.navigation .navbar .navbar-nav > li > a:not(.navigation .navbar .navbar-nav > li:first-child a)').hover(function() {

//    $('.navigation .navbar .navbar-nav > li > a').removeClass('active');

//});	

//	$('.navigation .navbar .navbar-nav > li').mouseout(function(){

//			$('.navigation .navbar .navbar-nav > li:first-child a').addClass('active');

//		});













});

/*  accordion end */