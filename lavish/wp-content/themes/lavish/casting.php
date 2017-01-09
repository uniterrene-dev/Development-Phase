<?php
/**
 * Template Name: Casting Page
 */
get_header('casting');
?>

<section id="casting-about" class="casting-about-div">
  <div class="container">
    <div class="casting-about-top">
      <ul>
        <?php if ( has_nav_menu( 'casting' ) ) : ?>

<?php wp_nav_menu( array(
		'theme_location' => 'casting',
		'menu_id'        => '',
'menu' => 'top', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<li>%3$s</li>', 'item_spacing' => 'preserve',
    'depth' => 0, 'walker' => ''
	) ); ?>
        

<?php endif; ?>	
      </ul>
      <div class="about-box-divider"> <span> </span> </div>
    </div>
    <div class="casting-about-bottom">
      <h3> <?php echo get_option('webq_cast_header');?></h3>
      <div class="casting-about-bottom-content">
        <p> <?php echo get_option('webq_cast_one');?> </p>
        <p> <?php echo get_option('webq_cast_two');?> </p>
      </div>
    </div>
  </div>
</section>
<section id="casting-amazing" class="casting-amazing-div">
  <div class="container">
    <div class="casting-amazing-top clearfix">
      <div class="about-box-divider"> <span> </span> </div>
      <div class="casting-amazing-top-left">
        <div class="casting-amazing-top-heading">
          <h3> <?php echo get_option('webq_amz_one_head');?> </h3>
        </div>
        <div class="casting-amazing-top-contant">
          <p> <?php echo get_option('webq_amz_one_des');?></p>
        </div>
      </div>
      <div class="casting-amazing-top-right">
        <div class="casting-amazing-top-heading">
          <h3> <?php echo get_option('webq_amz_two_head');?> </h3>
        </div>
        <div class="casting-amazing-top-contant">
          <p> <?php echo get_option('webq_amz_two_des');?></p>
        </div>
      </div>
    </div>
    <div class="casting-amazing-bottom">
      <?php echo get_option('webq_amz_btm_content');?>
    </div>
  </div>
</section>
<section id="casting-from" class="casting-from-div">
  <div class="container">
    <div class="casting-tab">
      <ul>
        <li><a data-href="#contact-info" href="javaScript:void(0);" class="casting-tab-name">Contact Info</a></li>
        <li><a data-href="#personal-info" href="javaScript:void(0);" class="casting-tab-name">Personal info</a></li>
        <li><a data-href="#four-photos" href="javaScript:void(0);" class="casting-tab-name">four photos</a></li>
      </ul>
    </div>
    <?php //echo do_shortcode('[wpuf_form id="164"]');?>
    <div class="casting-from-box">
      <?php echo do_shortcode('[wpuf_form id="164"]');?>
    </div>
  </div>
</section>

<section id="free-gide" class="free-gide-div">
 <div class="container">
  <div class="free-gide-box">
   <h3> <?php echo get_option('webq_lavish_header');?></h3>
   
<?php echo get_option('webq_lavish_des');?>
    <div class="copyscape-btn">
      <a href="#">
        <img src="http://localhost/public_html/newwp/lavish/wp-content/themes/lavish/images/copyscape-banner-gray.png" alt="">
      </a>
    </div>
  </div>
 </div>
</section>
<?php
get_footer();
?>
