<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

<section class="page_heading">
  <div class="page_heading_wrapper">
  	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<h2><?php the_title(); ?></h2>
    <?php endwhile; endif; ?>
  </div>
</section>

<section class="innerpage_content">
  <div class="container" style="min-height: 350px;">

		<h2 class="page-title inner-page-heading"><span><?php _e( 'Not Found!!!', 'vrsp' ); ?></span></h2>
		<h4 class="not_found"><?php _e( 'This is somewhat embarrassing, isn’t it?', 'vrsp' ); ?></h4>
		<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'vrsp' ); ?></p>
		<?php get_search_form(); ?>

	</div>
</section>

<?php get_footer(); ?>