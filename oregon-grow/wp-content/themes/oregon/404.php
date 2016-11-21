<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

	<section id="introduction">
        <div class="container clearfix">
			<h2><span><?php _e( 'Not Found!!!', 'oregon' ); ?></span></h2>
			<div class="left-content">
				<h4><?php _e( 'This is somewhat embarrassing, isn’t it?', 'oregon' ); ?></h4>
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'oregon' ); ?></p>
				<?php get_search_form(); ?>
			</div>
			<div class="right-content">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>