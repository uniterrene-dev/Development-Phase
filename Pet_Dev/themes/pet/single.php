<?php

/*

 * The loop that displays a single post

 */

get_header(); 

?>

	<section id="bottom_nav">
        <div class="container">
               <div class="bottom">
                <div class="">
                    <ul class="pet-blog">
                        <li><a href="<?php echo site_url(); ?>/"><i class="fa fa-clock-o"></i>Latest Posts</a></li>
                        <li><a href="<?php echo site_url(); ?>/category/trending/"><i class="fa fa-bolt"></i>Trending</a></li>
                        <li><a href="<?php echo site_url(); ?>/category/editors-choice/"><i class="fa fa-star"></i>Editors choice</a></li>
                    </ul> 
                </div>
               </div>
        </div>
    </section>

	<section id="top-blog-section">
    
        <div class="container clearfix">
          	<div class="inner-main-container">
              	<div class="bloggg clearfix">
              		<div class="left-top-blog">
						<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
						<div class="single-blog-top-main-box clearfix">
                      		<div class="single-main-blog-image">
	                          	<?php 
		                            if(has_post_thumbnail()){
		                                the_post_thumbnail('full');
		                            }
		                         ?>
                      		</div>
                      	<div class="single-main-blog-text">
                         	<h3><?php the_title(); ?></h3>
                         	<div class="single-post-meta">
		                  		<p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?></p>
		                  	</div>
		                  	<div class="blog-tags">
                  				<?php the_tags( 'Tags: ', ' ', '<br />' ); ?>
                  			</div>
                  			<div class="blog-content">
                         		<?php the_content(); ?>
                         		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'pet' ), 'after' => '</div>' ) ); ?>
                         	</div>
                      	</div>
                 	</div>

                 	<div id="nav-below" class="navigation">
						<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'pet' ) . '</span> %title' ); ?></div>
						<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'pet' ) . '</span>' ); ?></div>
					</div><!-- #nav-below -->

					<?php comments_template( '', true ); ?>

					<?php endwhile; endif; ?>
				</div>
              
              	<div class="right-top-blog">
                  <div class="right-social-blog">
                    <?php echo do_shortcode('[aps-counter]'); ?>
                  </div>
                  <div class="right-latest-blog"> 
                      <div class="right-blog-headre">
                         <a class="more_btn">more</a>
                      </div>

                      <?php
                        $more_args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'order' => 'DESC', 'orderby' => 'date', );

                        $recent_query = new WP_Query( $more_args ); 

                        while ($recent_query -> have_posts()) : $recent_query -> the_post();

           
                      ?>
                      <div class="right-new-post-box">
                          <?php
                              if(has_post_thumbnail()){
                                the_post_thumbnail('sb-custom-size-1');
                              }
                          ?>
                         <div class="right-new-post-box-text">
                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <ul class="clearfix">
                               <li><a><i class="fa fa-clock-o"></i><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></a></li>
                               <li><a><i class="fa fa-share-alt"></i> 10<?php //echo do_shortcode('[pssc_all]'); ?></a></li>
                            </ul>
                         </div>
                      </div>
                      <?php endwhile; ?>                    
                      <?php wp_reset_query(); ?>

                  </div>
                  <div class="whats-new"> 
                     <div class="right-blog-headre">
                         <a class="more_btn">What’s New</a>
                      </div>

                      <?php
                        $new_args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'order' => 'DESC', 'orderby' => 'date', );
                        $new_query = new WP_Query( $new_args ); 

                        while ($new_query -> have_posts()) : $new_query -> the_post();           
                      ?>
                     <div class="what-new-box clearfix">
                         <div class="what-new-box-left">
                            <?php
                                if(has_post_thumbnail()){
                                  the_post_thumbnail('sb-custom-size-2');
                                }
                            ?>
                          </div>
                         <div class="what-new-box-right">
                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                         </div>
                     </div>
                      <?php endwhile; ?>                    
                      <?php wp_reset_query(); ?>
                  </div>
          </div>
		</div>
    </div>
	</div>

</section>

<?php get_footer(); ?>