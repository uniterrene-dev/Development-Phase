<?php
/*
* Template Name: Contact Us Template
*/
global $kamentra_options;

get_header(); ?>

	<section class="headingDescription res_headingDescription contactFooter">
	  <div class="skewSec"></div>
	  <div class="container">
	    <div class="servive_inner clearfix">
	    	<div class="contact_form">
	    		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				    <?php the_content(); ?>	
			    <?php endwhile; endif; ?>
			    <?php //echo do_shortcode('[contact-form-7 id="187" title="Contact Form"]'); ?>
	    	</div>
	    </div>
	   </div>

	   	<div class="map_detail clearfix">
		    <div class="map_detail_left">
		      <div class="map_detail_left_inner">
		        <div class="wrapper_address">
		          <div class="main-content">
		            <?php echo $kamentra_options['contact-address']; ?>
		          </div>
		        </div>
		      </div>
		    </div>
		    <div class="map_detail_right">
		      	<?php echo $kamentra_options['contact-map']; ?>
		    </div>
		</div>
	</section>

<?php get_footer(); ?>