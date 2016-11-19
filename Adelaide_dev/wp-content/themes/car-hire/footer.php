<!-- footer -->

<footer class="mainFooter">
  <div class="topfooter">
    <div class="container">
      <div class="footerLogo"> <a href="index.html"> <img src="<?php echo get_template_directory_uri(); ?>/images/footerLogo.png"> </a> </div>
      <div class="footerPayment" style="padding-top:25px">
        <h4>payment option</h4>
        <ul class="paymentUl">
          
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/payment1.png"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/payment2.png"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/payment4.jpg"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/payment3.jpg"></a></li>
          
         <!--  <li><a href="#"><img src="<?php //echo get_template_directory_uri(); ?>/images/payment3.png"></a></li> -->
        </ul>
      </div>
      <div class="footerSocialNav footerPayment " style="padding-top:25px">
        
        <ul class="paymentUl">
          <li><h4>SOCIALIZE WITH US</h4></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png"></a></li>
          <!-- <li><a href="#"><img src="<?php //echo get_template_directory_uri(); ?>/images/instragam.png"></a></li>
          <li><a href="#"><img src="<?php //echo get_template_directory_uri(); ?>/images/youtube.png"></a></li>
          <li><a href="#"><img src="<?php //echo get_template_directory_uri(); ?>/images/googlePlus.png"></a></li>
          <li><a href="#"><img src="<?php //echo get_template_directory_uri(); ?>/images/in.png"></a></li> -->
        </ul>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="bottomfooter">
    <p>&copy; Copyright 2016-17, all right reserved</p>
  </div>
</footer>

<!-- /footer -->

<?php wp_footer(); ?>
</body><script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places&key=AIzaSyDR8py-02xsfWHFEfCz2oM0CJSIwcEQ-lQ"></script>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.geocomplete.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/logger.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/banner-slider.js"></script>
<script>

      $(function(){

        

        $("#geocomplete").geocomplete()

          .bind("geocode:result", function(event, result){

            $.log("Result: " + result.formatted_address);

          })

          .bind("geocode:error", function(event, status){

            $.log("ERROR: " + status);

          })

          .bind("geocode:multiple", function(event, results){

            $.log("Multiple: " + results.length + " results found");

          });

        

        $("#find").click(function(){

          $("#geocomplete").trigger("geocode");

        });

        

        

        $("#examples a").click(function(){

          $("#geocomplete").val($(this).text()).trigger("geocode");

          return false;

        });

        

      });

    </script>
<script>

      $(function(){

        

        $("#geocomplete1").geocomplete()

          .bind("geocode:result", function(event, result){

            $.log("Result: " + result.formatted_address);

          })

          .bind("geocode:error", function(event, status){

            $.log("ERROR: " + status);

          })

          .bind("geocode:multiple", function(event, results){

            $.log("Multiple: " + results.length + " results found");

          });

        

        $("#find").click(function(){

          $("#geocomplete1").trigger("geocode");

        });

        

        

        $("#examples a").click(function(){

          $("#geocomplete1").val($(this).text()).trigger("geocode");

          return false;

        });

        

      });

    </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<!--banner-->

<?php /*?><script src="<?php echo get_template_directory_uri(); ?>/js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script><?php */?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/flSlide/js/jquery.flexisel.js"></script>

<!--slider-->

<?php /*?><script>

    $('#slides').superslides({

      animation: 'fade'

    });

  </script><?php */?>
<script type="text/javascript">

$(function(){

  $('.crsl-items').carousel({

    visible: 3,

    itemMinWidth: 300,

    

    itemMargin: 9,

  });

  

  $("a[href=#]").on('click', function(e) {

    e.preventDefault();

  });

});

$(window).load(function() {

    

   

    $("#flexiselDemo3").flexisel({

        visibleItems: 5,

        itemsToScroll: 1,         

        autoPlay: {

            enable: true,

            interval: 10000,

            pauseOnHover: true

        }        

    });

    

    

});

</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/responsiveCarousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/timepicki.js"></script>
<script>
	$('#timepicker').timepicki(); 
</script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>-->

</html>
