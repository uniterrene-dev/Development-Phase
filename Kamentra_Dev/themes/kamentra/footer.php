<?php
/*
 * The template for displaying the footer
 */
global $kamentra_options; 
?>

	<footer id="footer">
	  <div class="container clearfix">
	    <div class="footer_wrapper1 clearfix">
	      <div class="footer_col_1">
	        <h3>Get Connected</h3>
	        <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => '', 'theme_location' => 'connected-menu' )); ?>
	      </div>
	      <div class="footer_col_1">
	        <h3>Services</h3>
	        <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => '', 'theme_location' => 'services-menu' )); ?>
	      </div>
	      <div class="footer_col_1">
	        <h3>Industries</h3>
	        <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => '', 'theme_location' => 'industry-menu' )); ?>
	      </div>
	      <div class="footer_col_1">
	        <h3>Legal</h3>
	        <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => '', 'theme_location' => 'legal-menu' )); ?>
	      </div>
	      <div class="footer_col_1 footer_last">
	        <h3>Careers</h3>
	        <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => '', 'theme_location' => 'career-menu' )); ?>
	      </div>
	    </div>
	  </div>
	  <div class="footer_wrapper2 clearfix">
	    <div class="container">
	      <div class="email_sub">
	        <ul>
	          <li class="sub_heading">
	            <h3>Email Subscriptions</h3>
	          </li>
	          <li>
	            <form>
	              <input type="text" name="search" value="" class="email_subscription" placeholder="Your Email Address">
	              <button type="submit" value="Submit" class="email_subscription_btn"> <i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
	            </form>
	          </li>
	        </ul>
	      </div>
	      <div class="socila_media">
	        <ul class="socila_icon">
	          <?php if(!empty($kamentra_options['social-title'])){ ?>
	          	<li class="social_icon_heading"><?php echo $kamentra_options['social-title']; ?></li>
	          <?php } ?>
	          <?php if(!empty($kamentra_options['fb-acc'])){ ?>
	          	<li class="facebook_background"><a href="<?php echo $kamentra_options['fb-acc']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
	          <?php } ?>
	          <?php if(!empty($kamentra_options['google-acc'])){ ?>
	          	<li class="google-plus_background"><a href="<?php echo $kamentra_options['google-acc']; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
	          <?php } ?>
	          <?php if(!empty($kamentra_options['twitter-acc'])){ ?>
	          	<li class="twitter_background"><a href="<?php echo $kamentra_options['twitter-acc']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	          <?php } ?>
	          <?php if(!empty($kamentra_options['pin-acc'])){ ?>
	          	<li class="pinterest_background"><a href="<?php echo $kamentra_options['pin-acc']; ?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
	          <?php } ?>
	          <?php if(!empty($kamentra_options['link-acc'])){ ?>
	          	<li class="linkedin_background"><a href="<?php echo $kamentra_options['link-acc']; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
	          <?php } ?>
	        </ul>
	      </div>
	    </div>
	  </div>
	</footer>
	<div section id="footer_bottom">
	  <div class="container">
	    <p><?php echo $kamentra_options['copyright-info']; ?></p>
	  </div>
	</div>
</div><!--overlay ends-->
	<?php wp_footer(); ?>
	</body>
</html>