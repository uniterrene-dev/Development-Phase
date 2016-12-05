<?php

/*

 * The loop that displays a single post

 */

get_header(); 

?>

<section class="page_heading">
  <div class="page_heading_wrapper">
  	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<h2><?php the_title(); ?></h2>
    <?php endwhile; endif; ?>
  </div>
</section>


<section class="innerpage_content update_inner">
  <div class="container">
  		<?php while ( have_posts() ) : the_post(); ?>

  		<div class="heading-text heading-texts inner-header stay_in">
			<?php if(!empty(page_title_field_get_meta( 'recent_update' ))){ ?>
			    <div class="heading-text heading-texts inner-header stay_in">
				    <?php 
				    	$spanvalue = page_title_field_get_meta( 'recent_update' );
				    	$words = page_title_field_get_meta( 'recent_update_no_of_words' );
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
			    <?php } ?>
		</div>

		<div class="row update_detail_sec clearfix">
	      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        <div class="recent-update-box">
	          <div class="service_area_img"> 
	          	<?php

                    if ( has_post_thumbnail() ) { ?>

                    <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" class="img-responsive">

                  <?php } ?>
	          	 
	          </div>
	          <div class="recent-update-tag recent_update_detail">
	            <ul>
	              <li><span> <i class="fa fa-user" aria-hidden="true"></i></span> By <?php the_author_posts_link(); ?></li>
	              <li><span> <i class="fa fa-calendar-o" aria-hidden="true"></i></span> <?php the_time('F jS, Y'); ?> </li>
	            </ul>
	          </div>
	          <div class="recent-update-text">
	            <?php the_content(); ?>
	             </div>
	        </div>
	      </div>
	    </div>
					

		<?php endwhile; ?>

		</div>
	</section>

<?php get_footer(); ?>