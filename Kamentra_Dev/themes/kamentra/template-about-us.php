<?php
/*
* Template Name: About Us Template
*/
global $kamentra_options;

get_header(); ?>

	<section class="headingDescription res_headingDescription">
	  <div class="skewSec"></div>
	  <div class="container">
	    <div class="servive_inner clearfix">
	    	<div class="contact_form">
	    		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				    <?php the_content(); ?>	
			    <?php endwhile; endif; ?>
	    	</div>
	    </div>
	   </div>
	</section>

	<section class="story">
	  <div class="container clearfix">
	    <div class="left"></div>
	    <div class="right">
	      <?php the_field('story_that_matters'); ?>
	    </div>
	  </div>
	</section>

	<section class="who_we_r">

	  <div class="whoSkew"></div>
	  <section class="ourNetwork">
	    <div class="container">
	      <?php the_field('about_network'); ?>
	    </div>
	  </section>

	  <div class="container">

	    <?php the_field('who_we_are'); ?>

	    <div class="whoWeInner">
	      <ul class="ourTeam">
	        <li class="team">
	          <div class="user">
	            <div class="userInner">
	            	<?php
						$image1 = get_field('first_member_image');
						if( !empty($image1) ): ?>
						<img src="<?php echo $image1['url']; ?>"/>
					<?php endif; ?>
	            </div>
	          </div>
	          <h4><?php the_field('first_member_name'); ?></h4>
	          <?php the_field('first_member_details'); ?>
	          <ul class="social">
	          	<?php
	          		$facebook1 = get_field('first_member_facebook_link');
	          		$twitter1 = get_field('first_member_twitter_link');
	          		$google1 = get_field('first_member_google_plus_link');
	          	?>

	          	<?php if(!empty($facebook1)){ ?>	          	
	            <li><a href="<?php echo $facebook1; ?>" target="_blank"><i class="fa fa-facebook"></i> </a> </li>
	            <?php } ?>
	            <?php if(!empty($twitter1)){ ?>         
	            <li><a href="<?php echo $twitter1; ?>" target="_blank"><i class="fa fa-twitter"></i> </a> </li>
	            <?php } ?>
	            <?php if(!empty($google1)){ ?>  	           
	            <li><a href="<?php echo $google1; ?>" target="_blank"><i class="fa fa-google"></i> </a> </li>
	            <?php } ?>	            
	          </ul>
	        </li>
	        <li class="team">
	          <div class="user">
	            <div class="userInner">
	            	<?php
						$image2 = get_field('second_member_image');
						if( !empty($image2) ): ?>
						<img src="<?php echo $image2['url']; ?>"/>
					<?php endif; ?>
	            </div>
	          </div>
	          <h4><?php the_field('second_member_name'); ?></h4>
	          <?php the_field('second_member_details'); ?>
	          <ul class="social">
	          	<?php
	          		$facebook2 = get_field('second_member_facebook_link');
	          		$twitter2 = get_field('second_member_twitter_link');
	          		$google2 = get_field('second_member_google_plus_link');
	          	?>

	          	<?php if(!empty($facebook2)){ ?>	          	
	            <li><a href="<?php echo $facebook2; ?>" target="_blank"><i class="fa fa-facebook"></i> </a> </li>
	            <?php } ?>
	            <?php if(!empty($twitter2)){ ?>         
	            <li><a href="<?php echo $twitter2; ?>" target="_blank"><i class="fa fa-twitter"></i> </a> </li>
	            <?php } ?>
	            <?php if(!empty($google2)){ ?>  	           
	            <li><a href="<?php echo $google2; ?>" target="_blank"><i class="fa fa-google"></i> </a> </li>
	            <?php } ?>
	          </ul>
	        </li>
	        <li class="team">
	          <div class="user">
	            <div class="userInner">
	            	<?php
						$image3 = get_field('third_member_image');
						if( !empty($image3) ): ?>
						<img src="<?php echo $image3['url']; ?>"/>
					<?php endif; ?>
	            </div>
	          </div>
	          <h4><?php the_field('third_member_name'); ?></h4>
	          <?php the_field('third_member_details'); ?>
	          <ul class="social">
	          	<?php
	          		$facebook3 = get_field('third_member_facebook_link');
	          		$twitter3 = get_field('third_member_twitter_link');
	          		$google3 = get_field('third_member_google_plus_link');
	          	?>

	          	<?php if(!empty($facebook3)){ ?>	          	
	            <li><a href="<?php echo $facebook3; ?>" target="_blank"><i class="fa fa-facebook"></i> </a> </li>
	            <?php } ?>
	            <?php if(!empty($twitter3)){ ?>         
	            <li><a href="<?php echo $twitter3; ?>" target="_blank"><i class="fa fa-twitter"></i> </a> </li>
	            <?php } ?>
	            <?php if(!empty($google3)){ ?>  	           
	            <li><a href="<?php echo $google3; ?>" target="_blank"><i class="fa fa-google"></i> </a> </li>
	            <?php } ?>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	  
	</section>

<?php get_footer(); ?>