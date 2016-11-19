<?php /* Template Name: Audio Template */ get_header(video); ?>

<section id="inner_body">
       <div class="container">
          <div class="video_area clearfix">
		  
<?php 
 
					//Define your custom post type name in the arguments
 
					$args = array('post_type' => 'audio');
					 
					//Define the loop based on arguments
					 
					$loop = new WP_Query( $args );
					 
					//Display the contents
					 
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
						
						<div class="audio_box">
							<p><?php the_title(); ?></p>
							<audio controls >
								<source src="<?php the_content(); ?>">
							</audio> 
						</div>		
		
					<?php endwhile;?>
	
		
		</div>
	</div>
</section>


<?php get_footer(); ?>