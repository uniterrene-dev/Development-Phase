<?php

/*

 * The template for displaying the footer

 */

global $procard_options; 

?>

	<?php if(is_front_page()){ ?>

	<section class="newsletter">

		<div class="container">

			<ul>

				<li><h4>GET our Newsletter</h4></li>

				<li class="form">

					<!--<form action="#">
					<ul>
						<li><input type="text" class="inputNews" placeholder="ENTER EMAIL ID"></li>
						<li><button type="submit" class="submit"><i class="fa fa-play"></i></button></li>
					</ul>
					</form> -->

					<?php echo do_shortcode('[mc4wp_form id="220"]'); ?>

				</li>

			</ul>

		</div>

	</section>

	<?php } ?>



	<footer class="mainFooter">

		<section class="footernav">

			<div class="container">

				<div class=" slices2 ">

					<h5>Need Help?</h5>

					<?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'forLeft', 'menu_id' => '', 'theme_location' => 'help-menu' )); ?>			

				</div>

				<div class="slices bottomFooNav">

					<h5>ORDERING & SHIPPING </h5>

					<?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'forLeft', 'menu_id' => '', 'theme_location' => 'order-menu' )); ?>

				</div>		



				<div class="slices contact">

					<h5>ORDERING & SHIPPING</h5>

					<?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'forLeft', 'menu_id' => '', 'theme_location' => 'footer-menu' )); ?>

				</div>



				<div class="slices socialFooter">

					<h5>Social</h5>

					<ul class="forLeft">

						<?php if(!empty($procard_options['facebook'])){ ?>

						<li class="fbL"><a href="<?php echo $procard_options['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i> </a> </li>

						<?php } ?>

						<?php if(!empty($procard_options['instagram'])){ ?>

						<li class="instagramL"><a href="<?php echo $procard_options['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i> </a> </li>

						<?php } ?>

						<?php if(!empty($procard_options['twitter'])){ ?>

						<li class="twitterL"><a href="<?php echo $procard_options['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i> </a> </li>

						<?php } ?>

	          			<?php if(!empty($procard_options['youtube'])){ ?>

						<li class="you"><a href="<?php echo $procard_options['youtube']; ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> </a> </li>

						<?php } ?>
						

						<?php if(!empty($procard_options['pinterest'])){ ?>

						<li class="pin"><a href="<?php echo $procard_options['pinterest']; ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> </li>

						<?php } ?>

						<?php if(!empty($procard_options['google'])){ ?>

						<li class="google"><a href="<?php echo $procard_options['google']; ?>" target="_blank"><i class="fa fa-google-plus"></i> </a> </li>

						<?php } ?>

					</ul>

				</div>

				<div class="clear"></div>

			<div class="bottomFooter">

				<?php echo $procard_options['copyright']; ?> 

			</div>			

		</div>	

	</section>	

</footer>


<div id="search2" class="full-width-search">
    <button type="button" class="close">×</button>
    <form>
        <?php get_search_form(); ?>
    </form>
</div>


	<?php wp_footer(); ?>

	</body>

</html>