<?php
/*
* Template Name: Contact Page Template
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
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="heading-text heading-texts inner-header stay_in">
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
      </div>

      <div class="service_detail clearfix">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="contact_form_content">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="iframe_area">
          	<?php the_field('contact_map'); ?>            
          </div>
        </div>
      </div>
      <div class="contact_detail clearfix">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact_detail_col1">
          <div class="heading-text2">
            <h3>Office Address</h3>
          </div>
          <?php the_field('office_address_section'); ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact_detail_col1">
          <div class="heading-text2">
            <h3>Branch Address</h3>
          </div>          
          <?php the_field('branch_address_section'); ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="heading-text2">
            <h3>Customer Support</h3>
          </div>
          <?php the_field('customer_support_section'); ?>
        </div>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>