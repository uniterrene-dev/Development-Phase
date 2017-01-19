<?php

/**

 * Template for displaying Category Archive pages

 *

 */



get_header(); ?>


<section id="bottom_nav">
        <div class="container">
               <div class="bottom">
                <div class="">
                    <ul class="pet-blog">
                        <li><a href="<?php echo site_url(); ?>" class="active_state"><i class="fa fa-clock-o"></i>Latest Posts</a></li>
                        <li><a href="<?php echo site_url(); ?>/category/trending/"><i class="fa fa-bolt"></i>Trending</a></li>
                        <li><a href="<?php echo site_url(); ?>/category/editors-choice/"><i class="fa fa-star"></i>Editors choice</a></li>
                    </ul> 
                </div>
               </div>
        </div>
    </section>
   
    <section id="banner">
        <div class="container banner_blog blog_image">
            <div class="baner_text">
                <h3>Celebrate Your Beloved Pet's</h3>
                <h2>Life with The Ultimate Memorial Tribute</h2>
            </div>
        </div>
    </section>

    <section id="top-blog-section">
    
        <div class="container clearfix">
          <div class="inner-main-container">
              <div class="blogg clearfix">
		
				<h2 class="page-title inner-page-heading"><span><?php printf( __( 'Category Archives: %s', 'pet' ), '' . single_cat_title( '', false ) . '' ); ?></span></h2>

					<div class="left-top-blog">

						<?php
							$category_description = category_description();
							if ( ! empty( $category_description ) )
								echo '<div class="archive-meta">' . $category_description . '</div>';
								/*
								 * Run the loop for the category page to output the posts.
								 * If you want to overload this in a child theme then include a file
								 * called loop-category.php and that will be used instead.
								 */
								get_template_part( 'loop', 'category' );
						?>

				</div>
				<div class="right-top-blog">
					<?php get_sidebar(); ?>
				</div>

				</div>
          </div>
              
        </div>
        
    </section>
		

<?php get_footer(); ?>

