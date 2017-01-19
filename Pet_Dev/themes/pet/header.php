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
   <?php global $pet_options; ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="top">
                <div class="top_inner clearfix">
                    <div class="f_left">
                        <ul class="left_list clearfix">
                            <li><a href="#"><i class="fa  fa-edit "></i> submit a post</a></li>
                            <li>
                                <?php
                                if(is_user_logged_in()){ ?>
                                    <a href="<?php echo wp_logout_url(home_url()); ?> ">logout</a>
                                <?php }                                
                                else{ ?>
                                <a href="<?php echo wp_login_url(); ?>"><i class="fa  fa-sign-in "></i> login</a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                    <div class="f_right">
                        <ul class="social clearfix">
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
                </div>
            </div>
            <div class="middle clearfix">
                    <div class="hamburger">
                        <a href="javascript:void(0);" class="hamburger_acchor">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>    
                    </div>
                <div class="clearfix">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"">
                            <?php if(!empty($pet_options['logo'])) { ?> <img src="<?php echo $pet_options['logo']['url']; ?>"> <?php } ?>
                        </a>
                    </div>
                    <nav class="clearfix">
                        <a href="#" class="cross"><i class="fa fa-times"></i></a>
                        <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => '', 'menu_id' => '', 'theme_location' => 'header-menu', 'link_before' => '<span>', 'link_after' => '</span>', )); ?>
                    </nav>
                    <div class="search clearfix">
                        <div class="search_bar_area">
                            <form action="#" method="post" class="clearfix">
                                <input type="text" name="" placeholder="Search"><button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <?php //get_search_form(); ?>
                        </div>
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>            
       </div>   
    </header>