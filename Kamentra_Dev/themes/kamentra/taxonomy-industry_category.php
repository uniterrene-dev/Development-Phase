<?php get_header(); ?>
	<section class="headingDescription">
  <div class="skewSec"></div>
  <div class="container">
  <!-- <h2 class="service_heading">Feasibility Studies</h2> -->
    <div class="servive_inner clearfix">
      <div class="service_col1">
        <ul>
        <?php
          $args = array( 
                 'post_type' => 'industries', 
                 'tax_query'=> array(
                      'taxonomy' => 'industry_category',
                  )
          );
          $loop = new WP_Query( $args );
          //var_dump($loop);
        ?>

        <?php if ( $loop->have_posts() ) { 
        	while ( $loop->have_posts() ) { $loop->the_post(); ?>
          	<li class="service_col1_box gallery">
	            <div class="service_col1_box_img"> 
	            	<a href="<?php the_permalink(); ?>">
	            		<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); } ?>
	            	</a> 
	            </div>
	            <span>
                <?php 
                  $termms = get_the_terms( $post->ID , 'industry_category' );
                  foreach ( $termms as $termm ) {
                    echo $termm->name.' ';
                  }
                ?>
              </span>
	            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	            <?php the_excerpt(); ?>
          	</li>
          <?php } } ?>
        </ul>
      </div>
      <div class="service_col2">
        <div class="service_col2_box">
          <h3>SERVICE</h3>
          <?php 
          	$terms = get_terms( array(
			    'taxonomy' => 'service_category',
			    'hide_empty' => false,
			) ); 
			//print_r($terms);
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
    </div>
  </div>
</section>
<?php get_footer(); ?>