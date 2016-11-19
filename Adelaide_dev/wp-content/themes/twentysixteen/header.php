<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<?php wp_head(); ?>
<meta charset="utf-8">
<title>Adelaide | Home</title>
<link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/flSlide/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>css/superslides.css">

</head>
<body>
<div class="fixedChat">
   <h3><i class="fa fa-comments-o" aria-hidden="true"></i> CHAT WITH US</h3>

</div>
<header id="header" class="aa">
  <div class="container clearfix">
    <div class="logo"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" ></a> </div>
    <div class="right-header">
      <div class="menu">
        <ul class="clearfix">
          <li><a href="#">HOME</a></li>
          <li><a href="#">FLEET</a></li>
          <li><a href="#">SERVICES</a></li>
          <li><a href="#">BOOKING</a></li>
          <li><a href="#">JOIN US</a></li>
          <li><a href="#">CONTACT US</a></li>
        </ul>
      </div>
      <div class="menuForResponsive">
        <ul class="clearfix">
          <li><a href="#">HOME</a></li>
          <li><a href="#">FLEET</a></li>
          <li><a href="#">SERVICES</a></li>
          <li><a href="#">BOOKING</a></li>
          <li><a href="#">JOIN US</a></li>
          <li><a href="#">CONTACT US</a></li>
        </ul>
      </div>
      <a href="#" class="chatLink">
      <div class="chat-icon">
        <div class="font-chat"> <i class="fa fa-comments-o" aria-hidden="true"></i> </div>
        <div class="chat-section">
          <h4>Chat with us</h4>
          <h5>24x7</h5>
        </div>
      </div>
      </a>
      <div class="responsiveMenu">
        <img src="<?php echo get_template_directory_uri(); ?>/images/menu.png">
      </div>
    </div>
  </div>
</header>

