<?php
/*
 * The template for displaying the footer
 */
global $oregon_options; 
?>

<section id="contact">
    	<div class="container">
    		<div class="row">
    			<h3 class="sec_head">
    				CONTACT US
    			</h3>
    		</div>
    		<div class="row clearfix">
    			<!--<div class="contact_box">
    				<div class="row clearfix">
    					<div class="icon"><i class="fa fa-map-marker"></i></div>
    					<div class="content">
    						<h4>Our Address</h4>
    						<p><?php echo $oregon_options['address']; ?></p>
    					</div>
    				</div>
    				<div class="row clearfix">
    					<div class="icon"><i class="fa fa-phone"></i></div>
    					<div class="content">
    						<h4>Phone Number</h4>
    						<p><?php echo $oregon_options['phone']; ?></p>
    					</div>
    				</div>
    				<div class="row clearfix">
    					<div class="icon"><i class="fa fa-envelope"></i></div>
    					<div class="content">
    						<h4>Email </h4>
    						<p><?php echo $oregon_options['mail']; ?></p>
    					</div>
    				</div>
    			</div>-->
    			<div class="contact_box">
    				<div class="row clearfix">
    					<div class="icon">
    						<i class="fa fa-user"></i>
    					</div>
    					<div class="head">
    						<h4>Reach to Us</h4>
    					</div>

    				</div>
    				<div class="row">
    					<?php echo do_shortcode('[contact-form-7 id="12" title="Contact Form"]'); ?>
    				</div>
    			</div>
    			<div class="contact_box">
    				<div class="row clearfix">
    					<div class="icon">
    						<i class="fa fa-paper-plane"></i>
    					</div>
    					<div class="head">
    						<h4>Socialize with Us</h4>
    					</div>
   
    				</div>
    				<div class="row">
    					<ul>
    						<?php if(!empty($oregon_options['facebook'])){ ?>
			                <li><a href="<?php echo $oregon_options['facebook']; ?>" target="_blank"><span><i class="fa fa-facebook"></i></span> facebook</a></li>
			                <?php } ?>
			                <?php if(!empty($oregon_options['twitter'])){ ?>
			                <li><a href="<?php echo $oregon_options['twitter']; ?>" target="_blank"><span><i class="fa fa-twitter"></i></span> twitter</<a></li>
			                <?php } ?>
			                <?php if(!empty($oregon_options['pinterest'])){ ?>
			                <li><a href="<?php echo $oregon_options['pinterest']; ?>" target="_blank"><span><i class="fa fa-pinterest"></i></span> pinterest</a></li>
			                <?php } ?>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</div>
    </section><!-- contact us --> 

    <footer>
    	<div class="container">
    		<p><?php echo $oregon_options['copyright']; ?></p>
    	</div>
    </footer>

    <div class="uparrow">
    	<a href="#"><img src="<?php echo bloginfo('template_directory'); ?>/images/up_arrow.png"></a>
    </div>

	<?php wp_footer(); ?>

	</body>
</html>