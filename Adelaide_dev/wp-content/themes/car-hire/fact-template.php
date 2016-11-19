<?php /* Template Name: Fact Template */ get_header(video); ?>

<section id="inner_body">
       <div class="container">
          <div class="client_bg fact">
		  
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<p><?php the_content(); ?></p>	
		
		
		<?php endwhile; endif; ?>
	
		
		</div>
	</div>
</section>


<?php get_footer(); ?>