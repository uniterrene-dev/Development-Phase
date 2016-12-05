<?php
/*
* Template Name: Contact page template
*/

global $procard_options;

get_header(); ?>

	<section class="inner-div clearfix">
		<div class="container">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2 class="inner-page-heading"><span><?php the_title(); ?></span></h2>
		    <?php endwhile; endif; ?>
				<div class="main-content-part">
					<div class="contact-left">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						    <?php the_content(); ?>	
					    <?php endwhile; endif; ?>
					</div>
					<div class="contact-right">
						<?php if(!empty($procard_options['google-map'])) { ?> 
							<?php echo $procard_options['google-map']; ?>
						<?php } ?>
					</div>
				</div>
	    </div>
	</section>

<?php get_footer(); ?>