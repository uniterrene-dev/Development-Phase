<?php /* Template Name: Client Template */ get_header(custom); ?>

<section id="inner_body">
       <div class="container">

	   				<?php 
 
					//Define your custom post type name in the arguments
 
					$args = array('post_type' => 'client');
					 
					//Define the loop based on arguments
					 
					$loop = new WP_Query( $args );
					 
					//Display the contents
					 
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					
	
			<div class="client_bg">
		  
				<?php the_content(); ?>
					
	
		
			</div>
			<?php endwhile;?>
	</div>
</section>


<?php get_footer(); ?>