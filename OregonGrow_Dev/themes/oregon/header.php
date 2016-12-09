<?php
/*
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
<link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/images/favicon.ico">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<title>
<?php bloginfo('name'); ?>
<?php wp_title('::'); ?>
</title>
<!-- <link href="<?php //echo get_template_directory_uri();?>/css/custom.css" rel="stylesheet" type="text/css" />
   <link href="<?php //echo get_template_directory_uri();?>/css/responsive.css" rel="stylesheet" type="text/css" /> -->
<?php wp_head(); ?>
<?php global $oregon_options; ?>
</head>
<body <?php body_class(); ?>>
<?php if(is_front_page()){ ?>
<nav id="fixedNav">
  <div id="nav-anchor"></div>
  <ul>
    <li><a href="#header" class="active" title="Home"></a></li>
    <li><a href="#introduction" title="Introduction"></a></li>
    <li><a href="#models" title="Models"></a></li>
    <li><a href="#product_highlight" title="Product Highlights"></a></li>
    <li><a href="#tech_details" title="Technical Details"></a></li>
    <li><a href="#technical_highlight" title="Technical Highlights"></a></li>
    <li><a href="#subscription" title="Email Subscription"></a></li>
    <li><a href="#faqs" title="FAQs"></a></li>
    <li><a href="#models_repeat" title="Models"></a></li>
    <li><a href="#contact" title="Contact Us"></a></li>
  </ul>
</nav>
<?php } ?>
<header id="header"> 
  <!-- logo -->
  <div class="logo_area"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('title'); ?>">
    <?php if(!empty($oregon_options['logo'])) { ?>
    <img src="<?php echo $oregon_options['logo']['url']; ?>">
    <?php } ?>
    </a> </div>
  <!-- Cart -->
  <?php 
  	if( is_front_page() ){
  ?>
  <a href="<?php echo wc_get_cart_url(); ?>">
  <div class="cartPlace">  	
    	<div class="cart_top">
           <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
        	<span class="cart_val">
		  <?php echo $woocommerce->cart->cart_contents_count; ?> </span> 
     	</div>
  </div>
  </a> 
  <?php
	}else {
  ?>
  <a href="<?php echo wc_get_cart_url(); ?>">
  <div class="cartPlace_inner">  	
    	<div class="cart_top"> 
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
        <span class="cart_val"><?php echo $woocommerce->cart->cart_contents_count; ?> </span> 
     	</div>    
  </div>
  </a> 
  <?php
	}
  ?>
  <!-- banner header -->
  <div class="head_text"> <?php echo $oregon_options['home-content']; ?> </div>
  <div class="down_arrow"> <a class="circle" href="#introduction"><img src="<?php echo bloginfo('template_directory'); ?>/images/downarrow.png"></a> </div>
  
  <!-- social -->
  <div class="social_area">
    <ul>
      <?php if(!empty($oregon_options['facebook'])){ ?>
      <li><a href="<?php echo $oregon_options['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
      <?php } ?>
      <?php if(!empty($oregon_options['twitter'])){ ?>
      <li><a href="<?php echo $oregon_options['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
      <?php } ?>
      <?php if(!empty($oregon_options['pinterest'])){ ?>
      <li><a href="<?php echo $oregon_options['pinterest']; ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
      <?php } ?>
    </ul>
  </div>
</header>
<!-- top portion -->