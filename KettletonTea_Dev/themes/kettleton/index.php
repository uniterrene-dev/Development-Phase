<?php

/*

* The template for index page of blog

*/
get_header(); 

global $kettleton_options;
?>

<!--slider sec-->
<section class="sliderSec about_head">
  <div class="overlay">
    <div class="contentArea">
      <div class="container clearfix"></div>
    </div>
  </div>
</section>
<!--end slider-->

<!--about section-->
<section class="about about_page">
  <div class="container clearfix">
     <div class="about_content">


			<h2 class="inner-page-heading"><span>Our Blog</span></h2>
			<div class="left-content">
				<ul>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<li>
						<div class="blog-box">
							<div class="blog-img">
								<a href="<?php the_permalink(); ?>">
								<?php 
				                    if ( has_post_thumbnail() ) { 
				                    the_post_thumbnail( 'full' );
				                  }
				                  else { ?>
				                    <?php _e( 'Sorry, no image found' ); ?>
				                  <?php }
				                ?>
				                </a>
			                </div>
			                <div class="blog-heading">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
							<div class="blog-content">
								<p><?php echo excerpt(80); ?></p>
								<div class="blog-detail">
									<a class="btn btn_learn_more" href="<?php the_permalink(); ?>">Read More</a>
								</div>
							</div>
						</div>
                     </li>
                    <?php endwhile; endif; ?>
				</ul>				
			</div>
			<div class="right-content">
				<?php get_sidebar(); ?>
			</div>
		

		</div>
  </div>
</section>

<?php get_footer(); ?>