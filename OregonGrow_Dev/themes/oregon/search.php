<?php get_header(); ?>

	

	<section id="introduction">

	  <div class="container clearfix">

	    	<h2 style="text-align: center;"><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2> 

	    	<?php if(have_posts()) { while(have_posts()) { the_post(); ?>

	    		

	    		<a href="<?php the_permalink(); ?>"><?php search_title_highlight(); ?></a>

	    		<?php search_excerpt_highlight(); ?>

	    		<?php } get_search_form();

	    }

	    	else{ echo "No data found. Please try with some other keywords"; 

	    	 get_search_form(); } ?>

	    </div>

	</section>

	

<?php get_footer(); ?>