<?php
/*
* Search template
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
	
<section class="about about_page">
  	<div class="container clearfix">
     	<div class="about_content">	    	

	    	<h2 style="text-align: center;"><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2> 

	    	<?php if(have_posts()) { while(have_posts()) { the_post(); ?>	    		

	    		<a href="<?php the_permalink(); ?>"><?php search_title_highlight(); ?></a>

	    		<?php search_excerpt_highlight(); ?>

	    		<?php } get_search_form();
	    		}
	    	else{ echo "No data found. Please try with some other keywords"; 

	    	 get_search_form(); } ?>

	    </div>
  	</div>
</section>

	

<?php get_footer(); ?>