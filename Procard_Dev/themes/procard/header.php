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
   <!-- <link href="<?php //echo get_template_directory_uri();?>/css/custom.css" rel="stylesheet" type="text/css" />
   <link href="<?php //echo get_template_directory_uri();?>/css/responsive.css" rel="stylesheet" type="text/css" /> -->
   <?php wp_head(); ?>
   <?php global $procard_options; ?>
</head>
<body <?php body_class(); ?>>
    <!-- header start -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('title'); ?>">
                    <?php if(!empty($procard_options['logo'])) { ?> <img src="<?php echo $procard_options['logo']['url']; ?>"> <?php } ?>
                </a>
            </div>
            <div class="menu">
                <nav>
                    <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'main_menu', 'menu_id' => 'forResponsiveMenu', 'theme_location' => 'header-menu', 'link_before' => '<span>', 'link_after' => '</span>', )); ?>
                    <ul class="social">
                     
                        <li class="searchLi" for="search_box"><a href="#search2"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <?php if(!empty($procard_options['woo-account'])) { ?>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo $procard_options['woo-account']; ?>"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <?php } ?>
                            <?php if(!empty($procard_options['woo-cart'])) { ?>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo $procard_options['woo-cart']; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                <?php } ?>
                                <li class="responsiveMenu"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- header ends -->
            <?php if(is_front_page()){ ?>
                <!-- slider section -->
                <section class="sliderSection"> 
                    <div class="overlaysecton">
                        <div class="displayTable">
                            <div class="displayTableCell">
                                <div class="overlayinnerHolder">
                                    <div class="overlayinner">
                                        <div class="content">
                                            <?php if(!empty($procard_options['banner_logo'])) { ?> <img src="<?php echo $procard_options['banner_logo']['url']; ?>"> <?php } ?>
                                            <h1>
                                                <?php echo $procard_options['banner_content']; ?>
                                            </h1>
                                            <?php if(!empty($procard_options['banner_btn_link'])){ ?>
                                                <div class="btnHold">
                                                    <a href="<?php echo $procard_options['banner_btn_link']; ?>" class="shop_Now"><span> <?php echo $procard_options['banner_btn_text']; ?></span></a>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="MainSlider">
                            <div class="slider-container">
                              <div class="slider" id="slider">
                                <?php
                    //print_r($procard_options['banner']);
                                if (isset($procard_options['banner']) && !empty($procard_options['banner'])) 
                                {
                                    foreach ($procard_options['banner'] as $value) {
                                        echo "<div class='slide'>";
                                        echo '<img src="'.$value['image'].'"/>';
                                        echo "</div>";
                                    }                                   
                                }
                                ?>
                            </div>
                            <a href="" class="switch" id="prev"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span></a> 
                            <a href="" class="switch" id="next"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> 
                        </div>
                    </div>
                </section>
                <section class="slider_bottom_border"></section>
                <section class="figure_slider clearfix">
                    <div class="container">
                        <ul id="flexiselDemo3">
                            <?php
                            $args = array( 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date', );
                            $the_query = new WP_Query( $args ); 
                            while ($the_query -> have_posts()) : $the_query -> the_post();
                            ?>
                            <li><a href="<?php the_permalink(); ?>">
                                <div class="itemInner">
                                <div class="home_page_slide_img">
                                    <?php
                                    if ( has_post_thumbnail() ) { 
                                        the_post_thumbnail( 'post-slide' );
                                    }
                                    else { ?>
                                        <?php _e( 'Sorry, no image found' ); ?>
                                        <?php }
                                        ?>
                                        </div>
                                        <p>
                                            <?php 
                                            $title  = the_title('','',false);
                                            if(strlen($title) > 20):
                                                echo trim(substr($title, 0, 15)).'...';
                                            else:
                                                echo $title;
                                            endif;
                                            ?>
                                        </p>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>                    
                        <?php wp_reset_query(); ?>                                               
                    </ul> 
                </div>
            </section>
            <?php } ?>