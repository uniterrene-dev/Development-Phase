<?php get_header(); ?>

	

	<section class="headingDescription res_headingDescription error404">

	  <div class="skewSec"></div>

	  <div class="container">

	    <div class="servive_inner clearfix">

	    	

	    	<h2 class="search_result_heading"><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2> 
            <?php get_search_form(); ?>

      <?php if(have_posts()) { while(have_posts()) { the_post(); ?>       
		<div class="searched-items">
       <a href="<?php the_permalink(); ?>"><?php search_title_highlight(); ?></a>

       <?php search_excerpt_highlight(); ?>
       </div>

       <?php } //get_search_form();

     }

      else{ echo "<p class='data_found'>No data found. Please try with some other keywords</p>"; 

       ; } ?>
	    </div>

	   </div>

	</section>

	

<?php get_footer(); ?>