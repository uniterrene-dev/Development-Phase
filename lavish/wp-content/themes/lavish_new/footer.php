<?php
/**
 * The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

?>
<footer>
 <div class="footer-div">
  <div class="container">
   <div class="footer-top clearfix">
    <div class="footer-left">
     <div class="footer-left-col-1 footer-col">
      <h5> Get to Know Us </h5>
      <ul>
<!--
       <li><a href="#">Our Models</a></li>
       <li><a href="#">About LavishMate</a></li>
       <li><a href="#">Our Service</a></li>
       <li><a href="#">Subscribe News Letter </a></li>
-->
<?php if ( has_nav_menu( 'get-know' ) ) : ?>

<?php wp_nav_menu( array(
		'theme_location' => 'get-know',
		'menu_id'        => '',
'menu' => 'top', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<li>%3$s</li>', 'item_spacing' => 'preserve',
    'depth' => 0, 'walker' => ''
	) ); ?>
        

<?php endif; ?>	
      </ul>
     </div>
     <div class="footer-left-col-2 footer-col">
      <h5> Content </h5>
      <ul>
       <?php if ( has_nav_menu( 'content' ) ) : ?>

<?php wp_nav_menu( array(
		'theme_location' => 'content',
		'menu_id'        => '',
'menu' => 'top', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<li>%3$s</li>', 'item_spacing' => 'preserve',
    'depth' => 0, 'walker' => ''
	) ); ?>
        

<?php endif; ?>
      </ul>
     </div>
    </div>
    <div class="footer-middle">
      <div class="footer-logo">
       <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/footer-logo.png" / alt=""></a>
      </div>
    </div>
    <div class="footer-right">
     <div class="footer-left-col-1 footer-col">
      <h5> Future Lavish Mate </h5>
      <ul>
       <?php if ( has_nav_menu( 'future' ) ) : ?>

<?php wp_nav_menu( array(
		'theme_location' => 'future',
		'menu_id'        => '',
'menu' => 'top', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<li>%3$s</li>', 'item_spacing' => 'preserve',
    'depth' => 0, 'walker' => ''
	) ); ?>
        

<?php endif; ?>
      </ul>
     </div>
     <div class="footer-left-col-2 footer-col">
      <h5> Let Us Help You </h5>
      <ul>
       <?php if ( has_nav_menu( 'help' ) ) : ?>

<?php wp_nav_menu( array(
		'theme_location' => 'help',
		'menu_id'        => '',
'menu' => 'top', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<li>%3$s</li>', 'item_spacing' => 'preserve',
    'depth' => 0, 'walker' => ''
	) ); ?>
        

<?php endif; ?>
      </ul>
     </div>
    </div>
   </div> 
   <div class="footer-bottom">
     <p> Payment options </p>
     <p>We accept the following credit cards: </p>
     <div class="payment-div"> 
       <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/credit_grey.png" / alt="">
     </div>
   </div>
   <div class="copy-right-div clearfix">
    <div class="copy-right-left">
      <p> <?php echo get_option('webq_copy');?> </p>
    </div>
    <div class="copy-right-right">
     <ul>
      <li> <a href="<?php echo get_option('webq_fb');?>"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
      <li> <a href="<?php echo get_option('webq_twt');?>"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
      <li> <a href="<?php echo get_option('webq_ins');?>"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
      <li> <a href="<?php echo get_option('webq_youtube');?>"> <i class="fa fa-youtube" aria-hidden="true"></i> </a> </li>
     </ul>
    </div>
   </div>
  </div>
 </div>
</footer>

<!--<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() )?>/js/jquery-1.11.0.js"></script>-->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() )?>/js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() )?>/js/custom.js"></script> 
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() )?>/js/jquery_dropdown.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() )?>/js/javascripts.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() )?>/js/jquery.easing.js" ></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() )?>/js/jquery.bxslider.min.js" ></script>

<!--<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() )?>/js/scripts.js" ></script>-->
<script>
	var l = $('#gupi_ul > li').length;
	var li_width = $('#gupi_ul > li').outerWidth(true);
	var total_width = li_width*l;
	var tw = total_width+(10*l);	
	$('#gupi_ul').css({'width': tw+'px'});
</script>
<?php wp_footer(); ?>
</body>
</html>
