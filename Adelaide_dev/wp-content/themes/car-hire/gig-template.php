<?php /* Template Name: Gig Template */ get_header(gig); ?>

<section id="inner_body">
       <div class="container">
			<div class="gags_area clearfix">
                <div class="gig_box">
					<div class="row">
	   				<?php 
 
					//Define your custom post type name in the arguments
 
					$args = array('post_type' => 'gig', 'category_name'=>'upcoming');
					 
					//Define the loop based on arguments
					 
					$loop = new WP_Query( $args );
					 
					//Display the contents
					 
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					
						<ul>
						<li>		  
							<?php the_content(); ?>
						
						</li>
						</ul>
					<?php endwhile;?>
			
					</div>
				</div>
				
				                <div class="gig_box">
					<div class="row">
	   				<?php 
 
					//Define your custom post type name in the arguments
 
					$args_prev = array('post_type' => 'gig', 'category_name'=>'previous');
					 
					//Define the loop based on arguments
					 
					$loop = new WP_Query( $args_prev );
					 
					//Display the contents
					 
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					
						<ul>
						<li>		  
							<?php the_content(); ?>
						
						</li>
						</ul>
					<?php endwhile;?>
			
					</div>
				</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>