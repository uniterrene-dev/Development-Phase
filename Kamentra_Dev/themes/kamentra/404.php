<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

	<section class="headingDescription res_headingDescription">
	  <div class="skewSec"></div>
	  <div class="container">
	    <div class="servive_inner clearfix">

			<h2 class="page-title inner-page-heading"><span><?php _e( 'Not Found!!!', 'kamentra' ); ?></span></h2>
			<h4 class="not_found"><?php _e( 'This is somewhat embarrassing, isn’t it?', 'kamentra' ); ?></h4>
			<p class="search_try"><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'kamentra' ); ?></p>
			<?php get_search_form(); ?>

		 </div>
	   </div>
	</section>

<?php get_footer(); ?>