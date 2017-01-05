<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
<title>Lavish</title>
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() )?>/css/custom.css">
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() )?>/css/responsive.css">
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() )?>/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/normalize.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/styles.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/jquery.bxslider.css" >
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/jquery_dropdown.css">

</head>

<body>
<header>
<div class="top-nav">
    <div class="container">
        <div class="top-nav">
            <ul>
                <li><span> <i class="fa fa-unlock-alt" aria-hidden="true"></i> </span><a href="#">MEMBERS LOUNGE</a></li>
                <li><a href="#">RATES</a></li>
                <li><a href="#" id="show-city-list">EXOTIC FANTASIES</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="second-nav">
    <div class="container clearfix">
       <div class="header-logo"> <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/header-logo.png" alt="logo" title="logo image"></a>
       </div>
        <div class="main-nav">
            <ul>
                <li><a href="#" id="show-lady_menu">ESCORT LADIES</a></li>
                <li><a href="#">RATES & BOOKING</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">JOBS</a></li>
            </ul>
        </div>
    </div>
</div>

</header>
<div class="index-slide">
    <ul class="target-slider">
            <li>
              <a href="#">
                    <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/slider-1.jpg" alt="slider1" title="banner slider">
                </a>
            </li>
            <li>
               
				<video width="100%" height="650px" controls autoplay>
					<source src="<?php echo esc_url( get_template_directory_uri() )?>/video/movie.mp4" type="video/mp4">
						<source src="<?php echo esc_url( get_template_directory_uri() )?>/video/movie.ogg" type="video/ogg">
                  
                </video>
               
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/slider-2.jpg" alt="slider3" title="banner slider">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/slider-3.jpg" alt="slider14" title="banner slider">
                </a>
                    </li>
        </ul>
        <div class="slide-content">
          <div class="big-button-slide">
            <a href="#">Meet Our Ladies</a>
          </div>
        </div>
</div>

