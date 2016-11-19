<?php /* Template Name: Custom Template */ get_header(custom); ?>

<section id="inner_body">
      <div class="container">
         <div class="content_format_left band_content clearfix">
             <div class="content_right">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content(); ?>

				

			</div>
		</div>
		<?php endwhile; endif; ?>
	

</div>
</div>
</div>
</section>


<?php get_footer(); ?>