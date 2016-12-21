jQuery(document).ready(function($){



	$("#flexiselDemo3").flexisel({

		visibleItems: 4,

		itemsToScroll: 1,

		autoPlay: {

			enable: true,

	        interval: 5000,

			pauseOnHover: true

		}

	});

		

	$("#flexiselDemo4").flexisel({

		visibleItems: 5,

		itemsToScroll: 1,

		autoPlay: {

			enable: false,

			interval: 5000,

			pauseOnHover: true

		}

	});

    $("#testi").flexisel({

        visibleItems: 1,

        itemsToScroll: 1,

        autoPlay: {

            enable: true,

            interval: 5500,

            pauseOnHover: true

        }

    });



    $('.responsiveMenu a').bind('click',function () {

       $('.bottomHeader .navMenu ul').slideToggle();

        $('.close').bind('click',function () {

            $('.bottomHeader .navMenu ul').slideUp();

        })

    });



 	//extreme footer js in html

    $('a[href="#search"]').on('click', function(event) {

        event.preventDefault();

        $('#search').addClass('open');

        $('#search > form > input[type="search"]').focus();

    });

    

    $('#search, #search button.close').on('click keyup', function(event) {

        if (event.target == this || event.target.className == 'close-search' || event.keyCode == 27) {

            $(this).removeClass('open');

        }

    });	 


    //placeholder in search form
    $("#search #s").attr("placeholder", "Type keyword(s) here");  

    //change title tag for archive product title
    $("li.product .productDes").find('h3').replaceWith(function() {
                return '<h4>' + $(this).text() + '</h4>';
      });

    //controlling product gallery slider controls
    $('.owl-stage').find(function() {
       var x = $('.owl-item', this).length;
       //alert(x);
       if( x == 3 ){
        $( ".owl-controls" ).hide();
       }
    });

    //removing unwanted links
    $('.post-type-archive-product section.newsletter').unwrap();
    $('.post-type-archive-product .fooCon p').unwrap();
    $('.post-type-archive-product .colHead').unwrap();
    $( ".post-type-archive-product li.footerNav ul li a.woocommerce-LoopProduct-link" ).remove();

});