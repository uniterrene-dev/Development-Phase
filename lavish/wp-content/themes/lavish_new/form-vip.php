<?php
/**
 * Template Name: vip form Page
 */
get_header();
?>
<?php  $pac_name = $_REQUEST['pac'];?>
<?php
			while ( have_posts() ) : the_post();
			the_content();

endwhile; // End of the loop.
			?>

<div class="vip-footer">
 <?php get_footer();?>
</div> 
