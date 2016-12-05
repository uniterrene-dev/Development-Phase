<?php

/*

* The template for inner pages

*/

get_header(); ?>



	<section class="inner-div clearfix">
		<div class="container">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2 class="inner-page-heading"><span><?php the_title(); ?></span></h2>
		    <?php endwhile; endif; ?>
			<div class="main-content-part">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				    <?php the_content(); ?>	
			    <?php endwhile; endif; ?>
			</div>
			<?php /*--below divs used for blog layout --*/?>
			<div class="left-content"></div>
			<div class="right-content"></div>
	    </div>
	</section>



<?php get_footer(); ?>