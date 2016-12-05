<?php
/*
* Template Name: Photos page template
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
			<?php the_excerpt(); ?>		    
		</div>
		<?php endwhile; endif; ?>
  
  <div class="container">
    <div class="gallery-title-heading">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<h4 style="text-transform: uppercase;"><span><?php the_title(); ?></span></h4>
    <?php endwhile; endif; ?>
    </div>

    <section class="inner-div clearfix">
    <div class="container">
      <div class="main-content-part">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?> 
          <?php endwhile; endif; ?>
      </div>
    </div>
  </section>   


    
  </div>
</section>

<?php get_footer(); ?>

