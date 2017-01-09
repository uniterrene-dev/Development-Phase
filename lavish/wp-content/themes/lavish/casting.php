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
      <h3> Cast Your Lavish Mate® </br>
        Model Job</h3>
      <div class="casting-about-bottom-content">
        <p> The need for reservations is very high at Lavish Mate®. Since we work with escort models that are well established in their personal and professional life, it is important that they be informed 
          beforehand of any date/ travel engagement that you might be looking forward to. In our exclusive VIP member lounge we provide pictures of our charming ladies where you 
          may admire also their beautiful faces; this helps you to choose one of the fascinating models for an unforgettable date. </p>
        <p> The beautiful and alluring Lavish Mate ® models also travel companions love to escort you somewhere new, and always enjoy a chance to venture out of their locale and savor an extended travel 
          assignment with you. Whether you're booking 6 hours for a coast-to-coast business trip, or a multi-day indulgence, we can definitely assist you. Perhaps you're seeking a revitalizing 
          weekend away, or a relaxing vacation for a few weeks? Regardless of your timing, we'll do our best to accommodate your schedule and preferences for companionship. Your time 
          will be fondly remembered.As soon as you become a client of our high-class escort agency we offer you free access promptly and smoothly, have a nice time in the member lounge. </p>
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
          <h3> They’re All So Amazing; How Do You Make Your Mind Up? </h3>
        </div>
        <div class="casting-amazing-top-contant">
          <p> We know, we’ve probably made it challenging for  you to choose the cream 
            of the crop from our selection of companions. If you need a little extra help, 
            you can check out feedback from other satisfied clients. If you would like an 
            insider’s opinion, please <strong>contact us</strong> for advice. We look forward to being 
            of service and welcoming you to Lavish Mate®. </p>
        </div>
      </div>
      <div class="casting-amazing-top-right">
        <div class="casting-amazing-top-heading">
          <h3> They’re All So Amazing; How Do You Make Your Mind Up? </h3>
        </div>
        <div class="casting-amazing-top-contant">
          <p> We know, we’ve probably made it challenging for  you to choose the cream 
            of the crop from our selection of companions. If you need a little extra help, 
            you can check out feedback from other satisfied clients. If you would like an 
            insider’s opinion, please <strong>contact us</strong> for advice. We look forward to being 
            of service and welcoming you to Lavish Mate®. </p>
        </div>
      </div>
    </div>
    <div class="casting-amazing-bottom">
      <p> We would like to thank you in advance for your trust and look forward to answering your booking inquiry immediately and discreetly. </p>
      <p> Please note that online booking requires 2 hours in advance in order to process for our operators. If you would like to let us know any of your wishes please use the required forms attached. </p>
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
   <h3> Lavish Mate fees guide </h3>
   <p> Lavish Mate® luxury escort agency accepts cash or credit card to settle your account for your time with your elite date. For travel companion appointments, pre-payment is required 
(minimum 2-5 days before flights). You can view all the actual fee schedules above. </p>
   <p> Our elegant companions are available to travel worldwide. Whether throughout United State, or to Europe, Middle East or Oceania (Asia/ Australia/ New Zealand), we will have an 
extraordinary, upscale woman who can make your time unforgettable. Our model escort companions are frequently called to international locations please see our Gentleman FAQ 
for more details on booking a beautiful experience with one of our gorgeous angels. </p>
  <p> Have we aroused your interest? We are very selective in casting our optimum girls that provide honesty, loyalty and have charming personalities. Then we are happy to receive your application!
We are looking forward to meeting you! </p>

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
