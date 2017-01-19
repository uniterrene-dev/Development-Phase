<?php
/*
 * The template for displaying the footer
 */
global $pet_options; 
?>

	<footer>
    	<div class="container footer">
    		<div class="footer_top">
    			<h4>EXPLORE SELECTIONS</h4>
    			<?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'top', 'menu_id' => '', 'theme_location' => 'footer-menu', 'link_before' => '<span>', 'link_after' => '</span>', )); ?>
    		</div>
    		<div class="bottom">
    			<div class="social_area">
    				<ul class="social">
    					<?php if( !empty($pet_options['facebook']) ){ ?>
						<li><a href="<?php echo $pet_options['facebook']; ?>" target="_blank" title="Follow us on Facebook"><i class="fa fa-facebook"></i></a></li>
						<?php } ?>
						<?php if( !empty($pet_options['twitter']) ){ ?>
    					<li><a href="<?php echo $pet_options['twitter']; ?>" target="_blank" title="Follow us on Twitter"><i class="fa fa-twitter"></i></a></li>
    					<?php } ?>
    					<?php if( !empty($pet_options['pinterest']) ){ ?>
    					<li><a href="<?php echo $pet_options['pinterest']; ?>" target="_blank" title="Follow us on Pinterest"><i class="fa fa-pinterest"></i></a></li>
    					<?php } ?>
    					<?php if( !empty($pet_options['instagram']) ){ ?>
    					<li><a href="<?php echo $pet_options['instagram']; ?>" target="_blank" title="Follow us on Instagram"><i class="fa fa-instagram"></i></a></li>
    					<?php } ?>
    					<?php if( !empty($pet_options['mail']) ){ ?>
    					<li><a href="mailto:<?php echo $pet_options['mail']; ?>" title="Mail us"><i class="fa fa-envelope"></i></a></li>
    					<?php } ?>
    				</ul>
    			</div>
    			<div class="footer_logo">
    				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('title'); ?>">
                            <?php if(!empty($pet_options['logo-foot'])) { ?> <img src="<?php echo $pet_options['logo-foot']['url']; ?>"> <?php } ?>
                        </a>
    				<p><?php echo $pet_options['copyright']; ?></p>
    			</div>
    			<div class="newsletter">
    				<h4>Get Our Newsletter</h4>
    				<div class="news_form">
    					<input type="email" name="" placeholder="Enter Email ID">
    					<button class="submit" type="submit">SUBMIT</button>

    				</div>
    			</div>
    		</div>
    	</div>
    </footer>

	<?php wp_footer(); ?>

	</body>

</html>