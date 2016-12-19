<?php
/*
* The template for displaying the footer
*/
global $kettleton_options; 
?>

	<section class="newsletter">
  		<div class="container clearfix">
		    <div class="leftSection">
		      <p><span>Subscribe</span> Get updates about new dishes and upcoming events</p>
		    </div>
		    <div class="rightSection">
		      <!-- <form action="">
		        <ul>
		          <li>
		            <input type="email" placeholder="Your Email Address">
		          </li>
		          <li>
		            <button class="btn btn_submit" type="submit">SUBSCRIBE</button>
		          </li>
		        </ul>
		      </form> -->
		      <?php echo do_shortcode('[mc4wp_form id="163"]'); ?>
		    </div>
  		</div>
	</section>

	<?php
		if( is_front_page() ){
	?>
	<!--testimonial rotater-->
	<section class="testimonial">
		<div class="container clearfix">
			<div class="testimonial-container">
				<ul class="test" id="testi">
					<?php
		                $tests = array(
		                  'post_type' => 'client_testimonials',
		                  'posts_per_page' => -1,
		                  'orderby' =>'date',
		                  'order' => 'DESC' );
		                $recent_tests = new WP_Query( $tests );
		                while ( $recent_tests->have_posts() ) : $recent_tests->the_post();
		            ?>
					<li>
						<div class="main-test">
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
							<div class="feed_btn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Your Feedback</a></div>
						</div>					
					</li>
					<?php endwhile; ?>
	        		<?php wp_reset_query(); ?>
				</ul>
			</div>
		</div>
	</section>
	<!--testimonial rotator-->
	<?php
		}//only visibe on home page
	?>

	<!--footer-->
	<footer>
  		<section class="topfooter">
    		<div class="overlay">
      			<div class="container">
        			<div class="footerContent"> 
          				<!--col 1-->
          				<div class="footerCols col1">
          					<?php
          						$page_slug ='about-us';
								$page_data = get_page_by_path($page_slug);
								$page_id = $page_data->ID;
          					?>
				            <div class="colHead">
				              <h4><?php echo $page_data->post_title; ?></h4>
				            </div>
				            <div class="fooCon">
				              <p><?php echo $page_data->post_excerpt; ?></p>
				              <p><a href="<?php echo get_page_link($page_id); ?>">READ MORE</a></p>
				            </div>
          				</div>

				        <!--col 2-->
				        <!-- <div class="footerCols col2">
				           	<div class="colHead">
				              	<h4>recent posts</h4>
				            </div>
				            <div class="fooCon">
				              	<?php if ( is_active_sidebar( 'recent-posts-sidebar' ) ) { ?>
									<?php dynamic_sidebar( 'recent-posts-sidebar' ); ?>
								<?php } ?>
				            </div>
				        </div> -->
          
          				<!--col 3-->          
          				<div class="footerCols col3">
            				<div class="colHead">
              					<h4>reach Us</h4>
            				</div>
            				<div class="fooCon">
	              				<ul >
					                <li class="footerNav">
					                  <ul>
					                  	<?php if( !empty($kettleton_options['facebook']) ){ ?>
					                    <li> <a href="<?php echo $kettleton_options['facebook']; ?>" target="_blank"> <i class="fa fa-facebook-square"></i> </a> </li>
					                    <?php } ?>
					                    <?php if( !empty($kettleton_options['twitter']) ){ ?>
					                    <li> <a href="<?php echo $kettleton_options['twitter']; ?>" target="_blank"> <i class="fa fa-twitter"></i> </a> </li>
					                    <?php } ?>
					                    <?php if( !empty($kettleton_options['google']) ){ ?>
					                    <li> <a href="<?php echo $kettleton_options['google']; ?>" target="_blank"> <i class="fa fa-google-plus"></i> </a> </li>
					                    <?php } ?>
					                    <?php if( !empty($kettleton_options['youtube']) ){ ?>
					                    <li> <a href="<?php echo $kettleton_options['youtube']; ?>" target="_blank"> <i class="fa fa-youtube"></i> </a> </li>
					                    <?php } ?>
					                    <?php if( !empty($kettleton_options['vimeo']) ){ ?>
					                    <li> <a href="<?php echo $kettleton_options['vimeo']; ?>" target="_blank"> <i class="fa fa-vimeo"></i> </a> </li>
					                    <?php } ?>
					                    <?php if( !empty($kettleton_options['pinterest']) ){ ?>
					                    <li> <a href="<?php echo $kettleton_options['pinterest']; ?>" target="_blank"> <i class="fa fa-pinterest"></i> </a> </li>
					                    <?php } ?>
					                    <?php if( !empty($kettleton_options['linkedin']) ){ ?>
					                    <li> <a href="<?php echo $kettleton_options['linkedin']; ?>" target="_blank"> <i class="fa fa-linkedin"></i> </a> </li>
					                    <?php } ?>
					                  </ul>
					                </li>
					                <li class="info"><a href="javascript:void(0)"> <i class="fa fa-map-marker"></i> <?php echo $kettleton_options['address']; ?></a></li>
					                <li class="info"><a href="tel:<?php echo $kettleton_options['phone_call']; ?>"> <i class="fa fa-phone"></i> Phone : <?php echo $kettleton_options['phone_bottom']; ?></a></li>
					                <li class="info"><a href="mailto:<?php echo $kettleton_options['mail_bottom']; ?>"> <i class="fa fa-envelope"></i> <?php echo $kettleton_options['mail_bottom']; ?></a></li>
	              				</ul>
            				</div>
          				</div>

        			</div>
      			</div>
    		</div>
  		</section>
  
  		<!--bottom foooter-->
	  	<section class="bottomFoo">
	    	<p><?php echo $kettleton_options['copyright']; ?></p>
	  	</section>
	</footer>

	<?php wp_footer(); ?>
	</body>
</html>