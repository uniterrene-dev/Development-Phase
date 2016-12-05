<?php 
/*
* The template for displaying the front page
*/
get_header(); 
global $kamentra_options;
?>

<!--start service section-->
<section id="services">
  <div class="container clearfix">
    <?php 
      $args = array( 'post_type' => 'services', 'posts_per_page' => 4, 'order' => 'DESC', 'orderby' => 'date' );
      $the_query = new WP_Query( $args ); 
    ?>

    <?php if ( $the_query->have_posts() ) { ?>
    <?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
      <div class="service_col_1"> 
        <a href="<?php the_permalink(); ?>">
          <?php
            if ( has_post_thumbnail() ) { 
            the_post_thumbnail( 'full' );
          }
          else { ?>
            <?php _e( 'Sorry, no content found' ); ?>
          <?php }
          ?>
        </a>
        <div class="service_content">
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>">Learn More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
      </div>
      <?php } wp_reset_postdata(); ?>
    <?php } ?>
  </div>
</section>
<!--End service section--> 
<!--Start service section-->
<section id="rating_content">
  <div class="rating_overlay">
    <div class="rating_inner_cont">
      	<?php if ( is_active_sidebar( 'home-projects-information' ) ) : ?>
        	<?php dynamic_sidebar( 'home-projects-information' ); ?>
		<?php endif; ?>
    </div>
  </div>
</section>
<!--End service section--> 
<!--Start Contact section-->
<section id="contact_detail">
  <div class="container">
    <ul class="contact_detail">
      <li>
        <div class="contact_icon1"> <img src="<?php echo $kamentra_options['contact-img']['url']; ?>"/> </div>
        <a href="<?php echo $kamentra_options['contact-link']; ?>"><?php echo $kamentra_options['contact-text']; ?></a> </li>
      <li class="contact_detail_middle">
        <div class="contact_icon1"> <img src="<?php echo $kamentra_options['rfp-img']['url']; ?>"/> </div>
        <a href="<?php echo $kamentra_options['rfp-link']; ?>"><?php echo $kamentra_options['rfp-text']; ?></a> </li>
      <li class="contact_detail_last">
        <div class="contact_icon1"> <img src="<?php echo $kamentra_options['job-img']['url']; ?>"/> </div>
        <a href="<?php echo $kamentra_options['job-search-link']; ?>"><?php echo $kamentra_options['job-search-title']; ?></a> </li>
    </ul>
  </div>
</section>
<!--End Contact section-->

<?php get_footer(); ?>