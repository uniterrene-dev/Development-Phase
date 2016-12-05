<?php
/*
* The template for inner pages
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

<?php get_footer(); ?>