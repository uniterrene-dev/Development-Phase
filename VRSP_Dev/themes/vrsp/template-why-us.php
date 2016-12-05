<?php
/*
* Template Name: Why Us Page Template
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
  	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	    <div class="heading-text heading-texts why_detail">
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
	    <div class="row why clearfix">
	      	<div class="pix"> 
				<?php
	                if ( has_post_thumbnail() ) { 
	                    the_post_thumbnail( 'full' );
	                } 
	                else { 
	                    _e( 'Sorry, no image found' ); 
	                } 
	            ?>
			</div>
		    <div class="content">
		        <?php the_content(); ?>	
		    </div>
	    </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>