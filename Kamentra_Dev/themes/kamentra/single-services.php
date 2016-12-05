<?php
/*
* The template for single services page(s)
*/
get_header(); ?>
	
	<section class="headingDescription res_headingDescription">
	  <div class="skewSec"></div>
	  <div class="container">
	    <div class="servive_inner clearfix">

	      <div class="service_inner_col1">
	        <figure class="service_inner_content"> 
	       		<?php
            		if ( has_post_thumbnail() ) { 
	            		the_post_thumbnail( 'full' );
	          		} 
	          	?>
	          <div class="service_img2">
	            <div class="square">
	              <div></div>
	            </div>
	            <h2><?php the_title(); ?></h2>
	            <p>
		            <?php 
		            	$terms = get_the_terms( $post->ID , 'service_category' );
						foreach ( $terms as $term ) {
							echo $term->name.' ';
						}
		            ?> 	
	            </p>
	          </div>
	        </figure>
	        <div class="service_inner_col1_heading">
	          <h3><?php the_title(); ?></h3>
	        </div>
	        <?php the_content(); ?>
	      </div><!--left content section ends-->

	    <div class="service_col2">
	        <div class="service_col2_box">
	          <h3>SERVICES</h3>
	          <?php 
	          	$terms = get_categories( array(
				    'taxonomy' => 'service_category',
				    'hide_empty' => false,
				) );
			  ?>			

			  <ul class="other_link">
				<?php foreach ($terms as $value) {
					$term_link = get_term_link( $value );
				 ?>
	            <li><a href="<?php echo esc_url( $term_link ); ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $value->name; ?></a></li>
	            <?php } ?>
	          </ul>
	         
	        </div>
	        <div class="service_col2_box">
	          <h3>INDUSTRIES</h3>
	          <?php 
	          	$termss = get_categories( array(
				    'taxonomy' => 'industry_category',
				    'hide_empty' => false,
				) );
			  ?>
	          
	          <ul class="other_link">
				<?php foreach ($termss as $values) {
					$term_links = get_term_link( $values );
				 ?>
	            <li><a href="<?php echo esc_url( $term_links ); ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $values->name; ?></a></li>
	            <?php } ?>
	          </ul>
	        </div>
	        <div class="service_col2_box">
	          <h3>Other Link</h3>
	          <ul class="other_link">
	            <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Contact Us</a></li>
	            <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Submit RFP</a></li>
	            <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Search Jobs</a></li>
	          </ul>
	        </div>
	      </div>
	    </div> <!--sidebar ends-->
	  </div>
	</section>

<?php get_footer(); ?>