<?php
/*
* Template Name: Our Firm Page Template
*/

get_header(); ?>

<section class="page_heading">
  <div class="page_heading_wrapper">
  	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<h2><?php the_title(); ?></h2>
    <?php endwhile; endif; ?>
  </div>
</section>

<section class="innerpage_content">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="about-img-box"> 
        	<div class="welcome-img">
          		<?php
	                if ( has_post_thumbnail() ) { ?>
	                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" class="img-responsive">
	                <?php } 
	                else { 
	                    _e( 'Sorry, no image found' ); 
	                } 
	            ?>
	        </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="welcome-content2">
          <div class="heading-text">
            <?php 
		    	$spanvalue = page_title_field_get_meta( 'page_title' );
		    	$words = page_title_field_get_meta( 'page_title_no_of_words' );
		    	$words = $words-1;
				$arr = explode(' ',trim($spanvalue));
				$arrre = '';
				for($ds = 0; $ds <= count($arr); $ds++){
					$arrre .= $arr[$ds].' ';					
					if($words == $ds){ 
						$arrre .="</span>";
					}else{

					}
				}
		    ?>
		    <h3><span><?php echo $arrre; ?></h3>
          </div>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <div class="row mission_vision clearfix">
     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="box"> 
      	<?php $image1 = get_field('first_box_image'); ?>
		<img src="<?php echo $image1['url']; ?>"/>
        <h3><?php the_field('first_box_title'); ?></h3>
        <?php the_field('first_box_content'); ?>
      </div>
      </div>
       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="box"> 
        <?php $image2 = get_field('second_box_image'); ?>
		<img src="<?php echo $image2['url']; ?>"/>
        <h3><?php the_field('second_box_title'); ?></h3>
        <?php the_field('second_box_content'); ?>
      </div>
      </div>
       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="box">
        <?php $image3 = get_field('third_box_image'); ?>
		<img src="<?php echo $image3['url']; ?>"/>
        <h3><?php the_field('third_box_title'); ?></h3>
        <?php the_field('third_box_content'); ?>
      </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>