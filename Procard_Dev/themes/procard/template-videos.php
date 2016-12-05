<?php
/*
* Template Name: Videos page template
*/

get_header(); ?>

	<section class="photos_heaer_sec">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div class="gallery_heading_img"> 
			<?php
				if ( has_post_thumbnail() ) { 
                	the_post_thumbnail( 'full' );
                } else { ?>
				<?php _e( 'Sorry, no image found' ); ?>
			<?php } ?>
		</div>
		<div class="inner_page_heading_text">
			<?php the_content(); ?>		    
		</div>
		<?php endwhile; endif; ?>

		<div class="container">
			<div class="gallery-title-heading">
		      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h4 style="text-transform: uppercase;"><span><?php the_title(); ?></span></h4>
		    <?php endwhile; endif; ?>
		    </div>

			<div class="gallerySec">

		      <?php 
				$video_terms = get_terms( array( 'taxonomy' => 'video_category', 'exclude' => 23 ) );

				//print_r($video_terms);

				foreach($video_terms as $video_term) {
					

					$args = array(
						'post_type' => 'video_gallery',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'video_category',
				                'field' => 'slug',
				                'terms' => $video_term->slug,
				            ),
				        ),			        
				     );
			?>
		      	<div id="main" role="main">
		      		
			        <section class="slider2">
			          <h4><?php echo $video_term->name; ?> </h4>
			          <div class="flexslider carousel">
			            <ul class="slides">
			            	<?php 
				      			$loop = new WP_Query($args);
		     						if($loop->have_posts()) {
				      		
			              			while($loop->have_posts()) : $loop->the_post();
			              		?>
			              	<li>
			              		
				                <div class="thumbnail"> 
				                	<a href="<?php the_permalink(); ?>">
				                	<?php
				                		$embedCode = get_the_excerpt();

										preg_match('/src="([^"]+)"/', $embedCode, $match);

										// Extract video url from embed code
										$videoURL = $match[1];
										$urlArr = explode("/",$videoURL);
										$urlArrNum = count($urlArr);

										// YouTube video ID
										$youtubeVideoId = $urlArr[$urlArrNum - 1];

										// Generate youtube thumbnail url
										$thumbURL = 'http://img.youtube.com/vi/'.$youtubeVideoId.'/0.jpg';
				                	?>
				                		<img src="<?php echo $thumbURL; ?>" />
				                	</a>			                	
				                </div>
				                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				                <p><?php the_content(); ?></p>
				                <div class="viewMore">
				                  <div class="btnHold"><a href="<?php the_permalink(); ?>" class="shop_Now"><span>View More</span></a></div>
				                </div>		                
			              	</li>
			              	<?php
			                	endwhile;
 								}
			                ?>
			            </ul>
			          </div>
			        </section>
		      	</div><!--main div ends-->	      
		      	<?php
		      			}
					wp_reset_query();
		      	?>

	    </div>
	</section>

<?php get_footer(); ?>