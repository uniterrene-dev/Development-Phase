jQuery(document).ready(function(){

  jQuery('.collapsible_panel ul li > a').on('click', function(e){
  	  e.preventDefault();
  	 // alert('ffggf');
  	 var $currentItem= jQuery('.collapsible_panel div.content');
  	 var $curentList=jQuery('.collapsible_panel ul li > a');
  	 $currentItem.slideUp();
     $curentList.removeClass('active');
  	 var $nextItem=jQuery(this).siblings('.collapsible_panel div.content');

  	  
    if( jQuery($nextItem).is(':visible')){
    	//alert('visible');
         $nextItem.slideUp(300);
         jQuery(this).removeClass('active');
    }
     else{
        $nextItem.slideDown(300);
        //alert('Not visible');
        jQuery(this).addClass('active');
     }
  	
     
  });



  // scroll top

  jQuery('.uparrow a').hide();
  	jQuery(window).scroll(function(){

  		var winScroll= jQuery(this).scrollTop();
  		//console.log(winScroll);
  		if(winScroll>150){
  			jQuery('.uparrow a').fadeIn();
  		}else{
  			jQuery('.uparrow a').fadeOut();
  		}
    });
        

  	  jQuery('.uparrow a').on('click', function(event){
        event.preventDefault();
        jQuery('html,body').animate({scrollTop:0},800);
           return false;
  	  });

  //  Banner Down Arrow
  	  jQuery(".down_arrow a.circle").click(function(e) {
  	  	e.preventDefault();
        jQuery('html, body').animate({
          scrollTop: jQuery("#introduction").offset().top
         }, 2000);
       });

// Introduction Down Arrow
  	  jQuery('#introduction .content a.button').on('click', function(e){
         e.preventDefault();
         jQuery('html,body').animate({
         	scrollTop:jQuery("#product_highlight").offset().top
         },2000);
  	  });
	  
// Technical Details Down Arrow
  	  jQuery('#tech_details a.button').on('click', function(e){
         e.preventDefault();
         jQuery('html,body').animate({
         	scrollTop:jQuery("#models").offset().top
         },2000);
  	  });


 // One page navigation smooth scroll
  	  jQuery('nav a').on('click', function(e){
  	  	//alert('sfds');
         e.preventDefault();
         var divAtr = jQuery(this).attr('href');
         var secOffset= jQuery(divAtr).offset().top;
         //alert(secOffset);
         jQuery('html,body').animate({
            scrollTop:secOffset
          },2000); 

  	  });

// one page active button

      var aChildren = jQuery("nav li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {    
        var aChild = aChildren[i];
        var ahref = jQuery(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values
     console.log(aArray);
    jQuery(window).scroll(function(){
        var windowPos = jQuery(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = jQuery(window).height(); // get the height of the window
        var docHeight = jQuery(document).height();

        for (var i=0; i < aArray.length; i++) {
            var theID = aArray[i];
            var divPos = jQuery(theID).offset().top; // get the offset of the div from the top of page
            var divExactPos=divPos-20;
            var divHeight = jQuery(theID).height(); // get the height of the div in question
            if (windowPos >= divExactPos && windowPos < (divExactPos + divHeight)) {
                jQuery("a[href='" + theID + "']").addClass("active");
            } else {
                jQuery("a[href='" + theID + "']").removeClass("active");
            }
        }

        if(windowPos + windowHeight == docHeight) {
            if (!jQuery("nav li:last-child a").hasClass("active")) {
                var navActiveCurrent = jQuery(".active").attr("href");
                jQuery("a[href='" + navActiveCurrent + "']").removeClass("active");
                jQuery("nav li:last-child a").addClass("active");
            }
        }
    });

    	


    //Products Highlights More Text
    jQuery('#product_highlight a.more_btn').on('click', function(){
        // event.preventDefault();
         jQuery('#product_highlight div.more').slideUp(300);
         var $moreDiv= jQuery(this).siblings('#product_highlight div.more');
         if(jQuery($moreDiv).is(":visible")){
          jQuery('#product_highlight div.more').slideUp(300);
          //alert('visible');
          console.log('visible');
        }else{

         jQuery(this).siblings('div.more').slideDown(300);
        // alert('invisible');
        console.log('invisible');
        }
    });


    //tech details popup

    //$('#tech_details .popbox .circle a').hover( function(e){
//       e.preventDefault();
//       //alert('sacxas');
//      $('#tech_details .popbox div.area_highlight').slideUp();
//       var $popShow=$(this).parent().siblings('#tech_details .popbox div.area_highlight');
//       $('#tech_details .popbox circle a').removeClass('rotate');
//      // alert(popShow);
//       console.log($popShow);
//       if($($popShow).is(":visible")){
//       // alert('show');
//        $('#tech_details .popbox div.area_highlight').slideUp();
//        $(this).removeClass('rotate');
//       }else{
//       // alert('hide');
//        $(this).parent().siblings('#tech_details .popbox div.area_highlight').slideDown();
//        //$popShow.slideDown();
//        $(this).addClass('rotate');
//       }
//       
//       //$(this).parent().siblings('div.content').toggle();
//    });

});	