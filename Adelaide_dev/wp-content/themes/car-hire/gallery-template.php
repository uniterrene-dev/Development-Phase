<?php /* Template Name: Gallery Template */ get_header(custom); ?>

<section id="inner_body">
       <div id="gallery1">
          <div class="container main-container">       
			<div class="row">
               <h3 class="photo_head">The Band</h3>
            </div>
			
			
			
			
			
            <div class="row">
			<div class="projrct_box clearfix">
			   <?php 
 
					//Define your custom post type name in the arguments
 
					$args = array('post_type' => 'gallery', 'category_name'=>'band');
					 
					//Define the loop based on arguments
					 
					$loop = new WP_Query( $args );
					 
					//Display the contents
					 
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
			   
			   <div class="image_box">
					<img src="<?php the_content(); ?>" alt="">
					<div class="hover_cont"><div class="show_image"><a class="example-image-link" href="#" data-lightbox="example-1"><i class="fa fa-plus"></i></a></div></div>
			   </div>
			   <?php endwhile;?>
		  </div>
		</div>
		
		
	  </div>
	  
  </div>
</section>


<?php get_footer(); ?>