<?php
/*
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
       <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
   <?php endif; ?>
   <title><?php bloginfo('name'); ?> <?php wp_title('::'); ?></title>
   <?php wp_head(); ?>
   <?php global $vrsp_options; ?>
</head>
<body <?php body_class(); ?>>

    <div class="mobile-social">
      <ul>
        <?php if(!empty($vrsp_options['facebook'])){ ?>
        <li> <a href="<?php echo $vrsp_options['facebook']; ?>" class="fb" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
        <?php } ?>
        <?php if(!empty($vrsp_options['instagram'])){ ?>
        <li> <a href="<?php echo $vrsp_options['instagram'] ?>" class="ins" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
        <?php } ?>
        <?php if(!empty($vrsp_options['linkedin'])){ ?>
        <li> <a href="<?php echo $vrsp_options['linkedin']; ?>" class="link" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
        <?php } ?>
      </ul>
    </div>
    <header>
      <section id="header-part" class="header-div">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="header-top-left">
                    <?php if(!empty($vrsp_options['phone_call'])){ ?>
                    <div class="phone-number"><span><i class="fa fa-phone" aria-hidden="true"></i></span>Questions? Call us: <a href="tel:<?php echo $vrsp_options['phone_call']; ?>"><?php echo $vrsp_options['phone']; ?></a></div>
                    <?php } ?>
                    <?php if(!empty($vrsp_options['email'])){ ?>
                    <div class="enquery"><a href="mailto:<?php echo $vrsp_options['email']; ?>"><span><i class="fa fa-envelope" aria-hidden="true"></i></span>Enquire Now!!</a></div>
                    <?php } ?>
                   
                </div>
              </div>
              <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="header-top-social"> <span> Follow Us On: </span>
                  <ul>
                    <?php if(!empty($vrsp_options['facebook'])){ ?>
                    <li> <a href="<?php echo $vrsp_options['facebook']; ?>" class="fb" target="_blank"> <i class="fa fa-facebook" aria-hidden="true" target="_blank"></i> </a></li>
                    <?php } ?>
                    <?php if(!empty($vrsp_options['instagram'])){ ?>
                    <li> <a href="<?php echo $vrsp_options['instagram']; ?>" class="ins" target="_blank"> <i class="fa fa-instagram" aria-hidden="true" target="_blank"></i> </a></li>
                    <?php } ?>
                    <?php if(!empty($vrsp_options['linkedin'])){ ?>
                    <li> <a href="<?php echo $vrsp_options['linkedin']; ?>" class="link" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true" target="_blank"></i> </a></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-bottom steky-div">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="logo"> 
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php if(!empty($vrsp_options['logo'])) { ?> <img src="<?php echo $vrsp_options['logo']['url']; ?>" class="img-responsive"> <?php } ?>
                    </a>
                </div>
                <div class="navigation">
                  <nav class="navbar navbar-default"> 
                    
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                      <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'nav navbar-nav', 'menu_id' => '', 'theme_location' => 'header-menu', 'link_before' => '<span>', 'link_after' => '</span>', )); ?>
                    </div>
                    <!-- /.navbar-collapse --> 
                    
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>