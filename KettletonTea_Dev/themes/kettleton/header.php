<?php
/*
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
       <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
   <?php endif; ?>
   <title><?php bloginfo('name'); ?> <?php wp_title('::'); ?></title>

   <?php wp_head(); ?>
   <?php global $kettleton_options; ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="topHeader">
            <div class="container clearfix">
                <ul class="leftUl">
                    <?php if( !empty($kettleton_options['phone']) ){ ?>
                    <li><a href="tel:<?php echo $kettleton_options['phone_call']; ?>"> <i class="fa fa-phone"></i> <?php echo $kettleton_options['phone']; ?></a></li>
                    <?php } ?>
                    <?php if( !empty($kettleton_options['mail']) ){ ?>
                    <li><a href="mailto:<?php echo $kettleton_options['mail']; ?>"> <i class="fa fa-envelope"></i> <?php echo $kettleton_options['mail']; ?></a></li>
                    <?php } ?>
                </ul>
                
                <ul class="rightUl">
                    <li class="responsive_search search" id="measure_search"><a href="#search"> <i class="fa fa-search"></i></a></li>
                    <?php if( !empty($kettleton_options['facebook']) ){ ?>
                    <li><a href="<?php echo $kettleton_options['facebook']; ?>" target="_blank"> <i class="fa fa-facebook"></i></a></li>
                    <?php } ?>
                    <?php if( !empty($kettleton_options['twitter']) ){ ?>
                    <li><a href="<?php echo $kettleton_options['twitter']; ?>" target="_blank"> <i class="fa fa-twitter"></i></a></li>
                    <?php } ?>
                    <?php if( !empty($kettleton_options['linkedin']) ){ ?>
                    <li> <a href="<?php echo $kettleton_options['linkedin']; ?>" target="_blank"> <i class="fa fa-linkedin"></i> </a> </li>
                    <?php } ?>
                    <?php if( !empty($kettleton_options['google']) ){ ?>
                    <li><a href="<?php echo $kettleton_options['google']; ?>" target="_blank"> <i class="fa fa-google-plus"></i></a></li>
                    <?php } ?>
                    <?php if( !empty($kettleton_options['pinterest']) ){ ?>
                    <li><a href="<?php echo $kettleton_options['pinterest']; ?>" target="_blank"> <i class="fa fa-pinterest"></i></a></li>
                    <?php } ?>
                    <li class="forCart"><a href="<?php echo wc_get_cart_url(); ?>"> <i class="fa fa-shopping-cart"> <span class="cart_val"> <?php echo $woocommerce->cart->cart_contents_count; ?> </span> </i> </a></li>
                </ul>
            </div>
        </div>
  
        <!--top header ends-->
        <div class="bottomHeader">
            <div class="container clearfix">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('title'); ?>">
                        <?php if(!empty($kettleton_options['logo'])) { ?> <img src="<?php echo $kettleton_options['logo']['url']; ?>"> <?php } ?>
                    </a>
                </div>
          
                <div class="navMenu">
                    <nav>
                        <div class="responsiveMenu"> 
                            <a href="javascript:void(0)"><i class="fa fa-bars" aria-hidden="true"></i></a> 
                        </div>
                          
                        <ul>
                            <div class="close" title="close"> <i class="fa fa-close"></i> </div>

                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'link_before' => '<span>', 'link_after' => '</span>', )); ?>

                            <li class="cartPlace">
                              <div class="cart"><a href="<?php echo wc_get_cart_url(); ?>"> <i class="fa fa-shopping-cart"> <span class="cart_val"> <?php echo $woocommerce->cart->cart_contents_count; ?> </span> </i> </a> </div>
                            </li>
                            <li class="search res_search" id="measure_search"><a href="#search"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div id="search">
            <button type="button" class="close-search">×</button>
            <!-- <form>
                <input type="search" value="" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-success">Go for Search</button>
            </form> -->
            <?php get_search_form(); ?>
        </div>
        <!-- search end-->
    </header>
    <!--header end--> 