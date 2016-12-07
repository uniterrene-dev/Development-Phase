<?php

/*

 * The template for displaying the footer

 */

global $vrsp_options; 

?>

<footer>
  <section id="footer" class="footer-div">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="footer-menu">
            <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => '', 'menu_id' => '', 'theme_location' => 'footer-menu' )); ?>
          </div>
          <div class="footer-social-icon">
            <ul>
              <?php if(!empty($vrsp_options['facebook'])){ ?>
		        <li> <a href="<?php echo $vrsp_options['facebook']; ?>" class="fb" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
		        <?php } ?>
            <?php if(!empty($vrsp_options['instagram'])){ ?>
        <li> <a href="<?php echo $vrsp_options['instagram'] ?>" class="ins" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
        <?php } ?>
		        <?php if(!empty($vrsp_options['twitter'])){ ?>
		        <li> <a href="<?php echo $vrsp_options['twitter'] ?>" class="ins" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
		        <?php } ?>
		        <?php if(!empty($vrsp_options['linkedin'])){ ?>
		        <li> <a href="<?php echo $vrsp_options['linkedin']; ?>" class="link" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
		        <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="copy-right" class="copy-right-div">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        <?php if(!empty($vrsp_options['copyright'])){ ?>
	          <?php echo $vrsp_options['copyright']; ?>
	        <?php } ?>
        </div>
      </div>
    </div>
  </section>
</footer>


	<?php wp_footer(); ?>

	</body>

</html>