<?php
/*
* Template Name: Contact Us Template
*/
get_header(); 
?>

<!--slider sec-->
<section class="sliderSec about_head">
  <div class="overlay">
    <div class="contentArea">
      <div class="container clearfix"></div>
    </div>
  </div>
</section>
<!--end slider-->

<!--about section-->
<section class="about about_page">
  <div class="container clearfix">
     <div class="about_content">
        <div class="left-contact">
       	  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?> 
          <?php endwhile; endif; ?>
          
          <?php the_field('google_map'); ?>
        </div>
        <div class="right-contact">   
          <?php echo do_shortcode('[contact-form-7 id="80" title="Contact Form"]'); ?>
        </div>
     </div>
  </div>
</section>

<?php get_footer(); ?>