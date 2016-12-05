<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

<!--slider sec-->
<section class="sliderSec about_head">
  <div class="overlay">
    <div class="contentArea">
      <div class="container clearfix"></div>
    </div>
  </div>
</section>
<!--end slider-->

<section class="about about_page">
  <div class="container clearfix">
     <div class="about_content">
		<h2 class="page-title inner-page-heading"><span><?php _e( 'Not Found!!!', 'kettleton' ); ?></span></h2>
		<div class="left-content">
			<h4><?php _e( 'This is somewhat embarrassing, isn’t it?', 'kettleton' ); ?></h4>
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'kettleton' ); ?></p>
			<?php get_search_form(); ?>
		</div>
		<div class="right-content">
			<?php get_sidebar(); ?>
		</div>
	</div>
  </div>
</section>

<?php get_footer(); ?>