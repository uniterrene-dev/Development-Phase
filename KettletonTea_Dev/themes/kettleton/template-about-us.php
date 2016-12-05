<?php
/*
* Template Name: About Us Page Template
*/
get_header(); 
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
       	 <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>	
		<?php endwhile; endif; ?>     
     </div>
  </div>
</section>
<!--about section end--> 

<div class="divider"></div>

<!-- speciality section -->
<section id="about_speciality">
  <div class="container clearfix">
      <div class="speciality_right">
          <?php
              $image1 = get_field('speciality_section_image');
              if( !empty($image1) ): ?>
                  <img src="<?php echo $image1['url']; ?>" />
          <?php endif; ?>
      </div>
      <div class="specility_left">
          <h4><?php the_field('speciality_section_title'); ?></h4>
          <?php the_field('speciality_section_content'); ?>
      </div>        
  </div>
</section>

<section class="impv branding">
  <div class="overlay">
    <div class="content clearfix">
      <div class="container">
        <h2><?php the_field('building_brands_title'); ?></h2>
        <div class="rightimpv">
          <?php
              $image2 = get_field('building_brands_image');
              if( !empty($image2) ): ?>
                  <img src="<?php echo $image2['url']; ?>" />
          <?php endif; ?>
        </div>
        <div class="leftimpv">
          <?php the_field('building_brands_content'); ?>
        </div>
        <!--videoparts--> 
      </div>
    </div>
  </div>
</section>

<section id="focus_area">
   <div class="container clearfix">
     <div class="focusright">
      <div class="aboutRightContent">
         <?php
              $image3 = get_field('trading_image');
              if( !empty($image3) ): ?>
                  <img src="<?php echo $image3['url']; ?>" />
          <?php endif; ?>
      </div>
    </div>
    <div class="focusLeft">
      <div class="abtLeftContent">
        <?php the_field('trading_content'); ?>
      </div>
    </div>
    <!--left-->
   
   </div>
</section>

<?php get_footer(); ?>