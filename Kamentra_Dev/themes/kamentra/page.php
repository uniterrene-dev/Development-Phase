<?php
/*
* The template for inner pages
*/
get_header(); ?>

	<section class="headingDescription res_headingDescription">
	  <div class="skewSec"></div>
	  <div class="container">
	    <div class="servive_inner clearfix" style="min-height: 250px;">
	    	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			    <?php the_content(); ?>	
		    <?php endwhile; endif; ?>
	    </div>
	   </div>
	</section>

<?php get_footer(); ?>