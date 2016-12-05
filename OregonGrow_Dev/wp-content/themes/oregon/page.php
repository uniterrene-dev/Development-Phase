<?php

/*

* The template for inner pages

*/

get_header(); ?>

	<section id="introduction">
        <div class="container clearfix">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </section> <!-- introduction -->

<?php get_footer(); ?>